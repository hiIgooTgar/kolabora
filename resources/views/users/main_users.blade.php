@extends('template.layout')
@section('title_web', 'Find Jobs | KolaBora')
@section('content')
    <div class="w-full px-[5%] lg:px-[3%] py-9 overflow-hidden shadow-sm relative">
        <div class="blob-1 w-1/2 h-64 bg-primary blur-3xl rounded-full opacity-35 -z-10 absolute -top-20 right-0">
        </div>
        <div class="blob-2 w-1/2 h-64 bg-orange-500 blur-3xl rounded-full opacity-35 -z-10 absolute -bottom-20 left-0">
        </div>
        <h1 class="font-bold text-2xl mb-1">Temukan pekerjaan impianmu</h1>
        <p class="text-sm">Temukan pekerjaan impianmu, tempat passion dan keterampilan bersatu untuk karier yang bermakna!
        </p>
    </div>
    <div class="find-jobs flex flex-col lg:flex-row px-[5%] lg:px-[3%] gap-6 pt-11 pb-20">
        <div class="left-col flex-[1_1_100%] lg:flex-[1_1_25%] w-full">
            <div class="filter-col shadow border border-slate-200 rounded">
                <div class="flex justify-between items-center border-b border-slate-200 py-2 px-3">
                    <h1 class="font-semibold">Filter</h1>
                    <p class="text-sm text-red-800 rounded-full bg-red-200 py-[2px] px-2 cursor-pointer">clear all</p>
                </div>
                <div class="px-3 text-sm">
                    <div class="border-b border-slate-200 py-5">
                        <h4 class="mb-2">Date Post</h4>
                        <select class="border text-xs border-slate-200 rounded outline-none w-full p-2" name=""
                            id="">
                            <option value="">Anytime</option>
                        </select>
                    </div>
                    <div class="border-b border-slate-200 py-5">
                        <h4 class="mb-2">Job Type</h4>
                        <div class="grid grid-cols-2 gap-1">
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">Full Time</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">Part Time</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">Project Work</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">Freelance</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">Intership</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">Volunteer</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-slate-200 py-5">
                        <h4 class="mb-2">Range Salary</h4>
                        <div class="grid grid-cols-2 gap-1">
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">Less than 200$</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">$200 - 500$</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">$500 - $1000</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">More than $1000</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-slate-200 py-5">
                        <h4 class="mb-2">Experience</h4>
                        <div class="grid grid-cols-2 gap-1">
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">Less than a year</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">1 - 5 years</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">5 - 10 years</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="" id="">
                                <span class="text-xs">More than 10 year</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-col flex-[1_1_100%] lg:flex-[1_1_75%] w-full">
            <div class="content-find-jobs">
                <div
                    class="flex gap-3 md:gap-0 flex-col md:flex-row md:justify-between md:items-center mb-6 w-full shadow border border-slate-200 rounded p-4">
                    <div class="flex items-center gap-2">
                        <h1 class="text-xl font-bold">Recommended Jobs</h1>
                        <h4 class="bg-gradient-to-r from-sky_light to-primary py-1 px-2 rounded-full text-white">136</h4>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="border shadow text-sm border-slate-200 rounded outline-none w-full py-2 px-3"
                            type="search" placeholder="Searcing">
                        <div class="bg-gradient-to-r text-sm from-sky_light to-primary py-2 px-3 rounded text-white">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>
                <main class="content">
                    <div class="mb-8 flex flex-col gap-5">
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                                <div class="left">
                                    <div class="flex gap-2">
                                        <img class="rounded w-14 h-14 shadow"
                                            src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                        <div class="">
                                            <h3 class="text-md font-bold mb-2 md:mb-1">Product Designer</h3>
                                            <div class="block md:flex md:flex-row gap-y-2 gap-x-2 md:gap-x-3 w-full">
                                                <div
                                                    class="bg-blue-100 w-auto inline-block text-center text-primary px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-city"></i>
                                                        Tokopedia</p>
                                                </div>
                                                <div
                                                    class="bg-orange-100 w-auto inline-block text-center text-orange_normal px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-clock"></i>
                                                        Part Time</h>
                                                </div>
                                                <div
                                                    class="bg-green-100 w-auto inline-block text-center text-green-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-money-check"></i> $200 - $500</p>
                                                </div>
                                                <div
                                                    class="bg-yellow-100 w-auto inline-block text-center text-yellow-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-briefcase"></i> 2 year</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="flex items-center gap-2 text-slate-500 text-sm ">
                                        <i class="fa-regular fa-calendar"></i>
                                        <p>12 January 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="down mt-3">
                                <p class="text-sm text-justify text-slate-600">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Deserunt placeat iure, minus suscipit dolorem id exercitationem, dolor
                                    modi quos iusto quaerat consectetur voluptatem voluptatum accusantium nostrum, ea nihil
                                    voluptates. Accusamus hic adipisci obcaecati eius est fuga modi necessitatibus harum
                                    quasi
                                    voluptates, laborum cum eum soluta doloribus placeat omnis sint dolore ducimus esse
                                    earum
                                    vitae consequatur! Non harum maiores tempora perferendis.</p>
                                <p class="text-sm my-5 md:my-4 lg:my-3 text-slate-500 flex items-center gap-2"><i
                                        class="fa-solid fa-location-dot"></i>Semarang, Central Java
                                </p>
                                <div class="flex items-center gap-2">
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        Figma</p>
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        Designer
                                    </p>
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        UI
                                        Desgin
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                                <div class="left">
                                    <div class="flex gap-2">
                                        <img class="rounded w-14 h-14 shadow"
                                            src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                        <div class="">
                                            <h3 class="text-md font-bold mb-2 md:mb-1">Product Designer</h3>
                                            <div class="block md:flex md:flex-row gap-y-2 gap-x-2 md:gap-x-3 w-full">
                                                <div
                                                    class="bg-blue-100 w-auto inline-block text-center text-primary px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-city"></i>
                                                        Tokopedia</p>
                                                </div>
                                                <div
                                                    class="bg-orange-100 w-auto inline-block text-center text-orange_normal px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-clock"></i>
                                                        Part Time</h>
                                                </div>
                                                <div
                                                    class="bg-green-100 w-auto inline-block text-center text-green-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-money-check"></i> $200 - $500</p>
                                                </div>
                                                <div
                                                    class="bg-yellow-100 w-auto inline-block text-center text-yellow-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-briefcase"></i> 2 year</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="flex items-center gap-2 text-slate-500 text-sm ">
                                        <i class="fa-regular fa-calendar"></i>
                                        <p>12 January 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="down mt-3">
                                <p class="text-sm text-justify text-slate-600">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Deserunt placeat iure, minus suscipit dolorem id exercitationem, dolor
                                    modi quos iusto quaerat consectetur voluptatem voluptatum accusantium nostrum, ea nihil
                                    voluptates. Accusamus hic adipisci obcaecati eius est fuga modi necessitatibus harum
                                    quasi
                                    voluptates, laborum cum eum soluta doloribus placeat omnis sint dolore ducimus esse
                                    earum
                                    vitae consequatur! Non harum maiores tempora perferendis.</p>
                                <p class="text-sm my-5 md:my-4 lg:my-3 text-slate-500 flex items-center gap-2"><i
                                        class="fa-solid fa-location-dot"></i>Semarang, Central Java
                                </p>
                                <div class="flex items-center gap-2">
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        Figma</p>
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        Designer
                                    </p>
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        UI
                                        Desgin
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                                <div class="left">
                                    <div class="flex gap-2">
                                        <img class="rounded w-14 h-14 shadow"
                                            src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                        <div class="">
                                            <h3 class="text-md font-bold mb-2 md:mb-1">Product Designer</h3>
                                            <div class="block md:flex md:flex-row gap-y-2 gap-x-2 md:gap-x-3 w-full">
                                                <div
                                                    class="bg-blue-100 w-auto inline-block text-center text-primary px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-city"></i>
                                                        Tokopedia</p>
                                                </div>
                                                <div
                                                    class="bg-orange-100 w-auto inline-block text-center text-orange_normal px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-clock"></i>
                                                        Part Time</h>
                                                </div>
                                                <div
                                                    class="bg-green-100 w-auto inline-block text-center text-green-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-money-check"></i> $200 - $500</p>
                                                </div>
                                                <div
                                                    class="bg-yellow-100 w-auto inline-block text-center text-yellow-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-briefcase"></i> 2 year</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="flex items-center gap-2 text-slate-500 text-sm ">
                                        <i class="fa-regular fa-calendar"></i>
                                        <p>12 January 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="down mt-3">
                                <p class="text-sm text-justify text-slate-600">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Deserunt placeat iure, minus suscipit dolorem id exercitationem, dolor
                                    modi quos iusto quaerat consectetur voluptatem voluptatum accusantium nostrum, ea nihil
                                    voluptates. Accusamus hic adipisci obcaecati eius est fuga modi necessitatibus harum
                                    quasi
                                    voluptates, laborum cum eum soluta doloribus placeat omnis sint dolore ducimus esse
                                    earum
                                    vitae consequatur! Non harum maiores tempora perferendis.</p>
                                <p class="text-sm my-5 md:my-4 lg:my-3 text-slate-500 flex items-center gap-2"><i
                                        class="fa-solid fa-location-dot"></i>Semarang, Central Java
                                </p>
                                <div class="flex items-center gap-2">
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        Figma</p>
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        Designer
                                    </p>
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        UI
                                        Desgin
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                                <div class="left">
                                    <div class="flex gap-2">
                                        <img class="rounded w-14 h-14 shadow"
                                            src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                        <div class="">
                                            <h3 class="text-md font-bold mb-2 md:mb-1">Product Designer</h3>
                                            <div class="block md:flex md:flex-row gap-y-2 gap-x-2 md:gap-x-3 w-full">
                                                <div
                                                    class="bg-blue-100 w-auto inline-block text-center text-primary px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-city"></i>
                                                        Tokopedia</p>
                                                </div>
                                                <div
                                                    class="bg-orange-100 w-auto inline-block text-center text-orange_normal px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-clock"></i>
                                                        Part Time</h>
                                                </div>
                                                <div
                                                    class="bg-green-100 w-auto inline-block text-center text-green-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-money-check"></i> $200 - $500</p>
                                                </div>
                                                <div
                                                    class="bg-yellow-100 w-auto inline-block text-center text-yellow-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-briefcase"></i> 2 year</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="flex items-center gap-2 text-slate-500 text-sm ">
                                        <i class="fa-regular fa-calendar"></i>
                                        <p>12 January 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="down mt-3">
                                <p class="text-sm text-justify text-slate-600">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Deserunt placeat iure, minus suscipit dolorem id exercitationem, dolor
                                    modi quos iusto quaerat consectetur voluptatem voluptatum accusantium nostrum, ea nihil
                                    voluptates. Accusamus hic adipisci obcaecati eius est fuga modi necessitatibus harum
                                    quasi
                                    voluptates, laborum cum eum soluta doloribus placeat omnis sint dolore ducimus esse
                                    earum
                                    vitae consequatur! Non harum maiores tempora perferendis.</p>
                                <p class="text-sm my-5 md:my-4 lg:my-3 text-slate-500 flex items-center gap-2"><i
                                        class="fa-solid fa-location-dot"></i>Semarang, Central Java
                                </p>
                                <div class="flex items-center gap-2">
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        Figma</p>
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        Designer
                                    </p>
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        UI
                                        Desgin
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                                <div class="left">
                                    <div class="flex gap-2">
                                        <img class="rounded w-14 h-14 shadow"
                                            src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                        <div class="">
                                            <h3 class="text-md font-bold mb-2 md:mb-1">Product Designer</h3>
                                            <div class="block md:flex md:flex-row gap-y-2 gap-x-2 md:gap-x-3 w-full">
                                                <div
                                                    class="bg-blue-100 w-auto inline-block text-center text-primary px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-city"></i>
                                                        Tokopedia</p>
                                                </div>
                                                <div
                                                    class="bg-orange-100 w-auto inline-block text-center text-orange_normal px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-clock"></i>
                                                        Part Time</h>
                                                </div>
                                                <div
                                                    class="bg-green-100 w-auto inline-block text-center text-green-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-money-check"></i> $200 - $500</p>
                                                </div>
                                                <div
                                                    class="bg-yellow-100 w-auto inline-block text-center text-yellow-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-briefcase"></i> 2 year</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="flex items-center gap-2 text-slate-500 text-sm ">
                                        <i class="fa-regular fa-calendar"></i>
                                        <p>12 January 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="down mt-3">
                                <p class="text-sm text-justify text-slate-600">Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Deserunt placeat iure, minus suscipit dolorem id exercitationem, dolor
                                    modi quos iusto quaerat consectetur voluptatem voluptatum accusantium nostrum, ea nihil
                                    voluptates. Accusamus hic adipisci obcaecati eius est fuga modi necessitatibus harum
                                    quasi
                                    voluptates, laborum cum eum soluta doloribus placeat omnis sint dolore ducimus esse
                                    earum
                                    vitae consequatur! Non harum maiores tempora perferendis.</p>
                                <p class="text-sm my-5 md:my-4 lg:my-3 text-slate-500 flex items-center gap-2"><i
                                        class="fa-solid fa-location-dot"></i>Semarang, Central Java
                                </p>
                                <div class="flex items-center gap-2">
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        Figma</p>
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        Designer
                                    </p>
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        UI
                                        Desgin
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- pagination --}}
                    <div class="flex items-center justify-between border-t border-gray-200 bg-white pt-8 pb-3">
                        <div class="flex flex-1 justify-between sm:hidden">
                            <a href="#"
                                class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                            <a href="#"
                                class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                        </div>
                        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing
                                    <span class="font-medium">1</span>
                                    to
                                    <span class="font-medium">5</span>
                                    of
                                    <span class="font-medium">136</span>
                                    results
                                </p>
                            </div>
                            <div>
                                <nav class="isolate inline-flex -space-x-px rounded-md shadow-xs" aria-label="Pagination">
                                    <a href="#"
                                        class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Previous</span>
                                        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <a href="#" aria-current="page"
                                        class="relative z-10 inline-flex items-center bg-gradient-to-r from-sky_light to-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary_light">1</a>
                                    <a href="#"
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                                    <a href="#"
                                        class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                                    <span
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-gray-300 ring-inset focus:outline-offset-0">...</span>
                                    <a href="#"
                                        class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                                    <a href="#"
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                                    <a href="#"
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                                    <a href="#"
                                        class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Next</span>
                                        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
