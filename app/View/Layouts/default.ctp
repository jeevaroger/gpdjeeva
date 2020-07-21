<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo "Coca Cola Company | " . $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('custom.css', 'countrySelect.min.css', 'demo.css', 'styles.css', 'modified.css', 'chosen.css', 'jquery-ui.css'));
        $isAuditLogIndex  = ($this->name == 'AuditLogs' && $this->action == 'index');
        $isAuditLogDetail  = ($this->name == 'AuditLogs' && $this->action == 'detail');
        $reducedSummaryIndex  = ($this->name == 'GPDS');
        $loginHistoryIndex = ($this->name == 'LoginHistory' && $this->action == 'index');
        $isDashboardSummary = ($this->name == 'Dashboards' && $this->action == 'summary');
        
        $isGPDSupload  = ($this->name == 'Glossary' && $this->action == 'upload');
        if($isGPDSupload) {
        echo $this->Html->css(array('custom_upload.css'));
        }
        
        if($isAuditLogIndex){
            echo $this->Html->css(array('bootstrap.min.css','bootstrap-multiselect.css'));
        }
        if($reducedSummaryIndex || $loginHistoryIndex){
            echo $this->Html->css(array('ScrollTabla.css', 'chosen.css')); 
        }
        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
    </head>
    <body>
        <?php //echo $this->element('sql_dump'); ?>
        <div class="overlay-div" style="display: none;"></div>
        <?php echo $this->element('help'); ?>
        <?php if ($this->name == 'Dashboards' && ($this->action == 'summary' || $this->action == 'index')) { ?>
        <!--pop up Help start-->

            <?php echo $this->element('confirmation'); ?>
        <!--pop up Help end-->
        <!--pop up export to PDF,EXCEL,PRINT start-->
            <?php echo $this->element('export_print'); ?>
        <!--pop up export to PDF,EXCEL,PRINT end-->
        <?php } ?>
        <div id="wrapper" class="wrapper_detail">
            <div id="main-wrapper" class="relative <?php echo (($this->name == 'Dashboards' && $this->action == 'index')||($this->name == 'AuditLogs')) ? '' : 'main-wrapper-upload'; ?>">
                <?php echo $this->element('header') ?>
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>

        <?php
        echo '<script> var baseUrl = "' . $this->webroot . '"</script>';
        echo '<script> var actionName = "' . $this->action . '"</script>';
        echo $this->Html->script(array('jquery-1.10.2.js',  'myjs.js', 'chosen.jquery.js', 'prism.js'));
        echo $this->Html->script('jquery.validate.min.js');
        echo $this->Html->script('jquery-ui.js');
        if($isAuditLogIndex){
            echo $this->Html->script(array('bootstrap.min.js','bootstrap-multiselect.js'));
        }
        if($isAuditLogDetail){
          echo $this->Html->script(array('auditlogdetail.js'));  
        }
        if($isDashboardSummary){
          echo $this->Html->script(array('highcharts.js', 'ewa.js'));  
        }
        
        
        echo $this->fetch('script');
        if ($this->name != 'GPDS') {
        echo $this->Html->script(array('custom.js'));
        }
        ?>
        <div class="loading-img" style="display: none"><?php echo $this->Html->image('/images/loading.gif') ?></div>
        <?php
       if ($this->name == 'Dashboards') {
          echo $this->Form->create(null, array(
            'url' => array('controller' => 'dashboards', 'action' => 'summary'), 'id'  => 'dashbard_resubmit'
        ));
         echo $this->Form->end();
            
        }
        
        ?>
    </body>
</html>

