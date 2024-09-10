<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Listing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('cssfile/sell.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
html, body {
min-height: 100%;
background-color: #c3cbdc;
background-image: linear-gradient(147deg, #c3cbdc 0%, #edf1f4 74%);

}
body, div, form, input, select, p { 
padding: 0;
margin: 0;
outline: none;
font-family: Roboto, Arial, sans-serif;
font-size: 14px;
color: #666;

}
h1 {
margin: 0;
font-weight: 400;
}
h3 {
margin: 12px 0;
color: #8ebf42;
}
.main-block {
display: flex;
justify-content: center;
align-items: center;
background: #fff;
}
form {
width: 100%;
padding: 20px;
}
fieldset {
border: none;
border-top: 1px solid #8ebf42;
}
.account-details, .personal-details {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}
.account-details >div, .personal-details >div >div {
display: flex;
align-items: center;
margin-bottom: 10px;
}
.account-details >div, .personal-details >div, input, label {
width: 100%;
}
label {
padding: 0 5px;
text-align: right;
vertical-align: middle;
}
input {
padding: 5px;
vertical-align: middle;
}
.checkbox {
margin-bottom: 10px;
}


button {
width: 10%;
padding: 10px 0;
margin: 10px auto;
border-radius: 5px; 
border: none;
background: #8ebf42; 
font-size: 14px;
font-weight: 600;
color: #fff;
display:flex;
justify-content:center;
align-items:center;
}
button:hover {
background: #82b534;
}
@media (min-width: 568px) {
.account-details >div, .personal-details >div {
width: 50%;
}
label {
width: 40%;
}
input {
width: 60%;
}
select, .children, .gender, .bdate-block {
width: calc(60% + 16px);
}
}
</style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6  logo col col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                
            </div>


            <div class="col-md-6 text-end">
                <h3 class="posthead">POST YOUR AD</h3>
            </div>
        </div>
    </div>

   
       
        <div class="main-block">
 <form action="{{ route('bookStore') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
 @csrf
<fieldset>
<legend>
<h3>  Books Details</h3>
</legend>
<div class="account-details">
<div><label>Book Title</label><input type="text" placeholder="Enter Book Title"name="book_title" value="{{ old('book_title') }}" required>
    @error('book_title')
    <p class="error-message ">{{ $message }}</p>
@enderror</div>
<div><label>Condition</label><select class="form-select"  name='condition' id="condition">
                    <option value="new">Excellent</option>
                    
                    <option value="used">Good</option>
                    <option value="fair">Fair</option>
                </select>
                @error('condition')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
</div>

<div><label>Books Description</label><textarea  name='book_description'  id="book_description" rows="5" cols="60"  placeholder="Please Enter a Description of your Book...." value="{{ old('book_description') }}"></textarea>
    @error('book_description')
    <p class="error-message">{{ $message }}</p>
@enderror</div>
<div><label for="bookType" class="form-label">Book Type</label>
                <select class="form-select" name='book_type' id="bookType" value="{{ old('book_type') }}">
                    <option value="reading-books">Reading Books(Novels,children,Business,Literature,History etc)</option>
                    <option value="textbooks">Textbooks(School/College)</option>
                </select>@error('book_type')
                <p class="error-message">{{ $message }}</p>
            @enderror</div>
                <div><label>Book Author</label><input type="text" placeholder="enter book author" name="author_name" value="{{ old('author_name') }}"required></div>

  <div><label>Upload Image</label><input class="form-control" type="file"  name='image' id="image">@error('state')
    <p class="error-message">{{ $message }}</p>
@enderror</div>
  <div><label>Price</label><input type="text" placeholder="enter price for your book.." name="price" value="{{ old('price') }}"required>@error('state')
    <p class="error-message">{{ $message }}</p>
@enderror</div>




  
  
  
  
</fieldset>
<fieldset>
<legend>
<h3>Personal Details</h3>
</legend>
<div class="personal-details">
<div>
<div><label>Name*</label>
    {{-- {{ Auth::user()->name }} --}}
    <input type="text" placeholder="Enter Name.." name="name" value="{{ old('name') }}" required >
    @error('name')
                            <p class="error-message">{{ $message }}</p>
                        @enderror

</div>
<div><label>Phone*</label><input type="text" placeholder="Enter Phone number.."name="phone_number" value="{{ old('phone_number') }}" required>
    @error('phone_number')
    <p class="error-message">{{ $message }}</p>
@enderror</div>
<div><label>pincode</label><input type="text" placeholder="Enter Pincode.."name="pincode" value="{{ old('pincode') }}">
    @error('pincode')
    <p class="error-message">{{ $message }}</p>
@enderror</div>



</div>


</div>

</fieldset>

<button styletype="submit" class="">Post Ad</button>

@if(session('user_id'))
 <input  type="hidden" name="user_id" value={{ session('user_id') }}>
@endif
    </form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>