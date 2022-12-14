<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charts;
use DB;
use Illuminate\Support\Facades\Http;

class ChartController extends Controller
{
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
}
