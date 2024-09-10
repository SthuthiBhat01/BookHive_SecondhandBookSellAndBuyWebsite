<!DOCTYPE html>
<html lang="en">
<head>
  
<link rel="stylesheet" href="{{asset('cssfile/index.css')}}">
{{-- <link rel="stylesheet" href="{{asset('cssfile/bookStore.css')}}"> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy a Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/5v8fZZQxGJZ1uYqDGkNvGtQZqSxDV+o9F86mS2mYiYiGJZg/q1DG" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Dosis:wght@500&family=Exo+2&family=Satisfy&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{asset('cssfile/header.css')}}">
    <style>
      
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
        .book-card {
            background-color: #f8f9fa;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            width: 20rem;
            height: 30rem;
        }
        .whatsapp-logo {
    width: 20px;
    height: 20px;
    margin-right: 5px;
}
.btn-light-green {
    background-color: #73f086; /* light green color */
    color: black; /* black text color */
}
h4.mb-4 {
    font-size: 24px; /* adjust font size */
    color: #4a4a4a; /* adjust font color */
    font-weight: bold; /* adjust font weight */
    margin-bottom: 16px; /* adjust margin bottom */
}
.row1 {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* This will create three columns */
    gap: 10px; /* This is the gap between the grid items */
}
body{
  background-color: #70a1ff;
background-image: linear-gradient(315deg, #70a1ff 0%, #c2c0c0 74%);
}


    </style>
</head>
<body>

         



    <!-- ===toogle=== -->

      <!-- addsssss hereeeee -->
    

      <header class="header container-fluid">
        <div class="nav-bar container">
            <div class="first-nav row align-items-center justify-content-between">
                <div class="col-md-10 d-flex justify-content-between align-items-center"> <!-- Added d-flex class -->
                    <form class="d-flex col-md-4" action="{{ route('search') }}" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" required>
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    @auth
                    <div class="login">
                        <a id="log" href="{{route('logout')}}">
                            <button class="button-21" role="button">Logout</button></a>
                    </div>
                    <div class="login">
                        <a id="sell" href="{{route('sell')}}">
                            <button class="custom-btn btn-3" role="button">SELL BOOKS</button></a>
                    </div>
                    @else
                    <div class="login">
                        <a id="log" href="{{route('login')}}">
                            <button class="button-21" role="button">Login</button></a>
                    </div>
                    @endauth
                    @auth
                    <h6 class="fas fa-user-circle">{{auth()->user()->name}}</h6>
                    @endauth
                    <div class="login">
                        <a id="log" href="{{route('home')}}">
                            <button class="button-21" role="button">Home</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    


  
  <div class="container">
  <h6 class="mb-4">𝙱𝚞𝚢 𝚂𝚎𝚌𝚘𝚗𝚍 𝙷𝚊𝚗𝚍 𝙱𝚘𝚘𝚔𝚜, 𝚄𝚜𝚎𝚍 𝙱𝚘𝚘𝚔𝚜 𝚒𝚗 𝚐𝚛𝚎𝚊𝚝 𝚌𝚘𝚗𝚍𝚒𝚝𝚒𝚘𝚗 𝚊𝚝 𝚕𝚘𝚠 𝚙𝚛𝚒𝚌𝚎𝚜</h6>
  <div class="row1">
      @foreach($posts as $post)
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="book-card">
              <div>
                  
                  
                  <img src="{{ asset('storage/images/' . $post->image) }}" height="1rem" width="120rem" alt="image picture">

              </div>
              <h4>Book Name:{{ $post->book_title }}</h4>
              <p>Author: {{ $post->author_name }}</p>
              <p>Book Type: {{ $post->book_type }}</p>
              {{-- <p>Description: {{ $post->book_description }}</p> --}}
              <p>Price: {{ $post->price }}</p>
              <p>Condition: {{ $post->condition }}</p>
              {{-- <p>Sellers name: {{ $post->name }}</p>
              <!-- <p>Phone number: {{ $post->phone_number }}</p> -->
              <p>Pincode: {{ $post->pincode }}</p> --}}
              {{-- <p>Need more information(like availabilty)about this Book? </p>
              <button type="button" class="btn btn-light-green"><a href="https://wa.me/{{ $post->phone_number }}" > <img src="./images/whatsapp.svg" alt="WhatsApp Logo" class="whatsapp-logo">Chat with seller</a></button> --}}
              @if(auth()->check())
              <a href="{{ URL::to('buydetails/' . $post->id) }}" class="btn btn-primary">Book Details</a>
              @else
              <a href="{{ route('login') }}" class="btn btn-primary">Login to view details</a>
              @endif

          </div>
      </div>
      @endforeach
  </div>
</div>
    


  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


