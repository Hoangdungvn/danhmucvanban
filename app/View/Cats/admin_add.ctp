<?php echo $this->Html->addCrumb('Danh sách danh mục văn bản','/admin/cats') ?>
<?php echo $this->Html->addCrumb('Thêm danh mục') ?>

<div class="cats form">
<?php echo $this->Form->create('Cat'); ?>
	<fieldset>
		<legend><?php echo __('Thêm Danh Mục'); ?></legend>
	<?php
		echo $this->Form->input('cate_name' ,array(
            'label' => 'Tên lĩnh vực <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'Tên lĩnh vực'
        ));
        echo $this->Form->input(
            'cate_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả")
        );
        echo $this->Form->input('cate_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control'
        ));
		echo $this->Form->input('cate_order',array(
            'label' => 'Thứ tự sắp xếp',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'Điền số thứ tự'
        ));
	?>
        <div class="form-group required">
            <label for="parentId">Danh Mục Văn Bản <em>*</em></label>
            <select name="data[Cat][parent_id]" parsley-trigger="change" class="form-control" id="parentId">
                <option value="0"><?php echo __('Chọn Danh mục cha') ?></option>
                <?php foreach ($listCat as $key => $val):?>
                    <?php
                    $numRepeat = $val['level'];
                    $char = '';
                    if ($numRepeat > 0) {
                        $char .= str_repeat('---', $numRepeat);
                    }
                    ?>
                    <option value="<?php echo $val['cate_id'] ?>"><?php echo $char . ' ' . $val['cate_name']; ?></option>
                <?php endforeach;?>
            </select>
        </div>
	</fieldset>
<?php echo $this->Form->end(__('Thêm')); ?>
</div>
