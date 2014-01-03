<div class="cats index">
	<h2><?php echo __('Quản lý lĩnh vực'); ?></h2>
    <div class="row">
        <div class="col-sm-12"><div class="pull-right">
            <div class="dataTables_filter" id="datatable_filter">
                <?php echo $this->Html->link(__('Thêm'), array('action' => 'add'), array("class"=>"btn btn-primary btn-add")); ?>
                <div class="input-group">
                    <form method="post" action="<?php echo $this->webroot.'admin/cats/search';?>" id="CatsSearchForm">
                        <input type="text" class="form-control" placeholder="Tìm kiếm tên, mô tả" name="text_search" value="<?php echo $text_search;?>">
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
			<th><?php echo 'Mã'; ?></th>
			<th><?php echo 'Lĩnh vực' ?></th>
			<th><?php echo 'Mô tả' ?></th>
			<th><?php echo 'Trạng thái' ?></th>
			<th><?php echo "sắp xếp" ?></th>
			<th class="actions" width="115px"><?php echo __('Chức năng'); ?></th>
	</tr>
    <?php if($cats):?>
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
    <?php else:?>
        <tr><td colspan="7">Không tìm thấy kết quả</td></tr>
    <?php endif;?>
	</table>

</div>

