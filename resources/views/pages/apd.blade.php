@extends('layouts.app')

@section('title', 'APD - Kimia Farma')

@section('content')
    <div class="mb-8 text-center mt-10">
        <h1 class="text-3xl font-bold text-blue-600 mb-2">Alat Pelindung Diri (APD)</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">
            PT Kimia Farma menerapkan APD sesuai Undang-Undang No. 1 Tahun 1970 tentang Keselamatan Kerja dan PP No. 50 Tahun 2012 tentang Penerapan SMK3. APD wajib digunakan untuk melindungi pekerja dari bahaya kimia, fisik, dan biologis di lingkungan kerja, termasuk area produksi, laboratorium, dan gudang B3.
        </p>
    </div>

    <div class="px-4 py-6 sm:px-0">
        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-6 text-center">Jenis dan Penerapan APD</h3>

        {{-- Tabel Responsif dengan Card-like Rows untuk Variasi --}}
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 bg-white shadow rounded-lg">
                <thead class="bg-gray-50 sticky top-0 z-10">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">Jenis APD</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">Fungsi Utama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">Penerapan di Kimia Farma</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    {{-- Row 1: Alat Pelindung Muka dan Mata --}}
                    <tr class="hover:bg-gray-50 border-b border-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Alat Pelindung Muka dan Mata</td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Melindungi dari percikan bahan kimia panas/korosif dan paparan cahaya.</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Wajib digunakan di area pencampuran (mixing), reaktor kimia, dan saat mengangani bahan kimia cair.</div>
                        </td>
                    </tr>

                    {{-- Row 2: Alat Pernapasan --}}
                    <tr class="hover:bg-gray-50 border-b border-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Alat Pernapasan</td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Mencegah pernapasan dari paparan debu, kabut, gas, uap, atau oksigen rendah.</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Digunakan saat bongkar muat bahan baku, pemindahan bahan berbahaya di area proses granulasi atau saat uap di area organik potensial.</div>
                        </td>
                    </tr>

                    {{-- Row 3: Alat Pelindung Telinga --}}
                    <tr class="hover:bg-gray-50 border-b border-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Alat Pelindung Telinga</td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Mengurangi intensitas suara bising dari mesin (ear plug dan ear muff).</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Digunakan di dekat mesin produksi seperti kompresor, generator, mesin tablet, atau area pengemasan.</div>
                        </td>
                    </tr>

                    {{-- Row 4: Alat Pelindung Tangan --}}
                    <tr class="hover:bg-gray-50 border-b border-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Alat Pelindung Tangan</td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Melindungi tangan dari bahan kimia, benda tajam, khusus (nitril/latex).</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Sarung tangan berbahaya khusus (nitril/latex) untuk penanganan bahan kimia di gudang dan laboratorium.</div>
                        </td>
                    </tr>

                    {{-- Row 5: Alat Pelindung Kaki --}}
                    <tr class="hover:bg-gray-50 border-b border-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Alat Pelindung Kaki</td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Melindungi dari benturan, tusukan, atau suhu ekstrem.</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Sepatu safety shoes dengan sol anti-slip digunakan di seluruh area produksi dan gudang.</div>
                        </td>
                    </tr>

                    {{-- Row 6: Pakaian Pelindung --}}
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Pakaian Pelindung</td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Melindungi tubuh dari percikan bahan kimia, debu, atau kontaminasi.</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Jas lab coverall atau apron digunakan di laboratorium (lab coat) dan area produksi berisiko tinggi.</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-8 p-6 bg-blue-50 border border-blue-200 rounded-lg">
            <h4 class="text-md font-semibold text-blue-900 mb-2">Ketentuan Umum APD</h4>
            <ul class="list-disc list-inside text-sm text-blue-800 space-y-1">
                <li>APD disediakan oleh perusahaan dan wajib digunakan sesuai SOP SMK3.</li>
                <li>Pelatihan penggunaan APD dilakukan secara berkala; pemeliharaan dan penggantian dilakukan jika rusak.</li>
                <li>Sanksi bagi pelanggaran: Teguran lisan hingga pemecatan sesuai peraturan disiplin.</li>
            </ul>
            <p class="text-xs text-blue-600 mt-3 italic">Referensi: UU No. 1 Tahun 1970 & PP No. 50 Tahun 2012 tentang SMK3.</p>
        </div>
    </div>
@endsection