@extends('layouts.app')

@section('title', 'Information - Kimia Farma')

@section('content')
    <div class="mb-8 text-center mt-10">
        <h1 class="text-3xl font-bold text-blue-600 mb-2">Landasan Hukum K3</h1>
        <p class="text-gray-600">
            PT Kimia Farma Sejahtera menerapkan Sistem Manajemen Kesehatan dan Keselamatan Kerja (SMK3) 
            <br> sesuai peraturan perundangan yang berlaku
        </p>
    </div>

    <div class="px-4 py-6 sm:px-0">
        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-6 text-center">Undang-Undang K3</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Card 1: UU No. 1 Tahun 1970 --}}
            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow flex flex-col h-full">
                <div class="px-4 py-5 sm:p-6 flex flex-col flex-grow">
                    <h4 class="text-md font-semibold text-gray-900 mb-2">UU No. 1 Tahun 1970 tentang Keselamatan Kerja</h4>
                    <p class="text-sm text-gray-600 flex-grow">Bahwa setiap tenaga kerja berhak mendapat perlindungan atas keselamatannya dalam melakukan pekerjaan untuk kesejahteraan hidup dan meningkatkan produksi serta produktivitas Nasional. Bahwa setiap orang lainnya yang berada di tempat kerja perlu terjamin pula keselamatannya.</p>
                    <a href="/storage/pdfs/UU-No-1-Tahun-1970.pdf" download="UU-No-1-Tahun-1970-Keselamatan-Kerja.pdf" 
                       class="block mx-auto px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mt-auto w-auto">
                        Download PDF
                    </a>
                </div>
            </div>

            {{-- Card 2: UU No. 13 Tahun 2003 --}}
            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow flex flex-col h-full">
                <div class="px-4 py-5 sm:p-6 flex flex-col flex-grow">
                    <h4 class="text-md font-semibold text-gray-900 mb-2">UU No. 13 Tahun 2003 tentang Ketenagakerjaan</h4>
                    <p class="text-sm text-gray-600 flex-grow">Bahwa pembangunan nasional dilaksanakan dalam rangka pembangunan manusia Indonesia seutuhnya dan pembangunan masyarakat Indonesia seluruhnya untuk mewujudkan masyarakat yang sejahtera, adil, makmur, yang merata, baik materiil maupun spiritual berdasarkan Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.</p>
                    <a href="/storage/pdfs/UU-Nomor-13-Tahun-2003.pdf" download="UU-No-13-Tahun-2003-Ketenagakerjaan.pdf" 
                       class="block mx-auto px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mt-auto w-auto">
                        Download PDF
                    </a>
                </div>
            </div>

            {{-- Card 3: PP No. 50 Tahun 2012 --}}
            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow flex flex-col h-full">
                <div class="px-4 py-5 sm:p-6 flex flex-col flex-grow">
                    <h4 class="text-md font-semibold text-gray-900 mb-2">PP No. 50 Tahun 2012 tentang Penerapan SMK3</h4>
                    <p class="text-sm text-gray-600 flex-grow">Untuk melaksanakan ketentuan Pasal 87 ayat (2) Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan, perlu menetapkan Peraturan Pemerintah tentang Penerapan Sistem Manajemen Keselamatan dan Kesehatan Kerja.</p>
                    <a href="/storage/pdfs/PP-Nomor-50-Tahun-2012.pdf" download="PP-No-50-Tahun-2012-Penerapan-SMK3.pdf" 
                       class="block mx-auto px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mt-auto w-auto">
                        Download PDF
                    </a>
                </div>
            </div>

            {{-- Card 4: PP No. 74 Tahun 2001 --}}
            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow flex flex-col h-full">
                <div class="px-4 py-5 sm:p-6 flex flex-col flex-grow">
                    <h4 class="text-md font-semibold text-gray-900 mb-2">PP No. 74 Tahun 2001 tentang Pengelolaan B3</h4>
                    <p class="text-sm text-gray-600 flex-grow">Bahwa dengan meningkatnya kegiatan pembangunan di berbagai bidang terutama bidang industri dan perdagangan, terdapat kecenderungan semakin meningkat pula penggunaan bahan berbahaya dan beracun.</p>
                    <a href="/storage/pdfs/PP742001a.pdf" download="PP-No-74-Tahun-2001-Pengelolaan-B3.pdf" 
                       class="block mx-auto px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mt-auto w-auto">
                        Download PDF
                    </a>
                </div>
            </div>

            {{-- Card 5: Permenaker No. 08/MEN/VII/2010 --}}
            <div class="bg-white overflow-hidden shadow rounded-lg flex flex-col h-full">
                <div class="px-4 py-5 sm:p-6 flex flex-col flex-grow">
                    <h4 class="text-md font-semibold text-gray-900 mb-2">Permenaker No. 08/MEN/VII/2010 tentang APD</h4>
                    <p class="text-sm text-gray-600 flex-grow">Peraturan Menteri Tenaga Kerja dan Transmigrasi tentang Alat Pelindung Diri (APD) untuk melindungi pekerja dari bahaya di tempat kerja.</p>
                    <a href="/storage/pdfs/Kep-Men-Naker-No.187-thn-1999_Pengendalian-Bahan-Kimia-Berbahaya_E.pdf" download="Kep-Men-Naker-No.187-thn-1999_Pengendalian-Bahan-Kimia-Berbahaya_E.pdf" 
                       class="block mx-auto px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mt-auto w-auto">
                        Download PDF
                    </a>
                </div>
            </div>

            {{-- Card 6: Permenkes No. 27 Tahun 2017 --}}
            <div class="bg-white overflow-hidden shadow rounded-lg flex flex-col h-full">
                <div class="px-4 py-5 sm:p-6 flex flex-col flex-grow">
                    <h4 class="text-md font-semibold text-gray-900 mb-2">Permenkes No. 27 Tahun 2017 tentang Pencegahan Infeksi</h4>
                    <p class="text-sm text-gray-600 flex-grow">Peraturan Menteri Kesehatan tentang Pencegahan & Pengendalian Infeksi di Fasilitas Kesehatan untuk menjaga keamanan dan kesehatan di lingkungan kerja medis.</p>
                    <a href="/storage/pdfs/Kep-Men-Naker-No.187-thn-1999_Pengendalian-Bahan-Kimia-Berbahaya_E.pdf" download="Kep-Men-Naker-No.187-thn-1999_Pengendalian-Bahan-Kimia-Berbahaya_E.pdf" 
                       class="block mx-auto px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mt-auto w-auto">
                        Download PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection