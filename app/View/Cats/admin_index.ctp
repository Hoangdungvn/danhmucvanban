<div class="cats index">
	<h2><?php echo __('Quản lý lĩnh vực'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr style="background: #e7e7e7;" align="center">
			<th><?php echo $this->Paginator->sort('cat_id','Mã'); ?></th>
			<th><?php echo $this->Paginator->sort('cat_name','Lĩnh vực'); ?></th>
			<th><?php echo $this->Paginator->sort('cat_desc','Mô tả'); ?></th>
			<th><?php echo $this->Paginator->sort('cat_status','Trạng thái'); ?></th>
			<th><?php echo $this->Paginator->sort('cat_order',"sắp xếp"); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($cats as $cat): ?>
	<tr>
		<td><?php echo h($cat['Cat']['cat_id']); ?>&nbsp;</td>
		<td><?php echo h($cat['Cat']['cat_name']); ?>&nbsp;</td>
		<td><?php echo html_entity_decode($cat['Cat']['cat_desc'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?php echo h($cat['Cat']['cat_status']); ?>&nbsp;</td>
		<td><?php echo h($cat['Cat']['cat_order']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cat['Cat']['cat_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cat['Cat']['cat_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cat['Cat']['cat_id']), null, __('Bạn có muốn xóa lĩnh vực có id = %s?', $cat['Cat']['cat_id'])); ?>
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
        if($this->Paginator->numbers(array('separator' => ' '))){
            echo $this->Paginator->prev('<< ' . __('Lùi '), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ' '));
            echo $this->Paginator->next(__(' Tiến') . ' >>', array(), null, array('class' => 'next disabled'));
        }
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cat'), array('action' => 'add')); ?></li>
	</ul>
</div>
