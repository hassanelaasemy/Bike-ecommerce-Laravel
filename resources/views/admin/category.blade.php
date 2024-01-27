@extends('admin.layout.layoutadmin')
@section('content')
    <div class="home-content">
        <div id="wrapper">
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="container-fluid">
                        <div class="card shadow">

                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold">category Info</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                </div>
                                <div class="table-responsive table mt-2" id="dataTable" role="grid"
                                    aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $cat)
                                                <tr>
                                                    <td>{{ $cat->Category_Name }} </td>
                                                    <td>{{ $cat->description }}</td>
                                                    <td>
                                                        <a href="{{ route('deleteCategory', $cat->id) }}"
                                                            style="text-decoration: none ;color:#bd031c"><i
                                                                class="bi bi-trash3-fill"></i></a>
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
            <h4>Add Category</h4>
        </div>
        @if (session()->has('message1'))
            <div class="alert alert-success">
                {{ session('message1') }}
            </div>
        @endif
        <div style="display: flex; justify-content: center;">
            <form method="POST" action="{{ route('addCategory') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form6Example1" class="form-control" placeholder="Name"
                                name="Category_Name" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form6Example2" class="form-control" placeholder="description"
                                name="description" />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Add Category</button>
            </form>
        </div>
    @endsection
