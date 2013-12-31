<div class="organs index">
	<h2><?php echo __('Organs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('organ_id'); ?></th>
			<th><?php echo $this->Paginator->sort('organ_name'); ?></th>
			<th><?php echo $this->Paginator->sort('organ_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('organ_status'); ?></th>
			<th><?php echo $this->Paginator->sort('organ_order'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organs as $organ): ?>
	<tr>
		<td><?php echo h($organ['Organ']['organ_id']); ?>&nbsp;</td>
		<td><?php echo h($organ['Organ']['organ_name']); ?>&nbsp;</td>
		<td><?php echo h($organ['Organ']['organ_desc']); ?>&nbsp;</td>
		<td><?php echo h($organ['Organ']['organ_status']); ?>&nbsp;</td>
		<td><?php echo h($organ['Organ']['organ_order']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $organ['Organ']['organ_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $organ['Organ']['organ_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $organ['Organ']['organ_id']), null, __('Are you sure you want to delete # %s?', $organ['Organ']['organ_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Organ'), array('action' => 'add')); ?></li>
	</ul>
</div>
