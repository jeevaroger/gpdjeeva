<!DOCTYPE html>
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
        echo $this->Html->css(array('custom.css', 'countrySelect.min.css', 'demo.css', 'styles.css', 'modified.css'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
    </head>

    <body>
        <div id="wrapper">
            <div id="main-wrapper" class="relative">
                <header>
                    <div class="logo-lft">
                       <?php echo $this->Html->image('/images/logo.jpg', array('alt' => 'GPD')); ?>
                    </div>


                    <div class="user-rht">

                    </div>

                </header>
                <div class="border-div" style="border-right:none; border-left:none;"></div>
                <div class="middle-wrapper-content" style="border:none; text-align:center;">
                    <!--h1 style="font-size:200px; padding:0px; margin:40px;">404</h1-->
                    <h1><?php echo $errorMessage; ?></h1>
                    <p>Please try again after logout, <a href="<?php echo $this->webroot; ?>auth/logout" class="red">Logout</a>.
                    </p>
                </div>
            </div>
        </div>
    </body>

</html>