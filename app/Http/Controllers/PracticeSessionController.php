<?php

namespace App\Http\Controllers;

use App\Models\PracticeSession;
use Illuminate\Http\Request;

class PracticeSessionController extends Controller
{
    public function index()
    {
        $sessions = PracticeSession::orderBy('day')->get();
        return view('practice-sessions.index', compact('sessions'));
    }

    public function show($id)
    {
        $session = PracticeSession::findOrFail($id);
        return view('practice-sessions.show', compact('session'));
    }
}
