<nav class="bg-gradient-to-r from-yellow-400 to-yellow-600 shadow-md">
    <div class="max-w-screen-xl mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3">
            <img src="{{ asset('images/LogoSpeedzone.jpg') }}" class="h-10 w-10 rounded-full" alt="Logo">
            <span class="text-2xl font-bold text-white">SpeedZone</span>
        </a>

        <!-- Search (desktop only) -->
        <div class="hidden md:block flex-grow mx-6 max-w-md">
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Cari motor impian Anda..." 
                    class="w-full pl-10 pr-4 py-2 rounded-full border border-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-500 bg-white text-gray-900"
                />
                <i class="ph ph-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-yellow-600 text-xl"></i>
            </div>
        </div>

        <!-- Ikon navigasi -->
        <div class="hidden md:flex items-center space-x-5 text-white">
            <a href="{{ url('pesanan_saya') }}" title="Pesanan Saya">
              <i class="ph ph-package text-2xl hover:text-yellow-900"></i>
            </a>
            <a href="{{ url('keranjang') }}" title="Keranjang">
                <i class="ph ph-shopping-cart-simple text-2xl hover:text-yellow-900"></i>
            </a>
            <a href="{{ url('profil') }}" title="Profil">
                <i class="ph ph-user-circle text-2xl hover:text-yellow-900"></i>
            </a>
            <a href="{{ url('tentang_kami') }}" title="Akun Penjual">
                <i class="ph ph-storefront text-2xl hover:text-yellow-900"></i>
            </a>
        </div>

        <!-- Tombol Mobile -->
        <button id="mobile-toggle" class="md:hidden text-white focus:outline-none text-2xl">
            <i class="ph ph-list"></i>
        </button>
    </div>

    <!-- Menu Mobile (toggle) -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-4">
        <div class="relative">
            <input 
                type="text" 
                placeholder="Cari motor impian Anda..." 
                class="w-full pl-10 pr-4 py-2 rounded-full border border-yellow-300 bg-white text-gray-900"
            />
            <i class="ph ph-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-yellow-600 text-xl"></i>
        </div>
        <div class="flex flex-col space-y-3 text-white">
            <a href="{{ url('pesanan_saya') }}" class="hover:text-yellow-900">Pesanan Saya</a>
            <a href="{{ url('keranjang') }}" class="hover:text-yellow-900">Keranjang</a>
            <a href="{{ url('profil') }}" class="hover:text-yellow-900">Profil</a>
            <a href="{{ url('tentang_kami') }}" class="hover:text-yellow-900">Akun Penjual</a>
        </div>
    </div>
</nav>

<!-- Script untuk toggle mobile menu -->
<script>
    document.getElementById('mobile-toggle').addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

<!-- Phosphor Icons -->
<script src="https://unpkg.com/@phosphor-icons/web"></script>
