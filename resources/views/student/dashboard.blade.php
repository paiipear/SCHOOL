<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Siswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: radial-gradient(circle at center, rgba(96,165,250,0.08), rgba(255,255,255,1) 70%);
      color: #1e293b;
    }

    /* Sidebar */
    .sidebar {

      width: 80px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem 0;
      border-right: 1px solid #e2e8f0;
    }

    .sidebar-icon {
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 1.5rem 0;
      border-radius: 30px;
      transition: all 0.3s ease;
    }

    .sidebar-icon:hover {
      background: #60a5fa;
      transform: scale(1.05);
    }

    .sidebar svg {
      width: 24px;
      height: 24px;
      color: #3b82f6;
      transition: color 0.3s ease;
    }

    .sidebar-icon:hover svg {
      color: white;
    }

    main {
      margin-left: 100px;
      padding: 2rem;
      transition: all 0.3s ease;
    }

    header {
      background: linear-gradient(to right, #60a5fa, #6366f1);
    }
  </style>
</head>

<body>
  <div class="sidebar bg-gradient-to-b from-blue-50 via-white to-gray-50" >
    <a href="#" class="sidebar-icon">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 0H7v8m6-8v8m-6 0h6" />
      </svg>
    </a>
<div style="margin-top: auto;">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <a href="#"
           class="sidebar-icon mt-auto mb-4"
           style="display: flex; align-items: center; justify-content: center;"
           onclick="event.preventDefault(); 
                    if (confirm('Apakah kamu yakin ingin logout?')) { 
                        this.closest('form').submit(); 
                    }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V5m-3 0H6a2 2 0 00-2 2v10a2 2 0 002 2h4" />
            </svg>
        </a>
    </form>
</div>


  </div>

  <!-- main content -->
  <main>
    <header class="text-white py-8 px-6 rounded-xl shadow">
      <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold">Selamat Datang, {{ $student->name }}!</h1>
        <p class="text-sm text-blue-100">Dashboard Siswa</p>
      </div>
    </header>

    <div class="max-w-6xl mx-auto mt-8 space-y-8">
      <!-- Nilai Kelulusan -->
      <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-lg font-semibold text-gray-700 mb-3">Nilai Kelulusan</h2>
        <div class="flex items-center justify-between">
          <p class="text-5xl font-bold 
            @if($score < 70) text-red-600 
            @elseif($score >= 70 && $score < 80) text-amber-500 
            @else text-green-600 
            @endif">
            {{ $score ?? '-' }}
          </p>

          <div>
            @if($status === 'Lulus')
              <span class="px-4 py-2 rounded-full bg-green-600 text-white text-sm font-medium">Lulus</span>
            @else
              <span class="px-4 py-2 rounded-full bg-red-600 text-white text-sm font-medium">Tidak Lulus</span>
            @endif
          </div>
        </div>
      </div>

      <!-- Biodata -->
      <h2 class="text-xl font-bold text-blue-600">Biodata <span class="text-gray-500 text-base">Siswa</span></h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- QR & Nama -->
        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
          <div class="bg-blue-50 p-4 rounded-lg">
            {!! QrCode::size(130)->generate($student->nisn); !!}
          </div>
          <p class="font-bold mt-3 text-blue-600">{{ $student->name }}</p>
          <hr class="my-4 w-full border-t border-gray-300">
          <p class="text-gray-500">{{ $student->nisn }}</p>
          <hr class="my-4 w-full border-t border-gray-300">
        </div>

        <!-- Profile -->
        <div class="md:col-span-2 bg-white rounded-lg shadow p-6">
          <h3 class="text-lg font-semibold mb-4 text-blue-600">Profile</h3>
          <div class="space-y-2 text-sm">
            <div class="flex"><span class="w-40 font-medium">NISN</span>: {{ $student->nisn }}</div>
            <div class="flex"><span class="w-40 font-medium">Nama Lengkap</span>: {{ $student->name }}</div>
            <div class="flex"><span class="w-40 font-medium">Jenis Kelamin</span>: {{ $student->gender === 'L' ? 'Laki-laki' : 'Perempuan' }}</div>
            <div class="flex"><span class="w-40 font-medium">Kelas</span>: {{ $student->schoolClass->grade_level ?? '-' }}</div>
            <div class="flex"><span class="w-40 font-medium">Jurusan</span>: {{ $student->schoolClass->major ?? '-' }}</div>
            <div class="flex"><span class="w-40 font-medium">Rombel</span>: {{ $student->schoolClass->rombel ?? '-' }}</div>
            <div class="flex"><span class="w-40 font-medium">Alamat</span>: {{ $student->studentAddress->full_address ?? '-' }}</div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
