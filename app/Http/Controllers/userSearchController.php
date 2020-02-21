<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Imageproperty;
use App\Location;
use App\Type;
use DB;

class userSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $state           = $request->status;
        $searchInput     = $request->searchInput;
        $imageproperties = Imageproperty::all();
        $types            = Type::all();
        $locations        = Location::all();


        $properties = Property::orderBy('id', 'DESC')
                                ->where('status', '=' , $state)
                                ->orWhere('smallDesc','LIKE','%'.$searchInput.'%')
                                ->orWhere('bed','LIKE','%'.$searchInput.'%')
                                ->orWhere('bath','LIKE','%'.$searchInput.'%')
                                ->orWhere('sqmeter','LIKE','%'.$searchInput.'%')
                                ->orWhere('price','LIKE','%'.$searchInput.'%')->paginate(10);

        return view('search')->with('state', $state)
                             ->with('properties',$properties)
                             ->with('imageproperties',$imageproperties)
                             ->with('types',$types)
                             ->withLocations($locations);
    }
    
    // An added function to display 
    public function advanced(Request $request)
    {
        
        $imageproperties  = Imageproperty::all();
        $types            = Type::all();
        $locations        = Location::all();

        //variables

        $location         = $request->location;
        $type             = $request->type;
        $status           = $request->status;
        $beds             = $request->beds;
        $baths            = $request->baths;
        $minPrice         = $request->minPrice;
        $maxPrice         = $request->maxPrice;

        //logic
        $properties = Property::orderBy('id', 'DESC')
                              ->where('location_id','LIKE','%'.$location.'%')
                              ->where('type_id','LIKE','%'.$type.'%')
                              ->where('status','LIKE','%'.$status.'%')
                              ->where('bed','>','%'.$beds.'%')
                              ->where('bath','>','%'.$baths.'%')
                              ->where('price','>','%'.$minPrice.'%')
                              ->where('price','<','%'.$maxPrice.'%')->paginate(30);
        // $properties       = ;

        return view('advancedSearch')->with('properties',$properties)
                                     ->with('imageproperties',$imageproperties)
                                     ->with('types',$types)
                                     ->withLocations($locations);
    }
    
    // advanced search
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
        return view('search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
