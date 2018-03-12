
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard</h2>   
                        <h5>Welcome Admin</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                
             <div class="col-md-4 col-sm-6 col-xs-6">           
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                        <i class="fa fa-file-text-o"></i>
                    </span>
                    <div class="text-box" >
                        <p class="main-text"><?php echo isset($count) ? $count : 0 ;?> Articles</p>
                        <p class="text-muted">Added by Admin</p>
                    </div>
                 </div>
             </div>
            </div>
                 <!-- /. ROW  -->
                <div class="row" >
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                          Latest Articles
                        </div>
                        <div class="panel-body">
                           <span class="pull-right" style="margin-bottom:5px;"><button class="btn btn-primary" onclick="location.href='<?php echo Yii::app()->createurl('admin/articles/view');?>'">View All </button></span>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th ># </th>
                                            <th >Name</th>
                                            <th >Email</th>
                                            <th >Address</th>
                                            <th> Text </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 1;
                                        if(!empty($articles))
                                        {
                                           foreach($articles as $rec)
                                            {
										?>     
                                                <tr class="<?php if($counter%2 == 0) echo 'odd gradeX';?>">
                                                    <td><?php echo $counter; ?></td>  
                                                    <td><?php echo isset($rec->name) ? $rec->name : ''; ?></td>
                                                    <td><?php echo isset($rec->email) ? $rec->email : ''; ?></td>
                                                    <td><?php echo isset($rec->address) ? $rec->address : ''; ?></td>
                                                    <td><?php echo isset($rec->text) ? substr(strip_tags($rec->text), 0, 150) : ''; if(isset($rec->text) && strlen($rec->text) > 150) echo '...';?></td>  
                                                </tr>
                                        <?php  $counter++;
                                            }
                                        }
                                        ?>            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                 <!-- /. ROW  -->
                