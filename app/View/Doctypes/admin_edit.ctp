<div class="doctypes form">
<?php echo $this->Form->create('Doctype'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Doctype'); ?></legend>
	<?php
		echo $this->Form->input('doctype_id');
		echo $this->Form->input('doctype_name');
		echo $this->Form->input('doctype_desc');
		echo $this->Form->input('doctype_status');
		echo $this->Form->input('doctype_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Doctype.doctype_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Doctype.doctype_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Doctypes'), array('action' => 'index')); ?></li>
	</ul>
</div>
