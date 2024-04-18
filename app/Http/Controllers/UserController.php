<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function register(Request $request){

        $incomingFields = $request->validate([
            'name' => ['required'],
            'lname' => ['nullable'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'family_situation' => ['required'],
            'accepts_marketing' => ['nullable', 'boolean'],
            'accepts_terms' => ['required', 'boolean', Rule::in('accepts_terms', '1')],
            'accepts_surveys' => ['nullable', 'boolean'],
            'password' => ['required']
        ]);


        //if ($request->password !== $request->re_password){
        //    return redirect()->back()->withInput()->withErrors('Passwords don\'t match');
        //}

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');

    }

    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginName' => 'required',
            'loginPassword' => 'required'
        ]);

        if (auth()->attempt(['email' => $incomingFields['loginName'],'password' => $incomingFields['loginPassword'] ])) {
            $request->session()->regenerate();
        }
        else {
            return redirect()->back()->withInput()->withErrors('Invalid username/password');
        }

        return redirect('/');

    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
