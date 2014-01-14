<div class="box_search_nghiep_vu"><p class="red">TÌM KIẾM</p>

    <div class="box_nghiep_vu">
        <div class="nghiep_vu">
            <form action="/documents/search" id="DocumentDisplayForm" method="post" accept-charset="utf-8" parsley-validate>
                <div style="display:none;">
                    <input type="hidden" name="_method" value="POST">
                </div>
                <div class="text_left">Từ Khóa</div>
                <div class="input_text">
                    <input name="data[Document][document_name]" class="long required"  placeholder="Tìm theo số ký hiệu hoặc tên văn bản" type="text" id="DocumentDocumentName" parsley-error-message="Vui lòng điền số ký hiệu hoặc tên văn bàn cần tìm" >
                </div>
                <div class="nghiep_vu">
                    <div class="text_left"></div>
                    <div class="input_text">
                        <input id="rdSokyhieu" type="radio" name="data[Document][search_in]" value="rdSokyhieu" checked="checked">
                        <label for="rdSokyhieu">Số
                            ký hiệu, trích yếu</label>
                        <input id="rdToanvan" type="radio" name="data[Document][search_in]" value="rdToanvan">
                        <label for="rdToanvan">Toàn văn</label>
                    </div>
                </div>
                <div class="nghiep_vu">
                    <div class="text_left"></div>
                    <div class="input_text" style="padding:5px 0">
                        <button type="submit" class="btn btn-primary btn-document-search">Tìm kiếm</button>                        <span>
                            <a href="/documents/advance_search" class="btn-advance-search">Tìm kiếm nâng cao</a>                        </span>
                    </div>
                </div>
            </form>

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
                        <?php $i = 0;
                        foreach ($new_documents as $_document): $i++ ?>
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
            </div>
        </div>
    </div>
</div>
