<!-- resources/views/admin/produk/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-semibold text-yellow-700 mb-6">Tambah Produk Baru</h1>
        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
            <!-- Nama -->
            <div>
                <label class="block font-medium">Nama Produk</label>
                <input type="text" name="nama" class="w-full border rounded p-2 bg-gray-50" required>
            </div>
            <!-- Deskripsi -->
            <div>
                <label class="block font-medium">Deskripsi</label>
                <textarea name="deskripsi" rows="3" class="w-full border rounded p-2 bg-gray-50" required></textarea>
            </div>
            <!-- Harga -->
            <div>
                <label class="block font-medium">Harga</label>
                <input type="number" name="harga" class="w-full border rounded p-2 bg-gray-50" required>
            </div>
            <!-- Stok -->
            <div>
                <label class="block font-medium">Stok</label>
                <input type="number" name="stok" class="w-full border rounded p-2 bg-gray-50" required>
            </div>
            <!-- Gambar -->
            <div>
                <label class="block font-medium">Gambar Produk</label>
                <input type="file" name="gambar" class="w-full border rounded p-2 bg-gray-50" required>
            </div>
            <!-- Warna -->
            <div>
                <label class="block font-medium">Warna</label>
                <select name="warna" class="w-full border rounded p-2 bg-gray-50">
                    <option value="Merah">Merah</option>
                    <option value="Biru">Biru</option>
                    <option value="Hitam">Hitam</option>
                    <option value="Putih">Putih</option>
                    <option value="Kuning">Kuning</option>
                    <option value="Hijau">Hijau</option>
                </select>
            </div>
            <!-- Kategori -->
            <div>
                <label class="block font-medium">Kategori</label>
                <select name="kategori" class="w-full border rounded p-2 bg-gray-50">
                    <option value="Honda">Honda</option>
                    <option value="Kawasaki">Kawasaki</option>
                    <option value="Suzuki">Suzuki</option>
                </select>
            </div>
            <!-- Submit -->
            <div class="pt-4">
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg shadow">
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>

</body>
</html>
