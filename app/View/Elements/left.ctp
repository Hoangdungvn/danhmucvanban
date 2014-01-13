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

<div class="left_menu">
    <!--List Loại Văn Bản-->
    <div class="menu_doc">
        <p><?php echo __("Điều ước quốc tế") ?></p>
        <ul>
            <?php foreach($left_menu['cat'] as $_cat_item) : ?>
            <li>
                <?php echo $this->Html->link($_cat_item['Cat']['cat_name'],array('controller'=>'documents','action'=>'list_cats',$_cat_item['Cat']['cat_id'])); ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!--End List Loại Văn Bản-->

    <!--List Loại Văn Bản-->
    <div class="menu_doc">
        <p><?php echo __("Quản lý ODA") ?></p>
        <ul>
            <?php foreach($left_menu['doctype'] as $_doctype_item) : ?>
            <li>
                <?php echo $this->Html->link($_doctype_item['Doctype']['doctype_name'],array('controller'=>'documents','action'=>'list_doctypes',$_doctype_item['Doctype']['doctype_id'])); ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!--End List Loại Văn Bản-->

    <!--List Cơ quan ban hành-->
    <div class="menu_doc">
        <p><?php echo __("Cơ Quan Ban Hành ") ?></p>
        <ul>
            <?php foreach($left_menu['organ'] as $_organ_item) : ?>
                <li>
                    <?php echo $this->Html->link($_organ_item['Organ']['organ_name'],array('controller'=>'documents','action'=>'list_organs',$_organ_item['Organ']['organ_id'])); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!--End List Cơ Quan ban hành-->






</div>