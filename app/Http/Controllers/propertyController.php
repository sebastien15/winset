<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Location;
use App\Detail;
use App\Imageproperty;
use App\Type;
use DB;
use Session;


class propertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::orderBy('id','DESC')->get();
        $locations  = Location::all();
        $types      = Type::all();

        return view('admin/property/allProperty')
                    ->with('properties', $properties)
                    ->with('locations', $locations)
                    ->with('types', $types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations  = Location::all();
        $types      = Type::all();

        return view('admin/property/createProperty')
                    ->with('locations', $locations)
                    ->with('types', $types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property                 = new Property;

        $property->price          = $request->price;
        $property->currency       = $request->currency;
        $property->status         = $request->status;
        $property->smallDesc      = $request->smallDesc;
        $property->bed            = $request->bed;
        $property->bath           = $request->bath;
        $property->sqmeter        = $request->sqmeter;
        $property->location_id    = $request->location_id;
        $property->type_id        = $request->type_id;

        $property->save();

        return redirect()->route('property.show',$property->id);
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

        return view('admin.property.singleProperty')->with('property', $property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property  = Property::find($id);
        $locations = Location::all();
        $types     = Type::all();
        
        return view('admin.property.editProperty')
                    ->with('property',$property)
                    ->with('locations', $locations)
                    ->with('types', $types);
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
        $property = Property::find($id);

        $property->price             = $request->price;
        $property->currency          = $request->currency;
        $property->status            = $request->status;
        $property->smallDesc         = $request->smallDesc;
        $property->bed               = $request->bed;
        $property->bath              = $request->bath;
        $property->sqmeter           = $request->sqmeter;
        $property->location_id       = $request->location_id;
        $property->type_id           = $request->type_id;

        $property->save();

        return redirect()->route('property.show',$property->id)->with('message','product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);

        $property->delete();

        return redirect()->route('property.index')->with('success','Property deleted successfully');
    }
}
