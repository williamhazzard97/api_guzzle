<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Log;


class apiController extends Controller
{
    //this route will retrieve the data from the following external api provided by datausa.io
    public function usPop() {
        $data = Http::get('https://datausa.io/api/data?drilldowns=Nation&measures=Population');
        
        return $data->json();

        Log::info('This route works, it successfully returns the data from an external api');
    }

    public function usPopDiff() {

        $year2019 = Http::get('https://datausa.io/api/data?drilldowns=Nation&measures=Population&Year=2019')['Population'];

        $year2013 = Http::get('https://datausa.io/api/data?drilldowns=Nation&measures=Population&Year=2013')['Population'];

        $populationDiff = $year2019 - $year2013;
        Log::info('This route works');
        return $populationDiff;
    }
}
