@extends('layouts.app')
@section('content')

@if(session('message'))
    <div>{{session('message')}}</div>
@endif

<!-- imports -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/cart.css">
<script src="{{ asset('js/cart.js') }}"></script>


<div class="container px-4 py-5 mx-auto">
  
  
  <div class="row justify-content-center">
      <div class="col-lg-12">
          
           <div class="card">
           


           <div class="row d-flex justify-content-center">
      <div class="col-5">
     <h4 class="heading">Cart</h4>
      </div>

      <div class="col-7">
          <div class="row text-right">
              <div class="col-4">
                  <h6 class="mt-2">Category</h6>
              </div>
              <div class="col-4">
                  <h6 class="mt-2">Price</h6>
              </div>
              <div class="col-4">
                  <h6 class="mt-2">Button</h6>
              </div>
          </div>
      </div>
  </div>
  
  @foreach ($cart as $data)
  <form action="{{route('cart.remove')}}" method="POST">
    <div class="row d-flex justify-content-center border-top">
        <div class="col-5">
            <div class="row d-flex">
                <div class="book"> <img src="https://i.imgur.com/2DsA49b.jpg" class="book-img"> </div>
                <div class="my-auto flex-column d-flex pad-left">
                    <h6> <a class="mob-text" href ="#">{{ $cart->where('id',$data->id) }}</a> </h6>

                    <p class = "mob-text" >{{ $data->CourseInstructorID }}</p>
                </div>
            </div>
        </div>
        <div class="my-auto col-7">
            <div class="row text-right">

                <div class="col-4">
                    <p class="mob-text">{{ $data->CategoryID }}</p>
                </div>

                <div class="col-4">
                    <h6 class="mob-text">EGP {{ $data->CoursePrice }}</h6>
                </div>

                <div class="col-4">
                    <input type="hidden" name="Course_id" value={{ $data->id }}></input>
                    <button type="submit" class="btn btn-danger">Remove</button>
                </div>
            </div>
        </div>
    </div>
    </form>
  @endforeach


<!-- checkbox button -->
<!-- </div> <button  class="btn-block btn-blue"> <span> <span id="checkout">Checkout</span> <span id="check-amt">$26.48</span> </span> </button> -->


      
</div>

<button  type="button" class="btn btn-primary btn-lg">Checkout</button>
<a  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">{{\Gloudemans\Shoppingcart\Facades\Cart::total()}} EGP</a>
      </div>
      
  </div>
</div>
@endsection