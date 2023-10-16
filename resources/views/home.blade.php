@extends('layouts.main')
    @section('main-section')
		<div class="main-categorious">
			<div class="footer">
				<div class="main-img">
					<img src="assets/images/16.png">
				</div>

				@include('layouts.left')

				<div class="contact">
					<div class="contact-us">
						<p>FEATURED PRODUCTS</p>
					</div>
					<div class="Camera-info">
						<!-- <div class="cam-info"> -->
							<div class="samsung-cam">
								<div class="cam-info">
									<img src="assets/images/sam.png">
									<div class="sam-prc">
										<span>Samsung LED</span>
										<p>Rs.20000</p>
									</div>
									<hr class="hr2">
									<div class="cart-btn">
										<i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
										<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
										<i class="fa fa-plus" aria-hidden="true"></i>
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
										<input type="submit" name="" value="Add to cart">
									</div>
								</div>
							</div>
							<div class="nikon-cam">
								<div class="cam-info">
									<img src="assets/images/nk2.jpeg">
									<div class="nik-prc">
										<span>Nikon D7000</span>
										<p>Rs.3000</p>
									</div>
									<hr class="hr2">
									<div class="cart-1-btn">
										<i class="fa fa-plus-circle" aria-hidden="true"></i>
										<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
										<i class="fa fa-plus" aria-hidden="true"></i>
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
										<input type="submit" name="" value="Add to cart">
									</div>
								</div>
							</div>
							<div class="kodak-cam">
								<div class="cam-info">
									<img src="assets/images/kod.jpg">
									<div class="kod-prc">
										<span>Kodak Camera</span>
										<p>Rs.3500</p>
									</div>
									<hr class="hr2">
									<div class="cart-2-btn">
										<i class="fa fa-plus-circle" aria-hidden="true"></i>
										<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
										<i class="fa fa-plus" aria-hidden="true"></i>
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
										<input type="submit" name="" value="Add to cart">
									</div>
								</div>
							</div>
						<!-- </div> -->
					</div>
					<div class="Camera-info">
						<div class="samsung-cam">
							<div class="cam-info">
								<img src="assets/images/sam-pro.jpg">
								<div class="sam-prc">
									<span>Samsung Projector</span>
									<p>Rs.27950</p>
								</div>
								<hr class="hr2">
								<div class="cart-btn">
									<i class="fa fa-plus-circle" aria-hidden="true"></i>
									<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
									<input type="submit" name="" value="Add to cart">
								</div>
							</div>
						</div>
						<div class="nikon-cam">
							<div class="cam-info">
								<img src="assets/images/sony.png">
								<div class="nik-prc">
									<span>Sony camcorders</span>
									<p>Rs.16000</p>
								</div>
								<hr class="hr2">
								<div class="cart-1-btn">
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
									<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-plus-circle" aria-hidden="true"></i>
									<input type="submit" name="" value="Add to cart">
								</div>
							</div>
						</div>
						<div class="kodak-cam">
							<div class="cam-info">
								<img src="assets/images/acer.jpg">
								<div class="kod-prc">
									<span>Acer Monitor</span>
									<p>Rs.15000</p>
								</div>
								<hr class="hr2">
								<div class="cart-2-btn">
									<i class="fa fa-plus-circle" aria-hidden="true"></i>
									<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
									<input type="submit" name="" value="Add to cart">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="list-1">
					<ul>
						<li>HOME</li>
						<li>NEW PROJECT</li>
						<li>SPECIAL</li>
						<li>ALL PRODUCTS</li>
						<li>REVIEWS</li>
						<li>CONTACT</li>
						<li>FAQS</li>
					</ul>
				</div>
			@endsection