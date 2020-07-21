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
        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
    </head>
    <body>
        <div class="overlay-div" style="display: none;"></div>
        <?php if ($this->name == 'Dashboards' && ($this->action == 'summary' || $this->action == 'index')) { ?>
            <!--pop up Help start-->
            <?php echo $this->element('help'); ?>
            <?php echo $this->element('confirmation'); ?>
            <!--pop up Help end-->
            <!--pop up export to PDF,EXCEL,PRINT start-->
            <?php echo $this->element('export_print'); ?>
            <?php echo $this->element('freeze_alert'); ?>
            <!--pop up export to PDF,EXCEL,PRINT end-->
        <?php } ?>
        <?php
        echo $this->Form->create(null, array(
            'url' => array('controller' => 'Dashboards', 'action' => 'dashboardSave'), 'id'  => 'dashboard_save_form'
        ));
        ?>
        <div id="wrapper" class="wrapper_detail">
            <div id="main-wrapper" class="relative <?php echo ($this->name == 'Dashboards' && $this->action == 'index') ? '' : 'main-wrapper-upload'; ?>">
                <?php echo $this->element('header') ?>
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>

        </div>
        <?php if ($this->name == 'Dashboards' && ($this->action == 'index')) { ?>
            <!--overlay effect-->

            <?php
            echo $this->element('dashboard_save', array(
                'metricesData'               => (!empty($metricesData) ? $metricesData : NULL),
                'statusPerformanceIndiArray' => (!empty($statusPerformanceIndiArray) ? $statusPerformanceIndiArray : NULL)
            ));
            ?>

            <!--overlay effect-->
        <?php } ?>
        <?php echo $this->Form->end(); ?>
        <?php if ($this->name == 'Dashboards' && ($this->action == 'index')) { ?>
            <?php echo $this->element('edit_popup'); ?>

        <?php } ?>
        <?php
        echo '<script> var baseUrl = "' . $this->webroot . '"</script>';
        echo '<script> var actionName = "' . $this->action . '"</script>';
        echo $this->Html->script(array('jquery-1.10.2.js', 'chosen.jquery.js', 'prism.js'));
        echo $this->Html->script('jquery.validate.min.js');
        echo $this->Html->script('jquery-ui.js');
        echo $this->Html->script('jquery.number.min.js');
        echo $this->fetch('script');
        echo $this->Html->script(array('custom.js'));
        ?>
        <?php //echo $this->element('sql_dump');  ?>

        <div class="loading-img" style="display: none"><?php echo $this->Html->image('/images/loading.gif') ?></div>
        <?php
        echo $this->Form->create(null, array(
            'url' => array('controller' => 'dashboards', 'action' => 'summary'), 'id'  => 'dashbard_resubmit'
        ));
        echo $this->Form->end();
        ?>
    </body>

</html>

