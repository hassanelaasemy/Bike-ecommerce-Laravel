@extends('Layouts.layout')
  @section('content')

  <div class="product_shose">
    <div class="container-fluid cont_prod">
        <div class="image_product_shose">
            <img src="{{ url($productone->image) }}" alt="err">
        </div>
        <div class="info_product_shose">
            <h4>Brand :{{$productone->Brand}}</h4>
            <h3>Bike Name :{{$productone->name}}</h3>
            <div>
                <div class="price_prod">
                    <p class="p1">{{$productone->price}}DH</p>
                    <p class="p2">{{$productone->oldprice}}DH</p>
                </div>
                <hr>
            </div>
            <div class="info_prod">
                {{$productone->description}}
            </div>
            <div class="btns">
                <button class="btn"> <a href="{{route('create.session' , $productone->id)}}" style="color: black">Ajouter Au Panier</a></button>
            </div>
        </div>
    </div>

</div>
  @endsection