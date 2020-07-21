<!doctype html>
<html lang="en" class="a">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="/gpd/favicon.ico" type="image/x-icon" rel="icon"/>
        <link href="/gpd/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
        <!-- FontAwesome Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo $this->webroot; ?>assets/vendor/bootstrap-4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $this->webroot; ?>assets/vendor/bs4-switch/bs4-switch.css">
        <link rel="stylesheet" href="<?php echo $this->webroot; ?>assets/vendor/fastselect/css/fastselect.css">
        <!-- App Styles -->
        <link rel="stylesheet" href="<?php echo $this->webroot; ?>assets/css/styles.css">

        <title>Coke GPD 2.0</title>
    </head>
    <body>
    <?php echo $this->element('gsc_header');   
          echo $this->Form->create(null, array(
            'url' => array('controller' => 'gsc', 'action' => $this->action), 'id'  => 'gsc_resubmit'
        )); ?>
        <div class="container-fluid">
            <div class="shadow-sm p-3 mb-4 bg-white rounded">

      <?php //if($this->name != 'GscImporter' &&  $this->action != 'home' && $this->action != 'dashboard'){ 
            //echo $this->element('gsc_filter'); 
            //}  
        echo $this->Form->end();
       ?> 

      <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <script>
            var baseUrl = '<?php echo $this->webroot; ?>';
        </script>
         
     <?php echo $this->element('gsc_footer'); ?>
         <?php if($this->action != 'home') { ?>
        <script type="text/javascript" src="<?php echo $this->webroot;?>assets/js/jquery.min.3.3.1.js"></script> 
        <script type="text/javascript" src="<?php echo $this->webroot;?>assets/js/popper.min.1.14.3.js"></script> 
        <script type="text/javascript" src="<?php echo $this->webroot;?>assets/vendor/bootstrap-4.1.1/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="<?php echo $this->webroot;?>assets/vendor/fastselect/js/fastsearch.js"></script> 
        <script type="text/javascript" src="<?php echo $this->webroot;?>assets/vendor/fastselect/js/fastselect.js"></script> 
        <script type="text/javascript" src="<?php echo $this->webroot;?>assets/js/common.js"></script> 
        <script type="text/javascript" src="<?php echo $this->webroot;?>js/gsc_common.js"></script> 
        <?php if(in_array($this->action,array('total', 'summary', 'sharesummary', 'xgvsharesummary', 'gvsharesummary', 'ssd', 'coketm', 'juice', 'plantbased', 'dairy', 'tea', 'water', 'sports', 'coffee', 'energy', 'media', 'customer', 'commercial'))) { ?>
        <script type="text/javascript" src="<?php echo $this->webroot;?>js/jquery.floatThead.js"></script>
        <script type="text/javascript" src="<?php echo $this->webroot;?>js/tablehead.js"></script> 
          <?php  } ?>
        <?php if($this->action == 'upload') { ?>
            <script type="text/javascript" src="<?php echo $this->webroot;?>js/gsc_upload.js"></script> 
        <?php  } ?>
            
            
            
       
     <?php } ?>
        

    </body>
</html>



