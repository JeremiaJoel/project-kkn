<html class="scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
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
                            DEFAULT: '#4B2E05',
                            light: '#6B4F1D',
                            dark: '#3A2203',
                        },
                        darkyellow: {
                            DEFAULT: '#D4A017',
                            light: '#E6B93B',
                            dark: '#A67C0A',
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
    <header class="bg-white shadow-md fixed w-full z-30 border-b border-darkyellow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a class="text-2xl font-bold text-darkbrown flex items-center space-x-2" href="#home">
                <img alt="Logo desa modern berwarna coklat tua dan kuning tua dengan simbol rumah dan pohon"
                    class="w-10 h-10" height="40"
                    src="https://storage.googleapis.com/a1aa/image/c7b01238-31fa-49d0-3e2c-01ab007ccad4.jpg"
                    width="40" />
                <span class="text-darkyellow font-extrabold">
                    Website UMKM RW
                </span>
            </a>
            <nav>
                <ul class="hidden md:flex space-x-10 font-semibold text-darkbrown">
                    <li>
                        <a class="hover:text-darkyellow transition" href="{{ route('welcome') }}">
                            Home Page
                        </a>
                    </li>
                </ul>
                <button aria-label="Toggle menu"
                    class="md:hidden text-darkbrown focus:outline-none focus:ring-2 focus:ring-darkyellow"
                    id="menu-btn">
                    <i class="fas fa-bars fa-lg">
                    </i>
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

            <div class="flex space-x-4 text-2xl text-darkyellow">
                @foreach ($sosmedLinks as $field => $data)
                    @if (!empty($umkm->$field))
                        <a href="{{ $data['prefix'] . $umkm->$field }}" class="hover:text-darkyellow-light"
                            rel="noopener noreferrer" target="_blank" aria-label="{{ ucfirst($field) }}">
                            {!! $data['icon'] !!}
                        </a>
                    @endif
                @endforeach
            </div>

        </section>
    </main>
    <footer class="bg-white border-t border-darkyellow text-darkbrown py-8">
        <div class="max-w-7xl mx-auto px-6 text-center md:text-left md:flex md:justify-between md:items-center">
            <div class="mb-4 md:mb-0">
                <h3 class="text-lg font-semibold">
                    Desa Modern
                </h3>
                <p>
                    Jl. Merdeka No. 123, Kecamatan Maju, Kabupaten Sejahtera
                </p>
                <p>
                    Email: info@desamodern.id | Telp: 021-12345678
                </p>
            </div>
            <div class="flex justify-center space-x-6 text-xl">
                <a aria-label="Facebook" class="hover:text-darkyellow" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a aria-label="Twitter" class="hover:text-darkyellow" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a aria-label="Instagram" class="hover:text-darkyellow" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a aria-label="YouTube" class="hover:text-darkyellow" href="#">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>

        <div class="mt-6 text-center text-sm text-darkyellow">
            © 2025 Desa Plamongan Sari. Semua hak cipta dilindungi. <br>
            Dibangun oleh <strong>Tim KKNT-105 Kelompok 2 UNDIP</strong>.
        </div>
    </footer>


</body>

</html>
