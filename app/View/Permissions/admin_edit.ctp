<div class="organs form">
<?php echo $this->Form->create('Organ'); ?>
	<fieldset>
		<legend><?php echo __('Sửa cơ quan ban hành'); ?></legend>
	<?php
		echo $this->Form->input('organ_id');
	?>
        <div class="form-group">
            <label for="PermisstionUserId">Tên người dùng <em>*</em></label>
            <select name="userid" parsley-trigger="change" class="form-control" id="PermisstionUserId">
                <option value="<?php echo $permissions['User']['user_id'];?>"><?php echo $permissions['User']['user_fullname'];?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="PermisstionModuleId">Tên module <em>*</em></label>
            <select name="moduleid" parsley-trigger="change" class="form-control" id="PermisstionModuleId">
                <option value="<?php echo $permissions['Module']['module_id'];?>"><?php echo $permissions['Module']['module_name'];?></option>
            </select>
        </div>
        <div class="form-group">
            <?php $perm = explode(",",$permissions["Permission"]["permission_number"]);?>
            <label for="PermisstionModuleId">Quyền <em>*</em></label>
            <input type="checkbox" name="permission_view" id="permission_view" value="1" <?php if($perm[0]):?>checked="checked"<?php endif;?>><span>Xem</span>
            <input type="checkbox" name="permission_add" value="2" id="permission_add" <?php if( isset($perm[1])):?>checked="checked"<?php endif;?> ><span>Thêm</span>
            <input type="checkbox" name="permission_update" id="permission_update" value="3" <?php if(isset($perm[2])):?>checked="checked"<?php endif;?> ><span>Sửa</span>
            <input type="checkbox" name="permission_delete" id="permission_delete" value="4" <?php if(isset($perm[3])):?>checked="checked"<?php endif;?> ><span>Xóa</span>
        </div>
        <script type="text/javascript">
//            jQuery(document).ready(function(){
//                jQuery("#permission_add").click(function(){
//                    jQuery("#permission_view").prop('checked', true);
//                    jQuery("#permission_update").prop('checked', true);
//                });
//                jQuery("#permission_update").click(function(){
//                    jQuery("#permission_view").prop('checked', true);
//                    jQuery("#permission_add").prop('checked', true);
//                });
//                jQuery("#permission_delete").click(function(){
//                    jQuery("#permission_view").prop('checked', true);
//                    jQuery("#permission_add").prop('checked', true);
//                    jQuery("#permission_update").prop('checked', true);
//                });
//            });
        </script>
	</fieldset>
<?php echo $this->Form->end(__('Sửa')); ?>
</div>

