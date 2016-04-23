(function() {
	    
	    	if(!!navigator.geolocation) {
	    	
	    		var map;
	    	
		    	var mapOptions = {
		    		zoom: 15,
		    		mapTypeId: google.maps.MapTypeId.ROADMAP
		    	};
		    	
		    	map = new google.maps.Map(document.getElementById('google_canvas'), mapOptions);
	    	
	    		navigator.geolocation.getCurrentPosition(function(position) {
	    		
		    		var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
							var x=position.coords.latitude;
							var y=position.coords.longitude;
					document.getElementById('latitude').value=x;
					document.getElementById('langitude').value=y;
		    		var infowindow = new google.maps.InfoWindow({

		    			map: map,
		    			position: geolocate,
		    			content:
		    				'<h4>Your Location</h4>' +
		    				'<div id="location">Your Location</div>' +
		    				'<p>Latitude: ' + position.coords.latitude + '</p>' +
		    				'<p>Longitude: ' + position.coords.longitude + '</p>' 
							
		    		});
		    		
		    		map.setCenter(geolocate);
		    		
	    		});
	    		
	    	} else {
	    		document.getElementById('google_canvas').innerHTML = 'No Geolocation Support.';
	    	}
	    	
	    })();

		
		