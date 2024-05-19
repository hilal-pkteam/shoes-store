<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.admin-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'address' => 'required|string',
            'phone' => 'required|numeric|digits:11',
            'password' => 'required|string|min:8|max:16',
        ]);

        if($validated)
        {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->phone_no = $request->phone;
            $user->password = $request->password;

            if($user->save())
            {
                dd("User created successfully");
            }else{
                return redirect()->back()->with('error', 'Something went wrong e.g user creation failed');
            }
        }
    }

    // Displaying login form 
    public function login()
    {
        return view('admin.admin-login');
    }

    // Login user
    public function loginUser(Request $request)
    {
        $validated = $request->validate([
            'email' =>'required|email',
            'password' => 'required|string|min:8|max:16',
        ]);

        if(Auth::attempt($validated))
        {
            return redirect('/admin/dashboard')->with('success', 'Loged In Successful');
        }else
        {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    // Admin Dashboard
    public function dashboard()
    {
        return view('admin.admin-dashbaord');
    }

}
