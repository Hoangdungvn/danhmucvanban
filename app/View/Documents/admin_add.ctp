<?php echo $this->Html->addCrumb('Thêm văn bản') ?>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="block-flat">
            <div class="header">
                <h3>Thêm văn bản</h3>
            </div>
            <div class="content">
                <?php echo $this->Form->create('Document',array(
                    "parsley-validate" => "",
                     "novalidate" => "",
                     'type' => 'file'
                ));
                ?>
                <?php
                    echo $this->Form->input('docment_name',array(
                        'label' => 'Tên Văn Bản <em>*</em>',
                        'div' => 'form-group',
                        'parsley-trigger' => 'change',
                        'required' => '',
                        'class'    => 'form-control',
                        'placeholder' => 'Tên văn bản',

                    ));
                    echo $this->Form->input('document_desc',array(
                        'type' => 'textarea',
                        'label' => 'Mô Tả Văn Bản <em>*</em>',
                        'div' => 'form-group',
                        'parsley-trigger' => 'change',
                        'required' => '',
                        'class'    => 'ckeditor form-control',
                        'placeholder' => 'Mô tả văn bản văn bản'

                    ));

                    echo $this->Form->input('document_symbol',array(
                        'label' => 'Số / Ký hiệu <em>*</em>',
                        'div' => 'form-group',
                        'parsley-trigger' => 'change',
                        'required' => '',
                        'class'    => 'form-control',
                        'placeholder' => 'Số / Ký hiệu',

                    ));

                    echo $this->Form->input('document_signdate',array(
                        'label' => 'Ngày Ký <em>*</em>',
                        'div' => 'form-group',
                        'parsley-trigger' => 'change',
                        'required' => '',
                        'class'    => 'form-control',
                    ));
                    echo $this->Form->input('document_signer',array(
                        'label' => 'Người Ký <em>*</em>',
                        'div' => 'form-group',
                        'parsley-trigger' => 'change',
                        'required' => '',
                        'class'    => 'form-control',
                        'placeholder' => 'Người ký'

                    ));


                    echo $this->Form->input('doctype_id',array(
                        'label' => 'Loại Văn Bản <em>*</em>',
                        'div' => 'form-group',
                        'parsley-trigger' => 'change',
                        'required' => '',
                        'class'    => 'form-control',

                    ));
                    echo $this->Form->input('organ_id',array(
                        'label' => 'Cơ Quan Ban Hành <em>*</em>',
                        'div' => 'form-group',
                        'parsley-trigger' => 'change',
                        'required' => '',
                        'class'    => 'form-control',

                    ));

                ?>
                <div class="form-group required">
                    <label for="DocumentCateId">Danh Mục Văn Bản <em>*</em></label>
                    <select name="data[Document][cate_id]" parsley-trigger="change" class="form-control" id="DocumentCateId">
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
                <?php

                    echo $this->Form->input('file_upload',array(
                        'type' => 'file',
                        'label' => 'File Đính Kèm'
                    ));

                    echo $this->Form->input('document_status',array(
                        'label' => 'Trạng Thái <em>*</em>',
                        'div' => 'form-group',
                        'parsley-trigger' => 'change',
                        'required' => '',
                        'class'    => 'form-control',
                        'options'   => array('0'=>'Disable', '1' => 'Enable'),
                        'default'   => '1'

                    ));
                ?>

                    <?php echo $this->Form->button('Submit', array('type' => 'submit','class'=>'btn btn-primary')); ?>
                    <?php echo $this->Form->button('Cancel', array('type' => 'reset','class'=>'btn btn-default'));?>
                <?php echo $this->Form->end(); ?>

            </div>
        </div>
    </div>
</div>
