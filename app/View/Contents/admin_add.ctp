<div class="Contents form">
<?php echo $this->Form->create('Content'); ?>
	<fieldset>
		<legend><?php echo __('Quản lý nội dung trang'); ?></legend>
	<?php
        echo $this->Form->input(
            'content_name',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Tên trang <em>*</em>")
        );
        echo $this->Form->input(
            'content_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả <em>*</em>")
        );
		echo $this->Form->input('content_creatdate',array(
            "class"=>"creatdate",
            "label"=>"Ngày tạo",
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control'
        ));
        echo $this->Form->input('content_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control'
        ));
		echo $this->Form->input('content_modifydate',array(
            "class"=>"modifydate",
            "label"=>"Ngày cập nhật",
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control'
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Thêm')); ?>
</div>


