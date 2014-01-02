
    <div class="middle-login">
        <div class="block-flat">
            <div class="header">
                <h3 class="text-center"><img class="logo-img" src="img/logo.png" alt="logo">Clean Zone</h3>
            </div>
            <div>
                <?php echo $this->Form->create('Tbluser',array('style' => 'margin-bottom: 0px !important;','class'=>'form-horizontal')) ?>
                    <div class="content">
                        <h4 class="title">Login Access</h4>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="data[Tbluser][username]" placeholder="Username" id="username" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="data[Tbluser][password]" placeholder="Password" id="password" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="foot">
                        <button class="btn btn-default" data-dismiss="modal" type="button">Register</button>
                        <button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
        <div class="text-center out-links"><a href="#">© 2013 Your Company</a></div>
    </div>
