<div class="tblmodules form">
<?php echo $this->Form->create('Tblmodule'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tblmodule'); ?></legend>
	<?php
		echo $this->Form->input('module_id');
		echo $this->Form->input('module_name');
		echo $this->Form->input('module_desc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tblmodule.module_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tblmodule.module_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tblmodules'), array('action' => 'index')); ?></li>
	</ul>
</div>
