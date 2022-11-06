<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $movie_list =
        [
            [ 'poster'  => "john_wick.jpg",
            'judul' => "John Wick",
            'genre' => "Action",
            'durasi' => "1h41m",
            'rating' => 5],

            [ 'poster'  => "venom.jpg",
            'judul' => "Venom",
            'genre' => "Action",
            'durasi' => "1h52m",
            'rating' => 4],

            [ 'poster'  => "aquaman.jpg",
            'judul' => "Aquaman",
            'genre' => "Action",
            'durasi' => "2h22m",
            'rating' => 2],

            [ 'poster'  => "the_nun.jpg",
            'judul' => "The Nun",
            'genre' => "Horror",
            'durasi' => "1h36m",
            'rating' => 3],

            [ 'poster'  => "conjuring.jpg",
            'judul' => "The Conjuring",
            'genre' => "Horror",
            'durasi' => "1h52m",
            'rating' => 4],

        ];
    return view('home',[
        'title' => "Home",
        'logo' => "logo.png",
        'welcoming' => "welcome.png",
        'mvlist' => $movie_list
    ]);
});

Route::get('/action', function(){
    $movie_list =
    [
        [ 'poster'  => "john_wick.jpg",
        'judul' => "John Wick",
        'genre' => "Action",
        'durasi' => "1h41m",
        'rating' => 5],

        [ 'poster'  => "venom.jpg",
        'judul' => "Venom",
        'genre' => "Action",
        'durasi' => "1h52m",
        'rating' => 4],

        [ 'poster'  => "aquaman.jpg",
        'judul' => "Aquaman",
        'genre' => "Action",
        'durasi' => "2h22m",
        'rating' => 2],

        [ 'poster'  => "the_nun.jpg",
        'judul' => "The Nun",
        'genre' => "Horror",
        'durasi' => "1h36m",
        'rating' => 3],

        [ 'poster'  => "conjuring.jpg",
        'judul' => "The Conjuring",
        'genre' => "Horror",
        'durasi' => "1h52m",
        'rating' => 4],

    ];
    return view('action',[
        'title' => "Genre | Action",
        'logo' => "logo.png",
        'image' => "action.png",
        'mvlist' => $movie_list
    ]);
});

Route::get('/horror', function(){
    $movie_list =
    [
        [ 'poster'  => "john_wick.jpg",
        'judul' => "John Wick",
        'genre' => "Action",
        'durasi' => "1h41m",
        'rating' => 5],

        [ 'poster'  => "venom.jpg",
        'judul' => "Venom",
        'genre' => "Action",
        'durasi' => "1h52m",
        'rating' => 4],

        [ 'poster'  => "aquaman.jpg",
        'judul' => "Aquaman",
        'genre' => "Action",
        'durasi' => "2h22m",
        'rating' => 2],

        [ 'poster'  => "the_nun.jpg",
        'judul' => "The Nun",
        'genre' => "Horror",
        'durasi' => "1h36m",
        'rating' => 3],

        [ 'poster'  => "conjuring.jpg",
        'judul' => "The Conjuring",
        'genre' => "Horror",
        'durasi' => "1h52m",
        'rating' => 4],

    ];
    return view('horror',[
        'title' => "Genre | Horror",
        'logo' => "logo.png",
        'image' => "horror.png",
        'mvlist' => $movie_list
    ]);
});

Route::get('/about',function(){
    return view('about',[
        'title' => "About",
        'logo' => "logo.png",
        'foto' => "foto_adhi.png",
        'nama' => "Adhi Renaldy Arivianto",
        'nim' => "2440027524",
        'kuliah' => "BINUS University",
        'jurusan' => "Computer Science",
        'matkul' => "Web Programming",
        'kelas' => "LH01"
    ]);
});
