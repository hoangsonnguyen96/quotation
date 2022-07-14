<?php

namespace App\Http\Controllers;

use App\Models\ListQuotation;
use App\Http\Requests\StoreListQuotationRequest;
use App\Http\Requests\UpdateListQuotationRequest;
use App\Models\Quotations;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;

class ListQuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listQuotation = ListQuotation::all();
        return view('admin.listquotation.index',['listQuotation' => $listQuotation]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categories::all();
        return view('admin.listquotation.create',['categories'=>$categories,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreListQuotationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListQuotationRequest $request)
    {
        //
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->store('public/quotation');
            ListQuotation::create([
                'name' => $request->name,
                'file' => $filename,
                'description' => $request->desc,
                'category_id' => $request->category,
                'created_by' => Auth::id()]);
            return back()->with('success', 'Add success!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListQuotation  $listQuotation
     * @return \Illuminate\Http\Response
     */
    public function show(ListQuotation $listQuotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListQuotation  $listQuotation
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $list = ListQuotation::find($request->id);
        $quotation = Quotations::where('id_list','=', $list->id)->get();
        $categories = Categories::all();
        return view('admin.listquotation.edit', ['quotation' => $quotation, 'list' => $list, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListQuotationRequest  $request
     * @param  \App\Models\ListQuotation  $listQuotation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListQuotationRequest $request, ListQuotation $listQuotation)
    {


        if ($request->ajax()) {
            Quotations::find($request->pk)
                ->update([
                    $request->name => $request->value
                ]);

            return response()->json(['success' => true]);
        }
        if ($request->file('file')) {
            $quotation = ListQuotation::findOrFail($request->id);
            $category = Categories::where('id', $quotation->category_id)->first();
            $file = $request->file('file');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->store('public/quotation');
            $quotation->update([
                'name' => $request->name,
                'total' => $request->total,
                'file' => $filename,
                'description' => $request->desc,
                'category_id' => $request->category,
                'created_by' => Auth::id()
            ]);
            return back()->with('success', 'Update success!');
        } else {
            $quotation = ListQuotation::findOrFail($request->id);
            $category = Categories::where('id', $quotation->category_id)->first();
            $quotation->update([
                'name' => $request->name,
                'total' => $request->total,
                'file' => $quotation->file,
                'description' => $request->desc,
                'category_id' => $request->category,
                'created_by' => Auth::id()
            ]);
            return back()->with('success', 'Update success!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListQuotation  $listQuotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request$request)
    {
        //
        $quotation = ListQuotation::findOrFail($request->id);
        $quotation->delete();
        return back()->with('success', 'Delete success!');
    }
}
