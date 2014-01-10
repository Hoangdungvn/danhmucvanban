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
            <?php foreach($modules as $module):?>
                <div>
                    <select name="moduleid_<?php echo $module['Module']['module_id'];?>" parsley-trigger="change" class="form-control" id="PermisstionModuleId">
                        <option value="<?php echo $module['Module']['module_id'];?>"><?php echo $module['Module']['module_name'];?></option>
                    </select>
                    <label for="PermisstionModuleId">Quyền <em>*</em></label>
                    <input type="checkbox" name="permission_view_<?php echo $module['Module']['module_id'];?>" class="permission_view" value="1" checked="checked"><span>Xem</span>
                    <input type="checkbox" name="permission_add_<?php echo $module['Module']['module_id'];?>" value="2" class="permission_add" ><span>Thêm</span>
                    <input type="checkbox" name="permission_update_<?php echo $module['Module']['module_id'];?>" class="permission_update" value="3" ><span>Sửa</span>
                    <input type="checkbox" name="permission_delete_<?php echo $module['Module']['module_id'];?>" class="permission_delete" value="4" ><span>Xóa</span>
                </div>
            <?php endforeach;?>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery("#permission_add").click(function(){
                    jQuery("#permission_view").prop('checked', true);
                    jQuery("#permission_update").prop('checked', true);
                });
                jQuery("#permission_update").click(function(){
                    jQuery("#permission_view").prop('checked', true);
                    jQuery("#permission_add").prop('checked', true);
                });
                jQuery("#permission_delete").click(function(){
                    jQuery("#permission_view").prop('checked', true);
                    jQuery("#permission_add").prop('checked', true);
                    jQuery("#permission_update").prop('checked', true);
                });
            });
        </script>
	</fieldset>
<?php echo $this->Form->end(__('Thêm')); ?>
</div>