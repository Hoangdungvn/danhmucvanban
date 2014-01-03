<div class="tblusers form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Tbluser'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('user_fullname',array(
            'label'=>'Họ tên <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'Họ tên'
        ));
		echo $this->Form->input('user_email',array(
            'label'=>'Email <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'email'
        ));
        echo $this->Form->input('user_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control'
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

