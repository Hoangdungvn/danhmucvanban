<div class="permissions index">
	<h2><?php echo __('Quản lý cơ quan'); ?></h2>
    <div class="row">
        <div class="col-sm-12"><div class="pull-right">
            <div class="dataTables_filter" id="datatable_filter">
                <?php echo $this->Html->link(__('Thêm'), array('action' => 'add'), array("class"=>"btn btn-primary btn-add")); ?>
                <div class="input-group">
                    <form method="post" action="<?php echo $this->webroot.'admin/permissions/search';?>" id="PermissionsSearchForm">
                        <input type="text" placeholder="Tìm kiếm tên, mô tả" class="form-control" name="text_search">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                        </span>
                    </form>
                </div>
            </div>
        </div>
            <div class="pull-left">
                <div id="datatable_length" class="dataTables_length">
                    <label>Show <select size="1" name="datatable_length" aria-controls="datatable" class="form-control"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> Rows</label>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-documents">
	<tr style="background: #e7e7e7;">
			<th><?php echo $this->Paginator->sort('permission_id',"Mã quyền"); ?></th>
			<th><?php echo $this->Paginator->sort('user_id','Người dùng'); ?></th>
			<th><?php echo $this->Paginator->sort('mudule_id','Module'); ?></th>
			<th><?php echo $this->Paginator->sort('permission_status','Quyền'); ?></th>
			<th width="115px" class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($permissions as $permission): ?>
	<tr>
		<td><?php echo h($permission['Permission']['permission_id']); ?>&nbsp;</td>
		<td><?php echo h($permission['User']['user_fullname']); ?>&nbsp;</td>
		<td><?php echo h($permission['Module']['module_name']);?>&nbsp;</td>
        <?php
            $perm = explode(",",$permission['Permission']['permission_number']);
            $mess="";
            if($perm[0] != ""){
                $perm[0] = "xem";
                $perm[1] = "";
                $perm[2] = "";
                $perm[3] = "";
            }
            else if($perm[1] != ""){
                $perm[0] = "xem";
                $perm[1] = "Thêm";
                $perm[2] = "";
                $perm[3] = "";
            }else if($perm[2] != ""){
                $perm[0] = "xem";
                $perm[2] = "Sửa";
                $perm[1] = "";
                $perm[3] = "";
            }else if($perm[3] != ""){
                $perm[3] = "Xóa";
                $perm[0] = "Xem";
                $perm[1] = "";
                $perm[2] = "";
            }else{
                $mess = "Không có quyền gì cả";
                $perm[0] = "";
                $perm[1] = "";
                $perm[2] = "";
                $perm[3] = "";
            }
        ?>
		<td><?php echo $mess.$perm[0]." ".$perm[1]." ".$perm[2]." ".$perm[3]; ?>&nbsp;</td>
		<td class="actions">
            <?php echo $this->Html->link('<i class="fa fa-pencil"></i>',array('action' => 'edit',$permission['Permission']['permission_id']),array('class'=>'label label-default','escape'=>false)); ?>
            <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'delete',$permission['Permission']['permission_id']),array('class'=>'label label-danger','escape'=>false)); ?>

		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Trang {:page}/{:pages}, Hiển thị {:current} bản ghi trên tổng số{:count}, Bắt đầu từ bản ghi {:start}, đến {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
        if($this->Paginator->numbers(array('separator' => ''))){
            echo $this->Paginator->prev('<< ' . __('Lùi '), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__(' Tiến') . ' >>', array(), null, array('class' => 'next disabled'));
        }
	?>
	</div>
</div>

