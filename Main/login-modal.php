<?php



?>

  <!-- Login Modal -->
    <div class="modal fade " id="myModal">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title w-100 font-weight-bold">Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
  			<form method="POST" action="login.php" >
  			  <div class="form-group">
  				<label for="exampleInputEmail1">Email address</label>
  				<input type="email" class="form-control" placeholder="Enter email" name="email" required>
  				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  			  </div>
  			  <div class="form-group">
  				<label for="exampleInputPassword1">Password</label>
  				<input type="password" class="form-control" name="password" placeholder="Password" required>
  			  </div>
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
  			   <input type="submit" name="submit" class="btn btn-primary" style="background-color:#6487a5;" value="Login"><br>
          </div>
          </form>
        </div>
      </div>
    </div>
  <!--End Login Modal-->