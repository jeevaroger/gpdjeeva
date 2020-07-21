<?php

//Adding Tittle
$this->start('title');
echo "Login History";
$this->end();

//Loading Css
$this->start('css');
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php
$this->end();//echo $this->element('sql_dump');exit;
?>

<!--Main content-->
<div class="middle-wrapper-content">
    <div class="full-width margintop10">
        <div class="add-user-rht lineheight40 red" style="margin-left: 45%"><?php echo $this->Session->flash(); ?></div>
        <?php if (sizeof($loginHistory) == 0) { ?>
        <div class="add-user-rht lineheight40 red" style="margin-left: 45%">No records found.</div>
        <?php } ?>
    </div>
    <!--Search form-->
    <div class="full-width">
        <?php
        echo $this->Form->create(null, array(
            'url' => array('controller' => 'LoginHistory', 'action' => 'filter'), 'id' => 'search_form'
        ));
        echo $this->Users->roleDropDown($selected_role);
        echo ' Login From:' .$this->Form->input('searchbox1', array('label' => false, 'id' => 'start_date', 'class' => 'search-box', 'div' => false,'default'=>$startDate)).' ';
        echo ' To:' .$this->Form->input('searchbox2', array('label' => false, 'id' => 'end_date', 'class' => 'search-box', 'div' => false,'default'=>$endDate)).' ';
        echo $this->Form->submit('SEARCH', array('class' => 'search-btn', 'div' => false));
        ?>
        <button class='search-btn' id='resetButton'>RESET</button>        
        <?php echo $this->Form->end();
        ?>
    </div>
    <!--User List-->
    <div class="full-width margintop45">
        <div class="rTable">
            <div class="rTableRow">
                <div class="rTableHead">KO ID</div>
                <div class="rTableHead">First Name</div>
                <div class="rTableHead">Last Name</div>
                <div class="rTableHead">Email</div>
                <div class="rTableHead">Role</div>
                <div class="rTableHead">Login Date</div>
                <div class="rTableHead">Logout Date</div>
            </div>
            <?php
            if (!empty($loginHistory)) {
                foreach ($loginHistory as $login):
                    ?>
            <div class="rTableRow">
                <div class="rTableCell"><?php echo h($login['LoginHistory']['user_sso_id']); ?></div>
                <div class="rTableCell"><?php echo h($login['LoginHistory']['first_name']); ?></div>
                <div class="rTableCell"><?php echo h($login['LoginHistory']['last_name']); ?></div>
                <div class="rTableCell"><?php echo h($login['LoginHistory']['email']); ?></div>
                <div class="rTableCell"><?php echo h($login['LoginHistory']['role_id']) ?></div>
                <div class="rTableCell"><?php echo (trim($login['LoginHistory']['login_time']) != '' ? h(date('Y-m-d H:i:s', strtotime($login['LoginHistory']['login_time']))) : 'NA'); ?></div>
                <div class="rTableCell"><?php echo (trim($login['LoginHistory']['logout_time']) != '' ? h(date('Y-m-d H:i:s', strtotime($login['LoginHistory']['logout_time']))) : 'NA'); ?></div>
            </div>
                    <?php
                endforeach;
            }
            ?>
        </div>
        <div class="full-width margintop45" style="text-align: center">      
            <ul class="pagination"><?php
                echo $this->Paginator->numbers(array('tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active', 'separator' => ''));
                ?></ul>           
        </div>
    </div>

        
    <?php  echo $this->Html->script(array('jquery-1.10.2.js')); ?>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        
        $('#resetButton').click(function () {

            window.location = "<?php echo $this->Html->url(array('controller' => 'LoginHistory', 'action' => 'index')); ?>";
            return false;
        });
        $(function () {
            $("#start_date, #end_date").datepicker();
        });

    </script>