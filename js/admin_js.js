/*
Admin Js

*/
     

// Add Articles
//
function article_valid()
{   
	var name = $.trim($('#name').val());
	var email = $.trim($('#email').val());
	var address = $.trim($('#address').val());
	//var text = $('#text').val(); alert(text);
	//var body = $.trim($('#body').val()); alert(body);
	//var state = $.trim($('#signup_state').val());
	var error = 0; 
	var is_focus = 0;  
	//var regex_integer = /^\d*[0-9\s](|.\d*[0-9\s])?$/;
	var regex_email = /[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}/;
   // var regex_aplha =  /^[0-9a-zA-Z]+$/;    
   // var regex_phone = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
          
	if(name == '')     
	{               
	    $('#name_error').html('Please Enter Name');
	    $('#name').focus().val('');
	    is_focus = 1;
	    error = 1;
	}
	else
	{
	    $('#name_error').html('');
	}    
	if(email == '')
	{
	    $('#email_error').html('Please Enter Email');
	    if(is_focus != 1){
	     	$('#email').focus();
	    		is_focus = 1;
	    }
	    error = 1;
	}
	else if(regex_email.test(email) == false)
	{
	    $('#email_error').html('Please Enter valid Email');
	    if(is_focus != 1){
	     	$('#email').focus();
	    		is_focus = 1;
	    }
	    error = 1;
	}
	else
	{
	    $('#email_error').html('');
	}  
	if(address == '')     
	{               
	    $('#address_error').html('Please Enter Address');
	    $('#address').focus().val('');
	    is_focus = 1;
	    error = 1;
	}
	else
	{
	    $('#address_error').html('');
	}  
	
	  
	// return
	if(error != 1)
	{
	   return true;
	}
	else
	{
		return false;
	}
	
}