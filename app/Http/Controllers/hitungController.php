<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use App\Models\kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class hitungController extends Controller
{
    public function hitung(Request $request){

        $kriteria = kriteria::sum('bobot');
        $bobotKriteriaC1 = DB::table('kriteria')->where('kode' ,'C1')->value('bobot');
        $bobotKriteriaC2 = DB::table('kriteria')->where('kode' ,'C2')->value('bobot');
        $bobotKriteriaC3 = DB::table('kriteria')->where('kode' ,'C3')->value('bobot');
        $bobotKriteriaC4 = DB::table('kriteria')->where('kode' ,'C4')->value('bobot');
        $bobotKriteriaC5 = DB::table('kriteria')->where('kode' ,'C5')->value('bobot');
 
        
        $bobot1 = $bobotKriteriaC1/$kriteria;
        $bobot2 = $bobotKriteriaC2/$kriteria;
        $bobot3 = $bobotKriteriaC3/$kriteria;
        $bobot4 = $bobotKriteriaC4/$kriteria;
        $bobot5 = $bobotKriteriaC5/$kriteria;

        // $bobot1 = 4/$kriteria;
        // $bobot2 = 5/$kriteria;
        // $bobot3 = 4/$kriteria;
        // $bobot4 = 4/$kriteria;
        // $bobot5 = 3/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];


        $produk = alternatif::get();
        $data = alternatif::orderby('alternatif', 'asc')->get();

        $minC1 = alternatif::min('harga');
        $maxC1 = alternatif::max('harga');
        $minC2 = alternatif::min('rate_umur');
        $maxC2 = alternatif::max('rate_umur');
        $minC3 = alternatif::min('review');
        $maxC3 = alternatif::max('review');
        $minC4 = alternatif::min('size');
        $maxC4 = alternatif::max('size');
        $minC5 = alternatif::min('user_download');
        $maxC5 = alternatif::max('user_download');

        $C1min =[
            'alternatif' => $minC1,
        ];
        $C1max =[
            'alternatif' => $maxC1,
        ];
        $C2min =[
            'alternatif' => $minC2,
        ];
        $C2max =[
            'alternatif' => $maxC2,
        ];
        $C3min =[
            'alternatif' => $minC3,
        ];
        $C3max =[
            'alternatif' => $maxC3,
        ];
        $C4min =[
            'alternatif' => $minC4,
        ];
        $C4max =[
            'alternatif' => $maxC4,
        ];
        $C5min =[
            'alternatif' => $minC5,
        ];
        $C5max =[
            'alternatif' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatif' => $hasil,
        ];

        return view('spk', ['title' => "Perhitungan"],compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));
    }
}
