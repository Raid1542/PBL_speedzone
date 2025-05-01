@extends('admin.layout')

@section('title', 'Riwayat Transaksi')

@section('konten')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-yellow-700">Riwayat Transaksi</h1>
        <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded-lg shadow">
            Ekspor
        </button>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full text-left border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-yellow-100 text-yellow-800">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Tanggal</th>
                    <th class="px-4 py-2 border">Nama Produk</th>
                    <th class="px-4 py-2 border">Pembeli</th>
                    <th class="px-4 py-2 border">Jumlah</th>
                    <th class="px-4 py-2 border">Total</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 1; $i <= 5; $i++)
                <tr class="hover:bg-yellow-50">
                    <td class="px-4 py-2 border">{{ $i }}</td>
                    <td class="px-4 py-2 border">2025-04-2{{ $i }}</td>
                    <td class="px-4 py-2 border">Produk {{ $i }}</td>
                    <td class="px-4 py-2 border">Pembeli {{ $i }}</td>
                    <td class="px-4 py-2 border">{{ rand(1, 5) }}</td>
                    <td class="px-4 py-2 border">Rp{{ number_format(rand(10000, 50000), 0, ',', '.') }}</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
