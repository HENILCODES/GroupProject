<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorys = Category::get()->toArray();
        $brands = Brand::get()->toArray();
        $products = Product::select('products.*','brands.name as brands','categorys.name as categorys')->join('brands','brands.id','products.brand_id')->join('categorys','categorys.id','products.id')->orderBy('products.id','asc')->get()->toArray();

        // $feature = $products->where('products.badge','feature')->get()->toArray();
        // $new = $products->where('products.badge','new')->get()->toArray();
        // $sale = $products->where('products.badge','sale')->get()->toArray();
        // dd($feature);
        return view('home',compact('categorys','brands','products'));
    }
}
