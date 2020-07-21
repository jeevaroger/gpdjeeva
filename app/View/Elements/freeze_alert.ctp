<div class="freeze-alert-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-model"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">DASHBOARD IS LOCKED</div>
        <div class="support-prfomance font20">
            <p class="font14 black">Dashboard is locked by Global Admin for temporary admin work, please try editing after <input type="hidden" id="timer_value" value="0"> <br><b><span style="text-align:center;display:block; width:100%;" id="countdown"></b></span></p>
        </div>
    </div>
</div>
<?php //echo $this->start('script'); ?>


<?php
//echo $this->end('script');
?>