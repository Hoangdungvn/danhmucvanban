<div class="documents index">
	<h2><?php echo __('Documents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('docment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('docment_name'); ?></th>
			<th><?php echo $this->Paginator->sort('document_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('docment_created'); ?></th>
			<th><?php echo $this->Paginator->sort('docment_modifier'); ?></th>
			<th><?php echo $this->Paginator->sort('document_signdate'); ?></th>
			<th><?php echo $this->Paginator->sort('document_signer'); ?></th>
			<th><?php echo $this->Paginator->sort('document_status'); ?></th>
			<th><?php echo $this->Paginator->sort('document_file'); ?></th>
			<th><?php echo $this->Paginator->sort('document_view'); ?></th>
			<th><?php echo $this->Paginator->sort('doctype_id'); ?></th>
			<th><?php echo $this->Paginator->sort('organ_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cat_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($documents as $document): ?>
	<tr>
		<td><?php echo h($document['Document']['docment_id']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['docment_name']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['document_desc']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['docment_created']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['docment_modifier']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['document_signdate']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['document_signer']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['document_status']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['document_file']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['document_view']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($document['Doctype']['doctype_id'], array('controller' => 'doctypes', 'action' => 'view', $document['Doctype']['doctype_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($document['Organ']['organ_id'], array('controller' => 'organs', 'action' => 'view', $document['Organ']['organ_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($document['Cat']['cat_id'], array('controller' => 'cats', 'action' => 'view', $document['Cat']['cat_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $document['Document']['docment_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $document['Document']['docment_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $document['Document']['docment_id']), null, __('Are you sure you want to delete # %s?', $document['Document']['docment_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Document'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Doctypes'), array('controller' => 'doctypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctype'), array('controller' => 'doctypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organs'), array('controller' => 'organs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organ'), array('controller' => 'organs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cats'), array('controller' => 'cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cat'), array('controller' => 'cats', 'action' => 'add')); ?> </li>
	</ul>
</div>
