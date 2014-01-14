<div class="document-list view">
        <div class="col-md-12">
            <div class="block-flat">
                <?php if ($documents): ?>
                    <div class="header">
                        <h3 class="new-document"><?php echo __("Danh sách văn bản: %s",$_catName) ?></h3>
                    </div>
                    <div class="content">
                        <div class="table-responsive">
                            <div id="datatable_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table class="table table-bordered dataTable" id="datatable" aria-describedby="datatable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="datatable"
                                            rowspan="1" colspan="1" aria-sort="ascending" style="width: 80px;"
                                            aria-label="Rendering engine: activate to sort column descending"><?php echo __("Số Ký Hiệu") ?>
                                        </th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" style="width: 80px;"
                                            aria-label="Browser: activate to sort column ascending"><?php echo __("Ngày Ban Hành") ?>
                                        </th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" style="width: 226px; text-align: center"
                                            aria-label="Platform(s): activate to sort column ascending"><?php echo __("Trích Yếu") ?>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                    <?php $i = 0;
                                    foreach ($documents as $_document): $i++ ?>
                                        <tr class="gradeA <?php if ($i % 2) {
                                            echo 'evev';
                                        } else {
                                            echo 'old';
                                        } ?>">
                                            <td class=" sorting_1"><?php echo h($_document['Document']['document_symbol']) ?></td>
                                            <td class="center"><?php echo h($_document['Document']['document_signdate']) ?></td>
                                            <td class="center">
                                                <?php echo $this->Html->link(h($_document['Document']['docment_name']), array('controller' => 'documents', 'action' => 'view', $_document['Document']['docment_id'])) ?>
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
                        </div>
                    </div>
                <?php else: ?>
                    <div class="header">
                        <h3 class="new-document"><?php echo __('Không có văn bản nào được tìm thấy') ?></h3>
                    </div>
                <?php endif; ?>
            </div>
        </div>

</div>


