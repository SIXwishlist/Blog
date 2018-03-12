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
                                <span>Add Program</span>
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
                    <h3 class="page-title"> Theme 
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
                           <div class="portlet box blue portlet-fit portlet-form bordered">
                              <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings "></i>
                                        <span class="caption-subject"> THEME COLOR</span>
                                    </div>
                                </div>
                                <div class="portlet-body" >
                            <!-- BEGIN VALIDATION STATES-->
                      	 			<style>
									.theme_color {background:#2b3643;overflow:auto;padding:10px; }
									.theme_color > div{border:1px solid #707070;width:40px;height:40px;float:left;margin-left:5px;}
									.theme_color > div:hover{border: 2px solid #d64635;}
									</style>
                                    <form   method="post"  enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <div class="form-body">
                                                <div class="alert alert-danger display-hide">
                                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                <div class="alert alert-success display-hide">
                                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Theme Color :
                                                    </label> 
  													<div class="col-md-4" style="margin-bottom: 15px;" >
                                                      <div class="theme_color">
                                                          <div onClick="theme_select('default');" style="background: #333438;<?php if(isset($setting->theme_color) && $setting->theme_color == 'default') echo 'border:2px solid #d64635';?>" class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default" ></div>
                                                          <div onClick="theme_select('darkblue');" style="background: #2b3643;<?php if(isset($setting->theme_color) && $setting->theme_color == 'darkblue') echo 'border:2px solid #d64635';?>" class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"></div>
                                                          <div onClick="theme_select('blue');" style="background: #2D5F8B;<?php if(isset($setting->theme_color) && $setting->theme_color == 'blue') echo 'border:2px solid #d64635';?>" class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"></div>
                                                          <div  onClick="theme_select('grey');" style="background: #697380;<?php if(isset($setting->theme_color) && $setting->theme_color == 'grey') echo 'border:2px solid #d64635';?>" class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"></div>
                                                          <div  onClick="theme_select('light');" style="background: #F9FAFD;<?php if(isset($setting->theme_color) && $setting->theme_color == 'light') echo 'border:2px solid #d64635';?>" class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"></div>
                                                          <div onClick="theme_select('light2');" style="background: #F1F1F1;<?php if(isset($setting->theme_color) && $setting->theme_color == 'light2') echo 'border:2px solid #d64635';?>" class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"></div> 
                                                       </div>    
                                                    </div>  
                                                    <input type="hidden" name="theme_color" placeholder="Program Title" id="color_field" data-required="1" class="form-control" value="<?php echo isset($setting->theme_color) ? $setting->theme_color : '';?>"/> 
                                                     
                                                       
                                                </div>
                                                <div class="form-group" style="clear:both;margin-top:10px;"> 
                                                    <label class="control-label col-md-3">Footer Content </label>
                                                       <div class="col-md-4" style="margin-bottom: 15px;">
                                                        	<input type="text" name="fotter_content" class="form-control" value="<?php echo isset($setting->footer_content) ? $setting->footer_content : '';?>" />
                                                        </div>
                                                        <div id="editor1_error"> </div>
                                                </div>
                                                <div class="form-group last" style="clear:both;margin-top:10px;">
                                                    <label class="control-label col-md-3">Change Logo :</label>
                                                    <div class="col-md-9">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <?php if(isset($setting->site_logo) && $setting->site_logo != '' && is_file(Yii::getPathOfAlias('webroot') ."/uploads/site/".$setting->site_logo)){ ?>
                                                                  <img src="<?php echo Yii::app()->request->baseurl.'/uploads/site/'.$setting->site_logo ; ?>" >
                                                                  <input type="hidden" name="prev_image" value="<?php echo isset($setting->site_logo) ? $setting->site_logo : '' ; ?>">  
                                                                <?php }else{ ?>
                                                                   <img src="<?php echo Yii::app()->request->baseurl;?>/images/no_image.png" >
                                                                <?php } ?>
                                                                
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"><?php if(Yii::app()->controller->action->id == 'edit') echo 'Change'; ?> Start image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="hidden" value="" name="..."><input type="file" name="image"> </span>
                                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="form-group" style="clear:both;margin-top:20px;"> 
                                                    <label class="control-label col-md-3">Show Contact Form  </label>
                                                       <div class="col-md-4" style="margin-bottom: 15px;">
                                                            <select name="show_contact_form" class="form-control">
                                                                <option value="1" <?php if(isset($setting->Contact_form_status) && $setting->Contact_form_status == 1) echo 'selected';?>>Enable</option>
                                                                <option value="1" <?php if(isset($setting->Contact_form_status) && $setting->Contact_form_status == 1) echo 'selected';?>>Disable</option>
                                                            </select>    
                                                        </div>
                                                        <div id="editor1_error"> </div>
                                                </div>
                                                <div class="form-group" style="clear:both;margin-top:10px;"> 
                                                    <label class="control-label col-md-3">Content for right corner of PDF printout </label>
                                                       <div class="col-md-4" style="margin-bottom: 15px;">
                                                        	<textarea name="content_for_print_pdf" rows="5" class="form-control" ><?php echo isset($setting->content_for_print_pdf) ? $setting->content_for_print_pdf : '';?></textarea>
                                                        </div>
                                                        <div id="editor1_error"> </div>
                                                </div>
                                                <?php /*?><a href="javascript:;" class=" btn red"> 
                                                   <i class="fa fa-plus"></i> Add Exercise
                                                </a>
                                                <a href="javascript:;" class="btn yellow"> 
                                                   <i class="fa fa-plus"></i> Add Aticle
                                                </a><?php */?>
                                            </div>
                                        </div> 
                                        
                                        
                                        <div class="form-actions" style="clear:both;margin-top:10px;">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="hidden" name="theme" value="1" />
                                                    <button type="submit" class="btn green">Update</button>
                                                    <button type="button" class="btn default" onclick="location.href='<?php echo Yii::app()->createurl('site/index'); ?>'">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                    			</div>
                    		</div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
       <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->	     
   				 <script>
				  function theme_select(val)
				  {
					  $('#color_field').val(val)
					  $('.theme_color > div').css('border','1px solid #707070');
					  $('.color-'+val).css('border','2px solid #d64635');
					 
				  }
				 </script>
     