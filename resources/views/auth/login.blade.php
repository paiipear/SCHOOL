<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-50">

  <div class="w-full max-w-sm bg-white rounded-2xl shadow-lg p-8 animate-fadeIn">
    <h2 class="text-2xl font-bold text-center text-amber-600 mb-6">Login Siswa</h2>

    {{-- Error message --}}
    @if ($errors->any())
      <div class="bg-red-100 text-red-700 p-2 mb-4 text-center rounded-md">
        {{ $errors->first('login') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
      @csrf
      
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 1114 0H3z"/>
            </svg>
          </span>
          <input id="username" 
                 name="username" 
                 type="text" 
                 value="{{ old('username') }}"
                 required autofocus
                 class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none @error('username') border-red-500 @enderror"
                 placeholder="Masukkan username / NISN">
        </div>
        @error('username')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 2a6 6 0 00-6 6v3H3a1 1 0 000 2h14a1 1 0 000-2h-1V8a6 6 0 00-6-6z"/>
            </svg>
          </span>
          <input id="password" 
                 name="password" 
                 type="password" 
                 required
                 class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none @error('password') border-red-500 @enderror"
                 placeholder="Masukkan password">
        </div>
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
              class="w-full py-2 px-4 bg-amber-600 text-white font-semibold rounded-lg shadow hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition">
        Login
      </button>
    </form>
  </div>

</html>
