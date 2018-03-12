<style>
    .contact-error{border:none;color:rgb(255, 0, 0); display:none;}
    </style>
    
    
    <section id="feature" >
        <div class="container">
            <div class="left wow fadeInDown">
                <h2 style="margin-top:-30px;"><?php if(isset($category) && $category != '') echo str_replace("-"," ",strtoupper($category)).' Products'; else echo 'FEATURED PRODUCTS FOR OUR REVIEWERS'; ?> </h2>
                <!--<p class="lead">FEATURED PRODUCTS FOR OUR REVIEWERS </p>--><br/>
            </div>

            <div class="row">
                <div class="features">
                    <?php 
                    foreach($products as $pro)
                    {
                    ?>	
	                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="300ms" data-wow-delay="300ms">
	                        <div class="feature-wrap">
	                            <div class="products" href="#">
		                            <div class="item-details" onclick="location.href='<?php echo Yii::app()->createurl('products/detail/'.str_replace(array(" ", "/" , "\\", "#", "$", "@", "%"),"-",substr($pro->product_title,0,60)).'/p/id/'.base64_encode($pro->id));?>'">
			                            <div class="thumbnail" style="border:0px;">
			                            	<?php if(isset($pro->image) && $pro->image != '' && is_file(Yii::getPathOfAlias('webroot') ."/uploads/products/thumb/".$pro->image)){ ?>
                                              <img src="<?php echo Yii::app()->request->baseurl.'/uploads/products/thumb/'.$pro->image ; ?>" alt ="<?php echo $pro->product_title; ?>" title ="<?php echo $pro->product_title; ?>" class="img-responsive" alt="pro1" width="200" height="200">
                                            <?php }else{ ?>
                                              <img src="<?php echo Yii::app()->request->baseurl.'/images/img_not_found_200-200.jpg' ; ?>" alt ="<?php echo $pro->product_title; ?>" title ="<?php echo $pro->product_title; ?>" class="img-responsive" alt="pro1" width="200" height="200">
                                            <?php } ?>
			                            	<!--<img src="<?php echo Yii::app()->request->baseurl;?>/resources/images/products/a-200x200.jpg" class="img-responsive" alt="pro1" width="200" height="200"> -->
			                            </div>
			                            <div class="small"><?php echo $pro->created_date != '0000:00:00 00:00:00' ? date('M d, Y', strtotime($pro->created_date)) : ''; ?></div>
			                            <div class="item-text">
			                            	<h2><?php echo substr($pro->product_title,0,60); if(strlen($pro->product_title) > 60) echo ' ...';?></h2>
			                            </div>
			                            <a class="small">
			                            	<img src="<?php echo Yii::app()->request->baseurl;?>/resources/images/products/catgory.png"> <?php echo isset($pro->cat->cat_name) ? $pro->cat->cat_name : ''; ?>
			                            </a>
		                            </div>
	                            </div>
	                        </div>
	                    </div><!--/.col-md-4-->
	                <?php } ?>    
                  
                    <br/><br/><br/>
                    <style >
                    .pagination .first, .pagination .last { display: none;}
                    </style>
                    <?php /*?><div style="width:100%; text-align: center; padding:50px;">  
                        <nav>
		                    <?php
						          
					            $this->widget('CLinkPager', array(
					         			'currentPage'=>$pages->getCurrentPage(),
										'itemCount'=>$item_count,
										'pageSize'=>$page_size,
										//'maxButtonCount'=>5,
										'header'=>'',
										'selectedPageCssClass' => 'active',
										'firstPageLabel' => '',
										'prevPageLabel' => '<i class="fa fa-long-arrow-left"></i>Previous',
										'lastPageLabel'  => '',
										'nextPageLabel'  => 'Next <i class="fa fa-long-arrow-right"></i>',
                                                                                'htmlOptions'=>array('class'=>'pagination pagination-lg'),
										
								));
							?>
					    </nav> </div><?php */?>
				<script>
				 // $('#yw0').append('<li class="next"><a href="/141_hpt/site/index?page=3">View All <i class="fa fa-long-arrow-up"></i></a></li>');
				</script>	
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    
    