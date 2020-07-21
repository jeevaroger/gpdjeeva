<header>
    <div class="logo-lft">
        <a href="<?php if((in_array(VIEW_HR_DATA, $roleResources) || in_array(VIEW_PUBLISHED_VERSION, $roleResources) || in_array(VIEW_DRAFT_VERSION, $roleResources) )){echo $this->webroot.'home';
}elseif(in_array(USER_MGMT, $roleResources)){echo $this->webroot.'user';}else{echo 'javascript:void(0);';
} ?>"><?php echo $this->Html->image('/images/logo.jpg', array('alt' => 'GPD', 'id' => 'logo_id')); ?></a>
    </div>
    <div class="nav-mid">
        <ul>
            <?php if (in_array(VIEW_HR_DATA, $roleResources) || in_array(VIEW_PUBLISHED_VERSION, $roleResources) || in_array(VIEW_DRAFT_VERSION, $roleResources) ) { ?>
            <li><a href="<?php echo $this->webroot.'home'; ?>" class="<?php echo ($this->name == 'Dashboards')?'nav-mid-active':''; ?>">Home</a></li>
            <?php }if (in_array(GPDS, $roleResources)) { ?>
            <li><a href="<?php echo $this->webroot.'GPDS'; ?>" class="<?php echo ($this->name == 'GPDS')?'nav-mid-active':''; ?>">Multi Market Views</a></li>
			<?php }if (in_array(UPLOAD, $roleResources)) { ?>
            <li><a href="<?php echo $this->webroot.'upload'; ?>" class="<?php echo ($this->name == 'DataImporter')?'nav-mid-active':''; ?>">Upload</a></li>
            <?php }if (in_array(USER_MGMT, $roleResources)) { ?>
            <li><a href="<?php echo $this->webroot.'user'; ?>" class="<?php echo ($this->name == 'UserMasters')?'nav-mid-active':''; ?>">User Management</a></li>
             <?php }if (in_array(AUDIT_LOG, $roleResources)) { ?>
            <li><a href="<?php echo $this->webroot.'audit-log'; ?>" class="<?php echo ($this->name == 'AuditLogs')?'nav-mid-active':''; ?>">Audit Log</a></li>
            <?php } ?>

            <!--li><a href="javascript:void(0);">Markets</a></li>
            <li><a href="javascript:void(0);">World Map</a></li>
            <li><a href="javascript:void(0);">Glossary</a></li-->
        </ul>
    </div>
    <?php
    if (isset($marketsJson)) {
    echo '<script>var marketJson = '.$marketsJson.'</script>';
    }else{
    echo '<script>var marketJson = []</script>';
    }
    if (isset($market_selector_on_head) && $market_selector_on_head) {
    if (isset($userMarkets) && isset($selectedMarketIso)) {
    $marketLists = $this->Market->getMarketArray($userMarkets, $selectedMarketIso, $selectedAggregateIso);
    echo $marketLists;
    }
    }
    ?>



<?php if (isset($userMarketsName) && isset($selectedMarketIso)) { ?>
    &nbsp;<div class="summary-header margintop10">
        <div id="market_selector"  data-input-name="country" data-selected-country = "<?php echo $selectedMarketIso; ?>"></div>   
    </div>
<?php } ?>


<?php  if (isset($userAggregatesName)) {   ?>
    <div class="summary-header margintop10">
       <?php echo $this->Market->aggregateDropdown($userAggregatesName, $selectedAggregateIso); ?>
    </div>
<?php } ?>


<?php if (isset($publicationPeriod) && isset($selectedPublicationDate)) { ?>
    <div class="summary-header margintop10" style="margin-left:10px;">

<?php echo $this->Market->quarterDropdown($publicationPeriod, $selectedPublicationDate); ?>
    </div>
<?php } ?>
    <div class="user-rht" style="width: 20%">
        <nav id="primary_nav_wrap">
            <p><?php echo isset($user_master_id)?$this->Users->getUserName($user_master_id):''; ?> <?php echo $this->Html->image('/images/user-icon.jpg', array('alt' => 'view')) ?></p>
            <p>
                <?php  if (in_array(AUDIT_LOG, $roleResources)) { ?>
                <a href="<?php echo $this->webroot.'glossary/upload'; ?>" class="top-menu <?php echo ($this->name == 'Glossary' && $this->action == 'upload')?'underline':''; ?>">Glossary Upload</a> |
                 <?php } ?>

                <?php if($this->name != 'UserMasters'){ ?>
                <a href="<?php echo $this->webroot.'glossary/exportGlossary'; ?>" class="top-menu <?php echo ($this->name == 'Glossary' && $this->action == 'export')?'underline':''; ?>">Glossary</a> |
                <?php } ?>
                <a href="javascript:void(0);" class="top-menu" id="help">Help</a> | <?php
                echo $this->Html->link(
                'Logout', array(
                'controller' => 'Authorizations',
                'action' => 'logout',
                'class' => 'top-menu logout'
                )
                );
                ?></p>
        </nav>
    </div>
    <div class="<?php echo ($this->name == 'Dashboards' && $this->action == 'summary')?'top-line-summary':'top-line'; echo ($this->name == 'Dashboards' && $this->action == 'index')?' top-line-detail':''; ?>">
        <div class="submenu-wrapper-mid">
            <div class="back-frwrd-arrow" onclick="goBack()" ><?php echo $this->Html->image('/images/rht-arrow.jpg', array('alt' => 'back')); ?></div>
            <div class="back-frwrd-arrow" onclick="goForward()" ><?php echo $this->Html->image('/images/lft-arrow.jpg', array('alt' => 'forward')); ?></div>
            <?php if (isset($navigation_link) && $navigation_link) { ?>
            <ul>
                <li style="font-size:12px;"><a href="javascript:void(0);" url='dashboard/summary' class="navigationlink <?php echo ($routeName['0'] == 'dashboard_summary') ? 'submenu-wrapper-mid-active' : ''; ?>">Single Market-Summary</a></li>
                <li style="font-size:12px;"><a href="javascript:void(0);" url='dashboard/detail' class="navigationlink <?php echo ($routeName['0'] == 'dashboard_detail') ? 'submenu-wrapper-mid-active' : ''; ?>">Single Market-Detail</a></li>

            </ul>
            <?php } ?>
               <?php if (isset($gpds_navigation_link) && $gpds_navigation_link && (isset($readUserwarning) && $readUserwarning == false)) { ?>

            <ul>
                <li style="font-size:12px;"><a url="GPDS/index" href="javacript:void(0);" id="gpds_index" class="navigationlink <?php echo ($this->name == 'GPDS' && $this->action == 'index') ? 'submenu-wrapper-mid-active' : ''; ?>">Multi Market-Summary</a></li>
                <li style="font-size:12px;"><a url="GPDS/firstView" href="javacript:void(0);" id="gpds_firstview" class="navigationlink <?php echo ($this->name == 'GPDS' && $this->action == 'firstView') ? 'submenu-wrapper-mid-active' : ''; ?>">Multi Market-Detail 1</a></li>
                <li style="font-size:12px;"><a url="GPDS/secondView" href="javacript:void(0);" id="gpds_secondview" class="navigationlink <?php echo ($this->name == 'GPDS' && $this->action == 'secondView') ? 'submenu-wrapper-mid-active' : ''; ?>">Multi Market-Detail 2</a></li>
                <li style="font-size:12px;"><a url="GPDS/thirdView" href="javacript:void(0);" id="gpds_thirdview" class="navigationlink <?php echo ($this->name == 'GPDS' && $this->action == 'thirdView') ? 'submenu-wrapper-mid-active' : ''; ?>">Multi Market-Detail 3</a></li>
            </ul>
            <?php } ?>

        </div>


