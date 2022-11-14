<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function movie_list(){
        $movie_list =
        [
            [ 'poster'  => "john_wick.jpg",
            'judul' => "John Wick",
            'genre' => "Action",
            'durasi' => "1h41m",
            'rating' => 5,
            'rvwdate' => "15 Jan 2022"],

            [ 'poster'  => "venom.jpg",
            'judul' => "Venom",
            'genre' => "Action",
            'durasi' => "1h52m",
            'rating' => 4,
            'rvwdate' => "23 Mar 2022"],

            [ 'poster'  => "aquaman.jpg",
            'judul' => "Aquaman",
            'genre' => "Action",
            'durasi' => "2h22m",
            'rating' => 2,
            'rvwdate' => "11 May 2022"],

            [ 'poster'  => "the_nun.jpg",
            'judul' => "The Nun",
            'genre' => "Horror",
            'durasi' => "1h36m",
            'rating' => 3,
            'rvwdate' => "18 Aug 2022"],

            [ 'poster'  => "conjuring.jpg",
            'judul' => "The Conjuring",
            'genre' => "Horror",
            'durasi' => "1h52m",
            'rating' => 4,
            'rvwdate' => "3 Sep 2022"]

        ];
    return view('home',[
        'title' => "Home",
        'logo' => "logo.png",
        'welcoming' => "welcome.png",
        'mvlist' => $movie_list
    ]);
    }

    public function action_list(){
        $movie_list =
        [
            [ 'poster'  => "john_wick.jpg",
            'judul' => "John Wick",
            'genre' => "Action",
            'durasi' => "1h41m",
            'rating' => 5,
            'rvwdate' => "15 Jan 2022"],

            [ 'poster'  => "venom.jpg",
            'judul' => "Venom",
            'genre' => "Action",
            'durasi' => "1h52m",
            'rating' => 4,
            'rvwdate' => "23 Mar 2022"],

            [ 'poster'  => "aquaman.jpg",
            'judul' => "Aquaman",
            'genre' => "Action",
            'durasi' => "2h22m",
            'rating' => 2,
            'rvwdate' => "11 May 2022"],

            [ 'poster'  => "the_nun.jpg",
            'judul' => "The Nun",
            'genre' => "Horror",
            'durasi' => "1h36m",
            'rating' => 3,
            'rvwdate' => "18 Aug 2022"],

            [ 'poster'  => "conjuring.jpg",
            'judul' => "The Conjuring",
            'genre' => "Horror",
            'durasi' => "1h52m",
            'rating' => 4,
            'rvwdate' => "3 Sep 2022"]

        ];
        return view('action',[
            'title' => "Genre | Action",
            'logo' => "logo.png",
            'image' => "action.png",
            'mvlist' => $movie_list
        ]);
    }

    public function horror_list(){
        $movie_list =
        [
            [ 'poster'  => "john_wick.jpg",
            'judul' => "John Wick",
            'genre' => "Action",
            'durasi' => "1h41m",
            'rating' => 5,
            'rvwdate' => "15 Jan 2022"],

            [ 'poster'  => "venom.jpg",
            'judul' => "Venom",
            'genre' => "Action",
            'durasi' => "1h52m",
            'rating' => 4,
            'rvwdate' => "23 Mar 2022"],

            [ 'poster'  => "aquaman.jpg",
            'judul' => "Aquaman",
            'genre' => "Action",
            'durasi' => "2h22m",
            'rating' => 2,
            'rvwdate' => "11 May 2022"],

            [ 'poster'  => "the_nun.jpg",
            'judul' => "The Nun",
            'genre' => "Horror",
            'durasi' => "1h36m",
            'rating' => 3,
            'rvwdate' => "18 Aug 2022"],

            [ 'poster'  => "conjuring.jpg",
            'judul' => "The Conjuring",
            'genre' => "Horror",
            'durasi' => "1h52m",
            'rating' => 4,
            'rvwdate' => "3 Sep 2022"]

        ];
        return view('horror',[
            'title' => "Genre | Horror",
            'logo' => "logo.png",
            'image' => "horror.png",
            'mvlist' => $movie_list
        ]);
    }

    public function profile(){
         return view('about',[
            'title' => "About",
            'logo' => "logo.png",
            'foto' => "foto_adhi.png",
            'nama' => "Adhi Renaldy Arivianto",
            'nim' => "2440027524",
            'kelas' => "LH01",
            'upcoming1' => "deadpool.jpg",
            'upcoming2' => "kingsman2.jpg",
            'upcoming3' => "insidious.jpg"
        ]);
    }
}
