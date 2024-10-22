<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function get()
    {
        $infoRecord = Info::find(1);
        
        $get = DB::table('personal_info')->where('info_id', 1)->first();

        $get_ = DB::table('educational_background')->where('info_id', 1)->first();

        $vars = ['infoRecord', 'get', 'get_'];
        return view('welcome', compact(...$vars));
    }
}
