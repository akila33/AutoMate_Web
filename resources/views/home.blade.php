@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to Automate</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="row justify-content-center">
                        <div class="col-lg-12">
                          <div class="row row-grid">
                                <div class="col-lg-4">
                                        <div class="card card-lift--hover shadow border-0">
                                          <div class="card-body py-5">
                                            <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                                              <i class="ni ni-single-02"></i>
                                            </div>
                                            <h6 class="text-warning text-uppercase">Profile</h6>
                                            <p class="description mt-3">Update details.</p>
                                            
                                            <a href="profile" class="btn btn-warning mt-4">Go</a>
                                          </div>
                                        </div>
                                      </div>
                            <div class="col-lg-4">
                                    <div class="card card-lift--hover shadow border-0">
                                      <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                                          <i class="ni ni-bullet-list-67"></i>
                                        </div>
                                        <h6 class="text-warning text-uppercase">Requests</h6>
                                        <p class="description mt-3">Manage requests.</p>
                                        
                                        <a href="#" class="btn btn-warning mt-4">Go</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                        <div class="card card-lift--hover shadow border-0">
                                          <div class="card-body py-5">
                                            <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                                              <i class="ni ni-chart-bar-32"></i>
                                            </div>
                                            <h6 class="text-warning text-uppercase">Reports</h6>
                                            <p class="description mt-3">Generate reports.</p>
                                            
                                            <a href="#" class="btn btn-warning mt-4">Go</a>
                                          </div>
                                        </div>
                                      </div>
                          </div>
                        </div>
                      </div>
                      
            </div>
        </div>
    </div>
</div>
@endsection
