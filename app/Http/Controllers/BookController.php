<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Checkout2;
use App\Models\User;
use App\Models\Post2;
use App\Models\Post3;



class BookController extends Controller
{

    public function bookStore(Request $req)
    {
        

        //             echo '<pre>';
        // print_r($req->all());
        // echo '<pre>';

        // Validate the incoming request data
        $req->validate([
                    'book_title' => 'required|string|max:255',
                    'price' => 'required|numeric|min:0',
                    'book_description' => 'required',
                    'author_name' => 'required',
                    'condition' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'book_type' => 'required',
                    'name' => 'required',
                    'phone_number' => 'required|digits:10',
                    'pincode' => 'required|digits:6',
                    
                    
                    
                ]);
                
        // Handle file upload
        if ($req->hasFile('image')) {
            $image=$req->image;
            $name=$image->getClientOriginalName();
            $image->storeAs('public/images',$name);
        }
        
        
        //insert data in database
        $post=new Post2;
        $post->user_id = auth()->user()->id;
        $post->image=$name;
        $post->book_title=$req->book_title;
        $post->price=$req->price;
        $post->book_description=$req->book_description;
        $post->author_name=$req->author_name;
        $post->condition=$req->condition;
        $post->book_type=$req->book_type;
        $post->name=$req->name;
        $post->phone_number=$req->phone_number;
        $post->pincode=$req->pincode;
        
        $post->save();
        
      //  After storing the book, redirect to the book details page
        // return redirect('/bookStore/{id}'.$post->id);
        return redirect()->route('home');
    }

    public function showBooks()
{
    // Retrieve only the posts of the currently logged-in user
    $posts = Post2::where('user_id', auth()->user()->id)->get();

    // Now you can use $posts
    return view('my-adds', ['posts2' => $posts]);
}

public function showAdds(){
    return view ('bookStore');
}
public function myOrders()
{
    // Retrieve orders for the currently logged-in user (buyer)
    $buyerId = auth()->user()->id;
    $checkout2 = Checkout2::where('user_id', $buyerId)->get();

    // Now you can use $checkout2 to pass the data to the view
    return view('my-orders', compact('checkout2'));
}

public function sellerOrders()
{
    try {
        // Get the currently logged-in seller's posts
        $sellerPosts = Post2::where('user_id', auth()->user()->id)->get();

        // Initialize an array to store buyer information
        $buyerInfo = [];

        // Loop through each post to get the associated buyers
        foreach ($sellerPosts as $post) {
            // Get the buyers for each post
            $buyers = Checkout2::where('book_id', $post->id)->with('user')->get();

            // Add buyer information to the array
            foreach ($buyers as $buyer) {
                $buyerInfo[] = [
                    'buyer_name' => $buyer->user->name,
                    'buyer_phone' => $buyer->phone_number,
                    'book_title' => $post->book_title,
                    'book_price' => $post->price, // Include the book price
                    'book_image' => $post->image,
                    // Add other relevant information as needed
                ];
            }
        }

        // Now $buyerInfo contains information about buyers for each book

        // Pass $buyerInfo to the view
        return view('seller-orderdetails', ['buyerInfo' => $buyerInfo]);
    } catch (\Exception $e) {
        // Handle the exception (e.g., log it, show an error message, etc.)
        return view('error'); // You might want to create a specific error view
    }
}




    public function buyShow()
    {
        
   $posts = Post2::all();
   return view('buy', ['posts' => $posts]);
        
        

}

    
public function buy(Request $req, $id)
{
    // Implement the buying process here
}


public function buyNow($id){
    $post=Post2::find($id);
    return view('bookDetails',compact('post'));
}

public function checkout($id) {
    $post = Post2::find($id);
    return view('checkout', compact('post'))->with('sellerPhoneNumber', $post->seller_phone_number);
}


        //             echo '<pre>';
        // print_r($request->all());
        // echo '<pre>';



        public function checkoutpost(Request $request)
{
    // Validate the form data
    $request->validate([
        'fname' => ['required','string', 'max:255'],
        'lname' => ['required','string', 'max:255'],
        'phone' => ['required','numeric', 'digits:10'],
        'seller_id' => ['required'],
        'user_id' => ['required'],
        'book_id' => ['required'],
        'address' => ['required','string', 'max:255'],
        'state' => ['required','string', 'max:255'],
        'pincode' => ['required','numeric', 'digits:6'],
    ]);

    // Get the seller_id, buyer_id, and book_id from the form
    $seller_id = $request->input('seller_id');
    $buyer_id = $request->input('user_id');
    $book_id = $request->input('book_id');

    // Create a new Checkout record in the database
    $checkout = Checkout2::create([
        'seller_id' => $seller_id,
        'user_id' => $buyer_id,
        'book_id' => $book_id,
        'fname' => $request->fname,
        'lname' => $request->lname,
        'phone_number' => $request->phone,
        'address' => $request->address,
        'state' => $request->state,
        'pincode' => $request->pincode,
    ]);

    

    // Redirect to the home page with a success message
    return redirect()->route('myOrders');
}




public function search(Request $req)
        {
            $search = $req->input('search');
        
            $posts = Post2::query()
                ->where('book_title', 'LIKE', "%{$search}%")
                ->get();
        
            return view('search', ['posts' => $posts]);
        }
        
    }
