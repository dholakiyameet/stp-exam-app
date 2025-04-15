<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    //  return view('auth.login');

    public function show_login()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        dd(1);
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $fields['username'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Wrong credentials'
            ]);
        }

    }

    public function show_register()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // dd('1',$request->confirmed);
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'password' => 'required|confirmed',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        $user = User::create($data);
        return redirect()->route('show_login');


        
    }

}
