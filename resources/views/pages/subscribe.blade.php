@extends('layouts.app')

@section('content')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Subscribe Plans</title>
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/pricing-plan.css">
</head>

<main>
    <div class="container ">
      <h5 class="text-center pricing-table-subtitle">PRICING PLAN</h5>
      <h1 class="text-center pricing-table-title">Pricing Table</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card pricing-card pricing-plan-basic">
            <div class="card-body">
              <i class="mdi mdi-cube-outline pricing-plan-icon"></i>
              <p class="pricing-plan-title">Basic</p>
              <h3 class="pricing-plan-cost ml-auto">450 EGP/mo</h3>
              <ul class="pricing-plan-features">
                <li>Unlimited conferences</li>
                <li>100 participants max</li>
                <li>Custom Hold Music</li>
                <li>10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pricing-card pricing-card-highlighted  pricing-plan-pro">
            <div class="card-body">
                <i class="mdi mdi-trophy pricing-plan-icon"></i>
              <p class="pricing-plan-title">Pro</p>
              <h3 class="pricing-plan-cost ml-auto">1000 EGP/mo</h3>
              <ul class="pricing-plan-features">
                <li>Unlimited conferences</li>
                <li>100 participants max</li>
                <li>Custom Hold Music</li>
                <li>10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pricing-card pricing-plan-enterprise">
            <div class="card-body">
              <i class="mdi mdi-wallet-giftcard pricing-plan-icon"></i>
              <p class="pricing-plan-title">Enterprise</p>
              <h3 class="pricing-plan-cost ml-auto">2500 EGP/mo</h3>
              <ul class="pricing-plan-features">
                <li>Unlimited conferences</li>
                <li>100 participants max</li>
                <li>Custom Hold Music</li>
                <li>10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
      </div>
      <div class="pricing-plan-create pricing-plan-create">
          <p class="text-center">Didnt Like These Plans ? no problem</p>
          <a href="#!" class="btn pricing-plan-purchase-btn">Create Plan</a>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

@endsection

