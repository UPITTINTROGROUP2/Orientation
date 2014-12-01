<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ISCHOOL Orientation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div id="top_wrapper">


<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">			
                    <div class="page-header">
                        <h1>
                                University of Pittsburgh
                        </h1>
                    </div>
                    <nav class="navbar navbar-default navbar-static-top" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">Home</a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                        <li>
                                                <a href="checklist.php">ToDo</a>
                                        </li>
                                        <li>
                                                <a href="restaurant.html">Restaurant</a>
                                        </li>
                                        <li>
                                                <a href="entertainment.html">Entertainment</a>
                                        </li>
                                </ul>

                                <?php
                                    session_start();
                                    if(!isset($_SESSION['username'])){
                                ?>    
                                <ul class="nav navbar-nav navbar-right">
                                    <ul class="navbar-form navbar-left">
                                        <a class="btn btn-primary btn-large" href="login.php">Log in</a>
                                    </ul>
                                    <li>
                                        <a href="register.php">Sign up</a>
                                    </li>
                                </ul>
                                <?php
                                    }
                                    else {
                                ?>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a><?php echo $_SESSION['username'];?></a></li>
                                    <li>
                                        <a href="logout.php">Log out</a>
                                    </li>
                                </ul>
                                <?php
                                    }
                                ?>
                            </div>

                    </nav>

			<div class="carousel slide" id="carousel-484195">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-484195">
					</li>
					<li data-slide-to="1" data-target="#carousel-484195">
					</li>
					<li data-slide-to="2" data-target="#carousel-484195">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="img/Upitt.jpeg">
						<div class="carousel-caption">
							<h4>
								Welcome to University of Pittsburgh
							</h4>
							
						</div>
					</div>
					<div class="item">
						<img alt="" src="img/Upitt1.jpeg">
						<div class="carousel-caption">
							<h4>
								Welcome to University of Pittsburgh
							</h4>
							
						</div>
					</div>
					<div class="item">
						<img alt="" src="img/CL1.jpeg">
						<div class="carousel-caption">
							<h4>
								Welcome to University of Pittsburgh
							</h4>
							
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-484195" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-484195" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			
	        <div class="col-md-12 column">
			 <br>
                         <br>
                </div>
			
			
		</div>
	</div>
</div>
</div>

</body>
</html>