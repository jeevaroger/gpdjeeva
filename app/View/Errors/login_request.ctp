
<div>
        <p>Your current session has been completed, click here to  continue  &nbsp;&nbsp;
        <?php echo $this->Html->link('Continue', array('controller' => 'Authorizations','action' => 'index',));?>
        </p><br>
        <p>Else click here to logout completely 
        <?php echo $this->Html->link('Logout', array('controller' => 'Authorizations','action' => 'ulogout',));?>
        </p>
    
</div>