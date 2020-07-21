<?php
$this->start('css');
?>
<style type="text/css" media="all">

    .confirmation-box,.performance-box-alert {
        background-color: #fff;
        bottom: 0;
        height: auto;
        left: 0;
        margin: auto;
        height: 120px;
        position: fixed;
        right: 0;
        top: 0;
        width: 404px;
        z-index: 101;
        display: none;
    }
    .key_block{
        display: none;
    }
    .notes_block{
        display: none;
    }
    #signoff{
        display: none;
    }
</style>
<?php
$this->end();
?>
<?php if ($isIndicatorAndKeyTakeoutAllowed) { ?>
    <div class="summary-footer">
        <?php if ($this->Metrices->showEdit($roleResources) && (strcmp(trim(strtoupper($ad_group)), trim(strtoupper(BU_ADMIN))) == 0 || strcmp(trim(strtoupper($ad_group)), trim(strtoupper(GLOBAL_ADMIN))) == 0) && $action_name != 'SUMMARY' && $controller_name = 'DASHBOARDS' && $filterDetail['approval_status'] != 2) { ?>
            <ul class="summary-tab">
                <li id="tp_keytakeouts"><a href="#tab-1" ><span class="keytake-span">Key Takeouts</span><span class="keytake-span"><?php echo $this->Html->image('/images/detail-edit-icon.png', array('class' => 'edit-key key_block check_dashboard_edit')) ?></span></a><div class="arrow-up arrow-up3"></div>
                    <div class="question-mark-popup tp_keytakeouts">Please add your comments on business performance</div>  </li>
                <li id="tp_notes"><a href="#tab-2" ><span class="keytake-span">Notes</span><span class="keytake-span"><?php echo $this->Html->image('/images/detail-edit-icon.png', array('class' => 'edit-key notes_block check_dashboard_edit')) ?></span>  
                    </a> <div class="arrow-up arrow-up4"></div>
                    <div class="question-mark-popup tp_notes">Please add your comments on data</div> </li>
            </ul>
        <?php } else { ?>
            <ul class="summary-tab">
                <li id="tp_keytakeouts">                
                    <a href="#tab-1" >Key Takeouts</a> 
                    <div class="arrow-up arrow-up3"></div>
                    <div class="question-mark-popup tp_keytakeouts">Please add your comments on business performance</div>            
                </li>
                <li id="tp_notes"><a href="#tab-2" >Notes</a>
                    <div class="arrow-up arrow-up4"></div>
                    <div class="question-mark-popup tp_notes">Please add your comments on data</div> 
                </li>
            </ul>
        <?php } ?>
        <div class="tab"> 
            <div class="tab-content" id="tab-1">
                <p class="txt-save break-all <?php echo empty($keyAndNotes['KEYTAKEOUTS']) ? 'placeholder-text' : ''; ?>" ><?php echo (!empty($keyAndNotes['KEYTAKEOUTS']) ? nl2br($keyAndNotes['KEYTAKEOUTS']) : 'Please add your comments on business performance'); ?></p>
                <div class="full-width" id="txthide">
                    <textarea class="textarea-div" id="txt_key_takeouts" name="txt_key_takeouts" placeholder="Please add your comments on business performance"></textarea>             
                </div>

            </div>
            <div class="tab-content" id="tab-2">
                <p class="txt-save1 break-all <?php echo empty($keyAndNotes['NOTES']) ? 'placeholder-text' : ''; ?>"><?php echo (!empty($keyAndNotes['NOTES']) ? nl2br($keyAndNotes['NOTES']) : 'Please add your comments on data'); ?></p>
                <div class="full-width" id="txthide1">
                    <textarea class="textarea-div" id="txt_notes" name="txt_notes" placeholder="Please add your comments on data"></textarea>

                </div>
            </div>
        </div>
    </div>
    <?php
}
// validation for isIndicatorAndKeyTakeoutAllowed closed 
?>
<input type="hidden" name="comment_key_id" id="comment_key_id" value="<?php echo (!empty($key_take_out_id) ? $key_take_out_id : 0); ?>"/>
<input type="hidden" name="comment_notes_id" id="comment_notes_id" value="<?php echo (!empty($notes_id) ? $notes_id : 0); ?>"/>
<input type="hidden" name="comment_notes_flag" id="comment_notes_flag" value="0"/>
<input type="hidden" name="comment_key_flag" id="comment_key_flag" value="0"/> 
<input type="hidden" name="dashboardfilter_id" id="dashboardfilter_id" value="<?php echo (!empty($filterDetail['dashboardfilter_id']) ? $filterDetail['dashboardfilter_id'] : 0); ?>"/>
<input type="hidden" name="selectedMarketIso" id="selectedMarketIso" value="<?php echo (!empty($selectedMarketIso) ? $selectedMarketIso : ''); ?>"/>
<?php
$this->start('script');
echo $this->Html->script('keytakeouts_notes.js');
?>
<script>
    var baseUrl = '<?php echo $this->webroot; ?>';
    var setFlag = '<?php echo Router::url(array('controller' => 'Dashboards', 'action' => 'saveKeyFlag')); ?>';
    var checkFlag = '<?php echo Router::url(array('controller' => 'Dashboards', 'action' => 'checkKeyFlag')); ?>';
    var saveKeyTakeNotes = '<?php echo Router::url(array('controller' => 'Dashboards', 'action' => 'saveKeytakeoutsAndNotes')); ?>';
    var lock_dashboard = '<?php echo Router::url(array('controller' => 'Dashboards', 'action' => 'saveKeytakeoutsAndNotes')); ?>';
    var dashboardfilterId = '<?php echo $filterDetail['dashboardfilter_id']; ?>';
    var checkLock = '<?php echo Router::url(array('controller' => 'Dashboards', 'action' => 'checkDashboardLock')); ?>';
    var editDashBoard = '<?php echo (!empty($editDashBoard) ? $editDashBoard : 0) ?>';
    var lock_user_name = '<?php echo (!empty($lock_user_name) ? $lock_user_name : '') ?>';
    var lock_status = '<?php echo (!empty($lock_status) ? $lock_status : 0) ?>';
    var selected_Publication_Date='<?php echo (!empty($selectedPublicationDate)?$selectedPublicationDate:'');?>';    
</script>
<?php
$this->end();
?>
<!-----------pageblock box------------------>

<div class="confirmation-box" style="display: none">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-model" id="keypopup"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="full-width margintop25 text-center" id="concurrent_error_meg" >Editing is locked as <span id="key_username"></span> is editing the dashboard.</div>
        <div class="full-width margintop25 text-center" id="lock_upload_pop_up" style="display: none" >Editing is locked since upload is in progress.</div>

    </div>
</div>
<!-----------pageblock box------------------>
