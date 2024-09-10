<!-- <div class="categories container-fluid">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{config('app.name')}}</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li>
          <div class="search_box">
            <input type="text" class="searchclass mt-1" placeholder="Find Textbooks,story books....">
            <i class="fa-solid fa-magnifying-glass mt-1"></i>
          </div>
        </li>
        <li>
          <img src="./images/b1.png" class="first-nav-img">
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('logout')}}">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('sell')}}">Sell Used Books</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('registration')}}">Registration</a>
        </li>
        @endauth
      </ul>
      <span class="navbar-text">
        @auth
        <i class="fas fa-user-circle">
          {{auth()->user()->name}}
        </i> 
        @endauth
      </span>
    </div>
  </div>
</nav>
</div> -->
