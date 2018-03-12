<link href="<?php echo Yii::app()->request->baseurl;?>/resources/admin/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
 <style>
 .table tr td img { width: 150px; height: 100px;}

 </style>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Articles</h2>   
                        <h5> </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <?php if(Yii::app()->session['success'] != ''){ ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo Yii::app()->session['success']; ?> 
                    </div>
                    <?php Yii::app()->session['success'] = ''; } ?>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th ># </th>
                                            <th >Name</th>
                                            <th >Email</th>
                                            <th >Address</th>
                                            <th> Text </th>
                                            <th >Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                   
                                     $counter = 1;
                                     //$date = '01-08-2015';
                                     foreach($articles as $rec)
                                     {
                                    ?>    
                                        <tr class="<?php if($counter%2 == 0) echo 'odd gradeX';?>">
                                            <td><?php echo $counter; ?></td>  
                                            <td><?php echo isset($rec->name) ? $rec->name : ''; ?></td>
                                            <td><?php echo isset($rec->email) ? $rec->email : ''; ?></td>
                                           	<td><?php echo isset($rec->address) ? $rec->address : ''; ?></td>
                                            <td><?php echo isset($rec->text) ? substr(strip_tags($rec->text), 0, 150) : ''; if(isset($rec->text) && strlen($rec->text) > 150) echo '...';?></td>  
                                            <td class="center" >
                                                <a href="<?php echo Yii::app()->createurl('admin/articles/edit/id/'.base64_encode($rec->article_id));?>" title="Edit"> <i class="fa fa-pencil"></i></a> | 
                                                <a href="javascript:void(0);" onclick="product_del('<?php echo Yii::app()->createurl('admin/articles/delete/id/'.base64_encode($rec->article_id));?>');" title="Delete" data-toggle="modal" data-target="#myModal"> <i class="fa fa-times"></i></a>
                                            </td>
                                         </tr>
                                     <?php  $counter++;
                                    }
                                    ?>    
                                          
                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <!-- -------------------------------------------- -->
            <!-- Pop up model  -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background: #7A7A7A;color: #131212;">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete</h4>
                        </div>
                        <div class="modal-body">
                            Are you sure, you want to delete this Article ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <button type="button" class="btn btn-primary" onclick="del_confirm();" data-dismiss="modal">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
                         
                <!-- /. ROW  -->
         
                <!-- /. ROW  -->
    
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
	
	</script>             
    