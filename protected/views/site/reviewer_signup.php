<style>
    .contact-error{border:none;color:rgb(255, 0, 0); display:none;}
</style>
 <section id="main-slider" class="no-margin">
        <div class="carousel slide">
           
            <div class="carousel-inner">

                <div class="item active carousel3" >
                    <div class="container">
                        
                        <div class="row slide-margin">
                            <div class="col-md-12">
                                <div class="carousel-content" style="margin-top:-35px;">
                                    <h1 class="top animation animated-item-1" style="color: #000;"> 
        Reviewer signup</h1>
                                    <br/><br/> </div>
                              </div>

                            

                        </div>
                    </div>
                </div><!--/.item-->

               

                
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container"> <div class="feature-wrap">
           <div class="rows">
           <div class="col-md-8 col-sm-6 left " style="padding:45px;">
                
	                            	
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
                                                                   
                        <div style="margin-right:50px;font-size:16px;">
                            <input class="chk" type="checkbox" name="terms" id="legal_plan"  value="1" title="Terms & Condition"   required/> &nbsp; I agree to the <a class="bright" style="color:#222;"  href="<?php echo Yii::app()->createurl('terms');?>"> Terms & Conditions</a>  
                        </div><br/>
                        <div class="form-level" style="margin-top:20px;">
                        <?php  ?>
                            <input type="hidden" name="signup" value="1">
                            <button type="submit" class="slider">Submit</button>
                        </div>
                    </form>
                
                     				
           
           
           </div>
               
                   <!-- Gettin Side Bar -->
                        <?php $this->widget('sideBars', array(
                                            'max'=>10,
                                        )); 
                        ?>
                     
                    </div>
                
                 <div class="col-md-12">
                    <div class="accordion">
                        <h2>Reviewers FAQS </h2>  
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  How will the seller contact me?
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                           <div class="media-body">
                                             
                                             <p>When you see a product that you want to test, just enter your info, click the big orange button in the post and your name and email will be sent to the Seller. After that, watch your email for more information and instructions about the promotion from the Seller.</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>
 <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Am I required to review the product? Please read this carefully:
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <p><b>1.</b>  If you receive a test product for free then you are required to leave a review and you are required to include a notice in your review that the product was received free for testing.</p>

<p><b>2.</b> If you receive a test product at a discount then you are not required to leave a review but the seller would really appreciate a review (and they’ll be much more likely to send you more products in the future).  </p>
                              
                              
                              </div>
                            </div>
                          </div>
                            
                            <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Do I have to give the product a 5 Star review?
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                              No. In fact it is very important that you only write reviews that are 100% honest!
                              <br/><br/><b>IMPORTANT:</b> If you get a product that is of bad quality, we encourage you to talk with the seller before giving the product a bad review. This way, the seller can work out problems with their products and possibly send you a new one after improvements are made.
                              </div>
                            </div>
                          </div>
                            <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Do I have to keep checking the site for new products?
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                               No, you will get emails when there is a new product posted. 
                              </div>
                            </div>
                          </div>
                            
                            <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
                                  Do I have to pay for shipping?
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFive1" class="panel-collapse collapse">
                              <div class="panel-body">
                               It depends on what kind of promotion the seller is running. Read the product description for details about the promotion, and you will also get more information from the seller via emails. 
                              </div>
                            </div>
                          </div>
                            
                            
                            <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapsesix1">
                                  Does it cost anything to be a Member as Reviewer?
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapsesix1" class="panel-collapse collapse">
                              <div class="panel-body">
                               No, Reviewers Membership is Free! 
                              </div>
                            </div>
                          </div>
                            
                             </div><!--/#accordion1-->
                    </div>
                </div>


               </div> </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

  