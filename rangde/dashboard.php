<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Range De - Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="startbootstrap-sb-admin-1.0.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="startbootstrap-sb-admin-1.0.4/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="startbootstrap-sb-admin-1.0.4font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Rang De - Investors Dashboard</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li  class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="causes.php"><i class="fa fa-fw fa-bar-chart-o"></i>Causes</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i>Add Friends</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i>Recommended Causes For You</a>
                    </li>
                    
                 
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i>My Favourite Sections</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                 <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Investor Details</h3>
                            </div>
             <div class="panel-body">
                                
             <form class="form-horizontal" action="../rangde/controllers/update.php" method="POST">
                    <fieldset>
                       
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" disabled class="form-control" id="inputEmail3" placeholder="Username" name="username" value="<?php echo $_SESSION['SESS_USERNAME'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" disabled class="form-control" id="inPassword3" placeholder="Password" name="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inName3" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" disabled id="inName3" placeholder="First Name" name="fname" value="<?php echo $_SESSION['SESS_FNAME'];  ?>">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inName4" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inName4" disabled placeholder="Last Name" name="lname" value="<?php echo $_SESSION['SESS_LNAME']; ?>">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inName5" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                          <textarea  class="form-control" disabled id="inName5"  name="address"></textarea>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inName6" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" disabled id="inName6"  name="phone" value="<?php echo $_SESSION['SESS_PHONE'];?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button id="inName7" disabled type="submit" class="btn btn-default">Submit</button>
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button  type="button" id="update" class="btn btn-default">Update Profile Details</button>
                        </div>
                      </div>
                    </fieldset>
                </form>
 
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 <script>
        
        $('#update').click(function(){
           $("#inPassword3").attr('disabled', !$("#inPassword3").attr('disabled'));
           $("#inName3").attr('disabled', !$("#inName3").attr('disabled'));
           $("#inName4").attr('disabled', !$("#inName4").attr('disabled'));
           $("#inName5").attr('disabled', !$("#inName5").attr('disabled'));
           $("#inName6").attr('disabled', !$("#inName6").attr('disabled'));
           $("#inName7").attr('disabled', !$("#inName7").attr('disabled'));
       
});
     </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
