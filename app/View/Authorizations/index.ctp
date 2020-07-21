<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">   
    <head>
        <!-- Adding Tittle -->
        <title>Login</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="robots" content="index, follow" />
        <!--  Loading Css and scripts-->
        <?php
        echo $this->Html->css('login.css');
        echo $this->Html->script('http://code.jquery.com/jquery-1.10.2.js');
        echo $this->Html->css('jquery-ui.css');
        echo $this->Html->script('jquery-ui.js');
        ?> 
    </head>
    <body>
        <div style="text-align: center;font-size:x-large;color: red ">
        <?php echo $this->Session->flash(); ?>
        </div>
        <!-- Main content -->        
        <div class="login">
            <h1>Enter KO Id</h1>
            <?php
            //Login Form
            echo $this->Form->create('UserMaster', array('url' => array('controller' => 'Authorizations', 'action' => 'loginPost'), 'type' => 'post'));
            echo $this->Form->input('user_sso_id', array('id' => 'url', 'type' => 'text', 'div' => false, 'label' => false));
            ?>
            <h1>Role</h1>
            <?php
            echo $this->Form->input('role_name', array('type' => 'select', 'options' => $roles,'label'=>false,'div'=>false));
            echo $this->Form->submit("Sign-In", array('div' => false, 'label' => false, 'class' => 'uppercase add-cancel'));
            echo $this->Form->end();
            ?>
        </div>
        <div class="shadow"></div>
    </body>
</html>
