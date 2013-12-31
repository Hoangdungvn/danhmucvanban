<div class="cats view">
<h2><?php echo __('Cat'); ?></h2>
	<dl>
		<dt><?php echo __('Cat Id'); ?></dt>
		<dd>
			<?php echo h($cat['Cat']['cat_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat Name'); ?></dt>
		<dd>
			<?php echo h($cat['Cat']['cat_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat Desc'); ?></dt>
		<dd>
			<?php echo h($cat['Cat']['cat_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat Status'); ?></dt>
		<dd>
			<?php echo h($cat['Cat']['cat_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat Order'); ?></dt>
		<dd>
			<?php echo h($cat['Cat']['cat_order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cat'), array('action' => 'edit', $cat['Cat']['cat_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cat'), array('action' => 'delete', $cat['Cat']['cat_id']), null, __('Are you sure you want to delete # %s?', $cat['Cat']['cat_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cat'), array('action' => 'add')); ?> </li>
	</ul>
</div>
