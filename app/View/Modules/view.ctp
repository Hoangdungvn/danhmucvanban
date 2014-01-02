<div class="tblmodules view">
<h2><?php echo __('Tblmodule'); ?></h2>
	<dl>
		<dt><?php echo __('Module Id'); ?></dt>
		<dd>
			<?php echo h($tblmodule['Tblmodule']['module_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module Name'); ?></dt>
		<dd>
			<?php echo h($tblmodule['Tblmodule']['module_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module Desc'); ?></dt>
		<dd>
			<?php echo h($tblmodule['Tblmodule']['module_desc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tblmodule'), array('action' => 'edit', $tblmodule['Tblmodule']['module_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tblmodule'), array('action' => 'delete', $tblmodule['Tblmodule']['module_id']), null, __('Are you sure you want to delete # %s?', $tblmodule['Tblmodule']['module_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tblmodules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tblmodule'), array('action' => 'add')); ?> </li>
	</ul>
</div>
