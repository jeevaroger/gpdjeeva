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
        echo $this->Html->css(array('custom.css', 'demo.css', 'styles.css', 'modified.css'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
    </head>
    <body>
        <div class="overlay-div" style="display: none;"></div>
        <div class="confirmation-box" id="uploadConfirm" style="display: none;">
            <div class="overlay-head"></div>
            <div class="overlay-head-txt">

                <div class="suport-title font18">Confirmation</div>
                <div class="close-model" onclick="confirmForUoload(false)"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
                <div class="full-width margintop25 text-center">Are you sure you want to upload the file?</div>
                <div class="support-prfomance font20 text-center">
                    <button class="uppercase add-cancel" onclick="confirmForUoload(true)">Yes</button>
                    <button class="uppercase add-cancel" onclick="confirmForUoload(false)">No</button>
                </div>
            </div>
        </div>
        <?php echo $this->element('help'); ?>
        <div id="wrapper">
            <div id="main-wrapper" class="relative main-wrapper-upload">
                <?php echo $this->element('header') ?>
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <?php
        echo '<script> var baseUrl = "' . $this->webroot . '"</script>';
        echo $this->Html->script(array('jquery-1.10.2.js'));
        echo $this->fetch('script');
        ?>
        <?php //echo $this->element('sql_dump'); ?>
        <?php
        echo '<script> var baseUrl = "' . $this->webroot . '"</script>';
        echo $this->Html->script(array('custom.js'));
        ?>
        <div class="loading-img" style="display: none"><?php echo $this->Html->image('/images/loading.gif') ?></div>
    </body>

</html>

