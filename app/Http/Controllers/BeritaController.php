<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('home.news', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('home.detailnews', compact('news'));
    }
}
