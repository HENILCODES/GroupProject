<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

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
        $products = Product::select('products.*', 'brands.name as brands', 'categorys.name as categorys')->leftjoin('brands', 'brands.id', 'products.brand_id')->leftjoin('categorys', 'categorys.id', 'products.id')->orderBy('products.id', 'asc')->get()->toArray();

        $homeTopBanner = getSettingByType('home-top-banner');
        $homeCountDownOffer = getSettingByType('home-countdown-offer');
        $homePromo = getSettingByType('home-promo');

        return view('home', compact('categorys', 'brands', 'products', 'homeTopBanner', "homeCountDownOffer", "homePromo"));
    }
}
