<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('cssfile/bookStore.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookStore</title>
    <script src="{{ asset('js/buy.js') }}"></script>
    
</head>
<style>
    .navbar {
  position: fixed;
  top: 8%;
  left: 0;
  width: 6rem;
  height: 50%;
  background-color: #f5f5f5;
  border-right: 1px solid #ddd;
}

.navbar ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.navbar li {
  margin-bottom: 10px;
}

.navbar a {
  display: block;
  padding: 10px;
  color: #333;
  text-decoration: none;
}

.navbar a:hover {
  background-color: #ddd;
}
    /* CSS for the body */
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

nav {
    background-color: #333;
    color: #fff;
    padding: 15px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

nav ul li {
    float: left;
}

nav ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    background-color: #111;
}

.dashboard {
    display: flex;
    justify-content: space-around;
    margin: 20px;
}



</style>
<body>
    <nav>
        
        <ul>
           <li><a class="active" href="/">Home</a></li>
           <li><a href="/my-adds">My Ads</a></li>
           <li><a href="/myorders">My Orders</a></li>
           <li><a href="/seller-orderdetails">Order Details</a></li>
           
        </ul>
     </nav>
     {{-- {{auth()->user()->name}} --}}

    <h1 class="booksold">List Of Books You POSTED !</h1></li>

  


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="d-flex row ">
        @foreach($posts2 as $post)
        <div class="col-md-4" id="small" data-aos="zoom-out">
            
            <div class="card mb-4 shadow-sm d-flex">

            
                <div class="card-body">
                <img src="{{ asset('storage/images/' . $post->image) }}" height="200">
                    <h3 class="card-title">{{ $post->book_title }}</h3>
                     {{-- <p class="card-text">{{ $post->book_description }}</p> --}}
                    <!-- <p class="card-text">Author: {{ $post->author_name }}</p> -->
                    <p class="card-text">Condition: {{ $post->condition }}</p>
                    <p class="card-text">Price: {{ $post->price }}</p>
                    <p class="card-text">Book Type: {{ $post->book_type }}</p> 
                    {{-- <p class="card-text">Sellers name: {{ $post->name }}</p> --}}
                    <!-- <p class="card-text">phone number: {{ $post->phone_number }}</p> -->
                    <!-- <p class="card-text">Pincode: {{ $post->pincode }}</p>  -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</body>
</html>