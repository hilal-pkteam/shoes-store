<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;

class UserController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('admin.user.admin-dashbaord', ['items' => $items]);
    }

    public function create()
    {
        return view('admin.user.admin-create');
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
            $user->password = Hash::make($request->password);

            if($user->save())
            {
                return redirect('/admin/dashboard')->with('success', 'User created successfully');
            }else{

                return redirect()->back()->with('error', 'Something went wrong e.g user creation failed');
            }
        }
    }

    // Displaying login form 
    public function login()
    {
        return view('admin.user.admin-login');
    }

    // Login user
    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' =>'required|email',
            'password' => 'required|string|min:8|max:16',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/admin/dashboard')->with('success', 'Loged In Successful');
        }else{
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    // Logout user 
    public function logout()
    {
        Auth::logout();

        return redirect('admin/admin-login')->with('success', 'Logged Out Successful');
    }

}
