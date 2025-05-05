@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow text-gray-800">
    <h1 class="text-2xl font-bold mb-4">Pesanan Saya</h1>

    @forelse($pesanan as $item)
        <div class="border p-4 rounded-lg mb-4 bg-gray-100">
            <p><strong>Produk:</strong> {{ $item->produk }}</p>
            <p><strong>Jumlah:</strong> {{ $item->jumlah }}</p>
            <p><strong>Total Harga:</strong> Rp {{ number_format($item->total_harga, 0, ',', '.') }}</p>
            <p><strong>Status:</strong> {{ $item->status }}</p>
            <p><strong>Alamat:</strong> {{ $item->alamat }}</p>
            <p><strong>Telepon:</strong> {{ $item->telepon }}</p>
        </div>
    @empty
        <p>Tidak ada pesanan.</p>
    @endforelse
</div>
@endsection
