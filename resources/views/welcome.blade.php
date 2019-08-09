@extends('layouts.app')

@section('content')
<div id="body">
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="\images\slider\banner_ba_sweaters_2048x.png" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      <h5>VIEW ALL</h5>
      <button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="\images\slider\banner_ba_t_shirts_2048x.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      <h5>VIEW ALL</h5>
      <button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="\images\slider\banner_winter_6_a55a9679-0ee9-4469-af77-15e61f675b22_2048x.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      <h5>VIEW ALL</h5>
      <button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="\images\slider\banner_winter_9_2d1d9bca-dcb1-4794-bdaa-c8858ca31977_2048x.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      <h5>VIEW ALL</h5>
      <button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="\images\slider\banner_winter_9_2048x.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      <h5>VIEW ALL</h5>
      <button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button>
      </div>
    </div>
  </div>
</div> 
<div class="container">
  <div class="row mt-3 mb-3">
    <div class="col-6">
      <img src="\images\type\bluehoodie.png" class="img-fluid">
      <div class="carousel-caption d-none d-md-block">
      <h5>VIEW HOODIES</h5>
      <button type="button" class="btn btn-light">SHOP NOW</button>
      </div>
    </div>
    <div class="col-6">
      <img src="\images\type\since_one_year_ago_fleece_crew_white_03_2000x.jpg" class="img-fluid"style="height:399px;">
      <div class="carousel-caption d-none d-md-block">
      <h5>VIEW SWEATERS</h5>
      <button type="button" class="btn btn-light">SHOP NOW</button>
      </div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col-4">
      <img src="\images\type\43_2000x.jpg" class="img-fluid">
      <div class="carousel-caption d-none d-md-block">
      <h5>VIEW T-SHIRTS</h5>
      <button type="button" class="btn btn-light">SHOP NOW</button>
      </div>
    </div>
    <div class="col-4">
      <img src="\images\type\05retouchedpants_2000x.jpg" class="img-fluid">
      <div class="carousel-caption d-none d-md-block">
      <h5>VIEW PANTS</h5>
      <button type="button" class="btn btn-light">SHOP NOW</button>
      </div>
    </div>
    <div class="col-4">
      <img src="\images\type\teddy-fresh-tracksuits-bags-ben-awin-30.png" class="img-fluid">
      <div class="carousel-caption d-none d-md-block">
      <h5>VIEW ACCESSORIES</h5>
      <button type="button" class="btn btn-light">SHOP NOW</button>
      </div>
    </div>
  </div>
</div>
</div>
@endsection