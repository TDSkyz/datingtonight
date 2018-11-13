<form action="{{ route('auth.users.signup') }}" method="post">
	{{ csrf_field() }}
	<div class="main">
		<div class="form-left-to-w3l">
			<input type="text" name="username" placeholder="Username" required="">
			<div class="clear"></div>
		</div>
		<div class="form-right-to-w3ls">
			<input type="password" name="password" placeholder="Password" required="">
			  <div class="clear"></div>
		</div>
	</div>
	<div class="main">
		<div class="form-left-to-w3l">
			<input type="email" name="email" placeholder="Email" required="">
			  <div class="clear"></div>
		</div>
		<div class="form-right-to-w3ls">
			<input type="text" name="phonenumber" placeholder="Phone Number" required="">
			  <div class="clear"></div>
		</div>
	</div>
	<div class="main">
 		<div class="form-left-to-w3l">
				<select name="gender" class="form-control">
				<option value="">Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
		</div>
			<div class="form-right-to-w3ls">
		    <input  id="datepicker1" name="birthday" type="date"  placeholder="Date of Birth" required="">
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="form-add-to-w3ls add">
		<input type="text" name="fullname" placeholder="Fullname" required="">
		<div class="clear"></div>
	</div>
	<div class="form-right-to-w3ls">
			<select name="city" class="form-control buttom">
				<option value="">Select City</option>
					<option value="Da Nang">Da Nang</option>
			</select>
           <div class="clear"></div>
	</div>
	<div class="form-add-to-w3ls add">
		<input type="text" name="facebook" placeholder="Facebook (ex: fb.com/DatingTonightVietNam)" required="">
		<div class="clear"></div>
	</div>
	<div class="btnn">
		<button type="submit">Submit</button><br>
	</div>
</form>