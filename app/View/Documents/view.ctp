<div class="documents_view">
<!--    --><?php //pr($document);?>
<?php if($document):?>
<h4><span><?php echo $document["Document"]["docment_name"]; ?></span></h4>
    <table class="table table-bordered dataTable" id="datatable" aria-describedby="datatable_info">
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        <tr class="gradeA odd">
            <td width="200px"><b>Ngày ký</b></td>
            <td><?php echo $document['Document']['document_signdate'];?></td>
        </tr><tr class="gradeA even">
            <td style="width: 300px;"><b>Ngày hiệu lực</b></td>
            <td class=" "><?php echo $document['Document']['document_signdate'];?></td>
        </tr>
        </tr><tr class="gradeA odd">
            <td style="width: 300px;"><b>Người ký</b></td>
            <td class=" "><?php echo $document['Document']['document_signer'];?></td>
        </tr>
        </tr><tr class="gradeA odd">
            <td style="width: 300px;"><b>Cơ quan ban hành</b></td>
            <td class=" "><a href="<?php echo $this->webroot.'documents/list_organs/'.$document['Document']['organ_id'];?>"><?php echo $document['Organ']['organ_name'];?></a></td>
        </tr>
        </tr><tr class="gradeA odd">
            <td style="width: 300px;"><b>Loại văn bản</b></td>
            <td class=" "><a href="<?php echo $this->webroot.'documents/list_doctypes/'.$document['Document']['doctype_id'];?>"><?php echo $document['Doctype']['doctype_name'];?></a></td>
        </tr>
        </tr><tr class="gradeA odd">
            <td style="width: 300px;"><b>lĩnh vực</b></td>
            <td class=" "><a href="<?php echo $this->webroot.'documents/list_cats/'.$document['Document']['cat_id'];?>"><?php echo $document['Cat']['cat_name'];?></a></td>
        </tr>
        </tr><tr class="gradeA odd">
            <td style="width: 300px;"><b>Trích yếu</b></td>
            <td class=" "><?php echo $document['Document']['document_desc'];?></td>
        </tr>
        </tbody>
    </table>
<?php else:?>
    <h4>Thông tin văn bản không được tìm thấy</h4>
    <?php endif;?>
</div>
