<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imageproperty;
use App\partnersImage;
use App\reviewsImage;
use App\userSearch;
use App\ImageAgent;
use App\Valuation;
use App\Property;
use App\Location;
use App\Company;
use App\Partner;
use App\Detail;
use App\Agent;
use App\Bank;
use App\Type;
use Session;
use DB;
class indexController extends Controller
{
    public function index(){
        $properties = Property::orderBy('id', 'DESC')->paginate(10);
        $locations  = Location::all();
        $imageproperties = Imageproperty::all();

        return view ('index')
                    ->with('properties',$properties)
                    ->with('locations',$locations)
                    ->with('imageproperties',$imageproperties);
    }
    public function aboutus(){
        return view ('aboutus');
    }
    public function contactus(){
        return view ('contactus');
    }
    public function propertyDescription($id){
        $property = Property::find($id);
        $propertyStatus = $property->status;
        $propertyLocation = $property->location;
        $detail = Detail::where('property_id', $id)->firstOrFail();
        $alikeProperties = Property::where('status','LIKE','%'. $propertyStatus .'%')
                                    ->orWhere('location_id','LIKE','%'. $propertyLocation .'%')
                                    ->paginate(5);
        $imagesproperties = Imageproperty::all();

        return view ('propertyDescription')->with('property', $property)
                                           ->with('alikeProperties', $alikeProperties)
                                           ->with('imagesproperties', $imagesproperties)
                                           ->with('detail', $detail);
    }
    public function properties(){
        $imagesproperties = Imageproperty::all();
        $properties       = Property::orderBy('id', 'DESC')->paginate(20);
        $types            = Type::all();
        $locations        = Location::all();

        return view ('properties')->withProperties($properties)
                                  ->withImageproperties($imagesproperties)
                                  ->withTypes($types)
                                  ->withLocations($locations);
    }
    public function search(){
        $properties = Property::orderBy('id', 'DESC')->paginate(20);
        $locations  = Location::all();
        $imagesproperties = Imageproperty::all();

        return view('search')
                    ->with('properties',$properties)
                    ->with('locations',$locations)
                    ->with('imagesproperties',$imagesproperties);
    }
    public function propertyValuation(){
        // $companies = Company::all();
        // $banks     = Bank::all();

        // return view('propertyValuation')->withCompanies($companies)
        //                                 ->withBanks($banks); 
        return ('<p style="font-size:32px; margin-left:20%;margin-top:40vh;">we are working on this page it will be available soon!!!</p>');
    }
}