<?php if($this->action == 'marketSelector' && (isset($readUserwarning) && $readUserwarning == false)) { ?> 
        <div class="summary-auto">
            <div class="print-mark">
                <a href="javascript:void(0);"><?php echo $this->Html->image('/images/pdf-icon.jpg', array('alt' => 'pdf', 'onclick'=> "printHeatMap('pdf')")) ?></a>
                <div class="question-mark-popup pdf">Click to Export to PDF</div>
            </div>

            <div class="print-mark">
                <a href="javascript:void(0);"><?php echo $this->Html->image('/images/icon.jpg', array('alt' => 'excel', 'onclick'=> "printHeatMap('excel')")) ?></a>
                <div class="question-mark-popup excel">Click to Export to Excel</div>
            </div>
        </div>
         <?php } ?>


     <?php if($this->name == 'GPDS' && (isset($readUserwarning) && $readUserwarning == false)) { ?> 
        <div class="summary-auto">

            <div class="print-mark" id="gpds_excel">
                <a href="javascript:void(0);"><?php echo $this->Html->image('/images/icon.jpg', array('alt' => 'excel')) ?></a>
                <div class="question-mark-popup excel">Click to Export to Excel</div>
            </div>

            <div class="print-mark" id="gpds_pdf">
                <a href="javascript:void(0);"><?php echo $this->Html->image('/images/pdf-icon.jpg', array('alt' => 'pdf')) ?></a>
                <div class="question-mark-popup pdf">Click to Export to PDF</div>
            </div>

        </div>
         <?php } ?>


    <?php if (isset($navigation_link) && $navigation_link) { ?>
        <div class="summary-auto">
            <?php if (isset($filterDetail['dashboardfilter_id'])){ ?>
<?php if (in_array(BULK_SIGN_OFF, $roleResources) && ($this->name == 'Dashboards' && $this->action == 'index') && isset($selectedAggregateIso) && empty($selectedAggregateIso)) { ?>
            <div class="print-mark" id="bulk_sign_off" onclick="askBulkSignoffConfirmation()">
                <a href="javascript:void(0);" class="top-menu">Publish</a>
                <div class="arrow-up arrow-up2"></div>
                <div class="question-mark-popup print">Only Signed Off markets would be published</div>
            </div>
<?php } if (in_array(PRINT_DETAIL, $roleResources)) { ?>
            <div class="print-mark" id="print">
                <a href="javascript:void(0);"><?php echo $this->Html->image('/images/print-icon.jpg', array('alt' => 'print')) ?></a>
                <div class="arrow-up arrow-up2"></div>
                <div class="question-mark-popup print">Click to Print</div>
            </div>
<?php } if (in_array(EXPORT_EXCEL, $roleResources)) { ?>
            <div class="print-mark" id="excel">
                <a href="javascript:void(0);"><?php echo $this->Html->image('/images/icon.jpg', array('alt' => 'excel')) ?></a>
                <div class="arrow-up arrow-up2"></div>
                <div class="question-mark-popup excel">Click to Export to Excel</div>
            </div>
<?php } if (in_array(EXPORT_PDF, $roleResources)) { ?>
            <div class="print-mark" id="pdf">
                <a href="javascript:void(0);"><?php echo $this->Html->image('/images/pdf-icon.jpg', array('alt' => 'pdf')) ?></a>
                <div class="arrow-up arrow-up2"></div>
                <div class="question-mark-popup pdf">Click to Export to PDF</div>
            </div>
            <?php }
            }
            ?>
        </div>
<?php } ?>
    </div>
</header>

