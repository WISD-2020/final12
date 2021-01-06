<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $costs=DB::table('costs')
          ->where('costs.room_id','=',auth()->user()->room_id)
          ->join('users','costs.room_id','=','users.room_id')
          ->select('costs.room_id','waterbill','consumption','public_e',
                           'rent','w_status','e_status','r_status','cost_month','name',)
          ->get();


        return view('tenant.cost',['costs'=>$costs]);

    }
    public function admin_index()
    {

        $costs=Cost::where('id','>',"0")->get();
        $rooms=Room::where('id','<>',"null")->get();
        return view('admin.costs.index',['costs'=>$costs,'rooms'=>$rooms]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $room=Room::where('id','=',$request->id)->get();
        return view('admin.costs.create',['room'=>$room]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

        Cost::create([
            'room_id' => $request['room_id'],
            'waterbill' => $request['waterbill'],
            'consumption'=>$request['consumption'],
            'public_e'=>$request['public_e'],
            'rent'=>$request['rent'],
            'w_status'=>$request['w_status'],
            'e_status'=>$request['e_status'],
            'r_status'=>$request['r_status'],
            'cost_month'=>$request['cost_month'],
        ]);
        return redirect()->route('admin.cost.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function show(Cost $cost)
    {

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

            'consumption' => 'required|max:11|',
            'public_e' => 'required|max:11|',

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
    public function destroy($id)
    {
        $cost=Cost::find($id);

        $cost->delete();
        return redirect()->route('admin.cost.index');
    }
}
