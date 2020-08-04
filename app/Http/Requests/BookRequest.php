<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'kode_buku' => ['required', 'min:4', 'max:4', 'unique:books,kode_buku'],
            'judul' => ['required'],
            'pengarang' => ['required'],
            'tahun_terbit' => ['required']
        ];
    }
}
