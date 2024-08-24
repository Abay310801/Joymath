<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="icon" href="{{ asset('/assets/img/logo.png') }}" type="image/x-icon">


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
</head>

<style>
    .carousel {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
    }

    .carousel-item {
        flex: 0 0 auto;
        margin-right: 16px;
        /* Spacing between cards */
    }

    .carousel-container {
        display: flex;
        align-items: center;
    }

    .carousel::-webkit-scrollbar {
        display: none;
    }

    .carousel-container a {
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .carousel-item {
            width: calc(100vw - 32px);
        }
    }

    .swiper-slide {
        max-width: 300px;
        height: auto;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .swiper-slide .p-5 {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .swiper-slide .p-5 p {
        word-wrap: break-word;
        overflow-wrap: break-word;
        max-height: 150px;
        overflow: hidden;
    }

    .swiper-slide .p-5 #fullDescription {
        max-height: 300px;
        overflow-y: auto;
    }

    .read-more-btn {
        align-self: flex-start;
    }
</style>

<body class="font-sans antialiased dark:bg-[#ffff]">
    <div>
        <x-navbar></x-navbar>
    </div>
    {{-- @if (Route::has('login'))
        <nav class="flex justify-end flex-1 -mx-3">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif --}}
    <div class="container px-4 md:px-8 lg:px-[68px] mb-6">
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 w-full md:w-1/2 py-8 md:py-[150px] text-center md:text-left">
                <h3 class="py-3 mb-3 text-3xl font-bold md:text-5xl">
                    Belajar matematika<br>
                    bebas cemas bersama
                </h3>
                <span class="text-4xl font-bold md:text-6xl">
                    JOYMA+H
                </span>
                <p class="text-[16px] md:text-[20px] py-5">
                    Metode perilaku kognitif <br>
                    untuk belajar matematika yang efektif
                </p>
                <div>
                    <a href="{{ route('learningalltopik') }}">
                        <button
                            class="text-white bg-[#046AB8] px-5 py-2 rounded-3xl">{{ __('Belajar Sekarang') }}</button>
                    </a>
                </div>
            </div>
            <div class="flex-1 w-full md:w-1/2">
                <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero" class="w-full h-auto">
            </div>
        </div>
    </div>

    <div class="container w-full px-4 md:px-8 bg-[#efefef]">
        <div class="flex flex-col py-6 md:flex-row">
            <div class="flex-1 w-full mb-6 text-center md:w-1/2 md:mb-0 md:text-left">
                <div class="w-full md:w-96 mx-auto md:mx-0 md:ms-[100px]">
                    <h1 class="text-[20px] font-bold mb-3">About JoyMath</h1>
                    <p>
                        Metode pembelajaran Joymath Cognitive Behavioral (JCB)
                        merupakan inovasi yang mengintegrasikan konsep pembelajaran matematika dengan
                        prinsip-prinsip psikologi kognitif dan perilaku. Pendesainan metode ini diharapkan dapat
                        menciptakan
                        pengalaman belajar yang lebih menyenangkan dan efektif, sehingga meningkatkan pemahaman dan
                        minat
                        siswa terhadap matematika.
                    </p>
                </div>
            </div>
            <div class="flex-1 w-full md:w-1/2 overflow-hidden mr-0 md:mr-[47px]">
                <div class="flex justify-end gap-5 mb-4 carousel-container">
                    <a id="prev" class="material-icons text-[50px] text-[#046AB8]">arrow_circle_left</a>
                    <a id="next" class="material-icons text-[50px] text-[#046AB8]">arrow_circle_right</a>
                </div>
                <div class="carousel">
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/1.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Hetty Marheni, M.Pd., MCE</span>
                                <p>Dosen Matematika</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/2.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Anggota</h4>
                                <span class="text-gray-700 text-[20px]">Dian Sartika Sari, S.Psi., M.Psi.</span>
                                <p>Dosen Psikologi</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/3.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Anggota</h4>
                                <span class="text-gray-700 text-[20px]">Reny Yuaniasanti, S.Psi., M.Psi., Ph.D.</span>
                                <p>Dosen Psikologi</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/4.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Anggota</h4>
                                <span class="text-gray-700 text-[20px]">Nanang Khuzaini, S.Pd.Si., M.Pd.</span>
                                <p>Dosen Matematika</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/5.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Anggota</h4>
                                <span class="text-gray-700 text-[20px]">Mutaqin Akbar, S.Kom., M.T., MCE., MCF.</span>
                                <p>Dosen Informatika</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/6.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Anggota</h4>
                                <span class="text-gray-700 text-[20px]">Dangin, S.Pd., M.Hum.</span>
                                <p>Dosen Pendidikan B.Inggris</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/7.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Asisten</h4>
                                <span class="text-gray-700 text-[20px]">Muhammad Rafi Fajar Rizky, S.Pd.</span>
                                <p>Alumni Pendidikan Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/9.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Team 1</h4>
                                <span class="text-gray-700 text-[20px]">Yoel Christian Sukasno</span>
                                <p>Mahasiswa Program Studi Psikologi</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/9.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Team 1</h4>
                                <span class="text-gray-700 text-[20px]">Yohana Maria Vianney K.</span>
                                <p>Mahasiswa Program Studi Psikologi</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/10.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Team 2</h4>
                                <span class="text-gray-700 text-[20px]">Ahmad Baehaqi</span>
                                <p>Mahasiswa Program Studi Program Studi Informatika</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/11.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Team 2</h4>
                                <span class="text-gray-700 text-[20px]">Yoga Alfa Risqi</span>
                                <p>Mahasiswa Program Studi Program Studi Informatika</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/12.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Team 3</h4>
                                <span class="text-gray-700 text-[20px]">Sisila Hari Martuti</span>
                                <p>Mahasiswa Program Studi Pendidikan B.Inggris</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/13.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Team 3</h4>
                                <span class="text-gray-700 text-[20px]">Wahyu Cahyo Agung</span>
                                <p>Mahasiswa Program Studi Pendidikan B.Inggris</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/14.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Team 4</h4>
                                <span class="text-gray-700 text-[20px]">Raka S. Aditya</span>
                                <p>Mahasiswa Program Studi Ilmu Komunikasi</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/15.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Team 4</h4>
                                <span class="text-gray-700 text-[20px]">Puti Yasmine Aisyah H.</span>
                                <p>Mahasiswa Program Studi Ilmu Komunikasi</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/16.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Team 5</h4>
                                <span class="text-gray-700 text-[20px]">Yossi Novitaningsih</span>
                                <p>Mahasiswa Program Studi Pendidikan Matematika</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/17.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Team 5</h4>
                                <span class="text-gray-700 text-[20px]">Rufus Abyater</span>
                                <p>Mahasiswa Program Studi Pendidikan Matematika</p>
                            </div>
                        </a>
                    </div>
                    <!-- Repeat for all 16 items -->
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-col items-center justify-center px-6 md:px-16 py-9">
        <div class="px-5 mt-24">
            <h2 class="text-3xl font-bold text-center md:text-left">Kenapa harus JOYMA+H?</h2>
        </div>
        <div class="grid grid-cols-1 gap-10 px-5 my-16 md:grid-cols-3 md:my-32 md:px-9">
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/Psychological_based.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Psychological Based</h2>
                <p class="w-56">
                Membantu siswa mengatasi kecemasan baik secara preventif maupun kuratif.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/Inklusif_integrated_.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Inklusif Integrated</h2>
                <p class="w-56">
                Menggunakan bahasa isyarat untuk memfasilitasi siswa dengan disabilitas fisik.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/Beragam_konten_pembel_.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Beeragam Konten Pembelajaran</h2>
                <p class="w-56">
                Menyediakan LKS dan aplikasi dengan video edukatif yang sesuai dengan preferensi siswa.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/Short_video_eduk.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Short Video Edukatif Joymath</h2>
                <p class="w-56">
                Menyajikan materi matematika dan kesehatan mental dengan gaya seperti platform media sosial.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/fitur_Keseimbangan_ant.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Keseimbangan Antara Matematika dan Kesehatan Mental</h2>
                <p class="w-56">
                Membantu siswa memahami matematika sekaligus mengelola stres dan kecemasan.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/feature_of_Enjoyabl.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Kualitas bahasa yang menyenangkan</h2>
                <p class="w-56">
                Menggunakan kata-kata positif dan menghibur dalam setiap konten. 
                </p>
            </div>
        </div>


        <div class="px-5 mt-24">
            <h1 class="text-3xl font-bold text-center md:text-left">Kegiatan JoyMath Cognitive Behavioral</h1>
        </div>

        {{-- <div class="flex flex-col gap-10 px-5 my-16 md:flex-row md:my-32 md:px-9">
            <div
                class="max-w-[300px] bg-[#D9D9D9] border border-gray-200 rounded-lg shadow dark:bg-[#D9D9D9] dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('/assets/img/landing page.png') }}" alt="card image" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div
                class="max-w-[300px] bg-[#D9D9D9] border border-gray-200 rounded-lg shadow dark:bg-[#D9D9D9] dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('/assets/img/landing page.png') }}" alt="card image" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div
                class="max-w-[300px] bg-[#D9D9D9] border border-gray-200 rounded-lg shadow dark:bg-[#D9D9D9] dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('/assets/img/landing page.png') }}" alt="card image" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div> --}}

        {{-- <div class="w-full px-5 my-16 swiper-container md:w-[80%] md:my-32 md:px-9">
            <div class="w-full overflow-hidden swiper-wrapper">
                <div class="mx-auto carousel">
                    <div
                        class="swiper-slide max-w-[300px] carousel-item bg-[#D9D9D9] border border-gray-200 rounded-lg shadow dark:bg-[#D9D9D9] dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('/assets/img/landing page.png') }}"
                                alt="card image" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                chronological order.
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="swiper-slide max-w-[300px] carousel-item bg-[#D9D9D9] border border-gray-200 rounded-lg shadow dark:bg-[#D9D9D9] dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('/assets/img/landing page.png') }}"
                                alt="card image" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                chronological order.
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="swiper-slide max-w-[300px] carousel-item bg-[#D9D9D9] border border-gray-200 rounded-lg shadow dark:bg-[#D9D9D9] dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('/assets/img/landing page.png') }}"
                                alt="card image" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                chronological order.
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="swiper-slide max-w-[300px] carousel-item bg-[#D9D9D9] border border-gray-200 rounded-lg shadow dark:bg-[#D9D9D9] dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('/assets/img/landing page.png') }}"
                                alt="card image" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                chronological order.
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="swiper-slide max-w-[300px] carousel-item bg-[#D9D9D9] border border-gray-200 rounded-lg shadow dark:bg-[#D9D9D9] dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('/assets/img/landing page.png') }}"
                                alt="card image" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                chronological order.
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Pagination and Navigation -->
                <div class="swiper-pagination"></div>
                <div
                    class="absolute left-0 right-0 z-10 flex items-center justify-between mx-5 transform -translate-y-1/2 top-1/2">
                    <a id="prevv"
                        class="material-icons text-[50px] text-[#046AB8] cursor-pointer">arrow_circle_left</a>
                    <a id="nextt"
                        class="material-icons text-[50px] text-[#046AB8] cursor-pointer">arrow_circle_right</a>
                </div>
            </div>
        </div> --}}
        <div class="w-full px-5 my-16 swiper-container md:w-[80%] md:my-32 md:px-9">
            <div class="w-full overflow-hidden swiper-wrapper">
                <div class="mx-auto carousel">
                    @forelse ($kegiatan as $data)
                        <div
                            class="swiper-slide max-w-[300px] h-auto carousel-item bg-[#D9D9D9] border border-gray-200 rounded-lg shadow dark:bg-[#D9D9D9] dark:border-gray-700 overflow-hidden">
                            <a href="#" class="w-full overflow-hidden">
                                <img class="duration-150 rounded-t-lg hover:scale-125 hover:duration-500"
                                    src="{{ asset('storage/kegiatan/' . $data->image) }}" alt="card image" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $data->title }}
                                    </h5>
                                </a>
                                <p id="shortDescription-{{ $loop->index }}"
                                    class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-3">
                                    {{ Str::limit($data->deskripsi, 10) }}
                                </p>
                                <p id="fullDescription-{{ $loop->index }}"
                                    class="hidden mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    {{ $data->deskripsi }}
                                </p>
                                <button id="readMoreBtn-{{ $loop->index }}"
                                    class="read-more-btn inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @empty
                        <p>No data available</p>
                    @endforelse
                </div>
            </div>
        </div>




        <div class="py-10">
            <h2 class="text-3xl font-bold text-center">Suported By</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-6 my-6">
            <div class="w-[150px] h-[100px] border-2 rounded-md border-gray-800 px-5 py-5">
                <img src="{{ asset('/assets/img/TutWuri 1.png') }}" alt="card image"
                    class="object-contain w-full h-full" />
            </div>
            <div class="w-[150px] h-[100px] border-2 rounded-md border-gray-800 px-5 py-5">
                <img src="{{ asset('/assets/img/KampusMerdeka_transparent 1.png') }}" alt="card image"
                    class="object-contain w-full h-full" />
            </div>
            <div class="w-[150px] h-[100px] border-2 rounded-md border-gray-800 px-5 py-5">
                <img src="{{ asset('/assets/img/KedaiReka_transparent 1.png') }}" alt="card image"
                    class="object-contain w-full h-full" />
            </div>
            <div class="w-[150px] h-[100px] border-2 rounded-md border-gray-800 px-5 py-5">
                <img src="{{ asset('/assets/img/Logo-Universitas-Mercu-Buana-Yogyakarta-Dianisa.com_ (1) 1.png') }}"
                    alt="card image" class="object-contain w-full h-full" />
            </div>
            <div class="w-[150px] h-[100px] border-2 rounded-md border-gray-800 px-5 py-5">
                <img src="{{ asset('/assets/img/ASA-removebg-preview 1.png') }}" alt="card image"
                    class="object-contain w-full h-full" />
            </div>
        </div>
    </div>

    <div>
        <x-footer></x-footer>
    </div>


    <script>
        const carousel = document.querySelector('.carousel');
        const carouselItems = document.querySelectorAll('.carousel-item');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');

        let itemwidth = carouselItems[0].getBoundingClientRect().width + 11;


        prevButton.addEventListener('click', () => {
            carousel.scrollBy({
                left: -itemwidth,
                behavior: 'smooth'
            });
        });

        nextButton.addEventListener('click', () => {
            carousel.scrollBy({
                left: itemwidth,
                behavior: 'smooth'
            });
        });

        window.addEventListener('resize', () => {
            itemwidth = carouselItems[0].getBoundingClientRect().width + 11;
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const readMoreButtons = document.querySelectorAll('.read-more-btn');

            readMoreButtons.forEach((btn, index) => {
                btn.addEventListener('click', function() {
                    const shortDescription = document.getElementById(`shortDescription-${index}`);
                    const fullDescription = document.getElementById(`fullDescription-${index}`);

                    if (fullDescription.classList.contains('hidden')) {
                        // Tampilkan deskripsi lengkap
                        fullDescription.classList.remove('hidden');
                        shortDescription.classList.add('hidden');
                        btn.innerHTML = `Read less
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>`;
                    } else {
                        // Kembali ke deskripsi pendek
                        fullDescription.classList.add('hidden');
                        shortDescription.classList.remove('hidden');
                        btn.innerHTML = `Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>`;
                    }
                });
            });
        });
    </script>

</body>

</html>