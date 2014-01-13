<div class="box_search_nghiep_vu"><p class="red">TÌM KIẾM</p>

    <div class="box_nghiep_vu">
        <div class="nghiep_vu">
            <div class="text_left">Từ Khóa</div>
            <div class="input_text"><input name="ctl00$WebPartManager$g_fcba945a_caa5_4983_b6d0_ab183ccd1482$ctl00"
                                           type="text"
                                           id="ctl00_WebPartManager_g_fcba945a_caa5_4983_b6d0_ab183ccd1482_ctl00"
                                           class="long" onkeydown="return TxtSearchKeyDown(event);"></div>
            <div class="nghiep_vu">
                <div class="text_left"></div>
                <div class="input_text"><input
                        id="ctl00_WebPartManager_g_fcba945a_caa5_4983_b6d0_ab183ccd1482_rdSokyhieu" type="radio"
                        name="ctl00$WebPartManager$g_fcba945a_caa5_4983_b6d0_ab183ccd1482$search" value="rdSokyhieu"
                        checked="checked"><label
                        for="ctl00_WebPartManager_g_fcba945a_caa5_4983_b6d0_ab183ccd1482_rdSokyhieu">Số
                        ký hiệu, trích yếu</label>&nbsp;&nbsp;<input
                        id="ctl00_WebPartManager_g_fcba945a_caa5_4983_b6d0_ab183ccd1482_rdToanvan" type="radio"
                        name="ctl00$WebPartManager$g_fcba945a_caa5_4983_b6d0_ab183ccd1482$search"
                        value="rdToanvan"><label
                        for="ctl00_WebPartManager_g_fcba945a_caa5_4983_b6d0_ab183ccd1482_rdToanvan">Toàn
                        văn</label></div>
            </div>
            <div class="nghiep_vu">
                <div class="text_left"></div>
                <div class="input_text" style="padding:5px 0"><a
                        id="ctl00_WebPartManager_g_fcba945a_caa5_4983_b6d0_ab183ccd1482_SeachLink"
                        href='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$WebPartManager$g_fcba945a_caa5_4983_b6d0_ab183ccd1482$SeachLink", "", true, "", "", false, true))'><img
                            border="0" src="/img/search_quetion.gif"></a><span><a href="#">Tìm kiếm nâng cao</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="block-flat">
        <div class="header">
            <h3 class="new-document"><?php echo __("Văn Bản Mới") ?></h3>
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
                        <?php $i = 0; foreach($new_documents as $_document): $i++ ?>
                        <tr class="gradeA <?php if($i % 2){echo 'evev';}else{echo 'old';}?>">
                            <td class=" sorting_1"><?php echo h($_document['Document']['document_symbol']) ?></td>
                            <td class="center"><?php echo h($_document['Document']['document_signdate']) ?></td>
                            <td class="center">
                                <?php echo $this->Html->link(h($_document['Document']['docment_name']),array('controller'=>'documents','action'=>'view',$_document['Document']['docment_id'])) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
