<?php

namespace App\Http\Controllers;

use App\Models\Quotations;
use App\Http\Requests\StoreQuotationsRequest;
use App\Http\Requests\UpdateQuotationsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Categories;

class QuotationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quotations = Quotations::all();
        return view('admin.quotations.index', ['quotations' => $quotations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.quotations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuotationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuotationsRequest $request)
    {
        if ($request->file('demo')) {
            // dd($request->all());
            $file = $request->file('demo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->store('public/avatars');
            Quotations::create([
                'services' => $request->service,
                'unit' => $request->unit,
                'quantity' => $request->quantity,
                'unit_price' => $request->unit_price,
                'total' => $request->total,
                'demo' => $filename,
                'category_id' => '1',
                'created_by' => Auth::id()
            ]);
            return back()->with('success', 'Add success!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotations  $quotations
     * @return \Illuminate\Http\Response
     */
    public function show(Quotations $quotations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quotations  $quotations
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //

        $quotation = Quotations::find($request->id);
        return view('admin.quotations.edit', ['quotation' => $quotation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuotationsRequest  $request
     * @param  \App\Models\Quotations  $quotations
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuotationsRequest $request)
    {

        $quotation = Quotations::findOrFail($request->id);
        $category = Categories::where('id', $quotation->category_id)->first();
        if ($request->file('demo')) {
            $file = $request->file('demo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->store('public/avatars');
            $quotation->update([
                'services' => $request->service,
                'unit' => $request->unit,
                'quantity' => $request->quantity,
                'unit_price' => $request->unit_price,
                'total' => $request->total,
                'demo' => $filename,
                'category_id' => $category->id,
                'created_by' => Auth::id()
            ]);
            return back()->with('success', 'Update success!');
        } else {
            $quotation->update([
                'services' => $request->service,
                'unit' => $request->unit,
                'quantity' => $request->quantity,
                'unit_price' => $request->unit_price,
                'total' => $request->total,
                'demo' => $quotation->demo,
                'category_id' => $category->id,
                'created_by' => Auth::id()
            ]);
            return back()->with('success', 'Update success!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotations  $quotations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $quotation = Quotations::findOrFail($request->id);
        $quotation->delete();
        return back()->with('success', 'Delete success!');
    }
}
