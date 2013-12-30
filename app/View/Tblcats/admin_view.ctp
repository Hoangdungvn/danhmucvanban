<div class="tblcats view">
<h2><?php echo __('Tblcat'); ?></h2>
	<dl>
		<dt><?php echo __('Cat Id'); ?></dt>
		<dd>
			<?php echo h($tblcat['Tblcat']['cat_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat Name'); ?></dt>
		<dd>
			<?php echo h($tblcat['Tblcat']['cat_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat Desc'); ?></dt>
		<dd>
			<?php echo h($tblcat['Tblcat']['cat_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat Status'); ?></dt>
		<dd>
			<?php echo h($tblcat['Tblcat']['cat_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat Order'); ?></dt>
		<dd>
			<?php echo h($tblcat['Tblcat']['cat_order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tblcat'), array('action' => 'edit', $tblcat['Tblcat']['cat_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tblcat'), array('action' => 'delete', $tblcat['Tblcat']['cat_id']), null, __('Are you sure you want to delete # %s?', $tblcat['Tblcat']['cat_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tblcats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tblcat'), array('action' => 'add')); ?> </li>
	</ul>
</div>
