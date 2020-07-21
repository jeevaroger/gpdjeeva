<b>Hi <?php echo $firstName ?>,</b>
<p>We would like to inform you that data has been uploaded for following markets in Global Performance Dashboard:</p>
<p>Country Name: <?php echo $marektString ?>.</p>
<p>Publication Period: <?php echo $timePeriod ?>.</p>
<?php if($actionRequired) { ?>
<p>Action required: BU Admin/Global Admin to review & sign-off</p>
<?php } ?>
<p>Thanks,</p>
<p><?php echo DASHBOARD_TEAM; ?></p>