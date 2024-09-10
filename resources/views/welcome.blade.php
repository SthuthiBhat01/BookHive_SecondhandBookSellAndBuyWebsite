<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('cssfile/index.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/fresh.css')}}">
    
   
  <meta charset="UTF-8">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
 
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
  <title>BookHive-Buy and Sell for free anywhere</title>
  <style>
    .btn222 {
      background-color: #1881ea; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }
    
    .btn222:hover {
      /* background-color: white;  */
      color: black; 
      border: 2px solid #4CAF50;
    }
    .fresh1{
      font-weight: bolder;
      margin-top:1em;
      margin=bottom: 0%;
    }
    </style>
    

</head>

<body class="wholecolor">
  <!-- NavBar -->

  {{-- <nav class="header container-fluid">
    <div class="nav-bar container">
      <div class="first-nav row">
        <div class="logo col col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1">
          <!-- <a href="./index.html"> -->
            <div class="banner">
            <img src="./images/b1.png" class="first-nav-img">
          </div> --}}
          <!-- </a> -->
        {{-- </div> --}}



    <!-- ===toogle=== -->

      <!-- addsssss hereeeee -->
      
      {{-- here is the another code for header --}}
      <header class="header container-fluid">
        <div class="nav-bar container">
            <div class="first-nav row align-items-center justify-content-between">
              
                <div class="logo col-md-1">
    
                        <img src="./images/b1.png" class="first-nav-img" alt="Logo">
                        
                </div>
               
                <div class="col-md-10">
                    <div class="row align-items-center justify-content-end">
                        <form class="d-flex col-md-4" action="{{ route('search') }}" method="GET">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" required>
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        @auth
                        <div class="login col-md-2">
                            <a id="sell" href="{{route('sell')}}">
                                <button class="custom-btn btn-3" role="button">SELL BOOKS</button>
                            </a>
                        </div>
                        <div class="dropdown col-md-2">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Welcome, {{auth()->user()->name}}!
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              {{-- <a class="dropdown-item" href="#">Profile</a> --}}
                              <a class="dropdown-item" href="{{ route('showAdds', ['id' => auth()->user()->id]) }}"> Profile</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                          </div>
                      </div>
                      
                        @else
                        <div class="login col-md-2">
                            <a id="log" href="{{route('login')}}">
                                <button class="button-21" role="button">Login</button>
                            </a>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </header>
      
      <!-- </span> -->
           </div>
         

       </div>
       
</div>

  <!-- =========toogle==== -->
  

  </div>
  </nav>

  <!-- categories -->

  <!-- <div class="categories container-fluid">
    <div class="categories-div container">
      <div>
        <ul class="categories-list col ">
          <li class="nav-item col" id="Cat-list">
            <a class="nav-link dropdown-toggle avtive" id="nav-link" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              ALL CATEGORIES
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Text-Books</a></li>
              <li><a class="dropdown-item" href="#">Story-Books</a></li>
              
            </ul>
          </li>
          <li class="nav-item col ">
            <a class="nav-link" href="#">Text-Books</a>
          </li>
          <li class="nav-item col">
            <a class="nav-link" href="#">Story-Books</a>
          </li>
        </ul>
      </div>
    </div>
  </div> -->


  <div id="carouselExampleSlidesOnly" class="container carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="4000" style="position: relative; width: 100%; height: 30rem;">
        <img src="./images/school.png" style="width: 100%; height: 30rem; object-fit: cover;filter: brightness(30%)">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: rgb(255, 255, 255);"><p class="textinsideimg">Buy and Sell Old Books Online for Actual Money!</p>
<p class="textinsideimg1"> At BookHive you can buy second hand books and sell old books online at best prices.</P></div>
        
        <div class="carousel-caption d-none d-md-block">
          <button class="btn222" onclick="forBuy()" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
          <a class="nav-link active" aria-current="page" href="{{route('buy')}}">Buy Used Books</a></button>


          @auth
          <button class="btn222 " onclick="forSell()"  onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
          <a class="nav-link active" aria-current="page"
           href="{{route('sell')}}">Sell Used Books</a></button>
          @else
          <button class="btn222 " onclick="forSell()"  onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
          <a class="nav-link active" aria-current="page" href="{{route('login')}}">Sell Used Books</a></button>
          @endauth
        </div>
      </div>

      <div class="carousel-item" data-bs-interval="4000" style="position: relative; width: 100%; height: 30rem;">
        <img src="./images/school2.jpg" style="width: 100%; height: 30rem; object-fit: cover; filter: brightness(30%);">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;"><p class="textinsideimg">Buy and Sell Old Books Online for Actual Money!</p>
<p class="textinsideimg1"> At BookHive you can buy second hand books and sell old books online at best prices.</P></div>
        
        <div class="carousel-caption d-none d-md-block">
          <button class="btn222" onclick="forBuy()" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
          <a class="nav-link active" aria-current="page" href="{{route('buy')}}">Buy Used Books</a></button>

          @auth
          <button class="btn222 " onclick="forSell()" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
          <a class="nav-link active" aria-current="page" href="{{route('sell')}}">Sell Used Books</a></button>
          @else
          <button class="btn222 " onclick="forSell()" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
          <a class="nav-link active" aria-current="page" href="{{route('login')}}">Sell Used Books</a></button>
          @endauth
        </div>
      </div>
    </div>
</div>

  <!-- Products -->
  <h4 class="fresh1">Fresh Recommendations</h4>
<div class="product_wrap" id="product-container">
    
    <div class="row">
        @foreach($posts as $key => $post)
        <div class="product_item product-card {{ $key >= 3 ? 'hidden' : '' }}">
            <div class="product_one">
                <img class ="freshimg" src="{{ asset('storage/images/' . $post->image) }}" height="1rem" width="120rem" alt="image picture" >
                <div class="product_two">
                <h5>{{ $post->book_title }}</h5>
                <p>Author: {{ $post->author_name }}<br>
                 Book Type: {{ $post->book_type }}<br>
                Price: {{ $post->price }}<br>
                Condition: {{ $post->condition }}</p>
                <div>
                  @if(auth()->check())
                <a href="{{ URL::to('buydetails/' . $post->id) }}" class="btn btn-primary">Book Details</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary">Book details</a>
                @endif

                </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>







<div class="button">
    <button id="load-more">Learn More</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#load-more").click(function(){
   window.location.href='buy/'; //redirect to buy page
  });
});
</script>
  

 
  




  <!--   here is the comments on the website or about section of the website    -->
  <div class="container1">
  <div class="one"><h3>BookHive-Your Ultimate Online Intercommunity Marketplace</h3>
  </div>

