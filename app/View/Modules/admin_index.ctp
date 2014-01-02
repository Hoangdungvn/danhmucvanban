<div class="tblmodules index">
	<h2><?php echo __('Modules'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr style="background: #e7e7e7;">
			<th><?php echo $this->Paginator->sort('module_id',"Mã module"); ?></th>
			<th><?php echo $this->Paginator->sort('module_name','Tên module'); ?></th>
			<th><?php echo $this->Paginator->sort('module_desc', "Mô tả"); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($modules as $tblmodule): ?>
	<tr>
		<td><?php echo h($tblmodule['Module']['module_id']); ?>&nbsp;</td>
		<td><?php echo h($tblmodule['Module']['module_name']); ?>&nbsp;</td>
        <td><?php echo html_entity_decode($tblmodule['Module']['module_desc'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $tblmodule['Module']['module_id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $tblmodule['Module']['module_id']), null, __('Bạn có muốn xóa module %s?', $tblmodule['Module']['module_name'])); ?>
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
		<li><?php echo $this->Html->link(__('New Module'), array('action' => 'add')); ?></li>
	</ul>
</div>
