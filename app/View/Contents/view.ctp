<div class="tblcontents view">
<h2><?php echo __('Tblcontent'); ?></h2>
	<dl>
		<dt><?php echo __('Content Id'); ?></dt>
		<dd>
			<?php echo h($tblcontent['Tblcontent']['content_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Name'); ?></dt>
		<dd>
			<?php echo h($tblcontent['Tblcontent']['content_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Desc'); ?></dt>
		<dd>
			<?php echo h($tblcontent['Tblcontent']['content_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Creatdate'); ?></dt>
		<dd>
			<?php echo h($tblcontent['Tblcontent']['content_creatdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Status'); ?></dt>
		<dd>
			<?php echo h($tblcontent['Tblcontent']['content_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Modifydate'); ?></dt>
		<dd>
			<?php echo h($tblcontent['Tblcontent']['content_modifydate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tblcontent'), array('action' => 'edit', $tblcontent['Tblcontent']['content_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tblcontent'), array('action' => 'delete', $tblcontent['Tblcontent']['content_id']), null, __('Are you sure you want to delete # %s?', $tblcontent['Tblcontent']['content_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tblcontents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tblcontent'), array('action' => 'add')); ?> </li>
	</ul>
</div>
