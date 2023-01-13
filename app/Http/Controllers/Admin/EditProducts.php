<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class EditProducts extends Controller
{
    public function __invoke($id)
    {
        $nani = Products::whereId($id)->first();
        // dd($nani);
        return view('admin.edit-product', compact('nani'));
    }
}
