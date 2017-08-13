<!DOCTYPE html>
<html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the title of your site -->
	<title>Global Technology</title>
	<!-- ========= Favicon Icons ========= -->
	<link rel="shortcut icon" href="images/favicon/favicon.ico">
	<!-- Standard iPhone Touch Icon-->
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png">
	<!-- Retina iPhone Touch Icon-->
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
	<!-- Standard iPad Touch Icon-->
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
	<!-- Retina iPad Touch Icon-->
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png">
	<!-- include Google fonts  -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic%7CPlayfair+Display:400,400italic,700,700italic,900,900italic%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900%7CRaleway:400,100,200,300,500,600,700,800,900%7CGreat+Vibes%7CPoppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<!-- include the site stylesheet of bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the font awesome stylesheet  -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- include the stylesheets of headers and footer of the page  -->
	<link rel="stylesheet" type="text/css" href="css/page-assets.css">
	<!-- include the helping elements stylesheets of  the page  -->
	<link rel="stylesheet" type="text/css" href="css/helper-elements.css">
	<!-- include the site stylesheet  -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- include the site color stylesheet  -->
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
	<!-- include the site animation stylesheet  -->
	<link rel="stylesheet" href="css/animate.css" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>



.navbar-right{
position: relative;
left:150px;
}

	</style>
