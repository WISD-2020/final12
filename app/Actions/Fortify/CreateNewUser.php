<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'room_id'=>['required','string'],
            'account'=>['required','string','max:20'],

            'id_number'=>['required','string','max:20'],

            'gender'=>['required','string'],
            'phone'=>['required','string','max:20'],
            'address'=>['required','string','max:50'],
            'birthday'=>['required','date'],
            'StartTime'=>['required','date'],
            'EndTime'=>['required','date'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'room_id'=>$input['room_id'],
            'account'=>$input['account'],
            'id_number'=>$input['id_number'],
            'gender'=>$input['gender'],
            'phone'=>$input['phone'],
            'address'=>$input['address'],
            'birthday'=>$input['birthday'],
            'StartTime'=>$input['StartTime'],
            'EndTime'=>$input['EndTime'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
