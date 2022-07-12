<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HomepageController extends Controller
{
    //
    public function index()
    {
        $categories = Categories::all();
        return view('welcome', ['categories' => $categories]);
    }
}
