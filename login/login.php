<?php 
  require('../templates/header.php');
?>
<div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>
                   <form action="" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" name="submit"class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>
                         
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="../signup/signup.php" id="signup">Sign up here</a></p>
                           </div>
                        </form>
                 
				</div>
			</div>
			 
			</div>
		</div>
      </div>   
<?php 
  require('../templates/footer.php')
?>