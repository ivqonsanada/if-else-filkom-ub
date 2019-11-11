<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function rules() {
        $rules = DB::table('alts')
            ->select('konten')
            ->where('heading', '=', 'Rules')
            ->get()[0];
        return response()->json($rules, 200);
    }
}
