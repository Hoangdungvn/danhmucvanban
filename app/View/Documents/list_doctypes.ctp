<div class="organs view">
    <?php if($doctypes):?>
<h2><?php echo __('Danh sách văn bản của loại văn bản '.$doctype_name["Doctype"]['doctype_name']); ?></h2>
    <ul class="document_organ">
        <?php foreach($doctypes as $doctype):?>
            <li>
                <p><a href="<?php echo $this->webroot.'documents/view/'.$doctype['Document']['docment_id'].'?doctype='.$doctype['Document']['doctype_id']; ?>"><?php echo $doctype['Document']['docment_name'];?></a></p>
            </li>
        <?php endforeach;?>
    </ul>
<?php else:?>
    <h2><?php echo __('Không có văn bản nào được tìm thấy'); ?></h2>
<?php endif;?>
</div>

