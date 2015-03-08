<?php 
	include ('includes/nav.php');
	include('includes/db.php');


	
	//if(isset($_POST["Pupil_id"])){
	//$User = $db->query("SELECT * FROM User WHERE Id = $Pupil_id");

?>

<!-- Code based on http://bootsnipp.com/snippets/featured/simple-user-profile -->
<!-- Page Content -->
<div class="container">

       <hr>
       		<div class="col-md-5  toppad  pull-left ">
	        <A href="user-edit.php" ><b>Edit Profile</b></A>

        </div>
        <div class="row">
            <div class="col-sm-9">
            	<h2>Account information</h2>

			   
	        <div class="panel panel-info">
	            <div class="panel-heading">
	              <h3 class="panel-title"><?php $User->fetch_object('Fname') ?></h3>

	            </div>
	            <div class="panel-body">
	              
	                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
	                <div class=" col-md-9 col-lg-9 "> 
	                  <table class="table table-user-information">
	                    <tbody>
	                    		<tr>
	                    			<td>First Name:</td> <td>
	                    			<td><p> <?php $User->fetch_object('Fname') ?> ?></p></td>
	                    		</tr>

	                    		<tr>
	                    			<td>Last Name:</td> 
	                    			<td><p> <?php $User->fetch_object('Lname') ?> </p></td>
	                    		</tr>
                    			<tr>
                    				<td>Email:</td>
                    				<td><?php $User->fetch_object('email') ?></td>
                    			</tr>
	                    		<tr>
                    			<tr>
                    				<td>Account Package:</td> 
                    				<td><p><?php $User->fetch_object('type') ?> </p></td>
                    			</tr>


	                    		</tr>
	                    	</tr>
	                     
	                    </tbody>
	                  </table>
	                  
	                <a href="#" class="btn btn-primary">Change Plan</a>

	                </div>
	              
	            </div>

	            <div class="panel-footer">
	            	<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
	            	<span class="pull-right">
	            		<a data-original-title="Edit this user" href="user-edit.php" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
	            		<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
	            	</span>

	            </div>
			           
					</div>
            </div>
        	<div class="col-sm-3 pull-right">
            	<h2>Recruit a friend</h2>

            	<ul class="thumbnails pull-right" id="hover-cap-4col">
					<div class="span3">
					  <div class="thumbnail">
					    <div class="caption">
					        <h4>Rewards for recruiting a friend</h4>
					        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					        <p><a href="#" class="btn btn-inverse" rel="tooltip" title="Preview"><i class="icon-eye-open"></i></a> <a href="#" rel="tooltip" title="Visit Website" class="btn btn-inverse"><i class="icon-share"></i></a></p>
					    </div>
					    <img src="http://placehold.it/600x400">
					  </div>
					</div>
				</ul>
            </div>
        </div>
    </hr>
</div>
<?php //end isset statement 
}else{ echo ('ID not set');
} ?>

<?php include ('includes/footer.php');?>