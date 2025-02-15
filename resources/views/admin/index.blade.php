<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://css.gg/css?=|add-r" rel="stylesheet">
    <style>
        /* Compiled dark classes from Tailwind */
        .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
          border-color: rgba(55, 65, 81);
        }
        .dark .dark\:bg-gray-50 {
          background-color: rgba(249, 250, 251);
        }
        .dark .dark\:bg-gray-100 {
          background-color: rgba(243, 244, 246);
        }
        .dark .dark\:bg-gray-600 {
          background-color: rgba(75, 85, 99);
        }
        .dark .dark\:bg-gray-700 {
          background-color: rgba(55, 65, 81);
        }
        .dark .dark\:bg-gray-800 {
          background-color: rgba(31, 41, 55);
        }
        .dark .dark\:bg-gray-900 {
          background-color: rgba(17, 24, 39);
        }
        .dark .dark\:bg-red-700 {
          background-color: rgba(185, 28, 28);
        }
        .dark .dark\:bg-green-700 {
          background-color: rgba(4, 120, 87);
        }
        .dark .dark\:hover\:bg-gray-200:hover {
          background-color: rgba(229, 231, 235);
        }
        .dark .dark\:hover\:bg-gray-600:hover {
          background-color: rgba(75, 85, 99);
        }
        .dark .dark\:hover\:bg-gray-700:hover {
          background-color: rgba(55, 65, 81);
        }
        .dark .dark\:hover\:bg-gray-900:hover {
          background-color: rgba(17, 24, 39);
        }
        .dark .dark\:border-gray-100 {
          border-color: rgba(243, 244, 246);
        }
        .dark .dark\:border-gray-400 {
          border-color: rgba(156, 163, 175);
        }
        .dark .dark\:border-gray-500 {
          border-color: rgba(107, 114, 128);
        }
        .dark .dark\:border-gray-600 {
          border-color: rgba(75, 85, 99);
        }
        .dark .dark\:border-gray-700 {
          border-color: rgba(55, 65, 81);
        }
        .dark .dark\:border-gray-900 {
          border-color: rgba(17, 24, 39);
        }
        .dark .dark\:hover\:border-gray-800:hover {
          border-color: rgba(31, 41, 55);
        }
        .dark .dark\:text-white {
          color: rgba(255, 255, 255);
        }
        .dark .dark\:text-gray-50 {
          color: rgba(249, 250, 251);
        }
        .dark .dark\:text-gray-100 {
          color: rgba(243, 244, 246);
        }
        .dark .dark\:text-gray-200 {
          color: rgba(229, 231, 235);
        }
        .dark .dark\:text-gray-400 {
          color: rgba(156, 163, 175);
        }
        .dark .dark\:text-gray-500 {
          color: rgba(107, 114, 128);
        }
        .dark .dark\:text-gray-700 {
          color: rgba(55, 65, 81);
        }
        .dark .dark\:text-gray-800 {
          color: rgba(31, 41, 55);
        }
        .dark .dark\:text-red-100 {
          color: rgba(254, 226, 226);
        }
        .dark .dark\:text-green-100 {
          color: rgba(209, 250, 229);
        }
        .dark .dark\:text-blue-400 {
          color: rgba(96, 165, 250);
        }
        .dark .group:hover .dark\:group-hover\:text-gray-500 {
          color: rgba(107, 114, 128);
        }
        .dark .group:focus .dark\:group-focus\:text-gray-700 {
          color: rgba(55, 65, 81);
        }
        .dark .dark\:hover\:text-gray-100:hover {
          color: rgba(243, 244, 246);
        }
        .dark .dark\:hover\:text-blue-500:hover {
          color: rgba(59, 130, 246);
        }
      
        /* Custom style */
        .header-right {
            width: calc(100% - 3.5rem);
        }
        .sidebar:hover {
            width: 16rem;
        }
        @media only screen and (min-width: 768px) {
            .header-right {
                width: calc(100% - 16rem);
            }        
        }
      </style>
</head>
<body>
    <div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-900 text-black dark:text-white">

      <!-- Header -->
      <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
        <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-blue-800 bg-blue-800 border-none">
            <a href="/"><img src="{{asset('/img/logo-removebg-preview.png')}}" class="h-8 mr-3" alt="Flowbite Logo" /></a>
          <span class="hidden md:block">ADMIN</span>
        </div>
        <div class="flex justify-between items-center h-14 bg-blue-800 bg-blue-800 header-right">
          <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
            <button class="outline-none focus:outline-none">
              <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>
            <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
          </div>
          <ul class="flex items-center">
            <li>
              <button
                aria-hidden="true"
                @click="toggleTheme"
                class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none"
              >
                <svg
                  x-show="isDark"
                  width="24"
                  height="24"
                  class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke=""
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                  />
                </svg>
                <svg
                  x-show="!isDark"
                  width="24"
                  height="24"
                  class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke=""
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                  />
                </svg>
              </button>
            </li>
            <li>
              <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
            </li>
            <li>
              <a href="#" class="flex items-center mr-4 hover:text-blue-100">
                <span class="inline-flex mr-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </span>
                Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./Header -->
    
      <!-- Sidebar -->
      <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 bg-gray-800 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
              </div>
            </li>
            <li>
              <a href="/dashboard" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="/admin" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Artikel</span>
                <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
              </a>
            </li>
            <li>
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                <!-- <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span> -->
              </a>
            </li>
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center mt-5 h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
              </div>
            </li>
            <li>
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
              </a>
            </li>
            <li>
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
              </a>
            </li>
          </ul>
          <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
        </div>
      </div>
      <!-- ./Sidebar -->
      <div class="h-full md:ml-64 pt-20 pr-20 pl-20 h-15">
        <table class="w-full bg-gray-800 rounded-lg overflow-hidden sm:w-auto">
          <tr class="text-left">
              {{-- <th class="py-2 px-4">id</th> --}}
              <th class="py-2 px-4">title</th>
              <th class="py-2 px-4">konten</th>
              <th class="py-2 px-4">admin</th>
              {{-- <th class="py-2 px-4">tanggal</th> --}}
              <th class="py-2 px-4">gambar</th>
              <th class="py-2 px-4">Edit data</th>
          </tr>
          @foreach($posting as $p)
          <tr class="text-left">
              {{-- <td class="py-2 px-4">{{$p->id}}</td> --}}
              <td class="py-2 px-4">{{$p->title}}</td>
              <td class="py-2 px-4">{{ substr($p->konten, 0, 100) }}</td>
              <td class="py-2 px-4">{{$p->admin}}</td>
              {{-- <td class="py-2 px-4">{{$p->created_at->format('Y-m-d')}}</td> --}}
              <td>
                  @if($p->gambar)
                      <img src="{{ asset('images/' . $p->gambar) }}" alt="Gambar" class="w-16 h-16 object-cover">
                  @else
                      Tidak ada gambar
                  @endif
              </td>
              <td class="py-2 px-4">
                  <a href="/posting{{$p->id}}/edit" class="bg-purple-500 text-white py-1 px-3 rounded text-sm hover:bg-purple-600 
                  focus:outline-none focus:ring-2 focus:ring-purple-500">Edit</a>
                  <form action="/admin/{{$p->id}}" method="POST" class="inline-block">
                      @csrf
                      @method('delete')
                      <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded text-sm hover:bg-red-600 
                      focus:outline-none focus:ring-2 focus:ring-purple-500">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </table>
      <a href="/create" class="gg-add-r"></a>
        <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
          
        </div>
        
    

    
        <!-- Client Table -->
 
      </div>
    </div>
  </div> 
</body>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script>
    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
      }
    }
  </script>
</html>