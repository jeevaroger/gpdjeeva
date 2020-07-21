<input type="hidden" id="selectedMarketId" value="<?php echo $selectedMarketId; ?>"/>
<div class="export-to-pdf-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-model"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">EXPORT TO PDF</div>
        <div class="support-prfomance font20">
            <?php
            echo $this->Form->create(null, array(
                'url' => array('controller' => 'Dashboards', 'action' => 'exportPdf'), 'id' => 'pdfDashboard'
            ));
            ?>
            <p class="font14 black">Please select any one option to export: Summary Page, Detail Page or Summary/Detail Both</p>
            <div class="excel-head">                
                <div id="exportPdf-summary" class="excel-head-div" onclick="setType('summary')">
                    Summary
                    <div class="arrow-up arrow-up2"></div>
                    <div class="excel-head-tool-tip">Select to Export Summary View</div>
                </div>
                <div class="excel-head-div" onclick="setType('detail')" id="exportPdf-detail" >
                    Detail
                    <div class="arrow-up arrow-up2"></div>
                    <div class="excel-head-tool-tip">Select to Export Detail View</div>
                </div>
                <div class="excel-head-div excel-head-div-last" onclick="setType('both')">
                    Summary &amp; Detail
                    <div class="arrow-up arrow-up2"></div>
                    <div class="excel-head-tool-tip">Select to Export Summary and Detail View</div>
                </div>
                <input type="hidden" name="doc_type" id="doc_type" value=""/>
                <input type="hidden" name="publication_date" id="publication_date" value="<?php echo $selectedPublicationDate; ?>"/>
            </div>
           <!-- <div class="full-width margintop45 marginbottom30">
                <p>
                    <input type="checkbox" id="test2" name="glossary" checked/>
                    <label for="test2"> &nbsp;Add Glossary</label>
                </p>
            </div> -->
            <p class="font14 black">Select one or multiple geographies. Use Ctrl key to select multiple geographies.</p>
            <div class="full-width margintop10">

                <div class="full-width" id="pdf_error">
                    <?php if(isset($selectedAggregateIso) && !empty($selectedAggregateIso)){ echo '<input type ="hidden" value= "1"  name="isAggregate">';} ?>
                    <select data-placeholder="Choose a Country..."  multiple tabindex="4" name="markets_list[]" class="chosen-select" >
                        <option value="ALL">All ACCESSIBLE GEOGRAPHIES</option>
                        <?php echo $this->Market->marketChosen($marketListWithId,$selectedMarketId) ?>
                    </select>
                </div>
            </div>
            <div class="set-prfomance text-center margin-top15">             
                <button class="cancel-btn cancel-popup">Cancel</button>
                <?php
                echo $this->Form->submit("Ok", array('div' => false, 'label' => false, 'class' => 'cancel-btn export_pdf_btn'));
                ?>

            </div>	
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

<!--print -->

<div class="print-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-model"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">PRINT</div>
        <div class="support-prfomance font20">
            <?php
            echo $this->Form->create(null, array(
                'url' => array('controller' => 'Dashboards', 'action' => 'exportPdf'),
               // 'target' => '_blank',
                'id' => 'printDashboard',
                'novalidate' => 'novalidate'
            ));
            ?>
            <p class="font14 black">Please select any one option to print: Summary Page, Detail Page or Summary/Detail Both.</p>
            <div class="excel-head">                
                <div id="printDetail-summary" class="excel-head-div" onclick="setTypeForPrint('summary')">
                    Summary
                    <div class="arrow-up arrow-up2"></div>
                    <div class="excel-head-tool-tip">Select to Print Summary View</div>
                </div>
                <div id="printDetail-detail" class="excel-head-div" onclick="setTypeForPrint('detail')">
                    Detail
                    <div class="arrow-up arrow-up2"></div>
                    <div class="excel-head-tool-tip">Select to Print Detail View</div>
                </div>
                <div class="excel-head-div excel-head-div-last" onclick="setTypeForPrint('both')">
                    Summary &amp; Detail
                    <div class="arrow-up arrow-up2"></div>
                    <div class="excel-head-tool-tip">Select to Print Summary and Detail View</div>
                </div>
                <input type="hidden" name="doc_type" id="doc_type_print" value=""/>
                <input type="hidden" name="publication_date" id="publication_date" value="<?php echo $selectedPublicationDate; ?>"/>
                <input type="hidden" name="print_type_flag" id="" value="1"/>
            </div>
            <!-- <div class="full-width margintop45 marginbottom30">
                <p>
                    <input type="checkbox" id="test1" name="glossary" checked/>
                    <label for="test1"> &nbsp;Add Glossary</label>
                </p>
            </div>-->
            <br><br>
            <p class="font14 black">Select one or multiple geographies. Use Ctrl key to select multiple geographies.</p>
            <div class="full-width margintop10">

                <div class="full-width" id="print_error">
                     <?php if(isset($selectedAggregateIso) && !empty($selectedAggregateIso)){ echo '<input type ="hidden" value= "1"  name="isAggregate">';} ?>
                    <select data-placeholder="Choose a Country..."  multiple tabindex="4" name="markets_list[]" class="chosen-select">
                        <option value="ALL">All ACCESSIBLE GEOGRAPHIES</option>
                        <?php echo $this->Market->marketChosen($marketListWithId,$selectedMarketId) ?>
                    </select>
                </div>
            </div>
            <p class="font14 red printNoteTopMargin" >Note: Please print in landscape mode.</p>
            <div class="set-prfomance text-center margin-top15">             
                <button class="cancel-btn cancel-popup">Cancel</button>
                <?php
                echo $this->Form->submit("Ok", array('div' => false, 'label' => false, 'class' => 'cancel-btn'));
                ?>

            </div>	
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

