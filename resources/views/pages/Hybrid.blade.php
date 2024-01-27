@extends('Layouts.layout')
  @section('content')
<!-------------------------------------------------- --------Carsoul begins here -->
<br> 
<div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel" style="margin-top: 25px; filter: blur(0.5px);">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner ">
      <div class="carousel-item active carousel-item-left">
        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="400" height="500" src="{{ url('images/hybridd.jpg') }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect fill="#777" width="100%" height="100%"></rect><text fill="#555" dy=".3em" x="50%" y="50%"></text></img>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
  </div>
<!-------------------------------------------------- --------Carsoul end here -->


  <!---------------------------- Start container-->
  <br>
  <h1>Hybrid Bikes</h1>
    <section>
      <div class="container">
        <div class="row">
          <div class="row row-cols-1 row-cols-md-3 g-3 ">
                <!-- Card Flip -->
    @foreach ($Hybrid as $Hybrid)
    <div class="card-flip">
      <div class="flip">
        <div class="front">
          <!-- front content -->
          <div class="card">
            <img class="card-img-top" src="{{$Hybrid->image}}" alt="100%x180" style="height: 220px; width: 100%; display: block;" data-holder-rendered="true">
            <div class="card-block">
              <h4 class="card-title">
                {{$Hybrid->name}}
              </h4>
              <p class="card-text">{{$Hybrid->price}}$</p>
            </div>
          </div>
        </div>
        <div class="back">
          <!-- back content -->
          <div class="card">

            <div class="card-block">
              <p>{{$Hybrid->description}}</p>

            </div>
            <div class="card-block">
              <a href="{{route('getproductbyid' , $Hybrid->id)}}">
                <div data-tooltip="Price:-$20" class="button">
                  <div class="button-wrapper">
                    <div class="text">Buy Now</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                  </svg>
                      </span>
                    </div>
                  </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
                <!-- End Card Flip -->
          </div>
        </div>
      </div>
    </section>
  <!---------------------------------------------- End container-->












  @endsection
