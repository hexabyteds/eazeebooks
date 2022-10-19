
                <div class="row">
                    <div class="col-sm-12 col-md-4">
            </div>
            <div class="col-sm-12 col-md-4">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <h4><?php echo display('change_your_information') ?></h4>
                        </div>
                         <?php echo form_open_multipart('dashboard/home/change_password',array('id' => 'insert_product','class' => 'form-horizontal'))?>
                            <div class="panel-body">
                                <h4 class="text-center"><?php echo display('old_information') ?></h4>
                                <label for="login-email"><?php echo display('email') ?></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input type="email" placeholder="<?php echo display('email') ?>" class="form-control" id="email" name="email" value="" required/>  
                                </div>
                                <label for="login-email"><?php echo display('old_password') ?></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" placeholder="<?php echo display('old_password') ?>" class="form-control" id="old_password" name="old_password" value="" required/>
                                </div>
                                <h4 class="text-center"><?php echo display('new_information') ?></h4>
                                <label for="login-email"><?php echo display('new_password') ?></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" placeholder="<?php echo display('new_password') ?>" class="form-control" id="password" name="password" value="" required/>
                                </div>
                                <label for="login-email"><?php echo display('re_type_password') ?></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" placeholder="<?php echo display('re_type_password') ?>" class="form-control" id="repassword" name="repassword" value="" required/>
                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <div class="login-btn">
                                    <button type="submit" class="btn btn-success btn-block m-b-10"><i class="fa fa-play-circle"></i> <?php echo display('change_password') ?></button>
                                </div>             
                            </div>
                        <?php echo form_close()?>
                    </div>
                </div>
            </div>
         
  