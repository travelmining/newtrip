$(document).ready(function(){ 

   var details = {};

   $("#dest").change(function(){
	cityName=$("#dest input[name='cityname']").val();
	cityPOI = 'Landmark';	
	details.cityName = cityName;
	details.cityPOI = cityPOI;
	displayPhoto(cityPOI,cityName);
   });
   
   

   $("ul li").click(function(){ 
        cityName = $('#cityName').text();
        cityPOI = $(this).text();
        //alert(cityName);
        //alert(cityPOI);
		displayPhoto(cityPOI,cityName); 
    });


   $(".alignment .btn").click(function() {
        cityName = $('#cityName').text();
        cityPOI = $(this).text();
        //alert(cityName);
        //alert(cityPOI);
		displayPhoto(cityPOI,cityName);  
    });
    
    function displayPhoto(cityPOI,cityName) { 
    	$.ajax({
		type: "Get",
		 url: "getPhoto.php",
		data: {'cityPOI' : cityPOI,
		       'cityName' : cityName},
	dataType: 'html',
	 success: function(msg){ 
	           $(".carousel-inner .item .container .carousel-caption").remove();
			   $(".carousel-inner").html(msg);  
			  },
	   error: function(){
			  alert("failure");
			  }
	  }); 
    }
    

	$("button#loginsubmit").click(function(){
	 var errorMsg = '';
	 var email = $( "form.contact input[name='Email']").val();
	 var re = /\S+@\S+\.\S+/;
		if ( email.length == 0 | !re.test(email) ) {
			   errorMsg = 'Please key in the email address!' ; 
			} 
		if ( $( "form.contact input[name='Password']").val().length < 6 ){
			  errorMsg = 'Password needs at least 6 characters!';
			}
		
		if (errorMsg.length > 0 ) {
		  $("form.contact p").html(errorMsg);
		  return false;
		} else		
			 {
				$.ajax({
				type: "POST",
				 url: "process.php",
				data: $('form.contact').serialize(),
			 success: function(msg){
			          alert(msg);
					  if (msg.length>0) {
						  $('.greeting').html('Welcome, ' + msg + '!');
						  $('.showlogin').hide();
						  //$("#myModal").modal('hide'); 
					  }   
					  },
			   error: function(){
					  $("form.contact p").html('Login failed');
					  return false;
					  }
			  });
		}
      });

	$("button#joinsubmit").click(function(){
		var errorMsg = '';
		var email = $( "form.account input[name='Email']").val();
		var re = /\S+@\S+\.\S+/;
		var message = 0;
	
		if ( $( "form.account input[name='Username']").val().length == 0 ) {
				 errorMsg = 'Please key in your user name!'; 	 
			}
		if ( email.length == 0 | !re.test(email)) {
				 errorMsg += 'Email address is not valid!'; 	 
			} 
		if ( $( "form.account input[name='Password']").val().length < 6 ){
				 errorMsg += 'Password needs at least 6 characters!';
			} 
		if ( $( "form.account input[name='ConfirmPassword']").val().length == 0 ){
				 errorMsg += 'Please key in your password!';
			} 
		if ( $( "form.account input[name='Password']").val() != $( "form.account input[name='ConfirmPassword']").val()){
				 errorMsg += 'Please double check your password!';
			}
		
		if (errorMsg.length > 0 ) {
		  $("form.account p").html(errorMsg);
		  return false;
		} else {
					$.ajax({
					type: "POST",
					 url: "signup.php",
					data: $('form.account').serialize(),
				 success: function(msg){
				          $("#myModalJoin").modal('hide');
						  $("#returnMsg").modal('show');
						  },
				   error: function(){
						  $("form.account p").html(msg);
						  return false;
						  }
				  });
			}
      });      
      
	$("button#uploadFile").click(function(){   
            var fd = new FormData(document.getElementById("image_upload_form"));
            fd.append("label", "WEBUPLOAD");
            $.ajax({
              url: "upload.php",
              type: "POST",
              data: fd,
              enctype: 'multipart/form-data',
              processData: false,  // tell jQuery not to process the data
              contentType: false   // tell jQuery not to set contentType  
            }).done(function(msg) {
                $("#uploadMsg").html(msg);
            });
            return false;
	
	  });   
	  
	$("button#resetPW").click(function(){  
	        //check basic email format 
            $.ajax({
              url: "resetPassword.php",
              type: "POST",
              data: $('form.resetPasswordForm').serialize()
            }).done(function(msg) {
                $("#resetdMsg").html(msg);
            });
            return false;
	
	  });  
              

}); 


		
		
	
	
	
