<div class="doctypes form">
<?php echo $this->Form->create('Doctype'); ?>
	<fieldset>
		<legend><?php echo __('Sửa loại văn bản'); ?></legend>
	<?php
		echo $this->Form->input('doctype_id');
        echo $this->Form->input('doctype_name',array(
            'label' => 'Tên Loại Văn Bản <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'Tên loại văn bản',

        ));
        echo $this->Form->input(
            'doctype_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả <em>*</em>")
        );
        echo $this->Form->input('doctype_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control'
        ));
        echo $this->Form->input('doctype_order',array(
            'label' => 'Thứ tự sắp xếp <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'Điền số thứ tự',
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Sửa')); ?>
</div>

