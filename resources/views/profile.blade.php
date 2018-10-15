@extends('layouts.prof')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-secondary border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Service Center Profile</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-warning">Edit</a>
                </div>
              </div>
            </div>
                  
                <div class="card-body">
                    <div class="card card-shadow">
                        <div class="row justify-content-center">
                          <form action = "profile" method = "get" enctype="mutipart/form-data">
                             <br/>
                            <div class="row justify-content-center">
                              <div class="row">
                                <center>
                              <img src="./assets/img/{{$pic->name}}" alt="Rounded image" class="img-fluid rounded shadow" style="width: 250px;">
                                </center>
                                </div>
                              </div>

                            </div>
                              <br/>
                            <h6 class="heading-small text-muted mb-4">User Info</h6>
                            <div class="pl-lg-4">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="input-username">Username</label>
                                  <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="{{$user->name}}" value="">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email address</label>
                                  <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="{{$user->email}}">
                                  </div>
                                </div>
                              </div>

                            </div>
                            <hr class="my-4" />
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Service Center Info</h6>
                            <div class="pl-lg-4">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="form-control-label" for="input-address">Service ceter name</label>
                                  <input id="input-address" class="form-control form-control-alternative" placeholder="{{$service->name}}" value="" type="text">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="input-city">Business Reg:NO</label>
                                  <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="{{$service->regid}}" value="">
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="input-country">Registration Year</label>
                                    <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="{{$service->regyr}}" value="">
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="input-country">Telephone Number</label>
                                    <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="{{$service->phno}}" value="">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--hr class="my-4" /!-->
                            <!-- Description -->
                          </form>
                        </div>
                      </div>
                </div>
                
                      
            </ vlhy7o   m2.div>
        </div>
        
    </div>
    
</div>
@endsection
