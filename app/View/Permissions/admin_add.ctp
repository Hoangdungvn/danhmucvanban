<div class="permissions form">
<?php echo $this->Form->create('Permisstion',array("class"=>"form-horizontal group-border-dashed")); ?>
	<fieldset>
		<legend><?php echo __('Thêm quyền'); ?></legend>
        <div class="form-group">
            <label for="PermisstionUserId">Tên người dùng <em>*</em></label>
            <select name="userid" parsley-trigger="change" class="form-control" id="PermisstionUserId">
                <?php foreach($users as $user):?>
                    <option value="<?php echo $user['User']['user_id'];?>"><?php echo $user['User']['user_fullname'];?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="PermisstionModuleId">Tên module <em>*</em></label>
            <select name="moduleid" parsley-trigger="change" class="form-control" id="PermisstionModuleId">
                <?php foreach($modules as $module):?>
                <option value="<?php echo $module['Module']['module_id'];?>"><?php echo $module['Module']['module_name'];?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="PermisstionModuleId">Quyền <em>*</em></label>
            <input type="checkbox" name="permission_view" value="1" checked="checked"><span>Xem</span>
            <input type="checkbox" name="permission_add" value="2" ><span>Thêm</span>
            <input type="checkbox" name="permission_update" value="3" ><span>Sửa</span>
            <input type="checkbox" name="permission_delete" value="4" ><span>Xóa</span>
        </div>


	</fieldset>
<?php echo $this->Form->end(__('Thêm')); ?>
</div>