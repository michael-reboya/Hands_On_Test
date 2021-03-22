<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{ asset('assets/themes/bootshop/bootstrap.min.css') }}" media="screen"/>
    <link href="{{ asset('assets/themes/css/base.css') }}" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="{{ asset('assets/themes/css/bootstrap-responsive.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/themes/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="{{ asset('assets/themes/js/google-code-prettify/prettify.css') }}" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset('assets/themes/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/themes/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/themes/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/themes/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/themes/images/ico/apple-touch-icon-57-precomposed.png') }}">
	<style type="text/css" id="enject"></style>
	@livewireStyles
	@livewireScripts
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	@if(Route::has('login'))
		@auth
			@if(Auth::user()->utype === 'ADM')
				<div class="span6">Welcome! <strong>{{Auth::user()->name}}</strong></div>
			@else
				<div class="span6">Welcome! <strong>{{Auth::user()->name}}</strong></div>
			@endif
		@else
		<div class="span6">Welcome! <strong>Guest</strong></div>
		@endif
	@endif
	<div class="span6">
	<div class="pull-right">
			<a href="/cart"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white">
				@if (Cart::count() > 0)
				</i> [ {{Cart::count()}} ] Itemes in your cart </span> 
				@else
				
				</i> [ 0 ] Iteme(s) in your cart </span> 
				@endif
			</a> 
		 
		@if(Route::has('login'))
			@auth
				@if(Auth::user()->utype === 'ADM')
					<a title="My Account" href="">My Account<span class="">({{Auth::user()->name}})</span></a>
					<span>|</span>
					<a title="Dashboard" href="{{ route('admin.dashboard') }}"><span class="">Dashboard</span></a>
					<span>|</span>
					<a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="">Logout</span></a>
					<form id="logout-form" method="POST" action="{{ route('logout') }}">
						@csrf
					</form>
				@else
					<a title="My Account" href="">My Account<span class="">({{Auth::user()->name}})</span></a>
					<span>|</span>
					<a title="Dashboard" href="{{ route('user.dashboard') }}"><span class="">Dashboard</span></a>
					<span>|</span>
					<a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="">Logout</span></a>
					<form id="logout-form" method="POST" action="{{ route('logout') }}">
						@csrf
					</form>
				@endif
			@else
				<a href="{{route('login')}}"  style="padding-right:0"><span class="btn btn-small btn-success">Login</span></a>
				<a href="{{route('register')}}"  style="padding-right:0"><span class="btn btn-small btn-info">Register</span></a>
			@endif
	 	@endif
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="/"><img src="{{ asset('assets/themes/images/logo.png') }}" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="/shop">Products</a></li>
	 <li class=""><a href="normal.html">Delivery</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>

    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="{{ asset('assets/themes/images/carousel/1.png') }}" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="{{ asset('assets/themes/images/carousel/2.png') }}" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img src="{{ asset('assets/themes/images/carousel/3.png') }}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="{{ asset('assets/themes/images/carousel/4.png') }}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="{{ asset('assets/themes/images/carousel/5.png') }}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="{{ asset('assets/themes/images/carousel/6.png') }}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<!-- <div class="well well-small"><a id="myCart" href="/cart"><img src="{{ asset('assets/themes/images/ico-cart.png') }}" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div> -->
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS [230]</a>
				<ul>
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> CLOTHES [840] </a>
			<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
				<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li>
			<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
			<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
			<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="{{ asset('assets/themes/images/products/panasonic.jpg') }}" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Panasonic</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="{{ asset('assets/themes/images/products/kindle.png') }}" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="{{ asset('assets/themes/images/payment_methods.png') }}" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
		
{{$slot}}

<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="{{ asset('assets/themes/images/facebook.png') }}" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="{{ asset('assets/themes/images/twitter.png') }}" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="{{ asset('assets/themes/images/youtube.png') }}" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="{{ asset('assets/themes/js/jquery.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/themes/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/themes/js/google-code-prettify/prettify.js') }}"></script>
	
	<script src="{{ asset('assets/themes/js/bootshop.js') }}"></script>
    <script src="{{ asset('assets/themes/js/jquery.lightbox-0.5.js') }}"></script>


	<script src="https://www.paypal.com/sdk/js?client-id=AVAI8lvWeEfd-RTldrWNzmHRJzla7rp5PX60iEdfpFUnztfIvvIzdRnHMfffnBojT2uFCG-sLGLzMH7g"> </script>
		<script>
		paypal.Buttons({
			createOrder: function(data, actions) {
			// This function sets up the details of the transaction, including the amount and line item details.
			return actions.order.create({
				purchase_units: [{
				amount: {
					value: '{{Cart::total()}}'
				}
				}]
			});
			},
			onApprove: function(data, actions) {
			// This function captures the funds from the transaction.
			return actions.order.capture().then(function(details) {
				// This function shows a transaction success message to your buyer.
				alert('Thank you for your Purchase ' + details.payer.name.given_name);
				document.location.href="/";
			});
			}
		}).render('#paypal-button-container');
		//This function displays Smart Payment Buttons on your web page.

		</script>
</body>
</html>