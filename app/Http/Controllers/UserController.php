<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users=User::where('id',$request->user()->id)->get();
    return view('admin.members.index',['users'=>$users]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    static public function contact(){
        $contact=DB::table('users')
            ->join('contactpeople','users.contact_id','=','contactpeople.id')
            ->where('users.id',auth()->user()->id)
            ->select('contact_name','contact_phone')
            ->get();
        return $contact;
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(User $user)
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect('login');
        }

    }

    //判斷身分別後進行頁面跳轉
    public function home()
    {

        if (Auth::check() && auth()->user()->id_type==1) {

            return redirect('admin');
        }
        elseif(Auth::check() && auth()->user()->id_type==0){
            return redirect('tenant');
        }
        else{
            return redirect('login');
        }

    }
}
