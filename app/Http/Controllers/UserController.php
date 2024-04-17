<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function view(){
        return view('login');
    }

    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:3']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/login');
    }

    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginName' => 'required',
            'loginPassword' => 'required'
        ]);

        if (auth()->attempt(['name' => $incomingFields['loginName'],'password' => $incomingFields['loginPassword'] ])) {
            $request->session()->regenerate();
        }
        else {
            return redirect()->back()->withInput()->withErrors('Invalid username/password');
        }

        // return redirect('/');

    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
