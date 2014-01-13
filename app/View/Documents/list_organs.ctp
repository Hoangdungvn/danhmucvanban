<div class="organs view">
    <?php if ($documents): ?>
    <h2><?php echo __('Danh sách văn bản do cơ quan ' . $organ_name["Organ"]['organ_name']); ?></h2>
    <ul class="document_organ">
        <?php foreach ($documents as $document): ?>
        <li>
            <p>
                <a href="<?php echo $this->webroot . 'documents/view/' . $document['Document']['docment_id'].'?organ='.$document['Document']['organ_id']; ?>"><?php echo $document['Document']['docment_name'];?></a>
            </p>
        </li>
        <?php endforeach;?>
    </ul>
    <?php else: ?>
    <h2><?php echo __('Không có văn bản nào được tìm thấy'); ?></h2>
    <?php endif;?>
</div>

