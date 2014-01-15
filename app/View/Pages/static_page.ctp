<div class="col-md-12">
    <div class="block-flat">
        <div class="box-content">
            <?php if (isset($content['Content'])): ?>
            <div class="content-title">
                <h3><?php echo $content['Content']['content_name'];?></h3>
            </div>
            <div class="page-content">
                <?php
                    echo $content['Content']['content_desc'];
                ?>
            </div>
            <div class="page-info">

                <span><i>Ngày tạo:<?php echo date_format(date_create_from_format('Y-m-d', $content['Content']['content_creatdate']), 'd-m-Y');?></i></span>
            </div>
            <?php else: ?>
            <p><?php echo "Trang này không tồn tại!" ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