<p>Are you a student burdened with textbooks from past semesters? Or perhaps a book lover whose collection is gathering dust? If so, BookHive is the perfect 
solution for you!</p>
<br>

<p>As India's leading platform for the online sale of used books, BookHive empowers you to pass on your cherished books to another book lover at attractive prices.</p>
<br>


<p>Engaging in the buying and selling of books on BookHive is a win-win situation for both parties. As a seller, you can earn a tidy sum by parting with books you no longer need, offering them to someone who will truly value them. As a buyer, you can enjoy substantial savings by purchasing second-hand books directly from their current owners.</p>

<br>
<div class="endof">
<p><I>"Selling used second hand books at your own desired price is not an uphill battle anymore. Just sell them on BookHive!"</I></p>
</div>
</div>
<!--here it is ending the about website section-->



<!-- here is the steps for buying and selling -->


<!-- here is the steps for selling -->
<section class="info">
    <div class="one">
     <h3>How to SELL your old books online on BookHive? </h3>
     <h6>Earning money by selling your old books is just 3 steps away from you!!</h6>
     </div>
   </section>
   <section class="cards-wrapper">
     <div class="card-grid-space">
       <div class="num">01</div>
       <a class="card" style="--bg-img: url(https://i.pinimg.com/564x/85/b1/b8/85b1b886ac1f25c1b49a292c0784b2ac.jpg)">
         <div>
           <h1>Post an ad for selling used books</h1>
           <p>Post an ad on BookHive describing your book details to sell your old books online.</p>
           
           <div class="tags">
             <div class="tag">STEP1</div>
           </div>
         </div>
       </a>
     </div>
     <div class="card-grid-space">
       <div class="num">02</div>
       <a class="card"  style="--bg-img: url('https://i.pinimg.com/564x/89/70/8b/89708bbebb2cb8e8010c172ec20d20fb.jpg')">
         <div>
           <h1>Set the selling price for your books</h1>
           <p>Set the price for your books at which you want to sell them.</p>
           
           <div class="tags">
             <div class="tag">STEP2</div>
           </div>
         </div>
       </a>
     </div>
     <div class="card-grid-space">
       <div class="num">03</div>
       <a class="card"  style="--bg-img: url('https://i.pinimg.com/564x/1b/5f/ef/1b5fef94158fdbc0ac4f8b53c812c224.jpg')">
         <div>
           <h1>Get paid on cash on Delivery</h1>
           <p>You will get money into your account once you receive an order for your book.</p>
           <div class="tags">
             <div class="tag">STEP3</div>
           </div>
         </div>
       </a>
     </div>
     <!-- https://images.unsplash.com/photo-1520839090488-4a6c211e2f94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38951b8650067840307cba514b554ba5&auto=format&fit=crop&w=1350&q=80 -->
   </section>
   <!-- here the end of steps selling -->
   
   
   
   <!--here the steps for buying-->
   <section class="info">
    <div class="one">
     <h3>How to BUY your old books online on BookHive? </h3>
     <h6> Buying second hand books by saving some money is just 3 steps away from you!!</h6>
     </div>
   </section>
   <section class="cards-wrapper">
     <div class="card-grid-space">
       <div class="num">01</div>
       <a class="card"  style="--bg-img: url(https://i.pinimg.com/564x/ef/28/0f/ef280fc3c74b2ce735e1be6424d2a92f.jpg)">
         <div>
           <h1>Select the used books you want</h1>
           <p>Search from over thousands of used books listed on BookHive.</p>
           
           <div class="tags">
             <div class="tag">STEP1</div>
           </div>
         </div>
       </a>
     </div>
     <div class="card-grid-space">
       <div class="num">02</div>
       <a class="card"  style="--bg-img: url('https://i.pinimg.com/564x/03/95/d2/0395d2a093bfd401b2bc24e7d98ac748.jpg')">
         <div>
           <h1>Place the order to BookHive</h1>
           <p>Then simply place the order by clicking on 'Buy Now' button. And pay on Delivery</p>
           
           <div class="tags">
             <div class="tag">STEP2</div>
           </div>
         </div>
       </a>
     </div>
     <div class="card-grid-space">
       <div class="num">03</div>
       <a class="card"  style="--bg-img: url('https://i.pinimg.com/564x/a7/82/00/a7820006b56f1ab9322ea56ebea9eaad.jpg')">
         <div>
           <h1>Get the books By Contacting sellers</h1>
           <p>Get the Books after direct Contact with sellers and cash on Delivery as per your wish!</p>
           <div class="tags">
             <div class="tag">STEP3</div>
           </div>
         </div>
       </a>
     </div>
     <!-- https://images.unsplash.com/photo-1520839090488-4a6c211e2f94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38951b8650067840307cba514b554ba5&auto=format&fit=crop&w=1350&q=80 -->
   </section>

  




