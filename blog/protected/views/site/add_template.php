<!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
       
   
<!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Edit Template</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <?php /*?><div class="btn-group pull-right">
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
                            </div><?php */?>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Email Template
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    
                     <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet box blue portlet-fit portlet-form bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings "></i>
                                        <span class="caption-subject">Edit Template</span>
                                    </div>
                                    <?php /*?><div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                        </div>
                                    </div><?php */?>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form  id="form_sample_3" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Template Title
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="title" required="required" data-required="1" class="form-control" value="<?php echo isset($template->title) ? $template->title : ''; ?>"/> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Email Subject</label> 
                                                <div class="col-md-4">
                                                	<input class="form-control" name="subject" id="subject" value="<?php echo isset($template->subject) ? $template->subject : ''; ?>"/>
                                               	    <sapn class="help-block" id="subject_error"></sapn>
                                                </div>
                                            </div>
                                            
                                            
                                           <div class="form-group"> 
                                                <label class="control-label col-md-3">Email Body
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-9">
                                                    <textarea class="ckeditor form-control" rows="20" name="body" required="required" data-error-container="#editor2_error"><?php echo isset($template->body) ? $template->body : ''; ?></textarea>
                                                    <div id="editor1_error"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-9">
                                                    <span style="color:red;"><b>Note:</b></span><br/>
                                                    <span>Use these variables in email body for dynamic content (system will get related values while sending emails).</span><br/>
                                                    <span> <b>%name% :</b> First name and last name of user <br/>
                                                        <b>%email% :</b> Email of User<br/>
                                                        <b>%phone_no% :</b> Phone number of user<br/>
                                                        <b>%site_url% :</b> Phone number of user<br/>
                                                        <b>%Login_credentails% :</b> Login username / password of user ( only for resend credential email)<br/>
                                                        
                                                     </span   
                                                 ></div>       
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="hidden" name="template" value="1" />
                                                    <button type="submit" class="btn green">Update</button>
                                                    <button type="button" class="btn default" onclick="location.href='<?php echo Yii::app()->createurl('site/EmailTemplates'); ?>'">Cancel</button>
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->		
     