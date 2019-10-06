@extends('layouts.app')

@section('content')
<!-- <button  type="button" class="btn btn-primary btn-lg uper"><a href="/admin/" style="text-decoration:none;color:white;">Admin Dashboard</a></button> -->

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
      <a href="/showproduct"><img src="\images\slider\banner_ba_sweaters_2048x.png" class="d-block w-100" alt=""></a>
      <div class="carousel-caption  d-xs-block d-sm-block d-lg-block d-md-block">
      <h5>VIEW ALL</h5>
      <a href="/showproduct"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <a href="/showproduct"><img src="\images\slider\banner_ba_t_shirts_2048x.jpg" class="d-block w-100" alt=""></a>
      <div class="carousel-caption  d-xs-block d-sm-block d-lg-block d-md-block">
      <h5>VIEW ALL</h5>
      <a href="/showproduct"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <a href="/showproduct"><img src="\images\slider\banner_winter_6_a55a9679-0ee9-4469-af77-15e61f675b22_2048x.jpg" class="d-block w-100" alt=""></a>
      <div class="carousel-caption  d-xs-block d-sm-block d-lg-block d-md-block">
      <h5>VIEW ALL</h5>
      <a href="/showproduct"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <a href="/showproduct"><img src="\images\slider\banner_winter_9_2d1d9bca-dcb1-4794-bdaa-c8858ca31977_2048x.jpg" class="d-block w-100" alt=""></a>
      <div class="carousel-caption  d-xs-block d-sm-block d-lg-block d-md-block">
      <h5>VIEW ALL</h5>
      <a href="/showproduct"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <a href="/showproduct"><img src="\images\slider\banner_winter_9_2048x.jpg" class="d-block w-100" alt=""></a>
      <div class="carousel-caption  d-xs-block d-sm-block d-lg-block d-md-block">
      <h5>VIEW ALL</h5>
      <a href="/showproduct"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
    </div>
  </div>
</div> 

<div class="container">
  <div class="row">
    <div class="p-1 pt-2 col-lg-6 col-sm-12 col-md-6 ">
    <a href="/showcategory/1"><img src="\images\type\pastel-color-block-hoodie-2_800x.jpg" class="img-fluid rounded"></a>
      <div class="carousel-caption  d-xs-block d-sm-block d-lg-block d-md-block ">
      <h5>HOODIES</h5>
      <a href="/showcategory/1"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>  
</div>
<div class="p-1 pt-2 col-lg-6 col-sm-12 col-md-6">
    <a href="/showcategory/2"><img src="\images\type\textured-embroidery-sweater-4_800x.jpg" class="img-fluid rounded"></a>
      <div class="carousel-caption  d-xs-block d-sm-block d-lg-block d-md-block ">
      <h5>SWEATERS</h5>
      <a href="/showproduct/2"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
</div>
  </div>
  <div class="row">
    <div class="p-1 pt-2 col-lg-4 col-sm-12 col-md-4">
    <a href="/showcategory/3"><img src="\images\type\43_2000x.jpg" class="img-fluid rounded"></a>
    <div class="carousel-caption  d-xs-block d-sm-block d-lg-block d-md-block ">
      <h5>T-SHIRTS</h5>
      <a href="/showproduct/3"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
</div>
    <div class="p-1 pt-2 col-lg-4 col-sm-12 col-md-4">
    <a href="/showcategory/4"><img src="\images\type\05retouchedpants_2000x.jpg" class="img-fluid rounded"></a>
    <div class="carousel-caption  d-xs-block d-sm-block d-lg-block d-md-block ">
      <h5>PANTS</h5>
      <a href="/showproduct/4"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
</div>
    <div class="p-1 pt-2 col-lg-4 col-sm-12 col-md-4">
    <a href="/showcategory/5"><img src="\images\type\teddy-fresh-tracksuits-bags-ben-awin-30.png" class="img-fluid rounded"></a>
    <div class="carousel-caption  d-xs-block d-sm-block d-lg-block d-md-block ">
      <h5>ACCESSORIES</h5>
      <a href="/showproduct/5"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
</div>
  </div>
</div>
<!-- <div class="container">
  <div class="row mt-3 mb-3">
    <div class="col-6">
      <img src="\images\type\bluehoodie.png" class="img-fluid">
      <div class="carousel-caption d-none d-md-block">
      <h5>HOODIES</h5>
      <a href="/showcategory/1"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
    </div>
    <div class="col-6">
      <img src="\images\type\pastel.png" class="img-fluid">
      <div class="carousel-caption d-none d-md-block">
      <h5>SWEATERS</h5>
      <a href="/showproduct/2"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col-4">
      <img src="\images\type\43_2000x.jpg" class="img-fluid">
      <div class="carousel-caption d-none d-md-block">
      <h5>T-SHIRTS</h5>
      <a href="/showproduct/3"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
    </div>
    <div class="col-4">
      <img src="\images\type\05retouchedpants_2000x.jpg" class="img-fluid">
      <div class="carousel-caption d-none d-md-block">
      <h5>PANTS</h5>
      <a href="/showproduct/4"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
    </div>
    <div class="col-4">
      <img src="\images\type\teddy-fresh-tracksuits-bags-ben-awin-30.png" class="img-fluid">
      <div class="carousel-caption d-none d-md-block">
      <h5>ACCESSORIES</h5>
      <a href="/showproduct/5"><button type="button" class="btn btn-outline-light btn-lg">SHOP NOW</button></a>
      </div>
    </div>
  </div>
</div> -->
</div>
@endsection