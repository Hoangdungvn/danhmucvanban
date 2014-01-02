<div class="Modules form">
<?php echo $this->Form->create('Module'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Tblmodule'); ?></legend>
	<?php
		echo $this->Form->input('module_id');
		echo $this->Form->input('module_name',array("label"=>'Tên module'));
        echo $this->Form->input(
            'module_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả")
        );
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Module.module_id')), null, __('Bạn có muốn xóa module có id = %s?', $this->Form->value('Module.module_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tblmodules'), array('action' => 'index')); ?></li>
	</ul>
</div>
