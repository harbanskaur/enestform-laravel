@extends('layouts.main')
@section('main-section')
		<div class="main-categorious">
			<div class="footer">
				<div class="login-here">
					<div class="login">
						<p>Login Here</p>
						<div  class="user-info">
							<form>
								<table class="login-1">
									<tr class="inpt">
										<td ><span>Username</span></td>
										<td><input type="text" name=""></td>
									</tr><br>
									<tr class="inpt">
										<td ><span>Password</span></td>
										<td><input type="password" name=""></td>
									</tr>
									<tr class="logn-btn" >
										<td></td>
										<td><input class="log" type="submit" name="" value="Login">
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
						<form>
							<table class="login-1">
								<tr class="inpt-1">
									<td ><span>Full Name</span></td>
									<td><input type="text" name=""></td>
								</tr><br>
								<tr class="inpt-1">
									<td ><span>Email</span></td>
									<td><input type="text" name=""></td>
								</tr>
								<tr class="inpt-1">
									<td ><span>Password</span></td>
									<td><input type="password" name=""></td>
								</tr>
								<tr class="logn-btn" >
									<td></td>
									<td><input class="log" type="submit" name="" value="Sign up">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
	@endsection