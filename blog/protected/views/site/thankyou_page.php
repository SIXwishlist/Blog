
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
           
            <div class="carousel-inner">

                <div class="item active carousel3" >
                    <div class="container">
                        
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                <h1 class="top animation animated-item-1" style="color: #000;">
                                   Registration Success           
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
                <?php /*if(Yii::app()->session['succes']){ ?>
                    <div class="success_msg" > <?php echo Yii::app()->session['succes']; ?> </div>
                <?php Yii::app()->session['succes'] = '';} */?>
                <h4>Thank you for signing up with We Reviews</h4><br/>
                <h5>Your account has been created successfully.</h5>
                <h3>Go into your account and add your products.</h3>
                <p class="lead"></p>
            </div>

                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->
<script>
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