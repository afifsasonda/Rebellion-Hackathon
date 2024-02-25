<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ ('Profile') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white p-2 rounded-md">{{ ('add') }}</a>
        </div>
    </x-slot>


    <div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 bg-white" id="panel">
        <nav class="flex h-28 mb-5 lg:h-[96px]" id="navbarTop" navbar-scroll="true">
            <div class="sm:flex items-stretch justify-between grow lg:mb-0 mb-5 py-5 px-10">
                <div class="flex flex-col flex-wrap justify-center mb-5 mr-3 lg:mb-0">
                    <span class="my-0 flex text-dark font-semibold text-[1.35rem]/[1.2] flex-col justify-center">Courses</span>
                    <span class="pt-1 text-secondary-dark text-[0.95rem] font-medium">Check all available courses</span>
                </div>
                <div class="flex items-center lg:shrink-0 lg:flex-nowrap">
                    <div class="relative flex items-center lg:ml-4 sm:mr-0 mr-2">
                        <span class="absolute ml-4 leading-none -translate-y-1/2 top-1/2 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                            </svg>
                        </span>
                        <input class="block w-full py-3 pl-12 pr-4 text-base font-medium leading-normal bg-white border border-solid outline-none appearance-none placeholder:text-secondary-dark peer text-stone-500 border-stone-200 bg-clip-padding rounded-2xl" placeholder="Search..." type="text">
                        <span onclick="(() => { this.previousElementSibling.value=''})()" class="absolute right-0 left-auto mr-4 leading-none -translate-y-1/2 peer-placeholder-shown:hidden top-1/2 hover:text-primary text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="relative lg:hidden flex items-center sm:ml-2 ml-auto">
                        <a href="javascript:void(0)" class="flex items-center justify-center w-12 h-12 text-base font-medium leading-normal text-center align-middle transition-colors duration-150 ease-in-out bg-transparent border border-solid shadow-none cursor-pointer rounded-2xl text-stone-500 border-stone-200 hover:text-primary active:text-primary focus:text-primary" onclick="(function(){document.querySelector('.group\\/sidebar').classList.toggle('-translate-x-full');})();">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="relative flex items-center ml-2 lg:ml-4">
                        <a href="javascript:void(0)" class="flex items-center justify-center w-12 h-12 text-base font-medium leading-normal text-center align-middle transition-colors duration-150 ease-in-out bg-transparent border border-solid shadow-none cursor-pointer rounded-2xl text-stone-500 border-stone-200 hover:text-primary active:text-primary focus:text-primary ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="relative flex items-center ml-2 lg:ml-4">
                        <a href="javascript:void(0)" class="flex items-center justify-center w-12 h-12 text-base font-medium leading-normal text-center align-middle transition-colors duration-150 ease-in-out bg-transparent border border-solid shadow-none cursor-pointer rounded-2xl text-stone-500 border-stone-200 hover:text-primary active:text-primary focus:text-primary ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5"></path>
                            </svg>
                            <div class="absolute justify-center w-5 h-5 text-base font-semibold leading-normal text-center text-white text-sm align-middle transition-colors duration-150 ease-in-out shadow-none cursor-pointer rounded-xl bg-primary hover:bg-primary-dark active:bg-primary-dark focus:bg-primary-dark top-0 right-0 -me-1 -mt-2">
                                <span class="text-sm">6</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="w-full px-10 py-6 mx-auto loopple-min-height-78vh text-slate-500">
            <div class="flex flex-wrap -mx-3 mb-5 removable">
                <div class="w-full max-w-full px-3 mb-6 lg:w-8/12 sm:flex-none xl:mb-0">
                    <div class="relative flex flex-col break-words min-w-0 bg-clip-border rounded-xl bg-neutral-900 mb-5">
                        <!-- card body  -->
                        <div class="flex-auto block py-8 px-9">
                            <div class="m-0 z-20 relative">
                                <div class="relative z-20 text-3xl font-semibold text-white w-3/4">
                                    Hello Michael!
                                </div>
                                <p class="mb-7 text-white">We are happy to see you again.</p>
                                <div class="flex flex-col gap-2 xl:gap-4 sm:flex-row">
                                    <a href="javascript:void(0)" class="shrink-0 inline-block text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-[.95rem] transition-colors duration-150 ease-in-out text-dark bg-white border-white shadow-none [border:_0]  px-5 py-3.5 hover:bg-white/90 active:bg-white focus:bg-white
                ">My Courses</a>
                                    <a href="javascript:void(0)" class="inline-block shrink-0 text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-[.95rem] transition-colors duration-150 ease-in-out text-white bg-white/[.15] shadow-none [border:_0]  px-5 py-3.5 hover:bg-white/25 active:bg-white/25 focus:bg-white/25
                ">What's new</a>
                                </div>
                            </div>
                            <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/bonus.png" class="bottom-0 absolute mr-3 end-0 h-[200px] opacity-40 z-10" alt="">
                        </div>
                    </div>
                    <h3 class="font-bold mb-4 text-2xl">Courses</h3>
                    <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30 mb-5">
                        <!-- card header -->
                        <div class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                            <h3 class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">
                                <span class="mr-3 font-semibold text-dark">All Courses</span>
                                <span class="mt-1 font-medium text-secondary-dark text-lg/normal">Check all courses available</span>
                            </h3>
                            <div class="relative flex flex-wrap items-center my-2">
                                <a href="javascript:void(0)" class="inline-block text-[.925rem] font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-150 ease-in-out text-light-inverse bg-light-dark border-light shadow-none border-0 py-2 px-5 hover:bg-secondary active:bg-light focus:bg-light">See other courses</a>
                            </div>
                        </div>
                        <!-- end card header -->
                        <!-- card body  -->
                        <div class="flex-auto block py-8 pt-6 px-9">
                            <div class="overflow-x-auto">
                                <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                    <thead class="align-bottom">
                                        <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                            <th class="pb-3 text-start min-w-[175px]">COURSE</th>
                                            <th class="pb-3 text-end min-w-[100px]">OWNER</th>
                                            <th class="pb-3 text-end min-w-[100px]">DURATION</th>
                                            <th class="pb-3 pr-12 text-end min-w-[175px]">STATUS</th>
                                            <th class="pb-3 pr-12 text-end min-w-[100px]">DEADLINE</th>
                                            <th class="pb-3 text-end min-w-[50px]">DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b border-dashed last:border-b-0">
                                            <td class="p-3 pl-0">
                                                <div class="flex items-center">
                                                    <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                        <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-49-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                                    </div>
                                                    <div class="flex flex-col justify-start">
                                                        <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> Social Media API </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <span class="font-semibold text-light-inverse text-md/normal">Olivia Cambell</span>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>1h 6min</span>
                                            </td>
                                            <td class="p-3 pr-12 text-end">
                                                <span class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-primary bg-primary-light rounded-lg"> In Progress </span>
                                            </td>
                                            <td class="pr-0 text-start">
                                                <span class="font-semibold text-light-inverse text-md/normal">2023-08-23</span>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                    <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-dashed last:border-b-0">
                                            <td class="p-3 pl-0">
                                                <div class="flex items-center">
                                                    <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                        <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-40-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                                    </div>
                                                    <div class="flex flex-col justify-start">
                                                        <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> Geolocation App </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <span class="font-semibold text-light-inverse text-md/normal">Luca Micloe</span>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none rounded-lg text-success bg-success-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>55min</span>
                                            </td>
                                            <td class="p-3 pr-12 text-end">
                                                <span class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-light-inverse rounded-lg text-success bg-success-light">Done
                                                </span>
                                            </td>
                                            <td class="pr-0 text-start">
                                                <span class="font-semibold text-light-inverse text-md/normal">2024-04-11</span>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                    <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-dashed last:border-b-0">
                                            <td class="p-3 pl-0">
                                                <div class="flex items-center">
                                                    <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                        <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-39-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                                    </div>
                                                    <div class="flex flex-col justify-start">
                                                        <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> iOS Login <span class="text-sm">(Morra)</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <span class="font-semibold text-light-inverse text-md/normal">Bianca Winson</span>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>2h 18min</span>
                                            </td>
                                            <td class="p-3 pr-12 text-end">
                                                <span class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-primary bg-primary-light rounded-lg"> In Progress </span>
                                            </td>
                                            <td class="pr-0 text-start">
                                                <span class="font-semibold text-light-inverse text-md/normal">2024-02-10</span>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                    <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-dashed last:border-b-0">
                                            <td class="p-3 pl-0">
                                                <div class="flex items-center">
                                                    <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                        <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-47-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                                    </div>
                                                    <div class="flex flex-col justify-start">
                                                        <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> Axios Menu </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <span class="font-semibold text-light-inverse text-md/normal">Roberto Alliton</span>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>45min</span>
                                            </td>
                                            <td class="p-3 pr-12 text-end">
                                                <span class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-success bg-success-light rounded-lg"> Done </span>
                                            </td>
                                            <td class="pr-0 text-start">
                                                <span class="font-semibold text-light-inverse text-md/normal">2023-05-31</span>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                    <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-dashed last:border-b-0">
                                            <td class="p-3 pl-0">
                                                <div class="flex items-center">
                                                    <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                        <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-48-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                                    </div>
                                                    <div class="flex flex-col justify-start">
                                                        <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> Resto Aperto </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <span class="font-semibold text-light-inverse text-md/normal">Michael Kenny</span>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none rounded-lg text-success bg-success-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>1h 12min</span>
                                            </td>
                                            <td class="p-3 pr-12 text-end">
                                                <span class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-warning bg-warning-light rounded-lg"> Postponed </span>
                                            </td>
                                            <td class="pr-0 text-start">
                                                <span class="font-semibold text-light-inverse text-md/normal">2023-05-15</span>
                                            </td>
                                            <td class="p-3 pr-0 text-end">
                                                <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                    <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mb-6 lg:w-4/12 sm:flex-none xl:mb-0">
                    <div class="relative flex flex-col min-w-0 break-words bg-gray-100 border-0 bg-clip-border rounded-2xl mb-5">
                        <!-- card header -->
                        <div class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                            <div class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/normal text-dark">
                                <!--begin::Amount-->
                                <span class="text-dark text-5xl/none font-semibold mr-2 tracking-[-0.115rem]">11</span>
                                <!--end::Amount-->

                                <!--begin::Subtitle-->
                                <span class="pt-1 font-medium text-dark text-lg/normal">Courses Completed</span>
                                <!--end::Subtitle-->
                            </div>
                        </div>
                        <!-- card body  -->
                        <div class="flex items-end flex-auto py-8 pt-0 px-9 ">
                            <!--begin::Progress-->
                            <div class="flex flex-col items-center w-full mt-3">
                                <div class="flex justify-between w-full mt-auto mb-2 font-semibold text-dark text-lg/normal">
                                    <span class="mr-4 text-dark">15 Pending</span>
                                    <span>85%</span>
                                </div>

                                <div class="mx-3 rounded-2xl h-[8px] w-full bg-white">
                                    <div class="rounded-2xl bg-dark w-[85%] h-[8px]"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!-- end card body  -->
                    </div>
                    <!-- end card body  -->
                    <h3 class="font-bold mb-5 text-2xl">Activity</h3>
                    <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30 mb-5">


                        <!-- card body  -->
                        <div class="flex-auto block py-8 pt-6 px-9">
                            <div class="relative before:content-[''] before:absolute before:left-[51px] before:w-[3px] before:inset-y-0 before:bg-light-dark">

                                <div class="relative flex items-start mb-7">

                                    <div class="block relative shrink-0 w-[50px] text-secondary-inverse font-semibold text-md/normal before:absolute before:content-[''] before:left-[51px] before:w-[3px] before:inset-y-0 before:bg-light-dark">09:15</div>

                                    <div class="shrink-0 bg-white w-4 h-4 rounded-full flex items-center justify-center relative z-10 mt-px -ml-2 p-[3px] border-[6px] border-solid border-white">
                                        <i class="fa fa-circle text-dark text-md/normal"></i>
                                    </div>

                                    <div class="text-stone-500 font-medium pl-3 text-[0.95rem]">Completed API Course</div>
                                </div>

                                <div class="relative flex items-center mb-7">
                                    <!--begin::Label-->
                                    <div class="block relative shrink-0 w-[50px] text-secondary-inverse font-semibold text-md/normal before:absolute before:content-[''] before:left-[51px] before:w-[3px] before:inset-y-0 before:bg-light-dark">12:30</div>
                                    <!--end::Label-->

                                    <!--begin::Badge-->
                                    <div class="shrink-0 bg-white w-4 h-4 rounded-full flex items-center justify-center relative z-10 mt-px -ml-2 p-[3px] border-[6px] border-solid border-white">
                                        <i class="fa fa-circle text-danger text-md/normal"></i>
                                    </div>
                                    <!--end::Badge-->

                                    <!--begin::Content-->
                                    <div class="flex items-center">
                                        <span class="px-3 font-semibold text-warning">Lunch break</span>
                                    </div>
                                    <!--end::Content-->
                                </div>

                                <div class="relative flex items-center mb-7">
                                    <!--begin::Label-->
                                    <div class="block relative shrink-0 w-[50px] text-secondary-inverse font-semibold text-md/normal before:absolute before:content-[''] before:left-[51px] before:w-[3px] before:inset-y-0 before:bg-light-dark">15:45</div>
                                    <!--end::Label-->

                                    <!--begin::Badge-->
                                    <div class="shrink-0 bg-white w-4 h-4 rounded-full flex items-center justify-center relative z-10 mt-px -ml-2 p-[3px] border-[6px] border-solid border-white">
                                        <i class="fa fa-circle text-info text-md/normal"></i>
                                    </div>
                                    <!--end::Badge-->

                                    <!--begin::Content-->
                                    <div class="px-3 font-semibold text-secondary-inverse grow">
                                        Preview Course
                                        <a class="text-primary" href="javascript:void(0)">New XYZ</a>
                                    </div>
                                    <!--end::Content-->
                                </div>

                                <div class="relative flex items-start mb-7">

                                    <div class="block relative shrink-0 w-[50px] text-secondary-inverse font-semibold text-md/normal before:absolute before:content-[''] before:left-[51px] before:w-[3px] before:inset-y-0 before:bg-light-dark">17:30</div>

                                    <div class="shrink-0 bg-white w-4 h-4 rounded-full flex items-center justify-center relative z-10 mt-px -ml-2 p-[3px] border-[6px] border-solid border-white">
                                        <i class="fa fa-circle text-primary text-md/normal"></i>
                                    </div>

                                    <div class="text-stone-500 font-medium pl-3 text-[0.95rem]">Start Course 3</div>
                                </div>

                                <div class="relative flex items-center mb-7">
                                    <!--begin::Label-->
                                    <div class="block relative shrink-0 w-[50px] text-secondary-inverse font-semibold text-md/normal before:absolute before:content-[''] before:left-[51px] before:w-[3px] before:inset-y-0 before:bg-light-dark">20:15</div>
                                    <!--end::Label-->

                                    <!--begin::Badge-->
                                    <div class="shrink-0 bg-white w-4 h-4 rounded-full flex items-center justify-center relative z-10 mt-px -ml-2 p-[3px] border-[6px] border-solid border-white">
                                        <i class="fa fa-circle text-dark text-md/normal"></i>
                                    </div>
                                    <!--end::Badge-->

                                    <!--begin::Content-->
                                    <div class="px-3 font-medium text-secondary-inverse grow">
                                        Feedback for
                                        <a class="text-primary" href="javascript:void(0)">Course ABC</a>
                                    </div>
                                    <!--end::Content-->
                                </div>

                                <div class="relative flex items-start mb-7">

                                    <div class="block relative shrink-0 w-[50px] text-secondary-inverse font-semibold text-md/normal before:absolute before:content-[''] before:left-[51px] before:w-[3px] before:inset-y-0 before:bg-light-dark">22:00</div>

                                    <div class="shrink-0 bg-white w-4 h-4 rounded-full flex items-center justify-center relative z-10 mt-px -ml-2 p-[3px] border-[6px] border-solid border-white">
                                        <i class="fa fa-circle text-info text-md/normal"></i>
                                    </div>

                                    <div class="text-stone-500 font-medium pl-3 text-[0.95rem]">Plan next week's courses</div>
                                </div>

                            </div>

                        </div>
                        <!-- end card body  -->
                    </div>
                    <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                        <!-- card header -->
                        <div class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                            <div class="flex flex-col m-2 ml-0 ">
                                <!--begin::Amount-->
                                <span class="text-5xl/none tracking-[-0.115rem] font-semibold text-dark mr-2">529</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="pt-1 font-medium text-secondary-dark text-lg/normal">Atendees</span>
                                <!--end::Subtitle-->
                            </div>
                        </div>
                        <!-- card body  -->
                        <div class="flex flex-col justify-between flex-auto py-8 px-9">
                            <span class="block mb-2 font-bold text-lg/normal text-secondary-inverse">Top Performers</span>
                            <div class="flex flex-wrap items-center ml-[10px]">
                                <!--begin::User-->
                                <div class="group inline-block rounded-full relative z-0 hover:z-10 -ml-[10px] transition-all duration-300 ease-in-out cursor-pointer shrink-0" data-bs-toggle="tooltip" aria-label="Emma Smith" data-kt-initialized="1" data-original-title="" title="">
                                    <img alt="Pic" class="w-[35px] h-[35px] rounded-full inline-block shrink-0 border-2 border-white/50" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/avatars/avatar1.jpg">
                                    <span class="absolute z-10 self-center hidden px-4 py-3 mb-2 text-sm text-center transform -translate-x-1/2 bg-white shadow-sm whitespace-nowrap rounded-2xl left-1/2 bottom-full text-dark group-hover:block"> Alex Kenzie </span>
                                </div>
                                <!--begin::User-->
                                <div class="group inline-block rounded-full relative z-0 hover:z-10 -ml-[10px] transition-all duration-300 ease-in-out cursor-pointer shrink-0" data-bs-toggle="tooltip" aria-label="Rudy Stone" data-kt-initialized="1" data-original-title="" title="">
                                    <img alt="Pic" class="w-[35px] h-[35px] rounded-full inline-block shrink-0 border-2 border-white/50" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/avatars/avatar2.jpg">
                                    <span class="absolute z-10 self-center hidden px-4 py-3 mb-2 text-sm text-center transform -translate-x-1/2 bg-white shadow-sm whitespace-nowrap rounded-2xl left-1/2 bottom-full text-dark group-hover:block"> Roberta Mikolo </span>
                                </div>
                                <div class="group inline-block rounded-full relative z-0 hover:z-10 -ml-[10px] transition-all duration-300 ease-in-out cursor-pointer shrink-0" data-bs-toggle="tooltip" data-kt-initialized="1" data-original-title="" title="">
                                    <span class="relative flex items-center justify-center text-sm font-semibold bg-info text-white border-2 border-white/50 w-[35px] h-[35px] rounded-full shrink-0">S</span>
                                    <span class="absolute z-10 self-center hidden px-4 py-3 mb-2 text-sm text-center transform -translate-x-1/2 bg-white shadow-sm whitespace-nowrap rounded-2xl left-1/2 bottom-full text-dark group-hover:block"> Sima Lucas </span>
                                </div>
                                <div class="group inline-block rounded-full relative z-0 hover:z-10 -ml-[10px] transition-all duration-300 ease-in-out cursor-pointer shrink-0" data-bs-toggle="tooltip" aria-label="Rudy Stone" data-kt-initialized="1" data-original-title="" title="">
                                    <img alt="Pic" class="w-[35px] h-[35px] rounded-full inline-block shrink-0 border-2 border-white/50" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/avatars/avatar3.jpg">
                                    <span class="absolute z-10 self-center hidden px-4 py-3 mb-2 text-sm text-center transform -translate-x-1/2 bg-white shadow-sm whitespace-nowrap rounded-2xl left-1/2 bottom-full text-dark group-hover:block"> Bianca Ornos </span>
                                </div>
                                <!--begin::User-->
                                <!--begin::User-->
                                <div class="group inline-block rounded-full relative z-0 hover:z-10 -ml-[10px] transition-all duration-300 ease-in-out cursor-pointer shrink-0" data-bs-toggle="tooltip" data-kt-initialized="1" data-original-title="" title="">
                                    <span class="relative flex items-center justify-center text-sm font-semibold bg-dark text-secondary border-2 border-white/50 w-[35px] h-[35px] rounded-full shrink-0">+9</span>
                                    <span class="absolute z-10 self-center hidden px-4 py-3 mb-2 text-sm text-center transform -translate-x-1/2 bg-white shadow-sm whitespace-nowrap rounded-2xl left-1/2 bottom-full text-dark group-hover:block"> +9 others </span>
                                </div>
                                <!--begin::User-->
                            </div>
                        </div>
                        <!-- end card body  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="flex items-stretch">
            <div class="px-10 flex w-full flex-col md:flex-row py-3 items-center justify-center md:justify-between">
                <div class="order-2 text-dark md:order-1">
                    <span class="mr-1 font-medium text-muted">
                        2023
                    </span>
                    <a href="javascript:;" target="_blank" class="transition-colors duration-200 ease-in-out text-secondary-inverse hover:text-primary">Loopple</a>
                </div>
                <ul class="flex order-1 p-0 m-0 font-medium">
                    <li class="block py-[.15rem]">
                        <a href="javascript:;" target="_blank" class="flex items-center px-2 cursor-pointer text-light-inverse flex-[0_0_100%] py-[.65rem] outline-none">Home</a>
                    </li>
                    <li class="block py-[.15rem]">
                        <a href="javascript:;" target="_blank" class="flex items-center px-2 cursor-pointer text-light-inverse flex-[0_0_100%] py-[.65rem] outline-none">Contact Us</a>
                    </li>
                    <li class="block py-[.15rem]">
                        <a href="javascript:;" target="_blank" class="flex items-center px-2 cursor-pointer text-light-inverse flex-[0_0_100%] py-[.65rem] outline-none">Terms &amp; Conditions</a>
                    </li>
                    <li class="block py-[.15rem]">
                        <a href="javascript:;" target="_blank" class="flex items-center px-2 cursor-pointer text-light-inverse flex-[0_0_100%] py-[.65rem] outline-none">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>



</x-app-layout>
