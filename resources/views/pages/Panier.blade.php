@extends('Layouts.layout')
@section('content')
    <br> <br> 
    <section class="h-100" style="background-color:white;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    </div>
                    <div class="card rounded-3 mb-4">
                        @foreach ($data as $key => $item)
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ $item['image'] }}" class="img-fluid rounded-3" alt="Cotton T-shirt" />
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Name</p>
                                        <p><span class="text-muted">{{ $item['name'] }}</span></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3 d-flex">

                                        <div class="number">
                                          <p class="lead fw-normal mb-2">Quantity</p>
                                            <span class="minus"> <a
                                                    href="{{ route('editmoins', ['name' => $item['arrayname']]) }}"
                                                    style="text-decoration: none"><i class="bi bi-dash"></i></a>
                                            </span>
                                            <span class="qte_prod_panier">{{ $item['stock_quantity'] }}</span>
                                            <span class="plus"> <a
                                                    href="{{ route('editplus', ['name' => $item['arrayname']]) }}"
                                                    style="text-decoration: none"><i class="bi bi-plus-lg"></i></a></span>
                                        </div>
                                        {{-- delete --}}
                                        
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                      <p class="lead fw-normal mb-2">Price</p>
                                        <h5 class="mb-0">{{ $item['price'] }} Dh</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                      <form method="POST" action="{{ route('delete-data') }}" >
                                        @csrf
                                        <input type="hidden" name="session_key" value="{{ $key }}">
                                        <button type="submit" style="border: none ; background:white">
                                            <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                        </button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <div class="card mb-4">
                        <div class="card-body p-4 d-flex flex-row">
                            <div class="form-outline flex-fill">
                                <label class="form-label" for="form1">Total : {{ $total }} DH </label>
                            </div>
<div>
  <button type="button" class="btn  btn-block btn-sm" style="background:black">
    <a href="{{route('Home')}}"
        style="text-decoration: none ; color:rgb(255, 255, 255)">annuler</a>

</button>
<button type="button" class="btn  btn-block btn-md" style="background:#bd031c ">
  <a href="{{ route('commandshow') }}"
      style="text-decoration: none ; color:rgb(255, 255, 255)">Proceed to Pay</a>
      
</button>
</div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
@endsection
