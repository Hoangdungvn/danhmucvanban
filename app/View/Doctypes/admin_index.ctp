<div class="doctypes index">
	<h2><?php echo __('Doctypes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('doctype_id','Mã loại văn bản'); ?></th>
			<th><?php echo $this->Paginator->sort('doctype_name','Tên loại văn bản'); ?></th>
			<th><?php echo $this->Paginator->sort('doctype_desc',"Mô tả"); ?></th>
			<th><?php echo $this->Paginator->sort('doctype_status',"Trạng thái"); ?></th>
			<th><?php echo $this->Paginator->sort('doctype_order', "Sắp xếp"); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($doctypes as $doctype): ?>
	<tr>
		<td><?php echo h($doctype['Doctype']['doctype_id']); ?>&nbsp;</td>
		<td><?php echo h($doctype['Doctype']['doctype_name']); ?>&nbsp;</td>
		<td><?php echo html_entity_decode($doctype['Doctype']['doctype_desc'], ENT_QUOTES, 'UTF-8') ?></td>
		<td><?php echo h($doctype['Doctype']['doctype_status']); ?>&nbsp;</td>
		<td><?php echo h($doctype['Doctype']['doctype_order']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $doctype['Doctype']['doctype_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $doctype['Doctype']['doctype_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doctype['Doctype']['doctype_id']), null, __('Bạn có muốn xóa loại vản bản có id = %s?', $doctype['Doctype']['doctype_id'])); ?>
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
        if($this->Paginator->numbers(array('separator' => ''))){
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        }

	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Doctype'), array('action' => 'add')); ?></li>
	</ul>
</div>
