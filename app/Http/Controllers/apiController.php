<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Log;

class apiController extends Controller
{
    //
    public function usPOP() {
        $data = Http::get('https://datausa.io/api/data?drilldowns=Nation&measures=Population');
        
        return $data->json();

        Log::info('This route works, it successfully returns the data from an external api');
    }
}
