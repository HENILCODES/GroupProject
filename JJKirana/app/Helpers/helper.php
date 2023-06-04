<?php
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;

function totalProductItem($item,$value){
    $product = Product::where($item,$value)->count();
    return $product;
}
function getByBrandId($id){
    $brands = Brand::find($id)->toArray();
    return $brands;
}
function getByCategoryId($id){
    $category = Category::find($id)->toArray();
    return $category;
}
function getSettingByType($type)
{
    $setting = Setting::where('type',$type)->first();
    return json_decode($setting->value);
}
?>