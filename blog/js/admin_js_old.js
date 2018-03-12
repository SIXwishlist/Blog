/*
Admin Js

*/
     
function add_new_product()
{   
	var p_title = $.trim($('#product_title').val());
	var cat_id = $.trim($('#cat_id').val());
	var des = $.trim($('#description').val());
	var url = $.trim($('#product_url').val());
	var p_detail = $.trim($('#promotion_details').val());
	var p_date = $.trim($('#promotion_end_date').val());
	//var state = $.trim($('#signup_state').val());
	var error = 0; 
	var is_focus = 0;  
	//var regex_integer = /^\d*[0-9\s](|.\d*[0-9\s])?$/;
	//var regex_email = /[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}/;
   // var regex_aplha =  /^[0-9a-zA-Z]+$/;    
   // var regex_phone = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
	if(p_title == '')     
	{               
	    $('#product_title_error').html('Please Enter Product Title');
	    $('#product_title').focus().val('');
	    is_focus = 1;
	    error = 1;
	}
	else
	{
	    $('#product_title_error').html('');
	}    
	if(cat_id == '')
	{
	    $('#cat_id_error').html('Please Select Category');
	    if(is_focus != 1){
	     	$('#cat_id').focus();
	    		is_focus = 1;
	    }
	    error = 1;
	}
	else
	{
	    $('#cat_id_error').html('');
	}   
	if(des == '')  
	{
	    $('#description_error').html('Please Enter Description');
	    if(is_focus != 1){
	     	$('#description').focus();
	    		is_focus = 1;
	    }
	    $('#description').val('');
	    error = 1;
	}
	else
	{
	    $('#description_error').html('');
	}  
	 
	// Address
	if(url == '')
	{
	    $('#product_url_error').html('Please Enter Product Url');
	    if(is_focus != 1){
	     	$('#product_url').focus();
	    		is_focus = 1;
	    }
	    $('#product_url').val('');
	    error = 1;
	}
	else
	{
	    $('#product_url_error').html('');
	}  
	   
	// State
	if(p_detail == '')
	{
	    $('#promotion_details_error').html('Please Enter Promotion Detail');
	    if(is_focus != 1){
	     	$('#promotion_details').focus();
	    		is_focus = 1;
	    }
	    $('#promotion_details').val('');
	    error = 1;
	}
	else
	{
	    $('#promotion_details_error').html('');
	}
	// City
	if(p_date == '')
	{
	    $('#promotion_end_date_error').html('Please Enter Promotion End Date');
	    if(is_focus != 1){
	     	$('#promotion_end_date').focus();
	    		is_focus = 1;
	    }
	    $('#promotion_end_date').val('');
	    error = 1;
	}
	else
	{
	    $('#promotion_end_date_error').html('');
	} 
	// ZipCode
	
	if(error != 1)
	{
	
	 return true;
	}
	else
	{
		return false;
	}
	
}

