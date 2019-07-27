<?php


namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class UserRegisterController extends Controller
{
    public function index()
    {
        return view('user.register');
    }
    public function register()
    {
        $this->validate(request(),[
            'email'=>'required|string|email|max:100|unique:users',
            'userName'=>'required|string|max:15',
            'firstName'=>'required|string|max:15',
            'lastName'=>'required|string|max:15',
            'gender'=>'required',
            'phoneNumber'=>'required|max:15',
            'location'=>'required',
            'password'=>'required|alphaNum|min:6'
        ]);
       User::create([
           'email'=>request('email'),
           'userName'=>request('userName'),
           'firstName'=>request('firstName'),
           'lastName'=>request('lastName'),
           'gender'=>request('gender'),
           'phoneNumber'=>request('phoneNumber'),
           'location'=>request('location'),
           'password'=>bcrypt(request('password'))
       ]);
        return "Registerd";
        //return request()->all();
    }
}
