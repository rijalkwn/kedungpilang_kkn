<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $title = 'Berita';
        $news = news::latest()->paginate(12);
        return view('home.news', compact('news', 'title'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        $otherNews = News::where('id', '!=', $id)->get();
        $title = $news->title;
        return view('home.detailnews', compact('news', 'otherNews', 'title'));
    }
}
