
<div class="confirmation-signoff-box" id="signOffConfirm" style="display: none;">
    <div class="overlay-confirm-head overlay-head"></div>
    <div class="overlay-confirm-head-txt">
        <div class="close-model close-confirm-pop"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">Confirmation</div>
        <div class="full-width margintop25 text-center" id="confirm_msg">Are you sure you want to provide sign-off?</div>
        <div class="support-prfomance font20 text-center">
            <button class="uppercase add-cancel" onclick="confirmSignoff(true)">Yes</button>
            <button class="uppercase add-cancel" onclick="confirmSignoff(false)">No</button>
        </div>
    </div>
</div>

<div class="confirmation-signoff-box" id="signOffConfirm" style="display: none;">
    <div class="overlay-confirm-head"></div>
    <div class="overlay-confirm-head-txt">
        <div class="close-model close-confirm-pop"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">Confirmation</div>
        <div class="full-width margintop25 text-center" id="confirm_msg">Are you sure you want to provide sign-off?</div>
        <div class="support-prfomance font20 text-center">
            <button class="uppercase add-cancel" onclick="confirmSignoff(true)">Yes</button>
            <button class="uppercase add-cancel" onclick="confirmSignoff(false)">No</button>
        </div>
    </div>
</div>

<div class="confirmation-bulksignoff-box" id="bulkSignOffConfirm" style="display: none;">
    <div class="overlay-confirm-head overlay-head"></div>
    <div class="overlay-confirm-head-txt">
        <div class="close-model close-confirm-popbulk"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">Confirmation</div>
        <div class="full-width margintop25 text-center" id="confirm_msg">Are you sure you want to publish the data?</div>
        <div class="support-prfomance font20 text-center">
            <button class="uppercase add-cancel" onclick="confirmBulkSignoff(true,<?php echo $filterDetail['dashboardfilter_id']; ?>)">Yes</button>
            <button class="uppercase add-cancel" onclick="confirmBulkSignoff(false)">No</button>
        </div>
    </div>
</div>

<div class="confirmation-bulksignoff-box" id="bulkSignOffConfirmMessage" style="display: none;">
    <div class="overlay-confirm-head"></div>
    <div class="overlay-confirm-head-txt">
        <div class="close-model close-confirm-popbulk"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">Message</div>
        <div class="full-width margintop25 text-center confirmation-bulksignoff-box-msg"></div>
        <div class="support-prfomance font20 text-center">
            <button class="uppercase add-cancel" onclick="closeBulkSignOffConfirmMessage()">Ok</button>
        </div>
    </div>
</div>