// User profile Update
function update_profile()
{   
	var first_name = $.trim($('#first_name').val());
	var last_name = $.trim($('#last_name').val());
	var phone_no = $.trim($('#phone_no').val());
	var address = $.trim($('#address').val());
	var how_you_find_us = $.trim($('#how_you_find_us').val());
	var where_do_you_sell = $.trim($('#where_do_you_sell').val());
	var What_do_you_sell = $.trim($('#What_do_you_sell').val());
	//var state = $.trim($('#signup_state').val());
	var error = 0; 
	var is_focus = 0;  
	//var regex_integer = /^\d*[0-9\s](|.\d*[0-9\s])?$/;
	//var regex_email = /[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}/;
   // var regex_aplha =  /^[0-9a-zA-Z]+$/;    
   // var regex_phone = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
      
	if(first_name == '')     
	{               
	    $('#first_name_error').html('Please Enter First Name');
	    $('#first_name').focus().val('');
	    is_focus = 1;
	    error = 1;
	}
	else
	{
	    $('#first_name_error').html('');
	}    
	/*if(last_name == '')
	{
	    $('#last_name_error').html('Please Enter Last Name');
	    if(is_focus != 1){
	     	$('#last_name').focus();
	    		is_focus = 1;
	    }
	    error = 1;
	}
	else
	{
	    $('#last_name_error').html('');
	}    
	if(phone_no == '')  
	{
	    $('#phone_no_error').html('Please Enter Phone Number');
	    if(is_focus != 1){
	     	$('#phone_no').focus();
	    		is_focus = 1;
	    }
	    $('#phone_no').val('');
	    error = 1;
	}
	else
	{
	    $('#phone_no_error').html('');
	}  
	  
	// Address
	if(address == '')
	{
	    $('#address_error').html('Please Enter Product Url');
	    if(is_focus != 1){
	     	$('#address').focus();
	    		is_focus = 1;
	    }
	    $('#address').val('');
	    error = 1;
	}
	else
	{
	    $('#address_error').html('');
	}   
	   
	// State
	if(how_you_find_us == '')
	{
	    $('#how_you_find_us_error').html('Please Select any value');
	    if(is_focus != 1){
	     	$('#how_you_find_us').focus();
	    		is_focus = 1;
	    }
	    $('#how_you_find_us').val('');
	    error = 1;
	}
	else
	{
	    $('#how_you_find_us_error').html('');
	} 
	// City
	if(where_do_you_sell == '')
	{
	    $('#where_do_you_sell_error').html('Please Enter where do you sell?');
	    if(is_focus != 1){
	     	$('#where_do_you_sell').focus();
	    		is_focus = 1;
	    }
	    $('#where_do_you_sell').val('');
	    error = 1;
	}
	else
	{
	    $('#where_do_you_sell_error').html('');
	} */
	if(What_do_you_sell == '')
	{
	    $('#What_do_you_sell_error').html('Please Enter what do you sell?');
	    if(is_focus != 1){
	     	$('#What_do_you_sell').focus();
	    		is_focus = 1;
	    }
	    $('#What_do_you_sell').val('');
	    error = 1;
	}
	else
	{
	    $('#What_do_you_sell_error').html('');
	}
	// ZipCode
	
	if(error != 1)
	{
	
	 return true;
	}
	else
	{
		return false;
	}
	
}
// reviewer profile
// User profile Update
function update_profile_r()
{   
	var first_name = $.trim($('#first_name').val());
	var last_name = $.trim($('#last_name').val());
	//var state = $.trim($('#signup_state').val());
	var error = 0; 
	var is_focus = 0;  
	//var regex_integer = /^\d*[0-9\s](|.\d*[0-9\s])?$/;
	//var regex_email = /[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}/;
   // var regex_aplha =  /^[0-9a-zA-Z]+$/;    
   // var regex_phone = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
      
	if(first_name == '')     
	{               
	    $('#first_name_error').html('Please Enter First Name');
	    $('#first_name').focus().val('');
	    is_focus = 1;
	    error = 1;
	}
	else
	{
	    $('#first_name_error').html('');
	}    
	if(last_name == '')
	{
	    $('#last_name_error').html('Please Enter Last Name');
	    if(is_focus != 1){
	     	$('#last_name').focus();
	    		is_focus = 1;
	    }
	    error = 1;
	}
	else
	{
	    $('#last_name_error').html('');
	}    
	  
	
	   
	// ZipCode
	
	if(error != 1)
	{
	
	 return true;
	}
	else
	{
		return false;
	}
	
}
// Add Email templates
// User profile Update
function email_templates()
{   
	var title = $.trim($('#title').val());
	var subject = $.trim($('#subject').val());
	//var body = $.trim($('#body').val()); alert(body);
	//var state = $.trim($('#signup_state').val());
	var error = 0; 
	var is_focus = 0;  
	//var regex_integer = /^\d*[0-9\s](|.\d*[0-9\s])?$/;
	//var regex_email = /[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}/;
   // var regex_aplha =  /^[0-9a-zA-Z]+$/;    
   // var regex_phone = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
      
	if(title == '')     
	{               
	    $('#title_error').html('Please Enter Template Title');
	    $('#title').focus().val('');
	    is_focus = 1;
	    error = 1;
	}
	else
	{
	    $('#title_error').html('');
	}    
	if(subject == '')
	{
	    $('#subject_error').html('Please Enter Email Subject');
	    if(is_focus != 1){
	     	$('#subject').focus();
	    		is_focus = 1;
	    }
	    error = 1;
	}
	else
	{
	    $('#subject_error').html('');
	}
	
	  
	
	   
	// ZipCode
	
	if(error != 1)
	{
	
	 return true;
	}
	else
	{
		return false;
	}
	
}