@extends('layouts.app')

@section('title', 'Profile - Kimia Farma')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <!-- Hero Section -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-blue-600 mb-2">Profil Perusahaan</h1>
            <p class="text-gray-600">Monitor kinerja perusahaan kimia dan farmasi Anda secara real-time.</p>
        </div>

        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Aktivitas Terbaru</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aktivitas</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Waktu</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pesanan #1234 dikonfirmasi
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">19 Okt 2025</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Stok obat flu diperbarui</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">18 Okt 2025</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Diperbarui</span>
                                </td>
                            </tr>
                            <!-- Tambahkan row lain sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection