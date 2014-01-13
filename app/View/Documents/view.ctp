<div class="document_view">
<!--    --><?php //pr($document);?>
<?php if($document):?>
    <h4 class="document_name"><?php echo $document["Document"]["docment_name"]; ?></h4>
    <table class="table table-bordered dataTable" id="datatable" aria-describedby="datatable_info">
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        <tr class="gradeA even">
            <td width="200px"><b><?php echo __('Số / Ký Hiệu') ?></b></td>
            <td><?php echo $document["Document"]['document_symbol'];?></td>
        </tr>
        <tr class="gradeA odd">
            <td width="200px"><b><?php echo __("Ngày Ký") ?></b></td>
            <td><?php echo  date("d/m/Y", strtotime($document['Document']['document_signdate']));?></td>
        </tr><tr class="gradeA even">
            <td style="width: 300px;"><b><?php echo __("Ngày Có Hiệu Lực") ?></b></td>
            <td class=" "><?php echo date("d/m/Y", strtotime($document['Document']['document_effective_date']));?></td>
        </tr>
        </tr><tr class="gradeA odd">
            <td style="width: 300px;"><b><?php echo __("Người Ký") ?></b></td>
            <td class=" "><?php echo $document['Document']['document_signer'];?></td>
        </tr>
        </tr><tr class="gradeA odd">
            <td style="width: 300px;"><b><?php echo __("Cơ Quan Ban Hành") ?></b></td>
            <td class=" "><?php echo $document['Organ']['organ_name'];?></td>
        </tr>
        </tr><tr class="gradeA odd">
            <td style="width: 300px;"><b><?php echo __("Loại Văn Bản") ?></b></td>
            <td class=" "><?php echo $document['Doctype']['doctype_name'];?></td>
        </tr>
        </tr><tr class="gradeA odd">
            <td style="width: 300px;"><b><?php echo __("Danh Mục Văn Bản") ?></b></td>
            <td class=" ">
                <?php echo $this->Html->link($document['Cat']['cate_name'],array('controller' =>'documents','action'=>'list_document','?'=> array('cate_id' => $document['Document']['cate_id']))); ?>
            </td>
        </tr>
        </tr><tr class="gradeA odd">
            <td style="width: 300px;" colspan="2">
                <b>Trích yếu: </b>
                <?php echo $document['Document']['docment_name'];?>
            </td>
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
