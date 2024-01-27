@extends('admin.layout.layoutadmin')
  @section('content')


  <div class="home-content">
      <div id="wrapper">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
          <div class="d-flex flex-column" id="content-wrapper">
              <div id="content">

                  <div class="container-fluid">
                      <div class="card shadow">
                        
                          <div class="card-header py-3">
                              <p class="text-primary m-0 fw-bold">Products Info</p>
                          </div>
                          <div class="card-body">
                              <div class="row">
                              </div>
                              <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                  <table class="table my-0" id="dataTable">
                                      <thead>
                                          <tr>
                                              <th>Name</th>
                                              <th>description</th>
                                              <th>Brand</th>
                                              <th>Category</th>
                                              <th>image</th>
                                              <th>price</th>
                                              <th>oldprice</th>
                                              <th>stock</th>
                                              <th>Action</th>


                                          </tr>
                                      </thead>
                                      <tbody>
  @foreach ($products as $pro)
  <tr>
      <td>{{$pro->name}} </td>
      <td>{{$pro->description}}</td>
      <td>{{$pro->Brand}}</td>
      <td>{{$pro->Category_Name}}</td>
      <td><img class=" me-2" width="100" height="80" src="{{$pro->image}}"></td>
      <td>{{$pro->price}} Dh</td>
      <td>{{$pro->oldprice}} Dh</td>
      <td>{{$pro->stock_quantity}}</td>
      <td>
        <a href="{{route('UpdatePro',$pro->id)}}" style="text-decoration: none ;color:#bd031c"><i class="bi bi-pencil-square"></i></a>
        <a href="{{route('deleteproduct' ,$pro->id)}}" style="text-decoration: none ;color:#bd031c"><i class="bi bi-trash3-fill"></i></a>
      </td>


  </tr>
  
  @endforeach
</tbody>
</table>
</div>
                          
                      </div>
                  </div>
              </div>
          </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
      </div>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/bs-init.js"></script>
      <script src="assets/js/theme.js"></script>
  </div>
  <br>
  <div style="display: flex; align-items: center; justify-content: center">
    <h4>Add Product</h4>
  </div>
  
<div style="display: flex; justify-content: center;">
  <form method="POST" action="{{ route('addProduct') }}" enctype="multipart/form-data">
    @csrf
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" placeholder="Name" name="name" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="form6Example2" class="form-control" placeholder="Category" name="Category_Name" />
            </div>
        </div>

    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="text" id="form6Example3" class="form-control" placeholder="description" name="description" />
    </div>
    <div class="form-outline mb-4">
      <input type="text" id="form6Example5" class="form-control" placeholder="Brand" name="Brand" />
  </div>
    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="file" id="form6Example4" class="form-control" name="image" />
    </div>

    <!-- Text input -->

    <!-- Number inputs -->
    <div class="form-outline mb-4">
        <input type="number" id="form6Example6" class="form-control" name="price" placeholder="Price" />
    </div>
    <div class="form-outline mb-4">
        <input type="number" id="form6Example7" class="form-control" name="oldprice" placeholder="Old Price" />
    </div>
    <div class="form-outline mb-4">
        <input type="number" id="form6Example8" class="form-control" name="stock_quantity" placeholder="Stock" />
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Add Product</button>
</form>



</div>
  @endsection