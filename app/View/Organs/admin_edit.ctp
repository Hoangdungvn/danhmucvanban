<div class="organs form">
<?php echo $this->Form->create('Organ'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Organ'); ?></legend>
	<?php
		echo $this->Form->input('organ_id');
        echo $this->Form->input('organ_name',array('label'=>'Tên cơ quan'));
        echo $this->Form->input(
            'organ_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả")
        );
        echo $this->Form->input('organ_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái'
        ));
        echo $this->Form->input('organ_order',array('label'=>'Thứ tự sắp xếp'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Sửa')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Organ.organ_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Organ.organ_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Organs'), array('action' => 'index')); ?></li>
	</ul>
</div>
