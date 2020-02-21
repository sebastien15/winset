<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use Session;
use DB;

class typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();

        return view('admin.type.type')->with('types' ,$types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Type;

        $request->validate([
            'name'  => 'required',
        ]);

        $type->name    = $request->name;

        $type->save();

        return redirect()->route('type.index')
                        ->with('success','Property type added');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::find($id);

        $type->delete();

        return redirect()->route('type.index')->with('success','type deleted successfully');
    }
}
