<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\View\View;
use App\Models\Post;
use App\Models\Post2;
use App\Models\Post3;
use App\Models\Checkout2;

class AdminLoginController extends Controller
{


// public function adminDashboard()
// {
//     // Add logic to display the admin dashboard
//     $posts = Post2::all();
//     return view('admindashboard', ['posts2' => $posts]);
// }

public function adminDashboard()
    {
        // You can fetch any additional data you want for the dashboard here
        
    // Fetch the total count of books and users



         // Pass the counts to the view
    return view('admindashboard');
    }

    public function adminUserDetails()
    {
        $users = User::all();
        return view('admin_userdetails', compact('users'));
    }

    public function adminBookDetails()
    {
        $posts = Post2::all();
        return view('admin_book_details', compact('posts'));
    }

    public function adminOrderDetails(){
        $checkout2=Checkout2::all();
        return view ('admin_orderdetails',compact("checkout2"));
    }

    }

