<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Model\BelajarRedis;

class RedisController extends Controller
{
    public function index()
    {
        $datas = Cache::remember('item', 1 * 60, function () {
            return BelajarRedis::all();
        });

        return view ('redis', compact('datas'));
    }

    public function view()
    {
        $datas = BelajarRedis::all();

        return view ('view', compact('datas'));
    }
}
