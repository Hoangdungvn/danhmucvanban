<div class="tblcontents index">
	<h2><?php echo __('Tblcontents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_name'); ?></th>
			<th><?php echo $this->Paginator->sort('content_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('content_creatdate'); ?></th>
			<th><?php echo $this->Paginator->sort('content_status'); ?></th>
			<th><?php echo $this->Paginator->sort('content_modifydate'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tblcontents as $tblcontent): ?>
	<tr>
		<td><?php echo h($tblcontent['Tblcontent']['content_id']); ?>&nbsp;</td>
		<td><?php echo h($tblcontent['Tblcontent']['content_name']); ?>&nbsp;</td>
		<td><?php echo h($tblcontent['Tblcontent']['content_desc']); ?>&nbsp;</td>
		<td><?php echo h($tblcontent['Tblcontent']['content_creatdate']); ?>&nbsp;</td>
		<td><?php echo h($tblcontent['Tblcontent']['content_status']); ?>&nbsp;</td>
		<td><?php echo h($tblcontent['Tblcontent']['content_modifydate']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tblcontent['Tblcontent']['content_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tblcontent['Tblcontent']['content_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tblcontent['Tblcontent']['content_id']), null, __('Are you sure you want to delete # %s?', $tblcontent['Tblcontent']['content_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tblcontent'), array('action' => 'add')); ?></li>
	</ul>
</div>
