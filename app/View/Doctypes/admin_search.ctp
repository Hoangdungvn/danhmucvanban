<div class="doctypes index">
	<h2><?php echo __('Doctypes'); ?></h2>
    <div class="row">
        <div class="col-sm-12"><div class="pull-right">
            <div class="dataTables_filter" id="datatable_filter">
                <?php echo $this->Html->link(__('Thêm'), array('action' => 'add'), array("class"=>"btn btn-primary btn-add")); ?>
                <div class="input-group">
                    <form method="post" action="<?php echo $this->webroot.'admin/doctypes/search';?>" id="doctypesSearchForm">
                        <input type="text" placeholder="Tìm kiếm tên, mô tả" class="form-control" name="text_search" value="<?php echo $text_search;?>">
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
			<th><?php 'Mã loại văn bản' ?></th>
			<th><?php 'Tên loại văn bản' ?></th>
			<th><?php "Mô tả" ?></th>
			<th><?php "Trạng thái" ?></th>
			<th><?php "Sắp xếp" ?></th>
			<th class="actions" width="115px"><?php echo __('Chức năng'); ?></th>
	</tr>
    <?php if($doctypes):?>
	<?php foreach ($doctypes as $doctype): ?>
	<tr>
		<td><?php echo h($doctype['Doctype']['doctype_id']); ?>&nbsp;</td>
		<td><?php echo h($doctype['Doctype']['doctype_name']); ?>&nbsp;</td>
		<td><?php echo html_entity_decode($doctype['Doctype']['doctype_desc'], ENT_QUOTES, 'UTF-8');?></td>
		<td><?php echo ($doctype['Doctype']['doctype_status']== 1)? "Hiển thị" : "Ẩn"; ?>&nbsp;</td>
		<td><?php echo h($doctype['Doctype']['doctype_order']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $doctype['Doctype']['doctype_id'])); ?>
            <?php echo $this->Html->link('<i class="fa fa-pencil"></i>',array('action' => 'edit', $doctype['Doctype']['doctype_id']),array('class'=>'label label-default','escape'=>false)); ?>
            <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'delete',$doctype['Doctype']['doctype_id']),array('class'=>'label label-danger','escape'=>false)); ?>
		</td>
	</tr>
<?php endforeach; ?>
    <?php else:?>
        <tr>
            <td colspan="7">Không tìm thấy kết quả</td>
        </tr>
    <?php endif;?>
	</table>

</div>
