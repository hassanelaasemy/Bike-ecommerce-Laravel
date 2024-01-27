<nav class="navbar navbar-light navbar-expand-md d-xl-flex align-content-center align-self-center fixed-top"
style="position: fixed;width: 100%;background: #ffffff;">
<div class="container-fluid"><a class="navbar-brand" href="#" style="margin-left: 80px; "><img class="d-xl-flex"
      src="{{ url('images/logo.png') }}" width="160" height="40"></a><button data-bs-toggle="collapse"
    class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
      class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse text-center " id="navcol-1" >
    <ul class="navbar-nav mx-auto ">
      <li class="nav-item"><a
          class="nav-link active text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center justify-content-center align-items-center align-content-center m-auto"
          href="{{route('Home')}}">Home</a></li>
      <li class="nav-item text-end" ><a
          class="nav-link text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center justify-content-center align-items-center align-content-center m-auto"
          href="{{route('Mountain')}}">Mountain &nbsp;</a></li>
      <li class="nav-item text-end" ><a
          class="nav-link text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center justify-content-center align-items-center align-content-center m-auto"
          href="{{route('Hybrid')}}" >Hybrid </a></li>
          <li class="nav-item text-end" ><a
            class="nav-link text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center justify-content-center align-items-center align-content-center m-auto"
            href="{{route('City')}}">City</a></li>
            <li class="nav-item text-end"><a
              class="nav-link text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center justify-content-center align-items-center align-content-center m-auto"
              href="{{route('Electric')}}">Electric</a></li>
              <li class="nav-item text-end" ><a
                class="nav-link text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center justify-content-center align-items-center align-content-center m-auto"
                href="{{route('Road')}}" >Road</a></li>
                <li class="nav-item text-end"><a
                  class="nav-link text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center justify-content-center align-items-center align-content-center m-auto"
                  href="{{route('Contact')}}" >Contact Us</a></li>
    </ul>
    <ul class="navbar-nav mx-auto">

    </ul>
    <ul class="navbar-nav mx-auto">
      <li class="nav-item d-lg-flex align-self-start" style="padding-right: 13px;padding-left: 10px; "><a

        class="nav-link active d-lg-flex align-self-start" href="{{route('showpanier')}}"
        style=" color: rgba(0, 0, 0, 0.9); font-weight: bold;">  <i class="bi bi-cart4"></i>
      </a>
    </li>
    </ul>
  </div>
</div>
</nav>