<!-- header nav start -->

<style>
    .a .dropdown-item {
    padding: .35rem 0.5rem;
}

</style>
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
            <a class="dropdown-item <?php if($this->action == 'home') { echo ' bg-primary text-white';} ?>" href="../gsc/home">Home</a>
            <a class="dropdown-item <?php if($this->action == 'dashboard') { echo ' bg-primary text-white';} ?>" href="../gsc/dashboard">Single Market View</a>
            <a class="dropdown-item" href="../gsc/summary">Multiple Market View</a>
          </div>
        </li>
        
     <!--   <li class="nav-item dropdown">
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
            <a class="dropdown-item <?php if($this->action == 'upload') { echo ' bg-primary text-white';} ?>" href="../GscImporter/upload">Upload</a>
          </div>      
        </li>
        
        <?php } ?>
        
        
        
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
             <div class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdown">
            <?php 
           
            foreach ($gscCategories as $value) {
                      $name = $value;
                      if($value == 'Total KO') {
                            $val = 'total';
                        } else{
                            $val = strtolower($value);
                        }
                        
                        if($value == 'Summary'){
                            $name = 'Total';
                        }
                       $val = trim(str_replace(' ', '', $val));
                ?>
          
            <a class="dropdown-item <?php if($this->action == $val) { echo ' bg-primary text-white';} ?>"  href="<?php echo '../gsc/'.$val; ?>"><?php echo $name; ?></a>
        
            
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
<!-- page options start (next/prev, download btns) -->
  <div class="page-options">
    <div class="row">
      <div class="col-3">
        <a href="#" class="tt ic prev mr-2" data-original-title="Previous page" onclick="goBack();"></a>
        <a href="#" class="tt ic next" data-original-title="Next page" onclick="goForward();"></a>
      </div>
        <div class="col-4 text-center">
        <h4 class="page-title"><?php echo isset($heading)? $heading : 'Global Performance Dashboard 2.0'; ?></h4>
      </div>
      <div class="col-5">
            <?php if($this->action == 'dashboard') { ?>        
            <div class="col-4" style="float:left;">
                  <?php echo $this->Gsc->populatePeriods($periods, $selectedPeriod, "font-size:.8rem;width:178px;",  'gsc_cycle'); ?>
              </div>
            <div class="col-4" style="float:left;">
                  <?php echo $this->Gsc->populateMarkets($userMarketsName, $selectedMarket, "font-size:.8rem;margin-left:20px;"); ?>
                  
              </div>
             <?php } ?>  
          
          
          <?php if(in_array($this->action, array('sharesummary',  'xgvsharesummary', 'gvsharesummary' ,))) { 
                    $a = ' selected=selected';
                    $b = $c = '';
                    if ($shareCat == 'sharesummary') {
                          $a = ' selected=selected';
                      } elseif ($shareCat == 'xgvsharesummary') {
                           $b = ' selected=selected';
                      } elseif ($shareCat == 'gvsharesummary') {
                           $c = ' selected=selected';
                      }
              
              ?>
          
           <div class="col-4" style="float:left;">
                   
               <select id="share_summary_cat" name="share_summary_cat" class="form-control form-control-sm" style="font-size:.8rem;margin-left:-19px;width:150px;">
                   <option value="sharesummary" <?php echo $a;  ?> >Total Business</option>
                   <option value="xgvsharesummary" <?php echo $b;  ?> >Total Excluding the GV</option>
                   <option value="gvsharesummary" <?php echo $c;  ?>>Global Ventures</option>
               </select>
               
              </div>
          
              
         <?php  } ?>
          
          
          <?php $right_align = "float:left;"; if(in_array($this->action, array('total', 'sharesummary',  'xgvsharesummary', 'gvsharesummary' ,
                                                                                    'ssd', 'coketm', 'juice', 'plantbased', 'dairy', 'tea', 'water', 
                                                                          'sports', 'coffee', 'energy', 'media', 'customer', 'commercial', 'summary'))) {  
              
              $right_align = "float:right;"; 
              ?>   
                                                
                  
               <div class="col-4" style="float:left;">
                   
                  <?php echo $this->Gsc->populatePeriods($periods, $selectedPeriod, "font-size:.8rem;width:170px;margin-left:-19px;",  'gsc_cycle_cat'); ?>
              </div>
          
             <?php } ?>
                                       
      
          
          
      
          
            <div class="col-4" style="<?php echo $right_align; ?>">
                <?php if(!in_array($this->action, array('home', 'glossaryUpload', 'upload', 'sharesummary', 'xgvsharesummary', 'gvsharesummary'))) { ?>
                <div>
                  <a href="#" class="tt ic pdf mr-2" data-toggle="modal" data-target="#pdfModalCenter" data-original-title="Download PDF"></a>
                  <a href="#" class="tt ic xls" data-toggle="modal" data-target="#excelModalCenter"  data-original-title="Download XLS"></a>
                </div>
                  <?php } elseif(in_array($this->action, array('sharesummary', 'xgvsharesummary', 'gvsharesummary'))){ ?>
                 <div>
                  <a href="#" class="tt ic pdf mr-2" data-toggle="modal" data-target="#pdfModalShare" data-original-title="Download PDF"></a>
                  <a href="#" class="tt ic xls" data-toggle="modal" data-target="#excelModalShare"  data-original-title="Download XLS"></a>
                </div>
                <?php }  ?>
        
       <?php if($this->action == 'home') { ?>
      <div style="float:right;margin-right: -270px;">
        <a href="#" class="tt ic pdf mr-2"  onclick="javascript:printHeatMap('pdf')"  data-original-title="Download PDF"></a>
        <a href="#" class="tt ic xls"   onclick="javascript:printHeatMap('excel')"  data-original-title="Download XLS"></a>
      </div>
      <?php } ?>
            </div>
     
        </div>
     
        
        
        <?php /*if(in_array($this->action, array('total', 'ssd', 'coketm', 'juice', 'plantbased', 
                                        'dairy', 'tea', 'water', 'sports', 'coffee', 'energy', 'media', 'customer', 'commercial'))) {        
          
                    echo $this->element('gsc_filter'); 
              } */
                                       
       ?>
      
        
      
        
        
        
      
        
        
    </div>
  </div>
  <!-- page options end -->



  
  
  
  
  
  
  
  
  








<!-- Export Modal Start -->
<div class="modal fade" id="pdfModalShare" tabindex="-1" role="dialog" aria-labelledby="pdfModalGscTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Export PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="min-height:350px;">

                <?php 
                echo $this->Form->create(null, array(
                'url' => array('controller' => 'Gsc', 'action' => 'exportSharePDF'), 'id' => 'pdfExportShare')); 
                ?> 
                <div class="form-group">
                    <label>Add one or more categories</label>
                    <select class="multipleSelect" multiple name="share_list[]" id="all_list">
                    <option value="sharesummary">Total Business</option>
                   <option value="xgvsharesummary">Total Excluding the GV</option>
                   <option value="gvsharesummary">Global Ventures</option>
                    </select>
                </div>
               
                
            </div>
            <input type="hidden" id="sharePeriodPdf" name="sharePeriodPdf" >
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="return askShareConfirmation('Yes', 'pdfExportShare', '<?php echo $this->action ?>')">Download</button>
                <button type="button" class="btn btn-light" data-dismiss="modal" >Close</button>
            </div>


        </div>

    </div>
</div>
<?php echo $this->Form->end(); ?>
    
    <!-- Export Modal End -->

    
    
    
    <!-- Export Modal End -->


<div class="modal fade" id="excelModalShare" tabindex="-1" role="dialog" aria-labelledby="excelModalShare" aria-hidden="true">
    	
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Export Excel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="min-height:250px;">
                
                <?php 
                echo $this->Form->create(null, array(
                'url' => array('controller' => 'Gsc', 'action' => 'exportShareExcel'), 'id' => 'excelExportShare')); 
                
                ?> 
                <div class="form-group">
                    <label>Add one or more categories</label>
                    <select class="multipleSelect" multiple name="shareCategories[]">
                    <option value="sharesummary">Total Business</option>
                   <option value="xgvsharesummary">Total Excluding the GV</option>
                   <option value="gvsharesummary">Global Ventures</option>
                    </select>
                </div>
                
            
            </div>
            <input type="hidden" id="sharePeriodExcel" name="sharePeriodExcel">
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="return askShareConfirmation('Yes', 'excelExportShare', '<?php echo $this->action ?>')">Download</button>
                <button type="button" class="btn btn-light" data-dismiss="modal" >Close</button>
            </div>
        </div>
    </div>
     <?php echo $this->Form->end(); ?>
</div>



<script type='text/javascript'>
    
    function askShareConfirmation(choice,exportId, myaction) {
     if(myaction == 'dashboard'){
          var gsc_cycle = $("#gsc_cycle option:selected").val();
      } else if(myaction != 'dashboard'){
         var gsc_cycle = $("#gsc_cycle_cat option:selected").val();
       }
        if(exportId == 'pdfExportShare'){
        $("#sharePeriodPdf").val(gsc_cycle);
         }else if(exportId == 'excelExportShare'){
        $("#sharePeriodExcel").val(gsc_cycle);
         }
        if (choice == 'Yes') {
            $("#"+exportId).submit();
        } 
    }

</script>



<!-- Export Modal End -->







