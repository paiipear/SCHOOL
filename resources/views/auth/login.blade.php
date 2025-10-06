<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | SMKN 1 Depok</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at center, rgba(96,165,250,0.15), rgba(255,255,255,1) 70%);
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center">

  <div class="flex bg-white rounded-2xl shadow-2xl overflow-hidden max-w-4xl w-full">
    
    <div class="hidden md:flex flex-col items-center justify-center w-1/2 bg-gradient-to-br from-blue-400 to-indigo-500 text-white p-10 relative">
      <div class="absolute inset-0 bg-gradient-to-br from-indigo-300/30 to-blue-600/40 mix-blend-overlay"></div>
      <h2 class="text-4xl font-bold z-10 tracking-wide">Welcome Back!</h2>
    </div>

    <div class="w-full md:w-1/2 p-10 relative">
      <div class="flex flex-col items-center mb-6">
        <div class="bg-blue-100 p-3 rounded-full mb-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-500" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 12c2.67 0 8 1.34 8 4v4H4v-4c0-2.66 5.33-4 8-4z"/>
            <circle cx="12" cy="7" r="4"/>
          </svg>
        </div>
        <h2 class="text-2xl font-semibold text-blue-600">LOGIN</h2>
      </div>

      <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Username -->
        <div>
          <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4"/>
              </svg>
            </span>
            <input type="text" name="username" id="username" placeholder="Masukkan Username"
              class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-300 focus:outline-none">
          </div>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 2a6 6 0 00-6 6v3H3a1 1 0 000 2h14a1 1 0 000-2h-1V8a6 6 0 00-6-6z"/>
              </svg>
            </span>

            <input
              type="password"
              name="password"
              id="password"
              placeholder="Masukkan Password"
              class="w-full pl-10 pr-12 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-300 focus:outline-none"
            >

            <button
              type="button"
              id="togglePassword"
              aria-pressed="false"
              class="absolute inset-y-0 right-0 flex items-center pr-3"
            >
              <svg id="iconEye" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              <svg id="iconEyeOff" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.05 10.05 0 012.872-4.042M6.11 6.11A9.969 9.969 0 0112 5c4.477 0 8.268 2.943 9.542 7a10.05 10.05 0 01-4.132 5.054M3 3l18 18"/>
              </svg>
            </button>
          </div>
        </div>

        <!-- Tombol login -->
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 transition">
          LOGIN
        </button>

      </form>
    </div>
  </div>

  <script>
    (function() {
      const pwd = document.getElementById('password');
      const toggle = document.getElementById('togglePassword');
      const eye = document.getElementById('iconEye');
      const eyeOff = document.getElementById('iconEyeOff');

      toggle.addEventListener('click', function() {
        const isHidden = pwd.type === 'password';
        pwd.type = isHidden ? 'text' : 'password';
        toggle.setAttribute('aria-pressed', String(isHidden));
        eye.classList.toggle('hidden', !isHidden);
        eyeOff.classList.toggle('hidden', isHidden);
      });
    })();
  </script>

</body>
</html>
