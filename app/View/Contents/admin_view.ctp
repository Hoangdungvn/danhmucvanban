<div class="tblcontents view">
<h2><?php echo __('Chi tiết'); ?></h2>
	<dl>
		<dt><?php echo __('Mã trang'); ?></dt>
		<dd>
			<?php echo h($tblcontent['Content']['content_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tên trang'); ?></dt>
		<dd>
			<?php echo html_entity_decode($tblcontent['Content']['content_name'], ENT_QUOTES, 'UTF-8'); ?>
            &nbsp;
		</dd>
		<dt><?php echo __('Mô tả'); ?></dt>
		<dd>
			<?php echo html_entity_decode($tblcontent['Content']['content_desc'], ENT_QUOTES, 'UTF-8'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ngày tạo'); ?></dt>
		<dd>
			<?php echo h($tblcontent['Content']['content_creatdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trạng thái'); ?></dt>
		<dd>
			<?php echo ($tblcontent['Content']['content_status'] == 1)? "Hiển thị" : "Ẩn"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ngày cập nhật'); ?></dt>
		<dd>
			<?php echo h($tblcontent['Content']['content_modifydate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tblcontent'), array('action' => 'edit', $tblcontent['Content']['content_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tblcontent'), array('action' => 'delete', $tblcontent['Content']['content_id']), null, __('Are you sure you want to delete # %s?', $tblcontent['Content']['content_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tblcontents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tblcontent'), array('action' => 'add')); ?> </li>
	</ul>
</div>
