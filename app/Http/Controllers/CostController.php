<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\User;
use Illuminate\Http\Request;

class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costs=Cost::where('id','>',"0")->get();

        return view('admin.costs.index',['costs'=>$costs,]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function show(Cost $cost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $costs=Cost::find($id);

        return view('admin.costs.edit',['costs'=>$costs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cost=Cost::find($id);
        $this->validate($request,	[
            'room_id'	=>	'required|max:20',
            'waterbill'	=>	'required|max:11',
            'consumption' => 'required|max:11|',
            'public_e' => 'required|max:11|',
            'rent' =>'max:11|',
            'w_status'=>'required|boolean',
            'e_status'=>'required|boolean',
            'r_status'=>'required|boolean',
            'cost_month'=>'required|date',

        ]);
        $cost->update($request->all());
        return redirect()->route('admin.cost.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cost $cost)
    {
        //
    }
}
