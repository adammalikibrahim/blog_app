@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="{{url('assets/vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/style/style.css')}}">

    <div id="carouselExampleIndicators" class="carousel slide ">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner rounded-5 ">
          <div class="carousel-item active">
            <img src="{{url('assets/images/gamecodmw.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{url('assets/images/crossfire-x.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{url('assets/images/farcry.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

 {{-- card --}}
<div class="text">
 <section id="hero">
    <h1>Role Play Game</h1>
    <p>Save more with coupons & up to 70% off!</p>
   </section>
</div>

 <div class="row ">
    <div class="card" style="width: 18rem;">
        <img src="{{url('assets/images/God-of-War.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="{{url('assets/images/eternium.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div><div class="card" style="width: 18rem;">
        <img src="{{url('assets/images/mortal-kombat.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
 </div>

 {{-- card2 --}}
<div class="text">
 <section id="hero">
    <h1>Mobile Game</h1>
    <p>Save more with coupons & up to 70% off!</p>
   </section>
</div>

 <div class="row">
    <div class="card" style="width: 18rem;">
        <img src=" {{url('assets/images/Vainglory.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="{{url('assets/images/mobile.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div><div class="card" style="width: 18rem;">
        <img src="{{url('assets/images/aov.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
 </div>

 {{-- card3 --}}
<div class="text">
 <section id="hero">
    <h1>Battle Ground Games</h1>
    <p>Save more with coupons & up to 70% off!</p>
   </section>
</div>

 <div class="row">
    <div class="card" style="width: 18rem;">
        <img src="{{url('assets/images/pubg-mobile.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="{{url('assets/images/fortnite.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div><div class="card" style="width: 18rem;">
        <img src="{{('assets/images/apex.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
 </div>


 <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
    <div class="row py-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
            <p class="text-white"><i class="fa fa-map-marker-alt mr-2 me-2"></i>123 Street, New York, USA</p>
            <p class="text-white"><i class="fa fa-phone-alt mr-2 me-2"></i>+62 8133 1008 251</p>
            <p class="text-white"><i class="fa fa-envelope mr-2 me-2"></i>BlogCak@gmail.com</p>
            <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
            <div class="d-flex justify-content-start gap-1">
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-instagram"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
       <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    <p class="m-0 text-center">&copy; <a href="#" class="text-decoration-none">BlogCak</a>. All Rights
        Reserved.

</div>

  <script src="{{url('assets/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>

@endsection
