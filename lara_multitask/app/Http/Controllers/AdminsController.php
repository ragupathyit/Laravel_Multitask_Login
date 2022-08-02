<?php

namespace App\Http\Controllers;

use App\Models\Admins;
//use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function loginadmin(){
        return view("loginadmin");
    }

    public function adminUser(Request $request){
        // $request->validate([
        //     'email'=>'required|email',
        //     'password'=>'required|min:8',
        // ]);

        $user = Admins::where('email','=',$request->email)->first();

        if($user){
            if($user->password=$request->password){
                $request->session()->put('userId', $user->id);
                $request->session()->put('adminname', $user->admin_name);
                $request->session()->put('useremail', $user->email);
                return redirect('comment-admin');
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
    // public function logout(){
    //     if (Session::has('userId')){
    //         Session::pull('userId');
    //         Session::pull('userRname');
    //         Session::pull('useremail');
    //     }
    //     return redirect('/admin')->with('success','Signout Successfully');
    // }

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

    public function show(Admins $admins)
    {
        //
    }

    public function edit(Admins $admins)
    {
        //
    }

    public function update(Request $request, Admins $admins)
    {
        //
    }

    public function destroy(Admins $admins)
    {
        //
    }
}
