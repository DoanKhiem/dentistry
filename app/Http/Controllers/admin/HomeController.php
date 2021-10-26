<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{

    public function index(){
        return view('admin.dashboard');
    }
    public function login(){
        return view('admin.login');
    }

    public function loginPost(Request $request){

        // dd(Auth::attempt($request->only('email','password')));
       if (Auth::attempt($request->only('email','password'))){
            return view('admin.dashboard');
       }
       echo 'sai';
            

        // $user = User::where('email','=',$request->email)->first();
        // if($user){
        //     if(Hash::check($request->password,$user->password)){
        //         return view('admin.dashboard');
        //     }
        //     else{
        //         echo 'sai mật khẩu';
        //     }
        // }else{
        //     echo 'sai tài khoản';
        // }
    }

    public function register(){
        return view('admin.register');
    }

    public function registerPost(Request $request){
//        dd($request->all());

        // $request->merge(['passwordHash' => Hash::make($request->password)]);

        $request->merge(['password' => bcrypt($request->password)]);
        
        User::create($request->all());

        // User::create([
        //     'first_name'=>$request->first_name,
        //     'last_name'=>$request->last_name,
        //     'email'=>$request->email,
        //     'password'=>bcrypt($request->password),
        //     'address'=>$request->address,
        //     'phone'=>$request->phone,
        //     'status'=>$request->status,
        // ]);

        return redirect()->route('admin.index')->with('success','Thêm mới thành công');

    }
}
