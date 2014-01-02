<div class="cats form">
<?php echo $this->Form->create('Cat'); ?>
	<fieldset>
		<legend><?php echo __('Thêm lĩnh vực'); ?></legend>
	<?php
		echo $this->Form->input('cat_name' ,array(
            'label' => 'Tên lĩnh vực <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'Tên lĩnh vực'
        ));
        echo $this->Form->input(
            'cat_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả")
        );
        echo $this->Form->input('cat_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control'
        ));
		echo $this->Form->input('cat_order',array(
            'label' => 'Thứ tự sắp xếp',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'Điền số thứ tự'
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Thêm')); ?>
</div>
