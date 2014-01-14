<div class="col-md-12">
    <div class="block-flat">
        <div class="content">
            <?php if(isset($content['Content'])): ?>
                <?php
                    echo $content['Content']['content_desc'] ;
                ?>
            <?php else: ?>
                <p><?php echo "Trang này không tồn tại!" ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
