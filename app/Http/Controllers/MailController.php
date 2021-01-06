<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mails=DB::table('mails')
            ->where('mails.room_id','=',auth()->user()->room_id)
            ->join('users','mails.room_id','=','users.room_id')
            ->select('mails.room_id','category','ArrivalTime','statu','collection_time','name',)
            ->get();

        return view('tenant.mail',['mails'=>$mails]);
    }
    public function admin_index(){

        $mails=Mail::where('id','>',"0")->get();
        $rooms=Room::where('id','<>',"null")->get();
        return view('admin.mails.index',['mails'=>$mails,'rooms'=>$rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $room=Room::where('id','=',$request->id)->get();
        return view('admin.mails.create',['room'=>$room]);
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
            'category'	=>	'required|max:3',
            'ArrivalTime' => 'required|date',
            'statu' => 'required|boolean',
        ]);
        Mail::create([
            'room_id'=>$request['room_id'],
            'category'=>$request['category'],
            'ArrivalTime'=>$request['ArrivalTime'],
            'statu'=>$request['statu'],

        ]);
        return redirect()->route('admin.mails.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mails=Mail::find($id);

        return view('admin.mails.edit',['mails'=>$mails]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mail=Mail::find($id);
        $this->validate($request,	[

            'category' => 'required|max:11|',
            'statu' => 'required|boolean',
            'ArrivalTime'=>'required|date',


        ]);
        $mail->update($request->all());
        return redirect()->route('admin.mails.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mail=Mail::find($id);
        $mail->delete();
        return redirect()->route('admin.mails.index');
    }
}
