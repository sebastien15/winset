<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imageproperty;
use App\Property;
use Session;
use DB;

class imagePropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'property_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $propertyLocation = $request->location;
        $property_id = $request->property_id;

        $property_image = new Imageproperty;

        $property_image->property_id = $request->property_id;   

        $image_name = time().$propertyLocation.'.'.request()->property_image->getClientOriginalExtension();

        request()->property_image->move(public_path('images/properties'), $image_name);

        $property_image -> name = $image_name;

        $property_image->save();
        
        $images = Imageproperty::where('id',$property_id)->get();
        return redirect()->route('imageProperty.show', $property_id)
                            ->with('success','image uploaded successfully')
                            ->with('images',$images);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::where('id', $id)->first();
        $images   = Imageproperty::where('property_id',$id)->get();

        return view ('admin.property.image.addImage')
                    ->with('property',$property)
                    ->with('images', $images);
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
    public function destroy($id)
    {
        $image = imageProperty::find($id);

        $image->delete();

        return redirect()->back()->with('success','image deleted successfully');
    }
}
