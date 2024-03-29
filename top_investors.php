<? php
    include 'connection.php'
    $sql="select first_name,rate1 from investors,rating having count(*)<8 order by rate1 DESC;"
    $result = $conn->query($sql);
    if(mysql_num_rows($result)>0){
        $i=0;
    while($row = $result->fetch_assoc()) {
        $name_array[i]=$row['first_name'];
        $rate_array[i]=$row['rate1'];
        $i++;
        }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Top Investors Leaderboard</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <!--<div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                       <!--) <li><a href="about-us.html">About Us</a></li>-->
						                                <li><a href="topinvest.html">Top Investors</a></li>
						<li><a href="registerpage.php">Join Us</a></li>
                                <li><a href="loginpage.php">Login</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section class="pricing-page">
        <div class="container">
            <div class="center">  
                <h2>Leader Board</h2>
            </div>  
            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price-two wow fadeInDown">
                        <ul>
                            <li><img src="images/badge.jpg"></li>
                            <li><b><?php echo $name_array[0]?></b></li>
                            <li>Points:<?php echo $rate_array[0]?></li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two wow fadeInDown">
                        <ul>
                            <li><img src="images/badge.jpg"></li>
                            <li><b><?php echo $name_array[1]?></b></li>
                            <li>Points:<?php echo $rate_array[1]?></li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two wow fadeInDown">
                        <ul>
                            <li> <img src="images/badge.jpg"></li>
                            <li><b><?php echo $name_array[2]?></b></li>
                            <li>Points:<?php echo $rate_array[2]?></li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-four wow fadeInDown">
                        <ul>
                          
                            <li><img src="images/badge1.png" width="100px" height="100px"</li>
                            <li><?php echo $name_array[3]?></li>
                            <li>Points:<?php echo $rate_array[3]?></li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-five wow fadeInDown">
                        <ul>
                            <li><img src="images/badge1.png" width="100px" height="100px"</li>
                            <li><?php echo $name_array[4]?></li>
                            <li>Points:<?php echo $rate_array[4]?></li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-four wow fadeInDown">
                        
                        <ul>
                            <li ><img src="images/badge1.png" width="100px" height="100px">
                            </li>
                            <li><?php echo $name_array[5]?></li>
                            <li>Points:<?php echo $rate_array[5]?></li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Contact</a>
                            </li>
                        </ul>
                    </div>

                     <div class="col-sm-6 col-md-3 plan price-four wow fadeInDown">
                        <ul>
  
                            <li><img src="images/badge2.png" width="100px" height="100px"></li>
                            <li><?php echo $name_array[6]?></li>
                            <li>Points:<?php echo $rate_array[6]?></li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->
           
    

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2008-2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Rang De</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>