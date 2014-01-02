<div class="tblcontents form">
<?php echo $this->Form->create('Tblcontent'); ?>
	<fieldset>
		<legend><?php echo __('Add Tblcontent'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Tblcontents'), array('action' => 'index')); ?></li>
	</ul>
</div>
