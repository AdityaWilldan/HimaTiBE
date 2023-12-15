<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">
    <title>HimaTI UM</title>
    
</head>
<body class="bg-slate-950 overflow-x-hidden">
    <!-- Header start -->
    <header class="sticky top-0 z-50">
        
<nav class="backdrop-blur-sm rounded p-2">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto ">
      <a href="https://www.instagram.com/hima_teknikinformatika/" class="flex items-center">
          <img src="/img/logo-removebg-preview.png" class="h-7 mr-3 " alt="Will Dev" />
          <span class="self-center text-2xl font-mono whitespace-nowrap dark:text-white text-white">HimaTI</span>
      </a>
      <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-800 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-900 md:dark:bg-transparent" aria-current="page">Home</a>
          </li>
          <li>
            <a href="{{url('/gallery')}}" class="block py-2 pl-3 pr-5 text-gray-100 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Gallery</a>
          </li>
          <li>
            <a href="{{url('/sejarah')}}" class="block py-2 pl-3 pr-4 text-gray-100 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Sejarah</a>
          </li>
          <li>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="flex flex-row items-center block py-2 pl-3 pr-4 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-blue dark-mode:focus:bg-blue-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span class="text-slate-200  text-gray-900 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Departemen</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                <div class="px-2 py-2 bg-gray rounded-md shadow dark-mode:bg-gray-800">
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/kompub')}}">KOMPUB</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/litbang')}}">LITBANG</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/medfo')}}">MEDFO</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/psdm')}}">PSDM</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/sospol')}}">SOSPOL</a>
                  </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
    </header>
    <!-- Headaer end -->

    <section class="bg-gray-900 dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center">
                <h1 class="text-2xl font-semibold text-blue-800 capitalize lg:text-3xl ">{{$posting->title}}</h1>
            </div>
        </div>
    </section>



<main class="pt-8 pb-16 lg:pt-16 bg-gray-900 dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            
            <header class="mb-4 lg:mb-6 not-format">
                <figure><img src="{{ asset('images/' . $posting->gambar) }}" alt="">
                </figure>
            </header>
            <h2 class="mb-2 text-xl font-bold leading-tight text-sky-500 ">
               {{$posting->title}}
            </h2>
            <p class="lead text-gray-500 pb-20 text-md font-medium">{{$posting->konten}}</p>
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$posting->admin}}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">Hima Teknik Informatika Admin</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{$posting->tanggal}}</time></p>
                        </div>
                    </div>
                </address>
               
        </article>
  </main>
    <!-- footer -->
    <footer class="bg-slate-900 pt-24 pb-12">
        <div class="container">

          <div class="flex flex-wrap">
            <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                <h2 class="font-bold text-4xl text-white mb-5">Himpunan Teknik Informatika</h2>
                <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                <p>HimaTIUM@gmail.com</p>
                <p>Jl. Marsinu No.5, Dangdeur, Tegalkalapa, Kabupaten Subang, Jawa Barat 4121</p>
            </div>
            <div class="w-full px-4 mb-12 md:w-1/3">
                <h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
                <ul class="text-slate-300">
                    <li>
                        <a href="#" class="inline-block text-base hover:text-indigo-500 mb-3">Organisasi</a>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-base hover:text-indigo-500 mb-3">Bakti masyarakat</a>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-base hover:text-indigo-500 mb-3">Himpunan Mahasiswa</a>
                    </li>
                </ul>
            </div>
            <div class="w-full px-4 mb-12 md:w-1/3">
                <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                <ul class="text-slate-300">
                    <li>
                        <a href="/index.html" class="inline-block text-base hover:text-indigo-500 mb-3">Beranda</a>
                    </li>
                    <li>
                        <a href="/kompub/kompub.html" class="inline-block text-base hover:text-indigo-500 mb-3">Kompub</a>
                    </li>
                    <li>
                        <a href="/litbang/litbang.html" class="inline-block text-base hover:text-indigo-500 mb-3">Litbang</a>
                    </li>
                    <li>
                        <a href="/psdm/psdm.html" class="inline-block text-base hover:text-indigo-500 mb-3">Psdm</a>
                    </li>
                    <li>
                        <a href="/medfo/medfo.html" class="inline-block text-base hover:text-indigo-500 mb-3">Medfo</a>
                    </li>
                    <li>
                        <a href="/sospol/sospol.html" class="inline-block text-base hover:text-indigo-500 mb-3">Sospol</a>
                    </li>
                </ul>
            </div>
        </div>

            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/wildan.aditya.7311" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-300 hover:animate-bounce">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Facebook</title>
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/w1ldan_aditya/" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-300 hover:animate-bounce">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>
                    <a href="#" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-300 hover:animate-bounce">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>YouTube</title>
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                </div>
                <p class="font-medium text-xs text-slate-500 text-center">Creating with <span
                        class="text-pink-500">❤ </span><a href="https://www.instagram.com/w1ldan_aditya/"
                        target="_blank" class="font-bold text-teal-500">By Wildan-Aditya</a>, Using framework <a
                        href="https://tailwindcss.com/" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="/script.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>