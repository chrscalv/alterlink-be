<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use validator;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all(), 200);
    }

    public function login()
    {
        //
    }

    public function registerPublic(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name'          => 'required|unique:users',
            'email'         => 'required|email',
            'password'      => 'required|min:8|reqex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-8])(?=.*?[#?!@$%^&*-]).{6,}$/'
        ]); 
        if($validation->fails()){
            return response()->json([
                'error' => $validation->errors
            ]);
        }

        $data   = $request->only('name', 'email','password');
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        
    }

    public function store()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        
    }
}
