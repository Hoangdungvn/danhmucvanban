<div class="organs form">
<?php echo $this->Form->create('Organ'); ?>
	<fieldset>
		<legend><?php echo __('Thêm cơ quan ban hành'); ?></legend>
	<?php
		echo $this->Form->input('organ_name',array(
            'label'=>'Tên cơ quan <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'Tên cơ quan',
        ));
        echo $this->Form->input(
            'organ_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả")
        );
        echo $this->Form->input('organ_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control'
        ));
		echo $this->Form->input('organ_order',array(
            'label'=>'Thứ tự sắp xếp <em>*</em>',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control',
            'placeholder' => 'Điền số thứ tự',
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Thêm')); ?>
</div>