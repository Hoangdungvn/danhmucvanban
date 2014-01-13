<div class="middle-login">
    <div class="block-flat">
        <div class="header">
            <h3 class="text-center"><img class="logo-img" src="img/logo.png" alt="logo">Clean Zone</h3>
        </div>
        <div>
            <?php echo $this->Form->Create('User',array(
                'class' => 'form-horizontal',
                'style' => 'margin-bottom: 0px !important;'
            )); ?>
                <div class="content">
                    <h4 class="title">Login</h4>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php echo $this->Form->input('user_email',array(
                                'class' => 'form-control',
                                'div'   => 'input-group',
                                'placeholder' => 'Username',
                                'label' => array(
                                    'class' =>'input-group-addon',
                                    'text'  =>'<i class="fa fa-user"></i>'
                                )
                            )); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <?php echo $this->Form->input('user_password',array(
                                'class' => 'form-control',
                                'div'   => 'input-group',
                                'placeholder' => 'Password',
                                'label' => array(
                                    'class' =>'input-group-addon',
                                    'text'  =>'<i class="fa fa-lock"></i>'
                                )
                            )); ?>
                        </div>
                    </div>

                </div>
                <div class="foot">
                    <?php
                        echo $this->Form->button('Log me in',array(
                            'type' =>'submit',
                            'class' => 'btn btn-primary',
                            'data-dismiss' =>'modal'
                        ));
                    ?>
                </div>
                <?php echo $this->Form->end() ?>
        </div>
    </div>
    <div class="text-center out-links"><a href="#">© 2013 Your Company</a></div>
</div>