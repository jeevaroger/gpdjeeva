  <!doctype html>
<html lang="en" class="a landing">
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
  <!-- App Styles -->
  <link rel="stylesheet" href="<?php echo $this->webroot; ?>assets/css/styles.css">

  <title>Coke GPD 2.0</title>
</head>

<style>
    .a .dropdown-item {
    padding: .35rem 0.5rem;
}
</style>
<body>
  <!-- header nav start -->
  <nav class="navbar navbar-expand-md fixed-top bg-white border-bottom shadow-sm">
    <!-- logo -->
    <a class="navbar-brand" href="<?php echo $this->webroot. 'gsc/myindex'; ?>"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!-- app global navigation start -->
      <ul class="navbar-nav ml-5 mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Growth Scorecard
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../gsc/home">Home</a>
            <a class="dropdown-item" href="../gsc/dashboard">Single Market View</a>
            <a class="dropdown-item" href="../gsc/summary">Multiple Market View</a>
          </div>
        </li>
        
      <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Quarterly Business Review
          </a>
          <div class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Old vs Old</a>
            <a class="dropdown-item" href="#">New vs New (North America) </a>
          </div>
        </li> -->
        
        <?php if($user_role_id == 7){ ?>
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Upload GSC Template
          </a>
           <div class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../GscImporter/upload">Upload</a>
          </div>      
        </li>
         <?php } ?>
        
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
             <div class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdown" >
            <?php foreach ($gscCategories as $value) { 
                        $name = $value;
                      if($value == 'Total KO') {
                            $val = 'total';
                        } else{
                            $val = strtolower($value);
                        }
                        
                     if($value == 'Summary'){
                            $name = 'Total';
                        }
                ?>
          
            <a class="dropdown-item"  href="<?php echo '../gsc/'.trim(str_replace(' ', '', $val)); ?>"><?php echo $name; ?></a>
        
            
            <?php } ?>
            
              </div>    
        </li>
   
       
      </ul>
      <!-- app global navigation end -->
      <!-- header user options start  -->
      <div class="user-options">
        <div class="user-icon float-right ml-2"><a href="#" class="mr-3" data-toggle="modal" data-target="#profileModal" data-original-title="Help"><i class="far fa-user-circle"></i></a></div>
        <div class="float-right">
          <div class="user-name text-right"><strong><?php echo isset($user_master_id)?$this->Users->getUserName($user_master_id):''; ?></strong></div>
          <div class="user-links text-right">
            <a href="../Gsc/glossaryUpload" class="mr-3">Glossary Upload</a>
            <a href="../Gsc/glossaryExport" class="mr-3">Glossary</a>
            <a href="#" class="mr-3" data-toggle="modal" data-target="#helpModal" data-original-title="Help">Help</a>
            <?php
                echo $this->Html->link(
                'Logout', array(
                'controller' => 'Authorizations',
                'action' => 'logout',
                )
                );
                ?>
          </div>          
        </div>
      </div>
      <!-- header user options end  -->
    </div>
  </nav>
<div class="content">    
    <!-- page options start (next/prev, download btns) -->
    <div class="page-options">
          <h4 class="page-title text-center" style="margin-right: 239px;">Global Performance Dashboard 2.0</h4>
    </div>
    <!-- page options end -->
    <div class="container-fluid">
      <div class="p-3 mb-4">
        <div class="content-wrapper" style="height: 400px;">
          <div class="row landing-links pt-5">
              
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center" style="margin-left:130px;">
              <a href="<?php echo $this->webroot.'gsc/home';  ?>" class="cap-icon">Growth Scorecard</a>
              <p class="text-center" style="color:white !important"> <?php echo $this->Gsc->getPublicationDisplayName($lastPeriod); ?> </p>
            </div>
              
          
    
          </div>
          <div class="pt-2 mt-5" style="border-top: 1px dotted #c00;">
              <h5 style="margin-left:198px;">Quick link:</h5>
          <ul class="list-inline">
            <li class="list-inline-item" style="margin-left:119px;">
              <a href="<?php echo $this->Html->url('/home'); ?>"><span class="badge badge-light p-2 shadow-sm" style="font-size: 100%;font-weight: 400;">Global Performance Dashboard 1.0</span></a>
            </li>
            
          </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page content end -->

  <!-- page footer start -->
  <footer>
    <div class="container-fluid">
      <p class="text-white text-right p-3">&copy; Copyright 2019 Coca-Cola</p>
    </div>
  </footer>
  
 
  <!-- Help Modal Start -->

<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="helpModalTitle">Help</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="min-height:250px;">
                <p> <strong><u>I need business support / I have questions about the data:</u></strong></p>
                <p> Martin Egger : megger@coca-cola.com </p>
                <p> Liz Morales : limorales@coca-cola.com </p>
                <p> <strong><u>I need technical support:</u></strong> </p>
                <p> Link to technical support - CCSN incident management (https://ccsn.service-now.com/ess/ ) </p>
            </div>
        </div>
    </div>
</div>

<!-- Help Modal End -->


<!-- Profile Modal Start -->

<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalTitle">Profile Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<?php $profile = $this->Users->getProfileInfo($user_master_id);?>
            <<div class="modal-body" style="min-height:180px;">
                <p><b>KO ID :</b> <?php echo $profile['ko_id']; ?></p>
                <p><b>Email :</b> <?php echo $profile['email']; ?></p>
                <p><b>First Name :</b> <?php echo $profile['first_name']; ?></p>
                <p><b> Last Name : </b><?php echo $profile['last_name']; ?></p>
                
            </div>
        </div>
    </div>
</div>

<!-- Profile Modal End -->


     <script type="text/javascript" src="<?php echo $this->webroot;?>assets/js/jquery.min.3.3.1.js"></script> 
     <script type="text/javascript" src="<?php echo $this->webroot;?>assets/js/popper.min.1.14.3.js"></script> 
     <script type="text/javascript" src="<?php echo $this->webroot;?>assets/vendor/bootstrap-4.1.1/js/bootstrap.min.js"></script> 
     <script type="text/javascript" src="<?php echo $this->webroot;?>assets/js/common.js"></script> 
</body>
</html>