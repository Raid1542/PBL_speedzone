@extends('layouts.deskripsi')

@section('content')
<section class="py-16 px-4 md:px-10 max-w-screen-xl mx-auto">
  <div class="flex flex-col sm:flex-row gap-10 items-center sm:items-start">

    <!-- Gambar Produk -->
    <div class="w-full sm:w-1/2">
      <div class="bg-white
       p-4 rounded-xl shadow-xl">
        <img src="{{ asset('images/Yamaha.jpg') }}" alt="Yamaha R15 V4"
          class="w-full h-[400px] object-contain rounded-xl" />
      </div>
    </div>

    <!-- Detail Produk -->
    <div class="w-full sm:w-1/2 space-y-6">
      <h2 class="text-3xl md:text-4xl font-bold text-yellow-400 leading-tight">
        Yamaha R15 V4
      </h2>

      <p class="text-base md:text-lg text-gray-300 leading-relaxed">
        Yamaha R15 V4 hadir dengan desain agresif dan performa tinggi. Motor ini menawarkan teknologi canggih dan pengendalian yang presisi — ideal untuk pengendara yang menginginkan pengalaman berkendara terbaik.
      </p>

      <div class="space-y-1 text-sm md:text-base text-gray-300">
        <p><span class="font-semibold text-yellow-400">Warna:</span> Biru Metalik</p>
        <p><span class="font-semibold text-yellow-400">Stok:</span> Tersedia</p>
        <p><span class="font-semibold text-yellow-400">Kategori:</span> Yamaha</p>
      </div>

      <div class="text-2xl md:text-3xl font-bold text-yellow-500 mt-4">
        Rp 80.000.000
      </div>

      <!-- Input Jumlah Produk -->
      <div class="flex items-center gap-4 mt-6">
        <label for="jumlah" class="text-gray-300 font-medium">Jumlah:</label>
        <div class="flex items-center border border-yellow-400 rounded-full overflow-hidden">
          <button onclick="kurangiJumlah()" class="bg-yellow-400 text-gray-900 px-4 py-2 font-bold">−</button>
          <input id="jumlah" type="number" value="1" min="1"
            class="w-16 text-center bg-gray-900 text-yellow-300 focus:outline-none" />
          <button onclick="tambahJumlah()" class="bg-yellow-400 text-gray-900 px-4 py-2 font-bold">+</button>
        </div>
      </div>

      <!-- Tombol Aksi -->
      <div class="flex flex-col sm:flex-row gap-4 mt-6">
        <a href="/keranjang"
          class="bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold shadow-lg hover:bg-yellow-300 transition duration-300 text-center">
          Tambah ke Keranjang
        </a>
        <a href="/pembelian"
          class="bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold shadow-lg hover:bg-yellow-300 transition duration-300 text-center">
          Beli Sekarang
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Script Tambah/Kurang Jumlah -->
<script>
  function tambahJumlah() {
    let input = document.getElementById('jumlah');
    input.value = parseInt(input.value) + 1;
  }

  function kurangiJumlah() {
    let input = document.getElementById('jumlah');
    if (parseInt(input.value) > 1) {
      input.value = parseInt(input.value) - 1;
    }
  }
</script>
@endsection
