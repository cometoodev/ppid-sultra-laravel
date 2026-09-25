<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPID - BPMP Sultra</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="{{ asset('tutwurihandayani.png') }}">
    <!-- Leaflet CSS & JS for Interactive Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 min-h-screen text-gray-800 font-sans antialiased overflow-x-hidden">
    <!-- Decorative background blobs -->
    <div class="fixed top-0 left-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-[100px] opacity-40 z-[-1]"></div>
    <div class="fixed bottom-0 right-0 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-[100px] opacity-40 z-[-1]"></div>

    <header x-data="{ mobileMenuOpen: false }" class="w-full sticky top-0 z-[9999] transition-all duration-300 bg-white/70 backdrop-blur-xl border-b border-white/50 shadow-[0_4px_30px_rgba(0,0,0,0.05)]">
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
            <div class="hidden md:flex items-center justify-center bg-white/80 backdrop-blur-md border border-white/50 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] rounded-full px-5 py-2.5 gap-6 hover:bg-white/95 transition-colors duration-300">
                <img src="{{ asset('fotologoatas/pendidikanbermutu.png') }}" alt="Pendidikan Bermutu" class="h-8 w-auto object-contain mix-blend-darken hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('fotologoatas/ramah.png') }}" alt="Ramah" class="h-8 w-auto object-contain mix-blend-darken hover:scale-105 transition-transform duration-300">
            </div>
        </div>

        <!-- PART 2: RUNNING TEXT BAR (Middle Row) -->
        <div class="w-full bg-blue-50/50 py-1.5 overflow-hidden flex items-center border-b border-gray-200/30">
            <marquee class="text-xs font-bold text-blue-800 uppercase tracking-widest">SELAMAT DATANG DI LAMAN PPID BPMP PROVINSI SULAWESI TENGGARA <span class="mx-16 lg:mx-32 opacity-50"></span> BPMP PROVINSI SULAWESI TENGGARA MENOLAK GRATIFIKASI DALAM BENTUK APAPUN</marquee>
        </div>

        <!-- PART 3: NAVIGATION BAR (Bottom Row) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex flex-row items-center justify-start gap-8">
            <!-- LEFT BUTTON & MOBILE MENU BUTTON -->
            <div class="flex items-center gap-3 w-full lg:w-auto justify-between lg:justify-start">
                <a href="https://bpmpsultra.kemendikdasmen.go.id/" target="_blank" class="bg-gradient-to-r from-emerald-400 to-teal-500 text-white px-5 py-2 rounded-full text-sm font-bold shadow-[0_4px_15px_rgba(16,185,129,0.3)] hover:shadow-[0_6px_20px_rgba(16,185,129,0.5)] hover:-translate-y-0.5 transition-all flex flex-row items-center gap-2 whitespace-nowrap"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg> Website Utama</a>
                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="block lg:hidden p-2 text-[#1e1b4b] hover:bg-blue-50 rounded-lg focus:outline-none transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;"></path>
                    </svg>
                </button>

            </div>
            
            <!-- DESKTOP NAVBAR CONTAINER -->
            <div class="hidden lg:flex flex-row items-center flex-1">
                <!-- MAIN MENU -->
                <nav class="flex flex-row items-center gap-4 lg:gap-6 text-sm font-bold text-[#1e1b4b]">
                <a href="/" class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex flex-row items-center gap-1.5 whitespace-nowrap flex-nowrap cursor-pointer">Beranda</a>
                
                <!-- Dropdown: Profil -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex flex-row items-center gap-1.5 whitespace-nowrap flex-nowrap cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> Profil &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white/95 backdrop-blur-3xl border border-gray-200 shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50 overflow-hidden">
                        <div class="max-h-[65vh] overflow-y-auto [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-thumb]:rounded-full">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-lembaga/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Profil BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/visi-misi/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Visi Misi Tugas dan Fungsi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-lembaga/#elementor-toc__heading-anchor-3" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Kedudukan Tugas dan Fungsi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Laman BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/struktur-organisasi/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Struktur Organisasi BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2024/11/05/junaiddin-pagala/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Profil Pejabat Struktural</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-pegawai/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Profil Pimpinan dan Pegawai</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Profil PPID BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Kalender Kegiatan 2026</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-pegawai/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Data Statistik Kepegawaian</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/#elementor-toc__heading-anchor-3" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Tugas dan Wewenang PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/visi-dan-misi-ppid/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Visi dan Misi PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/#elementor-toc__heading-anchor-6" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Struktur Organisasi PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/tim-ppid/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">SK PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/category/berita/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Galeri Fasilitas Umum</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/sistem-pemerintahan-berbasis-elektronik-spbe/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Galeri Fasilitas Pelayanan</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/hubungi-kami/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Alamat & Kontak</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/maklumat-pelayanan/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Maklumat Pelayanan</a>
                    </div>
                    </div>
                </div>

                <!-- Dropdown: Informasi Publik -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex flex-row items-center gap-1.5 whitespace-nowrap flex-nowrap cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Informasi Publik &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white/95 backdrop-blur-3xl border border-gray-200 shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50 overflow-hidden">
                        <div class="max-h-[65vh] overflow-y-auto [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-thumb]:rounded-full">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/regulasi-dan-peraturan-kemendikdasmen/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Regulasi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-serta-merta/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Informasi Serta Merta</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/daftar-informasi-publik/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Daftar Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-setiap-saat/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Informasi Berkala</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/ppid/#elementor-toc__heading-anchor-2" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Informasi Dikecualikan</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-permohonan-informasi/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Permohonan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-setiap-saat/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Informasi Setiap Saat</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2024/04/09/rilis-tahap-pelaksanaan-pengelolaan-kinerja-kepala-sekolah-di-pmm/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Pedoman Pengelolaan Informasi Publik</a>
                    </div>
                    </div>
                </div>

                <!-- Dropdown: Layanan Informasi -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex flex-row items-center gap-1.5 whitespace-nowrap flex-nowrap cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> Layanan Informasi &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white/95 backdrop-blur-3xl border border-gray-200 shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50 overflow-hidden">
                        <div class="max-h-[65vh] overflow-y-auto [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-thumb]:rounded-full">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/ppid/#elementor-toc__heading-anchor-4" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Permohonan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/#elementor-toc__heading-anchor-9" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Jadwal Pelayanan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/sistem-pemerintahan-berbasis-elektronik-spbe/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Jejak Surat</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-pengajuan-keberatan/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Pengajuan Keberatan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/tata-cara-permohonan-informasi-publik/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Tata Cara Permohonan Informasi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/pengaduan-spmb/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Pengaduan</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-pengajuan-keberatan/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Tata Cara Pengajuan Keberatan & Sengketa</a>
                        <a href="https://play.google.com/store/apps/details?id=com.dera.perman.ppidkemendikbudristek&pli=1" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">e-PPID Versi Android</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2026/06/17/bpmp-sultra-dan-pemda-kota-kendari-perkuat-perencanaan-berbasis-data-untuk-tingkatkan-capaian-spm-pendidikan/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Standar Biaya Pelayanan Informasi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/tata-cara-pengaduan-penyalahgunaan-wewenang" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Tata Cara Pengaduan Penyalahgunaan Wewenang</a>
                        <a href="https://datastudio.google.com/u/0/reporting/2491c8f9-2138-416a-8717-eaed7296dc68/page/Zdy4D" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Laporan Pengaduan Masyarakat</a>
                    </div>
                    </div>
                </div>

                <!-- Dropdown: Tautan -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex flex-row items-center gap-1.5 whitespace-nowrap flex-nowrap cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg> Tautan &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white/95 backdrop-blur-3xl border border-gray-200 shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50 overflow-hidden">
                        <div class="max-h-[65vh] overflow-y-auto [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-thumb]:rounded-full">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">PPID Kemendikdasmen</a>
                        <a href="https://wbs.kemendikdasmen.go.id/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Whistle Blowing System</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/ult/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">ULT BPMP Prov. Sultra</a>
                        <a href="https://data.kemendikdasmen.go.id/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Portal Data</a>
                        <a href="https://dapo.kemendikdasmen.go.id/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Dapodik</a>
                        <a href="https://www.lapor.go.id/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">SP4N LAPOR!</a>
                        <a href="https://bosp.kemendikdasmen.go.id/portal/welcome" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">BOSP</a>
                        <a href="https://pip.kemendikdasmen.go.id/home_v1" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">PIP</a>
                        <a href="https://ijazah.data.kemendikdasmen.go.id/manajemen/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">E-Ijazah</a>
                        <a href="https://siplah.kemendikdasmen.go.id/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">SIPLah</a>
                        <a href="https://data.kemendikdasmen.go.id/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Satu Data</a>
                    </div>
                    </div>
                </div>

                <!-- Dropdown: Publikasi -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex flex-row items-center gap-1.5 whitespace-nowrap flex-nowrap cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14"></path></svg> Publikasi &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white/95 backdrop-blur-3xl border border-gray-200 shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50 overflow-hidden">
                        <div class="max-h-[65vh] overflow-y-auto [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-thumb]:rounded-full">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/category/berita/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Berita</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/jurnal/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Jurnal Online BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/hasil-skm/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Hasil Survey Kepuasan Masyarakat</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2024/12/25/kisah-inspiratif-implementasi-psp-angk-12-dan-3-di-prov-sultra/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Komik Pembelajaran</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/goes-to-school/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Model Pembelajaran Berbasis Game</a>
                    </div>
                    </div>
                </div>

                <!-- Dropdown: PBJ -->
                <div class="relative group cursor-pointer">
                    <span class="px-4 py-2 rounded-full hover:bg-blue-100/80 hover:text-blue-700 transition-all flex flex-row items-center gap-1.5 whitespace-nowrap flex-nowrap cursor-pointer">
                        <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> PBJ &darr;
                    </span>
                    <div class="absolute left-0 top-full mt-2 w-64 bg-white/95 backdrop-blur-3xl border border-gray-200 shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all flex flex-col py-2 z-50 overflow-hidden">
                        <div class="max-h-[65vh] overflow-y-auto [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-thumb]:rounded-full">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/dokumen-pengadaan-barang-dan-jasa/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Regulasi PBJ</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/dokumen-pengadaan-barang-dan-jasa/" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Rencana Umum PBJ</a>
                        <a href="https://s.id/Konstruksi_As_blokB_BPMPsultra" target="_blank" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Dokumen PBJ</a>
                        <a href="#" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">SPSE</a>
                        <a href="#" class="block px-5 py-3 text-sm text-slate-900 font-semibold transition-colors hover:bg-slate-100 hover:text-blue-700">Informasi Vendor (Daftar Hitam)</a>
                    </div>
                    </div>
                </div>
                </nav>

                <!-- RIGHT SIDE (Social Icons) -->
                <div class="flex items-center gap-3 ml-auto pl-8 lg:pl-12">
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
        </div>

        <!-- MOBILE MENU OVERLAY (GLASSMORPHISM) -->
        <div x-show="mobileMenuOpen" 
             x-transition.opacity.duration.300ms 
             style="display: none;" 
             class="lg:hidden absolute top-full left-0 w-full bg-blue-900/40 backdrop-blur-2xl border-b border-white/20 shadow-2xl z-50 flex flex-col">
            <div class="flex flex-col p-6 max-h-[75vh] overflow-y-auto pb-28">
                <a href="/" class="text-white font-semibold py-3 border-b border-white/10">Beranda</a>
                
                <!-- Accordion: Profil -->
                <div x-data="{ subMenuOpen: false }" class="border-b border-white/10">
                    <button @click="subMenuOpen = !subMenuOpen" class="w-full flex justify-between items-center text-white font-semibold py-3 focus:outline-none">
                        Profil
                        <svg :class="{'rotate-180': subMenuOpen}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="subMenuOpen" x-transition style="display: none;" class="bg-white/90 backdrop-blur-md rounded-xl p-4 mt-2 mb-4 shadow-inner flex flex-col gap-3 text-gray-800 max-h-[50vh] overflow-y-auto overscroll-contain">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-lembaga/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Profil BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/visi-misi/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Visi Misi Tugas dan Fungsi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-lembaga/#elementor-toc__heading-anchor-3" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Kedudukan Tugas dan Fungsi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Laman BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/struktur-organisasi/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Struktur Organisasi BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2024/11/05/junaiddin-pagala/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Profil Pejabat Struktural</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-pegawai/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Profil Pimpinan dan Pegawai</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Profil PPID BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Kalender Kegiatan 2026</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-pegawai/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Data Statistik Kepegawaian</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/#elementor-toc__heading-anchor-3" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Tugas dan Wewenang PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/visi-dan-misi-ppid/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Visi dan Misi PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/#elementor-toc__heading-anchor-6" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Struktur Organisasi PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/tim-ppid/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">SK PPID</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/category/berita/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Galeri Fasilitas Umum</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/sistem-pemerintahan-berbasis-elektronik-spbe/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Galeri Fasilitas Pelayanan</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/hubungi-kami/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Alamat & Kontak</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/maklumat-pelayanan/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Maklumat Pelayanan</a>
                    </div>
                </div>

                <!-- Accordion: Informasi Publik -->
                <div x-data="{ subMenuOpen: false }" class="border-b border-white/10">
                    <button @click="subMenuOpen = !subMenuOpen" class="w-full flex justify-between items-center text-white font-semibold py-3 focus:outline-none">
                        Informasi Publik
                        <svg :class="{'rotate-180': subMenuOpen}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="subMenuOpen" x-transition style="display: none;" class="bg-white/90 backdrop-blur-md rounded-xl p-4 mt-2 mb-4 shadow-inner flex flex-col gap-3 text-gray-800 max-h-[50vh] overflow-y-auto overscroll-contain">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/regulasi-dan-peraturan-kemendikdasmen/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Regulasi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-serta-merta/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Informasi Serta Merta</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/daftar-informasi-publik/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Daftar Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-setiap-saat/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Informasi Berkala</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/ppid/#elementor-toc__heading-anchor-2" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Informasi Dikecualikan</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-permohonan-informasi/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Permohonan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/informasi-setiap-saat/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Informasi Setiap Saat</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2024/04/09/rilis-tahap-pelaksanaan-pengelolaan-kinerja-kepala-sekolah-di-pmm/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Pedoman Pengelolaan Informasi Publik</a>
                    </div>
                </div>

                <!-- Accordion: Layanan Informasi -->
                <div x-data="{ subMenuOpen: false }" class="border-b border-white/10">
                    <button @click="subMenuOpen = !subMenuOpen" class="w-full flex justify-between items-center text-white font-semibold py-3 focus:outline-none">
                        Layanan Informasi
                        <svg :class="{'rotate-180': subMenuOpen}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="subMenuOpen" x-transition style="display: none;" class="bg-white/90 backdrop-blur-md rounded-xl p-4 mt-2 mb-4 shadow-inner flex flex-col gap-3 text-gray-800 max-h-[50vh] overflow-y-auto overscroll-contain">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/ppid/#elementor-toc__heading-anchor-4" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Permohonan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/#elementor-toc__heading-anchor-9" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Jadwal Pelayanan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/sistem-pemerintahan-berbasis-elektronik-spbe/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Jejak Surat</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-pengajuan-keberatan/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Pengajuan Keberatan Informasi Publik</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/tata-cara-permohonan-informasi-publik/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Tata Cara Permohonan Informasi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/pengaduan-spmb/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Pengaduan</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-pengajuan-keberatan/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Tata Cara Pengajuan Keberatan & Sengketa</a>
                        <a href="https://play.google.com/store/apps/details?id=com.dera.perman.ppidkemendikbudristek&pli=1" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">e-PPID Versi Android</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2026/06/17/bpmp-sultra-dan-pemda-kota-kendari-perkuat-perencanaan-berbasis-data-untuk-tingkatkan-capaian-spm-pendidikan/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Standar Biaya Pelayanan Informasi</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/tata-cara-pengaduan-penyalahgunaan-wewenang" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Tata Cara Pengaduan Penyalahgunaan Wewenang</a>
                        <a href="https://datastudio.google.com/u/0/reporting/2491c8f9-2138-416a-8717-eaed7296dc68/page/Zdy4D" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Laporan Pengaduan Masyarakat</a>
                    </div>
                </div>

                <!-- Accordion: Tautan -->
                <div x-data="{ subMenuOpen: false }" class="border-b border-white/10">
                    <button @click="subMenuOpen = !subMenuOpen" class="w-full flex justify-between items-center text-white font-semibold py-3 focus:outline-none">
                        Tautan
                        <svg :class="{'rotate-180': subMenuOpen}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="subMenuOpen" x-transition style="display: none;" class="bg-white/90 backdrop-blur-md rounded-xl p-4 mt-2 mb-4 shadow-inner flex flex-col gap-3 text-gray-800 max-h-[50vh] overflow-y-auto overscroll-contain">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/profil-ppid/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">PPID Kemendikdasmen</a>
                        <a href="https://wbs.kemendikdasmen.go.id/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Whistle Blowing System</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/ult/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">ULT BPMP Prov. Sultra</a>
                        <a href="https://data.kemendikdasmen.go.id/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Portal Data</a>
                        <a href="https://dapo.kemendikdasmen.go.id/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Dapodik</a>
                        <a href="https://www.lapor.go.id/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">SP4N LAPOR!</a>
                        <a href="https://bosp.kemendikdasmen.go.id/portal/welcome" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">BOSP</a>
                        <a href="https://pip.kemendikdasmen.go.id/home_v1" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">PIP</a>
                        <a href="https://ijazah.data.kemendikdasmen.go.id/manajemen/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">E-Ijazah</a>
                        <a href="https://siplah.kemendikdasmen.go.id/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">SIPLah</a>
                        <a href="https://data.kemendikdasmen.go.id/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Satu Data</a>
                    </div>
                </div>

                <!-- Accordion: Publikasi -->
                <div x-data="{ subMenuOpen: false }" class="border-b border-white/10">
                    <button @click="subMenuOpen = !subMenuOpen" class="w-full flex justify-between items-center text-white font-semibold py-3 focus:outline-none">
                        Publikasi
                        <svg :class="{'rotate-180': subMenuOpen}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="subMenuOpen" x-transition style="display: none;" class="bg-white/90 backdrop-blur-md rounded-xl p-4 mt-2 mb-4 shadow-inner flex flex-col gap-3 text-gray-800 max-h-[50vh] overflow-y-auto overscroll-contain">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/category/berita/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Berita</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/jurnal/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Jurnal Online BPMP Prov. Sultra</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/hasil-skm/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Hasil Survey Kepuasan Masyarakat</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/2024/12/25/kisah-inspiratif-implementasi-psp-angk-12-dan-3-di-prov-sultra/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Komik Pembelajaran</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/goes-to-school/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Model Pembelajaran Berbasis Game</a>
                    </div>
                </div>

                <!-- Accordion: PBJ -->
                <div x-data="{ subMenuOpen: false }" class="border-b border-white/10">
                    <button @click="subMenuOpen = !subMenuOpen" class="w-full flex justify-between items-center text-white font-semibold py-3 focus:outline-none">
                        PBJ
                        <svg :class="{'rotate-180': subMenuOpen}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="subMenuOpen" x-transition style="display: none;" class="bg-white/90 backdrop-blur-md rounded-xl p-4 mt-2 mb-4 shadow-inner flex flex-col gap-3 text-gray-800 max-h-[50vh] overflow-y-auto overscroll-contain">
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/dokumen-pengadaan-barang-dan-jasa/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Regulasi PBJ</a>
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/dokumen-pengadaan-barang-dan-jasa/" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Rencana Umum PBJ</a>
                        <a href="https://s.id/Konstruksi_As_blokB_BPMPsultra" target="_blank" class="text-sm font-medium hover:text-blue-600 transition-colors">Dokumen PBJ</a>
                        <a href="#" class="text-sm font-medium hover:text-blue-600 transition-colors">SPSE</a>
                        <a href="#" class="text-sm font-medium hover:text-blue-600 transition-colors">Informasi Vendor (Daftar Hitam)</a>
                    </div>
                </div>

                <!-- Social Icons -->
                <div class="flex flex-row items-center justify-start gap-6 mt-6 pt-6 border-t border-white/20 pl-4">
                    <a href="https://www.instagram.com/bpmpsultra/" target="_blank" class="text-pink-600 hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm3.98-10.98a1.44 1.44 0 110 2.881 1.44 1.44 0 010-2.881z"/></svg>
                    </a>
                    <a href="https://www.youtube.com/@bpmpsultra" target="_blank" class="text-red-600 hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.377.55a3.015 3.015 0 0 0-2.122 2.136C0 8.07 0 12 0 12s0 3.93.501 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.55 9.377.55 9.377.55s7.505 0 9.377-.55a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="https://www.tiktok.com/@bpmp.sulawesitenggara" target="_blank" class="text-white hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93v7.2c0 1.25-.2 2.51-.77 3.64-.67 1.34-1.78 2.4-3.1 3.03-1.42.67-3.07.83-4.57.51-1.63-.34-3.12-1.32-4.07-2.67-1-1.41-1.41-3.21-1.07-4.88.37-1.75 1.5-3.32 3.04-4.2 1.45-.82 3.25-1.03 4.88-.63v4.13c-1.2-.2-2.45.06-3.41.79-.81.62-1.28 1.6-1.28 2.62 0 1.05.5 2.05 1.33 2.66.79.57 1.83.73 2.76.49 1-.26 1.82-.95 2.27-1.87.35-.73.49-1.57.48-2.39V.02z"/></svg>
                    </a>
                </div>
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
                <div class="w-full lg:w-5/12 relative rounded-2xl overflow-hidden aspect-[4/3] md:aspect-[16/10] border-4 border-white/20 shadow-inner group"
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
                <div class="w-full lg:w-7/12 flex flex-col justify-center">
                    <h2 class="text-3xl md:text-4xl lg:text-[2.75rem] xl:text-5xl font-extrabold text-white leading-tight mb-6 drop-shadow-md">
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
            <!-- SECTION HEADER -->
            <div class="text-center mb-10 md:mb-12">
                <div class="inline-flex items-center gap-2 text-transparent bg-clip-text bg-gradient-to-r from-blue-600/80 to-purple-500/80 font-bold text-xs uppercase tracking-wider mb-4">
                    <span class="w-8 h-px bg-indigo-200"></span>
                    INFORMASI PUBLIK
                    <span class="w-8 h-px bg-indigo-200"></span>
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-slate-800 via-blue-700 to-indigo-600 drop-shadow-sm mb-4">
                    Layanan PPID
                </h2>
                <p class="text-gray-500 text-sm md:text-base max-w-2xl mx-auto">
                    Pilih layanan yang Anda butuhkan untuk memperoleh informasi publik dan menyampaikan permohonan atau keberatan.
                </p>
            </div>

            <div class="backdrop-blur-xl bg-white/70 border border-white/50 rounded-[2.5rem] p-6 lg:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.08)] flex flex-col lg:flex-row gap-10 items-start">
                <!-- Icon/Illustration Side -->
                <div class="w-full lg:w-1/4 flex justify-center lg:justify-start lg:mt-4">
                    <div class="flex-shrink-0 w-32 h-32 md:w-48 md:h-48 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-full flex items-center justify-center border-4 border-white shadow-inner">
                        <svg class="w-16 h-16 md:w-24 md:h-24 text-blue-600 drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                </div>
                <!-- Text Content Side -->
                <div class="w-full lg:w-3/4 flex flex-col text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1e1b4b] mb-4">Hai, #SahabatBPMPSultra</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Selamat datang di portal Pelayanan Publik Terpadu BPMP Provinsi Sulawesi Tenggara. Melalui PPID, kami berkomitmen mewujudkan keterbukaan informasi publik secara <strong>Cepat, Tepat, Transparan, dan Akuntabel</strong>. Anda dapat mengakses berbagai dokumen persyaratkan layanan publik lewat satu pintu secara mudah.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 mt-8 w-full max-w-2xl">
                        <!-- Mini-Card 1: Permohonan Informasi -->
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-permohonan-informasi/" target="_blank" class="bg-white/40 backdrop-blur-xl border border-white/70 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-lg hover:-translate-y-1 rounded-[2rem] p-6 md:p-8 flex flex-col items-center text-center transition-all duration-300 group">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-5 bg-blue-50/80 text-blue-600">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <h3 class="text-base md:text-lg font-bold text-slate-800 mb-2">Permohonan Informasi</h3>
                            <p class="text-xs text-slate-500 mb-4">Layanan permohonan informasi publik secara langsung.</p>
                            <span class="px-6 py-2 rounded-full border text-sm font-semibold transition-colors text-blue-600 border-blue-200 group-hover:bg-blue-50 mt-auto">Buat Permohonan &rarr;</span>
                        </a>
                        
                        <!-- Mini-Card 2: Pengajuan Keberatan -->
                        <a href="https://bpmpsultra.kemendikdasmen.go.id/form-pengajuan-keberatan/" target="_blank" class="bg-white/40 backdrop-blur-xl border border-white/70 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-lg hover:-translate-y-1 rounded-[2rem] p-6 md:p-8 flex flex-col items-center text-center transition-all duration-300 group">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-5 bg-rose-50/80 text-rose-600">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            </div>
                            <h3 class="text-base md:text-lg font-bold text-slate-800 mb-2">Pengajuan Keberatan</h3>
                            <p class="text-xs text-slate-500 mb-4">Fasilitas keberatan layanan informasi yang tidak sesuai.</p>
                            <span class="px-6 py-2 rounded-full border text-sm font-semibold transition-colors text-rose-600 border-rose-200 group-hover:bg-rose-50 mt-auto">Ajukan Keberatan &rarr;</span>
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
            
            <!-- NEW MODERN HEADER -->
            <div class="mb-10 flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
                <div>
                    <div class="inline-flex items-center gap-2 bg-indigo-500/10 border border-indigo-500/20 backdrop-blur-md px-4 py-1.5 rounded-full text-indigo-700 font-bold text-xs uppercase tracking-wider mb-4 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-indigo-600 animate-pulse"></span> LAYANAN MASYARAKAT
                    </div>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1e1b4b]">Informasi & Layanan</h2>
                    <div class="w-24 h-1.5 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full mt-4"></div>
                </div>
                <p class="text-slate-500 text-sm md:text-base max-w-md md:text-right">
                    Pusat informasi dan layanan BPMP Sulawesi Tenggara yang menyediakan informasi pelayanan, waktu operasional, serta kanal komunikasi secara mudah, transparan, dan responsif.
                </p>
            </div>

            <!-- PREMIUM GLASSMORPHISM GRID -->
            <div class="bg-white/40 backdrop-blur-2xl border border-white/60 shadow-xl rounded-[2rem] p-8 md:p-10 grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-0 md:divide-x divide-gray-300/50">
                
                <!-- Column 1 -->
                <div class="flex flex-col items-center text-center md:px-8 group transition-transform duration-300 hover:-translate-y-1">
                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-indigo-50 to-white shadow-inner flex items-center justify-center mb-6 border border-white">
                        <svg class="w-10 h-10 text-indigo-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="font-bold text-xl text-slate-800 mb-3">Pusat Informasi & Layanan</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Gedung Utama BPMP Provinsi Sulawesi Tenggara</p>
                </div>

                <!-- Column 2 -->
                <div class="flex flex-col items-center text-center md:px-8 group transition-transform duration-300 hover:-translate-y-1">
                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-indigo-50 to-white shadow-inner flex items-center justify-center mb-6 border border-white">
                        <svg class="w-10 h-10 text-indigo-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="font-bold text-xl text-slate-800 mb-3">Waktu Layanan</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Senin - Kamis: 07.30 - 16.00 WITA<br>Jumat: 07.30 - 16.30 WITA</p>
                </div>

                <!-- Column 3 -->
                <div class="flex flex-col items-center text-center md:px-8 group transition-transform duration-300 hover:-translate-y-1">
                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-indigo-50 to-white shadow-inner flex items-center justify-center mb-6 border border-white">
                        <svg class="w-10 h-10 text-indigo-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="font-bold text-xl text-slate-800 mb-3">Hubungi Kami</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Telp: (0401) 3121514<br>Email: bpmpsultra@kemendikdasmen.go.id</p>
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
                        <!-- The actual YouTube Embed using the provided ID: eILEKbqmeAY -->
                        <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/eILEKbqmeAY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <p class="hover:text-white transition-colors cursor-pointer">Website: bpmpsultra.kemendikdasmen.go.id</p>
                        <p class="hover:text-white transition-colors cursor-pointer">Email: bpmpsultra@kemendikdasmen.go.id</p>
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

            // Create base layers
            var osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            });

            var satelliteLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                maxZoom: 19,
                attribution: 'Tiles &copy; Esri &mdash; Source: Esri'
            });

            // Add default layer to map
            osmLayer.addTo(map);

            // Create layer control
            var baseMaps = {
                "Peta Jalan": osmLayer,
                "Satelit": satelliteLayer
            };
            L.control.layers(baseMaps).addTo(map);

            // Add a marker for BPMP Sultra
            var marker = L.marker([-3.9897148, 122.5186071]).addTo(map);

            // Add a custom popup
            marker.bindPopup('<b>BPMP Provinsi Sulawesi Tenggara</b><br>Kementerian Pendidikan Dasar dan Menengah.').openPopup();
        });
    </script>
    <!-- ============================================================ -->
    <!-- NATIVE ACCESSIBILITY WIDGET (Alpine.js + Tailwind) -->
    <!-- ============================================================ -->
    <!-- ============================================================ -->
    <!-- NATIVE ACCESSIBILITY WIDGET (Alpine.js + Tailwind) -->
    <!-- ============================================================ -->
    <div x-data="accessibilityWidget()" class="fixed bottom-6 left-6 z-[99999]">

        <!-- Animated Trigger Button -->
        <button type="button" @click="open = !open"
            class="relative w-12 h-12 md:w-14 md:h-14 bg-purple-700 text-white rounded-full shadow-lg flex items-center justify-center hover:scale-110 transition-all duration-300 focus:outline-none"
            :class="{'scale-110': open}"
            aria-label="Menu Aksesibilitas">
            <!-- Animated ring -->
            <span class="absolute inline-flex h-full w-full rounded-full bg-purple-600 opacity-60 animate-ping"></span>
            <!-- Accessibility Icon -->
            <svg class="relative w-6 h-6 md:w-8 md:h-8 z-10" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm9 7h-6v13h-2v-6h-2v6H9V9H3V7h18v2z"/>
            </svg>
        </button>

        <!-- Accessibility Panel -->
        <div x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-4"
            class="fixed bottom-24 left-6 w-[90vw] md:w-[400px] max-h-[75vh] overflow-y-auto z-[99999] bg-white rounded-2xl shadow-2xl origin-bottom-left border border-gray-200"
            style="display:none;"
            @click.outside="open = false">

            <!-- Header -->
            <div class="bg-purple-700 text-white px-4 py-3 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm9 7h-6v13h-2v-6h-2v6H9V9H3V7h18v2z"/></svg>
                    <span class="font-bold text-sm">Menu Aksesibilitas</span>
                </div>
                <div class="flex items-center gap-2">
                    <button type="button" @click.stop="resetAll()" title="Reset" class="hover:bg-purple-600 rounded-full p-1 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </button>
                    <button type="button" @click.stop="open = false" class="hover:bg-purple-600 rounded-full p-1 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>

            <!-- Body -->
            <div class="p-4 max-h-[80vh] overflow-y-auto space-y-5" @click.stop>

                <!-- Section: Teks dan Membaca -->
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-3">Teks dan Membaca</p>
                    <!-- Font Size Control -->
                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 mb-3">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">Sesuaikan Ukuran Font</p>
                        <div class="flex items-center justify-between">
                            <button type="button" @click.stop="decreaseFont()" class="w-9 h-9 bg-white border border-gray-300 rounded-lg text-gray-700 font-bold text-lg hover:bg-purple-50 hover:border-purple-300 hover:text-purple-600 transition">−</button>
                            <span class="text-sm font-bold text-gray-700" x-text="fontScale + '%'"></span>
                            <button type="button" @click.stop="increaseFont()" class="w-9 h-9 bg-white border border-gray-300 rounded-lg text-gray-700 font-bold text-lg hover:bg-purple-50 hover:border-purple-300 hover:text-purple-600 transition">+</button>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <button type="button" @click.stop="toggleDyslexia()" :class="dyslexia ? 'border-purple-500 bg-purple-50 text-purple-700' : 'border-gray-200 bg-white text-gray-700'" class="flex flex-col items-center gap-1.5 p-3 rounded-xl border text-xs font-semibold hover:border-purple-400 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            Font Disleksia
                        </button>
                        <button type="button" @click.stop="toggleHighlightLinks()" :class="highlightLinks ? 'border-yellow-400 bg-yellow-50 text-yellow-700' : 'border-gray-200 bg-white text-gray-700'" class="flex flex-col items-center gap-1.5 p-3 rounded-xl border text-xs font-semibold hover:border-yellow-400 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                            Sorot Tautan
                        </button>
                        <button type="button" @click.stop="toggleTextSpacing()" :class="textSpacing ? 'border-blue-500 bg-blue-50 text-blue-700' : 'border-gray-200 bg-white text-gray-700'" class="flex flex-col items-center gap-1.5 p-3 rounded-xl border text-xs font-semibold hover:border-blue-400 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                            Spasi Teks
                        </button>
                    </div>
                </div>


                <!-- Section: Navigasi dan Interaksi -->
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-3">Navigasi dan Interaksi</p>
                    <div class="grid grid-cols-2 gap-2">
                        <button type="button" @click.stop="toggleMute()" :class="muted ? 'border-red-400 bg-red-50 text-red-700' : 'border-gray-200 bg-white text-gray-700'" class="flex flex-col items-center gap-1.5 p-3 rounded-xl border text-xs font-semibold hover:border-red-400 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" clip-rule="evenodd"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2"/></svg>
                            Bisukan Suara
                        </button>
                        <button type="button" @click.stop="readPage()" :class="reading ? 'border-green-500 bg-green-50 text-green-700' : 'border-gray-200 bg-white text-gray-700'" class="flex flex-col items-center gap-1.5 p-3 rounded-xl border text-xs font-semibold hover:border-green-400 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072M12 6v12m0 0l-4-4m4 4l4-4M6.343 9.657a8 8 0 000 4.686"/></svg>
                            Baca Halaman
                        </button>
                        <button type="button" @click.stop="toggleReadingGuide()" :class="readingGuide ? 'border-orange-400 bg-orange-50 text-orange-700' : 'border-gray-200 bg-white text-gray-700'" class="flex flex-col items-center gap-1.5 p-3 rounded-xl border text-xs font-semibold hover:border-orange-400 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m-8-8h16"/></svg>
                            Panduan Membaca
                        </button>
                        <button type="button" @click.stop="toggleStopAnimations()" :class="stopAnimations ? 'border-indigo-400 bg-indigo-50 text-indigo-700' : 'border-gray-200 bg-white text-gray-700'" class="flex flex-col items-center gap-1.5 p-3 rounded-xl border text-xs font-semibold hover:border-indigo-400 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Hentikan Animasi
                        </button>
                        <button type="button" @click.stop="toggleBigCursor()" :class="bigCursor ? 'border-teal-400 bg-teal-50 text-teal-700' : 'border-gray-200 bg-white text-gray-700'" class="flex flex-col items-center gap-1.5 p-3 rounded-xl border text-xs font-semibold hover:border-teal-400 transition col-span-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5"/></svg>
                            Kursor Besar
                        </button>
                    </div>
                </div>

                <!-- Reset Button -->
                <button type="button" @click.stop="resetAll()" class="w-full bg-purple-700 text-white font-bold py-2.5 rounded-xl hover:bg-purple-800 transition text-sm">
                    ↺ Atur Ulang Pengaturan
                </button>
            </div>
        </div>
    </div>

    <!-- Reading Guide Overlay -->
    <div id="reading-guide" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; pointer-events:none; z-index:9998;">
        <div id="reading-guide-bar" style="position:absolute; width:100%; height:40px; background:rgba(255,255,0,0.3); border-top:2px solid rgba(255,200,0,0.8); border-bottom:2px solid rgba(255,200,0,0.8); pointer-events:none;"></div>
    </div>

    <!-- WhatsApp Floating Action Button -->
    <div x-data="{ openWa: false }" class="fixed bottom-6 right-6 z-[99999]">

        <!-- WA Popup Modal -->
        <div x-show="openWa"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-4"
            class="fixed bottom-24 right-6 w-80 max-h-[70vh] overflow-y-auto z-[99999] bg-white rounded-2xl shadow-2xl origin-bottom-right border border-gray-100"
            style="display:none;"
            @click.outside="openWa = false">

            <!-- WA Modal Header -->
            <div class="bg-[#25D366] text-white px-4 py-3 flex items-center gap-3">
                <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 0C5.385 0 0 5.385 0 12.031c0 2.128.553 4.195 1.604 6.01L.027 24l6.107-1.604A11.95 11.95 0 0012.031 24c6.646 0 12.031-5.385 12.031-12.031S18.677 0 12.031 0zm6.545 17.202c-.276.779-1.579 1.488-2.181 1.545-.568.054-1.289.176-3.923-1.092-3.155-1.517-5.184-4.739-5.342-4.949-.158-.21-1.272-1.694-1.272-3.234 0-1.54.805-2.298 1.094-2.587.29-.29.632-.363.843-.363.21 0 .42.002.597.01.21.01.492-.084.768.583.29.704.992 2.42 1.077 2.587.085.167.142.363.027.592-.115.228-.172.372-.344.571-.171.199-.36.438-.515.584-.171.168-.352.353-.153.693.199.34 1.157 1.905 1.565 2.274.379.342 1.353.794 1.732.962.379.168.6.143.823-.053.223-.197.962-1.121 1.222-1.505.26-.384.519-.319.86-.192.341.127 2.155 1.015 2.524 1.2.37.184.615.276.705.428.09.153.09.882-.186 1.661z"/></svg>
                <div>
                    <p class="font-bold text-sm">Mulai Percakapan</p>
                    <p class="text-xs text-green-100">Pilih saluran bantuan kami</p>
                </div>
            </div>

            <!-- WA Modal Body -->
            <div class="p-4 space-y-3" @click.stop>
                <p class="text-xs text-gray-400 font-medium">Klik link dibawah ini :</p>

                <!-- Option 1: Helpdesk -->
                <a href="https://wa.me/6281281435091" target="_blank"
                   class="flex items-center gap-3 p-3 bg-white border border-gray-100 border-l-4 border-l-[#25D366] rounded-xl shadow-sm hover:shadow-md hover:bg-green-50 transition-all duration-200 group">
                    <div class="w-10 h-10 bg-[#25D366] rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 0C5.385 0 0 5.385 0 12.031c0 2.128.553 4.195 1.604 6.01L.027 24l6.107-1.604A11.95 11.95 0 0012.031 24c6.646 0 12.031-5.385 12.031-12.031S18.677 0 12.031 0z"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-gray-800 text-sm group-hover:text-[#128C7E] transition-colors">Helpdesk Kemdikbud</p>
                        <p class="text-xs text-gray-400">+62 812-8143-5091</p>
                    </div>
                    <svg class="w-4 h-4 text-gray-300 ml-auto group-hover:text-[#25D366] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>

                <!-- Option 2: Grup WA -->
                <a href="https://chat.whatsapp.com/CfzJauo1F17I5sTHXmme2L?mode=r_c" target="_blank"
                   class="flex items-center gap-3 p-3 bg-white border border-gray-100 border-l-4 border-l-[#25D366] rounded-xl shadow-sm hover:shadow-md hover:bg-green-50 transition-all duration-200 group">
                    <div class="w-10 h-10 bg-[#128C7E] rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-gray-800 text-sm group-hover:text-[#128C7E] transition-colors">ULT BPMP Sultra</p>
                        <p class="text-xs text-gray-400">Grup WhatsApp Resmi</p>
                    </div>
                    <svg class="w-4 h-4 text-gray-300 ml-auto group-hover:text-[#25D366] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>

        <!-- WA Floating Button -->
        <button type="button" @click="openWa = !openWa"
            class="relative flex items-center justify-center w-12 h-12 md:w-14 md:h-14 bg-[#25D366] text-white rounded-full shadow-[0_4px_10px_rgba(37,211,102,0.4)] hover:scale-110 hover:shadow-lg transition-all duration-300 focus:outline-none">
            <span class="absolute inline-flex h-full w-full rounded-full bg-[#25D366] opacity-75 animate-ping"></span>
            <!-- WA Icon when closed -->
            <svg x-show="!openWa" class="w-6 h-6 md:w-8 md:h-8 relative z-10" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 0C5.385 0 0 5.385 0 12.031c0 2.128.553 4.195 1.604 6.01L.027 24l6.107-1.604A11.95 11.95 0 0012.031 24c6.646 0 12.031-5.385 12.031-12.031S18.677 0 12.031 0zm6.545 17.202c-.276.779-1.579 1.488-2.181 1.545-.568.054-1.289.176-3.923-1.092-3.155-1.517-5.184-4.739-5.342-4.949-.158-.21-1.272-1.694-1.272-3.234 0-1.54.805-2.298 1.094-2.587.29-.29.632-.363.843-.363.21 0 .42.002.597.01.21.01.492-.084.768.583.29.704.992 2.42 1.077 2.587.085.167.142.363.027.592-.115.228-.172.372-.344.571-.171.199-.36.438-.515.584-.171.168-.352.353-.153.693.199.34 1.157 1.905 1.565 2.274.379.342 1.353.794 1.732.962.379.168.6.143.823-.053.223-.197.962-1.121 1.222-1.505.26-.384.519-.319.86-.192.341.127 2.155 1.015 2.524 1.2.37.184.615.276.705.428.09.153.09.882-.186 1.661z"/></svg>
            <!-- X Icon when open -->
            <svg x-show="openWa" class="w-6 h-6 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>

    <!-- Alpine.js Accessibility Widget Logic -->
    <script>
        function accessibilityWidget() {
            return {
                open: false,
                fontScale: 100,
                dyslexia: false,
                highlightLinks: false,
                textSpacing: false,
                contrast: null,
                monochrome: false,
                muted: false,
                reading: false,
                readingGuide: false,
                stopAnimations: false,
                bigCursor: false,

                increaseFont() {
                    if (this.fontScale < 150) {
                        this.fontScale += 10;
                        document.documentElement.style.fontSize = (this.fontScale / 100 * 16) + 'px';
                    }
                },
                decreaseFont() {
                    if (this.fontScale > 70) {
                        this.fontScale -= 10;
                        document.documentElement.style.fontSize = (this.fontScale / 100 * 16) + 'px';
                    }
                },
                toggleDyslexia() {
                    this.dyslexia = !this.dyslexia;
                    if (this.dyslexia) {
                        document.body.style.fontFamily = "'Comic Sans MS', 'Comic Sans', cursive, sans-serif";
                    } else {
                        document.body.style.fontFamily = '';
                    }
                },
                toggleHighlightLinks() {
                    this.highlightLinks = !this.highlightLinks;
                    let styleTag = document.getElementById('a11y-highlight-links');
                    if (this.highlightLinks) {
                        if (!styleTag) {
                            styleTag = document.createElement('style');
                            styleTag.id = 'a11y-highlight-links';
                            document.head.appendChild(styleTag);
                        }
                        styleTag.textContent = 'a { background-color: yellow !important; color: black !important; text-decoration: underline !important; }';
                    } else {
                        if (styleTag) styleTag.textContent = '';
                    }
                },
                toggleTextSpacing() {
                    this.textSpacing = !this.textSpacing;
                    let styleTag = document.getElementById('a11y-text-spacing');
                    if (this.textSpacing) {
                        if (!styleTag) {
                            styleTag = document.createElement('style');
                            styleTag.id = 'a11y-text-spacing';
                            document.head.appendChild(styleTag);
                        }
                        styleTag.textContent = '* { letter-spacing: 0.12em !important; word-spacing: 0.16em !important; line-height: 1.8 !important; }';
                    } else {
                        if (styleTag) styleTag.textContent = '';
                    }
                },
                setContrast(type) {
                    if (this.contrast === type) {
                        this.contrast = null;
                        document.body.style.filter = this.monochrome ? 'grayscale(100%)' : '';
                    } else {
                        this.contrast = type;
                        let filter = '';
                        if (type === 'dark') filter = 'invert(1) hue-rotate(180deg)';
                        else if (type === 'light') filter = 'brightness(1.3) contrast(1.2)';
                        else if (type === 'high') filter = 'saturate(3) contrast(1.5)';
                        if (this.monochrome) filter += ' grayscale(100%)';
                        document.body.style.filter = filter;
                    }
                },
                toggleMonochrome() {
                    this.monochrome = !this.monochrome;
                    let base = '';
                    if (this.contrast === 'dark') base = 'invert(1) hue-rotate(180deg)';
                    else if (this.contrast === 'light') base = 'brightness(1.3) contrast(1.2)';
                    else if (this.contrast === 'high') base = 'saturate(3) contrast(1.5)';
                    document.body.style.filter = base + (this.monochrome ? ' grayscale(100%)' : '');
                },
                toggleMute() {
                    this.muted = !this.muted;
                    document.querySelectorAll('audio, video').forEach(el => {
                        el.muted = this.muted;
                        if (this.muted) el.pause();
                    });
                },
                readPage() {
                    if ('speechSynthesis' in window) {
                        if (this.reading) {
                            window.speechSynthesis.cancel();
                            this.reading = false;
                        } else {
                            const text = document.body.innerText.substring(0, 3000);
                            const utterance = new SpeechSynthesisUtterance(text);
                            utterance.lang = 'id-ID';
                            utterance.rate = 0.9;
                            utterance.onend = () => { this.reading = false; };
                            utterance.onerror = () => { this.reading = false; };
                            window.speechSynthesis.speak(utterance);
                            this.reading = true;
                        }
                    } else {
                        alert('Browser Anda tidak mendukung fitur Text-to-Speech.');
                    }
                },
                toggleReadingGuide() {
                    this.readingGuide = !this.readingGuide;
                    const guide = document.getElementById('reading-guide');
                    if (this.readingGuide) {
                        guide.style.display = 'block';
                        const bar = document.getElementById('reading-guide-bar');
                        document.addEventListener('mousemove', this._moveGuide = (e) => {
                            bar.style.top = (e.clientY - 20) + 'px';
                        });
                    } else {
                        guide.style.display = 'none';
                        document.removeEventListener('mousemove', this._moveGuide);
                    }
                },
                toggleStopAnimations() {
                    this.stopAnimations = !this.stopAnimations;
                    let styleTag = document.getElementById('a11y-stop-animations');
                    if (this.stopAnimations) {
                        if (!styleTag) {
                            styleTag = document.createElement('style');
                            styleTag.id = 'a11y-stop-animations';
                            document.head.appendChild(styleTag);
                        }
                        styleTag.textContent = '* { animation: none !important; transition: none !important; }';
                    } else {
                        if (styleTag) styleTag.textContent = '';
                    }
                },
                toggleBigCursor() {
                    this.bigCursor = !this.bigCursor;
                    let styleTag = document.getElementById('a11y-big-cursor');
                    if (this.bigCursor) {
                        if (!styleTag) {
                            styleTag = document.createElement('style');
                            styleTag.id = 'a11y-big-cursor';
                            document.head.appendChild(styleTag);
                        }
                        styleTag.textContent = '*, *:hover { cursor: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'48\' height=\'48\' viewBox=\'0 0 24 24\'%3E%3Cpath d=\'M4 0l16 12.279-6.951 1.17 4.325 8.817-3.596 1.734-4.337-8.879-5.441 4.234z\' fill=\'%23000\'/%3E%3C/svg%3E") 4 0, auto !important; }';
                    } else {
                        if (styleTag) styleTag.textContent = '';
                    }
                },
                resetAll() {
                    this.fontScale = 100;
                    this.dyslexia = false;
                    this.highlightLinks = false;
                    this.textSpacing = false;
                    this.contrast = null;
                    this.monochrome = false;
                    this.stopAnimations = false;
                    this.bigCursor = false;
                    this.readingGuide = false;
                    if (this.reading) {
                        window.speechSynthesis && window.speechSynthesis.cancel();
                        this.reading = false;
                    }
                    if (this.muted) {
                        document.querySelectorAll('audio, video').forEach(el => { el.muted = false; });
                        this.muted = false;
                    }
                    document.documentElement.style.fontSize = '';
                    document.body.style.fontFamily = '';
                    document.body.style.filter = '';
                    const ids = ['a11y-highlight-links','a11y-text-spacing','a11y-stop-animations','a11y-big-cursor'];
                    ids.forEach(id => { const s = document.getElementById(id); if (s) s.textContent = ''; });
                    const guide = document.getElementById('reading-guide');
                    if (guide) guide.style.display = 'none';
                    document.removeEventListener('mousemove', this._moveGuide);
                }
            }
        }
    </script>
</body>
</html>

