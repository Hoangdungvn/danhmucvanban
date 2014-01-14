<?php
    echo $this->Html->link($this->Html->image("logo-CSDL.gif", array("border" => "0")),'http://vbpl.vn',array(
        'target' => '_blank',
        'title'  => 'Cơ sở dữ liệu quốc gia về văn bản pháp luật',
        'style' => 'text-decoration:none',
        'escape' => false
    ));
?>

<?php
//    echo "<pre>";
//    print_r($left_menu);
//    echo "</pre>";
//?>
<?php if(count($left_menu['cat'])): ?>
    <div class="left_menu">

        <!--List Danh Muc Van Ban-->
        <div class="menu_doc">
            <p><?php echo __("Danh Mục Văn Bản") ?></p>
            <ul id="left-navigation">
                <?php foreach($left_menu['cat'] as $key => $_cat_item)  : ?>
                    <?php
                    $numRepeat = $_cat_item['level'];
                    $_class = "level-".$numRepeat;
                    ?>
                    <li  class = "<?php echo $_class; ?>">
                        <?php echo $this->Html->link( $_cat_item['cate_name'],array('controller'=>'documents','action'=>'list_document','?' => array('cate_id' => $_cat_item['cate_id']))); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!--End Danh Muc Van Ban-->
    </div>
<?php endif; ?>