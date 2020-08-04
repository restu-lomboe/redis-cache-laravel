<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BorrowingBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tanggal_peminjaman' => ['required'],
            // 'tanggal_pengembalian' => ['required'],
            'tanggal_dateline' => ['required'],
            // 'status_ontime' => ['required'],
            'user_id' => ['required'],
            'kode_buku' => ['required']
        ];
    }
}
