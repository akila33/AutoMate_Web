<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{URL::to('/')}}/landing/assets/paper_img/AutoMate Logo1.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>AutoMate</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="{{URL::to('/')}}/landing/bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="{{URL::to('/')}}/landing/assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="{{URL::to('/')}}/landing/assets/css/demo.css" rel="stylesheet" /> 
    <link href="{{URL::to('/')}}/landing/assets/css/examples.css" rel="stylesheet" /> 
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
      
</head>
<body>
    
    <nav class="navbar navbar-default" role="navigation-demo" id="demo-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="www.creative-tim.com">AutoMate</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
          <ul class="nav navbar-nav navbar-right">
              
                @if (Route::has('login'))
                        @if (Auth::check())
                            <li><a href="{{ url('/home') }}" class="btn btn-simple">Home</a></li>
                        @else
                            <li><a href="{{ url('/login') }}" class="btn btn-simple">Login</a></li>
                            <li><a href="{{ url('/register') }}" class="btn btn-simple">Register</a></li>
                        @endif
                @endif
                
           </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-->
    </nav>         
    <div class="alert alert-danger landing-alert">
         <div class="container text-center">
             <h5>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."

</h5>
        </div>
    </div>
    
    <div class="wrapper">
        <div class="landing-header" style="background-image: url('{{URL::to('/')}}/landing/assets/paper_img/automate.jpg');">
            <div class="container">
                <div class="motto">
                    <h1 class="title-uppercase"><b><center>AutoMate</center></b></h1>
                    <h3><b><center>Auto mobile service providing platform.</center></b></h3>
                    <br />
                    
                   <center> <a class="btn btn-default btn-fill">Sign up now</a></center>
                </div>
            </div>    
        </div>
        <div class="main">
            <div class="section text-center landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Our Service</h2>
                            <h5> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </h5>
                            <br />
                            
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="section section-light-brown landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 column">
                            <h4>Profile Management</h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="col-md-4 column">
                            <h4>Handling Service Requests</h4>
                             <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="col-md-4 column">
                            <h4>Report Generation</h4>
                             <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section section-dark text-center landing-section">
                <div class="container">
                    <h2>Our Team</h2>
                    <div class="col-md-3">
                        <div class="team-player">
                            <img src="{{URL::to('/')}}/landing/assets/paper_img/male11.png" alt="Thumbnail Image" class="img-circle img-responsive">
                            <h5>Akila <br /><small class="text-muted">UI/UX</small></h5>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-player">
                            <img src="{{URL::to('/')}}/landing/assets/paper_img/female11.png" alt="Thumbnail Image" class="img-circle img-responsive">
                            <h5>Sasanka <br /><small class="text-muted">Production</small></h5>
                             <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-player">
                            <img src="{{URL::to('/')}}/landing/assets/paper_img/female11.png" alt="Thumbnail Image" class="img-circle img-circle img-responsive">
                            <h5>Dinesha <br /><small class="text-muted">UI/UX</small></h5>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
					<div class="col-md-3">
                        <div class="team-player">
                            <img src="{{URL::to('/')}}/landing/assets/paper_img/male11.png" alt="Thumbnail Image" class="img-circle img-circle img-responsive">
                            <h5>Tharindu <br /><small class="text-muted">UI/UX</small></h5>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-center">Keep in touch?</h2>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <label>Message</label>
                                <textarea class="form-control" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4">
                                        <button class="btn btn-danger btn-block btn-lg btn-fill">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>     
    </div>
    
    <footer class="footer-demo section-dark">
        <div class="container">
            <nav class="pull-left">
                <ul>
    
                    <li>
                        <a href="http://www.creative-tim.com">
                            AutoMate
                        </a>
                    </li>
                   
                    <li>
                        <a href="http://www.creative-tim.com/product/rubik">
                            Licenses 
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                made with <i class="fa fa-heart heart"></i> by AutoMate
            </div>
        </div>
    </footer>

</body>

<script src="{{URL::to('/')}}/landing/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="{{URL::to('/')}}/landing/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="{{URL::to('/')}}/landing/bootstrap3/js/bootstrap.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="{{URL::to('/')}}/landing/assets/js/ct-paper-checkbox.js"></script>
<script src="{{URL::to('/')}}/landing/assets/js/ct-paper-radio.js"></script>
<script src="{{URL::to('/')}}/landing/assets/js/bootstrap-select.js"></script>
<script src="{{URL::to('/')}}/landing/assets/js/bootstrap-datepicker.js"></script>

<script src="{{URL::to('/')}}/landing/assets/js/ct-paper.js"></script>
    
</html>