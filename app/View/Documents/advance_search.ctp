
<div class="document-list view">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="block-flat">
                <div class="header">
                    <h3 class="new-document" style="text-align: center"><?php echo __("Tìm Kiếm Nâng Cao") ?></h3>
                </div>
                <div class="content">
                    <?php echo $this->Form->create('Document',array(
                        "parsley-validate" => ""
                    ));
                    ?>
                    <?php
                    echo $this->Form->input('docment_name',array(
                        'label' => 'Tên Văn Bản <em>*</em>',
                        'div' => 'form-group',
                        'required' => 'required',
                        'class'    => 'form-control',
                        'placeholder' => 'Tên văn bản',

                    ));

                    echo $this->Form->input('document_symbol',array(
                        'label' => 'Số / Ký hiệu <em>*</em>',
                        'div' => 'form-group',
                        'required' => 'required',
                        'class'    => 'form-control',
                        'placeholder' => 'Số / Ký hiệu',

                    ));
                    echo $this->Form->input('document_signer',array(
                        'label' => 'Người Ký <em>*</em>',
                        'div' => 'form-group',
                        'required' => 'required',
                        'class'    => 'form-control',
                        'placeholder' => 'Người ký'

                    ));

                    ?>
                    <div class="form-group required">
                        <label for="DocumentCateId">Danh Mục Văn Bản <em>*</em></label>
                        <select name="data[Document][cate_id]" parsley-trigger="change" required="required" class="form-control" id="DocumentCateId">
                            <?php foreach ($cats as $key => $val):?>
                                <?php
                                $numRepeat = $val['level'];
                                $char = '';
                                if ($numRepeat > 0) {
                                    $char .= str_repeat('---', $numRepeat);
                                }
                                ?>
                                <option value="<?php echo $val['cate_id'] ?>"><?php echo $char . ' ' . $val['cate_name']; ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>

                    <?php echo $this->Form->button('Tìm kiếm', array('type' => 'submit','class'=>'btn btn-primary')); ?>
                    <?php echo $this->Form->end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>