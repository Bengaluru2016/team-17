<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rang De -Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RangDe</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="topinvest.html">Top Investors</a></li> 
      <li><a href="registerpage.php">Join Us</a></li>
      <li><a href="loginpage.php">Login</a></li>
    </ul>
  </div>
</nav>
<form class="form-horizontal" action="../rangde/login.php" method="POST">
                    <fieldset>
                        <legend align="center">LOGIN</legend>
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="username">
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
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
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
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Remember me
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Sign in</button>
                         <button type="button" class="btn btn-default" id="myBtn" href="../rangde/registerpage.php">Sign Up</button>
                        </div>
                      </div>
                    </fieldset>
                </form>
</body>
 <script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = '<?php echo "../Views/register.php"; ?>';
    });
  </script>
</html>
