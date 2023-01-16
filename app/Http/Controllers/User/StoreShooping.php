<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ShoopingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
class StoreShooping extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $product = Products::find($id);

        $shopp = new ShoopingDetail();
        $shopp->product_id = $id;
        $shopp->user_id = Auth::id();
        $shopp->jumlah = $request->jumlah;
        $shopp->jumlah_harga = $product->price * $request->jumlah;
        $test = $shopp->save();
        alert()->success('Pesanan Sukses Masuk Keranjang', 'Success');
        return redirect('check-out');
    }
}
