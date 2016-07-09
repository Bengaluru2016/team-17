<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
     <head>
        <title>Rang De - Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
    <link href="startbootstrap-sb-admin-1.0.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="startbootstrap-sb-admin-1.0.4/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="startbootstrap-sb-admin-1.0.4font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        
    </head>
    <body>
        <div class="row">
            <div class="col-md-8">
                <form class="form-horizontal" action="../rangde/register.php" method="POST">
                    <fieldset>
                        <legend>REGISTER</legend>
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="username" required>
                          <span class="error">
                                  <?php                             
                                        if(isset($_GET[userErr]))
                                            echo "The Username is incorrect!";
                                   ?>       
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required>
                          <span>
                              <?php
                                        if(isset($_GET[passErr])){
                                            echo "The Password is incorrect!";
                                        }
                              ?>
                         </span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName3" placeholder="First Name" name="fname" required>
                          <span class="error">
                                  <?php                             
                                        if(isset($_GET[fnameErr]))
                                            echo "The Username is incorrect!";
                                   ?>       
                          </span>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Last Name" name="lname" required>
                          <span class="error">
                                  <?php                             
                                        if(isset($_GET[lnameErr]))
                                            echo "The Username is incorrect!";
                                   ?>       
                          </span>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                          <textarea  class="form-control" id="inputEmail3"  name="address" required></textarea>
                          <span class="error">
                                  <?php                             
                                        if(isset($_GET[addressErr]))
                                            echo "The Username is incorrect!";
                                   ?>       
                          </span>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="phone" class="form-control" id="inputEmail3"  name="phone" required>
                          <span class="error">
                                  <?php                             
                                        if(isset($_GET[phoneErr]))
                                            echo "The Username is incorrect!";
                                   ?>       
                          </span>
                        </div>
                      </div>
                      
					  <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Facebook Profile URL</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Facebook Profile URL" name="fb">
                        </div>
                      </div>
					  
					  
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                      </div>
                    </fieldset>
                </form>
            </div>
            
        </div>

        </div>
        </body>
</html>