<!--  end print-->



<!--excel -->

<div class="export-to-excel-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-model"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">EXPORT TO EXCEL</div>
        <div class="support-prfomance font20">
            <?php
            echo $this->Form->create(null, array(
                'url' => array('controller' => 'Dashboards', 'action' => 'exportExcel'),
                'id' => 'excelDashboard',
                'novalidate' => 'novalidate'
            ));
            ?>
            <p class="font14 black">Please select any one option to export: Summary Page, Detail Page or Summary/Detail Both</p>
            <div class="excel-head">                
                <div id="exportExcel-summary" class="excel-head-div" onclick="setTypeForExcel('summary')">
                    Summary
                    <div class="arrow-up arrow-up2"></div>
                    <div class="excel-head-tool-tip">Select to Export Summary View</div>
                </div>
                <div id="exportExcel-detail" class="excel-head-div" onclick="setTypeForExcel('detail')">
                    Detail
                    <div class="arrow-up arrow-up2"></div>
                    <div class="excel-head-tool-tip">Select to Export Detail View</div>
                </div>
                <div class="excel-head-div excel-head-div-last" onclick="setTypeForExcel('both')">
                    Summary &amp; Detail
                    <div class="arrow-up arrow-up2"></div>
                    <div class="excel-head-tool-tip">Select to Export Summary and Detail View</div>
                </div>
                <input type="hidden" name="doc_type_excel" id="doc_type_excel" value=""/>
                <input type="hidden" name="publication_date" id="publication_date" value="<?php echo $selectedPublicationDate; ?>"/>

            </div>
            <!-- <div class="full-width margintop45 marginbottom30">
                <p>
                    <input type="checkbox" id="test3" name="glossary" checked/>
                    <label for="test3"> &nbsp;Add Glossary</label>
                </p>
            </div>-->
            <br><br>
            <p class="font14 black">Select one or multiple geographies. Use Ctrl key to select multiple geographies.</p>
            <div class="full-width margintop10">

                <div class="full-width" id="excel_error">
                     <?php if(isset($selectedAggregateIso) && !empty($selectedAggregateIso)){ echo '<input type ="hidden" value= "1"  name="isAggregate">';} ?>
                    <select data-placeholder="Choose a Country..."  multiple tabindex="4" name="markets_list[]" class="chosen-select" id="selectExcel">
                        <option value="ALL">All ACCESSIBLE GEOGRAPHIES</option>
                        <?php echo $this->Market->marketChosen($marketListWithId,$selectedMarketId) ?>
                    </select>
                </div>
            </div>
            <div class="set-prfomance text-center margin-top15">             
                <button class="cancel-btn cancel-popup">Cancel</button>
                <?php
                echo $this->Form->submit("Ok", array('div' => false, 'label' => false, 'class' => 'cancel-btn'));
                ?>

            </div>  
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

<!--  end excel-->



<!--bulk-sign-off -->

<div class="bulk-sign-off-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-model"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="suport-title font18">BULK SIGN OFF<?php print_r($marketListWithId); ?></div>
        <div class="support-prfomance font20">
            <?php
            echo $this->Form->create(null, array(
                'url' => array('controller' => 'Dashboards', 'action' => 'bulkSignoff'),
                'id' => 'bulkSignoff',
                'novalidate' => 'novalidate'
            ));
            ?>
            <p class="font14 black">Select one or multiple geographies. Use Ctrl key to select multiple geographies.</p>
            <div class="full-width margintop10">

                <div class="full-width" id="print_error">
                    <select data-placeholder="Choose a Country..."  multiple tabindex="4" name="markets_list[]" class="chosen-select">
                        <option value="ALL">All ACCESSIBLE GEOGRAPHIES</option>
                        <?php echo $this->Market->marketChosen($marketListWithId,$selectedMarketId) ?>
                    </select>
                </div>
            </div>
            <div class="set-prfomance text-center margin-top15">             
                <button class="cancel-btn cancel-popup">Cancel</button>
                <?php
                echo $this->Form->submit("Ok", array('div' => false, 'label' => false, 'class' => 'cancel-btn'));
                ?>

            </div>	
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

<!--  end bulk-sign-off-->