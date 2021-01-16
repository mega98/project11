<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Produk1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('public')}}/assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/animate.css">
    
    <link rel="stylesheet" href="{{url('public')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="{{url('public')}}/assets/css/aos.css">

    <link rel="stylesheet" href="{{url('public')}}/assets/css/ionicons.min.css">

    <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{url('public')}}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/icomoon.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">Pasline@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home">PASLINE</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="home" class="nav-link">Home</a></li>
              <li class="nav-item dropdown">
              <li class="nav-item active"><a href="produk1" class="nav-link">Produk</a></li>
              <li class="nav-item dropdown">
              <li class="nav-item active"><a href="checkout" class="nav-link">Checkout</a></li>
              <li class="nav-item dropdown">

              <li class="nav-item"><a href="about" class="nav-link">About</a></li>
              <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
              <li class="nav-item cta cta-colored"><a href="cart" class="nav-link"><span class="icon-shopping_cart"></span>[+10]</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

<section class="ftco-section">
    	
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>

                    <div class="card-body">
                        <form action="{{url('produk/filter')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label" >Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$nama ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label" >Stok</label>
                                <input type="text" class="form-control" name="stok" value="{{$nama ?? ''}}">
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                    <label for="" class="control-label" >Harga Min</label>
                                    <input type="text" class="form-control" name="harga_min" value="{{$nama ?? ''}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                    <label for="" class="control-label" >Harga Max</label>
                                    <input type="text" class="form-control" name="harga_max" value="{{$nama ?? ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        Produk
                    </div>

                    <div class="card-body">
                            <div class="form-group">
                                <div class="left">
                                <label for="" class="control-label" >Bayam</label>
                                <a href="public/assets/images/bayam.png" class="image-popup"><img src="public/assets/images/bayam.png" class="img-fluid" alt="Colorlib Template"></a>
                                <p class="price"><span>Rp.15000</span></p>
                                <p>Sayuran yang berasal dari Asia ini memiliki banyak nutrisi termasuk vitamin dan mineral yang baik untuk tubuh. Vitamin yang banyak terdapat pada bayam yaitu vitamin A, vitamin C, vitamin B kompleks, vitamin K, dan vitamin E. Sedangkan mineral-mineral utama yang dimiliki bayam adalah magnesium, zat besi, asam folat, kalsium, potasium, dan sodium. Bayam juga mengandung banyak serat, klorofil, dan antioksidan. Selain itu, sayuran hijau yang satu ini mengandung sedikit kalori dan lemak.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5 mt-5">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group">
                                <div class="center">
                                <label for="" class="control-label" >Bayam</label>
                                <a href="public/assets/images/bayam.png" class="image-popup"><img src="public/assets/images/bayam.png" class="img-fluid" alt="Colorlib Template"></a>
                                <p class="price"><span>Rp.15000</span></p>
                                <p>Sayuran yang berasal dari Asia ini memiliki banyak nutrisi termasuk vitamin dan mineral yang baik untuk tubuh. Vitamin yang banyak terdapat pada bayam yaitu vitamin A, vitamin C, vitamin B kompleks, vitamin K, dan vitamin E. Sedangkan mineral-mineral utama yang dimiliki bayam adalah magnesium, zat besi, asam folat, kalsium, potasium, dan sodium. Bayam juga mengandung banyak serat, klorofil, dan antioksidan. Selain itu, sayuran hijau yang satu ini mengandung sedikit kalori dan lemak.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Pasline</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Indonesia City</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@pasline.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Pasline can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Pasline</a>
						  <!-- Link back to Pasline can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{url('public')}}/assets/js/jquery.min.js"></script>
  <script src="{{url('public')}}/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{url('public')}}/assets/js/popper.min.js"></script>
  <script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
  <script src="{{url('public')}}/assets/js/jquery.easing.1.3.js"></script>
  <script src="{{url('public')}}/assets/js/jquery.waypoints.min.js"></script>
  <script src="{{url('public')}}/assets/js/jquery.stellar.min.js"></script>
  <script src="{{url('public')}}/assets/js/owl.carousel.min.js"></script>
  <script src="{{url('public')}}/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="{{url('public')}}/assets/js/aos.js"></script>
  <script src="{{url('public')}}/assets/js/jquery.animateNumber.min.js"></script>
  <script src="{{url('public')}}/assets/js/bootstrap-datepicker.js"></script>
  <script src="{{url('public')}}/assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{url('public')}}/assets/js/google-map.js"></script>
  <script src="{{url('public')}}/assets/js/main.js"></script>
    
  </body>
</html>