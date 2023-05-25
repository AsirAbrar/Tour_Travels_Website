<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class CustomerAuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('customer')->attempt($credential)) {
            return redirect()->route('home')->with('success', 'Login Successfully');
        } else {            
            return redirect()->route('login')->with('error', 'Information is not correct!');
        }
    }

    public function registration()
    {
        return view('registration');
    }

    public function registration_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'mobile' => 'required',
            'age' => 'required',
            'password' => 'required',
            'confirm_password' =>'required|same:password'
        ]);

        $password = Hash::make($request->password);

        $obj = new Customer();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->mobile = $request->mobile;
        $obj->age = $request->age;
        $obj->password = $password;
        $obj->save();


        return redirect()->route('login')->with('success', 'Registration Done!!');

    }



    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('home')->with('success', 'Logout successfully!!');
    }




    public function book_submit(Request $request)
    {
        $request->validate([
            'location' => 'required',
            'date' => 'required',
            'qty' => 'required'
        ]);

        $obj = new Book();
        $obj->location = $request->location;
        $obj->date = $request->date;
        $obj->qty = $request->qty;
        $obj->save();


        return redirect()->route('home')->with('success', 'Booking Done!!');

    }




}
