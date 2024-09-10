<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('cssfile/index.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/bookStore.css') }}">
    <title>User Profile</title>
    <style>
        /* Your custom styles can go here */
        /* I'll provide basic styling for the buttons and container */
        .container {
            margin: 0 auto;
            max-width: 800px;
            padding: 20px;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #1E272E;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #34495E;
        }
        h1 {
            font-size: 36px;
            color: #1E272E;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 24px;
            color: #1E272E;
            margin-bottom: 20px;
        }
        body{
            
            background-color: #663dff;
background-image: linear-gradient(319deg, #beb9d1 0%, #b37cce 37%, #e2b5d1 100%);
 
        }
    </style>
</head>
<body>
  

    <div class="container">
        <img src="/images/profile.png" alt="Profile Icon">
        <h1>{{auth()->user()->name}} Profile</h1>
                <a  href="/" class="btn">Home</a>
                <a href="/my-adds" class="btn">My Adds</a>
                <a href="/myorders" class="btn">My Orders</a>
               <a href="/seller-orderdetails"class="btn">Order Details</a>
        
    </div>
</body>
</html>