<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\PracticeSession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $practiceSessionsCount = PracticeSession::count();
        $articlesCount = Article::count();
        $usersCount = User::count();

        return view('admin.dashboard', compact('practiceSessionsCount', 'articlesCount', 'usersCount'));
    }

    // Practice Sessions Management
    public function practiceSessions()
    {
        $practiceSessions = PracticeSession::orderBy('day')->paginate(10);
        return view('admin.practice-sessions.index', compact('practiceSessions'));
    }

    public function showPracticeSession(PracticeSession $practiceSession)
    {
        return view('admin.practice-sessions.show', compact('practiceSession'));
    }

    public function createPracticeSession()
    {
        return view('admin.practice-sessions.create');
    }

    public function storePracticeSession(Request $request)
    {
        $request->validate([
            'day' => 'required|integer|unique:practice_sessions',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tips' => 'required|string',
        ]);

        PracticeSession::create($request->all());

        return redirect()->route('admin.practice-sessions.index')->with('success', 'Practice session created successfully.');
    }

    public function editPracticeSession(PracticeSession $practiceSession)
    {
        return view('admin.practice-sessions.edit', compact('practiceSession'));
    }

    public function updatePracticeSession(Request $request, PracticeSession $practiceSession)
    {
        $request->validate([
            'day' => 'required|integer|unique:practice_sessions,day,' . $practiceSession->id,
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tips' => 'required|string',
        ]);

        $practiceSession->update($request->all());

        return redirect()->route('admin.practice-sessions.index')->with('success', 'Practice session updated successfully.');
    }

    public function destroyPracticeSession(PracticeSession $practiceSession)
    {
        $practiceSession->delete();
        return redirect()->route('admin.practice-sessions.index')->with('success', 'Practice session deleted successfully.');
    }

    // Articles Management
    public function articles()
    {
        $articles = Article::latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function createArticle()
    {
        return view('admin.articles.create');
    }

    public function storeArticle(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,avi|max:10240',
        ]);

        $data = $request->only(['title', 'content']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('articles/images', 'public');
        }

        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')->store('articles/videos', 'public');
        }

        Article::create($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    public function editArticle(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function updateArticle(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,avi|max:10240',
        ]);

        $data = $request->only(['title', 'content']);

        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $data['image'] = $request->file('image')->store('articles/images', 'public');
        }

        if ($request->hasFile('video')) {
            if ($article->video) {
                Storage::disk('public')->delete($article->video);
            }
            $data['video'] = $request->file('video')->store('articles/videos', 'public');
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroyArticle(Article $article)
    {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }
        if ($article->video) {
            Storage::disk('public')->delete($article->video);
        }

        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }

    // Users Management
    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $data = $request->only(['name', 'email']);

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function destroyUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
