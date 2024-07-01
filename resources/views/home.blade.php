
	@extends('layout.index')
    @section('content')
    <!--populer-products start -->
	<section id="populer-products" class="populer-products">
		<div class="container">
			<div class="populer-products-content">
				<div class="row">
					<div class="col-md-3">
						<div class="single-populer-products">
							<div class="single-populer-product-img mt40">
								<img src="{{asset('assets/images/suger.webp')}}" alt="populer-products images">
							</div>
							<h2><a href="#">arm chair</a></h2>
							<div class="single-populer-products-para">
								<p>Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut fugit.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-populer-products">
							<div class="single-inner-populer-products">
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="single-inner-populer-product-img">
											<img src="{{asset('assets/images/1.jpg')}}" alt="populer-products images">
										</div>
									</div>
									<div class="col-md-8 col-sm-12">
										<div class="single-inner-populer-product-txt">
											<h2>
												<a href="#">
													latest designed stool <span>and</span> chair
												</a>
											</h2>
											<p>
												Edi ut perspiciatis unde omnis iste natusina error sit voluptatem
												accusantium doloret mque laudantium, totam rem aperiam.
											</p>
											<div class="populer-products-price">
												<h4>Sales Start from <span>LE99.00</span></h4>
											</div>
											<button class="btn-cart welcome-add-cart populer-products-btn"
												onclick="window.location.href='#'">
												discover more
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-populer-products">
							<div class="single-populer-products">
								<div class="single-populer-product-img">
									<img src="{{asset('assets/images/مكرونة-الكينج-399x375.jpg')}}" alt="populer-products images">
								</div>
								<h2><a href="#">hanging lamp</a></h2>
								<div class="single-populer-products-para">
									<p>Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut fugit.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.container-->

	</section><!--/.populer-products-->
	<!--populer-products end-->

	<!--new-arrivals start -->
	<section id="new-arrivals" class="new-arrivals">
		<div class="container">
			<div class="section-header">
				<h2>new arrivals</h2>
			</div><!--/.section-header-->
			<div class="new-arrivals-content">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{asset('assets/images/22-1.webp')}}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="sale bg-1">
									<p>sale</p>
								</div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">wooden chair</a></h4>
							<p class="arrival-product-price">LE65.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{asset('assets/images/سعل.webp')}}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="sale bg-2">
									<p>sale</p>
								</div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">single armchair</a></h4>
							<p class="arrival-product-price">LE80.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{asset('assets/images/235.jpg')}}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">wooden armchair</a></h4>
							<p class="arrival-product-price">LE40.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{asset('assets/images/7.jpeg')}}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="sale bg-1">
									<p>sale</p>
								</div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">stylish chair</a></h4>
							<p class="arrival-product-price">LE100.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{asset('assets/images/فول.jpeg')}}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">modern chair</a></h4>
							<p class="arrival-product-price">LE120.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{asset('assets/images/1-1.png')}}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="sale bg-1">
									<p>sale</p>
								</div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">mapple wood dinning table</a></h4>
							<p class="arrival-product-price">LE140.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{asset('assets/images/ملح.jpg')}}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="sale bg-2">
									<p>sale</p>
								</div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">arm chair</a></h4>
							<p class="arrival-product-price">LE90.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{asset('assets/images/برسل.jpg')}}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">wooden bed</a></h4>
							<p class="arrival-product-price">LE140.00</p>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.container-->

	</section><!--/.new-arrivals-->
	<!--new-arrivals end -->


	<!-- clients strat -->
	<section id="clients" class="clients">
		<div class="container">
			<div class="owl-carousel owl-theme" id="client">
				<div class="item">
					<a href="#">
						<img src="{{asset('assets/images/images.png')}}" alt="brand-image" />
					</a>
				</div><!--/.item-->
				<div class="item">
					<a href="#">
						<img src="{{asset('assets/images/logo-2.png')}}" class="img-logo" alt="brand-image" />
					</a>
				</div><!--/.item-->
				<div class="item">
					<a href="#">
						<img src="{{asset('assets/images/jah-removebg-preview.png')}}" alt="brand-image" />
					</a>
				</div><!--/.item-->
				<div class="item">
					<a href="#">
						<img src="{{asset('assets/images/images__1_-removebg-preview.png')}}" alt="brand-image" />
					</a>
				</div><!--/.item-->
				<div class="item">
					<a href="#">
						<img src="{{asset('assets/images/R-removebg-preview.png')}}" alt="brand-image" />
					</a>
				</div><!--/.item-->
			</div><!--/.owl-carousel-->

		</div><!--/.container-->

	</section><!--/.clients-->
	<!-- clients end -->

	<!--newsletter strat -->
	<section id="newsletter" class="newsletter">
		<div class="container">
			<div class="hm-footer-details">
				<div class="row">
					<div class=" col-md-3 col-sm-6 col-xs-12">
						<div class="hm-footer-widget">
							<div class="hm-foot-title">
								<h4>information</h4>
							</div><!--/.hm-foot-title-->
							<div class="hm-foot-menu">
								<ul>
									<li><a href="#">about us</a></li><!--/li-->
									<li><a href="#">contact us</a></li><!--/li-->
									<li><a href="#">news</a></li><!--/li-->
									<li><a href="#">store</a></li><!--/li-->
								</ul><!--/ul-->
							</div><!--/.hm-foot-menu-->
						</div><!--/.hm-footer-widget-->
					</div><!--/.col-->
					<div class=" col-md-3 col-sm-6 col-xs-12">
						<div class="hm-footer-widget">
							<div class="hm-foot-title">
								<h4>collections</h4>
							</div><!--/.hm-foot-title-->
							<div class="hm-foot-menu">
								<ul>
									<li><a href="#">wooden chair</a></li><!--/li-->
									<li><a href="#">royal cloth sofa</a></li><!--/li-->
									<li><a href="#">accent chair</a></li><!--/li-->
									<li><a href="#">bed</a></li><!--/li-->
									<li><a href="#">hanging lamp</a></li><!--/li-->
								</ul><!--/ul-->
							</div><!--/.hm-foot-menu-->
						</div><!--/.hm-footer-widget-->
					</div><!--/.col-->
					<div class=" col-md-3 col-sm-6 col-xs-12">
						<div class="hm-footer-widget">
							<div class="hm-foot-title">
								<h4>my accounts</h4>
							</div><!--/.hm-foot-title-->
							<div class="hm-foot-menu">
								<ul>
									<li><a href="#">my account</a></li><!--/li-->
									<li><a href="#">wishlist</a></li><!--/li-->
									<li><a href="#">Community</a></li><!--/li-->
									<li><a href="#">order history</a></li><!--/li-->
									<li><a href="#">my cart</a></li><!--/li-->
								</ul><!--/ul-->
							</div><!--/.hm-foot-menu-->
						</div><!--/.hm-footer-widget-->
					</div><!--/.col-->
					<div class=" col-md-3 col-sm-6  col-xs-12">
						<div class="hm-footer-widget">
							<div class="hm-foot-title">
								<h4>newsletter</h4>
							</div><!--/.hm-foot-title-->
							<div class="hm-foot-para">
								<p>
									Subscribe to get latest news,update and information.
								</p>
							</div><!--/.hm-foot-para-->
							<div class="hm-foot-email">
								<div class="foot-email-box">
									<input type="text" class="form-control" placeholder="Enter Email Here....">
								</div><!--/.foot-email-box-->
								<div class="foot-email-subscribe">
									<span><i class="fa fa-location-arrow"></i></span>
								</div><!--/.foot-email-icon-->
							</div><!--/.hm-foot-email-->
						</div><!--/.hm-footer-widget-->
					</div><!--/.col-->
				</div><!--/.row-->
			</div><!--/.hm-footer-details-->

		</div><!--/.container-->

	</section><!--/newsletter-->
	<!--newsletter end -->

@endsection
