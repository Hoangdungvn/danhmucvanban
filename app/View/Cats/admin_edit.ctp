<div class="cats form">
<?php echo $this->Form->create('Cat'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Cat'); ?></legend>
	<?php
		echo $this->Form->input('cat_id');
        echo $this->Form->input('cat_name' ,array('label' => 'Tên lĩnh vực'));
        echo $this->Form->input(
            'cat_desc',
            array('type' => 'textarea', 'escape' => false,'class'=>'ckeditor',"label"=>"Mô tả")
        );
        echo $this->Form->input('cat_status', array(
            'options' => array("0" => "Ẩn" ,"1" =>"Hiển thị"),
            'default' => '1',
            'label' =>'Trạng thái'
        ));
        echo $this->Form->input('cat_order',array('label' => 'Thứ tự sắp xếp'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cat.cat_id')), null, __('Bạn có muốn xóa lĩnh vực có id = %s?', $this->Form->value('Cat.cat_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cats'), array('action' => 'index')); ?></li>
	</ul>
</div>
