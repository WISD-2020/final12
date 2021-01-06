<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $repairs=DB::table('repairs')
            ->where('repairs.room_id','=',auth()->user()->room_id)
            ->join('users','repairs.room_id','=','users.room_id')
            ->select('repairs.room_id','repair_content','return_date','repairs.id','name',)
            ->get();

        return view('tenant.repair',['repairs'=>$repairs]);
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
    public function create(Request $request)
    {
        $repair=DB::table('repairs')
            ->where('repairs.room_id','=',auth()->user()->room_id)
            ->select('room_id')
            ->get();
        return view('tenant.repair.create',['repair'=>$repair]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'room_id' => 'required|max:20',
            'repair_content'=>'required|max:255',
            'return_date'=>'required|date',
        ]);

        Repair::create([
            'room_id'=>$request->room_id,
            'repair_content'=>$request->repair_content,
            'return_date'=>$request->return_date,
        ]);
        return redirect('repair.index');

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
    public function admin_edit($id){
        $repairs=Repair::find($id);

        return view('admin.repairs.edit',['repairs'=>$repairs]);
    }
    public function edit($id)
    {

        return view('tenant.repair.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

    }
    public function admin_update(Request $request, $id)
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
    public function admin_destroy($id){
        $repair=Repair::find($id);
        $repair->delete();
        return redirect()->route('admin.repairs.index');
    }
    public function destroy($id)
    {
        $repair=Repair::find($id);
        $repair->delete();
        return redirect()->route('repair.index');

    }
}
