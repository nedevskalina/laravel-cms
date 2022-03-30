<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Settings;
use App\Models\Categories;

class FrontEndController extends Controller
{

    public function index()
    {
        $products = Products::take(8)->get();
        $settings = Settings::first();
        $categories = Categories::getTreeHP();


        $data = ['products' => $products, 'settings' => $settings, 'categories' => $categories];
        return view('frontend.index')->with($data);
    }
}
