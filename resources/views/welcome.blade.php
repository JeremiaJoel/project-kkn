<html class="scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Landing Page Website Pemasaran UMKM
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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

        /* Gradient background for full left column */
        .hero-text-bg {
            background: linear-gradient(135deg, #800000 0%, #9d1b0e 50%, #e3a434 100%);
            border-top-left-radius: 1rem;
            border-bottom-left-radius: 1rem;
            padding: 3rem 2rem;
            color: white;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
            height: 100%;
        }

        /* Text shadows for readability */
        .hero-text-bg h1,
        .hero-text-bg p {
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
        }

        /* Rounded corners for image */
        .hero-image img {
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        /* Responsive tweaks */
        @media (max-width: 767px) {
            .hero-text-bg {
                border-radius: 1rem;
                padding: 2rem 1.5rem;
                text-align: center;
            }

            .hero-image img {
                border-radius: 1rem;
                margin-top: 1.5rem;
                height: auto;
            }
        }

        /* Define custom colors if not already defined */
        .text-darkbrown {
            color: #5C4033;
            /* example dark brown */
        }

        .hover\:text-darkyellow:hover {
            color: #B8860B;
            /* dark yellow / goldenrod */
        }
    </style>
</head>


<body class="bg-white">

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
                        <a class="text-white text-xl hover:text-darkyellow transition-colors duration-200"
                            href="{{ route('katalog') }}">
                            Katalog UMKM
                        </a>
                    </li>
                </ul>
                <button aria-label="Toggle menu" class="md:hidden text-darkbrown focus:outline-none" id="menu-btn">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
            </nav>
        </div>
        <div class="md:hidden bg-white shadow-md hidden border-t border-darkyellow" id="mobile-menu">
            <ul class="flex flex-col space-y-3 px-6 py-4 font-semibold text-darkbrown">
                <li>
                    <a class="text-white text-xl hover:text-darkyellow transition-colors duration-200"
                        href="{{ route('katalog') }}">
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

    <main class="pt-24 max-w-full px-5">

        <!-- Hero Section -->
        <section class="relative mb-16 w-full mx-auto rounded-lg shadow-lg overflow-hidden" id="home">
            <div class="flex flex-col md:flex-row md:items-stretch w-full">
                <!-- Kolom Kiri: Background Gradient -->
                <div class="md:w-1/2">
                    <div class="hero-text-bg h-full flex flex-col justify-center">
                        <h1
                            class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight tracking-tight drop-shadow-lg">
                            Selamat Datang di <span class="text-yellow-400">Website Pemasaran UMKM RW</span>
                        </h1>
                        <p class="mt-6 text-lg sm:text-xl max-w-xl drop-shadow-md">
                            Platform digital untuk memperkenalkan dan memasarkan produk unggulan warga RW. Temukan
                            beragam UMKM
                            lokal yang siap bersaing dan berkontribusi bagi kemajuan ekonomi masyarakat.
                        </p>
                    </div>
                </div>

                <!-- Kolom Kanan: Gambar -->
                <div class="hero-image md:w-1/2 h-80 md:h-auto">
                    <img alt="Ilustrasi desa modern dengan rumah-rumah minimalis, pohon hijau, dan langit cerah"
                        src="{{ asset('/img/foto kelurahan.jpg') }}" />
                </div>
            </div>
        </section>

        <!-- Profil Kelurahan -->
        <!-- Data RW -->
        <section class="mb-20 mx-auto px-6" id="data-rw">
            <div class="flex justify-center">
                <h2 class="text-3xl font-bold text-darkbrown mb-8 border-b-4 border-darkyellow inline-block pb-2">
                    Data RW
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($rws as $rw)
                    <div
                        class="bg-white border-2 border-darkbrown rounded-2xl shadow-lg p-8 flex flex-col hover:shadow-2xl transition-shadow duration-300 group cursor-pointer w-[300px]">
                        <h3 class="text-2xl font-bold text-black     mb-4 border-b-2 border-darkyellow pb-2">
                            {{ $rw->nama_rw }}
                        </h3>

                        {{-- <img alt="Foto ketua {{ $rw->nama_rw }}"
                            class="w-full h-48 object-cover rounded-md mb-4 shadow"
                            src="{{ $rw->foto ?? 'https://via.placeholder.com/600x400?text=Foto+RW' }}" height="400"
                            width="600" /> --}}

                        <p class="mb-2 font-semibold text-darkbrown">
                            Ketua RW: {{ $rw->ketua_rw }}
                        </p>

                        <p class="mb-2 text-darkbrown">
                            Jumlah UMKM
                        </p>
                        <p class="mb-2 text-darkbrown">
                            Alamat : {{ $rw->alamat }}
                        </p>
                        <p class="font-semibold text-darkyellow">
                            <a class="hover:underline" href="tel:{{ $rw->kontak }}">
                                {{ $rw->kontak }}
                            </a>
                        </p>

                    </div>
                @endforeach

            </div>
            <a class="inline-block m-3 bg-darkyellow text-darkbrown p-3 rounded-lg font-semibold shadow-md hover:bg-darkyellow-light transition text-center"
                href="#">
                Jelajahi Detail UMKM
            </a>
        </section>
        <!-- Berita -->
        <section class="mb-20 mx-auto px-6" id="berita">
            <div class="flex justify-center">
                <h2 class="text-3xl font-bold text-darkbrown mb-8 border-b-4 border-darkyellow inline-block pb-2">
                    Berita UMKM
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-[1400px]">
                @foreach ($berita as $index => $item)
                    <article
                        class="bg-white border-2 border-darkbrown rounded-2xl shadow-lg p-3 flex flex-col hover:shadow-2xl transition-shadow duration-300 group cursor-pointer">
                        {{-- Gambar Slide --}}
                        @php

                            if (is_array($item->thumbnail)) {
                                $gambarList = $item->thumbnail;
                            } elseif (is_string($item->thumbnail)) {
                                $decoded = json_decode($item->thumbnail, true);
                                $gambarList = is_array($decoded) ? $decoded : [$item->thumbnail];
                            }
                            $swiperId = 'swiper-berita-' . $index;
                        @endphp

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
                            <!-- Gambar -->
                            <template x-for="(image, index) in images" :key="index">
                                <img x-show="currentSlide === index" x-transition :src="'/storage/' + image"
                                    alt="Gambar berita" class="absolute inset-0 w-full h-full object-contain" />
                            </template>

                            <!-- Tombol Kiri -->
                            <button @click="prev"
                                class="absolute top-1/2 left-2 -translate-y-1/2 bg-darkyellow text-darkbrown px-2 py-1 rounded shadow hover:bg-darkyellow-light">
                                ‹
                            </button>

                            <!-- Tombol Kanan -->
                            <button @click="next"
                                class="absolute top-1/2 right-2 -translate-y-1/2 bg-darkyellow text-darkbrown px-2 py-1 rounded shadow hover:bg-darkyellow-light">
                                ›
                            </button>
                        </div>



                        <div class="p-6 flex flex-col flex-grow text-darkbrown">
                            <h3 class="text-xl font-semibold mb-2 border-b border-darkyellow pb-1">
                                {{ $item->judul }}
                            </h3>
                            <p class="flex-grow">
                                {{ \Illuminate\Support\Str::limit(strip_tags($item->isi_berita), 120, '...') }}
                            </p>
                            <time class="mt-4 text-sm text-darkyellow">
                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                            </time>

                            <button
                                class="mt-4 inline-block bg-darkyellow text-darkbrown px-4 py-2 rounded shadow font-semibold hover:bg-darkyellow-light transition text-center btn-detail-berita"
                                data-id="{{ $item->id }}" data-judul="{{ $item->judul }}"
                                data-isi="{{ strip_tags($item->isi_berita) }}"
                                data-tanggal="{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}"
                                data-gambar="{{ is_array($item->thumbnail) ? json_encode($item->thumbnail) : json_encode([$item->thumbnail]) }}"
                                data-bs-toggle="modal" data-bs-target="#modalDetailBerita">
                                Lihat Detail
                            </button>

                        </div>
                    </article>
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
                    <i class="fab fa-facebook-f">
                    </i>
                </a>
                <a aria-label="Twitter" class="hover:text-darkyellow" href="#">
                    <i class="fab fa-twitter">
                    </i>
                </a>
                <a aria-label="Instagram" class="hover:text-darkyellow" href="#">
                    <i class="fab fa-instagram">
                    </i>
                </a>
                <a aria-label="YouTube" class="hover:text-darkyellow" href="#">
                    <i class="fab fa-youtube">
                    </i>
                </a>
            </div>
        </div>
        <div class="mt-6 text-center text-sm text-darkyellow">
            © 2024 Desa Modern. Semua hak cipta dilindungi.
        </div>
    </footer>
    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu on link click
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const swipers = document.querySelectorAll('.swiper');
        swipers.forEach((el) => {
            new Swiper(el, {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                slidesPerView: 1,
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.berita-swiper', {
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
        });
    });

    $(document).ready(function() {
        $(".btn-detail-berita").on("click", function() {
            var beritaId = $(this).data("id");

            $.ajax({
                url: "/berita/detail/" + beritaId,
                type: "GET",
                success: function(response) {
                    // Set teks
                    $("#modal-judul").text(response.judul);
                    $("#modal-isi").text(response.isi_berita);
                    $("#modal-tanggal").text(response.tanggal);

                    // Kosongkan dulu gambar sebelumnya
                    $("#modal-gambar-wrapper").empty();

                    // Ambil thumbnail (array JSON)
                    let thumbnails = [];

                    try {
                        thumbnails = typeof response.thumbnail === "string" ?
                            JSON.parse(response.thumbnail) :
                            response.thumbnail;
                    } catch (e) {
                        thumbnails = [];
                    }

                    // Loop gambar
                    thumbnails.forEach(function(path) {
                        const fullPath = "/storage/" + path;
                        const imgTag =
                            `<img src="${fullPath}" class="rounded shadow w-full h-48 object-cover mb-2" alt="Foto berita">`;
                        $("#modal-gambar-wrapper").append(imgTag);
                    });

                    // Tampilkan modal
                    $("#modalDetailBerita").modal("show");
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    alert("Terjadi kesalahan, coba lagi nanti.");
                }
            });
        });
    });
</script>
<script>
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

@include('components.modal-berita')

</body>

</html>
