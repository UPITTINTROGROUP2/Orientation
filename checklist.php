<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ISCHOOL Orientation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/checklist.css" rel="stylesheet">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/checklist.js"></script>
    <script type="text/javascript" src="js/selectprocess.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCAoOjDlgsjedhHfdEAa6cAX6u7P5ByFz8&sensor=false"></script>
        
    <script type="text/javascript">
        var total=0;
        var barl=0;
        function success1(myitem){
           if(myitem.checked){
               total=total+1;
               barl=barl+100/3/6;
               document.getElementById("bar1").style.width=barl+"%";
               document.getElementById("lb1").innerHTML="You have completed"+" "+total+"/21";
           }
           else{
               total=total-1;
               barl=barl-100/3/6;
               document.getElementById("bar1").style.width=barl+"%";
               document.getElementById("lb1").innerHTML="You have completed"+" "+total+"/21";
           }
        }
        var barl1=0;
        function success2(myitem){
           if(myitem.checked){
               total=total+1;
               barl1=barl1+100/3/4;
               document.getElementById("bar2").style.width=barl1+"%";
               document.getElementById("lb1").innerHTML="You have completed"+" "+total+"/21";
           }
           else{
               total=total-1;
               barl1=barl1-100/3/4;
               document.getElementById("bar2").style.width=barl1+"%";
               document.getElementById("lb1").innerHTML="You have completed"+" "+total+"/21";
           }
        }
        var barl2=0;
        function success3(myitem){
           if(myitem.checked){
               total=total+1;
               barl2=barl2+100/3/11;
               document.getElementById("bar3").style.width=barl2+"%";
               document.getElementById("lb1").innerHTML="You have completed"+" "+total+"/21";
           }
           else{
               total=total-1;
               barl2=barl2-100/3/11;
               document.getElementById("bar3").style.width=barl2+"%";
               document.getElementById("lb1").innerHTML="You have completed"+" "+total+"/21";
           }
        }
    </script>
	<script>
        $(document).ready(function(){
            <?php
                include 'conn.php';
                session_start();
                if(isset($_SESSION['username'])){
                    $sql="SELECT * FROM todolistprocess WHERE email = '". $_SESSION['username']. "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    for($i=1;$i<22;$i++){
                        if ($row['TD'.$i]) {
                            echo "document.getElementById(\"todo". $i. "\").className = \"todo-item done\";";
                        }
                    }
                }
            ?>
        });
    </script>
	<script>
	var map;
	var myCenter = new google.maps.LatLng(40.444401, -79.954840);
	var id; 
	var mapDiv;
	var geo1 = [[40.451129],[40.442736],[40.444490],[40.451129],[40.451129],[40.442634],[40.443598],[40.443598],[40.443598],[40.443598],[40.451129],[40.451129],[40.451129],[40.446249],[40.446249],[40.446249],[40.451129],[40.445603],[40.445603],[40.451129],[40.451129]];
	var geo2 = [[-79.952647],[-79.956654],[-79.953193],[-79.952647],[-79.952647],[-79.961590],[-79.954842],[-79.954842],[-79.954842],[-79.954842],[-79.952647],[-79.952647],[-79.952647],[-79.956427],[-79.956427],[-79.956427],[-79.952647],[-79.950877],[-79.950877],[-79.952647],[-79.952647]];
	var popup = [
	[ "<div class=\"col-sm-12\"><p><strong>Airport to school:</strong></p><p><a href=\"http://www.supershuttle.com/Locations/PITAirportShuttlePittsburgh.aspx\">http://www.supershuttle.com/Locations/PITAirportShuttlePittsburgh.aspx</a></p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Student card(*):</strong></p><p>Student card can be used to take bus freely.</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>English Language Proficiency Test:</strong></p><p>Find time & location: </p><p><a href=\"http://www.linguistics.pitt.edu/centers/testing-ept.php\">http://www.linguistics.pitt.edu/centers/testing-ept.php</a></p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Meet Instructor & courses enrollment(*):</strong></p><p>By 08-25-2014</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Tuition Pay(*):</strong></p><p><strong>My Pitt -> PITTPAY</strong></p><p><a href=\"https://my.pitt.edu/portal/server.pt/community/my_pitt_home/805\">https://my.pitt.edu/portal/server.pt/community/my_pitt_home/805</a></p><p>By 09-17-2014</p></div>"],
	["<div class=\"col-sm-12\"><p><strong>Health insurance pay(*):</strong></p><p><a href=\"https://my.pitt.edu/portal/server.pt/community/my_pitt_home/805\">https://my.pitt.edu/portal/server.pt/community/my_pitt_home/805</a></p><p>By 09-15-2014</p><p>kind:UPMC or ISO</p></div>"],
	["<div class=\"col-sm-12\"><p><strong>Complete via My OIS:</strong></p><p><a href=\"https://my.ois.pitt.edu\">https://my.ois.pitt.edu</a></p><p><strong>Tele: 412-624-7129</strong></p><p>Upload your immigration documents to OIS in advance of in-person Appointment</p><p>Upload I94(after enter US)</p></div>"],
	["<div class=\"col-sm-12\"><p><strong>OIS in-person check-in(*):</strong></p><p>Sign up: <a href=\"www.ois.pitt.edu/fallorientation\">www.ois.pitt.edu/fallorientation</a></p><p>Bring: I-20/DS-2019, Passport, I-94 print out</p><p>Meet with OIS member to review students’ immigration documents,provide travel signature and remove hold from your account.</p></div>"],	
	[ "<div class=\"col-sm-12\"><p><strong>International Student Group Session(*)</strong></p><p>08-18, 11:30a-12:30p</p><p>08-19, 11:30a-12:30p</p><p>08-20, 09:00a-10:00a</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>International Student Individual Appointment(*)</strong></p><p>Check email for time & location</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Campus Tour</strong></p><p>IS Building, Lobby</p><p>(a) 8-18, 5:00p-6:00p</p><p>(b) 8-22, 9:00a-10:00a</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Bonus Session 1: Surviving Grad School & Student Li</strong></p><p>IS Building, 3rd  floor</p><p>8-20, 1:30p-2:30p</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Partners Session</strong></p><p>08-20, 11:30a-12:30p</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Check-in</strong></p><p>20th Century Club</p><p>8-21, 9:30a-10:00a</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Design Activity</strong></p><p>20th Century Club</p><p>8-21, 10:00a-11:00a</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Dean’s Welcome & Introductions</strong></p><p>20th Century Club</p><p>8-21, 11:00a-12:00p</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Degree Program Overview & Advising</strong></p><p>IS Building</p><p>8-21, 2:00p-4:00p</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Getting Started: Info All Students Need to Know</strong></p><p>Bellefield Hall, Auditorium</p><p>8-22, 10:30a-11:15a</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Research Resources & Academic Integrity</strong></p><p>Bellefield Hall, Auditorium</p><p>8-22, 11:30a-12:30p</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>Bonus Session 2: Career Planning & Prep</strong></p><p>IS Building, 3rd floor</p><p>8-22, 1:30p-2:30p</p></div>"],
	[ "<div class=\"col-sm-12\"><p><strong>iSchool Fall Picnic</strong></p><p>IS Building, Patio</p><p>8-24, 3:00p-5:30p</p></div>"],
	
	];
	var geo;
	var marker;
	var markers = [];
	
	function initialize()
	{
	  var mapProp = {
	  center: myCenter,
	  zoom:13,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
		map=new google.maps.Map(document.getElementById("googleMap")
	  ,mapProp); 	
	}

	
	function showMarker(num){	
	   id = num
	   mapDiv = document.getElementById(id+"");
	   google.maps.event.addDomListener(mapDiv, 'click', placeMarker); 
	   marker.setMap(null);
	}
	function placeMarker(){
            // alert("in place Marker!");
            marker = new google.maps.Marker({
	    position: new google.maps.LatLng(geo1[id],geo2[id]),
	    map: map,
            });

	  
	  marker.setMap(map);
	  markers.push(marker);
	  google.maps.event.addListener(marker, 'click', function() {
    	infowindow.open(map,marker);
  		});
	  var infowindow = new google.maps.InfoWindow({
	    content: "" + popup[id] 
	  });
	  // infowindow.open(map,marker);
	}
	
	function clearMarkers() {
  		setAllMap(null);
	}

	function deleteMarkers() {
	  clearMarkers();
	  markers = [];
	}

	google.maps.event.addDomListener(window, 'load', initialize);
	
	
	</script>
    </head>

<body>
<div class="top_wrapper">


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
						<li  class="active">
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

						<!--
						<ul class="navbar-form navbar-left">
							
							<a class="btn btn-primary btn-large" href="login.html">Log in</a>
							
						</ul>
					-->

                                        <?php
                                            if(!isset($_SESSION['username'])){
                                        ?>    
                                            <li>
                                                    <a href="checklist.php">Hi, New student</a>
                                            </li>
                                        <?php
                                            }
                                            else {
                                        ?>
                                            <ul class="nav navbar-nav navbar-right">
                                                <ul class="navbar-form navbar-left">
                                                    <li>
                                                        Welcome,<?php echo $_SESSION['username'];?>
                                                    </li>
                                                <li>
                                                    <a href="logout.php">Log out</a>
                                                </li>
                                                </ul>
                                            </ul>
                                        <?php
                                            }
                                        ?>
					</ul>
				</div>
				
			</nav>

			<div class="row clearfix">
				
				<div class="col-md-3 column">
					
					<div class="progress progress-striped">
					   <div class="progress-bar progress-bar-success" id="bar1" role="progressbar" 
					      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
					      style="width: 1%;">
					      <span class="sr-only">40%</span>
					   </div>
					   <div class="progress-bar progress-bar-info" id="bar2" role="progressbar" 
					      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
					      style="width: 1%;">
					      <span class="sr-only">30%</span>
					   </div>
					   <div class="progress-bar progress-bar-warning" id="bar3" role="progressbar" 
					      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
					      style="width: 1%;">
					      <span class="sr-only">20%</span>
					   </div>
					</div>


					<div>
					<label id="lb1">You have completed 0/21 </>

					</div>
					<!-- 你看看你喜欢用哪个，要是前面的太难就用后面的 -->
					
					<div class="panel-group" id="panel-216477">
						<div class="panel panel-default">
							
							<div class="panel-heading">
								 <a class="panel-title" data-toggle="collapse" data-parent="#panel-216477" href="#panel-element-932213">
								 	Personal Affairs
								 </a>
							</div>
							<div id="panel-element-932213" class="panel-collapse in">
								<div class="panel-body">
									<div class="checkbox" id="0" onclick="showMarker(0)">
                                                                            <label id="todo1" class="todo-item" >
                                                                                <input type="checkbox" id="checkbox01" class="todo-check"  onclick="success1(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  1) <?php }?>">
									    	Arrange Your Transportation From the Airport
                                                                            </label>
									</div>
									<div class="checkbox" id="1" onclick="showMarker(1)">
                                                                             <label id="todo2" class="todo-item" >
									    	<input type="checkbox" id="checkbox02" class="todo-check"   onclick="success1(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  2) <?php }?>">
									    	Get your Student card
                                                                            </label>
									</div>
									<div class="checkbox" id="2" onclick="showMarker(2)">
                                                                            <label id="todo3" class="todo-item">
									    	<input type="checkbox" id="checkbox03" class="todo-check"  onclick="success1(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  3) <?php }?>">
									    	English Language Proficiency Test
                                                                            </label>
									</div>
									<div class="checkbox" id="3" onclick="showMarker(3)">
                                                                            <label id="todo4" class="todo-item">
									    	<input type="checkbox" id="checkbox04" class="todo-check"  onclick="success1(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  4) <?php }?>">
									    	Meet Instructor &amp; courses enrollment
                                                                            </label>
									</div>
									<div class="checkbox" id="4" onclick="showMarker(4)">
                                                                            <label id="todo5" class="todo-item">
									    	<input type="checkbox" id="checkbox05" class="todo-check"  onclick="success1(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  5) <?php }?>">
									    	Tuition pay
                                                                            </label>
									</div>
									<div class="checkbox" id="5" onclick="showMarker(5)">
                                                                            <label id="todo6" class="todo-item">
									    	<input type="checkbox" id="checkbox06" class="todo-check"  onclick="success1(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  6) <?php }?>">
									    	Health insurance pay
                                                                            </label>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-216477" href="#panel-element-355496">OIS Affairs</a>
							</div>
							<div id="panel-element-355496" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="checkbox" id="6" onclick="showMarker(6)">
                                                                            <label id="todo7" class="todo-item">
                                                                                    <input type="checkbox" id="checkbox07" class="todo-check"  onclick="success2(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>', 7) <?php }?>">
									    	OIS online check-in
                                                                            </label>
									</div>
									<div class="checkbox" id="7" onclick="showMarker(7)">
                                                                            <label id="todo8" class="todo-item">
									    	<input type="checkbox" id="checkbox08" class="todo-check"  onclick="success2(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  8) <?php }?>">
									    	OIS in-person check-in
                                                                            </label>
									</div>
									<div class="checkbox" id="8" onclick="showMarker(8)">
                                                                            <label id="todo9" class="todo-item">
									    	<input type="checkbox" id="checkbox09" class="todo-check"  onclick="success2(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  9) <?php }?>">
									    	International Student Group Session
                                                                            </label>
									</div>
									<div class="checkbox" id="9" onclick="showMarker(9)">
                                                                            <label id="todo10" class="todo-item">
									    	<input type="checkbox" id="checkbox10" class="todo-check"  onclick="success2(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  10) <?php }?>">
									    	International Student Individual Appointment
                                                                            </label>
									</div>
									
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-216477" href="#panel-element-355490">School Affairs</a>
							</div>
							<div id="panel-element-355490" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="checkbox" id="10" onclick="showMarker(10)">
                                                                            <label id="todo11" class="todo-item">
									    	<input type="checkbox" id="checkbox11" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  11) <?php }?>">
									    	Campus Tour
                                                                            </label>
									</div>
									<div class="checkbox" id="11" onclick="showMarker(11)">
                                                                            <label id="todo12" class="todo-item">
									    	<input type="checkbox" id="checkbox12" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  12) <?php }?>">
									    	Partners Session
                                                                            </label>
									</div>
									<div class="checkbox" id="12" onclick="showMarker(12)">
									  	<label id="todo13" class="todo-item">
									    	<input type="checkbox" id="checkbox13" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  13) <?php }?>">
									    	Bonus Session 1: Surviving Grad School & Student Life
									  	</label>
									</div>
									<div class="checkbox" id="13" onclick="showMarker(13)">
									  	<label id="todo14" class="todo-item">
									    	<input type="checkbox" id="checkbox14" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  14) <?php }?>">
									    	Check-in
									  	</label>
									</div>
									<div class="checkbox" id="14" onclick="showMarker(14)">
									  	<label id="todo15" class="todo-item">
									    	<input type="checkbox" id="checkbox15" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  15) <?php }?>">
									    	Design Activity
									  	</label>
									</div>
									<div class="checkbox" id="15" onclick="showMarker(15)">
									  	<label id="todo16" class="todo-item">
									    	<input type="checkbox" id="checkbox16" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  16) <?php }?>">
									    	Dean’s Welcome & Introductions
									  	</label>
									</div>
									<div class="checkbox" id="16" onclick="showMarker(16)">
									  	<label id="todo17" class="todo-item">
									    	<input type="checkbox" id="checkbox17" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  17) <?php }?>">
									    	Degree Program Overview & Advising
									  	</label>
									</div>
									<div class="checkbox" id="17" onclick="showMarker(17)">
									  	<label id="todo18" class="todo-item">
									    	<input type="checkbox" id="checkbox18" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  18) <?php }?>">
									    	Getting Started: Info All Students Need to Know
									  	</label>
									</div>
									<div class="checkbox" id="18" onclick="showMarker(18)">
									  	<label id="todo19" class="todo-item">
									    	<input type="checkbox" id="checkbox19" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  19) <?php }?>">
									    	Research Resources & Academic Integrity
									  	</label>
									</div>
									<div class="checkbox" id="19" onclick="showMarker(19)">
									  	<label id="todo20" class="todo-item">
									    	<input type="checkbox" id="checkbox20" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  20) <?php }?>">
									    	Bonus Session 2: Career Planning & Prep
									  	</label>
									</div>
									<div class="checkbox" id="20" onclick="showMarker(20)">
									  	<label id="todo21" class="todo-item">
									    	<input type="checkbox" id="checkbox21" class="todo-check"  onclick="success3(this);<?php if(isset($_SESSION['username'])) {?>changeProcess('<?php echo $_SESSION['username'];?>',  21) <?php }?>">
									    	iSchool Fall Picnic
									  	</label>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-9 column" id="googleMap" style="width:850px;height:480px;">
					<!-- 地图模块 -->


				</div>
			</div>


			
	        <div class="col-md-12 column">
			 <br>
			 <!-- copyright -->
                         <br>
                </div>
			
			
		</div>
	</div>
</div>
</div>
<!--?php echo "<script>checkProcess('".$_SESSION['username']."')</script>";?-->
</body>
</html>