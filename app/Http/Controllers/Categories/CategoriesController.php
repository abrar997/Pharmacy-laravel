<?php

namespace App\Http\Controllers\Categories;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    //
    public function AddCateg(Request $request)
    {
        $data = new Categories();
        $data->name = $request->input('name');
        $data->company = $request->input('company');
        $data->save();
        return $data;
    }

    public function AllCateg()
    {
        $all = Categories::all();
        return $all;
    }
}
