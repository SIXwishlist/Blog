        <?php //$this->rendersideBar(); ?>
        <div class="col-md-4 col-sm-6"><h3>Most Popular </h3>
                    <div class="widget categories">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <?php foreach($recent_pro as $pro){ ?>
                                <div class="single_comments" style="margin-top:15px;">
                                    <a href="<?php echo Yii::app()->createurl('products/detail/'.str_replace(array(" ", "/" , "\\", "#", "$", "@", "%"),"-",substr($pro->product_title,0,60)).'/p/id/'.base64_encode($pro->id));?>">
                                        <?php if(isset($pro->image) && $pro->image != '' && is_file(Yii::getPathOfAlias('webroot') ."/uploads/products/".$pro->image)){ ?>
                                          <img src="<?php echo Yii::app()->request->baseurl.'/uploads/products/'.$pro->image ; ?>" alt ="<?php echo $pro->product_title; ?>" title ="<?php echo $pro->product_title; ?>"  alt="pro1" width="100" height="100" class="img-responsive">
                                        <?php }else{ ?>
                                          <img src="<?php echo Yii::app()->request->baseurl.'/images/img_not_found_200-200.jpg' ; ?>" alt ="<?php echo $pro->product_title; ?>" title ="<?php echo $pro->product_title; ?>"  alt="pro1" width="100" height="100" class="img-responsive">
                                        <?php } ?>
                                      <!--  <img src="<?php echo Yii::app()->request->baseurl;?>/resources/images/products/i4-200x200.jpg" class="img-responsive" alt="pro1" width="100" height="100"> -->
                                    </a>
                                 
                                    <p><a href="<?php echo Yii::app()->createurl('products/detail/'.str_replace(array(" ", "/" , "\\", "#", "$", "@", "%"),"-",substr($pro->product_title,0,60)).'/p/id/'.base64_encode($pro->id));?>"><?php echo substr($pro->product_title,0,100); if(strlen($pro->product_title) > 100) echo ' ...';?></a> </p>
                                    <div class="entry-meta small muted">
                                        <span style="margin-top:8px;"><?php echo $pro->promotion_end_date != '0000:00:00 00:00:00' ? date('M d, Y', strtotime($pro->promotion_end_date)) : ''; ?></span>
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                                
                                <?php } ?>
                              
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                    