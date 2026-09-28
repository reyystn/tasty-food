<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;

class HomeController extends Controller
{

     public function index()
     {
          // Mengambil data dari DB
          $latestNews = News::latest()->take(5)->get();
          $galleries = Gallery::latest()->take(6)->get();

          // Mengirimkan variabel ke file blade home
          return view('home', compact('latestNews', 'galleries'));
     }
}
