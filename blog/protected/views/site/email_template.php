
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
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
                                <a href="#">Email Template</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            
                        </ul>
                        <div class="page-toolbar">
                            
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Email Templates
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
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue bordered">
                                <div class="portlet-title">
                                    <div class="caption ">
                                        <i class="icon-settings "></i>
                                        <span class="caption-subject"> List of all Templates</span>
                                    </div>
                                    <div class="actions">
                                        
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                               
                                            </div>
                                        </div>
                                    </div>
									
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="example1">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Template Title</th>
                                                <th>Email Subject</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										   <?php  
											 $counter = 1;
											 foreach($templates as $rec)
											 {
											?>    
												<tr class="<?php if($counter%2 == 0) echo 'odd gradeX';?>">
													<td><?php echo $counter; ?></td> 
													<td><?php echo $rec->title; ?></td>
													<td><?php echo $rec->subject; ?></td>
													<td class="center" >
														<a href="<?php echo Yii::app()->createurl('site/edit_template/id/'.base64_encode($rec->id));?>" title="Edit"> <i class="fa fa-pencil"></i></a> 
													  <!--  <a href="javascript:void(0);" onclick="product_del('<?php //echo Yii::app()->createurl('admin/site/delete/id/'.base64_encode($rec->id));?>');" title="Delete" data-toggle="modal" data-target="#myModal"> <i class="fa fa-times"></i></a> -->
													</td>
												</tr>
											<?php  $counter++;
											}
											?>    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
                <!-- ///////////////////////////////////// -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #343A41;color: white;">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Delete Page</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure, you want to delete this page ? </p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn default" data-dismiss="modal" aria-hidden="true">No</button>
                                <button data-dismiss="modal" class="btn blue" onclick="del_confirm();">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- ______________________________________ -->
            
       
 
 <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL PLUGINS -->  
<!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo Yii::app()->request->baseurl;?>/resources/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
       <script>
            var p_del_url = '';
             function product_del(del_url)
             {
                 p_del_url = del_url;
             }
             function del_confirm()
             {
                window.location = p_del_url;
             }
			 $(function () {
				$("#example2").DataTable();
				$('#example1').DataTable({
				  "paging": true,
				  "lengthChange": true,
				  "searching": true,
				  "ordering": false,
				  "info": true,
				  "autoWidth": true
				});
			  });
       </script>  
        