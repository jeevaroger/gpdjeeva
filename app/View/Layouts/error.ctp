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
                        <a href="<?php if($this->name == 'Dashboards'){echo  'javascript:void(0);';}elseif((in_array(VIEW_HR_DATA, $roleResources) || in_array(VIEW_PUBLISHED_VERSION, $roleResources) || in_array(VIEW_DRAFT_VERSION, $roleResources) )){echo $this->webroot.'home';}else{echo 'javascript:void(0);';} ?>"><?php echo $this->Html->image('/images/logo.jpg', array('alt' => 'GPD')); ?></a>
                    </div>


                    <div class="user-rht">

                    </div>

                </header>
                <div class="border-div" style="border-right:none; border-left:none;"></div>
                <!--div class="middle-wrapper">
                        <ul class="upload-data">
                                <li><a href="javascript:void(0);" class="upload-active">Upload Data</a></li>
                                <li><a href="javascript:void(0);">Sample Template</a></li>
                        </ul>
                </div-->
                <div class="middle-wrapper-content" style="border:none; text-align:center;">
                    <!--h1 style="font-size:200px; padding:0px; margin:40px;">404</h1-->
                    <h1>You have tried to access the page that does not exist Or you are not authorized to see its content.</h1>
                    <p>Go back to home page, please  <a href="<?php if((in_array(VIEW_HR_DATA, $roleResources) || in_array(VIEW_PUBLISHED_VERSION, $roleResources) || in_array(VIEW_DRAFT_VERSION, $roleResources) )){echo $this->webroot.'home';
}elseif(in_array(USER_MGMT, $roleResources)){echo $this->webroot.'user';}else{echo 'javascript:void(0);';
} ?>" class="red">click here</a>.</p>
                </div>
            </div>
        </div>
    </body>

</html>