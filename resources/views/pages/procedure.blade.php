@extends('layouts.app')

@section('title', 'Procedure - Kimia Farma')

@section('content')
    <div class="mb-8 text-center mt-10">
        <h1 class="text-3xl font-bold text-blue-600 mb-2">Prosedur Darurat</h1>
        <p class="text-gray-600">
            PT Kimia Farma menerapkan prosedur darurat untuk mengantisipasi berbagai <br>
            potensi bahaya, meliputi kebakaran, tumpahan B3, dan kecelakaan kerja, sesuai dengan SMK3 dan peraturan perundang-undangan yang berlaku <br>
            (UU No. 1 Tahun 1970 tentang Keselamatan Kerja).
        </p>
    </div>

    <div class="px-4 py-6 sm:px-0 space-y-6">
        {{-- Section 1: Kebakaran & Ledakan - Card dengan ikon dan list vertikal --}}
        <div class="bg-white overflow-hidden shadow rounded-lg border-l-4 border-red-500">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <svg class="h-8 w-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h4 class="ml-3 text-lg font-semibold text-gray-900">Kebakaran & Ledakan</h4>
                </div>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 bg-red-100 text-red-800 rounded-full text-sm font-medium">1</span>
                        <p class="ml-3 text-sm text-gray-600">Penyediaan APAR (Alat Pemadam Api Ringan) di seluruh area operasional untuk respons cepat.</p>
                    </div>
                    <div class="flex items-start">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 bg-red-100 text-red-800 rounded-full text-sm font-medium">2</span>
                        <p class="ml-3 text-sm text-gray-600">APD khusus tim tanggap darurat: helm, sarung tangan tahan api, dan pakaian pelindung.</p>
                    </div>
                    <div class="flex items-start">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 bg-red-100 text-red-800 rounded-full text-sm font-medium">3</span>
                        <p class="ml-3 text-sm text-gray-600">Jalur evakuasi jelas dengan denah K3 dipasang di lokasi strategis; simulasi evakuasi berkala.</p>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-4 italic">Referensi: UU No. 1 Tahun 1970 tentang Keselamatan Kerja (Pasal 5 & 20 UUD 1945).</p>
            </div>
        </div>

        {{-- Section 2: Tumpahan & Kebocoran B3 - Card dengan ikon dan list vertikal --}}
        <div class="bg-white overflow-hidden shadow rounded-lg border-l-4 border-yellow-500">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <svg class="h-8 w-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <h4 class="ml-3 text-lg font-semibold text-gray-900">Tumpahan & Kebocoran B3</h4>
                </div>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">1</span>
                        <p class="ml-3 text-sm text-gray-600">Safety shower & eyewash station tersedia di area laboratorium dan produksi untuk dekontaminasi cepat.</p>
                    </div>
                    <div class="flex items-start">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">2</span>
                        <p class="ml-3 text-sm text-gray-600">Prosedur penanganan limbah kimia berbahaya (B3) dengan APD khusus (sarung tangan, masker, dll.).</p>
                    </div>
                    <div class="flex items-start">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">3</span>
                        <p class="ml-3 text-sm text-gray-600">Laporan segera ke tim K3, isolasi area, dan penggunaan kit penyerap tumpahan.</p>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-4 italic">Referensi: PP No. 74 Tahun 2001 tentang Pengelolaan B3.</p>
            </div>
        </div>

        {{-- Section 3: Kecelakaan Kerja - Card dengan ikon dan list vertikal --}}
        <div class="bg-white overflow-hidden shadow rounded-lg border-l-4 border-green-500">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <svg class="h-8 w-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="ml-3 text-lg font-semibold text-gray-900">Kecelakaan Kerja</h4>
                </div>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 bg-green-100 text-green-800 rounded-full text-sm font-medium">1</span>
                        <p class="ml-3 text-sm text-gray-600">Kotak P3K (Cedera Unit Kerja) tersedia di setiap unit kerja untuk pertolongan pertama.</p>
                    </div>
                    <div class="flex items-start">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 bg-green-100 text-green-800 rounded-full text-sm font-medium">2</span>
                        <p class="ml-3 text-sm text-gray-600">Sistem pelaporan kecelakaan dan evakuasi ke fasilitas medis terdekat dengan protokol jelas.</p>
                    </div>
                    <div class="flex items-start">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 bg-green-100 text-green-800 rounded-full text-sm font-medium">3</span>
                        <p class="ml-3 text-sm text-gray-600">Penanggung jawab K3 di setiap unit untuk koordinasi respons cepat; simulasi darurat berkala.</p>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-4 italic">Referensi: PP No. 50 Tahun 2012 tentang Penerapan SMK3.</p>
            </div>
        </div>
    </div>
@endsection