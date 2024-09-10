<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha384-DfYZjcKPx2vRpX3LRk6Rx14zjae9z7jFg7IOkgdJp2I2jWdKuMqdewi4RfzC+joN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <link rel="stylesheet" href="{{asset('cssfile/checkout.css')}}">
    <style>
        /* Custom styling for the radio button */
        input[type="radio"][disabled] {
            width: 20px; /* Set the desired width */
            height: 20px; /* Set the desired height */
            position: relative;
        }
    
        input[type="radio"][disabled]::before {
            content: '';
            width: 10px; /* Set the desired width for the inner circle */
            height: 10px; /* Set the desired height for the inner circle */
            border-radius: 50%;
            background-color: #007bff; /* Set the desired background color */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        p {
        color: green;
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-6">
            {{-- <form method="POST" id="codForm" action="{{ route('checkoutpost', ['id' => $post->id]) }}"> --}}
                <form action="{{ route('checkoutpost') }}" method="post" id="codForm" class="form-horizontal" enctype="multipart/form-data">

                @csrf
                <div class="row" id="row">
                    <div class="col m-1">
                        <input type="text" class="form-control" placeholder="First Name" name="fname" value="{{ old('fname') }}">
                        @error('fname')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="col m-1">
                        <input type="text" class="form-control" placeholder="Last Name" name="lname" value="{{ old('lname') }}">
                        @error('lname')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <input type="hidden" name="seller_id" value="{{ $post->user_id }}">
                <input type="hidden" name="user_id" value="{{ session('user_id') }}">

                <input type="hidden" name="book_id" value="{{ $post->id }}">



                <div class="row" id="row">
                    
                    <div class="col m-1">
                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone" value="{{ old('phone') }}">
                        @error('phone')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                

                <div class="row" id="row">
                    <div class="col m-1">
                        <input type="text" class="form-control" placeholder="Address" name="address" value="{{ old('address') }}">
                        @error('address')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="row" id="row">
                    <div class="col m-1">
                        <input type="text" class="form-control" placeholder="State" name="state" value="{{ old('state') }}">
                        @error('state')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col m-1">
                        <input type="text" class="form-control" placeholder="Pincode" name="pincode" value="{{ old('pincode') }}">
                        @error('pincode')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                    </div>
                </div>

                {{-- <input type="hidden" name="totalamount" value="{{ $post->price  }}"> --}}

                <button class="btn btn-warning"type="submit" style="margin-left: 2rem">DONE</button>
               
              

        </div>
  







        <div class="col-6" id="col-6">
            <div class="container-fluid">
               
                <div class="col-12">
                    <div class="col-3"><img src="{{ asset('storage/images/' . $post->image) }}" class="rounded-circle" alt=""></div>
                    <div class="col-3">{{$post->book_title}}</div>
                   
                </div>
        
            

            </div>
            <hr>

            <div class="col" style="margin-left: 1rem;">
                <h3 id="total">Total:{{  $post->price }}</h3>
             {{-- @if (session('address'))
    <p>User's Address: {{ session('address') }}</p>
@else
    <p>No address found for the user.</p>
@endif --}}
            </div>
            <hr>
            <label>
                <input type="radio" name="payment_method" value="cash_on_delivery" checked disabled>
                Cash on Delivery
            </label>

            <div class="col" style="margin-left: 19rem;margin-right:15rem;">
             <div class="row">
                {{-- <button class="btn btn-warning"type="submit" style="margin-left: 2rem">Place Order</button> --}}
                <div id="container"></div>

            </div>

            </div>
        
        {{-- <p id="message"></p>
        <script>
            document.getElementById('codForm').addEventListener('submit', function(event) {
                event.preventDefault();
                var fname = document.getElementsByName('fname')[0].value;

        
                // Replace 'your_phone_number' with the actual variable containing the seller's phone number
                var sellerPhoneNumber = " {{$post->phone_number}} ";
        
                document.getElementById('message').innerHTML = "Thank you, " + fname + ". Your order is Placed. For more information, contact seller " + sellerPhoneNumber;
            });
        </script>
         --}}

    </form>







</body>
</html>