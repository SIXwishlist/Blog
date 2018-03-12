<style>
    .contact-error{border:none;color:rgb(255, 0, 0); display:none;}
    </style>
    
    <?php if(Yii::app()->session['login_user'] == ''){ ?>
     <section id="main-slider" class="no-margin">
        <div class="carousel slide">
           
            <div class="carousel-inner">

                <div class="item active carousels" >
                    <div class="container">
                     
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="top animation animated-item-1" style="color: #000;">Get Products In Exchange For Reviewing Them Online</h1>
                                    <h2 class="top animation animated-item-2"><b>Join Now & Start Getting FREE Cool Products</b></h2>
                                    <a class="btn-slide animation animated-item-3" href="<?php echo Yii::app()->createurl('site/how_it_works');?>">Read More</a>
                                </div>
                            	<div class="slider-img2" style="margin-top:45px;">
                            		<img src="<?php echo Yii::app()->request->baseurl;?>/resources/images/slider/steps.jpg" class="img-responsive">
                            	</div>   
                            </div>
                            <div class="col-sm-6 animation animated-item-4">
                                <div  class="shadow-bringer3">
	                            	
	                            	<div class="slider-img">
	                            		<img src="<?php echo Yii::app()->request->baseurl;?>/resources/images/slider/itsfree.png" class="img-responsive">
	                            	</div>
		                            	
										<form class="form" id="theform" method="post" action="<?php echo Yii::app()->createurl('site/signup');?>">
										 	<div class="form-level" style="margin-top:10px;">
												<input class="name" type="text" name="first_name" placeholder="Your Full Name *" value="<?php echo isset($prev_record['first_name']) ? $prev_record['first_name'] :'';?>" required>
												<p class="contact-error" style="display:<?php if(isset($sigupErrors['first_name'])) echo 'block';?>;"><?php if(isset($sigupErrors['first_name'])) echo $sigupErrors['first_name'][0].'<script>$("#first_name").focus();</script>'; ?></p>
											</div>
										 	<div class="form-level">
												<input class="email" type="email" name="email" placeholder="Your Email *" value="<?php echo isset($prev_record['email']) ? $prev_record['email'] :'';?>" required>
												<p class="contact-error" style="display:<?php if(isset($sigupErrors['email'])) echo 'block';?>;"><?php if(isset($sigupErrors['email'])) echo $sigupErrors['email'][0].'<script>$("#email").focus();</script>'; ?></p>
											</div>
											<div class="form-level">
												<input class="phone" type="password" name="password" placeholder=" Your Password *" value="<?php echo isset($prev_record['password']) ? $prev_record['password'] :'';?>" required>
												<p class="contact-error" style="display:<?php if(isset($sigupErrors['password'])) echo 'block';?>;"><?php if(isset($sigupErrors['password'])) echo $sigupErrors['password'][0].'<script>$("#password").focus();</script>'; ?></p>
											</div>
											<!--<div class="form-level"> 
												<input class="phone" type="text" name="amazon_pro_url" placeholder=" Amazone Profile Url" value="<?php echo isset($prev_record['amazon_pro_url']) ? $prev_record['amazon_pro_url'] :'';?>" >
											</div>-->
                                            <div class="form-level">    
                                            	<?php $this->widget('MyCaptcha' );  ?>
                                            	<img src="<?php echo Yii::app()->request->baseurl;?>/uploads/captcha/captcha.jpg" style="width:100px;"/><br/>
                                                <p></p>
                                            </div>
                                           <!-- <div class="form-level">
                                                 <input type="text" name="captcha" id="captcha" required placeholder="Type the text" value="">
                                                 <p class="contact-error" style="background-color:#f2f2f2;padding:10px;display:<?php if(isset($sigupErrors['captcha'])) echo 'block';?>;"><?php if(isset($sigupErrors['captcha'])) echo $sigupErrors['captcha'][0].'<script>$("#captcha").focus();</script>'; ?></p>
                                            </div>  -->               
                                                                    <div class="form-level">
                                                                    <div style="width:75%;margin-left:5px;">
                                                                     <input class="chk" type="checkbox" name="terms" id="legal_plan"  value="1" title="Terms & Condition"   required/> I agree to the <a class="bright" style="color:#222;"  href="<?php echo Yii::app()->createurl('site/terms');?>"> Terms & Conditions</a>  
                                                                    </div></div><br/>
                                            <div class="form-level">
                                            <?php  ?>
												<input type="hidden" name="signup" value="1">
										    	<button type="submit" class="slider">Submit</button>
										 	</div>
										</form>
									
                                          <!-- <div class="slider-img">
                                                    <img src="<?php //echo Yii::app()->request->baseurl;?>/resources/images/slider/thanks.png" class="img-responsive">
                                            </div>
                                            <div id="Div2" >
											<h1> WELCOME</h1>
											<h2 style="color:#fff;"><?php //echo Yii::app()->session['login_user_name']; ?></h2>   
											<p>At WeReviews.com, we have created a platform for both the Reviewers & Merchants to interact and mutually benefits each other!</p><br/>
											<button style="width:60%" onclick="location.href='<?php //echo //Yii::app()->session["login_user_type"] == 2 ? Yii::app()->createurl("seller/dashboard") : Yii::app()->createurl("reviewer/dashboard");?>'">View Your Account</button><br/><br/>
										</div>
									!-->
								</div>
                            </div>
                           
                        </div>
                    </div>
                </div><!--/.item-->

            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->

    </section><!--/#main-slider-->
	<?php } ?>
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
	                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="100ms" data-wow-delay="100ms">
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
			                            <div class="small"><?php echo $pro->promotion_end_date != '0000:00:00 00:00:00' ? date('M d, Y', strtotime($pro->promotion_end_date)) : ''; ?></div>
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
                    <div style="width:100%; text-align: center; padding:50px;">  
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
					    </nav> </div> 
				<script>
				  $('#yw0').append('<li ><a href="<?php echo Yii::app()->createurl('site/products');?>">View All <i class="fa fa-long-arrow-up"></i></a></li>');
				  $('#yw1').append('<li ><a href="<?php echo Yii::app()->createurl('site/products');?>">View All <i class="fa fa-long-arrow-up"></i></a></li>');
				  $(".pagination > li > a").each(function() { 
					    var _href = $(this).attr("href"); 
						$(this).attr("href", _href + '#feature');
				  });
				</script>	
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="services" class="service-item">
        
	    <div class="container">
            
            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        
                        <div class="media-body" >
                            
                            <h2 class="media-heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"><span class="timer2"></span></h2>
                            <h6 style="text-align:center">Successful Product Launches</h6><br/><br/>
                            <p style="margin-top:5px;">There's no substitute for the wisdom that comes from experience. We know what it takes to successfully launch products, dramatically improve BSR, and get products on page1.<br/><br/></p><br/>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        
                        <div class="media-body">
                            <h2 class="media-heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">$<?php echo isset($setting->field_value) ? $setting->field_value : ''; ?></h2>
                            <h6 style="text-align:center">Low Monthly Cost <br/>for Seller Signup</h6><br/>
                            <p>Achieve your sales goals and surpass your wildest dreams of selling Amazon,Ebay etc for the low cost of $<?php echo isset($setting->field_value) ? $setting->field_value : ''; ?> a month for your first product. This means you can blow away the competition with UNLIMITED launches for one low monthly cost!</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        
                        <div class="media-body">
                            <h2 class="media-heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"><span class="timer"></span></h2>
                            <h6 style="text-align:center">Reviews Resulting <br/>From Our Launches</h6><br/>
                            <p>Reviews are vital to successfully selling on Amazon,Ebay etc. We have developed a proven, Amazon ToS friendly, system for getting you 50%+ review rates on the products you launch.</p><br/>
                        </div>
                    </div>
                </div>                                          
            </div><!--/.row-->
        </div><!--/.container-->
       
    </section><!--/#services-->
 <section id="content">
        <div class="container">
            <div class="row">
               
                <div class="col-md-12 col-sm-6 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Testimonials</h2><br/>
                        <?php if(!empty($user_testimonials)){
							foreach($user_testimonials as $com)
							{
						?>		
                             <div class="media testimonial-inner">
                                <div class="pull-left">
                                    <?php if(isset($com->image) && $com->image != '' && is_file(Yii::getPathOfAlias('webroot') ."/uploads/testimonial/".$com->image)){ ?>
                                          <img class="img-responsive img-circle" src="<?php echo Yii::app()->request->baseurl.'/uploads/testimonial/'.$com->image ; ?>" >
                                    <?php }else{ ?>
                                          <img class="img-responsive img-circle" src="<?php echo Yii::app()->request->baseurl.'/images/img_not_found.gif' ; ?>" style="width:66px; height:66px;">
                                    <?php } ?> 
                                </div>
                                <div class="media-body">
                                    <p><?php echo substr($com->comment,0, 500); if(strlen($com->comment) > 500) echo '...'; ?></p>
                                    <span><strong><?php echo $com->name; ?> /</strong><?php echo $com->designation; ?></span>
                                </div>
                             </div>
                        <?php
                        }   }
                        ?>
						

                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->
    
    