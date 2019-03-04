<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Product;
use App\Models\Subcat;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    public function GetHome()
    {
        $pro = Product::all();
        $cat = Cat::all();
        return view('home', ['product' => $pro, 'cat' => $cat]);
    }

    public function search()
    {
        $searchname = Request::input('search');
        $product=Product::where('title','like','%'.$searchname.'%')->get();
        $cat = Cat::all();
        return view('home',['product' => $product, 'cat' => $cat]);
    }
}
