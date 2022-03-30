@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
        <h4>Cart <span class="price"><i class="fa fa-shopping-cart"></i><b> 4</b></span></h4>
        <p><a href="#">Product 1</a> <span class="price">$15</span></p>
        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
	</div>
</div>
</div>
<div class="col-xl-7 col-lg-7 col-md-9 col-sm-9 col-12">
<div class="card h-100">
	<div class="card-body">	
        <div class="row-gutters"></div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h4 class="mb-2 text-warning">Checkout</h4>     
			</div>
            <label>Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa fa-4x"></i>
              <i class="fa fa-cc-mastercard fa-4x"></i>
            </div>
            <br>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="cardnumber" class><i class="fa fa-credit-card"></i> Card Number</label>
					<input type="number" class="form-control" id="cardnumber" placeholder="XXXX-XXXX-XXXX-XXXX" name="cardnumber">
				</div>
			</div>
            <br>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="cardholder" class><i class="fa fa-user"></i> Card Holder Name</label>
					<input type="text" class="form-control" id="cardholder" placeholder="Full Name" name="cardholder">
				</div>
			</div>
            <br>
            <div class="row gutters">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-6">
                    <div class="form-group">
                        <label for="expiration" class><i class="fa fa-calendar"></i> Expiration Date</label>
                        <input type="text" class="form-control" id="expiration" placeholder="MM / YY" name="expiration">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-5">
                    <div class="form-group">
                        <label for="cvv" class><i class="fa fa-credit-card"></i> CVV</label>
                           <input type="number" class="form-control" id="cvv" placeholder="XXX" name="cvv">
                    </div>
                </div>
            </div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="button" id="submit" name="submit" class="btn btn-warning" style="float: right; margin: 10px;">Make payment</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<style type="text/css">
span.price {
  float: right;
}
body {
    margin: 0;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    margin-top: 20px;
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}


</style>

<script type="text/javascript">

</script>
</body>
</html>
@endsection