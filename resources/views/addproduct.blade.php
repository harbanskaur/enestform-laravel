@extends('layouts.main')
@push('title')
 Add Product Page
@endpush
{{-- section starts --}}
@section('main-section') 

<div class="main-categorious">
	{{-- message passing for sucsess --}}
	@if(session('success')) 
		<div class="session">	
			{{session('success')}} 
		</div>
	{{-- message passing for error--}}
	@elseif(session('error'))
		<div class="session">	
			{{session('error')}} 
		</div>
	@endif
	<div class="footer">
		{{-- left list attachment --}}
		@include('layouts.left')
		<div class="contact">
			<div class="contact-us">
				@foreach($dataa as $rows)
				<p>{{$rows->pname}}</p>
			</div>
			<div class="dish-info">
				<div class="machine-pic">
					<div class="img">
						<img src="{{asset($rows->image)}}">
					</div>
					<div class="stock">
						<p>In Stock:{{$rows->stock}}</p>
					</div>
					<div class="detail">
						<span>Details:{{$rows->desc}}</span>
						<p>{{$rows->pname}}</p>
					</div>
				</div>
				<div class="machine-info">
					<div class="washer">
						<p>{{$rows->pname}}</p>
					</div>
					<div class="model-info">
						<span>Model:{{$rows->pname}}</span>
						<p>Manufacturer:{{$rows->desc}}</p>
					</div>
					<div class="quantity">
						<form method="post" action="{{route('cart')}}">
							@csrf
							{{-- table starts --}}
							<table>  
								<tr>
									<td><input type="number" hidden  name="product_id" value="{{$rows->id}}"></td>
								</tr>
								<tr>
									<td class="qty">Enter quantity</td>
									<td><input type="number" name="qty"></td>
								</tr>
							</table> 
							{{-- table ends  --}}	
						<div class="price">
							<span>{{$rows->pprice}}</span>
						</div>
					</div>
					<div class="cart">
						<input type="submit" name="save" value="Add to Cart">
					</div>
					</form>
					<div class="checkout">
						<input type="submit" name="" value="checkout">
					</div>
				</div>
			</div>
			@endforeach
			<div class="info">
				<form>
					{{-- table 2 starts --}}
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
					{{-- table 2 ends --}}	
				</form>
			</div>
		</div>	
@endsection {{-- section ends  --}}
