@extends('layouts.master')
      
  @section('content')
      

<div id="controls-carousel" class="relative w-full slide-up" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/img/carousel.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <img src="{{asset('/img/carousel2.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/img/carousel3.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

    
        <!-- //hero section -->
        <section class="bg-gray-900 dark:text-gray-100">
          <div class="container flex flex-col lg:flex-row justify-center items-center p-6 mx-auto sm:py-12 lg:py-24">
            <div class="lg:w-1/2 p-6 lg:p-0">
              <div class="h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128 relative" data-aos="fade-right" data-aos-offset="300">
                <img width="200px" src="{{asset('/img/logo-removebg-preview.png')}}" alt="" class="object-contain w-full h-full">
              </div>
            </div>
            <div class="lg:w-1/2 flex flex-col justify-center p-6 text-center lg:text-left" data-aos="fade-left">
              <h1 class="text-5xl font-bold leading-tight sm:text-6xl text-slate-400">Welcome To
                <span class="text-blue-400">Hima</span><span class="text-sky-500">TI</span>
              </h1>
              <p class="mt-6 mb-8 text-lg sm:mb-12 text-gray-300 font-medium">Wadah Ekspresi & kreativitas Himpunan Mahasiswa Teknik informatika Universitas Mandiri Subang.
                <br>
                <span class="text-lg font-normal text-blue-400 dark:text-blue-400 poppins">✨berfikir cerdas bertindak jelas!✨</span>
              </p>
              <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                <button></button>
                <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold rounded hover:text-gray-300 bg-blue-500 hover:bg-blue-800 dark:text-gray-900" data-aos="fade-right">Gallery Berita</a>
              </button>
                <a rel="noopener noreferrer" href="/sejarah.html" class="px-8 py-3 text-lg font-semibold border rounded dark:border-gray-100 hover:bg-blue-800 text-slate-100" data-aos="fade-left">Profile Ormawa</a>
              </div>
            </div>
          </div>
          <div class="py-8  mx-auto max-w-screen-xl text-center  ">
            <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
              <span class="font-semibold text-sky-400 uppercase text-bold" data-aos="zoom-in">OUR SOCIALMEDIA</span>
              <div class="flex flex-wrap justify-center items-center mt-8 text-gray-500 sm:justify-between">
                  <div class="w-full px-4">
                      <div class="flex flex-wrap items-center justify-center">
                          <a href="https://www.instagram.com/hima_teknikinformatika/"
                              class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="zoom-in-right">
                              <img width="40" src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="IG">
                          </a>
                          <a href="https://www.youtube.com/@HIMATIUM"
                              class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="zoom-in-up">
                              <img width="70" src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Logo_of_YouTube_%282015-2017%29.svg" alt="YT">
                          </a>
                          <a href="#"
                              class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="zoom-in-down">
                              <img width="80" src="https://upload.wikimedia.org/wikipedia/id/a/a9/TikTok_logo.svg" alt="tiktok">
                          </a>
                          <a href="#"
                              class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duraSStion-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="zoom-in-left">
                              <img width="40" src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt="fb">
                          </a>
                      </div>
                  </div>
              </div>
          </div> 
          </div>
        </section>
        

        <!-- team section -->
        <div class="flex items-center justify-center min-h-screen bg-gray-950 py-30">
          <div class="flex flex-col">
              <div class="flex flex-col mt-8">
                  <!-- Meet the Team -->
                  <div class="container max-w-7xl px-4">
                      <!-- Section Header -->
                      <div class="flex flex-wrap justify-center text-center mb-24" data-aos="fade-up">
                          <div class="w-full lg:w-6/12 px-4">
                              <!-- Header -->
                              <h1 class="text-gray-400 text-4xl font-bold mb-8">
                                  Our Leader And secretary
                              </h1>
      
                              <!-- Description -->
                              <p class="text-sky-700 text-lg font-medium">
                                  Kepengurusan Hima Teknik Informatika Universitas Mandiri (HanomanTiran)
                              </p>
                          </div>
                      </div>
      
                      <!-- Team Members -->
                      <div class="flex flex-wrap">
                          <!-- Member #1 -->
                          <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4" data-aos="fade-up">
                              <div class="flex flex-col">
                                  <!-- Avatar -->
                                  <a href="#" class="mx-auto">
                                      <img width="300px" class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                          src="{{asset('/img/adas-fotor-bg-remover-20231109204128.png')}}">
                                  </a>
      
                                  <!-- Details -->
                                  <div class="text-center mt-6">
                                      <!-- Name -->
                                      <h1 class="text-gray-400 text-xl font-bold mb-1">
                                         ahmad muqodas
                                      </h1>
      
                                      <!-- Title -->
                                      <div class="text-primary font-medium mb-2">
                                        Ketua Himpunan Teknik Informatika
                                      </div>
      
                                      <!-- Social Icons -->
                                      <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                      transition-opacity duration-300">
                                          <!-- Linkedin -->
                                          <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                              <i class="mdi mdi-linkedin text-indigo-500 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Twitter -->
                                          <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                              <i class="mdi mdi-twitter text-blue-300 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Instagram -->
                                          <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                              <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
      
                          <!-- Member #2 -->
                          <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4" data-aos="fade-up">
                              <div class="flex flex-col">
                                  <!-- Avatar -->
                                  <a href="#" class="mx-auto">
                                      <img width="300px" class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                          src="{{asset('/img/dhea-fotor-bg-remover-2023110921829.png')}}">
                                  </a>
      
                                  <!-- Details -->
                                  <div class="text-center mt-6">
                                      <!-- Name -->
                                      <h1 class="text-gray-400 text-xl font-bold mb-1">
                                          Dhea
                                      </h1>
      
                                      <!-- Title -->
                                      <div class="text-primary font-medium mb-2">
                                        Wakil Ketua Himpunan Teknik Informatika
                                      </div>
      
                                      <!-- Social Icons -->
                                      <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                      transition-opacity duration-300">
                                          <!-- Linkedin -->
                                          <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                              <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Twitter -->
                                          <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                              <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Instagram -->
                                          <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                              <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
      
                          <!-- Member #3 -->
                          <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4" data-aos="fade-up">
                              <div class="flex flex-col">
                                  <!-- Avatar -->
                                  <a href="#" class="mx-auto">
                                      <img width="300px" class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                          src="{{asset('/img/salma3-fotor-bg-remover-2023110921110.png')}}">
                                  </a>
      
                                  <!-- Details -->
                                  <div class="text-center mt-6">
                                      <!-- Name -->
                                      <h1 class="text-gray-400 text-xl font-bold mb-1">
                                          Salma
                                      </h1>
      
                                      <!-- Title -->
                                      <div class="text-primary font-medium mb-2">
                                          Sekertaris Umum Himpunan Teknik Informatika
                                      </div>
      
                                      <!-- Social Icons -->
                                      <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                      transition-opacity duration-300">
                                          <!-- Linkedin -->
                                          <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                              <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Twitter -->
                                          <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                              <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Instagram -->
                                          <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                              <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
      
                          <!-- Member #4 -->
                          <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4" data-aos="fade-up">
                              <div class="flex flex-col">
                                  <!-- Avatar -->
                                  <a href="#" class="mx-auto">
                                      <img width="300px" class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                          src="{{('/img/regina-fotor-bg-remover-2023110921163.png')}}">
                                  </a>
      
                                  <!-- Details -->
                                  <div class="text-center mt-6">
                                      <!-- Name -->
                                      <h1 class="text-gray-400 text-xl font-bold mb-1">
                                          Regina Maydilla
                                      </h1>
      
                                      <!-- Title -->
                                      <div class="text-primary font-medium mb-2">
                                          Bendahara Umum Himpunan Teknik Informatika
                                      </div>
      
                                      <!-- Social Icons -->
                                      <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                      transition-opacity duration-300">
                                          <!-- Linkedin -->
                                          <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                              <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Twitter -->
                                          <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                              <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                          </a>
      
                                          <!-- Instagram -->
                                          <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                              <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    
        <section class="mt-10 fade-in">
            <div class="w-full px-4">
            <div class="mx-auto text-center mb-16"  data-aos="fade-up" data-aos-offset="300">
                <h4 class="font-semibold text-lg text-blue-500 mb-2">Departemen</h4>
                <h2 class="font-bold text-slate-400 text-3xl mb-4 sm:text-4xl lg:text-5xl">Departemen HimaTI</h2>
                <p class="font-medium text-md text-sky-600 md:text-lg">Himpunan Mahasiswa Teknik Informatika mempunyai Departemen tersendiri 
                    <P class="font-medium text-md text-sky-600 md:text-lg">untuk setiap keanggotaan sesuai kemampuan masing-masing anggota.</P>
                </p>
            </div>


    <div data-aos="zoom-in">
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    <div class="relative flex flex-col mt-6 text-gray-700 bg-gray-900 shadow-md  rounded-xl bg-clip-border">
        <div class="p-6">
            
              <img  class="w-12 h-12 mb-4 text-cyan-500" src="{{asset('/img/LOGO LITBANG.png')}}" alt="" srcset="">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-cyan-700 hover:text-blue-400">
            LITBANG
          </h5>
          <p class="block font-sans text-base antialiased font-medium leading-relaxed text-inherit text-slate-400">
            <span class="text-white">Litbang (penelitian Dan Pengembangan):</span> menjembatani Mahasiswa dengan perkembangan teknologi khusunya bidang programming. Kami mengejar inovasi melalui riset, 
            menciptakan solusi berkelanjutan, dan menginspirasi anggota kami untuk menggali lebih dalam dalam dunia teknologi.
          </p>
        </div>
        <div class="p-6 pt-0">
          <a
            class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
            href="/litbang/litbang.html"
          >
            <button
            class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-cyan-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-cyan-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
            data-ripple-dark="true"
          >
              Selengkapnya
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>

    <div class="relative flex flex-col mt-6 text-gray-700 bg-gray-900 shadow-md  rounded-xl bg-clip-border">
        <div class="p-6">
          <img  class="w-12 h-12 mb-4 text-cyan-500" src="{{asset('/img/LOGO KOMPUB.png')}}" alt="">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-cyan-700 hover:text-blue-400">
            KOMPUB
          </h5>
          <p class="block font-sans text-base antialiased font-medium leading-relaxed text-inherit text-slate-400">
            <span class="text-white">Kompub (Komunikasi Publik):</span>
            Departemen Kompub HIMA Teknik Informatika berdedikasi untuk membangun jembatan komunikasi yang kuat antara kami dan seluruh anggota, masyarakat, dan pihak terkait.
            Kami membawa berita, informasi, dan ide-ide segar kepada Anda.
          </p>
        </div>
        <div class="p-6 pt-0">
          <a
            class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
            href="/kompub/kompub.html"
          >
            <button
              class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-cyan-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-cyan-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
              data-ripple-dark="true"
            >
              Selengkapnya
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>

    <div class="relative flex flex-col mt-6 text-gray-700 bg-gray-900 shadow-md  rounded-xl bg-clip-border">
        <div class="p-6">
         <img  class="w-12 h-12 mb-4 text-cyan-500" src="{{('/img/LOGO MEDFO.png')}}" alt="" srcset="">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-cyan-700 hover:text-blue-400">
           MEDFO
          </h5>
          <p class="block font-sans text-base antialiased font-medium leading-relaxed text-inherit text-slate-400">
            <span class="text-white">Departemen Medfo (Media Informasi):</span>
            Kami adalah suara HIMA Teknik Informatika. Departemen Medfo bertugas menyampaikan informasi, berita, 
            dan kegiatan kami melalui berbagai media. Kami berusaha untuk selalu memberikan informasi terkini dan berkualitas kepada Anda."
        </div>
        <div class="p-6 pt-0">
          <a
            class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
            href="/medfo/medfo.html"
          >
            <button
              class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-cyan-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-cyan-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
              data-ripple-dark="true"
            >
              Selengkapnya
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>

    <div class="relative flex flex-col mt-6 text-gray-700 bg-gray-900 shadow-md  rounded-xl bg-clip-border">
        <div class="p-6">
          <img  class="w-12 h-12 mb-4 text-cyan-500" src="{{asset('/img/LOGO PSDM.png')}}" alt="" srcset="">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-cyan-700 hover:text-blue-400">
            PSDM
          </h5>
          <p class="block font-sans text-base antialiased font-medium leading-relaxed text-inherit text-slate-400">
            <span class="text-white">Departemen PSDM (Pengembangan Sumber Daya Mahasiswa):</span>
            kami berkomitmen untuk mengembangkan potensi setiap anggota, 
            memberikan pelatihan, pengembangan diri, dan mendukung pertumbuhan pribadi mereka agar siap menghadapi masa depan.
          </p>
        </div>
        <div class="p-6 pt-0">
          <a
            class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
            href="/psdm/psdm.html"
          >
            <button
              class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-cyan-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-cyan-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
              data-ripple-dark="true"
            >
              Selengkapnya
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>

    <div class="relative flex flex-col mt-6 text-gray-700 bg-gray-900 shadow-md  rounded-xl bg-clip-border">
        <div class="p-6">
          <img  class="w-12 h-12 mb-4 text-cyan-500" src="{{asset('/img/LOGO SOSPOL.png')}}" alt="" srcset="">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-cyan-700 hover:text-blue-400">
            SOSPOL
          </h5>
          <p class="block font-sans text-base antialiased font-medium leading-relaxed text-inherit text-slate-400">
            <span class="text-white">Departemen Sospol (Sosial Politik):</span>
            Kami berperan dalam menggali isu-isu sosial dan politik yang relevan dengan dunia teknik informatika. 
            Departemen Sospol HIMA Teknik Informatika menginspirasi anggota kami untuk terlibat dalam pembentukan masa depan dan ikut serta dalam perubahan yang positif.
          </p>
        </div>
        <div class="p-6 pt-0">
          <a
            class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
            href="/sospol/sospol.html"
          >
            <button
              class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-cyan-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-cyan-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
              data-ripple-dark="true"
            >
              Selengkapnya
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>


          </div>
        </div>
    </section> 
    @endsection
