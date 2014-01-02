<div class="tblmodules form">
<?php echo $this->Form->create('Tblmodule'); ?>
	<fieldset>
		<legend><?php echo __('Add Tblmodule'); ?></legend>
	<?php
		echo $this->Form->input('module_name');
		echo $this->Form->input('module_desc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tblmodules'), array('action' => 'index')); ?></li>
	</ul>
</div>
