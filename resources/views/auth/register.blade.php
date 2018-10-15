@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                                @csrf
        

<div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-settings"></i>&nbsp;Basic</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-pin-3"></i>&nbsp;Location</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-pin-3"></i>&nbsp;Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"><i class="ni ni-circle-08"></i>&nbsp;Login info</a>
        </li>
    </ul>
</div>
<div class="card shadow">
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <!--tab:basic!-->
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">

                <!-- div item -> center name !-->
                <div class="form-group row">
                        <label for="service" class="col-md-4 col-form-label text-md-right">{{ __('Service Center Name') }}</label>

                        <div class="col-md-6">
                            <input id="service" type="text" class="form-control" name="service" required>
                        </div>
                </div>  

                <!-- div item -> owner name!-->
                <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Owner Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                </div>

                <!-- div item -> registration id !-->
                <div class="form-group row">
                        <label for="regid" class="col-md-4 col-form-label text-md-right">{{ __('Registration no:') }}</label>

                        <div class="col-md-6">
                            <input id="regid" type="text" class="form-control" name="regid" required>
                        </div>
                </div> 

                <!-- div item -> registered year !-->
                <div class="form-group row">
                        <label for="regyr" class="col-md-4 col-form-label text-md-right">{{ __('Registerd Year') }}</label>

                        <div class="col-md-6">
                            <input id="regyr" type="text" class="form-control" name="regyr" required>
                        </div>
                </div> 

                <!-- telephone no: with validation!-->
                <div class="form-group row">
                        <label for="phno" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                        <div class="col-md-6">
                            <input id="phno" type="text" class="form-control" name="phno" required>
                        </div>
                </div> 

            </div>
            <!-- tab:Location!-->
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
            </div>
            <!--tab:services!-->
            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                <p>Services</p>    
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" name = "services[]" id="services1" type="checkbox" value = "Roadside breakdown">
                        <label class="custom-control-label" for="services1">
                          <span>Roadside breakdown</span>
                        </label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" name = "services[]" id="services2" type="checkbox" value = "Detailing Services">
                        <label class="custom-control-label" for="services2">
                          <span>Detailing Services</span>
                        </label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" name = "services[]" id="services3" type="checkbox" value = "Car wash">
                        <label class="custom-control-label" for="services3">
                          <span>Car wash</span>
                        </label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" name = "services[]" id="services4" type="checkbox" value = "Wheel allignment">
                        <label class="custom-control-label" for="services4">
                          <span>Wheel allignment</span>
                        </label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" name = "services[]" id="services5" type="checkbox" value = "Lubrication Services">
                        <label class="custom-control-label" for="services5">
                          <span>Lubrication Services</span>
                        </label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" name = "services[]" id="services6" type="checkbox" value = "Air conditioning Services">
                        <label class="custom-control-label" for="services6">
                          <span>Air conditioning Services</span>
                        </label>
                </div>
            </div>
            <!--tab:login!-->
            <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                <!-- div item -> email !-->
                <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                <!-- div item -> password !-->
                <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                <!-- div item -> confirm !-->
                <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                               <button type="submit" class="btn btn-warning">
                                   {{ __('Register') }}
                               </button>
                           </div>
                    </div>

                    <!--  end of the form !-->

            </div>
        </div>
    </div>
</div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection