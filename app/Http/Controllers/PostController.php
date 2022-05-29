<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Buku;
use App\Models\Category;


class PostController extends Controller
{
    public function index()
    {
        $title='post';
        $buku = Buku::get();
        $kategori=Category::get();
        return view('postbook.postss.index', compact('title', 'buku', 'kategori'));
    }
}
