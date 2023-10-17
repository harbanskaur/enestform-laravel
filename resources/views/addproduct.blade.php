@extends('layouts.main')
@section ('main-section')
		<div class="main-categorious">
			<div class="footer">
				@include('layouts.left')
				<div class="contact">
					<div class="contact-us">
						<p>Dishwasher</p>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="images/1.jpeg">
							</div>
							<div class="stock">
								<p>In Stock: 988</p>
							</div>
							<div class="detail">
								<span>Details:</span>
								<p>Dishwasher</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="washer">
								<p>Dishwasher</p>
							</div>
							<div class="model-info">
								<span>Model:Dishwasher</span>
								<p>Manufacturer:Dishwasher</p>
							</div>
							<div class="quantity">
								<form>
									<table>
										<tr>
											<td class="qty">Enter quantity</td>
											<td><input type="" name=""></td>
										</tr>
									</table>
								</form>
								<div class="price">
									<span>Rs.6500</span>
								</div>
							</div>
							<div class="cart">
								<input type="submit" name="" value="Add to Cart">
							</div>
							<div class="checkout">
								<input type="submit" name="" value="checkout">
							</div>
						</div>
					</div>
					<div class="info">
						<form>
							<table class="table-info">
								<tr>
									<td class="nme">Enter name</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="nme">Enter Email</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="nme">Enter Review</td>
									<td><textarea></textarea></td>
								</tr>
								<tr>
									<td class="nme">Rating</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="btnn-1">
										<input type="submit" name="" value="Submit query">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				
@endsection