<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interestedProperty;
use App\Property;
use Session;
use DB;

class interestController extends Controller
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
        $interests = interestedProperty::orderBy('id', 'DESC')->paginate(20);


        return view('admin/interest/index')->with('interests', $interests);
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
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_tel' => 'required',
            'customer_message' => 'required',
        ]);

        $interest = new interestedProperty;

        $interest->customer_name    = $request->customer_name;
        $interest->customer_email   = $request->customer_email;
        $interest->customer_tel     = $request->customer_tel;
        $interest->customer_message = $request->customer_message;
        $interest->property_id      = $request->property_id;

        $interest->save();

        return redirect()->back()->with('success','We are pleased with your message, We will contact you soon!!!');
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
