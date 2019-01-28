<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ads;

class AdsController extends Controller
{
    public function ads() {
        return response()->json(Ads::first());
    }
}
