<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProConnect</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/css/leaflet.css">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loopple/loopple.css') }}">
</head>
<body>
    <div class="container flex flex-col mx-auto">
        <div class="relative flex flex-wrap items-center justify-between w-full bg-white group py-7 shrink-0">
            <div>
                <img class="h-8" src="{{ asset('image/logounp.png') }}">
            </div>
            {{-- <div class="items-center justify-between hidden gap-12 text-black md:flex">
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="javascript:void(0)">Kemahasiswa</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="javascript:void(0)">Publikasi</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="javascript:void(0)">Pengabdian</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="javascript:void(0)">Layanan</a>
                <a class="text-sm font-normal text-dark-grey-700 hover:text-dark-grey-900" href="javascript:void(0)">About</a>
            </div> --}}

            {{-- baru --}}
            @if (Route::has('login'))
            <div class="items-center hidden gap-8 md:flex">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"><button class="flex items-center text-sm font-normal text-gray-800 hover:text-gray-900 transition duration-300">Log In</button></a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"><button class="flex items-center px-4 py-2 text-sm font-bold rounded-xl bg-black text-white hover:bg-purple-blue-600 hover:text-white transition duration-300">Register</button></a>
                    @endif
                @endauth
                </div>
            @endif

        </div>
        <div class="grid w-full grid-cols-1 my-auto mt-12 mb-8 md:grid-cols-2 xl:gap-10 md:gap-5">
            <div class="flex flex-col justify-start content-center col-span-1 text-center lg:text-start">
                <div class="flex items-center justify-center mb-4 lg:justify-normal">
                    <img class="h-8" src="{{ asset('image/logo unp.png') }}" alt="logo">
                    <h4 class="ml-2 text-sm font-bold tracking-widest text-amber-500 uppercase">ProConnect</h4>
                </div>
                <h1 class="mb-8 text-4x1 font-extrabold leading-tight lg:text-6xl text-dark-grey-900">ProConnect FT-Informatika.</h1>
                <p class="mb-6 text-base font-normal leading-7 lg:w-3/4 text-grey-900">
                    Sebuah platform yang dirancang untuk membantu para dosen dan mahasiswa maupun antar sesama mahasiswa dalam
                    berinteraksi, berjejaring, dan berkolaborasi satu sama lain dalam konteks Penelitian, Pembinaan Wirausaha, pengabdian Masyarakat,
                    maupun Profesional Kerjasama dalam lingkup Prodi Informatika.
                </p>
                
                <div class="flex flex-col items-center gap-4 lg:flex-row">
                    <button class="flex items-center py-4 text-sm font-bold text-white px-7 bg-black hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 transition duration-300 rounded-xl">Get started now</button>
                    <button class="flex items-center py-4 text-sm font-medium px-7 text-dark-grey-700 hover:text-dark-grey-900 transition duration-300 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd"></path>
                        </svg>
                        Book a free call
                    </button>
                </div>
                {{-- @auth
                <div class="flex flex-col items-center gap-4 lg:flex-row">
                    <a href="{{ url('/dashboard') }}"><button class="flex items-center py-4 text-sm font-bold text-white px-7 bg-purple-blue-500 hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 transition duration-300 rounded-xl">Dashboard</button></a>
                </div>
                @endauth --}}


            </div>
            <div class="items-center justify-end hidden col-span-1 md:flex">
                <img class="w-full rounded-xl" src="{{ asset('image/Collab.jpg') }}" alt="header image">
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-center h-full">
            <div class="mb-5 grid grid-cols-1 gap-10 mt-20 lg:grid-cols-3 md:grid-cols-2">
                <div class="flex flex-col items-center col-span-1 gap-6 px-10 py-5 bg-white shadow-main rounded-3xl">
                    <div>
                        <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M15.8766 12.71C16.857 11.9387 17.5726 10.8809 17.9239 9.68394C18.2751 8.48697 18.2445 7.21027 17.8364 6.03147C17.4283 4.85267 16.6629 3.83039 15.6467 3.10686C14.6305 2.38332 13.4141 1.99451 12.1666 1.99451C10.9192 1.99451 9.70274 2.38332 8.68655 3.10686C7.67037 3.83039 6.90497 4.85267 6.49684 6.03147C6.0887 7.21027 6.05814 8.48697 6.40938 9.68394C6.76063 10.8809 7.47623 11.9387 8.45662 12.71C6.7767 13.383 5.31091 14.4994 4.21552 15.9399C3.12012 17.3805 2.43619 19.0913 2.23662 20.89C2.22218 21.0213 2.23374 21.1542 2.27065 21.2811C2.30756 21.4079 2.36909 21.5263 2.45173 21.6293C2.61864 21.8375 2.86141 21.9708 3.12662 22C3.39184 22.0292 3.65778 21.9518 3.86595 21.7849C4.07411 21.618 4.20745 21.3752 4.23662 21.11C4.45621 19.1552 5.38831 17.3498 6.85484 16.0388C8.32137 14.7278 10.2195 14.003 12.1866 14.003C14.1537 14.003 16.0519 14.7278 17.5184 16.0388C18.9849 17.3498 19.917 19.1552 20.1366 21.11C20.1638 21.3557 20.2811 21.5827 20.4657 21.747C20.6504 21.9114 20.8894 22.0015 21.1366 22H21.2466C21.5088 21.9698 21.7483 21.8373 21.9132 21.6313C22.078 21.4252 22.1547 21.1624 22.1266 20.9C21.9261 19.0962 21.2385 17.381 20.1375 15.9382C19.0364 14.4954 17.5635 13.3795 15.8766 12.71ZM12.1666 12C11.3755 12 10.6021 11.7654 9.94434 11.3259C9.28655 10.8864 8.77385 10.2616 8.4711 9.53074C8.16835 8.79983 8.08914 7.99557 8.24348 7.21964C8.39782 6.44372 8.77879 5.73099 9.3382 5.17158C9.89761 4.61217 10.6103 4.2312 11.3863 4.07686C12.1622 3.92252 12.9665 4.00173 13.6974 4.30448C14.4283 4.60724 15.053 5.11993 15.4925 5.77772C15.932 6.43552 16.1666 7.20888 16.1666 8C16.1666 9.06087 15.7452 10.0783 14.9951 10.8284C14.2449 11.5786 13.2275 12 12.1666 12Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 px-2 text-center">
                        <h4 class="text-2xl font-extrabold text-dark-grey-900">Kemahasiswaan</h4>
                        <p class="font-medium text-grey-700">Mahasiswa mengembangkan keterampilan melalui pelatihan dan sertifikasi, aktif dalam himpunan, meraih prestasi, dan tetap terhubung sebagai alumni.</p>
                    </div>
                </div>
                <div class="flex flex-col items-center col-span-1 gap-6 px-10 py-5 bg-white shadow-main rounded-3xl">
                    <div>
                        <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M3.28996 14.78L3.19996 14.69C2.80996 14.3 2.80996 13.67 3.19996 13.28L9.28996 7.18C9.67996 6.79 10.31 6.79 10.7 7.18L13.99 10.47L20.38 3.29C20.76 2.86 21.43 2.85 21.83 3.25C22.2 3.63 22.22 4.23 21.87 4.62L14.7 12.69C14.32 13.12 13.66 13.14 13.25 12.73L9.99996 9.48L4.69996 14.78C4.31996 15.17 3.67996 15.17 3.28996 14.78ZM4.69996 20.78L9.99996 15.48L13.25 18.73C13.66 19.14 14.32 19.12 14.7 18.69L21.87 10.62C22.22 10.23 22.2 9.63 21.83 9.25C21.43 8.85 20.76 8.86 20.38 9.29L13.99 16.47L10.7 13.18C10.31 12.79 9.67996 12.79 9.28996 13.18L3.19996 19.28C2.80996 19.67 2.80996 20.3 3.19996 20.69L3.28996 20.78C3.67996 21.17 4.31996 21.17 4.69996 20.78Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 px-2 text-center">
                        <h4 class="text-2xl font-extrabold text-dark-grey-900">Publikasi</h4>
                        <p class="font-medium text-grey-700">Publikasi Informatika diwujudkan melalui kerjasama antara penelitian dan pengabdian, serta melibatkan kompetisi untuk mendorong inovasi dan prestasi dalam bidang tersebut.</p>
                    </div>
                </div>
                <div class="flex flex-col items-center col-span-1 gap-6 px-10 py-5 bg-white shadow-main rounded-3xl">
                    <div>
                        <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M10.5 13H3.49998C3.23477 13 2.98041 13.1054 2.79288 13.2929C2.60534 13.4804 2.49998 13.7348 2.49998 14V21C2.49998 21.2652 2.60534 21.5196 2.79288 21.7071C2.98041 21.8946 3.23477 22 3.49998 22H10.5C10.7652 22 11.0196 21.8946 11.2071 21.7071C11.3946 21.5196 11.5 21.2652 11.5 21V14C11.5 13.7348 11.3946 13.4804 11.2071 13.2929C11.0196 13.1054 10.7652 13 10.5 13ZM9.49998 20H4.49998V15H9.49998V20ZM21.5 2H14.5C14.2348 2 13.9804 2.10536 13.7929 2.29289C13.6053 2.48043 13.5 2.73478 13.5 3V10C13.5 10.2652 13.6053 10.5196 13.7929 10.7071C13.9804 10.8946 14.2348 11 14.5 11H21.5C21.7652 11 22.0196 10.8946 22.2071 10.7071C22.3946 10.5196 22.5 10.2652 22.5 10V3C22.5 2.73478 22.3946 2.48043 22.2071 2.29289C22.0196 2.10536 21.7652 2 21.5 2ZM20.5 9H15.5V4H20.5V9ZM21.5 13H14.5C14.2348 13 13.9804 13.1054 13.7929 13.2929C13.6053 13.4804 13.5 13.7348 13.5 14V21C13.5 21.2652 13.6053 21.5196 13.7929 21.7071C13.9804 21.8946 14.2348 22 14.5 22H21.5C21.7652 22 22.0196 21.8946 22.2071 21.7071C22.3946 21.5196 22.5 21.2652 22.5 21V14C22.5 13.7348 22.3946 13.4804 22.2071 13.2929C22.0196 13.1054 21.7652 13 21.5 13ZM20.5 20H15.5V15H20.5V20ZM10.5 2H3.49998C3.23477 2 2.98041 2.10536 2.79288 2.29289C2.60534 2.48043 2.49998 2.73478 2.49998 3V10C2.49998 10.2652 2.60534 10.5196 2.79288 10.7071C2.98041 10.8946 3.23477 11 3.49998 11H10.5C10.7652 11 11.0196 10.8946 11.2071 10.7071C11.3946 10.5196 11.5 10.2652 11.5 10V3C11.5 2.73478 11.3946 2.48043 11.2071 2.29289C11.0196 2.10536 10.7652 2 10.5 2ZM9.49998 9H4.49998V4H9.49998V9Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 px-2 text-center">
                        <h4 class="text-2xl font-extrabold text-dark-grey-900">Layanan</h4>
                        <p class="font-medium text-grey-700">Meningkatkan sumber daya manusia dengan keterampilan yang relevan, memberikan bantuan kepada dosen dan staf dalam menemukan mahasiswa untuk kolaborasi penelitian dan pengabdian masyarakat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="container flex flex-col mx-auto">
            <div class="flex flex-col items-center w-full my-20">
                <span class="mb-8 flex items-center justify-center">
                    <img class="h-12" src="{{ asset('image/logo unp.png') }}" alt="logo">
                    <h4 class="ml-2 text-md font-bold tracking-widest text-amber-500 uppercase">ProConnect</h4>
                </span>
                <div class="flex items-center">
                    <p class="text-base font-normal leading-7 text-center text-grey-700">©
                        2024 Rebellion-Tech. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

