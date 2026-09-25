# 🏛️ PPID BPMP Provinsi Sulawesi Tenggara
> **Official Public Information Management & Documentation Portal**

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)](#)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=flat&logo=tailwind-css&logoColor=white)](#)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-8BC0D0?style=flat&logo=alpinedotjs&logoColor=black)](#)
[![PHP](https://img.shields.io/badge/PHP-%3E%3D%208.1-777BB4?style=flat&logo=php&logoColor=white)](#)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](#)

Portal resmi Pejabat Pengelola Informasi dan Dokumentasi (PPID) Balai Penjaminan Mutu Pendidikan (BPMP) Provinsi Sulawesi Tenggara. Website ini dirancang untuk memfasilitasi keterbukaan informasi publik yang transparan, mudah diakses (*inclusive web accessibility*), serta terintegrasi langsung dengan layanan bantuan pengaduan masyarakat.

---

## 📖 Ringkasan Proyek (Overview)

Sistem ini melayani permohonan informasi publik secara daring dengan mengedepankan kepatuhan aksesibilitas web. Antarmuka web dioptimalkan menggunakan kombinasi **Tailwind CSS** dan **Alpine.js** untuk menghadirkan fitur aksesibilitas dinamis tanpa kendala *CSS stacking context* maupun layout *glitch*. Sistem juga dilengkapi *Floating Action Button* (FAB) interaktif menuju layanan bantuan resmi.

---

## ✨ Fitur Unggulan

* **Advanced Accessibility Suite**: Widget aksesibilitas ramah disabilitas yang mencakup:
  * Penyesuaian font khusus pembaca disleksia (*Dyslexia Font*).
  * Penyorot tautan interaktif (*Highlight Links*).
  * Pengaturan jarak teks (*Letter Spacing* & *Line Height*).
  * Diarsiteki secara aman untuk mencegah *bug* tampilan pada elemen `position: fixed`.
* **Integrated Helpdesk FAB**: Tombol bantuan melayang (*floating widget*) untuk mengarahkan pengguna secara instan ke WhatsApp ULT BPMP Sultra dan Helpdesk Kemendikbudristek.
* **Responsive Navigation**: Sinkronisasi navigasi desktop dan menu mobile (*drawer*) yang mulus.
* **Shared Hosting Ready**: Struktur kode dan konfigurasi aset telah disesuaikan agar siap di-*deploy* pada layanan web hosting berbasis cPanel maupun free tier (seperti InfinityFree).

---

## 🛠️ Tumpukan Teknologi (Tech Stack)

* **Backend Framework**: Laravel
* **Frontend UI & Styling**: Tailwind CSS
* **Client-side Interactivity**: Alpine.js
* **Template Engine**: Laravel Blade
* **Database**: MySQL / MariaDB
* **Languages**: PHP (>= 8.1), JavaScript, HTML5, CSS3

---

## 📂 Struktur Direktori Ringkas

```text
ppid-bpmpsultra/
├── app/                  # Controller, Models, dan Logika Bisnis
├── database/             # Migrasi tabel dan seeder database
├── public/               # File aset publik hasil build (Vite/Mix)
├── resources/
│   ├── css/              # Konfigurasi Tailwind CSS
│   ├── js/               # Inisialisasi Alpine.js & skrip custom
│   └── views/            # Template Blade (tampilan portal & widget)
├── routes/               # Routing aplikasi web
├── .env.example          # Contoh variabel lingkungan
└── composer.json         # Dependensi PHP
