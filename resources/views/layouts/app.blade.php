<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

</head>
<body class="home">
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template" style="width: 100px;"><e>CPSB - UNIFRANZ</e></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Principal</a></li>
					<li><a href="mapa.html">Mapa</a></li>
					
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
<header id="head">
		<div class="container">
        <div id="app">
        
            @yield('content')
    </div>
		</div>



</header>
<div class="container">

<h2 class="text-center top-space">Calculadora Solar</h2>
<br>

<div class="row">
    <div class="col-sm-6">
        <h3>Como Ayudo a Mejorar mi Consumo de Energia??</h3>
        <p>I'd highly recommend you <a href="http://www.sublimetext.com/">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
    </div>
    <div class="col-sm-6">
        <h3>Me Sirve esta Calculadora de Consumo de Energia?</h3>
        <p>
            Well, there are thousands of stock art galleries, but personally, 
            I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a> 
            and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
    </div>
    
</div> <!-- /row -->
</div>
<footer id="footer" class="top-space">

<div class="footer1">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3 widget">
                <h3 class="widget-title">Contact</h3>
                <div class="widget-body">
                    <p>+234 23 9873237<br>
                        <a href="mailto:#">some.email@somewhere.com</a><br>
                        <br>
                        234 Hidden Pond Road, Ashland City, TN 37015
                    </p>	
                </div>
            </div>

            <div class="col-md-3 widget">
                <h3 class="widget-title">Follow me</h3>
                <div class="widget-body">
                    <p class="follow-me-icons">
                        <a href=""><i class="fa fa-twitter fa-2"></i></a>
                        <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                        <a href=""><i class="fa fa-github fa-2"></i></a>
                        <a href=""><i class="fa fa-facebook fa-2"></i></a>
                    </p>	
                </div>
            </div>

            <div class="col-md-6 widget">
                <h3 class="widget-title">Text widget</h3>
                <div class="widget-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                    <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                </div>
            </div>

        </div> <!-- /row of widgets -->
    </div>
</div>

<div class="footer2">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 widget">
                <div class="widget-body">
                    <p class="simplenav">
                        <a href="#">Home</a> | 
                        <a href="about.html">About</a> |
                        <a href="sidebar-right.html">Sidebar</a> |
                        <a href="contact.html">Contact</a> |
                        <b><a href="signup.html">Sign up</a></b>
                    </p>
                </div>
            </div>

            <div class="col-md-6 widget">
                <div class="widget-body">
                    <p class="text-right">
                        Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
                    </p>
                </div>
            </div>

        </div> <!-- /row of widgets -->
    </div>
</div>

</footer>	






    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>

</html>
