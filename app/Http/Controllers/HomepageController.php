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
        $credential = Credentials::first();
        $categories = Categories::with(['credential','listQuotations'])->get();
        return view('welcome', ['categories' => $categories, 'credential' => $credential]);
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

    public function credentials(Request $request){
        
        $credential = Credentials::where('id',$request->id)->first();
        $categories = Categories::all();
        return view('frontend.credentials', ['categories' => $categories, 'credential' =>$credential]);
    }

    public function quotations(Request $request){
    
        $quotation = ListQuotation::where('id',$request->id)->first();
        $categories = Categories::all();
        return view('frontend.quotations', ['categories' => $categories, 'quotation' =>$quotation]);
    }
}
