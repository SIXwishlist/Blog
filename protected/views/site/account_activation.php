
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
           
            <div class="carousel-inner">

                <div class="item active carousel3" >
                    <div class="container">
                        
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                <h1 class="top animation animated-item-1" style="color: #000;">
                                  Account Activation           
                                 </h1>
                                </div>
                             </div>

                            

                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="left wow fadeInDown">
                <?php if(Yii::app()->session['success']){ ?>
                    <div class="success_msg" > <?php echo Yii::app()->session['success']; ?> </div>
                    <h3>You will be redirected to your Account within few moments.</h3>
                <?php Yii::app()->session['success'] = '';} ?>
                <?php if(Yii::app()->session['error']){ ?>
                    <div class="success_msg" style="background-color: rgba(199, 2, 2, 0.58);" > <?php echo Yii::app()->session['error']; ?> </div>
                <?php Yii::app()->session['error'] = '';
                Yii::app()->session['succes'] = '';
                } ?>
                <h4></h4><br/><br/><br/><br/><br/>
                <h5></h5>
                
                <p class="lead"></p>
            </div>

                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->
<script>
setTimeout(function () {
  <?php if(Yii::app()->session['login_user_type'] == 2){ ?>	
   		window.location.href= '<?php echo Yii::app()->createurl('seller/dashboard');?>'; // the redirect goes here
   <?php } else if(Yii::app()->session['login_user_type'] == 1) { ?>
   		window.location.href= '<?php echo Yii::app()->createurl('reviewer/dashboard');?>'; // the redirect goes here
   <?php } ?>
},5000);
    function forgot_pass_area(val)
    {
        if(val == 1)
        {
            $('#login_form').hide();
            $('#forgot_pass').show();
        }
        else if(val == 0)
        {
            $('#forgot_pass').hide();
            $('#login_form').show();
        }

    }
    function forgot_password()
    {
        var email = $('#f_email').val();
        $.ajax({
            url: '<?php echo Yii::app()->createurl("site/forgot"); ?>',
            data: 'email='+email,
            type: 'POST',
            beforeSend: function()
            {
                    $('#img').show();
            },
            success: function(responce)
            { 
                $('#img').hide();
                if(responce == 'success')
                {
                    $('#f_msg').css('color','white').html('Please check your email for new password.');
                }
                else
                    $('#f_msg').css('color','red').html('Email is not registered.');
            }

        });
        return false;

    }
    </script>