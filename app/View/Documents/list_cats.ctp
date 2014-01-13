<div class="organs view">
<?php if($cats):?>
<h2><?php echo __('Danh sách văn bản thuộc lĩnh vực '.$cat_name["Cat"]['cat_name']); ?></h2>
    <ul class="document_organ">
        <?php foreach($cats as $cat):?>
            <li>
                <p><a href="<?php echo $this->webroot.'documents/view/'.$cat['Document']['docment_id'].'?cat='.$cat['Document']['cat_id']; ?>"><?php echo $cat['Document']['docment_name'];?></a></p>
            </li>
        <?php endforeach;?>
    </ul>
</div>
<?php else:?>
    <h2><?php echo __('Không có văn bản nào được tìm thấy'); ?></h2>
<?php endif;?>

