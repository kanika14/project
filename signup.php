<?php 
include_once "inc/header.php";
 ?>

<div class="container">
	<div class="row">
	 	
			<h1>Register</h1>
			<div id="register_output" class=""></div>
	 			<div class="input-field col s6">
	 			    <i class="material-icons prefix">account_circle</i>
					<input id="colgid" type="text" class="validate">
					<label for="icon_prefix" data-error="wrong" data-success="right">College ID</label>
				</div>
	 			<div class="input-field col s6">
	 			    <i class="material-icons prefix">account_circle</i>
					<input id="username" type="text" class="validate">
					<label for="icon_prefix" data-error="wrong" data-success="right">Name</label>
				</div>
		       <div class="input-field col s6">
		         <input name="gender" type="radio" id="test1" value="male" />
		         <label for="test1">Male</label>
		         <input name="gender" type="radio" id="test2" value="female" />
		         <label for="test2">Female</label>
		       </div>   
				<div class="input-field col s6">
	 			    <i class="material-icons prefix">email</i>
					<input id="email" type="email" class="validate">
					<label for="icon_prefix" data-error="wrong" data-success="right">Email</label>
				</div>
				<div class="input-field col s6">
	 			    <i class="material-icons prefix">contact_phone</i>
					<input id="phone" type="tel" maxlength="10" class="validate">
					<label for="icon_prefix" data-error="wrong" data-success="right">Phone No.</label>
				</div>
				
				<div class="input-field col s6">
	          		<i class="material-icons prefix">lock</i>	
					<input id="password" type="password" class="validate">
					<label for="icon_telephone" data-error="wrong" data-success="right">Password</label>
        		</div>
        		<div class="input-field col s6">
        		   <select class="option" id="dept">
        		     <option value="" disabled selected>Branch</option>
        		     <option value="cse">cse</option>
        		     <option value="mech">mech</option>
        		     <option value="it">it</option>
        		   </select>
        		 </div>
        		<div class="input-field col s6">
        		   <select class="option" id="userType">
        		     <option value="" disabled selected>You are a</option>
        		     <option value="staff">Staff Member</option>
        		     <option value="student">Student</option>
        		     <option value="admin">Admin</option>
        		   </select>
        		 </div>
        		 <input type="date" id="dob" class="datepicker">

				<div class="input-field col s12">
					<button class="waves-effect waves-light btn" type="submit" name="register" id="register"><i class="material-icons right">send</i>Register</button>
				</div>
	</div>
</div>



