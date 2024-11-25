<?php


namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    public function index()
{
    $posts = Post::latest()->take(5)->get(); // Get the latest 5 posts
    return view('home', compact('posts'));
}
public function home()
{
    $posts = Post::all();
    $carouselImages = [
        (object) ['filename' => 'reog.jpg', 'title' => 'Reog Ponorogo', 'description' => 'Tradisi Budaya Indonesia'],
        (object) ['filename' => 'bromo.jpg', 'title' => 'Gunung Bromo', 'description' => 'Keindahan Alam Indonesia'],
        (object) ['filename' => 'borobudur.jpg', 'title' => 'Candi Borobudur', 'description' => 'Warisan Dunia UNESCO']
    ];

    return view('home', compact('posts', 'carouselImages'));
}

}


