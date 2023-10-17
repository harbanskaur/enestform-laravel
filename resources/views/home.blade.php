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
					@isset($categories)
					@foreach($categories as $rows)
					<div class="Camera-info">
						<!-- <div class="cam-info"> -->
							<div class="samsung-cam">
								<div class="cam-info">
								
									<img src="{{asset('public/product_images'.$rows->image)}}" height="40" width="50"/>
								
									<div class="sam-prc">
										<span>{{$rows->pname}}</span>
										<p>{{$rows->price}}</p>
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
					</div>
					@endforeach
					@endisset
				</div>
			@endsection