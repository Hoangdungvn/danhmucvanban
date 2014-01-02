<?php echo $this->Html->addCrumb('Danh sách văn bản') ?>
<div class="row">
    <div class="col-md-12">
        <div class="block-flat">
            <div class="header">
                <h3>Danh sách văn bản</h3>
            </div>
            <div class="content">
                <div class="table-responsive">
                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="pull-right tbl-documents">
                                    <div class="dataTables_filter" id="datatable_filter"><label><input type="text"
                                                                                                       aria-controls="datatable"
                                                                                                       class="form-control"
                                                                                                       placeholder="Search"></label>
                                    </div>
                                    <?php echo $this->Html->link('Thêm văn bản',array('action'=>'add'),array('class'=>'btn btn-primary')) ?>
                                </div>
                                <div class="pull-left">
                                    <div id="datatable_length" class="dataTables_length"><label>Show <select size="1"
                                                                                                             name="datatable_length"
                                                                                                             aria-controls="datatable"
                                                                                                             class="form-control">
                                                <option value="10" selected="selected">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> Rows</label></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <table class="table table-bordered table-documents" id="datatable" aria-describedby="datatable_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="datatable"
                                    rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending"
                                    style="width: 100px;">Mã Văn bản
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable"
                                    rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                                    style="width: 256px;">Tên văn bản
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable"
                                    rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                    style="width: 236px;">Mô tả
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable"
                                    rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending"
                                    style="width: 152px;">Ngày ký
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable"
                                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                    style="width: 109px;"> Trạng Thái
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable"
                                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                    style="width: 109px;"> Chức năng
                                </th>
                            </tr>
                            </thead>

                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php $i=0; foreach ($documents as $document): $i++?>
                                <tr class="gradeA <?php if($i %2 == 0){echo 'even'; }else{echo 'old';} ?>">
                                    <td class=" sorting_1"><?php echo h($document['Document']['docment_id']) ?></td>
                                    <td class=" "><?php echo $this->Html->link(h($document['Document']['docment_name']),array('action'=>'view',$document['Document']['docment_id']))   ?></td>
                                    <td class=" "><?php echo $document['Document']['document_desc']  ?></td>
                                    <td class="center "><?php echo h($document['Document']['document_signdate'])  ?></td>
                                    <td class="center "><?php echo h($document['Document']['document_status'])  ?></td>
                                    <td class="center ">
                                        <?php echo $this->Html->link('<i class="fa fa-pencil"></i>',array('action' => 'edit', $document['Document']['docment_id']),array('class'=>'label label-default','escape'=>false)); ?>
                                        <?php echo $this->Html->link('<i class="fa fa-times"></i>',array('action' => 'delete', $document['Document']['docment_id']),array('class'=>'label label-danger','escape'=>false)); ?>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
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
                                        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                                        echo $this->Paginator->numbers(array('separator' => ''));
                                        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                                        ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
