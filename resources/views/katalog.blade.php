<html class="scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>
        Pemasaran UMKM RW - Katalog UMKM
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkbrown: {
                            DEFAULT: '#9d1b0e',
                            light: '#b32518',
                            dark: '#791309',
                        },
                        darkyellow: {
                            DEFAULT: '#e3a434',
                            light: '#f4bb55',
                            dark: '#c58b2b',
                        },
                    },
                },
            },
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-darkbrown">
    <header class="bg-[#7B1010] shadow-md fixed w-full z-30">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a class="text-3xl font-bold text-darkbrown flex items-center space-x-2" href="#home">
                <span class="text-white font-extrabold">
                    Website UMKM RW
                </span>
            </a>
            <nav>
                <ul class="hidden md:flex space-x-10 font-semibold text-darkbrown">
                    <li>
                        <a class="hover:text-darkyellow transition text-white text-xl" href="{{ route('welcome') }}">
                            Home Page
                        </a>
                    </li>
                </ul>
                <button aria-label="Toggle menu" class="md:hidden text-white focus:outline-none" id="menu-btn">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
            </nav>
        </div>
        <div class="md:hidden bg-white shadow-md hidden border-t border-darkyellow" id="mobile-menu">
            <ul class="flex flex-col space-y-3 px-6 py-4 font-semibold text-darkbrown">
                <li>
                    <a class="block hover:text-darkyellow transition" href="#katalog-umkm">
                        Katalog UMKM
                    </a>
                </li>
                <li>
                    <a class="block hover:text-darkyellow transition" href="#profil">
                        Profil Kelurahan
                    </a>
                </li>
                <li>
                    <a class="block hover:text-darkyellow transition" href="#berita">
                        Berita
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- Loader -->
    <div id="page-loader"
        class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-300">
        <div class="flex gap-2">
            <div class="w-5 h-5 rounded-full animate-bounce bg-darkyellow [animation-delay:-0.3s]"></div>
            <div class="w-5 h-5 rounded-full animate-bounce bg-darkyellow [animation-delay:-0.15s]"></div>
            <div class="w-5 h-5 rounded-full animate-bounce bg-darkyellow"></div>
        </div>
    </div>
    <main class="pt-24 max-w-7xl mx-auto px-6">
        <!-- Katalog UMKM -->
        <section class="mb-20" id="katalog-umkm">
            <h2
                class="text-3xl font-bold text-darkbrown mb-8 text-center border-b-4 border-darkyellow inline-block pb-2">
                Katalog UMKM
            </h2>
            @php
                $sosmedLinks = [
                    'whatsapp' => [
                        'icon' => '<i class="fab fa-whatsapp"></i>',
                        'prefix' => 'https://wa.me/',
                        'is_image' => false,
                    ],
                    'instagram' => [
                        'icon' => '<i class="fab fa-instagram"></i>',
                        'prefix' => 'https://instagram.com/',
                        'is_image' => false,
                    ],
                    'tiktok' => [
                        'icon' => '<i class="fab fa-tiktok"></i>',
                        'prefix' => 'https://tiktok.com/@',
                        'is_image' => false,
                    ],
                    'tokopedia' => [
                        'icon' =>
                            '<img src="https://storage.googleapis.com/a1aa/image/0eef45ed-a55f-4f37-0784-715d6bbc847a.jpg" alt="Tokopedia" class="w-6 h-6">',
                        'prefix' => '', // langsung dari database
                        'is_image' => true,
                    ],
                    'shopee' => [
                        'icon' =>
                            '<img src="https://storage.googleapis.com/a1aa/image/a30a5565-7268-430f-55ae-57d848de1027.jpg" alt="Shopee" class="w-6 h-6">',
                        'prefix' => '', // langsung dari database
                        'is_image' => true,
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($umkms as $index => $umkm)
                    @php
                        if (is_array($umkm->foto)) {
                            $gambarList = $umkm->foto;
                        } elseif (is_string($umkm->foto)) {
                            $decoded = json_decode($umkm->foto, true);
                            $gambarList = is_array($decoded) ? $decoded : [$umkm->foto];
                        }
                    @endphp

                    <article
                        class="bg-white border-2 border-darkyellow rounded-lg shadow overflow-hidden flex flex-col">
                        <!-- Gambar -->
                        <div x-data="{
                            currentSlide: 0,
                            images: {{ json_encode($gambarList) }},
                            next() {
                                this.currentSlide = (this.currentSlide + 1) % this.images.length;
                            },
                            prev() {
                                this.currentSlide = (this.currentSlide - 1 + this.images.length) % this.images.length;
                            }
                        }"
                            class="relative w-full aspect-[4/3] overflow-hidden rounded-t-lg border-2 border-darkyellow bg-white">
                            <template x-for="(image, index) in images" :key="index">
                                <img x-show="currentSlide === index" x-transition :src="'/storage/' + image"
                                    alt="Foto UMKM {{ $umkm->nama_umkm }} slide ke-{index + 1}"
                                    class="absolute inset-0 w-full h-full object-contain" />
                            </template>

                            <button @click="prev"
                                class="absolute top-1/2 left-2 -translate-y-1/2 bg-darkyellow text-darkbrown px-2 py-1 rounded shadow hover:bg-darkyellow-light">
                                ‹
                            </button>
                            <button @click="next"
                                class="absolute top-1/2 right-2 -translate-y-1/2 bg-darkyellow text-darkbrown px-2 py-1 rounded shadow hover:bg-darkyellow-light">
                                ›
                            </button>
                        </div>

                        <!-- Info UMKM -->
                        <div class="p-6 flex flex-col flex-grow text-darkbrown">
                            <h3 class="text-xl font-semibold mb-2 border-b border-darkyellow pb-1">
                                {{ $umkm->nama_umkm }}
                            </h3>

                            <p class="text-sm italic mb-1">Pemilik: {{ $umkm->pemilik }}</p>
                            <p class="flex-grow">
                                {{ \Illuminate\Support\Str::limit(strip_tags($umkm->deskripsi), 120, '...') }}</p>

                            <div class="mt-4 text-sm">
                                <span class="font-semibold">Alamat:</span><br>
                                {{ $umkm->alamat }}
                                @if (!empty($umkm->gmaps))
                                    <div class="mt-4 text-sm">
                                        <span class="font-semibold">Maps:</span><br>
                                        <a href="{{ $umkm->gmaps }}" target="_blank"
                                            class="text-blue-600 hover:underline">
                                            Lihat Lokasi
                                        </a>
                                    </div>
                                @endif

                            </div>

                            <div class="mt-4 flex space-x-4 text-2xl text-darkyellow">
                                @foreach ($sosmedLinks as $field => $data)
                                    @if (!empty($umkm->$field))
                                        <a href="{{ $umkm->$field }}" class="hover:text-darkyellow-light"
                                            rel="noopener noreferrer" target="_blank"
                                            aria-label="{{ ucfirst($field) }}">
                                            {!! $data['icon'] !!}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

        </section>
    </main>
    <footer class="bg-white border-t border-darkyellow text-darkbrown py-8">
        <div class="mt-6 text-center text-sm text-darkyellow">
            © 2025 Desa Plamongan Sari. Semua hak cipta dilindungi. <br>
            Dibangun oleh <strong>Tim KKNT-105 Kelompok 2 UNDIP</strong>.
        </div>
    </footer>

    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        window.addEventListener('load', function() {
            const loader = document.getElementById('page-loader');
            if (loader) {
                loader.classList.add('opacity-0');
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }
        });
    </script>
</body>

</html>
