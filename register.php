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
    <script>
        function checkEmail1(email) {
            var reg = /.*@pitt.edu/;
            if (email.value == "") {
                alert("Please input your email!");
            }
            else if(!reg.exec(email.value)) {
                alert("Please input the right form!");
            }
        }
        function check(input) {
            switch(input.name) {
                case "Password": 
                    if (input.value == "") 
                    alert("Plese input your password!");
                    break;
                case "fname":
                    if (input.value == "") 
                    alert("Plese input your first name!");
                    break;
                case "lname":
                    if (input.value == "") 
                    alert("Plese input your last name!");
                    break;
            }
        }
        function checkTel(input) {
            var reg = /\d{5,15}/;
            if (input.value == "") {
                alert("Please input your telephone!");
            }
            else if(!reg.exec(input.value)) {
                alert("Please input the right telephone number!");
            }
        }
    </script>
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
                        
                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="login.php">Have an account? Log in!</a>
                            </li>
                        </ul>
                    </div>
                    
                </nav>
<!--
                <div class="col-md-12 column">
                    <div class="col-md-6 title">
                            <h1>Sign In</h1>
                        </div>
                     <div class="col-md-12 title">
                          <h3 style="color:#428BCA">Sign Up Now</h3>
                     </div>
                </div>
-->        <div class="jumbotron1">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <form class="form-horizontal" role="form" method="post" action="reg.php">
                              <div class="form-group">
                                        <label class="control-label col-md-3 input"  for="Email">Email:</label>                      
                                        <div class="col-md-6 input">
                                            <input type="text" class="form-control" name="Email" placeholder="user@pitt.edu" onBlur="checkEmail1(this)">
                                        </div>
                              </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 input"  for="Password">Password:</label>
                                    <div class="col-md-6 input">
                                        <input type="password" class="form-control" name="Password" placeholder="Password" onBlur="check(this)">
                                    </div>
                                </div>
                                   <div class="form-group">
                                          <label class="control-label col-md-3 input" for="fname">First Name:</label>
                                          <div class="col-md-6 input">
                                            <input type="text" class="form-control" name="fname" placeholder="Character only" onBlur="check(this)" maxlength="20">
                                          </div> 
                                    </div>

                                    <div class="form-group">
                                           <label class="control-label col-md-3 input" for="lname">Last Name:
                                           </label>
                                              <div class="col-md-6 input">
                                                <input type="text" class="form-control" name="lname" placeholder="Character only" onBlur="check(this)" maxlength="20">
                                              </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="control-label col-md-3 input" for="tele">Telephone:</label>
                                              <div class="col-md-6 input">
                                                <input type="text" class="form-control" name="phone" placeholder="Digit only" onBlur="checkTel(this)" maxlength="10">
                                              </div>
                                    </div>

                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6">
                                     <button type="submit" name="submit" class="btn btn-block btn-success col-md-2"><strong>Sign Up</strong></button>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                </div>
                
               

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
