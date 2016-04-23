function getnotification(){
	
  // setTimeout( function(){ 
    var queryString = 'address='+$("#location2").val();
    jQuery.ajax({
        url: "action/notify.php",
        data:queryString,
        type: "POST",
        success:function(data){
            $('#adress').empty();
            $("#adress").append(data);
        },
        error:function (){}
    });
//}  , 1000 );

}
setTimeout("getnotification()", 5000); 
setTimeout("getnotification()", 10000); 
		

		
	
		