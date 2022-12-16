<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charts;
use DB;
use Illuminate\Support\Facades\Http;

class ChartController extends Controller
{

    public function __construct()
    {
        $this->allProv = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi')->json();
    }

    public function grafik()
    {
        $data = [];
        $data['total_harga'] = Charts::select(DB::raw("CAST(SUM(total_harga) as int) as total_harga"))
        ->GroupBy(DB::raw("Month(updated_at)"))
        ->pluck('total_harga');
        
        $data['bulan'] = Charts::select(DB::raw("MONTHNAME(updated_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(updated_at)"))
        ->pluck('bulan');

        $data['all'] = $this->getCovid(); // all
        $data['pen'] = $this->covPenambahan();
        $data['prov'] = $this->getProv();
        $data['kasus'] = $this->getKasus();

        return view('charts.index', $data);
    }

    public function getCovid()
    {
        $response = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia')->json();
        return $response;
    }
    
    public function covPenambahan()
    {
        $response = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia/more')->json();

        $result = json_decode(json_encode($response), true);

        return $result;
    }

    public function getProv()
    {
        $response = $this->allProv;
        $prov = array();
        // foreach($group_membership as $username) {
        // $items[] = $username;
        // }

        for ($i = 0; $i < 34; $i++){
            $prov[] = $response[$i]['provinsi'];
        }
        return $prov;
    }
    
    public function getKasus()
    {
        
        $response = $this->allProv;
        $kasus = array();

        for ($i = 0; $i < 34; $i++){
            $kasus[] = $response[$i]['kasus'];
        }
        return $kasus;
    }
}
