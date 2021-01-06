<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tenant.repair');
    }
    public function admin_index()
    {
        $repairs=Repair::where('id','>',"0")->get();

        return view('admin.repairs.index',['repairs'=>$repairs]);
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
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show(Repair $repair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repairs=Repair::find($id);

        return view('admin.repairs.edit',['repairs'=>$repairs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $repair=Repair::find($id);
        $this->validate($request,	[

            'raintenance_staff' => 'max:20',



            'repairs_statu'=>'max:2',


        ]);
        $repair->update($request->all());
        return redirect()->route('admin.repairs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $repair=Repair::find($id);

        $repair->delete();
        return redirect()->route('admin.repair.index');
    }
}
