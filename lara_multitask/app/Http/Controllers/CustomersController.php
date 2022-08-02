<?php

namespace App\Http\Controllers;

use App\Models\Customers;
//use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function logincustomer(){
        return view("logincustomer");
    }

    public function adminUser(Request $request){
        // $request->validate([
        //     'email'=>'required|email',
        //     'password'=>'required|min:8',
        // ]);

        $user = Customers::where('email','=',$request->email)->first();

        if($user){
            if($user->password=$request->password){
                $request->session()->put('userId', $user->id);
                $request->session()->put('customername', $user->customer_name);
                $request->session()->put('useremail', $user->email);
                return redirect('comment-customer');
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }

    public function comments(){
        if(session()->get('useremail')){
            return redirect('/comments');
            //return view('comments');
        }
        // else{
        //     return redirect('/logout-admin');
        // }
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Customers $customers)
    {
        //
    }

    public function edit(Customers $customers)
    {
        //
    }

    public function update(Request $request, Customers $customers)
    {
        //
    }

    public function destroy(Customers $customers)
    {
        //
    }
}