<div class="footer1 container-fluid">
    <div class="container">
      <div class="row">
        <div class="footerimg col col-6 col-sm-6 col-md-4">
          <img src="./images/buysell.jpg" alt="">
        </div>
        <div class="footercontent col col-6 col-sm-6 col-md-4">
          <h2 class="mt-3">Our Community</h2>
          <p>We're not just another shopping website where you buy from professional sellers - we are a vibrant community of students, book lovers  who deliver happiness to each other! &#128512;  </p>
        </div>
        
        
      </div>
    </div>
  <!-- </div> -->


  <!-- <div class="footer2 container-fluid"> -->
    <div class="container">
      <div class="row">
        <div class="footer2content col col-6 col-sm-4 col-md-2">
          <h5 class="mt-3">POPULAR CATEGORIES</h5>
          <p>Fiction</p>
          <p>Non-Fiction</p>
          <p>Academic/Textbooks</p>
          <p>Children's Books</p>
        </div>
       
        <div class="footer2content col col-6 col-sm-4 col-md-3">
          <h5 class="mt-3">ABOUT US</h5>
          <p>About us</p>
          <p>BookHive Blog</p>
          <p>Contact US</p>
          <p>BookHive for Businesses</p>
        </div>
        <div class="footer2content col col-6 col-sm-4 col-md-2">
          <h5 class="mt-3">BookHive</h5>
          <p>Help</p>
          <p>Sitemap</p>
          <p>Terms of use</p>
          <p>Privacy Policy</p>
        </div>
        <div class="footerapp2 col col-12 col-sm-6 col-md-3">
          <div>
            <p class="mt-3">FOLLOW US</p>
          </div>
          <div>
            <img src="./images/F1.svg" class="footerappimg">
            <img src="./images/F2.svg" class="footerappimg">
            <img src="./images/F3.svg" class="footerappimg">
            <img src="./images/F4.svg" class="footerappimg">
          </div>
        </div>
      </div>
    </div>
  <!-- </div> -->

  <!-- <div class="footer3 container-fluid"> -->
    <div class="container">
      <div class="row">
        <div class="col col-12">
          <p> <b> BookHive@gmail.com </b>. © 2023 BookHive</p>
        </div>
      </div>
    </div>
  </div>
  
  
  <script src="main.js"></script>
  <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>