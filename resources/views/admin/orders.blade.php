@extends('admin.layout.layoutadmin')
  @section('content')
  <br> <br>  <br> <br> 
  <div id="wrapper">
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">

            <div class="container-fluid">
                <div class="card shadow">
                  
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">Orders Info</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>commande Name</th>
                                        <th>Customer</th>
                                        <th>City</th>
                                        <th>adresse</th>
                                        <th>Phone</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Situation</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach ($orders as $order)
<tr>
<td>{{$order->name_commandes}} </td>
<td>{{$order->lastname}}</td>
<td>{{$order->ville}}</td>
<td>{{$order->adresse}}</td>
<td>{{$order->num1}}</td>
<td>{{$order->product_name}}</td>
<td>{{$order->product_price}}</td>
<td>{{$order->product_qte}}</td>
<td>
  <select>
    <option>Done</option>
    <option>Not Yet</option>

  </select>
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

  @endsection