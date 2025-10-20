@extends('layouts.app')

@section('title', 'Profile - Kimia Farma')

@section('content')
    <div class="mb-8 text-center mt-10">
        <h1 class="text-3xl font-bold text-blue-600 mb-2">Profil Perusahaan</h1>
        <p class="text-gray-600">PT Kimia Farma Sejahtera adalah bagian dari Kimia Farma Group yang bergerak di bidang
            industri manufaktur kimia dan layanan kesehatan. <br> Produk yang dihasilkan antara lain cat, deterjen, pupuk,
            serta layanan kefarmasian di apotek. <br> Perusahaan ini berperan penting namun juga memiliki risiko tinggi
            karena penggunaan Bahan Berbahaya dan Beracun (B3).
        </p>
    </div>

    <div class="px-4 py-6 sm:px-0">
        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-6 text-center">Karakteristik Utama Perusahaan</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Card 1: Area Produksi --}}
            <div x-data="{ open: false }" x-cloak class="bg-white overflow-hidden shadow rounded-lg cursor-pointer hover:shadow-lg transition-shadow">
                <div class="px-4 py-5 sm:p-6" x-on:click="open = !open">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="text-md font-semibold text-gray-900 text-center flex-1">Area Produksi</h4>
                        <button class="text-gray-500 hover:text-gray-700 transition-colors">
                            <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        </button>
                    </div>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-64"
                        class="overflow-y-auto space-y-2 mt-2">
                        <p class="text-sm text-gray-600">Area ini adalah jantung dari operasi manufaktur PT Kimia Farma
                            Sejahtera, di mana bahan baku diubah menjadi produk jadi seperti cat, deterjen, dan pupuk. Area
                            ini memiliki beberapa sub-bagian kritis:
                        </p>
                        <p class="text-sm text-gray-600">Proses Pencampuran (Mixing/Blending): Di sinilah bahan baku padat
                            dan cair, termasuk B3, digabungkan dalam tangki pencampur besar. Proses ini memerlukan akurasi
                            takaran yang tinggi untuk menjamin kualitas produk. Risikonya mencakup paparan debu (partikulat)
                            dari bahan padat, uap (vapor) dari pelarut, serta potensi tumpahan dan percikan bahan kimia
                            korosif atau iritan.
                        </p>
                        <p class="text-sm text-gray-600">Reaktor Kimia: Merupakan unit proses utama tempat terjadinya
                            sintesis kimia. Operasi di reaktor ini seringkali melibatkan suhu dan tekanan tinggi, serta
                            penggunaan katalis. Ini adalah area dengan risiko paling signifikan, termasuk potensi reaksi tak
                            terkendali (runaway reactions), kebakaran, ledakan, atau pelepasan gas beracun. Oleh karena itu,
                            area ini dilengkapi dengan sistem kontrol proses canggih dan perangkat keselamatan berlapis
                            (Safety Instrumented Systems).
                        </p>
                        <p class="text-sm text-gray-600">Pengemasan (Packaging): Setelah produk jadi lolos spesifikasi,
                            produk tersebut dialihkan ke lini pengemasan. Di sini, produk diisi ke dalam kemasan primer
                            (misalnya, botol, kaleng, kantong) dan sekunder (kardus, drum). Risiko di area ini terutama
                            terkait dengan paparan berulang (kronis) terhadap produk saat pengisian, serta bahaya ergonomi
                            akibat aktivitas pengangkatan dan pengemasan manual.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Card 2: Gudang B3 --}}
            <div x-data="{ open: false }" x-cloak class="bg-white overflow-hidden shadow rounded-lg cursor-pointer hover:shadow-lg transition-shadow">
                <div class="px-4 py-5 sm:p-6" x-on:click="open = !open">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="text-md font-semibold text-gray-900 text-center flex-1">Gudang B3</h4>
                        <button class="text-gray-500 hover:text-gray-700 transition-colors">
                            <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        </button>
                    </div>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-64"
                        class="overflow-y-auto space-y-2 mt-2">
                        <p class="text-sm text-gray-600">Gudang ini adalah fasilitas vital yang dirancang khusus untuk
                            menyimpan bahan baku dan bahan pendukung yang bersifat B3 (mudah terbakar, korosif, beracun,
                            reaktif, dll.). Karakteristiknya diatur secara ketat:
                        </p>
                        <p class="text-sm text-gray-600">Segregasi (Pemisahan): Penyimpanan bahan kimia wajib dipisahkan
                            berdasarkan kelas bahayanya (misalnya, bahan oksidator tidak boleh disimpan berdekatan dengan
                            bahan mudah terbakar) untuk mencegah reaksi berbahaya jika terjadi kebocoran.
                        </p>
                        <p class="text-sm text-gray-600">Tanggul Penahanan (Secondary Containment): Area penyimpanan
                            dilengkapi dengan sistem penahanan sekunder (seperti bund wall atau bak penampung) yang mampu
                            menampung 110% volume tangki terbesar, untuk mencegah tumpahan meluas ke lingkungan.
                        </p>
                        <p class="text-sm text-gray-600">Ventilasi Khusus: Dilengkapi dengan sistem sirkulasi udara (baik
                            alami maupun mekanis) yang dirancang untuk mencegah akumulasi uap B3 di dalam ruangan.
                        </p>
                        <p class="text-sm text-gray-600">Keselamatan Kebakaran: Dilengkapi dengan sistem proteksi kebakaran
                            yang sesuai dengan jenis B3 yang disimpan (misalnya, APAR, hidran, sprinkler, atau sistem
                            busa/foam).
                        </p>
                    </div>
                </div>
            </div>

            {{-- Card 3: Laboratorium QC --}}
            <div x-data="{ open: false }" x-cloak class="bg-white overflow-hidden shadow rounded-lg cursor-pointer hover:shadow-lg transition-shadow">
                <div class="px-4 py-5 sm:p-6" x-on:click="open = !open">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="text-md font-semibold text-gray-900 text-center flex-1">Laboratorium Quality Control</h4>
                        <button class="text-gray-500 hover:text-gray-700 transition-colors">
                            <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        </button>
                    </div>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-64"
                        class="overflow-y-auto space-y-2 mt-2">
                        <p class="text-sm text-gray-600">Laboratorium QC bertanggung jawab untuk memastikan bahwa bahan baku
                            yang diterima, sampel setengah jadi dari proses produksi, dan produk jadi yang akan dirilis
                            telah memenuhi standar mutu yang ditetapkan.
                        </p>
                        <p class="text-sm text-gray-600">Pengujian Analitik: Laboratorium ini melakukan berbagai pengujian
                            kimia dan fisika, seringkali menggunakan bahan kimia pekat seperti asam kuat (misal, H_2SO_4),
                            basa kuat (misal, NaOH), dan pelarut organik (misal, metanol, aseton) sebagai reagen.
                        </p>
                        <p class="text-sm text-gray-600">Peralatan Khusus: Menggunakan instrumen analitik canggih (seperti
                            GC, HPLC, Spektrofotometer) dan peralatan gelas laboratorium.
                        </p>
                        <p class="text-sm text-gray-600">Pengendalian Paparan: Penggunaan lemari asam (fume hood) adalah
                            wajib untuk semua pekerjaan yang menghasilkan uap berbahaya. Selain itu, ketersediaan safety
                            shower dan eyewash station adalah mutlak.
                        </p>
                        <p class="text-sm text-gray-600">Limbah B3 Skala Kecil: Meskipun volume bahan yang digunakan kecil,
                            limbah yang dihasilkan dari sisa pengujian bersifat sangat pekat dan berbahaya, sehingga
                            memerlukan penanganan limbah B3 laboratorium yang terpisah dan terkelola dengan baik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection