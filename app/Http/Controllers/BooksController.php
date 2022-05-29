<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Category;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $title='books';
        $books=Buku::get();
        return view('books.buku.index', compact('title','books'));
    }

    public function create ()
    {
        $title='tambahdata';
        $kategori= Category::get();
        return view('books.buku.create', compact('title','kategori'));
    }

    public function store(Request $request)
    {
        Buku::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('books.buku.index');
    }

    public function edit($id)
    {
        $title='Edit Data';
        $buku = Buku::where('id', $id)->first();
        $kategori=Category::get();
        return view('books.buku.edit', compact('title', 'kategori', 'buku'));
    }

    public function update(Request $request,$id)
    {
        $buku=Buku::where('id', $id)->first();
        $buku->name = $request->name;
        $buku->category_id = $request->category_id;
        $buku->deskripsi = $request->deskripsi;

        $buku->update();

        return redirect()->route('books.buku.index');
    }

    public function destroy($id)
    {
        Buku::where('id', $id)->delete();
        return redirect()->route('books.buku.index');
    }

    public function calendar()
    {
        $title='calendar';
        return view('books.buku.calendar');
    }
}

