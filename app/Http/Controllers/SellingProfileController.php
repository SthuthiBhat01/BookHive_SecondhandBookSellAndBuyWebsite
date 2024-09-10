<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post2;
use App\Models\Checkout2;
use App\Models\User;

class SellingProfileController extends Controller
{
    public function showBooks()
    {
        // Retrieve only the posts of the currently logged-in user
        $posts = Post2::where('user_id', auth()->user()->id)->get();

        // Now you can use $posts
        return view('my-adds', ['posts2' => $posts]);
    }

    public function showBookss()
    {
        // You can modify this method to retrieve and display specific book details
        return view('bookStore');
    }
}