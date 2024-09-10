<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Post2;
use App\Models\Post3;



class AuthManager extends Controller
{
    function login()
    {
        if(Auth::check()){
            return redirect(route('home'));

        }
        return view('login');
    }
    function registration()
    {
        if(Auth::check()){
            return redirect(route('home'));

        }
        return view('registration');
    }

    
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

             // Store user_id in the session
        $request->session()->put('user_id', $user->id);
    
            if ($user->usertype == 'user') {
                // Redirect to the user's dashboard
                return redirect()->intended(route('home'))->with('success', 'Login is successful');
            } elseif ($user->usertype == 'admin') {
                // Redirect admin to a different route or page
                return redirect()->intended(route('admindashboard'))->with('success', 'Login is successful');
            }
    
   
        }
    
        return redirect(route('login'))->with('error', 'Login details are not valid');
    }
    

    function registrationPost(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'lowercase','unique:'.User::class],
            'password' => ['required'],
        ]);
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

         // Set the default usertype to 'user'
    $data['usertype'] = 'user';

    // Check if the email is for an admin
    if (strpos($request->email, 'admin@gmail.com') !== false) {
        $data['usertype'] = 'admin';
    }
        $User = User::create($data);

if(!$User){
    return redirect(route('registration'))->with("error","Registration failed");
    }
    return redirect(route('login'))->with("success","Registration is successfull");
}
   




function sell(){

    $users=User::all();

    return view('sell',['users'=>$users]);
    
}

function buy(){

   

   $posts = Post2::all();
    return view('buy', ['posts' => $posts]);
    
}




function logout(){
    Session:flush();
    Auth::logout();
    return redirect(route('home'))->with("success","Logout is successfull");

}

public function home() {
    $posts = Post2::orderBy('created_at','desc')->take(5)->get();
    return view('welcome', compact('posts'));
}

public function admin_user()
{
 $users = User::all();
    return view('admin_userdetails', ['users' => $users]);
}

public function adminbookdetails()
{
    $posts = Post2::all();
    return view('admin_book_details', ['posts' => $posts]);

}

    }
    




