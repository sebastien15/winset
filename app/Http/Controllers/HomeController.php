<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Company;
use App\Valuation;
use App\Location;
use App\Contact;
use App\Partner;
use App\Bank;
use App\Type;
use Session;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::all();
        $valuations = Valuation::all();
        $locations = Location::all();
        $companies = Company::all();
        $contacts = Contact::all();
        $partners = Partner::all();
        $banks = Bank::all();
        $types = Type::all();

        return view('home')->with('properties',$properties)
                           ->with('valuations',$valuations)
                           ->with('locations',$locations)
                           ->with('companies',$companies)
                           ->with('contacts',$contacts)
                           ->with('partners',$partners)
                           ->with('banks',$banks)
                           ->with('types',$types);
    }
}