</head>
<body>
	
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<div class="w1">
			<!-- header of the page style2 -->
			<header id="header" class="style8">
				<div class="container">
					<div class="row">
						<!-- header top -->
						<div class="col-xs-12 header-top">
							<!-- Number -->
							<nav class="nav language-nav">
								<p> Contact us on: 011111111 </p>




				
							</nav>




							<!-- social -->
							<nav class="top-nav">
								<ul>
									<a href="#"><i class="afa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
									
								</ul>
								
							</nav>

 <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
						
							

				

                              
						</div>

					</div>
					</div>

					<div class="row">
						<div class="col-xs-12">
							<!-- page logo -->
							<div class="logo">
								<a href="#">
									<img src="images/logo.png" alt="Fekra" class="img-responsive w-logo">
									<img src="images/logo-2.png" alt="Fekra" class="img-responsive b-logo">
								</a>
							</div>
							<div class="holder">
								<!-- icon list -->
								<ul class="list-unstyled icon-list">
									<li><a href="#" class="search-opener opener-icons"><i class="fa fa-search"></i></a></li>
								</ul>
								<!-- main navigation of the page -->
								<nav id="nav">
									<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
									<div class="nav-holder">
										<ul class="list-inline nav-top">
											<li>
												<a href="/index">Home</a>
											</li>
											<li>
												<a href="/about">About</a>
											</li>
											<li>
												<a href="/products">New Products</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li>
															<a href="/products">Category1</a>
															
														</li>
														<li>
															<a href="/products">Category1</a>
															
														</li>
														<li>
															<a href="/products">Category1</a>
															
														</li>
													</ul>
												</div>
											</li>
											
											<li>
												<a href="/products">Used Products</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li>
															<a href="/products">Category1</a>
															
														</li>
														<li>
															<a href="/products">Category1</a>
															
														</li>
														<li>
															<a href="/products">Category1</a>
															
														</li>
													</ul>
												</div>
											</li>
											<li>
												<a href="formproduct.html">Sell Product</a>
											</li>
											<li>
												<a href="/contact">Contact</a>
											</li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- search popup -->
			<div class="search-popup win-height">
				<div class="holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="close-btn">close</a>
								<form action="#" class="search-form">
									<fieldset>
										<input type="search" placeholder="search..." class="search">
										<button class="submit"><i class="fa fa-search"></i></button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- contain main informative part of the site -->
			<main id="main" role="main">
				<!-- shop gallery -->
				<div data-rotate="true" class="shop-gallery beans-slider">
					<div class="beans-mask">
						<div class="beans-slideset">
							<!-- beans-slide -->
							<div class="beans-slide">
								<div class="stretch">
									<img src="http://placehold.it/1920x1000" alt="image description">
								</div>
								<section class="container">
									<div class="row">
										<div class="col-xs-12 shop-content win-height">
											<header class="shop-heading">
												<h1><span class="txt">Canon</span> New</h1>
												<div class="button-slider">
													<a href="shop-grid-4column.html" class="btn btn-f-default">VIEW new</a>
													<a href="shop-grid-3column-leftsidebar.html" class="btn btn-f-default">VIEW USED</a>
												</div>
											</header>
										</div>
									</div>
								</section>
							</div>
							<!-- beans-slide -->
							<div class="beans-slide">
								<div class="stretch">
									<img src="http://placehold.it/1920x1000" alt="image description">
								</div>
								<section class="container">
									<div class="row">
										<div class="col-xs-12 shop-content add win-height">
											<header class="shop-heading">
												<h1>Canon</h1>
												<p>Suspendisse et metus eu massa lobortis condimentum sed ut orci. Nullam viverra dapibus risus, eu tristique nisl sollicitudin at. Etiam iaculis blandit libero.</p>
												<div class="button-slider">
													<a href="http://fekra.csshunter.com" class="btn btn-f-default">SHOP NOW</a>
												</div>
											</header>
										</div>
									</div>
								</section>
							</div>
							<!-- beans-slide -->
							<div class="beans-slide">
								<div class="stretch">
									<img src="http://placehold.it/1920x1000" alt="image description">
								</div>
								<section class="container">
									<div class="row">
										<div class="col-xs-12 shop-content add2 win-height">
											<header class="shop-heading">
												<h1>Canon</h1>
												<p>Suspendisse et metus eu massa lobortis condimentum sed ut orci. Nullam viverra dapibus risus, eu tristique nisl sollicitudin at. Etiam iaculis blandit libero.</p>
												<div class="button-slider">
													<a href="http://fekra.csshunter.com" class="btn btn-f-default">SHOP NOW</a>
												</div>
											</header>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div class="beans-pagination"></div>
				</div>
				<!-- collection block -->
				<div class="collection-block dark-bottom-border">
					<div class="container">
						<div class="row">
							<div class="col-sm-8 col-xs-12">
								<!-- collection-col -->
								<div class="collection-col women" data-animate="fadeInUp" data-delay="300">
									<img src="http://placehold.it/770x230" alt="image description">
									<div class="collection-over">
										<div class="frame">
											<div class="box">
												<h2><span class="txt">WOMEN FASHION</span> COLLECTION</h2>
												<a href="shop-checkout.html" class="btn-shop">SHOP NOW <i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-12" data-animate="fadeInUp" data-delay="300">
										<!-- collection-col -->
										<div class="collection-col">
											<img src="http://placehold.it/370x231" alt="image description">
											<div class="collection-over add">
												<div class="frame">
													<div class="box">
														<h2><span class="txt">GET 10% OFF</span> MEN WEAR</h2>
														<a href="shop-checkout.html" class="btn-shop">FIND NOW <i class="fa fa-angle-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12" data-animate="fadeInUp" data-delay="300">
										<!-- collection-col -->
										<div class="collection-col">
											<img src="http://placehold.it/370x231" alt="image description">
											<div class="collection-over add">
												<div class="frame">
													<div class="box">
														<h2><span class="txt">SPRING COLLECTION</span> FOR WOMEN</h2>
														<a href="shop-checkout.html" class="btn-shop">BUY NOW <i class="fa fa-angle-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-12" data-animate="fadeInUp" data-delay="300">
								<!-- collection-col -->
								<div class="collection-col">
									<img src="http://placehold.it/370x490" alt="image description">
									<div class="collection-over add2">
										<div class="frame">
											<div class="box">
												<h2><span class="txt">THE 2015</span> COLLECTION</h2>
												<a href="shop-checkout.html" class="btn-shop">VIEW RANGE <i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- product section -->
				<section class="container product-section">
					<!-- page heading -->
					<header class="page-heading small">
						<div class="heading">
							
							<h3 class="heading5 lime text-capitalize font-medium">Latest Products</h3>
						</div>
					</header>
					<div class="row product-nav-holder">
						<div class="col-xs-12">
							<ul class="product-nav list-inline tabset">
								<li><a href="#tab1">category1</a></li>
								<li class="active"><a href="#tab2">categor2</a></li>
								<li><a href="#tab3">categ3</a></li>
								<li><a href="#tab4">categ4</a></li>
								<li><a href="#tab5">categ5</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<!-- tab content -->
							<div class="tab-content">
								<!-- tab1 -->
								<div id="tab1">
									<!-- products-holder -->
									<div class="products-holder">
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
									</div>
								</div>
								<!-- tab2 -->
								<div id="tab2">
									<!-- products-holder -->
									<div class="products-holder">
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
									</div>
								</div>
								<!-- tab3 -->
								<div id="tab3">
									<!-- products-holder -->
									<div class="products-holder">
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
									</div>
								</div>
								<!-- tab4 -->
								<div id="tab4">
									<!-- products-holder -->
									<div class="products-holder">
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
									</div>
								</div>
								<!-- tab5 -->
								<div id="tab5">
									<!-- products-holder -->
									<div class="products-holder">
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOP</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
										<!-- new-product -->
										<article class="new-product">
											<div class="product-img">
												<img src="http://placehold.it/270x370" alt="image description">
												<div class="product-over">
													<div class="frame">
														<div class="box">
															<a href="images/placeholder.jpg" class="btn lightbox btn-f-default">QUICK VIEW</a>
														</div>
													</div>
												</div>
											</div>
											<span class="title">TOPS</span>
											<h2><a href="shop-single.html">Product Name</a></h2>
											
											
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- special block -->
				<div class="special-block">
					<div class="parallax-holder">
						<div class="parallax-frame"><img src="http://placehold.it/1920x1000" height="1000" width="1920" alt="image description"></div>
					</div>
					<div class="container">
						<div class="row">
							<section class="col-xs-12 special-content">
								<div class="special-box">
									<h2>About us</h2>
									<p>Welcome to WordPress. This is your first post. Edit or delete it, then start bloggin Molestias excepturi sint occaecati cupiditate non provident similique sunt in culpa qui officia deserunt animi id est laborum et dolorum fuga et harum quidem rerum facilis est et expedita distinction.</p>
									<a href="http://fekra.csshunter.com" class="btn btn-f-default">Read more</a>
								</div>
							</section>
						</div>
					</div>
				</div>
				
				
			</main>
			<!-- footer of the page -->
			<footer id="footer" class="style10">
				<!-- footer top -->
				<div class="footer-top bg-dark-jungle">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="holder2">
									<div class="logo"><a href="#"><img src="images/logo.png" height="49" width="90" alt="fekra"></a></div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="about-us.html" class="btn btn-more">Sell your product</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- footer cent -->
				<div class="bg-dark-jungle footer-cent">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 info-box column1">
								<!-- f contact info2 -->
								<div class="f-contact-info2">
									<h5>Contact Information</h5>
									<address><i class="fa fa-map-marker"></i> 1422 1st St. Santa Rosa,t CA 94559. USA</address>
									<div class="mail-box2">
										<span class="mail-box"><i class="fa fa-envelope-o"></i> <a href="mailto:&#097;&#100;&#109;&#105;&#110;&#064;&#101;&#045;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;" class="email"> &#097;&#100;&#109;&#105;&#110;&#064;&#101;&#045;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a></span>
									</div>
									<div class="tel-holder">
										<span class="tel-box"><i class="fa fa-phone"></i> <a href="tel:00201008431112" class="tel">002- 01008431112</a></span>
									</div>
									<div class="mail-box2">
										<span class="mail-box"><i class="fa fa-link"></i> <a href="mailto:&#119;&#119;&#119;&#046;&#121;&#111;&#117;&#114;&#095;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;" class="email">&#119;&#119;&#119;&#046;&#121;&#111;&#117;&#114;&#095;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;</a></span>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 column2">
								<!-- f mailing form2 -->
								<div class="f-mailing-form2">
									<h5>Mailing List</h5>
									<div class="mailing-form2">
										<label>Please enter your email address for our mailing list to keep your self our lastest updated.</label>
										<div class="form-col">
											<!-- Begin MailChimp Signup Form -->
											<div id="mc_embed_signup">
												<form action="//htmlbeans.us11.list-manage.com/subscribe/post?u=cb2d5a07fdf0d86c96f260674&amp;id=1103b14a3b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
													<div id="mc_embed_signup_scroll">
														<div class="mc-field-group">
															<label for="mce-EMAIL">Email Address </label>
															<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
														</div>
														<div id="mce-responses" class="clear">
															<div class="response" id="mce-error-response" style="display:none"></div>
															<div class="response" id="mce-success-response" style="display:none"></div>
														</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
														<div style="position: absolute; left: -5000px;"><input type="text" name="b_cb2d5a07fdf0d86c96f260674_1103b14a3b" tabindex="-1" value=""></div>
														<div class="clear">
															<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn button btn-submit"><i class="fa fa-paper-plane"></i></button>
														</div>
													</div>
												</form>
											</div>
											<!--End mc_embed_signup-->
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<!-- f flicker -->
								<div class="f-flicker">
									<h5>Our Location</h5>
									<div class="row">
										<div class="col-xs-12">
											<iframe width="100%" height="200px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.1823707257!2d-0.10159865000000001!3d51.52864165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2z2YTZhtiv2YbYjCDYp9mE2YXZhdmE2YPYqSDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2seg!4v1411153208328" class="iframe_map"></iframe>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- footer bottom -->
				<div class="bg-shark footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<!-- bottom box1 -->
								<div class="bottom-box1">
									
									<span class="copyright">&copy; 2017 <a href="#">Multi Mega</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div class="fa fa-chevron-up" id="gotoTop" style="display: none;"></div>
	</div>
	<!-- include jQuery library -->
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<!-- include custom JavaScript -->
	<script type="text/javascript" src="js/min/jquery.main.js"></script>
	<!-- include JavaScript Plugins -->
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
</body>
</html>