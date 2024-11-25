<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class CarouselImageController extends Controller
{

    public function home()
    {
        $posts = Post::all();

        // Contoh data gambar carousel (bisa berasal dari database atau hardcoded)
        $carouselImages = [
            (object) ['filename' => 'reog.jpg', 'title' => 'Reog Ponorogo', 'description' => 'Tradisi Budaya Indonesia'],
            (object) ['filename' => 'bromo.jpg', 'title' => 'Gunung Bromo', 'description' => 'Keindahan Alam Indonesia'],
            (object) ['filename' => 'borobudur.jpg', 'title' => 'Candi Borobudur', 'description' => 'Warisan Dunia UNESCO']
/******  8573f895-db8a-4d87-91f3-7915f22ba9b8  *******/
        ];

        // Mengirim data ke view
        return view('home', compact('posts', 'carouselImages'));
    }

}
