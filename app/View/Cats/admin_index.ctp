<div class="cats index">
	<h2><?php echo __('Quản lý lĩnh vực'); ?></h2>
    <div class="row">
        <div class="col-sm-12"><div class="pull-right">
            <div class="dataTables_filter" id="datatable_filter">
                <?php echo $this->Html->link(__('Thêm'), array('action' => 'add'), array("class"=>"btn btn-primary btn-add")); ?>
                <label><input type="text" aria-controls="datatable" class="form-control" placeholder="Search"></label>
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
	<tr style="background: #e7e7e7;" align="center">
			<th><?php echo $this->Paginator->sort('cat_id','Mã'); ?></th>
			<th><?php echo $this->Paginator->sort('cat_name','Lĩnh vực'); ?></th>
			<th><?php echo $this->Paginator->sort('cat_desc','Mô tả'); ?></th>
			<th><?php echo $this->Paginator->sort('cat_status','Trạng thái'); ?></th>
			<th><?php echo $this->Paginator->sort('cat_order',"sắp xếp"); ?></th>
			<th class="actions" width="115px"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($cats as $cat): ?>
	<tr>
		<td><?php echo h($cat['Cat']['cat_id']); ?>&nbsp;</td>
		<td><?php echo h($cat['Cat']['cat_name']); ?>&nbsp;</td>
		<td><?php echo html_entity_decode($cat['Cat']['cat_desc'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?php echo ($cat['Cat']['cat_status'] == 1)? "Hiển thị" : "Ẩn"; ?>&nbsp;</td>
		<td><?php echo h($cat['Cat']['cat_order']); ?>&nbsp;</td>
		<td class="actions" >
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cat['Cat']['cat_id'])); ?>
            <?php echo $this->Html->link('<i class="fa fa-pencil"></i>',array('action' => 'edit', $cat['Cat']['cat_id']),array('class'=>'label label-default','escape'=>false)); ?>
            <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'delete',$cat['Cat']['cat_id']),array('class'=>'label label-danger','escape'=>false)); ?>
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
        if($this->Paginator->numbers(array('separator' => ' '))){
            echo $this->Paginator->prev('<< ' . __('Lùi '), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ' '));
            echo $this->Paginator->next(__(' Tiến') . ' >>', array(), null, array('class' => 'next disabled'));
        }
	?>
	</div>
</div>

