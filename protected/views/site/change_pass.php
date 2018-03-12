<!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
   <!-- END PAGE LEVEL PLUGINS -->


<!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler"> </div>
                        <div class="toggler-close"> </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-sm">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-sm">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-sm">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Menu Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-sm">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-sm">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style </span>
                                <select class="sidebar-style-option form-control input-sm">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="light">Light</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-sm">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Change Password</span>
                            </li>
                        </ul>
                        <?php /*?><div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div><?php */?>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Change Password 
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                     <?php if(Yii::app()->session['success']) { ?>
                    <div class="alert alert-success">
                        <button class="close" data-close="alert"></button> <?php echo Yii::app()->session['success']; ?> 
                    </div>
                    <?php Yii::app()->session['success'] = ''; } ?>
                     <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet box blue portlet-fit portlet-form bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings "></i>
                                        <span class="caption-subject "> Change Password</span>
                                    </div>
                                    <div class="actions">
                                        <?php /*?><div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                        </div><?php */?>
                                    </div>
                                </div>
                                
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form  id="form_sample_3" class="form-horizontal" method="post" onsubmit="return validatePassword();" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. 
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Old Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="password" name="old_pass" required="required" data-required="1" class="form-control" /> 
                                                    <?php if(Yii::app()->session['old_pass_error']){ ?>
                                                       <span class="required"> <?php echo Yii::app()->session['old_pass_error']; Yii::app()->session['old_pass_error'] = ''; ?> </span>
                                                    <?php } ?> 
                                                </div>
                                                    
                                            </div>
                                            <div class="form-group"> 
                                                <label class="control-label col-md-3">New Password
                                                <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="password" name="new_pass" required="required"  class="form-control" /> 
                                               </div>
                                            </div>
                                            <div class="form-group"> 
                                                <label class="control-label col-md-3">Confirm Password
                                                <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4"> 
                                                    <input type="password" name="con_pass" required="required"  class="form-control" /> 
                                                    <?php if(Yii::app()->session['con_pass_error']){ ?>
                                                       <span class="required"> <?php echo Yii::app()->session['con_pass_error']; Yii::app()->session['con_pass_error'] = ''; ?> </span>
                                                    <?php } ?>   
                                               </div>
                                            </div>  
                                         
                                            <hr/>
                                           
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                     <input type="hidden" name="add_user" value="1" />
                                                    <button type="submit" class="btn green"><?php if(Yii::app()->controller->action->id != 'edit_doc')echo 'Submit'; else echo 'Update'; ?></button>
                                                    <button type="button" class="btn default" onclick="location.href='<?php echo Yii::app()->createurl('user/semi_admin');?>';">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                                <!-- END VALIDATION STATES-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            
   				
 <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="./<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->	
<!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/pages/scripts/form-validation.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->			
 <script>
 
 var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");
 var error = 0, email_err = 0, username_err = 0;
function validatePassword()
{ 
	var username = $('#username').val();
	var email = $('#email').val();
	
	// Check Email
	if(email != '')
	{
		$.ajax({
			url:"<?php echo Yii::app()->createurl('user/check_email');?>",
			type:'POST',
			data: 'email='+email,
			success: function(result)
			{
				if(result)
				{
					var data = $.parseJSON(result);
					if(data.status == 'fail')
					{
						$('#email_error').html('Email has already exists');
						email_err = 1;
					}
					else
					{
						$('#email_error').html('');
						email_err = 0;
					}
				}
			},
		});
	}
	// Check username
	if(username != '')
	{
		$.ajax({
			url:"<?php echo Yii::app()->createurl('user/check_username');?>",
			type:'POST',
			data: 'username='+username,
			success: function(result)
			{
				if(result)
				{
					var data = $.parseJSON(result);
					if(data.status == 'fail')
					{
						$('#username_error').html('Username has already exists');
						username_err = 1;
					}
					else
					{
						$('#username_error').html('');
						username_err = 0;
					}
				}
			},
		});
	}
	else
	{
		
	}
	if(password.value != confirm_password.value) 
	{  
		//confirm_password.setCustomValidity("Passwords Don't Match");
		 $('#con_pass').html('Confirm Password not match with password');
		 //$('#con_pass').parent().closest(".form-group").addClass("has-error");
		 error = 1;
	} 
	else 
	{
		$('#con_pass').html('');
		error = 0;
	}
	if(username_err == 1)
		$('#username').focus();
	if(email_err == 1)     
	    $('#email').focus();
	if(error == 1 || username_err == 1 || email_err == 1)
	{
	    return false;
	}
	else
	    return true;	
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
 
 </script>   
 <script>
 function gallery_size()
 {
	$('#gallery').html('');
	$('#gallery').css('width','200px').css('margin-bottom','10px'); 
 }
</script>        