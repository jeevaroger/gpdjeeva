<?php

$this->start('css');
?>
<style type="text/css" media="all">
    .gpds-export-excel-alert-model,.gpds-export-pdf-alert-model {
        width:850px !important;
        font-size:10px !important;
        margin-left: 230px;
    }
    .excel-head-div{
        font-size:12px !important;
        width:20% !important;
    }
    [type="checkbox"]:not(:checked), [type="checkbox"]:checked {
        left: 196px!important;
        width: 19px;
        height: 16px;
    }
</style>
<?php
$this->end();
?>

<div class="gpds-export-excel-alert-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-model"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">EXPORT TO EXCEL </div>

         <?php
            echo $this->Form->create(null, array(
                'url' => array('controller' => 'GPDS', 'action' => 'exportExcel'),
                'onsubmit' => 'javascript:closeAfterSubmit();',
                'id' => 'gpdsExcel',
                'novalidate' => 'novalidate'
            ));
            ?>

        <p class="font14 black">Please select any one option to export</p>
        <div class="excel-head">                
            <div id="printDetail-summary" class="excel-head-div status-active" onclick="setTypeForExcel('summary')">
                Multi Market-Summary
                <div class="arrow-up arrow-up2"></div>
                <div class="excel-head-tool-tip">Export Multi Market-Summary</div>
            </div>
            <div id="printDetail-detail1" class="excel-head-div" onclick="setTypeForExcel('detail1')">
                Multi Market-Detail 1
                <div class="arrow-up arrow-up2"></div>
                <div class="excel-head-tool-tip">Export Multi Market-Detail 1 </div>
            </div>
            <div id="printDetail-detail2" class="excel-head-div" onclick="setTypeForExcel('detail2')">
                Multi Market-Detail 2
                <div class="arrow-up arrow-up2"></div>
                <div class="excel-head-tool-tip">Export Multi Market-Detail 2 </div>
            </div>
            <div id="printDetail-detail2" class="excel-head-div" onclick="setTypeForExcel('detail3')">
                Multi Market-Detail 3
                <div class="arrow-up arrow-up2"></div>
                <div class="excel-head-tool-tip">Export Multi Market-Detail 3 </div>
            </div>
            <div class="excel-head-div excel-head-div-last" onclick="setTypeForExcel('all')">
                ALL Views
                <div class="arrow-up arrow-up2"></div>
                <div class="excel-head-tool-tip">Export ALL Views</div>
            </div>
            
            <input type="hidden" name="doc_type" id="doc_type_excel" value="summary"/>
            <input type="hidden" name="publication_date" id="publication_date" value="<?php echo $selectedPublicationDate; ?>"/>
            <input type="hidden" name="print_type_flag" id="" value="1"/>
        </div>

        <br><br>
        
        <?php if(isset($buCycle) && $buCycle){ ?>
            <div class="set-prfomance text-center margin-top15">
                <input type="checkbox" name="check_keytakeout" value="1" id ="check_keytakeout" > <span style="font-size:12px;"><b>Select if key takeout and notes to be included [This option is only available for BU cycle]</b></span>   
            </div>
            
         <?php } ?>  <br><br>
        <div class="set-prfomance text-center margin-top15">             
            <button class="cancel-btn cancel-popup">Cancel</button>
                <?php
                echo $this->Form->submit("Ok", array('div' => false,  'label' => false, 'class' => 'cancel-btn'));
                ?>

        </div>	
            <?php echo $this->Form->end(); ?>

    </div>
</div>



