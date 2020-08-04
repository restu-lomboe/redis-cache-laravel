<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Model\Book;

class BookController extends Controller
{
    public function store(BookRequest $request)
    {
        Book::create([
            'kode_buku' => request('kode_buku'),
            'judul' => request('judul'),
            'pengarang' => request('pengarang'),
            'tahun_terbit' => request('tahun_terbit')
        ]);

        return response('Thanks, Buku Berhasil Ditambah');
    }
}
