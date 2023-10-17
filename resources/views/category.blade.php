@extends('layouts.main')
@section ('main-section')
		<div class="main-categorious">
			<div class="footer">
				@include('layouts.left')
				<div class="contact">
					<div class="contact-us">
						<p>Dishwasher</p>
					</div>
					<div class="product-info">
						<span>Sort by:</span>
						<form>
							<select>
								<option>product name</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
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
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="images/12.jpg">
							</div>
							<img  class="lg" src="images/15.png">
							<div class="stock-0">
								<p>In Stock:0</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="date">
								<span> Date Added:2013-07-21  09:05:45</span>
							</div>
							<!-- <hr class="hr"> -->
							<div class="washer">
								<p> LG-Dishwasher</p>
							</div>
							<div class="model-info">
								<span>Model:LG-Dishwasher</span>
								<p>Manufacturer:LG Dishwasher</p>
							</div>
							<div class="price">
								<span>Rs.8600</span>
							</div>
							<div class="checkout">
								<input type="submit" name="" value="BUY NOW">
							</div>
						</div>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="images/2.png">
							</div>
							<div class="stock">
								<p>In Stock:365</p>
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
								<span>Rs.6000</span>
							</div>
							<div class="checkout">
								<input type="submit" name="" value="BUY NOW">
							</div>
						</div>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="images/4.png">
							</div>
							<div class="stock">
								<p>In Stock:0</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="date">
								<span> Date Added:2013-05-31  20:25:14</span>
							</div>
							<!-- <hr class="hr"> -->
							<div class="washer">
								<p>IFB-Dishwasher</p>
							</div>
							<div class="model-info">
								<span>Model:IFB-Dishwasher</span>
								<p>Manufacturer:IFB-Dishwasher</p>
							</div>
							<div class="price">
								<span>Rs.23950</span>
							</div>
							<div class="checkout">
								<input type="submit" name="" value="BUY NOW">
							</div>
						</div>
					</div>
				</div>
				
	@endsection