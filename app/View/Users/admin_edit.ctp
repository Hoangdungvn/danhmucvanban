<div class="tblusers form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Sửa thông tin người dùng'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
        echo $this->Form->input('user_fullname',array(
            'label'=>'Họ và tên <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => 'required',
            'class'    => 'form-control',
            'placeholder' => 'Họ và tên',
        ));
        echo $this->Form->input('user_password',array(
            'label'=>'Mật khẩu <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => 'required',
            "type"  =>"password",
            'class'    => 'form-control',
            'placeholder' => 'Mật khẩu',
        ));
        echo $this->Form->input('user_email',array(
            'label'=>'Email <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => 'required',
            'class'    => 'form-control',
            'placeholder' => 'Email',
        ));
        echo $this->Form->input('user_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => 'required',
            'class'    => 'form-control'
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

