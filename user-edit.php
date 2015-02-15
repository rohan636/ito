<?php 
	include ('includes/nav.php');
	//include('includes/db.php');
?>


<!-- Code base from http://bootsnipp.com/snippets/featured/simple-user-profile -->

<!-- Page Content -->
<div class="container">

       <hr>
       		<div class="col-md-5  toppad  pull-left ">
	        <A href="edit.html" ><b>Edit Profile</b></A>
	        <br/>
	        <A href="edit.html" ><b>Logout</b></A>
	        <br>
			<p class=" text-info">Insert Date </p>
        </div>
        <div class="row">
            <div class="col-sm-9">
            	<h2>Account information</h2>

			   
	        <div class="panel panel-info">
	            <div class="panel-heading">
	              <h3 class="panel-title">SELECT ACOUNTNAME</h3>

	            </div>
	            <div class="panel-body">
	              
	                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
	                <div class=" col-md-9 col-lg-9 "> 
	                  <table class="table table-user-information">
	                    <tbody>
	                      <tr>
	                    	<td> Account Name <td>
	                    	<td></td>
	                      <tr>
	                        <td>First Name:</td> <td><a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" ID="EUID" style="float:right" type="button" class="btn btn-sm btn-warning userEntry"><i class="glyphicon glyphicon-edit"></i></a></td>
	                        <td></td>
	                      </tr>
	                      
	                      <tr>
	                        <td>Date of Birth:</td> <td><a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" style="float:right" type="button" class="btn btn-sm btn-warning userEntry"><i class="glyphicon glyphicon-edit"></i></a></td>
	                        <td></td>
	                      </tr>
	                         <tr>
	                             <tr>
	                        <td>Gender:</td> <td><a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" style="float:right" type="button" class="btn btn-sm btn-warning userEntry"><i class="glyphicon glyphicon-edit"></i></a></td>
	                        <td></td>
	                      </tr>
	                        <tr>
	                        <td>Account Package:</td> <td><a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" style="float:right" type="button" class="btn btn-sm btn-warning userEntry"><i class="glyphicon glyphicon-edit"></i></a></td>
	                        <td></td>
	                      </tr>
	                      <tr>
	                        <td>Email:</td>
	                        <td><a href="mailto:info@support.com">info@support.com</a></td>
	                      </tr>
	                           
	                      </tr>
	                     
	                    </tbody>
	                  </table>
	                  
	                  
	                  <a href="#" class="btn btn-primary">Upgrade account</a>
	                </div>
	              
	            </div>


	            <div class="panel-footer">
	            	<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
	            	<span class="pull-right">
	            		<a data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
	            		<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
	            	</span>

	            </div>

<?php include ('includes/footer.php');?>