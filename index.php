<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Office Modern | db_zeff_26</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
    .glass-card { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 1px solid rgba(226, 232, 240, 0.8); }
    .sidebar-item:hover { background: #eff6ff; color: #2563eb; transition: all 0.3s; }
  </style>
</head>
<body class="flex min-h-screen overflow-hidden">

  <aside class="w-72 bg-white border-r border-slate-200 hidden md:flex flex-col">
    <div class="p-8">
      <h1 class="text-2xl font-extrabold text-blue-600 tracking-tighter italic">ZEFF-OFFICE<span class="text-slate-300">.</span></h1>
    </div>
    <nav class="flex-1 px-6 space-y-2">
      <a href="#" class="sidebar-item flex items-center p-4 rounded-2xl text-blue-600 bg-blue-50 font-bold">
        <i data-lucide="layout-dashboard" class="mr-3 w-5"></i> Dashboard
      </a>
      <a href="#" class="sidebar-item flex items-center p-4 rounded-2xl text-slate-500 font-medium">
        <i data-lucide="mail" class="mr-3 w-5"></i> Manajemen Surat
      </a>
      <a href="#" class="sidebar-item flex items-center p-4 rounded-2xl text-slate-500 font-medium">
        <i data-lucide="briefcase" class="mr-3 w-5"></i> HR & Absensi
      </a>
    </nav>
    <div class="p-6 border-t border-slate-50">
      <div class="bg-slate-900 rounded-2xl p-4 text-white">
        <p class="text-xs text-slate-400">Database Active:</p>
        <p class="text-sm font-mono text-emerald-400">db_zeff_26</p>
      </div>
    </div>
  </aside>

  <main class="flex-1 flex flex-col h-screen overflow-y-auto">
    <header class="h-20 bg-white/80 backdrop-blur-md border-b border-slate-100 flex items-center justify-between px-10 sticky top-0 z-10">
      <div>
        <h2 class="text-sm font-semibold text-slate-400 uppercase tracking-widest">Workspace</h2>
        <p class="text-slate-900 font-bold">Administrator Central</p>
      </div>
      <div class="flex items-center space-x-6">
        <div id="syncStatus" class="flex items-center text-xs font-bold text-emerald-500 bg-emerald-50 px-4 py-2 rounded-full border border-emerald-100 hidden">
          <span class="w-2 h-2 bg-emerald-500 rounded-full mr-2 animate-pulse"></span> MySQL Connected
        </div>
        <img src="https://ui-avatars.com/api/?name=Zeff+Admin&background=2563eb&color=fff" class="w-10 h-10 rounded-2xl shadow-lg border-2 border-white">
      </div>
    </header>

    <div class="p-10">
      <div class="mb-10 flex justify-between items-end">
        <div>
          <h2 class="text-4xl font-black text-slate-800 tracking-tight">Dashboard Overview</h2>
          <p class="text-slate-500 mt-2">Real-time data monitoring untuk <span class="font-bold text-blue-600">db_zeff_26</span></p>
        </div>
        <button onclick="fetchData()" class="p-3 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
           <i data-lucide="refresh-cw" class="w-5 text-slate-600"></i>
        </button>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="glass-card p-8 rounded-[2rem] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
          <div class="p-4 bg-blue-600 rounded-2xl w-fit text-white mb-6 shadow-blue-200 shadow-lg">
            <i data-lucide="inbox" class="w-6 h-6"></i>
          </div>
          <h3 class="text-slate-400 text-sm font-bold uppercase tracking-wider">Surat Masuk</h3>
          <p id="valSuratMasuk" class="text-5xl font-black text-slate-900 mt-2">0</p>
        </div>

        <div class="glass-card p-8 rounded-[2rem] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
          <div class="p-4 bg-orange-500 rounded-2xl w-fit text-white mb-6 shadow-orange-200 shadow-lg">
            <i data-lucide="send" class="w-6 h-6"></i>
          </div>
          <h3 class="text-slate-400 text-sm font-bold uppercase tracking-wider">Surat Keluar</h3>
          <p id="valSuratKeluar" class="text-5xl font-black text-slate-900 mt-2">0</p>
        </div>

        <div class="glass-card p-8 rounded-[2rem] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
          <div class="p-4 bg-emerald-500 rounded-2xl w-fit text-white mb-6 shadow-emerald-200 shadow-lg">
            <i data-lucide="calendar" class="w-6 h-6"></i>
          </div>
          <h3 class="text-slate-400 text-sm font-bold uppercase tracking-wider">Agenda Rapat</h3>
          <p id="valAgenda" class="text-5xl font-black text-slate-900 mt-2">0</p>
        </div>
      </div>

      <div class="mt-12 bg-white rounded-[2rem] border border-slate-100 p-8 shadow-sm">
         <h3 class="font-bold text-slate-800 mb-6 flex items-center">
           <i data-lucide="activity" class="mr-2 w-5 text-blue-600"></i> Aktivitas Terakhir
         </h3>
         <div class="text-center py-10 text-slate-400 italic bg-slate-50 rounded-2xl border-2 border-dashed border-slate-200">
           Belum ada aktivitas terekam di db_zeff_26
         </div>
      </div>

      <div class="mt-10 text-xs text-slate-400 flex items-center justify-center space-x-2">
        <span class="px-2 py-1 bg-slate-200 rounded text-slate-600 font-bold">SERVER OK</span>
        <span>Terakhir sinkronisasi:</span> 
        <span id="lastUpdate" class="font-bold text-slate-600 tracking-tighter">...</span>
      </div>
    </div>
  </main>

  <script>
    // Initialize Lucide Icons
    lucide.createIcons();

    // Anti-Delay Real-time Fetching
    async function fetchData() {
        const statusBadge = document.getElementById('syncStatus');
        statusBadge.classList.remove('hidden');
        
        try {
            const response = await fetch('api.php');
            const data = await response.json();
            
            // Render to UI
            document.getElementById('valSuratMasuk').innerText = data.suratMasuk;
            document.getElementById('valSuratKeluar').innerText = data.suratKeluar;
            document.getElementById('valAgenda').innerText = data.agendaHariIni;
            document.getElementById('lastUpdate').innerText = data.lastUpdate;

            console.log('Data db_zeff_26 synced.');
        } catch (error) {
            console.error('Fetch Error:', error);
        } finally {
            setTimeout(() => statusBadge.classList.add('hidden'), 2000);
        }
    }

    // Jalankan saat load pertama kali
    window.onload = fetchData;
    
    // Auto-refresh data tiap 30 detik (Real-time feeling)
    setInterval(fetchData, 30000);
  </script>
</body>
</html>