<?php echo $this->Html->addCrumb('Danh sách danh mục văn bản') ?>
<div class="cats index">
	<h2><?php echo __('Danh Mục Văn Bản'); ?></h2>
    <div class="row">
        <div class="col-sm-12"><div class="pull-right">
            <div class="dataTables_filter" id="datatable_filter">
                <?php echo $this->Html->link(__('Thêm'), array('action' => 'add'), array("class"=>"btn btn-primary btn-add")); ?>
                <div class="input-group">
                    <form method="post" action="<?php echo $this->webroot.'admin/cats/search';?>" id="CatsSearchForm">
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
	<tr style="background: #e7e7e7;" align="center">
			<th><?php echo $this->Paginator->sort('cate_id','Mã'); ?></th>
			<th><?php echo $this->Paginator->sort('cate_name','Lĩnh vực'); ?></th>
			<th><?php echo $this->Paginator->sort('cate_desc','Mô tả'); ?></th>
			<th><?php echo $this->Paginator->sort('cate_status','Trạng thái'); ?></th>
			<th><?php echo $this->Paginator->sort('cate_order',"sắp xếp"); ?></th>
			<th class="actions" width="115px"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($cats as $cat): ?>
	<tr>
		<td><?php echo h($cat['Cat']['cate_id']); ?>&nbsp;</td>
		<td><?php echo h($cat['Cat']['cate_name']) ?></td>
		<td><?php echo html_entity_decode($cat['Cat']['cate_desc'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?php echo ($cat['Cat']['cate_status'] == 1)? "Hiển thị" : "Ẩn"; ?>&nbsp;</td>
		<td><?php echo h($cat['Cat']['cate_order']); ?>&nbsp;</td>
		<td class="actions" >
            <?php echo $this->Html->link('<i class="fa fa-pencil"></i>',array('action' => 'edit', $cat['Cat']['cate_id']),array('class'=>'label label-default','escape'=>false)); ?>
            <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'delete',$cat['Cat']['cate_id']),array('class'=>'label label-danger','escape'=>false)); ?>
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

