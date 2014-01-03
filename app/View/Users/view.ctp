<div class="tblusers view">
<h2><?php echo __('Tbluser'); ?></h2>
	<dl>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($tbluser['Tbluser']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Fullname'); ?></dt>
		<dd>
			<?php echo h($tbluser['Tbluser']['user_fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Password'); ?></dt>
		<dd>
			<?php echo h($tbluser['Tbluser']['user_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Email'); ?></dt>
		<dd>
			<?php echo h($tbluser['Tbluser']['user_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Status'); ?></dt>
		<dd>
			<?php echo h($tbluser['Tbluser']['user_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tbluser'), array('action' => 'edit', $tbluser['Tbluser']['user_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tbluser'), array('action' => 'delete', $tbluser['Tbluser']['user_id']), null, __('Are you sure you want to delete # %s?', $tbluser['Tbluser']['user_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tblusers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tbluser'), array('action' => 'add')); ?> </li>
	</ul>
</div>
