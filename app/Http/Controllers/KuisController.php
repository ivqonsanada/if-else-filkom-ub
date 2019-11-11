<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Soal;
// use App\PaketSoal;
use App\Jawaban;
use App\Jawaban2;
use App\Jawaban3;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KuisController extends Controller
{
  public function index()
  {
    $user = Auth::user();

    $soals1 = DB::table('paket_soals')
                  ->leftJoin('soals', 'soals.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.avatar as soal_avatar'                      ,
                      'soals.pil1 as pil1_nim', 'pil1.name as pil1_name', 
                      'soals.pil2 as pil2_nim', 'pil2.name as pil2_name',
                      'soals.pil3 as pil3_nim', 'pil3.name as pil3_name', 
                      'soals.pil4 as pil4_nim', 'pil4.name as pil4_name'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(0)
                  ->limit(5)
                  ->get();

    $soals2 = DB::table('paket_soals')
                  ->leftJoin('soals2', 'soals2.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals2.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals2.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals2.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals2.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals2.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.name as soal_name'                      ,
                      'soals2.pil1 as pil1_nim', 'pil1.avatar as pil1_avatar', 
                      'soals2.pil2 as pil2_nim', 'pil2.avatar as pil2_avatar',
                      'soals2.pil3 as pil3_nim', 'pil3.avatar as pil3_avatar', 
                      'soals2.pil4 as pil4_nim', 'pil4.avatar as pil4_avatar'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(4)
                  ->limit(5)
                  ->get();

    $jawaban = DB::table('jawabans')
                  ->select('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'sudah')
                  ->where('nim', '=', $user->nim)
                  ->get()[0];

    $sudah = $jawaban->sudah;

    unset($jawaban->sudah);

    // $jawaban = $user->nim;
                  
    $soals = [
      'soals' => $soals1,
      'soals2' => $soals2,
      'jawaban' => $jawaban,
      'sudah' => $sudah
    ];
    

    return response()->json($soals, 200);
  }

  public function kuis2()
  {
    $user = Auth::user();

    $soals1 = DB::table('paket_soals')
                  ->leftJoin('soals', 'soals.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.avatar as soal_avatar'                      ,
                      'soals.pil1 as pil1_nim', 'pil1.name as pil1_name', 
                      'soals.pil2 as pil2_nim', 'pil2.name as pil2_name',
                      'soals.pil3 as pil3_nim', 'pil3.name as pil3_name', 
                      'soals.pil4 as pil4_nim', 'pil4.name as pil4_name'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(5)
                  ->limit(10)
                  ->get();

    $soals2 = DB::table('paket_soals')
                  ->leftJoin('soals2', 'soals2.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals2.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals2.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals2.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals2.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals2.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.name as soal_name'                      ,
                      'soals2.pil1 as pil1_nim', 'pil1.avatar as pil1_avatar', 
                      'soals2.pil2 as pil2_nim', 'pil2.avatar as pil2_avatar',
                      'soals2.pil3 as pil3_nim', 'pil3.avatar as pil3_avatar', 
                      'soals2.pil4 as pil4_nim', 'pil4.avatar as pil4_avatar'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(5)
                  ->limit(10)
                  ->get();

    $jawaban = DB::table('jawaban2s')
                  ->select('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 
                  'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20', 'sudah')
                  ->where('nim', '=', $user->nim)
                  ->get()[0];

    $sudah = $jawaban->sudah;

    unset($jawaban->sudah);

    // $jawaban = $user->nim;
                  
    $soals = [
      'soals' => $soals1,
      'soals2' => $soals2,
      'jawaban' => $jawaban,
      'sudah' => $sudah
    ];
    

    return response()->json($soals, 200);
  }

  public function kuis3()
  {
    $user = Auth::user();

    $soals1 = DB::table('paket_soals')
                  ->leftJoin('soals', 'soals.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.avatar as soal_avatar'                      ,
                      'soals.pil1 as pil1_nim', 'pil1.name as pil1_name', 
                      'soals.pil2 as pil2_nim', 'pil2.name as pil2_name',
                      'soals.pil3 as pil3_nim', 'pil3.name as pil3_name', 
                      'soals.pil4 as pil4_nim', 'pil4.name as pil4_name'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(15)
                  ->limit(15)
                  ->get();

    $soals2 = DB::table('paket_soals')
                  ->leftJoin('soals2', 'soals2.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals2.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals2.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals2.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals2.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals2.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.name as soal_name'                      ,
                      'soals2.pil1 as pil1_nim', 'pil1.avatar as pil1_avatar', 
                      'soals2.pil2 as pil2_nim', 'pil2.avatar as pil2_avatar',
                      'soals2.pil3 as pil3_nim', 'pil3.avatar as pil3_avatar', 
                      'soals2.pil4 as pil4_nim', 'pil4.avatar as pil4_avatar'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(15)
                  ->limit(15)
                  ->get();

    $jawaban = DB::table('jawaban3s')
                  ->select('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 
                  'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20',
                  'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30', 'sudah')
                  ->where(['nim' => $user->nim,
                           'tugas_ke' => '4.3'])
                  ->get()[0];



    $sudah = $jawaban->sudah;

    unset($jawaban->sudah);

    // $jawaban = $user->nim;
                  
    $soals = [
      'soals' => $soals1,
      'soals2' => $soals2,
      'jawaban' => $jawaban,
      'sudah' => $sudah
    ];
    

    return response()->json($soals, 200);
  }

  public function kuis4()
  {
    $user = Auth::user();

    $soals1 = DB::table('paket_soals')
                  ->leftJoin('soals', 'soals.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.avatar as soal_avatar'                      ,
                      'soals.pil1 as pil1_nim', 'pil1.name as pil1_name', 
                      'soals.pil2 as pil2_nim', 'pil2.name as pil2_name',
                      'soals.pil3 as pil3_nim', 'pil3.name as pil3_name', 
                      'soals.pil4 as pil4_nim', 'pil4.name as pil4_name'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(30)
                  ->limit(15)
                  ->get();

    $soals2 = DB::table('paket_soals')
                  ->leftJoin('soals2', 'soals2.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals2.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals2.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals2.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals2.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals2.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.name as soal_name'                      ,
                      'soals2.pil1 as pil1_nim', 'pil1.avatar as pil1_avatar', 
                      'soals2.pil2 as pil2_nim', 'pil2.avatar as pil2_avatar',
                      'soals2.pil3 as pil3_nim', 'pil3.avatar as pil3_avatar', 
                      'soals2.pil4 as pil4_nim', 'pil4.avatar as pil4_avatar'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(30)
                  ->limit(15)
                  ->get();

    $jawaban = DB::table('jawaban3s')
                  ->select('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 
                  'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20',
                  'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30', 'sudah')
                  ->where(['nim' => $user->nim,
                           'tugas_ke' => '4.4'])
                  ->get()[0];


    $sudah = $jawaban->sudah;

    unset($jawaban->sudah);

    // $jawaban = $user->nim;
                  
    $soals = [
      'soals' => $soals1,
      'soals2' => $soals2,
      'jawaban' => $jawaban,
      'sudah' => $sudah
    ];
    
    return response()->json($soals, 200);
  }

  public function kuis5()
  {
    $user = Auth::user();

    $soals1 = DB::table('paket_soals')
                  ->leftJoin('soals', 'soals.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.avatar as soal_avatar'                      ,
                      'soals.pil1 as pil1_nim', 'pil1.name as pil1_name', 
                      'soals.pil2 as pil2_nim', 'pil2.name as pil2_name',
                      'soals.pil3 as pil3_nim', 'pil3.name as pil3_name', 
                      'soals.pil4 as pil4_nim', 'pil4.name as pil4_name'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(30)
                  ->limit(15)
                  ->get();

    $soals2 = DB::table('paket_soals')
                  ->leftJoin('soals2', 'soals2.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals2.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals2.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals2.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals2.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals2.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.name as soal_name'                      ,
                      'soals2.pil1 as pil1_nim', 'pil1.avatar as pil1_avatar', 
                      'soals2.pil2 as pil2_nim', 'pil2.avatar as pil2_avatar',
                      'soals2.pil3 as pil3_nim', 'pil3.avatar as pil3_avatar', 
                      'soals2.pil4 as pil4_nim', 'pil4.avatar as pil4_avatar'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(30)
                  ->limit(15)
                  ->get();

    $jawaban = DB::table('jawaban3s')
                  ->select('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 
                  'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20',
                  'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30', 'sudah')
                  ->where(['nim' => $user->nim,
                           'tugas_ke' => '4.5'])
                  ->get()[0];


    $sudah = $jawaban->sudah;

    unset($jawaban->sudah);

    // $jawaban = $user->nim;
                  
    $soals = [
      'soals' => $soals1,
      'soals2' => $soals2,
      'jawaban' => $jawaban,
      'sudah' => $sudah
    ];
    
    return response()->json($soals, 200);
  }

  public function kuis6()
  {
    $user = Auth::user();

    $soals1 = DB::table('paket_soals')
                  ->leftJoin('soals', 'soals.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.avatar as soal_avatar'                      ,
                      'soals.pil1 as pil1_nim', 'pil1.name as pil1_name', 
                      'soals.pil2 as pil2_nim', 'pil2.name as pil2_name',
                      'soals.pil3 as pil3_nim', 'pil3.name as pil3_name', 
                      'soals.pil4 as pil4_nim', 'pil4.name as pil4_name'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(60)
                  ->limit(15)
                  ->get();

    $soals2 = DB::table('paket_soals')
                  ->leftJoin('soals2', 'soals2.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals2.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals2.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals2.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals2.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals2.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.name as soal_name'                      ,
                      'soals2.pil1 as pil1_nim', 'pil1.avatar as pil1_avatar', 
                      'soals2.pil2 as pil2_nim', 'pil2.avatar as pil2_avatar',
                      'soals2.pil3 as pil3_nim', 'pil3.avatar as pil3_avatar', 
                      'soals2.pil4 as pil4_nim', 'pil4.avatar as pil4_avatar'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(60)
                  ->limit(15)
                  ->get();

    $jawaban = DB::table('jawaban3s')
                  ->select('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 
                  'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20',
                  'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30', 'sudah')
                  ->where(['nim' => $user->nim,
                           'tugas_ke' => '4.6'])
                  ->get()[0];


    $sudah = $jawaban->sudah;

    unset($jawaban->sudah);

    // $jawaban = $user->nim;
                  
    $soals = [
      'soals' => $soals1,
      'soals2' => $soals2,
      'jawaban' => $jawaban,
      'sudah' => $sudah
    ];
    
    return response()->json($soals, 200);
  }

  public function kuis7()
  {
    $user = Auth::user();

    $soals1 = DB::table('paket_soals')
                  ->leftJoin('soals', 'soals.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.avatar as soal_avatar'                      ,
                      'soals.pil1 as pil1_nim', 'pil1.name as pil1_name', 
                      'soals.pil2 as pil2_nim', 'pil2.name as pil2_name',
                      'soals.pil3 as pil3_nim', 'pil3.name as pil3_name', 
                      'soals.pil4 as pil4_nim', 'pil4.name as pil4_name'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(75)
                  ->limit(15)
                  ->get();

    $soals2 = DB::table('paket_soals')
                  ->leftJoin('soals2', 'soals2.id', '=', 'paket_soals.soal_id')
                  ->leftJoin('users as soal', 'soals2.soal', '=', 'soal.nim')
                  ->leftJoin('users as pil1', 'soals2.pil1', '=', 'pil1.nim')
                  ->leftJoin('users as pil2', 'soals2.pil2', '=', 'pil2.nim')
                  ->leftJoin('users as pil3', 'soals2.pil3', '=', 'pil3.nim')
                  ->leftJoin('users as pil4', 'soals2.pil4', '=', 'pil4.nim')
                  ->select(
                      'soal.name as soal_name'                      ,
                      'soals2.pil1 as pil1_nim', 'pil1.avatar as pil1_avatar', 
                      'soals2.pil2 as pil2_nim', 'pil2.avatar as pil2_avatar',
                      'soals2.pil3 as pil3_nim', 'pil3.avatar as pil3_avatar', 
                      'soals2.pil4 as pil4_nim', 'pil4.avatar as pil4_avatar'
                    )
                  ->where('paket_soals.nim', '=', $user->nim)
                  ->orderBy('paket_soals.id', 'asc')
                  ->offset(75)
                  ->limit(15)
                  ->get();

    $jawaban = DB::table('jawaban3s')
                  ->select('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 
                  'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20',
                  'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30', 'sudah')
                  ->where(['nim' => $user->nim,
                           'tugas_ke' => '4.7'])
                  ->get()[0];


    $sudah = $jawaban->sudah;

    unset($jawaban->sudah);

    // $jawaban = $user->nim;
                  
    $soals = [
      'soals' => $soals1,
      'soals2' => $soals2,
      'jawaban' => $jawaban,
      'sudah' => $sudah
    ];
    
    return response()->json($soals, 200);
  }

  public function submit(Request $request)
  {
    try {
      $user = Auth::user();

      $data = json_decode($request->nyoba);

      $jawaban = Jawaban::where('nim', '=', $user->nim)->firstOrFail();

      $jawaban->q1 = $data[0];
      $jawaban->q2 = $data[1];
      $jawaban->q3 = $data[2];
      $jawaban->q4 = $data[3];
      $jawaban->q5 = $data[4];
      $jawaban->q6 = $data[5];
      $jawaban->q7 = $data[6];
      $jawaban->q8 = $data[7];
      $jawaban->q9 = $data[8];
      $jawaban->q10 = $data[9];

      $jawaban->sudah = 1;

      $jawaban->save();
      $tugas4['msg'] = "Berhasil submit.";
    } catch (Exception $e) {
      $tugas4['msg'] = "Ada masalah pada server.";
    }
    
    return response()->json(['success' => $tugas4], 200);
  }

  public function submit2(Request $request)
  {
    try {
      $user = Auth::user();

      $data = json_decode($request->nyoba);

      $jawaban = Jawaban2::where('nim', '=', $user->nim)->firstOrFail();

      $jawaban->q1 = $data[0];
      $jawaban->q2 = $data[1];
      $jawaban->q3 = $data[2];
      $jawaban->q4 = $data[3];
      $jawaban->q5 = $data[4];
      $jawaban->q6 = $data[5];
      $jawaban->q7 = $data[6];
      $jawaban->q8 = $data[7];
      $jawaban->q9 = $data[8];
      $jawaban->q10 = $data[9];
      $jawaban->q11 = $data[10];
      $jawaban->q12 = $data[11];
      $jawaban->q13 = $data[12];
      $jawaban->q14 = $data[13];
      $jawaban->q15 = $data[14];
      $jawaban->q16 = $data[15];
      $jawaban->q17 = $data[16];
      $jawaban->q18 = $data[17];
      $jawaban->q19 = $data[18];
      $jawaban->q20 = $data[19];

      $jawaban->sudah = 1;

      $jawaban->save();
    } catch (Exception $e) {
      $tugas4['msg'] = "Ada masalah pada server.";
    }
    
    $tugas4['msg'] = "Berhasil submit.";

    return response()->json(['success' => $tugas4], 200);
  }

  public function submit3(Request $request)
  {
    try {
      $user = Auth::user();

      $data = json_decode($request->nyoba);

      $jawaban = Jawaban3
      ::where('nim', '=', $user->nim)
      ->where('tugas_ke', '=', '4.7')->firstOrFail();

      if($jawaban->sudah == 1) {
        $tugas4['msg'] = "Anda sudah submit sebelumnya.";
        return response()->json(['success' => $tugas4], 200);
      }
      
      $jawaban->q1 = $data[0];
      $jawaban->q2 = $data[1];
      $jawaban->q3 = $data[2];
      $jawaban->q4 = $data[3];
      $jawaban->q5 = $data[4];
      $jawaban->q6 = $data[5];
      $jawaban->q7 = $data[6];
      $jawaban->q8 = $data[7];
      $jawaban->q9 = $data[8];
      $jawaban->q10 = $data[9];
      $jawaban->q11 = $data[10];
      $jawaban->q12 = $data[11];
      $jawaban->q13 = $data[12];
      $jawaban->q14 = $data[13];
      $jawaban->q15 = $data[14];
      $jawaban->q16 = $data[15];
      $jawaban->q17 = $data[16];
      $jawaban->q18 = $data[17];
      $jawaban->q19 = $data[18];
      $jawaban->q20 = $data[19];
      $jawaban->q21 = $data[20];
      $jawaban->q22 = $data[21];
      $jawaban->q23 = $data[22];
      $jawaban->q24 = $data[23];
      $jawaban->q25 = $data[24];
      $jawaban->q26 = $data[25];
      $jawaban->q27 = $data[26];
      $jawaban->q28 = $data[27];
      $jawaban->q29 = $data[28];
      $jawaban->q30 = $data[29];


      $jawaban->sudah = 1;

      $jawaban->save();
    } catch (Exception $e) {
      $tugas4['msg'] = "Ada masalah pada server.";
    }

    $tugas4['msg'] = "Berhasil submit.";

    return response()->json(['success' => $tugas4], 200);
  }
}
