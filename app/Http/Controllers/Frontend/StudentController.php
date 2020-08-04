<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Model\Student;

class StudentController extends Controller
{
    public function store(StudentRequest $request)
    {

        Student::create([
            'fakultas' => request('fakultas'),
            'jurusan' =>  request('jurusan'),
            'no_hp' => request('no_hp'),
            'no_wa' => request('no_wa'),
            'user_id' => \Auth::user()->id
        ]);

        return response('Thanks, Profil Mahasiswa Kamu Berhasil di Update');
    }
}
