<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $title = 'Berita';
        $currentPage = request()->has('page') ? max(1, intval(request('page'))) : 1;
        $newsPerPage = 6;
        $totalNews = News::count();
        $lastPage = ceil($totalNews / $newsPerPage);
        $news = News::latest()->skip(($currentPage - 1) * $newsPerPage)->take($newsPerPage)->get();

        return view('home.news', compact('news', 'title', 'currentPage', 'lastPage'));
    }


    public function show($id)
    {
        $news = News::findOrFail($id);
        $otherNews = News::where('id', '!=', $id)->get();
        $title = $news->title;
        return view('home.detailnews', compact('news', 'otherNews', 'title'));
    }
}
