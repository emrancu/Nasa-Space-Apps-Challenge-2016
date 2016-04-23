	
	<?php  include 'fixed/header.php';?>
	<div class="col-sm-12" style="padding:8px">
	<div class="col-sm-12 mapbox" id="google_canvas">
	<!--	<div class="box-pro">
		
		</div>-->
	</div>
	</div>

	<input type="text" id="latitude" name="lati" class="out" />
	<input type="text" id="langitude" name="lang"  class="out"/>
	<input type="text" id="location2" name="addr" class="hide"/>
	<script src="js/maparea.js"></script>	
	<div  >
	</div>
    <script type="text/javascript">
	
        function GetAddress() {
            var lat = parseFloat(document.getElementById("latitude").value);
            var lng = parseFloat(document.getElementById("langitude").value);
            var latlng = new google.maps.LatLng(lat, lng);
            var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
					document.getElementById("location").innerHTML="Location: " + results[1].formatted_address;
					document.getElementById("location2").value=results[1].formatted_address;
                    }
                }
            });
        }
		setTimeout("GetAddress()", 5000); 
		setTimeout("GetAddress()", 10000); 
		
    </script>
	<div class="user">
	
	<div class="col-sm-6 box-container" >
			<div class="col-sm-12 box" id="gif-wet">
			
			<h2 class="saikt" ><a href="weather.php">Weather Information</a></h2>
			
			</div>
	</div>
	
	
		<div class="col-sm-6 box-container">
			<div class="col-sm-12 box">
			
			<h2 class="saikt"> <a href="danger.php">Dangerous Area</a></h2>
			
			</div>
	</div>
	
	
	
	<div class="col-sm-6 box-container">
			<div class="col-sm-12 box">
			
			<h2 class="saikt"><a href="agency.php" id="aaa"> Scientific Agency</a></h2>
			
			</div>
	</div>
	
	
	
	<div class="col-sm-6 box-container">
			<div class="col-sm-12 box">
			
			<h2 class="saikt"><a href="history.php"> Historical Events</a></h2>
			
			</div>
	</div>
	
	
	
	<div class="col-sm-6 box-container">
			<div class="col-sm-12 box">
			
			<h2 class="saikt"><a href="Fams.html">Famous Researchers</a></h2>
			
			</div>
	</div>
	
	
	
	<div class="col-sm-6 box-container">
			<div class="col-sm-12 box">
			
			<h2 class="saikt"><a href="Emrgncy.html">Emergency Info</a></h2>
			
			</div>
	</div>
	
	
	</div>
	
	
	



<div class="main">  
<div class="bb">  </div>


</div>


<script>
  	
		function userdata(){
	
  // setTimeout( function(){ 
    var queryString = 'lati='+$("#latitude").val()+'&lang='+$("#langitude").val()+'&addr='+$("#location2").val();
    jQuery.ajax({
        url: "action/session.php",
        data:queryString,
        type: "POST",
        success:function(data){
          $("#aaa").append(data);
        },
        error:function (){}
    });
//}  , 1000 );

}
setTimeout("userdata()", 5000); 
setTimeout("userdata()", 8000); 
setTimeout("userdata()", 10000); 
	
	
</script>  	
	<?php

		
		
		include 'fixed/footer.php';?>