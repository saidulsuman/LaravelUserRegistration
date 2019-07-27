<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserManageController extends Controller
{
    public function index()
    {
        $users= User::latest()->get();
        return view('user.userShow',compact(['users']));
    }
    public function edit($id)
    {
      $user= User::find($id);
      return view('user.edit',compact('user'));
    }
    public function update($id)
    {
        $user= User::find($id);
        $user->update([
            'email' => request('email'),
            'userName' => request('userName'),
            'firstName' => request('firstName'),
            'lastName' => request('lastName'),
            'gender' => request('gender'),
            'phoneNumber' => request('phoneNumber'),
            'location' => request('location'),

        ]);
        return 'Updated';
    }
    public function delete($id)
    {
      $user=User::find($id);
     $user->delete();
     return 'Deleted';
    }

}
