<?php echo $this->Html->addCrumb('Thêm trang mới') ?>
<div class="Contents form">
<?php echo $this->Form->create('Content'); ?>
	<fieldset>
		<legend><?php echo __('Thêm Trang Mới'); ?></legend>
	<?php
        echo $this->Form->input(
            'content_name',array(
                "label"=>"Tên trang <em>*</em>",
                'div' => 'form-group',
                'class'    => 'form-control'

            ));

        echo $this->Form->input('content_url_key',array(
            'label' => "Đường Dẫn <em>*</em>",
            'div' => 'form-group',
            'class'    => 'form-control',
            'after'  => '<span class="comment">Ví Dụ: gioi-thieu, lien-he ...</span>'
        ));
        echo $this->Form->input(
            'content_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả <em>*</em>")
        );
        echo $this->Form->input('content_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái',
            'div' => 'form-group',
            'parsley-trigger' => 'change',
            'required' => '',
            'class'    => 'form-control'
        ));
        echo $this->Form->button('Thêm', array('type' => 'submit','class'=>'btn btn-primary'));

        ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>


