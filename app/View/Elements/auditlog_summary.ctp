
<input type="hidden" id="bfCache" value="">
<div class="rTable">
    <div class="rTableRow">
        <div class="rTableHead-custom">Geography</div>
        <div class="rTableHead-custom">Activity</div>
        <div class="rTableHead-custom">Detail on Activity</div>
        <div class="rTableHead-custom">Edit Date &amp; Time</div>
        <div class="rTableHead-custom">BU Admin/Global<br> Admin name<br> (modifier)</div>
        <div class="rTableHead-custom">WNS Upload Date</div>
        <div class="rTableHead-custom">Click to View BU and GA<br> all edited data</div>
        <div class="rTableHead-custom">All local data updated</div>
        <div class="rTableHead-custom">Key Take out and Notes + Colors<br> updated + Local Data updated</div>
    </div>      
<?php $noRecord = true;
if(!empty($summaryData)){
    foreach($summaryData as $market => $marketData){
        $uploadDate = null;
        $dfId = 0;
        $allDataInputFlag = false;
        $keyNotesPiEditFlag = false;
        if(!empty($marketData[TYPE_DATA_UPLOAD])){
                $uploadDate = date('m-d-Y', strtotime($marketData[TYPE_DATA_UPLOAD]['modified_date']));
                $dfId = $marketData[TYPE_DATA_UPLOAD]['dashboard_filter_id'];
        }
        if(!empty($marketData[TYPE_METRIC_EDITS_COMPLETED])){
            $allDataInputFlag = true;
            unset($marketData[TYPE_METRIC_EDITS_INITIATION]);
        }
        if($allDataInputFlag && !empty($marketData[TYPE_KEY_TAKEOUTS]) && !empty($marketData[TYPE_COMMENT_NOTES] && !empty($marketData[TYPE_PERFORMANCE_INDI]['colors_updated']))){
            $keyNotesPiEditFlag = true;
        }
        foreach ($activityTypes as $aType){
            if(!empty($marketData[$aType])){
                $noRecord = false;?>
                <div class="rTableRow">
                    <div class="rTableCell"><?php echo $market;?></div>
                    <div class="rTableCell"><?php echo $aType;?></div>
                    <div class="rTableCell"><?php echo $marketData[$aType]['detail'];?></div>
                    <div class="rTableCell no-wrap"><?php echo date('m-d-Y H:i:s', strtotime($marketData[$aType]['modified_date']));?></div>
                    <div class="rTableCell"><?php echo $marketData[$aType]['user_name'];?></div>
                    <div class="rTableCell"><?php echo $uploadDate; $actId = (str_replace(array('-',' '),array('',''),strtolower($aType).'Id'));?></div>
                    <div class="rTableCell center-table-content"><?php echo $this->Html->link('VIEW', '/audit-log/detail?actid='.$actId.'&dfid='.$dfId, array('class' => 'view-btn')); ?></div>
                    <div class="rTableCell"><?php if($allDataInputFlag){ ?><img alt="check-green" src="<?php echo $this->webroot;?>images/check-green.png" class="check-img"> <?php }else{ ?>&nbsp;<?php }?></div>
                    <div class="rTableCell"><?php if($keyNotesPiEditFlag){ ?><img alt="check-green" src="<?php echo $this->webroot;?>images/check-green.png" class="check-img"> <?php }else{ ?>&nbsp;<?php }?></div>
                </div>
            <?php }elseif(empty($this->request->data['aType']) && $aType!=TYPE_METRIC_EDITS_COMPLETED && $aType!=TYPE_METRIC_EDITS_INITIATION){
                $noRecord = false;?>
                <div class="rTableRow">
                    <div class="rTableCell"><?php echo $market;?></div>
                    <div class="rTableCell"><?php echo $aType;?></div>
                    <div class="rTableCell"><?php echo $aType;?></div>
                    <div class="rTableCell">&nbsp;</div>
                    <div class="rTableCell">&nbsp;</div>
                    <div class="rTableCell">&nbsp;</div>
                    <div class="rTableCell center-table-content"><?php echo $this->Html->link('VIEW', 'javascript:void(0);', array('class' => 'view-btn disable')); ?></div>
                    <div class="rTableCell">&nbsp;</div>
                    <div class="rTableCell">&nbsp;</div>
                </div>
           <?php }
        }
    }
}?>
</div>

<?php  if($noRecord){?>
<div class="full-width margintop10" style="text-align:center;">No records found!</div>
<?php }else{?>
<div class="full-width margintop45" style="text-align:center;">      
   <ul class="pagination">
    <?php 
    
    echo $this->Paginator->numbers(array('tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active', 'separator' => '','first' => 2, 'last' => 2,'url'=> array(
            'controller'=> 'audit-log',
            'action'=> 'page'
        )));?>
    </ul>
</div>  
<?php }?>