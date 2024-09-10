<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminSignupController extends Controller
{
    public function adminDisplay():View{
        return view('adminsignup');
    }

    public function adminPost(Request $request){
        // echo '<pre>';
        // print_r($request->all());
        // echo '<pre>';
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'lowercase','unique:'.User::class],
            'password' => ['required'],
        ]);
        
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'usertype'=>'admin',
        ]);
        $user->save();
        return redirect('login');

    }
}



    
