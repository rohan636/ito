<?php 
	include ('includes/nav.php');
	//include('includes/db.php');
	$User = $db->query("SELECT * FROM User WHERE Id = $Pupil_id");
?>


<!-- Code based on http://bootsnipp.com/snippets/featured/simple-user-profile -->

<!-- Page Content -->
<div class="container">

       
        <div class="row">
            <div class="col-sm-9">
            	<h2>Account information</h2>

			   
	        <div class="panel panel-info">
	            <div class="panel-heading">
	              <h3 class="panel-title"><?php $User->fetch_object('Fname') $User->fetch_object('Lname') ?></h3>

	            </div>
	            <div class="panel-body">
	              
	                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
	                <div class=" col-md-9 col-lg-9 "> 
	                  <table class="table table-user-information">
	                    <tbody>
	                    	<form>
	                    	<tr>
	                    		<tr>
	                    			<td>First Name:</td>
	                    			<td> <input type="text" class="form-control" placeholder="First name" aria-describedby="basic-addon1" name="Fname"> </input></td>
	                    		</tr>

	                    		<tr>
	                    			<td>Last Name:</td>
	                    			<td><input type="text" class="form-control" placeholder="DoB" aria-describedby="basic-addon1" name="Lname"> </input></td>
	                    		</tr>
	                    		<tr>
                    			<tr>
                    				<td>Email:</td>
                    				<td><input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="Email"> </input></td>
                    			</tr>
                    			<tr>
                    				<td>Password:</td>
                    				<td><input type="text" class="form-control" placeholder="password" aria-describedby="basic-addon1" name="password"> </input></td>
                    			</tr>

	                    		</tr>
	                    		<tr>
	                    			<td><input type="submit" class="btn btn-primary" value="Submit"></td>
	                    		</tr>
	                    	</tr>
	                     </form>
	                    </tbody>
	                  </table>
	                  
	                  <!-- Add link to plans page -->
	                  <a href="#" >Upgrade account</a>
	                </div>
	              
	            </div>


	            <div class="panel-footer">
	            	<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
	            	<span class="pull-right">
	            		<a data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
	            		<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
	            	</span>

	            </div>
	</div>

<?php include ('includes/footer.php');?>