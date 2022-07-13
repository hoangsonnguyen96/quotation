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
        return view('admin.credentials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecredentialsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecredentialsRequest $request)
    {
        //
       // dd($request->all());
        if($request->file('file')){
            $file= $request->file('file');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move('img/credentials', $filename);
            Credentials::create(['images'=>$filename, 'description'=>$request->description, 'created_by'=> Auth::id()]);
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
        return view('admin.credentials.edit',['credential' => $credential]);
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
        if($request->file('file')){
            $file= $request->file('file');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move('img/credentials', $filename);
            $credential->update(['images'=>$filename, 'description'=>$request->description, 'created_by'=> Auth::id(), 'category_id'=>$category->id]);

            return back()->with('success', 'Update success!');
        }
        else{
            $credential->update(['images'=>$credential->images, 'description'=>$request->description, 'created_by'=> Auth::id(), 'category_id'=>$category->id]);
            return back()->with('success', 'Update success!');
        }
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
