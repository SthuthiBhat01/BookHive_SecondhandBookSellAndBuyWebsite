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
/* Add these styles to enhance the table appearance */

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left;
}

th {
    background-color: #38c8df;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

/* Add styles for images in the table */
table img {
    display: block;
    margin: 0 auto; /* Center images */
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


    <h1 class="booksold">My Book Orders </h1>
    <h5>View a list of the books you have ordered from our platform.</h5>

  


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<table>
    <tr>
        <th>Serial No</th>
        <th>Book Title</th>
        <th>Book Price</th>
        <th>Seller Name</th>
        <th>Seller's Phone No</th>
        <th>Book Image</th>
    </tr>
    @php
        $serialNo = 1; // Initialize the counter
    @endphp
    @foreach($checkout2 as $order)
        <tr>
            <td>{{ $serialNo++ }}</td> <!-- Increment the counter for each row -->
            <td>{{ $order->post->book_title }}</td>
            <td>{{ $order->post->price }}</td>
            <td>{{ $order->post->user->name }}</td>
            <td>{{ $order->post->phone_number }}</td>
            <td>
                <img src="{{ asset('storage/images/' . $order->post->image) }}" alt="Book Image" width="100" height="100">
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>