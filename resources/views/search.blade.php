<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfile/fresh.css')}}">
    <style>
               body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            position: relative;
            
            
        }

        body::before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 70px; /* Adjust this value to change the height of the background */
            background-color: #fce055;
background-image: linear-gradient(319deg, #fce055 0%, #256eff 37%, #46237a 100%);
 /* Change this value to your desired background color */
            z-index: -1;
        }

        .product_wrap {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 70px; /* Adjust padding to accommodate the background */
        }

        .product_one {
            display: flex;
            flex-direction: row;
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            max-width: 500px; /* Set maximum width for the card */
        }

        .freshimg {
            width: 30%;
            object-fit: cover;
        }

        .product_two {
            padding: 20px;
            width: 70%;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Align content vertically */
        }

        .product_two h5 {
            margin: 0;
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .product_two p {
            margin: 5px 0;
            color: #666;
            font-size: 16px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            align-self: flex-end; /* Align button to the bottom of the card */
        }

        .btn:hover {
            background-color: #45a049;
        }

        .search1 {
            /* margin-top: 20px; */
            margin-bottom: 20px;
            font-size: 24px;
            color: #fff; /* Change text color to white */
            text-align: center;
        }

    </style>
    <title>Document</title>
</head>
<body>
  
    <h4 class="search1">Searched Books</h4>

<div class="product_wrap" id="product-container">
    
    <div class="row">
        @foreach($posts as $key => $post)
            <div class="product_one">
                <img class="freshimg" src="{{ asset('storage/images/' . $post->image) }}" alt="image picture">
                <div class="product_two">
                    <h5>{{ $post->book_title }}</h5>
                    <p>Author: {{ $post->author_name }}<br>
                        Book Type: {{ $post->book_type }}<br>
                        Price: {{ $post->price }}<br>
                        Condition: {{ $post->condition }}</p>
                   
                </div>
            </div>
            @if(auth()->check())
            <a href="{{ URL::to('buydetails/' . $post->id) }}" class="btn btn-primary">Book Details</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary">Login to view details</a>
        @endif
        @endforeach
    </div>
</div>
</body>
</html>
