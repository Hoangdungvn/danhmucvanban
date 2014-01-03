<div class="tblmodules index">
	<h2><?php echo __('Modules'); ?></h2>
    <div class="row">
        <div class="col-sm-12"><div class="pull-right">
            <div class="dataTables_filter" id="datatable_filter">
                <?php echo $this->Html->link(__('Thêm'), array('action' => 'add'), array("class"=>"btn btn-primary btn-add")); ?>
                <div class="input-group">
                    <form method="post" action="<?php echo $this->webroot.'admin/modules/search';?>" id="form-search-modules">
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
			<th><?php echo "Mã module"; ?></th>
			<th><?php echo 'Tên module'; ?></th>
			<th><?php echo "Mô tả"; ?></th>
			<th class="actions" width="115px"><?php echo __('Chức năng'); ?></th>
	</tr>
    <?php if($modules):?>
	<?php foreach ($modules as $tblmodule): ?>
	<tr>
		<td><?php echo h($tblmodule['Module']['module_id']); ?>&nbsp;</td>
		<td><?php echo h($tblmodule['Module']['module_name']); ?>&nbsp;</td>
        <td><?php echo html_entity_decode($tblmodule['Module']['module_desc'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td class="actions">
            <?php echo $this->Html->link('<i class="fa fa-pencil"></i>',array('action' => 'edit', $tblmodule['Module']['module_id']),array('class'=>'label label-default','escape'=>false)); ?>
            <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'delete',$tblmodule['Module']['module_id']),array('class'=>'label label-danger','escape'=>false)); ?>

		</td>
	</tr>
        <?php endforeach; ?>
    <?php else:?>
        <tr><td colspan="7">Không thấy kết quả tìm kiếm</td></tr>
        <?php endif;?>

	</table>
</div>

