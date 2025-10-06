<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Kelulusan | SMKN 1 Depok</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body {
      font-family: 'Poppins', sans-serif;
    }
</style>
<body class="min-h-screen bg-gradient-to-b from-blue-50 via-white to-gray-50 flex flex-col ">

  <!-- Navbar -->
  <header class="bg-white/80 backdrop-blur-md border-b border-gray-200 fixed top-0 w-full z-50 shadow-sm">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-xl font-bold text-gray-700">SMKN 1 DEPOK</h1>
      <nav class="space-x-6 text-gray-700 font-medium">
        <a href="#" class="hover:text-blue-500 transition">Beranda</a>
        <a href="#tentang" class="hover:text-blue-500 transition">Tentang</a>
        <a href="#kontak" class="hover:text-blue-500 transition">Kontak</a>
        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-6 py-2 rounded-3xl hover:from-blue-500 hover:to-blue-600 transition shadow-md">
          Login
        </a>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="flex-1 flex flex-col items-center justify-center text-center px-6 pt-32 pb-24">
    <div class="max-w-2xl">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-5 leading-tight ">
        Cek <span class="text-blue-500">Nilai Kelulusan</span> Kamu Sekarang!
      </h2>
      <p class="text-gray-600 text-lg mb-10">
        Portal resmi SMKN 1 Depok untuk pengumuman hasil kelulusan siswa.  
        Login dengan akun yang sudah terdaftar untuk melihat hasilmu.
      </p>
      <a href="{{ route('login') }}" class="bg-gradient-to-r from-blue-400 to-blue-500 text-white px-8 py-3 rounded-lg font-semibold hover:from-blue-500 hover:to-blue-600 transition shadow-md">
        Masuk Sekarang
      </a>
    </div>
  </section>

  <!-- Divider -->
  <div class="h-px bg-gray-200/50 w-4/5 mx-auto"></div>

  <!-- Info -->
  <section id="tentang" class="py-20 bg-white/70 backdrop-blur-sm">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-10 text-center">
      <div class="p-8 rounded-xl bg-gray-50 hover:shadow-lg transition-all duration-300">
        <h3 class="font-semibold text-gray-800 text-lg mb-2">Resmi & Akurat</h3>
        <p class="text-gray-600 text-sm">Data kelulusan langsung dari sistem sekolah, dijamin keasliannya.</p>
      </div>
      <div class="p-8 rounded-xl bg-gray-50 hover:shadow-lg transition-all duration-300">
        <h3 class="font-semibold text-gray-800 text-lg mb-2">Cepat & Praktis</h3>
        <p class="text-gray-600 text-sm">Akses hasil kelulusan hanya dengan beberapa klik, tanpa antre.</p>
      </div>
      <div class="p-8 rounded-xl bg-gray-50 hover:shadow-lg transition-all duration-300">
        <h3 class="font-semibold text-gray-800 text-lg mb-2">Responsif</h3>
        <p class="text-gray-600 text-sm">Cocok diakses dari HP maupun laptop dengan tampilan yang rapi.</p>
      </div>
    </div>
  </section>

  <!-- Divider -->
  <div class="h-px bg-gray-200/50 w-4/5 mx-auto"></div>

  <!-- Kontak -->
  <section id="kontak" class="relative py-24 bg-gradient-to-b from-gray-50 via-blue-50/30 to-white overflow-hidden">
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-[500px] h-[500px] bg-blue-200 rounded-full blur-3xl opacity-20"></div>
    <div class="max-w-6xl mx-auto text-center px-6 relative z-10">
      
      <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h3>
      <p class="text-gray-600 max-w-2xl mx-auto mb-14">
        Jika kamu memiliki pertanyaan mengenai hasil kelulusan atau kendala saat login,  
        jangan ragu untuk menghubungi pihak sekolah melalui kontak di bawah ini.
      </p>

      <div class="grid md:grid-cols-3 gap-10">
        
        <!-- Card 1 -->
        <div class="backdrop-blur-md bg-white/80 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-8 flex flex-col items-center">
          <div class="bg-blue-100 p-4 rounded-full mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17.657 16.657L13.414 12.414A2 2 0 0010.586 12.414L6.343 16.657M8 7h.01M12 7h.01M16 7h.01M21 21H3V5a2 2 0 012-2h14a2 2 0 012 2v16z" />
            </svg>
          </div>
          <h4 class="text-lg font-semibold text-gray-800 mb-1">Alamat Sekolah</h4>
          <p class="text-gray-600 text-sm text-center">Gang Bhakti Suci No.100, Cimpaeun, Tapos, Kota Depok, Jawa Barat, 16459</p>
        </div>

        <!-- Card 2 -->
        <div class="backdrop-blur-md bg-white/80 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-8 flex flex-col items-center">
          <div class="bg-blue-100 p-4 rounded-full mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5a2 2 0 012-2h2.586A1 1 0 018 3.293L10.707 6H21a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
            </svg>
          </div>
          <h4 class="text-lg font-semibold text-gray-800 mb-1">Telepon</h4>
          <p class="text-gray-600 text-sm">021-8790-7233</p>
        </div>

        <!-- Card 3 -->
        <div class="backdrop-blur-md bg-white/80 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-8 flex flex-col items-center">
          <div class="bg-blue-100 p-4 rounded-full mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 12H8m8 0l-8-6m0 12l8-6" />
            </svg>
          </div>
          <h4 class="text-lg font-semibold text-gray-800 mb-1">Email</h4>
          <p class="text-gray-600 text-sm">smkn1depok@gmail.com</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white border-t border-gray-200 py-6 text-center text-sm text-gray-500">
    © 2025 SMKN 1 Depok | Portal Nilai Kelulusan
    <p class="mt-1 text-gray-400">Dikembangkan oleh Tim PPLG SMKN 1 Depok</p>
  </footer>

</body>
</html>
