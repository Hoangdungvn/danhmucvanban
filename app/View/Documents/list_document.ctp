<div class="document-list view">
<?php if ($documents): ?>
    <h2><?php echo __('Danh sách văn bản'); ?></h2>
    <div class="doc_list_title">
    <table class="doc_list_title" id="highlight">
        <colgroup>
            <col width="20%">
            <col width="10%">
            <col width="70%">
        </colgroup>
        <tbody>
            <tr class="doc_list_title_row">
                <td class="doc_list_title_notation"><?php echo __("Số/Ký hiệu") ?></td>
                <td class="doc_list_title_date"><?php echo __("Ngày ban hành") ?></td>
                <td class="doc_list_title_substract"><?php echo __("Trích yếu") ?></td>
            </tr>

            <?php $i=0; foreach($documents as $_document): $i++?>
                <tr <?php if($i % 2):?> class="doc_list_row" <?php endif; ?>>

                    <td><?php echo __($_document['Document']['document_symbol']) ?></td>
                    <td>
                        <?php echo __($_document['Document']['document_signdate']) ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($_document['Document']['docment_name'],array('action' => 'view',$_document['Document']['docment_id'])) ?>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-left">
                <div class="dataTables_info" id="datatable_info"><?php echo $this->Paginator->counter(
                        'Trang {:page} of {:pages}, Hiển thị {:current} trên
                         {:count} văn bản.'
                    );?></div>
            </div>
            <div class="pull-right">
                <div class="dataTables_paginate paging_bs_normal">
                    <?php
                    echo $this->Paginator->prev('< ' . __('Trước '), array(), null, array('class' => 'prev disabled'));
                    echo $this->Paginator->numbers(array('separator' => ' | '));
                    echo $this->Paginator->next(__(' Sau') . ' >', array(), null, array('class' => 'next disabled'));
                    ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<?php else: ?>
    <h2><?php echo __('Không có văn bản nào được tìm thấy'); ?></h2>
<?php endif; ?>
</div>
