@extends('layouts.main')
@section ('main-section')
{{-- section starts --}}
	<div class="main-categorious">
		<div class="footer">
			@include('layouts.left')
			<div class="contact">
				<div class="contact-us">	
					@foreach($categories as $item)
					<p>{{$item->name}}</p>
					@endforeach
				</div>
				<div class="product-info">
					<span>Sort by:</span>
					<form>
						<select>
							<option>product name</option>	
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
				@foreach($dataa as $rows)
				<div class="dish-info">
					<div class="machine-pic">
						<div class="img">
							<img src="{{asset($rows->image)}}">
						</div>
						<div class="stock">
							<p>In Stock:{{$rows->stock}}</p>
						</div>
					</div>
					<div class="machine-info">
						<div class="date">
							<span>Date:{{ \Carbon\Carbon::now()->format('jS F Y') }}</span>
						</div>
						<!-- <hr class="hr"> -->
						<div class="washer">
							<p>{{$rows->pname}}</p>
						</div>
						<div class="model-info">
							<span>Model:{{$rows->pname}}</span>
							<p>Discription:{{$rows->desc}}</p>
						</div>
						<div class="price">
							<span>{{$rows->pprice}}</span>
						</div>
						<div class="checkout">
							@if(!Auth::guard('signup')->check())
								<a href="{{url('login')}}"><input type="submit" name="" value="Login First"></a>
							@else
								<a href="{{url('addproduct/'.$rows->id)}}"><input type="submit" name="" value="BUY NOW"></a>
							@endif        
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		{{-- scetion ends --}}
@endsection