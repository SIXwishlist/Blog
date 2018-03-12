<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog | Admin</title>

	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo Yii::app()->request->baseurl;?>/resources/admin/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo Yii::app()->request->baseurl;?>/resources/admin/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo Yii::app()->request->baseurl;?>/resources/admin/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->
   <!-- JQUERY SCRIPTS -->
   <?php if(Yii::app()->controller->action->id == 'view'){?>
   	 <link href="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	 <style>
     	.table tr td img { width: 150px; height: 100px;}
     </style>
    <?php }?> 
    <script src="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/jquery-1.10.2.js"></script>
     <style>
			   .setup-panel {border: none;}
			  .setup-panel li { border: 1px solid #ddd;}
			   </style>
</head>
<body>
    <div  id="wrapper" >
    <?php  
    if(Yii::app()->session['admin_login'] == '' && Yii::app()->controller->action->id != 'login')
        {
            $this->redirect(array('site/login'));
        }
        ?>
       <?php if(Yii::app()->controller->action->id != 'login'){ ?>
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <!-- <img src="<?php //echo Yii::app()->request->baseurl;?>/resources/images/logo.png"  alt="WeReviews" style="background:#4D4D4D;"> -->
               
            </div>
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> Admin &nbsp;  | &nbsp; <a href="<?php echo Yii::app()->createurl('admin/site/logout');?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
	                <li>
                        <a <?php if(Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'index') { ?> class="active-menu" <?php } ?>  href="<?php echo Yii::app()->createurl('admin/site/index');?>"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li <?php if(Yii::app()->controller->id == 'articles') { ?> class="active" <?php } ?>>
                        <a <?php if(Yii::app()->controller->id == 'articles') { ?> class="active-menu" <?php } ?> href="#"><i class="fa fa-file fa-3x"></i> Manage Articles<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo yii::app()->createurl('admin/articles/view');?>">View Article List</a>
                            </li>
                            <li>
                                <a href="<?php echo yii::app()->createurl('admin/articles/add');?>">Add new Article</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li >
                        <a <?php if(Yii::app()->controller->action->id == 'setting') { ?> class="active-menu" <?php } ?>  href="<?php echo 'javascript:void(0);';//Yii::app()->createurl('admin/site/setting');?>"><i class="fa fa-cogs fa-3x"></i>  Settings</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav> 
        <?php } ?>
        <!-- /. NAV SIDE  -->
    <div id="page-wrapper" <?php if(Yii::app()->controller->action->id == 'login'){ ?> style="background-color:#202020;" <?php } ?>>
	<?php echo $content; ?>

	</div>
    
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/custom.js"></script>
    <!-- Admin Js -->
    <script src="<?php echo Yii::app()->request->baseurl;?>/js/admin_js.js"></script>
    <?php if(Yii::app()->controller->action->id == 'view'){ ?> 
      <script src="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/dataTables/jquery.dataTables.js"></script>
	  <script src="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/dataTables/dataTables.bootstrap.js"></script>
      <script>
			$('#dataTables-example').dataTable();
			
      </script> 
    <?php } ?>
      
   
</body>
</html>
