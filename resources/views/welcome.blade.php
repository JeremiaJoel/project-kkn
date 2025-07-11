<html class="scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Desa Modern - Beranda
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
                    Desa Modern
                </span>
            </a>
            <nav>
                <ul class="hidden md:flex space-x-10 font-semibold text-darkbrown">
                    <li>
                        <a class="hover:text-darkyellow transition" href="#profil">
                            Profil Kelurahan
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-darkyellow transition" href="#data-rw">
                            Data RW
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-darkyellow transition" href="#berita">
                            Berita
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
                    <a class="block hover:text-darkyellow transition" href="#profil">
                        Profil Kelurahan
                    </a>
                </li>
                <li>
                    <a class="block hover:text-darkyellow transition" href="#data-rw">
                        Data RW
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
        <!-- Hero Section -->
        <section class="relative bg-white rounded-lg shadow-lg overflow-hidden mb-16" id="home">
            <div class="md:flex md:items-center">
                <div class="md:w-1/2 p-8">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-darkbrown mb-4 leading-tight">
                        Selamat Datang di Desa Modern
                    </h1>
                    <p class="text-gray-700 mb-6 text-lg">
                        Desa yang maju, bersih, dan ramah lingkungan. Mari bersama membangun masa depan yang lebih baik.
                    </p>
                    <a class="inline-block bg-darkyellow text-darkbrown px-6 py-3 rounded-lg font-semibold shadow-md hover:bg-darkyellow-light transition"
                        href="#profil">
                        Pelajari Profil Kelurahan
                    </a>
                </div>
                <div class="md:w-1/2">
                    <img alt="Ilustrasi desa modern dengan rumah-rumah minimalis, pohon hijau, dan langit cerah dengan warna coklat tua dan kuning tua"
                        class="w-full h-auto object-cover rounded-r-lg shadow-lg" height="400"
                        src="https://storage.googleapis.com/a1aa/image/0149b604-1154-4ae9-d35e-b19b9dda3f8e.jpg"
                        width="600" />
                </div>
            </div>
        </section>
        <!-- Profil Kelurahan -->
        <section class="mb-20" id="profil">
            <h2
                class="text-3xl font-bold text-darkbrown mb-8 text-center border-b-4 border-darkyellow inline-block pb-2">
                Profil Kelurahan
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="bg-white border-2 border-darkyellow rounded-lg shadow p-6 flex flex-col items-center text-center">
                    <img alt="Foto kantor kelurahan modern dengan bangunan berwarna coklat tua dan taman kuning tua di depan"
                        class="rounded-full mb-4 w-36 h-36 object-cover shadow-md" height="150"
                        src="https://storage.googleapis.com/a1aa/image/23be98be-4779-4b43-aacb-692fd17981df.jpg"
                        width="150" />
                    <h3 class="text-xl font-semibold text-darkbrown mb-2">
                        Kantor Kelurahan
                    </h3>
                    <p class="text-gray-700">
                        Kantor kelurahan kami melayani masyarakat dengan ramah dan profesional setiap hari kerja.
                    </p>
                </div>
                <div
                    class="bg-white border-2 border-darkyellow rounded-lg shadow p-6 flex flex-col items-center text-center">
                    <img alt="Gambar ilustrasi sejarah desa dengan buku dan peta kuno berwarna coklat tua dan kuning tua"
                        class="rounded-full mb-4 w-36 h-36 object-cover shadow-md" height="150"
                        src="https://storage.googleapis.com/a1aa/image/b96d403b-fc2a-464d-3c8a-5c9d203b463f.jpg"
                        width="150" />
                    <h3 class="text-xl font-semibold text-darkbrown mb-2">
                        Sejarah Desa
                    </h3>
                    <p class="text-gray-700">
                        Desa ini berdiri sejak tahun 1920 dengan tradisi dan budaya yang kaya dan terjaga.
                    </p>
                </div>
                <div
                    class="bg-white border-2 border-darkyellow rounded-lg shadow p-6 flex flex-col items-center text-center">
                    <img alt="Ilustrasi visi dan misi desa dengan ikon target dan panah berwarna coklat tua dan kuning tua"
                        class="rounded-full mb-4 w-36 h-36 object-cover shadow-md" height="150"
                        src="https://storage.googleapis.com/a1aa/image/b4f20efa-bb4a-41fe-2a57-e3c37e98bb04.jpg"
                        width="150" />
                    <h3 class="text-xl font-semibold text-darkbrown mb-2">
                        Visi &amp; Misi
                    </h3>
                    <p class="text-gray-700">
                        Mewujudkan desa yang mandiri, berkelanjutan, dan sejahtera melalui inovasi dan gotong royong.
                    </p>
                </div>
            </div>
        </section>
        <!-- Data RW -->
        <section class="mb-20" id="data-rw">
            <h2
                class="text-3xl font-bold text-darkbrown mb-8 text-center border-b-4 border-darkyellow inline-block pb-2">
                Data RW
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white border-2 border-darkbrown rounded-lg shadow p-6 flex flex-col">
                    <h3 class="text-2xl font-bold text-darkyellow mb-4 border-b-2 border-darkyellow pb-2">
                        RW 01
                    </h3>
                    <img alt="Foto ketua RW 01, pria paruh baya mengenakan kemeja batik coklat tua berdiri di depan kantor RW dengan latar belakang putih"
                        class="w-full h-48 object-cover rounded-md mb-4 shadow" height="400"
                        src="https://storage.googleapis.com/a1aa/image/8f4b478a-292f-44ac-a66c-d78d1101fb55.jpg"
                        width="600" />
                    <p class="mb-2 font-semibold text-darkbrown">
                        Ketua RW: Budi Santoso
                    </p>
                    <p class="mb-2 text-darkbrown">
                        Jumlah KK: 120
                    </p>
                    <p class="mb-2 text-darkbrown">
                        Jumlah Penduduk: 450
                    </p>
                    <p class="font-semibold text-darkyellow">
                        <a class="hover:underline" href="tel:+628123456789">
                            0812-3456-789
                        </a>
                    </p>
                </div>

        </section>
        <!-- Berita -->
        <section class="mb-20" id="berita">
            <h2
                class="text-3xl font-bold text-darkbrown mb-8 text-center border-b-4 border-darkyellow inline-block pb-2">
                Berita Terbaru
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <article class="bg-white border-2 border-darkyellow rounded-lg shadow overflow-hidden flex flex-col">
                    <img alt="Foto warga desa sedang melakukan gotong royong membersihkan lingkungan dengan alat sapu dan karung sampah dengan warna coklat tua dan kuning tua"
                        class="w-full h-48 object-cover rounded-t-lg shadow" height="350"
                        src="https://storage.googleapis.com/a1aa/image/a8199784-a6c4-429f-bb92-d98f2540daa1.jpg"
                        width="600" />
                    <div class="p-6 flex flex-col flex-grow text-darkbrown">
                        <h3 class="text-xl font-semibold mb-2 border-b border-darkyellow pb-1">
                            Kegiatan Gotong Royong Bersih Desa
                        </h3>
                        <p class="flex-grow">
                            Warga desa bersama-sama melaksanakan gotong royong membersihkan lingkungan desa demi
                            kenyamanan bersama.
                        </p>
                        <time class="mt-4 text-sm text-darkyellow">
                            10 Juni 2024
                        </time>
                    </div>
                </article>
                <article class="bg-white border-2 border-darkyellow rounded-lg shadow overflow-hidden flex flex-col">
                    <img alt="Foto petani desa sedang mengikuti pelatihan pertanian modern dengan instruktur dan alat pertanian canggih dengan warna coklat tua dan kuning tua"
                        class="w-full h-48 object-cover rounded-t-lg shadow" height="350"
                        src="https://storage.googleapis.com/a1aa/image/b7637166-a042-4f92-6ed4-efe62b631d15.jpg"
                        width="600" />
                    <div class="p-6 flex flex-col flex-grow text-darkbrown">
                        <h3 class="text-xl font-semibold mb-2 border-b border-darkyellow pb-1">
                            Pelatihan Pertanian Modern
                        </h3>
                        <p class="flex-grow">
                            Desa mengadakan pelatihan pertanian modern untuk meningkatkan hasil panen dan kesejahteraan
                            petani.
                        </p>
                        <time class="mt-4 text-sm text-darkyellow">
                            5 Juni 2024
                        </time>
                    </div>
                </article>
                <article class="bg-white border-2 border-darkyellow rounded-lg shadow overflow-hidden flex flex-col">
                    <img alt="Foto festival budaya desa dengan warga mengenakan pakaian tradisional dan pertunjukan tari dengan warna coklat tua dan kuning tua"
                        class="w-full h-48 object-cover rounded-t-lg shadow" height="350"
                        src="https://storage.googleapis.com/a1aa/image/c3c1f254-d1b9-4d01-21f5-b4b6e9720211.jpg"
                        width="600" />
                    <div class="p-6 flex flex-col flex-grow text-darkbrown">
                        <h3 class="text-xl font-semibold mb-2 border-b border-darkyellow pb-1">
                            Festival Budaya Desa
                        </h3>
                        <p class="flex-grow">
                            Festival budaya tahunan yang menampilkan kesenian dan tradisi khas desa kami yang kaya akan
                            nilai sejarah.
                        </p>
                        <time class="mt-4 text-sm text-darkyellow">
                            28 Mei 2024
                        </time>
                    </div>
                </article>
                <article class="bg-white border-2 border-darkyellow rounded-lg shadow overflow-hidden flex flex-col">
                    <img alt="Foto pembangunan jalan desa dengan alat berat dan pekerja konstruksi sedang mengaspal jalan dengan warna coklat tua dan kuning tua"
                        class="w-full h-48 object-cover rounded-t-lg shadow" height="350"
                        src="https://storage.googleapis.com/a1aa/image/fc05f090-cbd3-41ce-afd6-5ce982eed938.jpg"
                        width="600" />
                    <div class="p-6 flex flex-col flex-grow text-darkbrown">
                        <h3 class="text-xl font-semibold mb-2 border-b border-darkyellow pb-1">
                            Pembangunan Jalan Desa
                        </h3>
                        <p class="flex-grow">
                            Proyek pembangunan jalan desa untuk meningkatkan aksesibilitas dan konektivitas antar RW.
                        </p>
                        <time class="mt-4 text-sm text-darkyellow">
                            20 Mei 2024
                        </time>
                    </div>
                </article>
                <article class="bg-white border-2 border-darkyellow rounded-lg shadow overflow-hidden flex flex-col">
                    <img alt="Foto petugas kesehatan desa memberikan pelayanan kesehatan gratis kepada warga di balai desa dengan warna coklat tua dan kuning tua"
                        class="w-full h-48 object-cover rounded-t-lg shadow" height="350"
                        src="https://storage.googleapis.com/a1aa/image/7a9106f4-e0fe-44de-299a-0ce6996719f9.jpg"
                        width="600" />
                    <div class="p-6 flex flex-col flex-grow text-darkbrown">
                        <h3 class="text-xl font-semibold mb-2 border-b border-darkyellow pb-1">
                            Pelayanan Kesehatan Gratis
                        </h3>
                        <p class="flex-grow">
                            Pemerintah desa menyediakan pelayanan kesehatan gratis untuk meningkatkan kualitas hidup
                            warga.
                        </p>
                        <time class="mt-4 text-sm text-darkyellow">
                            15 Mei 2024
                        </time>
                    </div>
                </article>
                <article class="bg-white border-2 border-darkyellow rounded-lg shadow overflow-hidden flex flex-col">
                    <img alt="Foto warga desa menanam pohon di area terbuka sebagai bagian dari program penghijauan desa dengan warna coklat tua dan kuning tua"
                        class="w-full h-48 object-cover rounded-t-lg shadow" height="350"
                        src="https://storage.googleapis.com/a1aa/image/0061b0b3-a00c-432c-e11b-b33723947f5b.jpg"
                        width="600" />
                    <div class="p-6 flex flex-col flex-grow text-darkbrown">
                        <h3 class="text-xl font-semibold mb-2 border-b border-darkyellow pb-1">
                            Program Penghijauan Desa
                        </h3>
                        <p class="flex-grow">
                            Inisiatif penghijauan desa untuk menjaga kelestarian lingkungan dan meningkatkan kualitas
                            udara.
                        </p>
                        <time class="mt-4 text-sm text-darkyellow">
                            10 Mei 2024
                        </time>
                    </div>
                </article>
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
    </script>
</body>

</html>
