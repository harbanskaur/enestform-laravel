@extends('layouts.main')
@section('main-section')
<div class="main-categorious">
	
	@if(session('success'))
	<div class="session">	{{session('success')}} </div>
	@elseif(session('error'))
	<div class="session">	{{session('error')}} </div>
	@endif
	<div class="footer">
		<div class="login-here">
			<div class="login">
				<p>Login Here</p>
				<div  class="user-info">
					<form method="post" action="{{route('login.data')}}">
						@csrf
						<table class="login-1">
							<tr class="inpt">
								<td ><span>Username</span></td>
								<td><input type="text" name="fullname"></td>
							</tr><br>
							<tr class="inpt">
								<td ><span>Password</span></td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr class="logn-btn" >
								<td></td>
								<td><input class="log" type="submit" name="save" value="Login">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>		
	<div class="sign-up">
		<div class="sign">
			<p>New to Enest? <a href=""> Sign up</a></p>
			<div  class="user-info">
				<form method="post" action="{{route('signup')}}">
					@csrf
					<table class="login-1">
						<tr class="inpt-1">
							<td ><span>Full Name</span></td>
							<td><input type="text" name="fullname" value="{{old('fullname')}}">
							<div>
								@error('fullname')
									{{$message}}
								@enderror
							</div></td>
						</tr><br>
						<tr class="inpt-1">
							<td ><span>Email</span></td>
							<td><input type="text" name="email" value="{{old('email')}}">
							<div>
								@error('email')
									{{$message}}
								@enderror
							</div></td>
						</tr>
						<tr class="inpt-1">
							<td ><span>Password</span></td>
							<td><input type="password" name="password">
							<div>
								@error('password')
									{{$message}}
								@enderror
							</div></td>
						</tr>
						<tr class="logn-btn" >
							<td></td>
							<td><input class="log" type="submit" name="save" value="Sign up">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
@endsection