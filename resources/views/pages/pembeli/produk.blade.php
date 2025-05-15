@extends('layouts.produk')

@section('title', 'Produk | SpeedZone')

@section('content')
<h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Daftar Motor Sport</h2>

<div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
    @foreach ($produk as $item)
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['nama'] }}" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="text-xl font-semibold text-blue-900">{{ $item['nama'] }}</h3>
            <p class="text-sm text-gray-600">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
            <div class="mt-4 flex gap-2">
                <a href="/pages/pembeli/produk_detail" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded text-center">Detail</a>
                <button onclick="window.location.href='/keranjang'" class="flex-1 border border-yellow-500 hover:bg-yellow-100 text-yellow-600 py-2 px-4 rounded">Keranjang</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
