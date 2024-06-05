<?php

use App\Models\Category;
use App\Models\ProductImage;

function getCategories() {
    return Category::orderBy('name','ASC')
    ->with('sub_category')
    ->orderBy('id','DESC')
    ->where('status',1)
    ->where('showHome', 'Yes')
    ->get();
}

function Numberformat($number)
{
    return number_format($number, 0,',','.');
}

function DateFormat($date, $format = "D-MM-Y HH:m:s")
{
    return \Carbon\Carbon::parse($date)->isoFormat($format);
}

function getProductImage($productId) {
    return ProductImage::where('product_id',$productId)->first();
}

?>