<div class="organs index">
	<h2><?php echo __('Organs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('organ_id',"Mã cơ quan"); ?></th>
			<th><?php echo $this->Paginator->sort('organ_name','Tên cơ quan'); ?></th>
			<th><?php echo $this->Paginator->sort('organ_desc','Mô tả'); ?></th>
			<th><?php echo $this->Paginator->sort('organ_status','Trạng thái'); ?></th>
			<th><?php echo $this->Paginator->sort('organ_order','Thứ tự sắp xếp'); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($organs as $organ): ?>
	<tr>
		<td><?php echo h($organ['Organ']['organ_id']); ?>&nbsp;</td>
		<td><?php echo h($organ['Organ']['organ_name']); ?>&nbsp;</td>
		<td><?php echo html_entity_decode($organ['Organ']['organ_desc'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?php echo ($organ['Organ']['organ_status'] == 1)? "Hiển thị" :"Ẩn";?>&nbsp;</td>
		<td><?php echo h($organ['Organ']['organ_order']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $organ['Organ']['organ_id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $organ['Organ']['organ_id']), null, __('Bạn có muốn xóa cơ quan có id = %s?', $organ['Organ']['organ_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Trang {:page}/{:pages}, Hiển thị {:current} bản ghi trên {:count} total, Bắt đầu từ bản ghi {:start}, đến {:end}')
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
		<li><?php echo $this->Html->link(__('New Organ'), array('action' => 'add')); ?></li>
	</ul>
</div>
