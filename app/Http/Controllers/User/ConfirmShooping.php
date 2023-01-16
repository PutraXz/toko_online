<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ShoopingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmShooping extends Controller
{
    public function __invoke()
    {
        $shop = ShoopingDetail::where('user_id', Auth::user()->id)->where('status', 0)->get();
        $shop->status = 1;
        $shop->update();

        
    }
}
