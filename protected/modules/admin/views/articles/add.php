    <style>
    .help-block{color:red;}
    .form-group img { width: 150px; height: 100px;}
    </style> 
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Articles</h2>   
                        <h5> </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <?php if(Yii::app()->session['success'] != ''){ ?>
                     <div style="background-color:#B0F3B0;padding:6px;" id="p_sucess"><?php echo Yii::app()->session['success']; ?></div>
                    <?php Yii::app()->session['success'] = ''; } ?>
                    <?php if(isset($validation_error)){ ?>
                     <div style="background-color:#FFB7B7;padding:6px;color:#F00;" id="p_error">ERROR ! : * Some fields are missing..</div>
                    <?php  } ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <?php if(Yii::app()->controller->action->id == 'edit') echo' Edit'; else echo 'Add'; ?> Article
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <form role="form" method="post" enctype="multipart/form-data">  
                                        <div class="form-group">
                                            <label>Name <span style="color:#F00">*</span></label>         
                                            <input class="form-control" name="name" id="name"  value="<?php echo isset($article->name) ? $article->name : (isset($prev_values['name']) ? $prev_values['name'] : ''); ?>"/>
                                            <sapn class="help-block" id="name_error">
                                             <?php if(isset($validation_error['name'][0])) echo $validation_error['name'][0]; ?>
                                            </sapn>
                                        </div>
                                        <div class="form-group">
                                            <label>Email <span style="color:#F00">*</span></label> 
                                            <input class="form-control" name="email" id="email"  value="<?php echo isset($article->email) ? $article->email : (isset($prev_values['email']) ? $prev_values['email'] : ''); ?>"/> 
                                            <sapn class="help-block" id="email_error">
                                             <?php if(isset($validation_error['email'][0])) echo $validation_error['email'][0]; ?>
                                            </sapn>
                                        </div>
                                        <div class="form-group">
                                            <label>Address <span style="color:#F00">*</span></label> 
                                            <textarea class="form-control" name="address" id="address" ><?php echo isset($article->address) ? $article->address : (isset($prev_values['address']) ? $prev_values['address'] : ''); ?></textarea> 
                                            <sapn class="help-block" id="address_error">
                                               <?php if(isset($validation_error['address'][0])) echo $validation_error['address'][0]; ?>
                                            </sapn>
                                        </div>
                                        <div class="form-group"> 
                                            <label>Text <span style="color:#F00">*</span></label> 
                                            <textarea class="form-control" id="text" rows="8" cols="10" name="text"><?php echo isset($article->text) ? str_replace(array("<br />"),"",$article->text) : (isset($prev_values['text']) ? $prev_values['text'] : ''); ?></textarea>   
                                            <?php
                                                // Make sure you are using correct paths here.
                                               $ckeditor = new CKEditor();
                                                $ckeditor->basePath = Yii::app()->request->baseurl.'/resources/Ckeditor/ckeditor/';
                                                $ckfinder = new CKFinder();
                                                $ckfinder->BasePath = Yii::app()->request->baseurl.'/resources/Ckeditor/ckfinder/'; // Note: the BasePath property in the CKFinder class starts with a capital letter.
                                                $ckeditor->config['height'] = 250;
                                                //$ckeditor->config['width'] = 650;
                                                $ckfinder->SetupCKEditorObject($ckeditor);
                                                
                                                $ckeditor->replace("text");
                                            ?>
                                            <sapn class="help-block" id="text_error">
                                               <?php if(isset($validation_error['text'][0])) echo $validation_error['text'][0]; ?>
                                            </sapn>
                                        </div>
                                        <button type="submit" class="btn btn-primary" onclick="return article_valid()">Update</button>
                                        <button type="reset" class="btn btn-default" onclick="location.href='<?php echo Yii::app()->createurl('admin/articles/view');?>'">Back</button>

                                    </form>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3></h3>
                         <p>
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
    <script>
    $('#p_sucess').fadeOut(12000);
	
    </script>
         
    