        <?php //$this->rendersideBar(); ?>
<div class="row">
         <div class="col-md-12 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
         <div class="feature-wrap"> 
<?php foreach($recent_pro as $pro){ ?>
<div class="products" style="display:block;overflow:hidden;position:relative;width:350px;height:365px;margin-right:25px;;margin-top:15px;">  
         <div class="item-details">
            <div class="thumbnail" style="border:0px;">
            <a href="<?php echo Yii::app()->createurl('products/detail/'.str_replace(array(" ", "/" , "\\", "#", "$", "@", "%"),"-",substr($pro->product_title,0,60)).'/p/id/'.base64_encode($pro->id));?>">
            <?php if(isset($pro->image) && $pro->image != '' && is_file(Yii::getPathOfAlias('webroot') ."/uploads/products/".$pro->image)){ ?>
            <img src="<?php echo Yii::app()->request->baseurl.'/uploads/products/'.$pro->image ; ?>" alt ="<?php echo $pro->product_title; ?>" title ="<?php echo $pro->product_title; ?>"  alt="pro1" width="200" height="150" class="img-responsive">
            <?php }else{ ?>
            <img src="<?php echo Yii::app()->request->baseurl.'/images/img_not_found_200-200.jpg' ; ?>" alt ="<?php echo $pro->product_title; ?>" title ="<?php echo $pro->product_title; ?>"  alt="pro1" width="200" height="150" class="img-responsive">
            <?php } ?>
            <!--  <img src="<?php echo Yii::app()->request->baseurl;?>/resources/images/products/i4-200x200.jpg" class="img-responsive" alt="pro1" width="100" height="100"> -->
            </a> </div>
                             <br/>                     
                             <span class="small muted"><?php echo $pro->promotion_end_date != '0000:00:00 00:00:00' ? date('M d, Y', strtotime($pro->promotion_end_date)) : ''; ?></span><br/>
                             <b><a href="<?php echo Yii::app()->createurl('products/detail/'.str_replace(array(" ", "/" , "\\", "#", "$", "@", "%"),"-",substr($pro->product_title,0,60)).'/p/id/'.base64_encode($pro->id));?>"><?php echo substr($pro->product_title,0,100); if(strlen($pro->product_title) > 100) echo ' ...';?></a> </b>
                             <br/><br/><a class="small">
                                                <img src="<?php echo Yii::app()->request->baseurl;?>/resources/images/products/catgory.png"> <?php echo isset($pro->cat->cat_name) ? $pro->cat->cat_name : ''; ?>
                                            </a><br/>
         </div>           
                 
             </div>
           
 <?php } ?>
 </div></div></div>                            
             
  