<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login(){
        return view('user.login');
    }

    public function check_login(Request $request){

    }

    public function logout(){

    }
    public function register(){
        return view('user.register');
    }

    public function check_register(Request $request){
//        $credentials = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);
        $request->validate([
            'password'=> ['required'],
            'confirm_password' => ['required','same:password'],
        ]);
        $request->merge(['password' => bcrypt($request->password)]);
//        dd($request->all());
        User::create($request->all());
        return redirect()->route('user.index')->with('success','Thêm mới thành công');

    }



    public function profile(){

    }

}
