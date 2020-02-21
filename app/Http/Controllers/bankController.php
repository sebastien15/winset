<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Bank;
class bankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::all();

        return view('admin.bank.bank')->with('banks' ,$banks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $bank = new Bank;

        $request->validate([
            'name'  => 'required',
            'tel'   => 'required',
            'email' => 'required',
            'tel'   => 'required',
        ]);

        $bank->name    = $request->name;
        $bank->email   = $request->email;
        $bank->website = $request->website;
        $bank->tel     = $request->tel;

        $bank->save();

        return redirect()->route('bank.index')
                        ->with('success','bank added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bank = Bank::find($id);

        $bank->delete();

        return redirect()->route('bank.index')->with('success','Bank deleted successfully');
    }
}
