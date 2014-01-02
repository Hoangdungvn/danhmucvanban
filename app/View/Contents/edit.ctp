<div class="tblcontents form">
<?php echo $this->Form->create('Tblcontent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tblcontent'); ?></legend>
	<?php
		echo $this->Form->input('content_id');
		echo $this->Form->input('content_name');
		echo $this->Form->input('content_desc');
		echo $this->Form->input('content_creatdate');
		echo $this->Form->input('content_status');
		echo $this->Form->input('content_modifydate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tblcontent.content_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tblcontent.content_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tblcontents'), array('action' => 'index')); ?></li>
	</ul>
</div>
