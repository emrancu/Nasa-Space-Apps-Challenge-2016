	
	<?php  include 'fixed/header.php';?>
	
<div class="col-sm-12 weather">
	
	
	
  

      <div id="parsed_json" class="dangerious">
	<h2> Dangerous Area of Your Location</h2>	 
	<?php  
	include 'config/dbconfig.php';
	$r=mysqli_fetch_assoc(mysqli_query($con,"select * from userlocation"));

	echo $addr =$r['address'];
	$explod = explode(",",$addr);

	  $string=$explod[1];
	$d = str_replace(' ', '', $string);

$qq=mysqli_fetch_assoc(mysqli_query($con,"select * from infoAddress INNER JOIN dangerplace ON infoAddress.infiaID=dangerplace.addID where infoAddress.infAddName LIKE '%$d%'"));


echo $qq['dp_description'];

	?>	  
		  
	</div>
	</div>
		
		
    	
	<?php  include 'fixed/footer.php';?>