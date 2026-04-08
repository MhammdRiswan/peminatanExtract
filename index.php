<?php
include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KeDai Konsentrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
    body {
        font-family: "Inter", sans-serif;
    }

    .modal-active {
        overflow: hidden;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
    }
    </style>
</head>

<body class="bg-slate-50 text-slate-900">
    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center gap-2 group cursor-pointer">
                    <div
                        class="w-15 h-15 bg-gradient-to-tr from-blue-600 to-indigo-500 rounded-xl shadow-lg flex items-center justify-center transition-transform group-hover:rotate-12">
                        <img src="src/Kdcw.jpeg" alt="Logo" class="w-15 h-10 object-cover rounded-xl"
                            onerror="this.style.display='none'">
                    </div>
                    <span
                        class="text-xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">
                        KeDai Computerworks
                    </span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Home</a>
                    <a href="https://kedai.or.id/"
                        class="bg-blue-600 text-white px-5 py-2.5 rounded-full text-sm font-bold hover:bg-blue-700 shadow-md transition">About</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="py-16 md:py-24 px-4">
        <div class="container mx-auto text-center max-w-3xl">
            <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 mb-6 tracking-tight">
                Welcome to <span class="text-blue-600">KeDai Konsentrasi</span>
            </h1>
            <p id="typewriter" class="text-lg md:text-2xl text-slate-600 mb-10 leading-relaxed min-h-[3rem]"></p>
        </div>
    </header>

    <main class="container mx-auto px-4 pb-24">
        <div class="flex flex-wrap justify-center gap-8">
            <div
                class="group bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 max-w-sm w-full">
                <div
                    class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-3 text-slate-800">Program Konsentrasi</h2>
                <p class="text-slate-500 mb-8 leading-relaxed">Jelajahi berbagai bidang spesialisasi teknologi yang
                    tersedia di KeDai Computerworks.</p>
                <button onclick="openModal('modal-info')"
                    class="w-full py-3 px-4 bg-slate-50 text-slate-800 font-bold rounded-xl hover:bg-blue-600 hover:text-white transition-all">
                    Lihat Detail
                </button>
            </div>

            <div
                class="group bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 max-w-sm w-full">
                <div
                    class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-3 text-slate-800">Our Documentation</h2>
                <p class="text-slate-500 mb-8 leading-relaxed">Optimasi kode maksimal untuk waktu pemuatan yang sangat
                    instan dan efisien.</p>
                <button
                    class="w-full py-3 px-4 bg-slate-50 text-slate-800 font-bold rounded-xl cursor-not-allowed opacity-50">
                    Segera Hadir
                </button>
            </div>
        </div>
    </main>

    <div id="modal-overlay"
        class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-[60] hidden transition-opacity duration-300"></div>

    <div id="modal-info" class="fixed inset-0 z-[70] hidden justify-center items-center p-4">
        <div
            class="bg-white rounded-3xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-hidden flex flex-col transform transition-all">
            <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-white sticky top-0 z-10">
                <h2 class="text-2xl font-bold text-slate-900">Konsentrasi KeDai</h2>
                <button onclick="closeModal('modal-info')"
                    class="p-2 hover:bg-slate-100 rounded-full text-slate-400 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="p-6 overflow-y-auto custom-scrollbar space-y-6 text-sm md:text-base">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-4 bg-blue-50 rounded-2xl">
                        <h4 class="font-bold text-blue-700 mb-1">1. Frontend Web</h4>
                        <p class="text-slate-600 text-xs">Fokus pada antarmuka pengguna, slicing desain ke kode, dan
                            interaktivitas menggunakan framework modern.</p>
                    </div>
                    <div class="p-4 bg-indigo-50 rounded-2xl">
                        <h4 class="font-bold text-indigo-700 mb-1">2. Backend Web</h4>
                        <p class="text-slate-600 text-xs">Mengelola server, database, dan logika bisnis aplikasi agar
                            sistem berjalan aman dan stabil.</p>
                    </div>
                    <div class="p-4 bg-purple-50 rounded-2xl">
                        <h4 class="font-bold text-purple-700 mb-1">3. Mobile Development</h4>
                        <p class="text-slate-600 text-xs">Pengembangan aplikasi Android/iOS baik secara native maupun
                            cross-platform.</p>
                    </div>
                    <div class="p-4 bg-pink-50 rounded-2xl">
                        <h4 class="font-bold text-pink-700 mb-1">4. DKV (Desain Grafis)</h4>
                        <p class="text-slate-600 text-xs">Visual branding, pembuatan konten kreatif, dan komunikasi
                            visual yang efektif.</p>
                    </div>
                    <div class="p-4 bg-orange-50 rounded-2xl">
                        <h4 class="font-bold text-orange-700 mb-1">5. UI/UX Design</h4>
                        <p class="text-slate-600 text-xs">Riset pengalaman pengguna dan perancangan desain antarmuka
                            yang intuitif.</p>
                    </div>
                </div>

                <div class="space-y-3">
                    <h4 class="font-bold text-slate-800 flex items-center gap-2">
                        <span class="w-2 h-2 bg-red-500 rounded-full"></span> Materi Wajib (Non-Konsentrasi)
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border border-slate-200 p-4 rounded-2xl">
                            <h5 class="font-semibold text-slate-700">Network</h5>
                            <p class="text-slate-500 text-xs">Pemahaman dasar jaringan, IP Address, dan konfigurasi
                                perangkat keras jaringan.</p>
                        </div>
                        <div class="border border-slate-200 p-4 rounded-2xl">
                            <h5 class="font-semibold text-slate-700">Hardware</h5>
                            <p class="text-slate-500 text-xs">Perakitan, maintenance PC, dan pengenalan komponen fisik
                                komputer.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-slate-100 bg-slate-50">
                <button onclick="switchModal('modal-info', 'modal-form')"
                    class="w-full py-4 bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-700 transition-all shadow-lg shadow-blue-200">
                    Pilih Konsentrasi Sekarang
                </button>
            </div>
        </div>
    </div>

    <div id="modal-form" class="fixed inset-0 z-[70] hidden justify-center items-center p-4">
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md overflow-hidden transform transition-all">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-slate-900">Form Pemilihan</h2>
                    <button onclick="closeModal('modal-form')" class="text-slate-400 hover:text-slate-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form action="simpan.php" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="nama" required
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                            placeholder="Masukkan nama...">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">NIM</label>
                            <input type="text" name="nim" required
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                                placeholder="20xxxx">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">Jenis Kelamin</label>
                            <select name="jenis_kelamin"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Jurusan</label>
                        <input type="text" name="jurusan" required
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                            placeholder="Teknik Informatika">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Konsentrasi</label>
                        <select name="konsentrasi"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none font-medium">
                            <option value="Frontend Web">Frontend Web</option>
                            <option value="Backend Web">Backend Web</option>
                            <option value="Mobile Development">Mobile Development</option>
                            <option value="DKV">DKV</option>
                            <option value="UI/UX Design">UI/UX Design</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="w-full py-4 bg-indigo-600 text-white font-bold rounded-2xl hover:bg-indigo-700 transition-all mt-4">
                        Kirim Pendaftaran
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
    function openModal(id) {
        const modal = document.getElementById(id);
        const overlay = document.getElementById("modal-overlay");
        overlay.classList.remove("hidden");
        modal.classList.remove("hidden");
        modal.classList.add("flex");
        document.body.classList.add("modal-active");
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        const overlay = document.getElementById("modal-overlay");
        overlay.classList.add("hidden");
        modal.classList.remove("flex");
        modal.classList.add("hidden");
        document.body.classList.remove("modal-active");
    }

    function switchModal(oldId, newId) {
        closeModal(oldId);
        setTimeout(() => {
            openModal(newId);
        }, 300);
    }


    document.getElementById("modal-overlay").addEventListener("click", function() {
        document.querySelectorAll('[id^="modal-"]').forEach((m) => {
            if (!m.classList.contains("hidden")) closeModal(m.id);
        });
    });

    const textElement = document.getElementById("typewriter");
    const phrase = "Ubah Logika Menjadi Realita: Mulai Perjalanan Teknologimu Hari Ini.";
    let j = 0;

    function type() {
        if (j < phrase.length) {
            // Proses Mengetik
            textElement.innerHTML = phrase.substring(0, j + 1) +
                '<span class="border-r-2 border-blue-600 animate-pulse ml-1"></span>';
            j++;
            setTimeout(type, 110);
        } else {
            // Kalimat selesai, tunggu 2 detik (2000ms) lalu reset dan mulai lagi
            setTimeout(() => {
                j = 0;
                type();
            }, 2000);
        }
    }
    type();
    window.onload = type;
    </script>
</body>

</html>