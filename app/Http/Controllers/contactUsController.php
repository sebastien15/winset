<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;
use Session;

class contactUsController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Contact;
        $request->validate([
            'names'   =>'required',
            'email'  =>'required',
            'message'=>'required',
        ]);

        $message->names = $request->names;
        $message->email = $request->email;
        $message->institution = $request->institution;
        $message->title = $request->title;
        $message->message = $request->message;

        $message->save();

        return redirect(route('contactus'))->with('success','thank you for your message, We will contact you soon!!!');
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