<div class="gpds-export-pdf-alert-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-model"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">EXPORT TO PDF </div>
         <?php
            echo $this->Form->create(null, array(
                'url' => array('controller' => 'GPDS', 'action' => 'exportPdf'),
                'onsubmit' => 'javascript:closeAfterSubmit();',
                'id' => 'gpdsPdf',
                'novalidate' => 'novalidate'
            ));
            ?>

        <p class="font14 black">Please select any one option to export</p>
        <div class="excel-head">                
            <div id="printDetail-summary" class="excel-head-div status-active" onclick="setTypeForPdf('summary')">
                Multi Market-Summary
                <div class="arrow-up arrow-up2"></div>
                <div class="excel-head-tool-tip">Export Multi Market-Summary</div>
            </div>
            <div id="printDetail-detail1" class="excel-head-div" onclick="setTypeForPdf('detail1')">
                Multi Market-Detail 1
                <div class="arrow-up arrow-up2"></div>
                <div class="excel-head-tool-tip">Export Multi Market-Detail 1 </div>
            </div>
            <div id="printDetail-detail2" class="excel-head-div" onclick="setTypeForPdf('detail2')">
                Multi Market-Detail 2
                <div class="arrow-up arrow-up2"></div>
                <div class="excel-head-tool-tip">Export Multi Market-Detail 2 </div>
            </div>
            <div id="printDetail-detail2" class="excel-head-div" onclick="setTypeForPdf('detail3')">
                Multi Market-Detail 3
                <div class="arrow-up arrow-up2"></div>
                <div class="excel-head-tool-tip">Export Multi Market-Detail 3 </div>
            </div>
            <div class="excel-head-div excel-head-div-last" onclick="setTypeForPdf('all')">
                ALL Views
                <div class="arrow-up arrow-up2"></div>
                <div class="excel-head-tool-tip">Export ALL Views</div>
            </div>
            <input type="hidden" name="doc_type" id="doc_type_pdf" value="summary"/>
            <input type="hidden" name="publication_date" id="publication_date" value="<?php echo $selectedPublicationDate; ?>"/>
            <input type="hidden" name="print_type_flag" id="" value="1"/>
        </div>

        <br><br>
        
         <?php if(isset($buCycle) && $buCycle){ ?>
            <div class="set-prfomance text-center margin-top15">
                <input type="checkbox" name="check_keytakeout" value="1" id ="check_keytakeout" > <span style="font-size:12px;"><b>Select if key takeout and notes to be included [This option is only available for BU cycle]</b></span>   
            </div>
            
         <?php } ?>  <br><br>
        <div class="set-prfomance text-center margin-top15">             
            <button class="cancel-btn cancel-popup">Cancel</button>
                <?php
                echo $this->Form->submit("Ok", array('div' => false, 'label' => false, 'class' => 'cancel-btn'));
                ?>

        </div>	
            <?php echo $this->Form->end(); ?>
    </div>
</div>

 <?php
   echo $this->Form->create(null, array(
            'url' => array('controller' => 'GPDS', 'action' => $this->action), 'id'  => 'gpds_resubmit'
        ));

  ?>
<input type="hidden" name="publicationDate" id="publicationDate" value="<?php echo $selectedPublicationDate; ?>"/>

<?php
echo $this->Form->end();
$this->start('script');
//echo $this->Html->script('keytakeouts_notes.js');
?>
<script>
    $('#publication_year').change(function () {
        $('#publicationDate').val($("#publication_year").val());
        $('#gpds_resubmit').submit();
    });

    function closeAfterSubmit() {
        $('.gpds-export-excel-alert-model').hide();
        $('.gpds-export-pdf-alert-model').hide();
        $('.overlay-div').hide();
        $('.loading-img').hide();
        return false;
    }

    $(document).ready(function () {
        $("#gpds_index, #gpds_firstview, #gpds_secondview, #gpds_thirdview").click(function (e) {
            e.preventDefault();
            var location = baseUrl + $(this).attr('url');
            $('#gpds_resubmit').attr('action', location);
            $('#gpds_resubmit').submit();
        });


    });


    function goForward() {
        window.history.forward();
    }

    function goBack() {
        window.history.back();
    }

    $('#gpds_excel').click(function () {
        $('.gpds-export-excel-alert-model').show();
        $('.overlay-div').show();
    });

    $('#gpds_pdf').click(function () {
        $('.gpds-export-pdf-alert-model').show();
        $('.overlay-div').show();
    });

    $('.close-model,.cancel-popup').click(function () {
        $('.gpds-export-excel-alert-model').hide();
        $('.gpds-export-pdf-alert-model').hide();
        $('.overlay-div').hide();
        $('.loading-img').hide();
        return false;
    });

    function setTypeForExcel(val) {
        document.getElementById('doc_type_excel').value = val;
    }
    function setTypeForPdf(val) {
        document.getElementById('doc_type_pdf').value = val;
    }

    $('.excel-head-div').click(function () {
        $(this).toggleClass('status-active').siblings('div').removeClass('status-active')
    });
    // excel to PDF tab hover effect js function
    $('.excel-head-div').hover(function () {
        $(this).find('.excel-head-tool-tip').show();
        $(this).find('.arrow-up').show();
    }, function () {
        $(this).find('.excel-head-tool-tip').hide();
        $(this).find('.arrow-up').hide();
    });
</script>
<?php
$this->end();


