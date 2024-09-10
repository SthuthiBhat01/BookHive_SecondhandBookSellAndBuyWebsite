<html xmlns:th="https://www.thymeleaf.org">
   <head>
      <meta charset="utf-8">
      <title>Menu</title>
 
 <!-- Include CSS File -->
 
      <link th:href="@{/css/menu_style.css}" rel="stylesheet">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
 
 <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

/* CSS for the navigation bar */
nav {
    background-color: #333;
    color: #fff;
    padding: 10px;
}

nav ul {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: space-around;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1.2em;
    transition: color 0.5s;
}

/* CSS for the active link */
nav ul li a.active {
    color: #4caf50;
}

/* CSS for the menu button */
.menu-btn {
    display: none;
}

/* CSS for hover effect on links */
nav ul li a:hover {
    color: #4caf50;
}

/* CSS for table */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

table, th, td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #ddd;
}

table th {
    background-color: #4caf50;
    color: white;
}

 
 </style>
   
   
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
   
   <body>   
      <nav>
         
         </label>
         <ul>
            <li><a class="" href="/admin">Home</a></li>
            <li><a href="/admin_book_details">Book Details</a></li>
            <li><a href="/admin_userdetails">User Details</a></li>
            <li><a href="/order_details">Order Details</a></li>
            <li><a href="/">Logout</a></li>
           
         
         </ul>
      </nav>

      
      <table>
        <tr>
            <th>User's Name</th>
            <th>Email</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>
    
   </body>
</html>