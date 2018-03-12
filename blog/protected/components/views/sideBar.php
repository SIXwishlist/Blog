        <?php //$this->rendersideBar(); ?>
        <div class="col-md-3 col-sm-6"><h3>Latest Offers</h3>
                    <div class="widget categories">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <?php foreach($recent_pro as $pro){ ?>
                                <div class="single_comments" style="margin-top:15px;">
                                    <a href="<?php echo Yii::app()->createurl('products/detail/'.str_replace(array(" ", "/" , "\\", "#", "$", "@", "%"),"-",substr($pro->product_title,0,60)).'/p/id/'.base64_encode($pro->id));?>">
                                        <?php if(isset($pro->image) && $pro->image != '' && is_file(Yii::getPathOfAlias('webroot') ."/uploads/products/".$pro->image)){ ?>
                                          <img src="<?php echo Yii::app()->request->baseurl.'/uploads/products/'.$pro->image ; ?>" alt ="<?php echo $pro->product_title; ?>" title ="<?php echo $pro->product_title; ?>" class="img-responsive" alt="pro1" width="100" height="100">
                                        <?php }else{ ?>
                                          <img src="<?php echo Yii::app()->request->baseurl.'/images/img_not_found_200-200.jpg' ; ?>" alt ="<?php echo $pro->product_title; ?>" title ="<?php echo $pro->product_title; ?>" class="img-responsive" alt="pro1" width="100" height="100">
                                        <?php } ?>
                                      <!--  <img src="<?php echo Yii::app()->request->baseurl;?>/resources/images/products/i4-200x200.jpg" class="img-responsive" alt="pro1" width="100" height="100"> -->
                                    </a>
                                 
                                    <p><a href="<?php echo Yii::app()->createurl('products/detail/'.str_replace(array(" ", "/" , "\\", "#", "$", "@", "%"),"-",substr($pro->product_title,0,60)).'/p/id/'.base64_encode($pro->id));?>"><?php echo substr($pro->product_title,0,100); if(strlen($pro->product_title) > 100) echo ' ...';?></a> </p>
                                    <!--<div class="entry-meta small muted">
                                       <span style="margin-top:8px;"><?php echo $pro->promotion_end_date != '0000:00:00 00:00:00' ? date('M d, Y', strtotime($pro->promotion_end_date)) : ''; ?></span>
                                    </div>-->
                                </div>
                                <div style="clear:both;"></div>
                                
                                <?php } ?>
                              <!--  <div class="single_comments">
                                   <a href="#"> <img src="<?php echo Yii::app()->request->baseurl;?>/resources/images/products/i4-200x200.jpg" class="img-responsive" alt="pro1" width="100" height="100"></a>
                           
                                    <p><a href="#">Sports Armband for iPhone 6 Plus (5.5 inch Screen Size) with Key Holder – Best Anti-slip, Sweat</a>  </p>
                                    <div class="entry-meta small muted">
                                        <span>April 15, 2015</span> 
                                    </div>
                                </div>
                                <div class="single_comments">
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseurl;?>/resources/images/products/i4-200x200.jpg" class="img-responsive" alt="pro1" width="100" height="100"></a>
                           
                                    <p><a href="#">Sports Armband for iPhone 6 Plus (5.5 inch Screen Size) with Key Holder – Best Anti-slip, Sweat</a>  </p>
                                    <div class="entry-meta small muted">
                                        <span>April 15, 2015</span> 
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                    <div class="widget categories" style="margin-top:35px;">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                <?php foreach($category as $cat){
                                    if( count($cat->products) > 0){
                                 ?>
                                    <li><a href="<?php echo Yii::app()->createurl('products?category='.base64_encode($cat->id).'&'.str_replace(" ","-",strtolower($cat->cat_name)).'#feature'); ?>"><?php echo $cat->cat_name; ?> <span class="badge"><?php echo $cat->products; ?></span></a></li>
                                <?php } 
                                }
                                ?>
                                <!--    <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                                    <li><a href="#">Technology <span class="badge">25</span></a></li> -->
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
                    </div>