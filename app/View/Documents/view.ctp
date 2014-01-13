<div class="document_view">
<!--    --><?php //pr($document);?>
<?php if($document):?>
    <h4 class="document_name"><?php echo $document["Document"]["docment_name"]; ?></h4>
    <table class="table table-bordered dataTable" id="datatable" aria-describedby="datatable_info">
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        <tr class="gradeA odd">
            <td width="200px"><b>Ngày ký</b></td>
            <td><?php echo  date("d/m/Y", strtotime($document['Document']['document_signdate']));?></td>
        </tr><tr class="gradeA even">
            <td style="width: 300px;"><b>Ngày hiệu lực</b></td>
            <td class=" "><?php echo date("d/m/Y", strtotime($document['Document']['document_signdate']));?></td>
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
            <td style="width: 300px;" colspan="2"><b>Trích yếu : </b><?php echo $document['Document']['document_desc'];?></td>
        </tr>
        </tbody>
    </table>
        <?php if( $document['Document']['document_file']):?>
        <?php $name = explode("/",$document['Document']['document_file']);?>
        <p><span>
            <img src="<?php echo $this->webroot.'img/attach.gif';?>">
            Tập tin đính kèm : 
        </span>
            <?php
            echo $this->Html->link(
                $name[1],
                $this->webroot.$document['Document']['document_file'],
                array('class' => 'filedownload',"target"=>"_blank")
            );
            ?>
        </p>
        <?php endif;?>

    <script type="text/javascript">
        $(document).on("click", "a.filedownload", function () {
            $.fileDownload($(this).prop('href'))
                    .done(function () {})
                    .fail(function () { alert('Không tải được!'); });

            return false; //this is critical to stop the click event which will trigger a normal file download
        });
    </script>
    <?php if($nexus):?>
        <div class="doc_detail_others" style="margin-bottom: 7px ;"><img src="<?php echo $this->webroot.'img/others.gif';?>" ><b>   Văn bản khác</b></div>
        <ul class="document_nexus">
            <?php foreach($nexus as $row):?>
            <li>
                <a href="<?php echo $this->webroot.'documents/list_organs/'.$row['Document']['docment_id'].'?organ='.$row['Organ']['organ_id'];?>"><?php echo $row['Document']['docment_name'];?></a>
            </li>
            <?php endforeach;?>
        </ul>
        <?php endif;?>
<?php else:?>
    <h4>Thông tin văn bản không được tìm thấy</h4>
    <?php endif;?>
</div>
