<div class="tblcats form">
<?php echo $this->Form->create('Tblcat'); ?>
	<fieldset>
		<legend><?php echo __('Add Tblcat'); ?></legend>
	<?php
		echo $this->Form->input('cat_name');
		echo $this->Form->input('cat_desc');
		echo $this->Form->input('cat_status');
		echo $this->Form->input('cat_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tblcats'), array('action' => 'index')); ?></li>
	</ul>
</div>
