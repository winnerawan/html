<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use DB;
use App\App;

class AppsController extends Controller
{
    public function getApps() {
        return response()->json(App::all());
    }

    
    
}
