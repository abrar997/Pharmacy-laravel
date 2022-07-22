<?php

namespace App\Http\Controllers\Products;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProductsController extends Controller
{
    //

    public  function AddProducts(Request $request)
    {

        $data = new Products();
        $data->name = $request->input('name');
        $data->price = $request->input('price');
        $data->company = $request->input('company');
        $data->categories = $request->input('categories');
        $data->image = $request->file('image')->store('products-image');
        $data->save();
        return $data;
    }
}
