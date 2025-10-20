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
        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-8 text-center">Karakteristik Utama Perusahaan</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Card 1: Area Produksi --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-blue-50">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-blue-100 rounded-lg">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900">Area Produksi</h4>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <p class="text-sm text-gray-700 leading-relaxed">Area ini adalah jantung dari operasi manufaktur PT Kimia Farma Sejahtera, di mana bahan baku diubah menjadi produk jadi seperti cat, deterjen, dan pupuk. Area ini memiliki beberapa sub-bagian kritis:</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Proses Pencampuran (Mixing/Blending): Di sinilah bahan baku padat dan cair, termasuk B3, digabungkan dalam tangki pencampur besar. Proses ini memerlukan akurasi takaran yang tinggi untuk menjamin kualitas produk. Risikonya mencakup paparan debu (partikulat) dari bahan padat, uap (vapor) dari pelarut, serta potensi tumpahan dan percikan bahan kimia korosif atau iritan.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Reaktor Kimia: Merupakan unit proses utama tempat terjadinya sintesis kimia. Operasi di reaktor ini seringkali melibatkan suhu dan tekanan tinggi, serta penggunaan katalis. Ini adalah area dengan risiko paling signifikan, termasuk potensi reaksi tak terkendali (runaway reactions), kebakaran, ledakan, atau pelepasan gas beracun. Oleh karena itu, area ini dilengkapi dengan sistem kontrol proses canggih dan perangkat keselamatan berlapis (Safety Instrumented Systems).</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Pengemasan (Packaging): Setelah produk jadi lolos spesifikasi, produk tersebut dialihkan ke lini pengemasan. Di sini, produk diisi ke dalam kemasan primer (misalnya, botol, kaleng, kantong) dan sekunder (kardus, drum). Risiko di area ini terutama terkait dengan paparan berulang (kronis) terhadap produk saat pengisian, serta bahaya ergonomi akibat aktivitas pengangkatan dan pengemasan manual.</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Card 2: Gudang B3 --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-green-50">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-green-100 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900">Gudang B3</h4>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <p class="text-sm text-gray-700 leading-relaxed">Gudang ini adalah fasilitas vital yang dirancang khusus untuk menyimpan bahan baku dan bahan pendukung yang bersifat B3 (mudah terbakar, korosif, beracun, reaktif, dll.). Karakteristiknya diatur secara ketat:</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Segregasi (Pemisahan): Penyimpanan bahan kimia wajib dipisahkan berdasarkan kelas bahayanya (misalnya, bahan oksidator tidak boleh disimpan berdekatan dengan bahan mudah terbakar) untuk mencegah reaksi berbahaya jika terjadi kebocoran.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Tanggul Penahanan (Secondary Containment): Area penyimpanan dilengkapi dengan sistem penahanan sekunder (seperti bund wall atau bak penampung) yang mampu menampung 110% volume tangki terbesar, untuk mencegah tumpahan meluas ke lingkungan.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Ventilasi Khusus: Dilengkapi dengan sistem sirkulasi udara (baik alami maupun mekanis) yang dirancang untuk mencegah akumulasi uap B3 di dalam ruangan.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Keselamatan Kebakaran: Dilengkapi dengan sistem proteksi kebakaran yang sesuai dengan jenis B3 yang disimpan (misalnya, APAR, hidran, sprinkler, atau sistem busa/foam).</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Card 3: Laboratorium QC --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-purple-50">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-purple-100 rounded-lg">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c0 4.97-4.03 9-9 9m9-9c0-4.97 4.03-9 9-9M9 5a9 9 0 019 9m-9-9c0 4.97-4.03 9-9 9m9-9H3M9 5h6" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900">Laboratorium Quality Control</h4>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <p class="text-sm text-gray-700 leading-relaxed">Laboratorium QC bertanggung jawab untuk memastikan bahwa bahan baku yang diterima, sampel setengah jadi dari proses produksi, dan produk jadi yang akan dirilis telah memenuhi standar mutu yang ditetapkan.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Pengujian Analitik: Laboratorium ini melakukan berbagai pengujian kimia dan fisika, seringkali menggunakan bahan kimia pekat seperti asam kuat (misal, H_2SO_4), basa kuat (misal, NaOH), dan pelarut organik (misal, metanol, aseton) sebagai reagen.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Peralatan Khusus: Menggunakan instrumen analitik canggih (seperti GC, HPLC, Spektrofotometer) dan peralatan gelas laboratorium.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Pengendalian Paparan: Penggunaan lemari asam (fume hood) adalah wajib untuk semua pekerjaan yang menghasilkan uap berbahaya. Selain itu, ketersediaan safety shower dan eyewash station adalah mutlak.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Limbah B3 Skala Kecil: Meskipun volume bahan yang digunakan kecil, limbah yang dihasilkan dari sisa pengujian bersifat sangat pekat dan berbahaya, sehingga memerlukan penanganan limbah B3 laboratorium yang terpisah dan terkelola dengan baik.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection