<div class="edit-rht">
    <?php if ($approval_status == DASHBOARD_STATUS_OPEN && (in_array(trim(strtoupper($ad_group)), array(BU_ADMIN, GLOBAL_ADMIN)))) { ?>
        <div class="img-arrow" style="display: none"></div>
        <a href="javascript:void(0);" class="edit show-txt check_dashboard" id="edit_dashboard">Edit</a>
        <button onclick="redirectWithPostCancel()" type="button" name="dashboard_cancel" id="dashboard_cancel" class="button-bg" style="display: none" value="cancel">Cancel</button>
        <?php if($isIndicatorAndKeyTakeoutAllowed){?>
        <button onclick="askConfirmation(this.id)" type="button" name="dashboard_save" id="dashboard_save" class="button-bg" style="display: none" value="save">Save</button>
        <?php }?>
        <?php if (in_array(trim(strtoupper($ad_group)), array(GLOBAL_ADMIN))) {
            ?>
            <button onclick="askSignoffConfirmation(this.id)" type="button" name="dashboard_signoff" id="dashboard_published" class="button-bg" style="display: none" value="save">Sign-off</button>
        <?php } else { ?>
            <button onclick="askConfirmation(this.id)" type="button" name="dashboard_signoff" id="dashboard_signoff" class="button-bg" style="display: none" value="signoff">Sign-off</button>
        <?php } ?>

    <?php } elseif ($approval_status == DASHBOARD_SIGNOFF_STATUS && strcmp(trim(strtoupper($ad_group)), trim(strtoupper(GLOBAL_ADMIN))) == 0) { ?>
        <div class="img-arrow" style="display: none"></div>
        <a href="javascript:void(0);" class="edit show-txt edit_dashboard_btn" id="edit_dashboard">Edit</a>
        <button onclick="redirectWithPostCancel()" type="button" name="dashboard_cancel" id="dashboard_cancel" class="button-bg" style="display: none" value="cancel">Cancel</button>
        <button onclick="askConfirmation(this.id)" type="button" name="dashboard_save" id="dashboard_published" class="button-bg" style="display: none" value="save">Sign-off</button>
        <button onclick="askConfirmation(this.id)" type="button" name="dashboard_signoff" id="dashboard_reopen" class="button-bg" style="display: none" value="signoff">Re-open</button>
    <?php } elseif ($approval_status == DASHBOARD_PUBLISHED_STATUS && strcmp(trim(strtoupper($ad_group)), trim(strtoupper(GLOBAL_ADMIN))) == 0 && $isEditable) { ?>
        <div class="img-arrow" style="display: none"></div>
        <a href="javascript:void(0);" class="edit show-txt edit_dashboard_btn" id="edit_dashboard">Edit</a>
        <button onclick="redirectWithPostCancel()" type="button" name="dashboard_cancel" id="dashboard_cancel" class="button-bg" style="display: none" value="cancel">Cancel</button>
        <button onclick="askConfirmation(this.id)" type="button" name="dashboard_signoff" id="dashboard_reopen" class="button-bg" style="display: none" value="signoff">Re-open</button>
    <?php } elseif ($approval_status == DASHBOARD_STATUS_OPEN && strcmp(trim(strtoupper($ad_group)), trim(strtoupper(GLOBAL_ADMIN))) == 0) { ?>
        <div class="img-arrow" style="display: none"></div>
        <a href="javascript:void(0);" class="edit show-txt edit_dashboard_btn" id="edit_dashboard">Edit</a>
        <button onclick="redirectWithPostCancel()" type="button" name="dashboard_cancel" id="dashboard_cancel" class="button-bg" style="display: none" value="cancel">Cancel</button>
        <button onclick="askSignoffConfirmation(this.id)" type="button" name="dashboard_save" id="dashboard_published" class="button-bg" style="display: none" value="save">Sign-off</button>
    <?php } ?>

</div>

