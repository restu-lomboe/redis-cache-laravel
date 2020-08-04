<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BorrowingBookRequest;
use App\Model\BorrowingBook;

class BorrowingBookController extends Controller
{
    public function store(BorrowingBookRequest $request)
    {
        BorrowingBook::create([
            'tanggal_peminjaman' => request('tanggal_peminjaman'),
            // 'tanggal_pengembalian' => request('tanggal_pengembalian'),
            'tanggal_dateline' => request('tanggal_dateline'),
            // 'status_ontime' => request('status_ontime'),
            'user_id' => request('user_id'),
            'kode_buku' => request('kode_buku'),
        ]);

        return response('Thanks, Peminjaman Buku Berhasil');
    }

    public function update(Request $request, $id)
    {
        // $borrowingBook = BorrowingBook::where(['id' => $id])->first();
        // dd($borrowingBook);

        $borrowingBook = BorrowingBook::where(['id' => $id])->update([
            'tanggal_pengembalian' => request('tanggal_pengembalian'),
            'status_ontime' => request('status_ontime')
        ]);

        return response('Thanks, Buku Berhasil dikembalikan');
    }
}
