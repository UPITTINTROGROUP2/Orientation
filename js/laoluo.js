
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
	// document.addEventListener('click', function(e) {
 //    // alert(e.target.id);
 //    mapDiv = e.target;
 //    id = (e.target.id).toString();
 //    alert(id);
	// }); 
		
	
	  
	  var mapProp = {
	  center: myCenter,
	  zoom:13,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
		map=new google.maps.Map(document.getElementById("googleMap")
	  ,mapProp);
	  
	  // google.maps.event.addDomListener(mapDiv, 'click', placeMarker); 
    
  	
	
	}

	
	function showMarker(num){	
	   // alert(geo11);	
	   // geo1=geo11;
	   // geo2=geo22;
	   // // alert(geo1);
	   // geo=new google.maps.LatLng(geo1, geo2);
	   id = num;
	   // alert('"' + id + '"'); 
	   mapDiv = document.getElementById(id+"");
	   google.maps.event.addDomListener(mapDiv, 'click', placeMarker); 
	   marker.setMap(null);
	   // alert(id+"");
	   // alert(geo);

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
	
