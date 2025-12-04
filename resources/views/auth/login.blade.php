<x-guest-layout>
    <div class="min-h-screen flex bg-gradient-to-br from-blue-50 to-blue-100">

        <!-- Left Side -->
        <div class="hidden lg:flex w-1/2 flex-col justify-center items-center p-12 bg-blue-600 text-white relative">
            
            <!-- Soft Circle Decoration -->
            <div class="absolute -top-20 -left-20 w-72 h-72 bg-blue-500 rounded-full opacity-20"></div>
            <div class="absolute bottom-10 right-10 w-48 h-48 bg-blue-400 rounded-full opacity-20"></div>

            <!-- Logo -->
            @if($webSetting && $webSetting->logo)
                <img src="{{ asset('storage/' . $webSetting->logo) }}" alt="{{ $webSetting->site_name ?? 'Logo' }}" class="w-68 h-auto mb-6 drop-shadow-xl">
            @else
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-68 h-auto mb-6 drop-shadow-xl">
            @endif

            <!-- Branding -->
            <h1 class="text-4xl font-bold tracking-wide text-center">
                Stammering Practice Program
            </h1>
            <p class="mt-4 text-lg text-blue-100 text-center max-w-sm">
                40 Days • Daily 1 Hour • Improve fluency with guided speech exercises.
            </p>
        </div>

        <!-- Right Side -->
        <div class="flex items-center justify-center w-full lg:w-1/2 p-8">
            <div class="w-full max-w-md bg-white p-8 shadow-xl rounded-xl">

                <!-- Heading -->
                <h2 class="text-3xl font-semibold text-center text-blue-700 mb-2">Welcome Back</h2>
                <p class="text-center text-gray-500 mb-6">
                    Sign in to continue your stammering improvement journey
                </p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label class="text-sm font-medium text-gray-700">Email</label>
                        <input id="email" type="email" name="email" required autofocus
                            class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your email" value="{{ old('email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="text-sm font-medium text-gray-700">Password</label>
                        <input id="password" type="password" name="password" required
                            class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center space-x-2 text-sm">
                            <input type="checkbox" name="remember" class="rounded text-blue-600">
                            <span>Remember me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm text-blue-600 hover:underline">
                                Forgot Password?
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <button type="submit"
                        class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition">
                        Sign In
                    </button>

                </form>

            </div>
        </div>
    </div>
</x-guest-layout>
