<div class="tblusers index">
	<h2><?php echo __('Tblusers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_fullname'); ?></th>
			<th><?php echo $this->Paginator->sort('user_password'); ?></th>
			<th><?php echo $this->Paginator->sort('user_email'); ?></th>
			<th><?php echo $this->Paginator->sort('user_status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tblusers as $tbluser): ?>
	<tr>
		<td><?php echo h($tbluser['Tbluser']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($tbluser['Tbluser']['user_fullname']); ?>&nbsp;</td>
		<td><?php echo h($tbluser['Tbluser']['user_password']); ?>&nbsp;</td>
		<td><?php echo h($tbluser['Tbluser']['user_email']); ?>&nbsp;</td>
		<td><?php echo h($tbluser['Tbluser']['user_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tbluser['Tbluser']['user_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tbluser['Tbluser']['user_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tbluser['Tbluser']['user_id']), null, __('Are you sure you want to delete # %s?', $tbluser['Tbluser']['user_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tbluser'), array('action' => 'add')); ?></li>
	</ul>
</div>
