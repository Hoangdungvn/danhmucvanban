<div class="doctypes view">
<h2><?php echo __('Doctype'); ?></h2>
	<dl>
		<dt><?php echo __('Doctype Id'); ?></dt>
		<dd>
			<?php echo h($doctype['Doctype']['doctype_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctype Name'); ?></dt>
		<dd>
			<?php echo h($doctype['Doctype']['doctype_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctype Desc'); ?></dt>
		<dd>
			<?php echo h($doctype['Doctype']['doctype_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctype Status'); ?></dt>
		<dd>
			<?php echo h($doctype['Doctype']['doctype_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctype Order'); ?></dt>
		<dd>
			<?php echo h($doctype['Doctype']['doctype_order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doctype'), array('action' => 'edit', $doctype['Doctype']['doctype_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doctype'), array('action' => 'delete', $doctype['Doctype']['doctype_id']), null, __('Are you sure you want to delete # %s?', $doctype['Doctype']['doctype_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctype'), array('action' => 'add')); ?> </li>
	</ul>
</div>
