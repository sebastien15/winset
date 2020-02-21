<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Detail;
use Session;
use DB;

class detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $property = Property::find($id);
        return view('admin/detail/detail')->with('property', $property);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = new Detail;

        $detail->detail        = $request->detail;
        $detail->property_id    = $request->property_id;

        $detail->save();
        $property_id = $request->property_id;

        return redirect(route('property.show',$property_id))->with('success', 'Details added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::findOrfail($id);
        $detail    = Detail::where('property_id',$id)->firstOrfail();

        return view('admin.detail.showDetail')->with('property', $property)
        ->with('detail', $detail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $detail = Detail::find($id);
       
        $detail->delete();
        $property_id = $request -> property_id;

        return redirect()->route('property.show', $property_id)->with('success', 'Details Deleted successfully');
    }
}
