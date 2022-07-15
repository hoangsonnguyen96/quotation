<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ListQuotation;
use App\Models\Credentials;
use App\Models\Banner;
class HomepageController extends Controller
{
    //
    public function index()
    {
        $banners = Banner::all();
        $banner = Banner::orderBy('id','ASC')->first();
        $credential = Credentials::first();
        $categories = Categories::with(['credential','listQuotations'])->get();
        return view('welcome', ['categories' => $categories, 'credential' => $credential, 'banners'=>$banners,'banner' =>$banner]);
    }

    public function category(Request $request)
    {
        $banners = Banner::all();
        $banner = Banner::orderBy('id','ASC')->first();
        $categories = Categories::all();
        $category = Categories::where('id',$request->id)->first();
        $credentials = Credentials::where('category_id',$category->id)->get();
        $listQuotation = ListQuotation::where('category_id',$category->id)->get();

        return view('frontend.category', ['categories' => $categories,
                                          'category' => $category,
                                          'credentials' => $credentials,
                                          'listQuotation' => $listQuotation,
                                          'banners'=>$banners,
                                          'banner' =>$banner]);

    }

    public function credentials(Request $request){

        $banners = Banner::all();
        $banner = Banner::orderBy('id','ASC')->first();
        $credential = Credentials::where('id',$request->id)->first();
        $categories = Categories::all();
        return view('frontend.credentials', ['categories' => $categories, 'credential' =>$credential, 'banners'=>$banners, 'banner' =>$banner]);
    }

    public function quotations(Request $request){

        $banners = Banner::all();
        $banner = Banner::orderBy('id','ASC')->first();
        $quotation = ListQuotation::where('id',$request->id)->first();
        $categories = Categories::all();
        return view('frontend.quotations', ['categories' => $categories, 'quotation' =>$quotation, 'banners'=>$banners,'banner' =>$banner]);
    }
}
