<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Bank;
use App\Valuation;
use DB;
use Session;

class valuationRequestController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valuations = Valuation::all();

        return view('admin.valuation.valuation')->with('valuations',$valuations);
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
        $request->validate([
            'upi'      => 'required|max:100',
            'names'    => 'required|max:100|min:5',
            'tel'      => 'required|max:15|min:10',
            'province' => 'required',
            'district' => 'required',
            'sector'   => 'required',
            'village'  => 'required',
            'purpose'  => 'required',
        ]);

        $valuation = new Valuation;

        $valuation->upi = $request->upi;
        $valuation->names = $request->names;
        $valuation->tel = $request->tel;
        $valuation->email = $request->email;
        $valuation->province = $request->province;
        $valuation->district = $request->district;
        $valuation->sector = $request->sector;
        $valuation->village = $request->village;
        $valuation->bank_id = $request->bank_id;
        $valuation->company_id = $request->company_id;
        $valuation->purpose = $request->purpose;

        $valuation->save();

        return redirect()->back()->with('success','Thank you for your request we will contact you soon!');
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
        $valuation = valuation::find($id);

        $valuation->delete();

        return redirect()->back()->with('success', 'Valuation deleted successfully!');
    }
}
