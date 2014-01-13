
<?php echo $this->Html->addCrumb('Xem chi tiết') ?>
<div class="row">
    <h3 class="text-center">Thông tin chi tiết về văn bản</h3>
    <table class="table .table-responsive">
        <tbody>
        <tr>
            <td class="col-md-3 col-sm-3">Số / Ký hiệu</td>
            <td class="col-md-9 col-sm-9"><?php echo $document['Document']['document_symbol'] ?></td>
        </tr>
        <tr>
            <td class="col-md-3 col-sm-3">Tên Văn bản</td>
            <td class="col-md-9 col-sm-9"><?php echo $document['Document']['docment_name'] ?></td>
        </tr>
        <tr>
            <td class="col-md-3 col-sm-3" >Mô tả về văn bản</td>
            <td class="col-md-9 col-sm-9"><?php echo $document['Document']['document_desc'] ?></td>
        </tr>
        <tr>
            <td class="col-md-3 col-sm-3">Loại Văn Bản</td>
            <td class="col-md-9 col-sm-9"><?php echo $this->Html->link($document['Doctype']['doctype_name'], array('controller' => 'doctypes', 'action' => 'view', $document['Doctype']['doctype_id'])); ?>
            </td>
        </tr>
        <tr>
            <td class="col-md-3 col-sm-3">Cơ Quan Ban Hành</td>
            <td class="col-md-9 col-sm-9"><?php echo $this->Html->link($document['Organ']['organ_name'], array('controller' => 'organs', 'action' => 'view', $document['Organ']['organ_id'])); ?>
            </td>
        </tr>
        <tr>
            <td class="col-md-3 col-sm-3">Lĩnh Vực</td>
            <td class="col-md-9 col-sm-9"><?php echo $this->Html->link($document['Cat']['cate_name'], array('controller' => 'cats', 'action' => 'view', $document['Cat']['cate_id'])); ?>
            </td>
        </tr>
        <tr>
            <td class="col-md-3 col-sm-3">Ngày Ký</td>
            <td class="col-md-9 col-sm-9"><?php echo h($document['Document']['document_signdate']); ?></td>
        </tr>
        <tr>
            <td class="col-md-3 col-sm-3">Người Ký</td>
            <td class="col-md-9 col-sm-9"><?php echo h($document['Document']['document_signer']); ?></td>
        </tr>
        <?php if($document['Document']['document_file']): ?>
        <tr>
            <td class="col-md-3 col-sm-3">File Đính Kèm</td>
            <td class="col-md-9 col-sm-9">
                <?php
                    echo $this->Html->link(
                        'Xem',
                        $this->webroot.$document['Document']['document_file'],
                        array('class' => 'button', 'target' => '_blank')
                    );
                 ?>
            </td>
        </tr>
        <?php endif;?>
        <tr>
            <td class="col-md-3 col-sm-3">Trạng Thái</td>
            <td class="col-md-9 col-sm-9"><?php if($document['Document']['document_status']){echo "Hiển thị";} else {echo "Ẩn";} ?></td>
        </tr>
        <tr>
            <td class="col-md-3 col-sm-3">Số lượt xem</td>
            <td class="col-md-9 col-sm-9"><?php echo h($document['Document']['document_view']); ?></td>
        </tr>
        </tbody>
    </table>
</div>
