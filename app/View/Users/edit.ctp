<div class="tblusers form">
<?php echo $this->Form->create('Tbluser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tbluser'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('user_fullname');
		echo $this->Form->input('user_password');
		echo $this->Form->input('user_email');
		echo $this->Form->input('user_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tbluser.user_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tbluser.user_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tblusers'), array('action' => 'index')); ?></li>
	</ul>
</div>
