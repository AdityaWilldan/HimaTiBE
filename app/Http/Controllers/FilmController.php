<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilmController extends Controller
{
    public function getMovies(){
        $apiurl = 'https://the-lazy-media-api.vercel.app/api/tech?page=1';
        $response = Http::get($apiurl);
        $movies = $response->json();
        // dd($movies);
        // $response = Http::get($apiurl);

// if ($response->successful()) {
//     $movies = $response->json();
//     dd($movies);
// } else {
//     dd('Failed to retrieve data. Status code: ' . $response->status());
// }

        
        return view('user.film', ['movies' => $movies]);



//         $totalPages = 2;
//         $movies = [];

//         Loop melalui setiap halaman
//         for ($page = 1; $page <= $totalPages; $page++) {
//           $apiurl = 'https://the-lazy-media-api.vercel.app/api/tech?page=' . $page;

//            Melakukan request ke API
//           $response = Http::get($apiurl);

//           if ($response->successful()) {
//               $data = $response->json();

//               Memproses data dari setiap halaman
//               foreach ($data as &$movie) {
//                   $movie['desc'] = substr($movie['desc'], 0, 500) . '...';

//                   $youtubeLink = '';
//                   preg_match('/https:\/\/youtu\.be\/([^\s]+)/', $movie['desc'], $matches);

//                   if (isset($matches[1])) {
//                       $youtubeLink = 'https://youtu.be/' . $matches[1];
//                   }

//                   $movie['youtubeLink'] = $youtubeLink;
//               }

//               $movies = array_merge($movies, $data);
//           } else {
//               dd('Failed to retrieve data. Status code: ' . $response->status());
//           }
//       }


        
//         return view('user.film', ['movies' => $movies]);
//   }
    }

    public function QuotePost(){
        $endpoint = 'https://katanime.vercel.app/api/getrandom';
        $response = Http::get($endpoint);

        if($response->successful()){
            $randomData = collect($response->json())->shuffle()->first();
            // dd($randomData);
            return view('user.quote', compact(['randomData']));
        }
        
    }
}
