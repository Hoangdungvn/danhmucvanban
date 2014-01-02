<div class="doctypes form">
<?php echo $this->Form->create('Doctype'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Doctype'); ?></legend>
	<?php
		echo $this->Form->input('doctype_id');
        echo $this->Form->input('doctype_name',array('label' => 'Tên loại văn bản'));
        echo $this->Form->input(
            'doctype_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả")
        );
        echo $this->Form->input('doctype_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái'
        ));
        echo $this->Form->input('doctype_order',array('label' => 'Thứ tự sắp xếp'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Doctype.doctype_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Doctype.doctype_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Doctypes'), array('action' => 'index')); ?></li>
	</ul>
</div>
