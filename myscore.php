<?php
	require_once('auth.php');
	error_reporting(E_ERROR | E_PARSE);
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
                <a class="navbar-brand" href="dashboard.php">Rang De - Investors Dashboard</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['SESS_FNAME']." ".$_SESSION['SESS_LNAME'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../rangde/index.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="causes.php"><i class="fa fa-fw fa-bar-chart-o"></i>Causes</a>
                    </li>
                    <li>
                        <a href="addfriends.php"><i class="fa fa-fw fa-table"></i>Add Friends</a>
                    </li>
                    <li >
                        <a  href="recommended.php"><i class="fa fa-fw fa-edit"></i>Recommended Causes For You</a>
                    </li>
					<li class="active">
                        <a href="addfriends.php"><i class="fa fa-fw fa-table"></i>My Score</a>
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
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>My Score (Gamification)</h3>
								<h2 class="panel-title">Score is increased by adding friends(+20),sharing(+30) and investing(+50) in causes.</h2>
                            </div>
					<div class="panel-body">
						<table class="table table-responsive table-hover">
                                    <thead>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                  
                                        <th>Score</th>
                                    </thead>
									<?php 
										require_once 'connection.php';
										
									$query = "SELECT * FROM score NATURAL JOIN investors";
				
									$res = mysqli_query($con,$query);
                                 
                                    while($row = mysqli_fetch_assoc($res)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row[FIRST_NAME];?></td>
                                            <td><?php echo $row[LAST_NAME];?></td>
                                            <td><?php echo $row[SCORE];?></td>
             
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                 </table>
						
					</div>
                                
             
			
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
