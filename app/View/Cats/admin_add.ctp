<div class="cats form">
<?php echo $this->Form->create('Cat'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Cat'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Cats'), array('action' => 'index')); ?></li>
	</ul>
</div>
