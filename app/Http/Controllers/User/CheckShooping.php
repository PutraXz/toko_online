<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ShoopingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckShooping extends Controller
{
    public function __invoke()
    {
        $shop = ShoopingDetail::where('user_id', Auth::user()->id)->where('status', 0)->get();
        $db =  $shop->sum('jumlah_harga');
        dd($shop);
        return view('users.check_out', compact('shop', 'db'));
    }
}
