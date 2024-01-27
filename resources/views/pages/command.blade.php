@extends('Layouts.layout')
@section('content')
<br> <br> <br>

  <div class="container">
      <div class="card shadow-lg o-hidden border-0 my-5">
          <div class="card-body p-0">
              <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                  <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/liraison.png&quot;);"></div>

              </div>
                  
                  <div class="col-lg-7">
                      <div class="p-5">
                          <div class="text-center">
                              <h4 class="text-dark mb-4">Merci pour votre confiance!</h4>
                          </div>
                          <form class="user" action="{{ route('sendcommand') }}" method="POST">
                            @csrf
                              <div class="row mb-3">
                                  <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Prénom" name="name"></div>
                                  <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleLastName" placeholder="Nom" name="lastname"></div>
                              </div>
                              <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="ville" name="ville"></div>
                              <div class="row mb-3">
                                  <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="examplePasswordInput" placeholder="adresse" name="adresse"></div>
                                  <div class="col-sm-6"><input class="form-control form-control-user" type="number" id="exampleRepeatPasswordInput" placeholder="Numéro de téléphone 1" name="num1"></div>

                              </div>
                              <hr>

                              <button class="btn  d-block btn-user w-100" type="submit" style="background:#bd031c ; color:black ; font-size:15px">Ajouter commande</button>

                          </form>
                  
                      </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>

@endsection
