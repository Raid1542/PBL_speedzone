<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Keranjang Belanja | Keranjang Saya</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

  <!-- Navbar -->
  <header class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-6 shadow-lg relative flex items-center justify-center">
  <!-- Tombol kembali di kiri -->
  <a href="javascript:history.back()" class="absolute left-6 text-3xl font-semibold text-white hover:text-yellow-200">&larr;</a>
  <h1 class="text-2xl md:text-3xl font-bold text-white">Keranjang Saya</h1>
</header>

  <!-- Konten Keranjang -->
  <main class="max-w-5xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold text-yellow-300 mb-6">Keranjang Belanja</h1>
    <div id="cartItems" class="space-y-4"></div>

    <!-- Total Harga -->
    <div class="bg-gray-800 p-4 rounded-lg mt-6">
      <div class="flex justify-between text-lg">
        <span class="font-semibold">Total Harga</span>
        <span id="totalPrice" class="font-bold text-yellow-400">Rp 0</span>
      </div>
    </div>

    <!-- Kolom Produk dan Tombol Tambah Produk -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
      <div class="col-span-1 flex justify-start">
        <button onclick="addItem()" class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 px-6 py-3 rounded-lg font-semibold shadow-md w-full">
          + Tambah Produk
        </button>
      </div>
      <div class="col-span-1 flex justify-end">
        <button onclick="saveCartAndRedirect()" class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 px-6 py-3 rounded-lg font-bold w-full">
          Lanjut ke Pembayaran
        </button>
      </div>
    </div>
  </main>

  <script>
    const cartItemsEl = document.getElementById("cartItems");
    let productCounter = 1;
    let totalPrice = 0;
    const productPrice = 200000;

    function formatRupiah(angka) {
      return 'Rp ' + angka.toLocaleString('id-ID');
    }

    function addItem() {
      const id = `item-${Date.now()}`;
      const price = productPrice;
      const html = `
        <div id="${id}" class="cart-item bg-gray-800 p-4 rounded-lg shadow flex items-center justify-between" data-price="${price}">
          <div class="flex items-center gap-4">
            <input type="checkbox" class="item-checkbox h-5 w-5 text-yellow-400 accent-yellow-500" onchange="updateTotal()" />
            <img src="images/Honda.jpg" alt="Produk" class="w-20 h-20 object-cover rounded-lg" />
            <div>
              <h2 class="font-semibold text-white">Produk ${productCounter}</h2>
              <p class="text-sm text-gray-400">Deskripsi produk demo</p>
              <div class="flex items-center mt-2 gap-2">
                <button onclick="changeQty('${id}', -1)" class="bg-gray-700 text-white px-3 rounded hover:bg-gray-600">-</button>
                <span id="${id}-qty" class="px-2">1</span>
                <button onclick="changeQty('${id}', 1)" class="bg-gray-700 text-white px-3 rounded hover:bg-gray-600">+</button>
              </div>
            </div>
          </div>
          <div class="text-right">
            <p class="font-semibold text-yellow-400">${formatRupiah(price)}</p>
            <button onclick="removeItem('${id}')" class="text-sm text-red-400 mt-2 hover:underline">Hapus</button>
          </div>
        </div>
      `;
      cartItemsEl.insertAdjacentHTML("beforeend", html);
      productCounter++;
      updateTotal();
    }

    function changeQty(id, delta) {
      const qtyEl = document.getElementById(`${id}-qty`);
      let qty = parseInt(qtyEl.textContent) || 1;
      qty = Math.max(1, qty + delta);
      qtyEl.textContent = qty;

      const checkbox = document.querySelector(`#${id} .item-checkbox`);
      if (checkbox.checked) {
        updateTotal();
      }
    }

    function removeItem(id) {
      const el = document.getElementById(id);
      if (el) {
        el.remove();
        updateTotal();
      }
    }

    function updateTotal() {
      totalPrice = 0;
      const items = document.querySelectorAll('.cart-item');
      items.forEach(item => {
        const checkbox = item.querySelector('.item-checkbox');
        if (checkbox.checked) {
          const qty = parseInt(item.querySelector('span[id$="-qty"]').textContent);
          const price = parseInt(item.dataset.price);
          totalPrice += qty * price;
        }
      });

      document.getElementById("totalPrice").textContent = formatRupiah(totalPrice);
    }

    function saveCartAndRedirect() {
      if (totalPrice === 0) {
        alert("Keranjang Anda kosong!");
        return;
      }
      alert("Data keranjang tersimpan. Menuju halaman ringkasan...");
      window.location.href = "pembelian";
    }

    window.onload = () => {
      addItem();
      addItem();
    };
  </script>

</body>
</html>
