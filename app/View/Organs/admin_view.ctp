<div class="organs view">
<h2><?php echo __('Organ'); ?></h2>
	<dl>
		<dt><?php echo __('Organ Id'); ?></dt>
		<dd>
			<?php echo h($organ['Organ']['organ_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organ Name'); ?></dt>
		<dd>
			<?php echo h($organ['Organ']['organ_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organ Desc'); ?></dt>
		<dd>
			<?php echo h($organ['Organ']['organ_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organ Status'); ?></dt>
		<dd>
			<?php echo h($organ['Organ']['organ_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organ Order'); ?></dt>
		<dd>
			<?php echo h($organ['Organ']['organ_order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organ'), array('action' => 'edit', $organ['Organ']['organ_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Organ'), array('action' => 'delete', $organ['Organ']['organ_id']), null, __('Are you sure you want to delete # %s?', $organ['Organ']['organ_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Organs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organ'), array('action' => 'add')); ?> </li>
	</ul>
</div>
