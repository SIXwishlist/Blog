<div class="container"><!-- container -->
        
          <div class="row"><!-- row -->
            
                <div id="k-top-search" class="col-lg-12 clearfix" style="display:none;"><!-- top search -->
                
                    <form action="#" id="top-searchform" method="get" role="search">
                        <div class="input-group">
                            <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                        </div>
                    </form>
                    
                    <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->
                
                </div><!-- top search end -->
            
              <div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                
                 
                    
                </div><!-- breadcrumbs end -->               
                
            </div><!-- row end -->
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                  
                    <div class="col-padded"><!-- inner custom column -->
                    
                      <div class="row gutter"><!-- row -->
                        
                          <div class="col-lg-12 col-md-12" style="color:black;font-weight: 400;">
                                
                                <div class="course-title-meta clearfix"><!-- course meta -->
                                    <h1 class="page-title"><?php echo isset($data->TestName) ? $data->TestName : ''; ?></h1>
                                    <dl class="dl-horizontal course-meta">
                                        <dt>Department</dt><dd><?php echo isset($data->posts[0]->depposts[0]->dep->DepName) ? $data->posts[0]->depposts[0]->dep->DepName : ''; ?></dd>
                                        <dt>Total Positions</dt>
                                        <table class="table table-striped table-courses">
                                          <thead>
                                              <tr>
                                                  <th>#</th>
                                                  <th>Post Title</th>
                                                  <th>Post Grade</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            <?php $counter = 1;
                                              foreach($data->posts as $rec_post){ ?>
                                              <tr>
                                                <td><?php echo $counter; ?></td>
                                                <td><?php echo isset($rec_post->PostName) ? $rec_post->PostName : ''; ?></td>
                                                <td><?php echo isset($rec_post->PostGrade) ? $rec_post->PostGrade : ''; ?></td>
                                              </tr>
                                            <?php $counter++; } ?>  
                                          </tbody>
                                        </table>     
                                             
                                            
                                    </dl>
                                </div><!-- course meta end -->
                                
                                <div class="news-body clearfix"><!-- course content -->
                                
                                    <p>
                                    <?php echo isset($data->TestDesc) ? str_replace(array("<br />"),"",$data->TestDesc) : ''; ?>
                                    </p>
                                    
                                    <table class="table table-striped table-courses">
                                      <tbody>
                                          <tr>
                                            <th>Application Start Date</td>
                                            <td><?php echo $data->ApplicationStartDate != '0000-00-00' ? date('d M, Y', strtotime($data->ApplicationStartDate)) : ''; ?></td>
                                          </tr>
                                          <tr>
                                            <th>Application End Date</td>
                                            <td><?php echo $data->ApplicationEndDate != '0000-00-00' ? date('d M, Y', strtotime($data->ApplicationEndDate)) : ''; ?></td>
                                          </tr>
                                          <tr>
                                            <th>Test Date </td>
                                            <td><?php if($data->TestDate  == '0000-00-00 00:00:00' || $data->TestDate == '') echo 'Date will be annouce soon.'; else echo date('d M, Y', strtotime($data->TestDate)); ?></td>
                                          </tr>
                                        
                                      </tbody>
                                    </table>    
                                    <hr />
                                    <?php if($data->result_status){ ?>
                                       <h5> Result will be announced soon</h5>
                                    <?php } ?>   
                                   
                                    <h6>Downloads:</h6>
                                    
                                    <ul class="list-unstyled list-downloads"><!-- downloads list -->
                                      <?php if(isset($data->test_ad) && $data->test_ad != '' && is_file(Yii::getPathOfAlias('webroot') ."/uploads/test_ads/".$data->test_ad)){ ?>
                                       <li>
                                          <i class="fa fa-cloud-download"></i>
                                          <a href="#" title="Course Materials" class="download-link">
                                             <span class="dwnld-title"><a style="margin-left:30px;" class="btn btn-success" href="<?php echo Yii::app()->request->baseurl ."/uploads/test_ads/".$data->test_ad; ?>" download>Advertisement</a></span>
                                          </a>
                                        </li>
                                       <?php }?> 
                                      <?php if(strtotime(date('Y-m-d')) >= strtotime($data->ApplicationStartDate) && $data->result_status == 0) { ?>
                                       <?php if(isset($data->test_ad) && $data->application_file != '' && is_file(Yii::getPathOfAlias('webroot') ."/resources/tcpdf/examples/app_forms/".$data->application_file.'.pdf')){ ?>
                                       <li>
                                          <i class="fa fa-cloud-download"></i>
                                          <a href="#" title="Course Materials" class="download-link">
                                             <span class="dwnld-title"><a style="margin-left:30px;" class="btn btn-success" href="<?php echo Yii::app()->request->baseurl ."/resources/tcpdf/examples/app_forms/".$data->application_file.'.pdf'; ?>" download>Application Form</a></span>
                                           </a>
                                        </li>
                                       <?php }?> 
                                      <?php } ?>
                                    </ul><!-- downloads list end -->
                                   
                                </div><!-- course content end -->
                            
                            </div>
                        
                        </div><!-- row end -->               
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
                <div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->
                  
                   
                      <?php $this->renderPartial('_sidebar', array('tests' => $tests)); ?><!-- inner custom column end -->
                    
                </div><!-- sidebar wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->