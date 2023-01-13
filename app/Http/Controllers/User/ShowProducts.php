<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ShowProducts extends Controller
{
    public function __invoke()
    {
        Products::all();
        return view('users.products');
    }
}
