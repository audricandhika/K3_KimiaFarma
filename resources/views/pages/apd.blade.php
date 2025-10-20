@extends('layouts.app')

@section('title', 'APD - Kimia Farma')

@section('content')
    <div class="mb-8 text-center mt-10">
        <h1 class="text-3xl font-bold text-blue-600 mb-2">Alat Pelindung Diri <br> (APD)</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">
            PT Kimia Farma menerapkan APD sesuai Undang-Undang No. 1 Tahun 1970 tentang Keselamatan Kerja dan PP No. 50
            Tahun 2012 tentang Penerapan SMK3. APD wajib digunakan untuk melindungi pekerja dari bahaya kimia, fisik, dan
            biologis di lingkungan kerja, termasuk area produksi, laboratorium, dan gudang B3.
        </p>
    </div>

    <div class="px-4 py-6 sm:px-0">
        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-8 text-center">Jenis dan Penerapan APD</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Card 1: Alat Pelindung Muka dan Mata --}}
            <div
                class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 overflow-hidden">
                <div class="p-5 border-b border-gray-100 bg-blue-50">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-blue-100 rounded-lg">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900">Alat Pelindung Muka dan Mata</h4>
                    </div>
                </div>
                <div class="p-5 space-y-3">
                    <p class="text-sm text-gray-700 font-medium">Fungsi Utama:</p>
                    <p class="text-sm text-gray-600">Melindungi dari percikan bahan kimia panas/korosif dan paparan cahaya.
                    </p>
                    <p class="text-sm text-gray-700 font-medium">Penerapan di Kimia Farma:</p>
                    <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside">
                        <li>Wajib di area pencampuran (mixing), reaktor kimia.</li>
                        <li>Saat mengangani bahan kimia cair.</li>
                    </ul>
                </div>
            </div>

            {{-- Card 2: Alat Pernapasan --}}
            <div
                class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 overflow-hidden">
                <div class="p-5 border-b border-gray-100 bg-green-50">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-green-100 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900">Alat Pernapasan</h4>
                    </div>
                </div>
                <div class="p-5 space-y-3">
                    <p class="text-sm text-gray-700 font-medium">Fungsi Utama:</p>
                    <p class="text-sm text-gray-600">Mencegah pernapasan dari paparan debu, kabut, gas, uap, atau oksigen
                        rendah.</p>
                    <p class="text-sm text-gray-700 font-medium">Penerapan di Kimia Farma:</p>
                    <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside">
                        <li>Saat bongkar muat bahan baku.</li>
                        <li>Pemindahan bahan berbahaya di area proses granulasi.</li>
                        <li>Saat uap di area organik potensial.</li>
                    </ul>
                </div>
            </div>

            {{-- Card 3: Alat Pelindung Telinga --}}
            <div
                class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 overflow-hidden">
                <div class="p-5 border-b border-gray-100 bg-yellow-50">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-yellow-100 rounded-lg">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9l-2 2-2-2" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 18v-1a3 3 0 013-3h12a3 3 0 013 3v1" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12a2 2 0 11-4 0 2 2 0 014 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 12a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900">Alat Pelindung Telinga</h4>
                    </div>
                </div>
                <div class="p-5 space-y-3">
                    <p class="text-sm text-gray-700 font-medium">Fungsi Utama:</p>
                    <p class="text-sm text-gray-600">Mengurangi intensitas suara bising dari mesin (ear plug dan ear muff).
                    </p>
                    <p class="text-sm text-gray-700 font-medium">Penerapan di Kimia Farma:</p>
                    <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside">
                        <li>Di dekat kompresor, generator.</li>
                        <li>Mesin tablet atau area pengemasan.</li>
                    </ul>
                </div>
            </div>

            {{-- Card 4: Alat Pelindung Tangan --}}
            <div
                class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 overflow-hidden">
                <div class="p-5 border-b border-gray-100 bg-orange-50">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-orange-100 rounded-lg">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 11V7a5 5 0 0110 0v4" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900">Alat Pelindung Tangan</h4>
                    </div>
                </div>
                <div class="p-5 space-y-3">
                    <p class="text-sm text-gray-700 font-medium">Fungsi Utama:</p>
                    <p class="text-sm text-gray-600">Melindungi tangan dari bahan kimia, benda tajam, khusus (nitril/latex).
                    </p>
                    <p class="text-sm text-gray-700 font-medium">Penerapan di Kimia Farma:</p>
                    <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside">
                        <li>Sarung tangan khusus (nitril/latex) untuk bahan kimia.</li>
                        <li>Di gudang dan laboratorium.</li>
                    </ul>
                </div>
            </div>

            {{-- Card 5: Alat Pelindung Kaki --}}
            <div
                class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 overflow-hidden">
                <div class="p-5 border-b border-gray-100 bg-red-50">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-red-100 rounded-lg">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v1a2 2 0 002 2h2m-4 0h2m2 0h2m-6 0h2m2 2v1m0 0h4m-4 0h4m-4-2h4m-4 0h4m6 0v1a2 2 0 002 2h2m-8 0h8" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900">Alat Pelindung Kaki</h4>
                    </div>
                </div>
                <div class="p-5 space-y-3">
                    <p class="text-sm text-gray-700 font-medium">Fungsi Utama:</p>
                    <p class="text-sm text-gray-600">Melindungi dari benturan, tusukan, atau suhu ekstrem.</p>
                    <p class="text-sm text-gray-700 font-medium">Penerapan di Kimia Farma:</p>
                    <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside">
                        <li>Sepatu safety shoes dengan sol anti-slip.</li>
                        <li>Di seluruh area produksi dan gudang.</li>
                    </ul>
                </div>
            </div>

            {{-- Card 6: Pakaian Pelindung --}}
            <div
                class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300 overflow-hidden">
                <div class="p-5 border-b border-gray-100 bg-purple-50">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-purple-100 rounded-lg">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900">Pakaian Pelindung</h4>
                    </div>
                </div>
                <div class="p-5 space-y-3">
                    <p class="text-sm text-gray-700 font-medium">Fungsi Utama:</p>
                    <p class="text-sm text-gray-600">Melindungi tubuh dari percikan bahan kimia, debu, atau kontaminasi.
                    </p>
                    <p class="text-sm text-gray-700 font-medium">Penerapan di Kimia Farma:</p>
                    <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside">
                        <li>Jas lab coverall atau apron.</li>
                        <li>Di laboratorium (lab coat) dan area produksi berisiko tinggi.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-xl shadow-sm">
            <div class="flex items-center space-x-3 mb-3">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
                <h4 class="text-md font-semibold text-blue-900">Ketentuan Umum APD</h4>
            </div>
            <ul class="list-disc list-inside text-sm text-blue-800 space-y-1">
                <li>APD disediakan oleh perusahaan dan wajib digunakan sesuai SOP SMK3.</li>
                <li>Pelatihan penggunaan APD dilakukan secara berkala; pemeliharaan dan penggantian dilakukan jika rusak.
                </li>
                <li>Sanksi bagi pelanggaran: Teguran lisan hingga pemecatan sesuai peraturan disiplin.</li>
            </ul>
            <p class="text-xs text-blue-600 mt-3 italic">Referensi: UU No. 1 Tahun 1970 & PP No. 50 Tahun 2012 tentang
                SMK3.</p>
        </div>
    </div>
@endsection
