/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

$('document').ready(function()
{ 
     /* validation */
	 $("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            password:{
                      required: "Введите пароль"
                     },
            user_email: "Введите Email",
       },
	   submitHandler: submitForm	
       }); 
	   /* /validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#login-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'singin.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						//$("#btn-login").html('<img src="btn-ajax-loader.gif" width="1%"/>');
                        <!--Preloader-->
                            $("#form-signin").load(function() {
                                setTimeout(function () {
                                    $(".loader").delay(10).fadeOut().remove();
                                }, 100);
                            });
                        /*$(window).load(function() {
                         $(".loader").delay(1000).fadeOut().remove();
                         });*/
						setTimeout(' window.location.href = "dashboard/index.html"; ',4000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
									});
					}
			  }
			});
				return false;
		}
	   /* //login submit */
});