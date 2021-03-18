<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product\Products;

class siteController extends Controller
{
   
    public function index()
    {
        $getData = Products::limit(6)->where('product_status',0)->get();
        return view('website.home',compact('getData'));
    }
}
