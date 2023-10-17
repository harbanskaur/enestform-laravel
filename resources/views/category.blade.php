@extends('layouts.main')
@section ('main-section')
		<div class="main-categorious">
			<div class="footer">
				@include('layouts.left')

				@foreach($data as $row)

				<div class="contact">
					<div class="contact-us">
						<p>Dishwasher</p>
					</div>
					<div class="product-info">
						<span>Sort by:</span>
						<form>
							@if($products->isEmpty())
							<p>no products available for this category.</p>
							@else
							<select>
								@foreach($products as $row)
								<option>product name</option>
								<option>{{$products->pname}}</option>
								@endforeach
							</select>
							@endif
						</form>
					</div>
					<div class="display-product">
						<span>Displaying 1 to 5(of 6 new product)</span>
						<div class="btnnn">
							<input  class="pre" type="submit" name="" value="Previous">
							<input class="nxt" type="submit" name="" value="Next">
						</div>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="images/1.jpeg">
							</div>
							<div class="stock">
								<p>In Stock: 988</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="date">
								<span> Date Added:2013-06-01  08:05:32</span>
							</div>
							<!-- <hr class="hr"> -->
							<div class="washer">
								<p>Dishwasher</p>
							</div>
							<div class="model-info">
								<span>Model:Dishwasher</span>
								<p>Manufacturer:Dishwasher</p>
							</div>
							<div class="price">
								<span>Rs.6500</span>
							</div>
							<div class="checkout">
								<input type="submit" name="" value="BUY NOW">
							</div>
						</div>
					</div>
				</div>
			</div>
	@endsection