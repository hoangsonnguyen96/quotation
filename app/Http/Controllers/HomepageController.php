<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ListQuotation;
use App\Models\Credentials;
class HomepageController extends Controller
{
    //
    public function index()
    {
        $categories = Categories::with(['credential','listQuotations'])->get();
        return view('welcome', ['categories' => $categories]);
    }

    public function category(Request $request){

        $categories = Categories::all();
        $category = Categories::where('id',$request->id)->first();
        $credentials = Credentials::where('category_id',$category->id)->get();
        $listQuotation = ListQuotation::where('category_id',$category->id)->get();

        return view('frontend.category', ['categories' => $categories,
                                          'category' => $category,
                                          'credentials' => $credentials,
                                          'listQuotation' => $listQuotation,]);

    }
}
