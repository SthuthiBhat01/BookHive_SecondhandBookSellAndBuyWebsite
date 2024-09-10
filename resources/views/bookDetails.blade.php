<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #fce055;
background-image: linear-gradient(319deg, #fce055 0%, #256eff 37%, #46237a 100%);


        }
        .book-card {
            display: flex;
            background-color: #f8f9fa;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            width: 86%;
    height: 86%;
    margin-top: 1%;
    margin-left: 7%;
    position: fixed;
        }
        .book-card img {
            margin-top: 4rem;
           max-width: 728px;
            margin-right: 5rem;
        }
        .btn-outline-info {
            font-size: 1.1rem;
            font-weight: bold;
            color: #1E272E;
            border-color: #1E272E;
        }
        .btn-outline-info:hover {
            background-color: #1E272E;
            color: #fff;
        }
        *{
            margin-top: 5rem;
        }
        
    </style>
</head>
<body>
    <div class="book-card">
        <img src="{{ asset('storage/images/' . $post->image) }}" alt="Book Image">
        <div>
            <h2>Book Name: {{ $post->book_title }}</h2>
            <p>Author: {{ $post->author_name }}</p>
            <p>Book Type: {{ $post->book_type }}</p>
            <p>Description: {{ $post->book_description }}</p>
            <p>Price: {{ $post->price }}</p>
            <p>Condition: {{ $post->condition }}</p>
            <p>Sellers name: {{ $post->name }}</p>
            <p>Pincode: {{ $post->pincode }}</p>
            <p>Need more information(like availability) about this Book?</p>
           
           
            
            <button type="button" class="btn btn-light-green"><a href="https://wa.me/{{ $post->phone_number }}">Chat with seller</a></button>
            {{-- <button><a href="{{ url('checkout/' . $post->id) }}">Checkout</a> --}}
                <button>  <a href="{{ URL::to('checkout/' . $post->id) }}">BUY NOW</a>

            </button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
