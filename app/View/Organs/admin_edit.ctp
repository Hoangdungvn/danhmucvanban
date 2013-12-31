<div class="organs form">
<?php echo $this->Form->create('Organ'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Organ'); ?></legend>
	<?php
		echo $this->Form->input('organ_id');
		echo $this->Form->input('organ_name');
		echo $this->Form->input('organ_desc');
		echo $this->Form->input('organ_status');
		echo $this->Form->input('organ_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Organ.organ_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Organ.organ_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Organs'), array('action' => 'index')); ?></li>
	</ul>
</div>
