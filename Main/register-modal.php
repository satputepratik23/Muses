<?php
/*$name=$_POST('name');
$phone=$_POST('phone');
$band=$_POST('bandname');
$email=$_POST('email');	
$pass=$POST('pass');


$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "pro1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (user_id,user_name,password, email,user_type,phone,status,rock,pop,gospel,metal,acoustic,bollywood)
VALUES (101,$name,$pass,$email,'user',$phone,1,1,1,0,0,0,0)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
*/?>




<!-- Register Modal -->
  <div class="modal fade " id="myRegisterModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title w-100 font-weight-bold">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<form method="POST" action="register.php">
			  <div class="form-group">
				<label for="exampleInputName1">Name</label>
				<input type="text" class="form-control" placeholder="Name" name="name">
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputPhone1">Phone</label>
				<input type="text" class="form-control" placeholder="Phone" name="phone">
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputName1">Band Name</label>
				<input type="text" class="form-control" placeholder="Band Name" name="bandname">
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" placeholder="Enter email" name="email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
			  </div>
			  
		</div>
			
       
        
        <!-- Modal footer -->
        <div class="modal-footer">
			<input type="submit" name="submit" class="btn btn-primary" value="Register" style="background-color:#6487a5;"><br>
        </div>
        </form>
      </div>
    </div>
  </div>
<!--End Register Modal-->
