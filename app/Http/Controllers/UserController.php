<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $userData = User::all();
        // return view('main/user', ['userData' => $userData]);
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20'
        ]);
        // $email = $request->input('email');
        // $password = $request->input('password');
        if(!Auth::attempt($credential)){
            return redirect()->back()->withErrors('Invalid Credential!');
        }

        // if(!Auth::attempt(['user_email' => $email, 'user_password' => $password])){
        //     return redirect()->back()->withErrors('Invalid Credential!');
        // }

        return redirect()->route('/');
    }

    public function index_register(){
        return view('main.register');
    }

    public function index_login(){
        return view('main.login');
    }

    public function register(Request $request){
        $credential = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
            'confirm' => 'required|same:password',
            'terms' => 'required'
        ]);

        $newUser = new User();
        $newUser->user_name = $request->input('username');
        $newUser->email = $request->input('email');
        $newUser->password = Hash::make($request->input('password'));
        $newUser->user_role = 'Member';
        $newUser->save();

        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
