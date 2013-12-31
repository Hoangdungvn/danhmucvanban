<div class="documents form">
<?php echo $this->Form->create('Document'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Document'); ?></legend>
	<?php
		echo $this->Form->input('docment_id');
		echo $this->Form->input('docment_name');
		echo $this->Form->input('document_desc');
		echo $this->Form->input('docment_created');
		echo $this->Form->input('docment_modifier');
		echo $this->Form->input('document_signdate');
		echo $this->Form->input('document_signer');
		echo $this->Form->input('document_status');
		echo $this->Form->input('document_file');
		echo $this->Form->input('document_view');
		echo $this->Form->input('doctype_id');
		echo $this->Form->input('organ_id');
		echo $this->Form->input('cat_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Document.docment_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Document.docment_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doctypes'), array('controller' => 'doctypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctype'), array('controller' => 'doctypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organs'), array('controller' => 'organs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organ'), array('controller' => 'organs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cats'), array('controller' => 'cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cat'), array('controller' => 'cats', 'action' => 'add')); ?> </li>
	</ul>
</div>
