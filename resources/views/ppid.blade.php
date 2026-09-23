<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPID Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="{{ asset('tutwurihandayani.png') }}">
    <!-- Leaflet CSS & JS for Interactive Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 min-h-screen text-gray-800 font-sans antialiased">
    <!-- Decorative background blobs -->
    <div class="fixed top-0 left-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-[100px] opacity-40 z-[-1]"></div>
    <div class="fixed bottom-0 right-0 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-[100px] opacity-40 z-[-1]"></div>

    <header class="w-full sticky top-0 z-[9999] transition-all duration-300 bg-white/70 backdrop-blur-xl border-b border-white/50 shadow-[0_4px_30px_rgba(0,0,0,0.05)]">
        <!-- PART 1: LOGO BAR (Top Row) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center border-b border-gray-200/40">
            <!-- LEFT SIDE -->
            <div class="flex items-center gap-4">
                <img src="{{ asset('tutwurihandayani.png') }}" alt="Logo Tut Wuri Handayani" class="h-16 w-auto">
                <div class="flex flex-col border-l-2 border-gray-300 pl-4 ml-2">
                    <h1 class="text-3xl font-black bg-gradient-to-r from-[#1e1b4b] to-blue-600 bg-clip-text text-transparent tracking-tight">PPID</h1>
                    <p class="text-xs font-medium text-gray-700 leading-tight">Balai Penjaminan Mutu Pendidikan<br>Provinsi Sulawesi Tenggara</p>
                </div>
            </div>
            <!-- RIGHT SIDE (Award Logos in a Glass Pill) -->
            <div class="hidden md:flex items-center bg-white/80 backdrop-blur-md border border-white/50 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] rounded-full px-4 py-2 gap-5 hover:bg-white/95 transition-colors duration-300">
                <div class="flex items-center gap-2 border-r border-gray-200/60 pr-4">
                    <img src="{{ asset('fotologoatas/wbk.png') }}" alt="WBK" class="h-9 w-auto object-contain mix-blend-darken hover:scale-105 transition-transform duration-300">
                </div>
                <div class="flex items-center gap-5">
                    <img src="{{ asset('fotologoatas/pendidikanbermutu.png') }}" alt="Pendidikan Bermutu" class="h-8 w-auto object-contain mix-blend-darken hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('fotologoatas/ramah.png') }}" alt="Ramah" class="h-8 w-auto object-contain mix-blend-darken hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </div>

        <!-- PART 2: RUNNING TEXT BAR (Middle Row) -->
        <div class="w-full bg-blue-50/50 py-1.5 overflow-hidden flex items-center border-b border-gray-200/30">
            <marquee class="text-xs font-bold text-blue-800 uppercase tracking-widest">Selamat Datang di Laman PPID BPMP Provinsi Sulawesi Tenggara</marquee>
        </div>

        <!-- PART 3: NAVIGATION BAR (Bottom Row) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <!-- LEFT BUTTON -->
            <a href="https://bpmpsultra.kemendikdasmen.go.id/" target="_blank" class="bg-gradient-to-r from-emerald-400 to-teal-500 text-white px-5 py-2 rounded-full text-sm font-bold shadow-[0_4px_15px_rgba(16,185,129,0.3)] hover:shadow-[0_6px_20px_rgba(16,185,129,0.5)] hover:-translate-y-0.5 transition-all flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg> Website Utama</a>
            
            <!-- MAIN MENU -->
            <nav class="hidden lg:flex items-center gap-2 text-sm font-bold text-[#1e1b4b]">
                <a href="/" class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex items-center gap-1 cursor-pointer">Beranda</a>
                
                <!-- Dropdown: Profil -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex items-center gap-1 cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> Profil &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white border shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-lembaga/#elementor-toc__heading-anchor-0" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Profil BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/visi-misi/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Visi Misi Tugas dan Fungsi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-lembaga/#elementor-toc__heading-anchor-3" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Kedudukan Tugas dan Fungsi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Laman BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/struktur-organisasi/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Struktur Organisasi BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2024/11/05/junaiddin-pagala/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Profil Pejabat Struktural</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-pegawai/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Profil Pimpinan dan Pegawai</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Profil PPID BPMP Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Kalender Kegiatan 2026</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-pegawai/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Data Statistik Kepegawaian</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/#elementor-toc__heading-anchor-3" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Tugas dan Wewenang PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/#elementor-toc__heading-anchor-1" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Visi dan Misi PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/#elementor-toc__heading-anchor-6" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Struktur Organisasi PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/tim-ppid/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">SK PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/category/berita/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Galeri Fasilitas Umum</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/sistem-pemerintahan-berbasis-elektronik-spbe/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Galeri Fasilitas Pelayanan</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/hubungi-kami/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Alamat & Kontak</a>
                    </div>
                </div>

                <!-- Dropdown: Informasi Publik -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex items-center gap-1 cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Informasi Publik &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white border shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/regulasi-dan-peraturan-kemendikdasmen/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Regulasi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-serta-merta/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Informasi Serta Merta</a>
                        <a href="https://ppid.kemendikdasmen.go.id/page/daftar-informasi-publik" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Daftar Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-setiap-saat/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Informasi Berkala</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/ppid/#elementor-toc__heading-anchor-2" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Informasi Dikecualikan</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-permohonan-informasi/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Permohonan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-setiap-saat/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Informasi Setiap Saat</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2024/04/09/rilis-tahap-pelaksanaan-pengelolaan-kinerja-kepala-sekolah-di-pmm/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Pedoman Pengelolaan Informasi Publik</a>
                    </div>
                </div>

                <!-- Dropdown: Layanan Informasi -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex items-center gap-1 cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> Layanan Informasi &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white border shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/ppid/#elementor-toc__heading-anchor-4" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Permohonan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/#elementor-toc__heading-anchor-9" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Jadwal Pelayanan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/sistem-pemerintahan-berbasis-elektronik-spbe/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Jejak Surat</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-pengajuan-keberatan/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Pengajuan Keberatan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/ppid/#elementor-toc__heading-anchor-4" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Tata Cara Permohonan Informasi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/pengaduan-spmb/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Pengaduan</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/maklumat-pelayanan/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Maklumat Pelayanan</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-pengajuan-keberatan/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Tata Cara Pengajuan Keberatan & Sengketa</a>
                        <a href="https://play.google.com/store/apps/details?id=com.dera.perman.ppidkemendikbudristek&pli=1" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">e-PPID Versi Android</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2026/06/17/bpmp-sultra-dan-pemda-kota-kendari-perkuat-perencanaan-berbasis-data-untuk-tingkatkan-capaian-spm-pendidikan/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Standar Biaya Pelayanan Informasi</a>
                        <a href="https://ppid.kemendikdasmen.go.id/page/tata-cara-pengaduan-penyalahgunaan-wewenang-atau-pelanggaran" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Tata Cara Pengaduan Salahguna Wewenang</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/pengaduan-spmb/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Laporan Pengaduan Masyarakat</a>
                    </div>
                </div>

                <!-- Dropdown: Tautan -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex items-center gap-1 cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg> Tautan &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white border shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">PPID Kemendikdasmen</a>
                        <a href="https://wbs.kemendikdasmen.go.id/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Whistle Blowing System</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/ult/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">ULT BPMP Sultra</a>
                        <a href="https://data.kemendikdasmen.go.id/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Portal Data</a>
                        <a href="https://dapo.kemendikdasmen.go.id/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Dapodik</a>
                        <a href="https://www.lapor.go.id/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">SP4N LAPOR!</a>
                        <a href="https://wbs.kemendikdasmen.go.id/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">WBS</a>
                        <a href="https://bosp.kemendikdasmen.go.id/portal/welcome" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">BOSP</a>
                        <a href="https://pip.kemendikdasmen.go.id/home_v1" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">PIP</a>
                        <a href="https://ijazah.data.kemendikdasmen.go.id/manajemen/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">E-Ijazah</a>
                        <a href="#" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Silandap (Penyewaan Wisma)</a>
                        <a href="https://siplah.kemendikdasmen.go.id/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">SIPLah</a>
                        <a href="https://data.kemendikdasmen.go.id/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Satu Data</a>
                    </div>
                </div>

                <!-- Dropdown: Publikasi -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex items-center gap-1 cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14"></path></svg> Publikasi &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white border shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/category/berita/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Berita</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/jurnal/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Jurnal Online BPMP Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/hasil-skm/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Hasil Survey Kepuasan Masyarakat</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2024/12/25/kisah-inspiratif-implementasi-psp-angk-12-dan-3-di-prov-sultra/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Komik Pembelajaran</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/goes-to-school/" target="_blank" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Model Pembelajaran Berbasis Game</a>
                        <a href="#" class="px-4 py-2 hover:bg-gray-100 text-gray-700 font-medium">Penyewaan Wisma (Silandap)</a>
                    </div>
                </div>

                <!-- Dropdown: PBJ -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex items-center gap-1 cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> PBJ &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-3 w-64 bg-white/90 backdrop-blur-xl border border-white/50 shadow-[0_10px_40px_rgba(0,0,0,0.1)] rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 flex flex-col py-3 z-50 overflow-hidden">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/dokumen-pengadaan-barang-dan-jasa/" target="_blank" class="px-5 py-2.5 hover:bg-blue-50 text-gray-700 text-sm font-semibold hover:text-blue-700 hover:pl-6 transition-all">Regulasi PBJ</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/dokumen-pengadaan-barang-dan-jasa/" target="_blank" class="px-5 py-2.5 hover:bg-blue-50 text-gray-700 text-sm font-semibold hover:text-blue-700 hover:pl-6 transition-all">Rencana Umum PBJ</a>
                        <a href="https://s.id/Konstruksi_As_blokB_BPMPsultra" target="_blank" class="px-5 py-2.5 hover:bg-blue-50 text-gray-700 text-sm font-semibold hover:text-blue-700 hover:pl-6 transition-all">Dokumen PBJ</a>
                        <a href="#" class="px-5 py-2.5 hover:bg-blue-50 text-gray-700 text-sm font-semibold hover:text-blue-700 hover:pl-6 transition-all">SPSE</a>
                        <a href="#" class="px-5 py-2.5 hover:bg-blue-50 text-gray-700 text-sm font-semibold hover:text-blue-700 hover:pl-6 transition-all">Informasi Vendor (Daftar Hitam)</a>
                    </div>
                </div>
            </nav>

            <!-- RIGHT SIDE (Social Icons) -->
            <div class="flex items-center gap-3">
                <a href="https://www.instagram.com/bpmpsultra/" target="_blank" class="text-pink-600 hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm3.98-10.98a1.44 1.44 0 110 2.881 1.44 1.44 0 010-2.881z"/></svg>
                </a>
                <a href="https://www.youtube.com/@bpmpsultra" target="_blank" class="text-red-600 hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.377.55a3.015 3.015 0 0 0-2.122 2.136C0 8.07 0 12 0 12s0 3.93.501 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.55 9.377.55 9.377.55s7.505 0 9.377-.55a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <a href="https://www.tiktok.com/@bpmp.sulawesitenggara" target="_blank" class="text-black hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93v7.2c0 1.25-.2 2.51-.77 3.64-.67 1.34-1.78 2.4-3.1 3.03-1.42.67-3.07.83-4.57.51-1.63-.34-3.12-1.32-4.07-2.67-1-1.41-1.41-3.21-1.07-4.88.37-1.75 1.5-3.32 3.04-4.2 1.45-.82 3.25-1.03 4.88-.63v4.13c-1.2-.2-2.45.06-3.41.79-.81.62-1.28 1.6-1.28 2.62 0 1.05.5 2.05 1.33 2.66.79.57 1.83.73 2.76.49 1-.26 1.82-.95 2.27-1.87.35-.73.49-1.57.48-2.39V.02z"/></svg>
                </a>
            </div>
        </div>
    </header>

    <!-- NEW HERO SECTION (GLASSMORPHISM & SLIDER) -->
    <section class="relative w-full py-12 lg:py-20 bg-gradient-to-br from-[#1e3a8a] via-[#1e40af] to-[#312e81] overflow-hidden">
        <!-- Subtle glow effects for glassmorphism -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-400/30 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-pulse"></div>
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-purple-400/30 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-pulse"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-white/10 backdrop-blur-lg border border-white/20 shadow-2xl rounded-[2rem] p-6 md:p-10 flex flex-col lg:flex-row gap-10 items-center">
                
                <!-- LEFT COLUMN: Image Slider -->
                <div class="w-full lg:w-1/2 relative rounded-2xl overflow-hidden aspect-[4/3] md:aspect-[16/10] border-4 border-white/20 shadow-inner group"
                     x-data="{ 
                        activeSlide: 1, 
                        slides: [ 
                            '{{ asset('fotoheader/slide1.png') }}', 
                            '{{ asset('fotoheader/slide2.png') }}', 
                            '{{ asset('fotoheader/slide3.png') }}' 
                        ], 
                        next() { this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1 }, 
                        prev() { this.activeSlide = this.activeSlide === 1 ? this.slides.length : this.activeSlide - 1 } 
                     }" 
                     x-init="setInterval(() => next(), 5000)">
                    
                    <template x-for="(slide, index) in slides" :key="index">
                        <img :src="slide" 
                             x-show="activeSlide === index + 1" 
                             x-transition.opacity.duration.700ms 
                             class="absolute inset-0 w-full h-full object-cover">
                    </template>

                    <!-- Navigation Buttons -->
                    <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 bg-black/40 hover:bg-black/60 text-white p-3 rounded-full transition-all focus:outline-none z-20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 bg-black/40 hover:bg-black/60 text-white p-3 rounded-full transition-all focus:outline-none z-20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>

                    <!-- Dots Indicator -->
                    <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-2 z-20">
                        <template x-for="(_, index) in slides" :key="index">
                            <button @click="activeSlide = index + 1" :class="{'bg-white w-4': activeSlide === index + 1, 'bg-white/50 w-2': activeSlide !== index + 1}" class="h-2 rounded-full transition-all focus:outline-none"></button>
                        </template>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Welcome Text -->
                <div class="w-full lg:w-1/2 flex flex-col justify-center">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-tight mb-6 drop-shadow-md">
                        Selamat Datang di Laman<br>PPID BPMP Provinsi<br>Sulawesi Tenggara
                    </h2>
                    <p class="text-white/80 text-base md:text-lg leading-relaxed text-justify">
                        PPID adalah kepanjangan dari Pejabat Pengelola Informasi dan Dokumentasi, dimana PPID berfungsi sebagai pengelola dan penyampai dokumen yang dimiliki oleh badan publik sesuai dengan amanat UU 14/2008 tentang Keterbukaan Informasi Publik.
                    </p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- SECTION 2: WELCOME & MAIN ACTION BUTTONS -->
    <section class="py-16 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="backdrop-blur-xl bg-white/70 border border-white/50 rounded-[2.5rem] p-10 md:p-16 shadow-[0_8px_30px_rgb(0,0,0,0.08)] flex flex-col md:flex-row items-center gap-10">
                <!-- Icon/Illustration Side -->
                <div class="flex-shrink-0 w-32 h-32 md:w-48 md:h-48 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-full flex items-center justify-center border-4 border-white shadow-inner">
                    <svg class="w-16 h-16 md:w-24 md:h-24 text-blue-600 drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <!-- Text Content Side -->
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1e1b4b] mb-4">Halo Sahabat Pendidikan Sultra</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Selamat datang di portal Pelayanan Publik Terpadu BPMP Provinsi Sulawesi Tenggara. Melalui PPID, kami berkomitmen mewujudkan keterbukaan informasi publik secara <strong>Cepat, Tepat, Transparan, dan Akuntabel</strong>. Anda dapat mengakses berbagai dokumen persyaratkan layanan publik lewat satu pintu secara mudah.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4">
                        <!-- Permohonan Button -->
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-permohonan-informasi/" target="_blank" class="backdrop-blur-md bg-blue-600/90 border border-blue-400 text-white px-6 py-4 rounded-xl flex items-center justify-center gap-3 hover:-translate-y-1 hover:shadow-[0_8px_20px_rgba(37,99,235,0.3)] transition-all font-semibold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            Permohonan Informasi
                        </a>
                        <!-- Keberatan Button -->
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-pengajuan-keberatan/" target="_blank" class="backdrop-blur-md bg-white/80 border border-gray-300 text-[#1e1b4b] px-6 py-4 rounded-xl flex items-center justify-center gap-3 hover:-translate-y-1 hover:shadow-lg transition-all font-semibold hover:bg-white">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            Pengajuan Keberatan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w-full max-w-6xl mx-auto h-[2px] bg-gradient-to-r from-transparent via-blue-400/50 to-transparent backdrop-blur-sm my-8 shadow-[0_0_15px_rgba(96,165,250,0.5)]"></div>

    <!-- SECTION 3: DAFTAR INFORMASI PUBLIK (GRID OF CARDS) -->
    <section class="py-16 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
                <div>
                    <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/20 backdrop-blur-md px-4 py-1.5 rounded-full text-blue-700 font-bold text-xs uppercase tracking-wider mb-4 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span> INFORMASI TERKINI
                    </div>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1e1b4b]">Daftar Informasi Publik</h2>
                    <div class="w-16 h-1.5 bg-blue-600 rounded-full mt-4 shadow-[0_0_10px_rgba(37,99,235,0.5)]"></div>
                </div>
                <p class="text-gray-500 text-sm md:text-base max-w-md md:text-right font-medium">
                    Akses berbagai kategori informasi publik yang dikelola oleh BPMP Provinsi Sulawesi Tenggara secara terbuka dan transparan.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: SETIAP SAAT -->
                <div class="backdrop-blur-md bg-white/60 border border-white/60 rounded-[2rem] p-8 shadow-[0_8px_32px_0_rgba(31,38,135,0.05)] hover:shadow-[0_12px_40px_0_rgba(31,38,135,0.1)] hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full group">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 bg-blue-50 text-blue-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">INFORMASI SETIAP SAAT</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Informasi yang wajib disediakan untuk bisa langsung diberikan kepada pemohon informasi publik ketika terdapat permohonan.</p>
                    <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-setiap-saat/" target="_blank" class="mt-auto px-6 py-2 border rounded-full text-sm font-medium transition-colors border-blue-200 text-blue-600 group-hover:bg-blue-50">
                        Buka Detail &rarr;
                    </a>
                </div>
                
                <!-- Card 2: BERKALA -->
                <div class="backdrop-blur-md bg-white/60 border border-white/60 rounded-[2rem] p-8 shadow-[0_8px_32px_0_rgba(31,38,135,0.05)] hover:shadow-[0_12px_40px_0_rgba(31,38,135,0.1)] hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full group">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 bg-green-50 text-green-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">INFORMASI BERKALA</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Informasi yang wajib disediakan dan diumumkan secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali.</p>
                    <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-berkala/" target="_blank" class="mt-auto px-6 py-2 border rounded-full text-sm font-medium transition-colors border-green-200 text-green-600 group-hover:bg-green-50">
                        Buka Detail &rarr;
                    </a>
                </div>
                
                <!-- Card 3: SERTA MERTA -->
                <div class="backdrop-blur-md bg-white/60 border border-white/60 rounded-[2rem] p-8 shadow-[0_8px_32px_0_rgba(31,38,135,0.05)] hover:shadow-[0_12px_40px_0_rgba(31,38,135,0.1)] hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full group">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 bg-orange-50 text-orange-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">INFORMASI SERTA MERTA</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Informasi yang wajib disediakan dan diumumkan seketika terkait hajat hidup orang banyak dan ketertiban umum.</p>
                    <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-serta-merta/" target="_blank" class="mt-auto px-6 py-2 border rounded-full text-sm font-medium transition-colors border-orange-200 text-orange-600 group-hover:bg-orange-50">
                        Buka Detail &rarr;
                    </a>
                </div>
                
                <!-- Card 4: DIKECUALIKAN -->
                <div class="backdrop-blur-md bg-white/60 border border-white/60 rounded-[2rem] p-8 shadow-[0_8px_32px_0_rgba(31,38,135,0.05)] hover:shadow-[0_12px_40px_0_rgba(31,38,135,0.1)] hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full group">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 bg-red-50 text-red-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">INFORMASI DIKECUALIKAN</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Informasi yang tidak dapat diakses oleh Pemohon Informasi Publik.</p>
                    <a href="https://bpmpsultra.kemendikdasmen.go.id/ppid/#elementor-toc__heading-anchor-2" target="_blank" class="mt-auto px-6 py-2 border rounded-full text-sm font-medium transition-colors border-red-200 text-red-600 group-hover:bg-red-50">
                        Buka Detail &rarr;
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <div class="w-full max-w-6xl mx-auto h-[2px] bg-gradient-to-r from-transparent via-blue-400/50 to-transparent backdrop-blur-sm my-8 shadow-[0_0_15px_rgba(96,165,250,0.5)]"></div>

    <!-- SECTION 4: AKSES CEPAT LAYANAN (GRID OF CARDS) -->
    <section class="py-16 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
                <div>
                    <div class="inline-flex items-center gap-2 bg-indigo-500/10 border border-indigo-500/20 backdrop-blur-md px-4 py-1.5 rounded-full text-indigo-700 font-bold text-xs uppercase tracking-wider mb-4 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-indigo-600 animate-pulse"></span> LAYANAN MASYARAKAT
                    </div>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1e1b4b]">Akses Cepat Layanan</h2>
                    <div class="w-16 h-1.5 bg-indigo-600 rounded-full mt-4 shadow-[0_0_10px_rgba(79,70,229,0.5)]"></div>
                </div>
                <p class="text-gray-500 text-sm md:text-base max-w-md md:text-right font-medium">
                    Pusat layanan terpadu, standar maklumat, dan sistem pengaduan untuk peningkatan mutu layanan BPMP.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: Standar Pelayanan -->
                <div class="backdrop-blur-md bg-white/60 border border-white/60 rounded-[2rem] p-8 shadow-[0_8px_32px_0_rgba(31,38,135,0.05)] hover:shadow-[0_12px_40px_0_rgba(31,38,135,0.1)] hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full group">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 bg-teal-50 text-teal-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Standar Pelayanan</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Dokumen standar pelayanan publik BPMP.</p>
                    <a href="https://bpmpsultra.kemendikdasmen.go.id/standarpelayanan/" target="_blank" class="mt-auto px-6 py-2 border rounded-full text-sm font-medium transition-colors border-teal-200 text-teal-600 group-hover:bg-teal-50">
                        Lihat Standar &rarr;
                    </a>
                </div>
                
                <!-- Card 2: Maklumat Pelayanan -->
                <div class="backdrop-blur-md bg-white/60 border border-white/60 rounded-[2rem] p-8 shadow-[0_8px_32px_0_rgba(31,38,135,0.05)] hover:shadow-[0_12px_40px_0_rgba(31,38,135,0.1)] hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full group">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 bg-indigo-50 text-indigo-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Maklumat Pelayanan</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Pernyataan komitmen pelayanan publik.</p>
                    <a href="https://bpmpsultra.kemendikdasmen.go.id/maklumat-pelayanan/" target="_blank" class="mt-auto px-6 py-2 border rounded-full text-sm font-medium transition-colors border-indigo-200 text-indigo-600 group-hover:bg-indigo-50">
                        Lihat Maklumat &rarr;
                    </a>
                </div>
                
                <!-- Card 3: Informasi dan Pengaduan -->
                <div class="backdrop-blur-md bg-white/60 border border-white/60 rounded-[2rem] p-8 shadow-[0_8px_32px_0_rgba(31,38,135,0.05)] hover:shadow-[0_12px_40px_0_rgba(31,38,135,0.1)] hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full group">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 bg-purple-50 text-purple-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Informasi dan Pengaduan</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Layanan pengaduan masyarakat terpadu.</p>
                    <a href="https://bpmpsultra.kemendikdasmen.go.id/?s=pengaduan" target="_blank" class="mt-auto px-6 py-2 border rounded-full text-sm font-medium transition-colors border-purple-200 text-purple-600 group-hover:bg-purple-50">
                        Buat Pengaduan &rarr;
                    </a>
                </div>
                
                <!-- Card 4: Survey Kepuasan Masyarakat -->
                <div class="backdrop-blur-md bg-white/60 border border-white/60 rounded-[2rem] p-8 shadow-[0_8px_32px_0_rgba(31,38,135,0.05)] hover:shadow-[0_12px_40px_0_rgba(31,38,135,0.1)] hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full group">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 bg-pink-50 text-pink-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Survey Kepuasan</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Indeks kepuasan masyarakat terhadap layanan.</p>
                    <a href="https://bpmpsultra.kemendikdasmen.go.id/ult/" target="_blank" class="mt-auto px-6 py-2 border rounded-full text-sm font-medium transition-colors border-pink-200 text-pink-600 group-hover:bg-pink-50">
                        Isi Survey &rarr;
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- SECTION 5: PUSAT INFORMASI & WAKTU LAYANAN -->
    <section class="py-12 mt-12 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="backdrop-blur-md bg-white/60 border border-white/60 rounded-3xl p-8 shadow-sm grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gray-200/50">
                <!-- Column 1 -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-2">Pusat Informasi dan Unit Layanan Terpadu</h3>
                    <p class="text-sm text-gray-600">Gedung Utama BPMP Provinsi Sulawesi Tenggara</p>
                </div>
                <!-- Column 2 -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-2">Waktu Layanan</h3>
                    <p class="text-sm text-gray-600">Senin - Kamis: 07.30 - 16.00 WITA<br>Jumat: 07.30 - 16.30 WITA</p>
                </div>
                <!-- Column 3 -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-2">Hubungi Kami</h3>
                    <p class="text-sm text-gray-600">Telp: (0401) 3121514<br>Email: ppid.bpmpsultra@kemdikbud.go.id</p>
                </div>
            </div>
        </div>
    </section>

    <!-- COMBINED GLASSMORPHISM WRAPPER FOR VIDEO & FOOTER -->
    <section class="relative w-full pt-20 bg-gradient-to-br from-[#1e3a8a] via-[#1e40af] to-[#312e81] overflow-hidden">
        
        <!-- Decorative background elements for glass effect -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>

        <!-- Container -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 flex flex-col gap-20 pb-16">

            <!-- 1. VIDEO PROFIL (Embedded YouTube) -->
            <div class="w-full flex flex-col items-center">
                <h3 class="text-2xl md:text-3xl font-extrabold text-white tracking-wide uppercase mb-8 drop-shadow-md text-center">LAYANAN DI BPMP SULTRA</h3>
                <!-- Glass Wrapper for Video -->
                <div class="w-full max-w-4xl bg-white/10 backdrop-blur-md border border-white/20 p-2 md:p-4 rounded-3xl shadow-[0_8px_32px_0_rgba(31,38,135,0.37)]">
                    <div class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-inner bg-black">
                        <!-- The actual YouTube Embed using the provided ID: _TX6E1t9AnY -->
                        <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/_TX6E1t9AnY?si=w6fE9lW4QG2zLqP_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <!-- 2. FOOTER SECTION (Split into 2 Columns) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center bg-white/5 backdrop-blur-lg border border-white/10 rounded-[2.5rem] p-8 md:p-12 shadow-2xl">
                
                <!-- Left Column: Info & Social -->
                <div class="flex flex-col text-white">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="{{ asset('tutwurihandayani.png') }}" alt="Logo" class="h-14 w-auto drop-shadow-lg">
                        <h4 class="font-extrabold text-2xl tracking-tight text-white drop-shadow">PPID BPMP Sultra</h4>
                    </div>
                    
                    <p class="text-blue-100 font-medium mb-2 text-lg">Pejabat Pengelola Informasi dan Dokumentasi</p>
                    <p class="text-white/70 text-sm leading-relaxed mb-8 max-w-md">
                        Balai Penjaminan Mutu Pendidikan Provinsi Sulawesi Tenggara<br>
                        <strong>Kementerian Pendidikan Dasar dan Menengah</strong><br>
                        Jl. DI Panjaitan (Bonggoeya), Kec. Wua-Wua<br>
                        Kota Kendari, Sulawesi Tenggara 93117
                    </p>

                    <div class="flex flex-col gap-1 text-sm text-blue-200 mb-10 font-medium">
                        <p class="hover:text-white transition-colors cursor-pointer">Website: bpmp-sultra.kemdikbud.go.id</p>
                        <p class="hover:text-white transition-colors cursor-pointer">Email: ppid.bpmpsultra@kemdikbud.go.id</p>
                    </div>

                    <!-- Social Media Icons (Glass Style) -->
                    <div class="flex items-center gap-4">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/bpmpsultra/" target="_blank" class="w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 flex items-center justify-center transition-all hover:-translate-y-1 hover:shadow-[0_0_15px_rgba(255,255,255,0.3)] group">
                            <svg class="w-6 h-6 text-white group-hover:text-pink-400 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@bpmpsultra" target="_blank" class="w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 flex items-center justify-center transition-all hover:-translate-y-1 hover:shadow-[0_0_15px_rgba(255,255,255,0.3)] group">
                            <svg class="w-6 h-6 text-white group-hover:text-red-500 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@bpmp.sulawesitenggara" target="_blank" class="w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 flex items-center justify-center transition-all hover:-translate-y-1 hover:shadow-[0_0_15px_rgba(255,255,255,0.3)] group">
                             <svg class="w-5 h-5 text-white group-hover:text-black transition-colors" fill="currentColor" viewBox="0 0 448 512"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Interactive Leaflet Map -->
                <div class="w-full h-full min-h-[300px] bg-white/10 backdrop-blur-md rounded-2xl overflow-hidden border-2 border-white/20 shadow-inner p-1 relative z-0">
                    <div id="map" class="w-full h-full rounded-xl z-0"></div>
                </div>

            </div>
            
            <!-- Copyright Text -->
            <div class="text-center pt-8 border-t border-white/10">
                <p class="text-blue-200/60 text-sm font-medium tracking-wide">&copy; 2026 BPMP Provinsi Sulawesi Tenggara. Seluruh Hak Cipta Dilindungi.</p>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize map, set precise coordinate for BPMP Sultra (Wua-Wua, Kendari)
            var map = L.map('map').setView([-3.9897148, 122.5186071], 16);

            // Load the OpenStreetMap tiles
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Add a marker for BPMP Sultra
            var marker = L.marker([-3.9897148, 122.5186071]).addTo(map);

            // Add a custom popup
            marker.bindPopup('<b>BPMP Prov. Sultra</b><br>Kementerian Pendidikan Dasar dan Menengah.').openPopup();
        });
    </script>
</body>
</html>
