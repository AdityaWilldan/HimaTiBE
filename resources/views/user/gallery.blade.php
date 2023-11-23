@extends('layouts.master')

    @section('content')
        
    
    <section class="bg-gray-900 dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center">
                <h1 class="text-2xl font-semibold text-blue-500 capitalize lg:text-3xl">HimaTI News</h1>
    
                <p class="max-w-lg mx-auto mt-4 text-slate-300">
                   berita-berita terbaru seputar hima TI
                </p>
            </div>
        </div>
    </section>


    <section class="bg-gray dark:bg-gray-900 md:flex">
        <div class="container px-6 py-10 mx-auto">
            <div class="flex items-center justify-center">
                <h1 class="text-2xl font-semibold text-gray-300 capitalize lg:text-3xl dark:text-white text-center">postingan terbaru</h1>
            </div>
    
            <hr class="my-8 border-gray-900 dark:border-gray-700">
    
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($artikel as $p)
                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="{{ asset('images/' . $p->gambar) }}" alt="">
    
                        <div class="mt-8">
    
                            <h1 class="mt-4 text-xl font-semibold text-sky-500 ">
                               {{$p->title}}
                            </h1>
    
                            <p class="mt-2 text-gray-300 overflow-hidden w-32 hover:w-full transition-all duration-200 truncate focus:translate-y-5">
                                {{$p->konten}}
                            </p>
    
                            <div class="flex items-center justify-between mt-4">
                                <div>
                                    <a href="#" class="text-lg font-medium text-sky-700 dark:text-sky-300 hover:underline hover:text-blue-500">
                                       {{$p->admin}}
                                    </a>
    
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{$p->tanggal}}</p>
                                </div>
    
                                <a href="{{ route('user.singlepost', ['id' => $p->id]) }}" class="inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endsection