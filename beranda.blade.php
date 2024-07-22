<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Sisfo FEB</title>
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Alpine -->
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Custom style -->
    <link rel="stylesheet" href="assets/css/skilline.css" id="bootstrap-style" type="text/css" />
    {{-- <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" /> --}}
    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased">
    <!-- navbar -->
    <div x-data="{ open: false }" class="w-full text-gray-700 bg-cream">
        <div class="flex flex-col max-w-screen-xl px-8 mx-auto md:items-center md:justify-between md:flex-row">
            <div class="flex flex-row items-center justify-between py-6">
                <div class="relative md:mt-2">
				<img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto 2xl:-mb-5" src="https://bucket-web-apps-upb.s3.ap-southeast-1.amazonaws.com/static_images_logo/LOGO-FEB-email.png" />
                </div>
				<div class="relative md:mt-10">
                    <a href="/"
                        class="text-lg relative z-50 font-bold tracking-widest text-gray-900 rounded-lg focus:outline-none focus:shadow-outline">Sisfo FEB</a>
                    <svg class="h-11 z-40 absolute -top-2 -left-3" viewBox="0 0 79 79" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M35.2574 2.24264C37.6005 -0.100501 41.3995 -0.100505 43.7426 2.24264L76.7574 35.2574C79.1005 37.6005 79.1005 41.3995 76.7574 43.7426L43.7426 76.7574C41.3995 79.1005 37.6005 79.1005 35.2574 76.7574L2.24264 43.7426C-0.100501 41.3995 -0.100505 37.6005 2.24264 35.2574L35.2574 2.24264Z"
                            fill="#65DAFF" />
                    </svg>
                </div>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'transform md:transform-none': !open, 'h-full': open }"
                class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 scale-y-0">
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="#">Beranda</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="https://feb.upb.ac.id/">Tentang FEB</a>
                <a class="px-10 py-3 mt-2 text-sm text-center bg-indigo-400 text-gray-800 rounded-full md:mt-8 md:ml-4"
                    href="/mahasiswa">Login Mahasiswa</a>
					<a class="px-10 py-3 mt-2 text-sm text-center bg-blue-400 text-gray-800 rounded-full md:mt-8 md:ml-4"
                    href="/dosen">Login Dosen</a>
                <a class="px-10 py-3 mt-2 text-sm text-center bg-yellow-500 text-white rounded-full md:mt-8 md:ml-4"
                    href="/admin">Login Tendik</a>
            </nav>
        </div>
    </div>
    <div class="bg-cream">
        <div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start">
            <!--Left Col-->
            <div
                class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
                <h1 data-aos="fade-right" data-aos-once="true"
                    class="my-4 text-5xl font-bold leading-tight text-darken">
                    <span class="text-yellow-500">SISFO FEB</span> now Online
                </h1>
                <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8">
                    Sistem Pendataan Prodi bagi mahasiswa/i pada <strong> Fakultas Ekonomi dan Bisnis </strong> <br>Universitas Panca Bhakti</p>
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
                <img data-aos="fade-up" data-aos-once="true" class="w-12/12 mx-auto 2xl:-mb-20"
                    src="assets/img/cover-1ver4.png" />
                <!-- red -->
                <div data-aos="fade-up" data-aos-delay="400" data-aos-once="true"
                    class="absolute top-20 right-10 sm:right-24 sm:top-28 md:top-36 md:right-32 lg:top-32 lg:right-16 floating">
                    <svg class="h-16 sm:h-24" viewBox="0 0 149 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d)">
                            <rect x="40" y="32" width="69" height="69" rx="14" fill="#F3627C" />
                        </g>
                        <rect x="51.35" y="44.075" width="47.3" height="44.85" rx="8" fill="white" />
                        <path d="M74.5 54.425V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round" />
                        <path d="M65.875 58.7375L65.875 78.575" stroke="#F25471" stroke-width="4"
                            stroke-linecap="round" />
                        <path d="M83.125 63.9125V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round" />
                        <defs>
                            <filter id="filter0_d" x="0" y="0" width="149" height="149" filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                <feOffset dy="8" />
                                <feGaussianBlur stdDeviation="20" />
                                <feColorMatrix type="matrix"
                                    values="0 0 0 0 0.825 0 0 0 0 0.300438 0 0 0 0 0.396718 0 0 0 0.26 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                </div>
                <!-- ux class -->
                {{-- <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-24 lg:-left-4 floating">
					<img class="bg-white bg-opacity-80 rounded-lg h-20 sm:h-28" src="assets/img/ux-class.svg" alt="">
				</div> --}}
                <!-- congrats -->
                <div data-aos="fade-up" data-aos-delay="600" data-aos-once="true"
                    class="absolute bottom-20 md:bottom-48 lg:bottom-24 -right-6 lg:right-8 floating-4">
                    <img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="assets/img/congrat.svg" alt="">
                </div>
            </div>
        </div>
        <div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
            <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                    fill="currentColor"></path>
            </svg>
            <div class="bg-white w-full h-20 -mt-px"></div>
        </div>
    </div>

    <!-- container -->
    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">

        <!-- card -->
        <div class="grid md:grid-cols-3 gap-14 md:gap-5 mt-20">
            <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div style="background: #818cf8;"
                    class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                    <svg class="w-6 h-6 text-white" viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z"
                            fill="white" />
                    </svg>
                </div>
                <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Panduan Pengunaan Bagi Mahasiswa</h1>
					<a href="/mahasiswa">
					<button
                                class="rounded-full text-white text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out"
                                style="background: rgba(35, 189, 238, 0.9)">Download Panduan</button></a>
            </div>
            <div data-aos="fade-up" data-aos-delay="150" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div style="background: #29B9E7;"
                    class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                    <svg class="w-6 h-6 text-white" viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z"
                            fill="white" />
                    </svg>
                </div>
                <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Panduan Pengunaan Bagi Dosen</h1>
                <a href="/dosen">
					<button
                                class="rounded-full text-white text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out"
                                style="background: rgba(35, 189, 238, 0.9)">Download Panduan</button></a>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div style="background: #F48C06;"
                    class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                    <svg class="w-6 h-6 text-white" viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z"
                            fill="white" />
                    </svg>
                </div>
                <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken lg:h-14 pt-3">Panduan Bagi Tendik</h1>
                <a href="/admin">
					<button
                                class="rounded-full text-white text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out"
                                style="background: rgba(35, 189, 238, 0.9)">Download Panduan</button></a>
            </div>
        </div>

        <!-- lorem -->
        <div class="mt-28">
            <div data-aos="flip-down" class="text-center max-w-screen-md mx-auto">
                <h1 class="text-3xl font-bold mb-4">Apa itu <span class="text-yellow-500">SISFO FEB?</span></h1>
                <p class="text-gray-500">Sisfo FEB merupakan sistem yang dirancang dan dipergunakan untuk <strong> Pendataan, Pengecekan, pengajuan, dan monitoring </strong>secara berkala kegiatan / aktivitas akademik, persuratan, kelengkapan dokumen, laporan, dan lain-lain terkait kegiatan yang ada di Fakultas Ekonomi dan Bisnis secara real time.</p>
            </div>
            <div data-aos="fade-up"
                class="flex flex-col md:flex-row justify-center space-y-5 md:space-y-0 md:space-x-6 lg:space-x-10 mt-7">
                <div class="relative md:w-5/12">
                    <img class="rounded-2xl" src="assets/img/Rectangle 19.png" alt="">
                    <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">Untuk Pengajar / Dosen</h1>
                            <a href="/dosen">
							<button
                                class="rounded-full text-white border text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">Login Dosen</button></a>
                        </div>
                    </div>
                </div>
                <div class="relative md:w-5/12">
                    <img class="rounded-2xl" src="assets/img/Rectangle 21.png" alt="">
                    <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">Untuk Mahasiswa
                            </h1>
							<a href="/mahasiswa">
                            <button
                                class="rounded-full text-white text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out"
                                style="background: rgba(35, 189, 238, 0.9)">Login Mahasiswa
							</button>
							</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest News and Resources -->
        <div data-aos="zoom-in" class="mt-16 text-center">
            <h1 class="text-darken text-2xl font-semibold">Informasi dan Pengumuman Terbaru</h1>
            <p class="text-gray-500 my-5">Cek pada Website dan Media Sosial Fakultas Untuk Update Terbaru</p>
        </div>
        {{-- <div data-aos="zoom-in-up" class="my-14 flex flex-col lg:flex-row lg:space-x-20">
            <div class="lg:w-6/12">
                <img class="w-full mb-6" src="assets/img/laptop-news.png">
                <span class="bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full">NEWS</span>
                <h1 class="text-gray-800 font-semibold my-3 text-xl">Class adds $30 million to its balance sheet for a
                    Zoom-friendly edtech solution</h1>
                <p class="text-gray-500 mb-3">Class, launched less than a year ago by Blackboard co-founder Michael
                    Chasen, integrates exclusively...</p>
                <a href="" class="underline">Read more</a>
            </div>
            <div class="lg:w-7/12 flex flex-col justify-between mt-12 space-y-5 lg:space-y-0 lg:mt-0">
                <div class="flex space-x-5">
                    <div class="w-4/12">
                        <div class="relative">
                            <img class="rounded-xl w-full" src="assets/img/children-laptop.png">
                            <span
                                class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">PRESS
                                RELEASE</span>
                        </div>
                    </div>
                    <div class="w-8/12">
                        <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Class Technologies Inc. Closes $30
                            Million Series A Financing to Meet High Demand</h1>
                        <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">Class Technologies Inc., the company
                            that created Class,...</p>
                    </div>
                </div>
                <div class="flex space-x-5">
                    <div class="w-4/12">
                        <div class="relative">
                            <img class="rounded-xl w-full" src="assets/img/girl-laptop.png">
                            <span
                                class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">NEWS</span>
                        </div>
                    </div>
                    <div class="w-8/12">
                        <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Zoom’s earliest investors are betting
                            millions on a better Zoom for schools</h1>
                        <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">Zoom was never created to be a consumer
                            product. Nonetheless, the...</p>
                    </div>
                </div>
                <div class="flex space-x-5">
                    <div class="w-4/12">
                        <div class="relative">
                            <img class="rounded-xl w-full" src="assets/img/cat-laptop.png">
                            <span
                                class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">NEWS</span>
                        </div>
                    </div>
                    <div class="w-8/12">
                        <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Former Blackboard CEO Raises $16M to
                            Bring LMS Features to Zoom Classrooms</h1>
                        <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">This year, investors have reaped big
                            financial returns from betting on Zoom...</p>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
    <!-- .container -->

    <footer class="mt-32" style="background-color: rgba(37, 38, 65, 1);">
        <div class="max-w-lg mx-auto">
            <div class="flex py-12 justify-center text-white items-center px-20 sm:px-36">
                <div class="relative">
                    <h1 class="font-bold text-xl pr-5 relative z-50">SISFO</h1>
                    <svg class="w-11 h-11 absolute -top-2 -left-3 z-40" viewBox="0 0 79 79" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M35.9645 2.94975C37.9171 0.997129 41.0829 0.997127 43.0355 2.94975L76.0502 35.9645C78.0029 37.9171 78.0029 41.0829 76.0503 43.0355L43.0355 76.0502C41.0829 78.0029 37.9171 78.0029 35.9645 76.0503L2.94975 43.0355C0.997129 41.0829 0.997127 37.9171 2.94975 35.9645L35.9645 2.94975Z"
                            stroke="#26C1F2" stroke-width="2" />
                    </svg>
                </div>
                <span class="border-l border-gray-500 text-sm pl-5 py-2 font-semibold">FEB</span>
            </div>
            <div class="flex items-center text-gray-400 text-sm justify-center">
                <a href="https://siakad.upb.ac.id/" class="pr-3">Siakad</a>
				<a href="https://upb.ac.id/" class="border-l border-gray-400 px-3">Web UPB</a>
				<a href="https://feb.upb.ac.id/" class="border-l border-gray-400 px-3">Web FEB</a>
				<a href="https://api.whatsapp.com/send?phone=6289693556310&text=" class="border-l border-gray-400 px-3">Support</a>
                {{-- <a href="" class="border-l border-gray-400 px-3">Privacy</a> --}}
                <a href="" class="border-l border-gray-400 pl-3">Terms & Conditions</a>
            </div>
            <div class="text-center text-white">
                <p class="my-3 text-gray-400 text-sm">&copy; 2018 - 
				<script type="text/javascript">

                        document.write(new Date().getFullYear());

                </script> <strong> Pusdatin UPB </strong> | Fakultas Ekonomi dan Bisnis. </p>

                <div class="py-3 tracking-wide">
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS init -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
</body>

</html>
