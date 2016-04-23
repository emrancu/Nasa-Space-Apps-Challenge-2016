	
	<?php  include 'fixed/header.php';?>
	
<div class="col-sm-12 weather">
	<?php  
	include 'config/dbconfig.php';
	$r=mysqli_fetch_assoc(mysqli_query($con,"select * from userlocation"));
	
	?>
	
	
	 <script>
        function displayParsedData(data){
          /* Working with the 'data' object (not string) here, now we can access the different properties available.*/
          text = '<b>Name: </b>' + data.list[0].name + '<br/>';
          text += '<b>message: </b>' + data.message + '<br/>';
          text += '<b>Current Temperature: </b>' + data.list[0].main.temp + ' F<br/>';
          text += '<b>Weather Conditions: </b>' + data.list[0].weather[0].description + '<br/>';
          $('#parsed_json').append(text);
        }
		
setTimeout("test2()", 1000); 
      </script>

     

      <script>
        function test2() {
          $.ajax({
            url: 'http://openweathermap.org/data/2.1/find/city?lat=<?php echo $r['latitude']; ?>&lon=<?php echo $r['langitude']; ?>&appid=7b75503741714576f196993bbff4f61b',
            type: 'GET',
            dataType:"jsonp",
            success: function(data) {
              displayParsedData(data);
            },
            error: function(jqXHR, textStatus, error) {
              alert( "error: " + jqXHR.responseText);
            }
          });
        }
      </script>    

    

     

  

      <div id="parsed_json" class="weatherdata">
		 
		  
		  </div>
			  <div class="col-sm-8" style="float:none;margin:0px auto">
					<img src="img/weatherimg.PNG" style="width:100%" />	
				</div>
	</div>
		
		
    	
	<?php  include 'fixed/footer.php';?>