<div class="Modules form">
<?php echo $this->Form->create('Module'); ?>
	<fieldset>
		<legend><?php echo __('Sửa thông tin module'); ?></legend>
	<?php
		echo $this->Form->input('module_id');
        echo $this->Form->input('module_name',array(
            'label'=>'Tên module<em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'Tên module'
        ));
        echo $this->Form->input(
            'module_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả <em>*</em>")
        );
	?>
	</fieldset>
<?php echo $this->Form->end(__('Sửa')); ?>
</div>

