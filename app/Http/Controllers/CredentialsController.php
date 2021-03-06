<?php

namespace App\Http\Controllers;

use App\Models\credentials;
use App\Models\Categories;
use App\Http\Requests\StorecredentialsRequest;
use App\Http\Requests\UpdatecredentialsRequest;
use App\Policies\CredentialsPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CredentialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $credentials = Credentials::all();
        return view('admin.credentials.index', ['credentials' => $credentials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Categories::all();
        return view('admin.credentials.create',['category'=> $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecredentialsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecredentialsRequest $request)
    {
        if($request->file('image') && $request->file('demo')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move('img/credentials', $filename);

            $fileDemo = $request->file('demo');
            $filenameDemo = date('YmdHi') . $fileDemo->getClientOriginalName();
            $fileDemo->store('public/credentials');

            Credentials::create(['images'=>$filename,
                                 'description'=>$request->description,
                                 'title'=>$request->title,
                                 'category_id'=>$request->category,
                                 'file' => $fileDemo->hashName(),
                                 'created_by'=> Auth::id()]);
            return back()->with('success', 'Add success!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\credentials  $credentials
     * @return \Illuminate\Http\Response
     */
    public function show(credentials $credentials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\credentials  $credentials
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //

        $credential = Credentials::find($request->id);
        $category = Categories::all();
        return view('admin.credentials.edit',['credential' => $credential,'category'=> $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecredentialsRequest  $request
     * @param  \App\Models\credentials  $credentials
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecredentialsRequest $request, credentials $credentials)
    {

        $credential = Credentials::findOrFail($request->id);
        $category = Categories::where('id',$credential->category_id)->first();
        if($request->file('image') && $request->file('demo')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move('img/credentials', $filename);

            $fileDemo = $request->file('demo');
            $filenameDemo = date('YmdHi') . $fileDemo->getClientOriginalName();
            $fileDemo->store('public/credentials');

            $credential->update(['images'=>$filename,
                                'description'=>$request->description,
                                'title'=>$request->title,
                                'category_id'=>$request->category,
                                'file' => $fileDemo->hashName(),
                                'created_by'=> Auth::id()]);

            return back()->with('success', 'Update success!');
        }
        elseif($request->file('image')){

            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move('img/credentials', $filename);

            $credential->update(['images'=>$filename,
                                'description'=>$request->description,
                                'title'=>$request->title,
                                'category_id'=>$request->category,
                                'file' => $credential->file,
                                'created_by'=> Auth::id()]);
            return back()->with('success', 'Update success!');
        }
        elseif($request->file('demo')){
            $fileDemo = $request->file('demo');
            $filenameDemo = date('YmdHi') . $fileDemo->getClientOriginalName();
            $fileDemo->store('public/credentials');

            $credential->update(['images'=>$credential->images,
                                'description'=>$request->description,
                                'title'=>$request->title,
                                'category_id'=>$request->category,
                                'file' => $fileDemo->hashName(),
                                'created_by'=> Auth::id()]);
            return back()->with('success', 'Update success!');

        }
        else{
            $credential->update(['images'=>$credential->images,
                                'description'=>$request->description,
                                'title'=>$request->title,
                                'category_id'=>$request->category,
                                'file' => $credential->file,
                                'created_by'=> Auth::id()]);
            return back()->with('success', 'Update success!');
        }

        // if($request->file('image') && $request->file('demo')){
        //     $file= $request->file('image');
        //     $filename= date('YmdHi').$file->getClientOriginalName();
        //     $file->move('img/credentials', $filename);

        //     $fileDemo = $request->file('demo');
        //     $filenameDemo = date('YmdHi') . $fileDemo->getClientOriginalName();
        //     $fileDemo->store('public/credentials');

        //     Credentials::create(['images'=>$filename,
        //                          'description'=>$request->description,
        //                          'title'=>$request->title,
        //                          'category_id'=>$request->category,
        //                          'file' => $filenameDemo,
        //                          'created_by'=> Auth::id()]);
        //     return back()->with('success', 'Add success!');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\credentials  $credentials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $credential = Credentials::findOrFail($request->id);
        $credential->delete();
        return back()->with('success', 'Delete success!');
    }
}
