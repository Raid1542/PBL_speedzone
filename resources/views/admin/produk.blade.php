@extends('admin.layout')

@section('title', 'Produk - Admin')

@section('konten')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-yellow-700">Daftar Produk</h2>
        <a href="/admin/produk/create" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg shadow">
            + Tambah Produk
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full text-sm text-left border border-gray-300">
            <thead class="bg-yellow-100 text-yellow-800">
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Nama</th>
                    <th class="px-4 py-2 border">Gambar</th>
                    <th class="px-4 py-2 border">Deskripsi</th>
                    <th class="px-4 py-2 border">Harga</th>
                    <th class="px-4 py-2 border">Stok</th>
                    <th class="px-4 py-2 border">Warna</th>
                    <th class="px-4 py-2 border">Kategori</th>
                    <th class="px-4 py-2 border">Ubah</th>
                    <th class="px-4 py-2 border">Hapus</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 1; $i <= 6; $i++)
                <tr class="hover:bg-yellow-50">
                    <td class="px-4 py-2 border">{{ $i }}</td>
                    <td class="px-4 py-2 border">Produk {{ $i }}</td>
                    <td class="px-4 py-2 border">
                        <img src="gambar{{ $i }}.jpg" alt="Gambar Produk {{ $i }}" class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="px-4 py-2 border">Deskripsi singkat produk {{ $i }}</td>
                    <td class="px-4 py-2 border text-yellow-700">Rp100.000</td>
                    <td class="px-4 py-2 border">
                        <input type="number" value="10" min="0" class="w-16 p-1 border rounded text-center bg-gray-100 hover:bg-gray-200">
                    </td>
                    <td class="px-4 py-2 border">
                        <select class="p-1 border rounded bg-gray-100 text-gray-700 hover:bg-gray-200">
                            <option value="red">Merah</option>
                            <option value="blue">Biru</option>
                            <option value="black">Hitam</option>
                            <option value="white">Putih</option>
                            <option value="green">Hijau</option>
                            <option value="yellow">Kuning</option>
                        </select>
                    </td>
                    <td class="px-4 py-2 border">
                        <select class="p-1 border rounded bg-gray-100 text-gray-700 hover:bg-gray-200">
                            <option value="honda">Honda</option>
                            <option value="kawasaki">Kawasaki</option>
                            <option value="suzuki">Suzuki</option>
                        </select>
                    </td>
                    <td class="px-4 py-2 border text-blue-500 hover:underline"><a href="#">Ubah</a></td>
                    <td class="px-4 py-2 border text-red-500 hover:underline"><a href="#">Hapus</a></td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
