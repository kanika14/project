<?php
session_start();
$user = $_SESSION['user_type'];
if ($user == 'student') {
	header("Location: welcome.php");
}
include_once("inc/db.php");
include_once("inc/header.php");
if(!isset($_SESSION['user_name'])){
	header("Location: index.php");
}

$sql = "SELECT * FROM myguests where type = 'student' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
<div class="container">
	<div class="row">
		<div class="col s12">
			<h1 class="center">Students List</h1>
		</div>
		<div class="details col s10">     
		   <table class="striped centered responsive-table highlight bordered">
			  <thead>
			    <tr>
			    	<th>Roll No.</th>
			    	<th>Name</th>
			    	<th>Email</th>
			    	<th>DOB</th>
			    	<th>Date of Admission</th>	
			    	<th>Attendence</th>	
			  	</tr>
			  </thead>
				
					<tbody>
				    	<?php foreach($result as $row): ?>
							<tr>
								<td><?php echo strtoupper($row['phone']); ?></td>
								<td><?php echo strtoupper($row["name"]); ?></td>
								<td><?php echo strtoupper($row["email"]); ?></td>
								<td><?php echo strtoupper($row["dob"]); ?></td>
								<td><?php echo strtoupper($row["reg_date"]); ?></td>
									
										<td value="a">
								     		<button type="submit" class="waves-effect waves-light btn attendence" style="padding-right: 10px; padding-left: 10px !important;" name="student_button" data-id=<?php echo $row["colgid"]; ?> id="student_button"><i class="material-icons right" style="margin: 0px !important;">create</i></button>	
								     		<?php 
								     			$_SESSION['user_id'] = $row['colgid'];
								     		?>
								  		</td>
							  		
					    	<?php endforeach;?>
						</tr>
				  	</tbody>
				</table>
			</div>
		</div> 
	</div>
</div>
    <?php } ?>  
 
 <div class="shivam"></div>