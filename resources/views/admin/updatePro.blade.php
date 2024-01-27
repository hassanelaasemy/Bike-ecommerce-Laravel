@extends('admin.layout.layoutadmin')
  @section('content')

<br> <br> <br> <br>
  <div style="display: flex; align-items: center; justify-content: center">
    <h4>Update Product</h4>
  </div>
  
  
<div style="display: flex; justify-content: center;">
  <form method="POST" action="{{route('updateProduct',$product->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" value="{{$product->name}}" placeholder="Name" name="name" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form6Example2" class="form-control" placeholder="Category" value="{{$product->Category_Name}}" name="Category_Name" />
            </div>
        </div>

    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="text" id="form6Example3" class="form-control" placeholder="description" value="{{$product->description}}" name="description" />
    </div>
    <div class="form-outline mb-4">
      <input type="text" id="form6Example5" class="form-control" placeholder="Brand" value="{{$product->Brand}}" name="Brand" />
  </div>
    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="file" id="form6Example4" class="form-control" value="{{$product->image}}" name="image" />
    </div>

    <!-- Text input -->

    <!-- Number inputs -->
    <div class="form-outline mb-4">
        <input type="number" id="form6Example6" class="form-control" name="price"  value="{{$product->price}}" placeholder="Price" />
    </div>
    <div class="form-outline mb-4">
        <input type="number" id="form6Example7" class="form-control" name="oldprice" value="{{$product->oldprice}}" placeholder="Old Price" />
    </div>
    <div class="form-outline mb-4">
        <input type="number" id="form6Example8" class="form-control" name="stock_quantity" value="{{$product->stock_quantity}}" placeholder="Stock" />
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Update Product</button>
</form>



</div>
  @endsection