<!-- page footer start -->
<footer>
    <div class="container-fluid">
        <p class="text-right">&copy; Copyright 2018 WNS</p>
    </div>
</footer>
<!-- page footer end -->



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


<div id="myNav" class="preload-overlay" style="display:none">
    <div id="loading" class="loading">
    </div>
</div>

<!-- Export Modal Start -->
<div class="modal fade" id="pdfModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Export PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="min-height:350px;">
                

                 <?php if($this->name == 'Gsc' &&  $this->action != 'dashboard'){
                echo $this->Form->create(null, array(
                'url' => array('controller' => 'Gsc', 'action' => 'exportCategoryPDF'), 'id' => 'pdfExportCenter')); 
                
                ?> 
                <div class="form-group">
                    <label>Add one or more categories</label>
                    <select class="multipleSelect" multiple name="category_list[]">
                     <?php foreach ($gscCategories as $value) { ?>
                        <option value="<?php echo trim($value); ?>"><?php echo $value; ?></option>  
                        <?php } ?>
                    </select>
                </div>
                  <?php } ?>
            </div>
                        <input type="hidden" id="pickPeriodPdf" name="pickPeriodPdf" >
                                <div class="modal-footer">
                              <button type="button" class="btn btn-primary" onclick="return askExportConfirmation('Yes', 'pdfExportCenter')">Download</button>
                             <button type="button" class="btn btn-light" data-dismiss="modal" >Close</button>
                                </div>
                           

                    </div>

            </div>
        </div>
<?php echo $this->Form->end(); ?>
    </div>
    <!-- Export Modal End -->


<div class="modal fade" id="excelModalCenter" tabindex="-1" role="dialog" aria-labelledby="excelModalCenterTitle" aria-hidden="true">
    	
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Export Excel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="min-height:250px;">
                
                <?php if($this->name == 'Gsc' &&  $this->action != 'dashboard'){
                echo $this->Form->create(null, array(
                'url' => array('controller' => 'Gsc', 'action' => 'exportExcel'), 'id' => 'excelExportCenter')); 
                
                ?> 
                <div class="form-group">
                    <label>Add one or more categories</label>
                    <select class="multipleSelect" multiple name="excelCategories[]">
                     <?php foreach ($gscCategories as $value) { ?>
                        <option value="<?php echo trim($value); ?>"><?php echo $value; ?></option>  
                        <?php } ?>
                    </select>
                </div>
                  <?php } ?>
                
                
                 
                <?php if($this->name == 'Gsc' &&  $this->action == 'dashboard'){ 
                    
                     echo $this->Form->create(null, array(
                'url' => array('controller' => 'Gsc', 'action' => 'extractExcel'), 'id' => 'excelExportCenter')); 
                    
                ?>
                          
                <div class="form-group">
                    <label>Add one or more markets</label>
                    <select class="multipleSelect" multiple name="excelMarkets[]">
                     <?php foreach ($userMarketsName as $key => $value) { ?>
                        <option value="<?php echo trim($key); ?>"><?php echo $value; ?></option>  
                        <?php } ?>
                    </select>
                </div>
                  <?php } ?>
                
            
            </div>
            <input type="hidden" id="pickPeriodExcel" name="pickPeriodExcel" >
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="return askExportConfirmation('Yes', 'excelExportCenter')">Download</button>
                <button type="button" class="btn btn-light" data-dismiss="modal" >Close</button>
            </div>
        </div>
    </div>
     <?php echo $this->Form->end(); ?>
</div>

<script type='text/javascript'>
    
    function askExportConfirmation(choice,exportId) {
        var gsc_cycle = $("#gsc_cycle_cat option:selected").val();
        if(exportId == 'pdfExportCenter'){
        $("#pickPeriodPdf").val(gsc_cycle);
         }else if(exportId == 'excelExportCenter'){
        $("#pickPeriodExcel").val(gsc_cycle);
         }
        if (choice == 'Yes') {
            $("#"+exportId).submit();
        } 
    }

</script>



<!-- Export Modal End -->



