<div class="relative">
  <!-- Tombol Beli Sekarang -->
  <button 
    onclick="document.getElementById('popup').classList.remove('hidden')" 
    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
    Beli Sekarang
  </button>

  <!-- Popup Overlay -->
  <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-gray-200 p-6 rounded-2xl w-80">
      <h2 class="text-center text-lg font-semibold mb-4">KONFIRMASI PESANAN</h2>
      <div class="space-y-2 mb-4">
        <p>Nama Produk: <span class="font-semibold">Produk A</span></p>
        <p>Warna: 
          <select class="border rounded px-2 py-1">
            <option>Merah</option>
            <option>Hitam</option>
            <option>Putih</option>
          </select>
        </p>
        <p>Jumlah: <input type="number" class="border rounded px-2 py-1 w-16" value="1"></p>
        <p>Alamat: <input type="text" class="border rounded px-2 py-1 w-full"></p>
        <p>Harga: <span class="font-semibold">Rp1.000.000</span></p>
      </div>

      <button 
        class="w-full bg-gray-500 text-white py-2 rounded-full hover:bg-gray-600">
        Pesan
      </button>

      <!-- Tombol Tutup -->
      <button 
        onclick="document.getElementById('popup').classList.add('hidden')" 
        class="w-full bg-red-500 text-white py-2 rounded-full mt-2 hover:bg-red-600">
        Tutup
      </button>
    </div>
  </div>
</div>
