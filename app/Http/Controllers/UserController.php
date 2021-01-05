<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    use PasswordValidationRules;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users=DB::table('users')
            ->leftjoin('contactpeople','users.contact_id','=','contactpeople.id')
            ->select('users.id','name','room_id','account','gender','email','phone','id_number','contact_name','contact_phone')
            ->get();

    return view('admin.members.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
//    public function contact($id){
//        $contacts=DB::table('users')
//            ->join('contactpeople','users.contact_id','=','contactpeople.id')
//            ->where('users.id',$id)
//            ->select('contact_name','contact_phone')
//            ->get();
//
//        return view('admin.member.index',$contacts);
//    }
    public function store(Request $request)
    {
        $this->validate($request,	[
            'name'	=>	'required|min:3|max:20',
            'email'	=>	'required|email|unique:users',
            'room_id' => 'required|max:20',
            'account' => 'required|max:20|unique:users',
            'id_number' =>'required|min:10|max:10|unique:users',
            'phone'=>'required|max:20',
            'address'=>'required|max:50',
            'birthday'=>'required|date',
            'StartTime'=>'required|date',
            'EndTime'=>'required|date',
            'password'=>$this->passwordRules(),
        ]);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'room_id'=>$request['room_id'],
            'account'=>$request['account'],
            'id_number'=>$request['id_number'],
            'gender'=>$request['gender'],
            'phone'=>$request['phone'],
            'address'=>$request['address'],
            'birthday'=>$request['birthday'],
            'StartTime'=>$request['StartTime'],
            'EndTime'=>$request['EndTime'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('admin.member.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $shows=DB::table('users')
            ->where('rooms.id','=',auth()->user()->room_id)
            ->join('rooms','rooms.id','=','room_id')
            ->select('name','room_id','account','gender','email','phone','address','birthday','StartTime','EndTime',
                'room_price','room_type')
            ->get();

        return view('tenant.users_show',['shows'=>$shows]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);

        return view('admin.members.edit',['user'=>$user]);
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
        $user=User::find($id);
        $this->validate($request,	[
            'name'	=>	'required|min:3|max:20',
            'email'	=>	'required|email|unique:users',
            'room_id' => 'required|max:20',
            'account' => 'required|max:20|unique:users',
            'id_number' =>'required|min:10|max:10|unique:users',
            'phone'=>'required|max:20',
            'address'=>'required|max:50',
            'birthday'=>'required|date',
            'StartTime'=>'required|date',
            'EndTime'=>'required|date',
            'password'=>$this->passwordRules(),
        ]);
        $user->update($request->all());
        return redirect()->route('admin.member.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);

        $user->delete();
        return redirect()->route('admin.member.index');
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
