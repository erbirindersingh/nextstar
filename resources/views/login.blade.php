 
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div id="login">
				<form method="POST" action="#">
					<div class="col-auto">
						<label class="sr-only" for="email">Email</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">Email</div>
							</div>
							<input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" required >
						</div>
					</div>
					<div class="col-auto">
						<label class="sr-only" for="password">Password</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">Password</div>
							</div>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
						</div>
					</div>
					<div class="col-auto">
						<label class="sr-only" for="loginas">Login as:</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">Login as:</div>
							</div>
							<div id="radioFan">
								<input type="radio" class="radio-inline" name="loginas"/>Artist
							    <input type="radio" class="radio-inline" name="loginas"/>Fan
							</div>
						</div>
					</div>
					<div>
						<label class="checkbox-inline">Keep me signed in:<input type="checkbox"id="keepsignedin" value="true"></label>
					</div>
					<input type="submit" name="loginBtn" value="Log In" class="btn btn-danger">
					<input type="button" value="Forgot Password" class="btn btn-primary">
					<div>
						<?php
							if(isset($_GET["e"]))
							{
								if($_GET["e"]==1)
								{
									echo '<div class="alert alert-danger" role="alert"> Enter Username & Password !!!</div>';
								}else if($_GET["e"]==2)
								{
									echo '<div class="alert alert-danger" role="alert"> Invalid Username & Password!!!</div>';
								}
							}
						?>
					</div>
				</form>
				<div>
					<p>
						<b>Don’t have an account yet? <a class="signup" href="/">Click here</a> to sign up</b>
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection