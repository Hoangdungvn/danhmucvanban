<div class="tblusers index">
	<h2><?php echo __('Quản lý người dùng'); ?></h2>
    <div class="row">
        <div class="col-sm-12"><div class="pull-right">
            <div class="dataTables_filter" id="datatable_filter">
                <?php echo $this->Html->link(__('Thêm'), array('action' => 'add'), array("class"=>"btn btn-primary btn-add")); ?>
                <div class="input-group">
                    <form method="post" action="<?php echo $this->webroot.'admin/users/search';?>" id="UsersSearchForm">
                        <input type="text" placeholder="Tìm kiếm tên, email" class="form-control" name="text_search">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                        </span>
                    </form>
                </div>
            </div>
        </div>
            <div class="pull-left">
                <div id="datatable_length" class="dataTables_length">
                    <label>Hiển thị <select size="1" name="datatable_length" aria-controls="datatable" class="form-control"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> bản ghi</label>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-documents">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id',"Mã người dùng"); ?></th>
			<th><?php echo $this->Paginator->sort('user_fullname',"Họ tên"); ?></th>
			<th><?php echo $this->Paginator->sort('user_email',"Email"); ?></th>
			<th><?php echo $this->Paginator->sort('user_status',"Trạng thái"); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($users as $tbluser): ?>
	<tr>
		<td><?php echo h($tbluser['User']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($tbluser['User']['user_fullname']); ?>&nbsp;</td>
		<td><?php echo h($tbluser['User']['user_email']); ?>&nbsp;</td>
		<td><?php echo ($tbluser['User']['user_status'] == 1)? "Hiển thị":"Ẩn"; ?>&nbsp;</td>
		<td class="actions">
            <?php echo $this->Html->link('<i class="fa fa-pencil"></i>',array('action' => 'edit',$tbluser['User']['user_id']),array('class'=>'label label-default','escape'=>false)); ?>
            <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'delete',$tbluser['User']['user_id']),array('class'=>'label label-danger','escape'=>false)); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Trang {:page}/{:pages}, Hiển thị {:current} bản ghi trên tổng số {:count} , bắt đầu từ bản ghi thứ {:start} đến {:end}')
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

