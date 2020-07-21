<style>
    /****************************** radio button css start  here  ******************/
    .input-radio input[type=radio] {
        display:none;
    }

    .input-radio input[type=radio] + label {
        display:inline-block;
        margin:-2px;
        padding: 4px 10px;
        margin-bottom: 0;
        font-size: 14px;
        line-height: 28px;
        color: #333;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius:0px;
    }
    .input-radio-first-child{
        border-radius:25px 0px 0px 25px !important;
    }
    .input-radio input[type=radio] + label:last-child {
        border-radius:0px 25px 25px 0px;
    }
    .input-radio input[type=radio]:checked + label{
        background-image: none;
        outline: 0;
        color:#fff;
        background-color:#5c6061;
    }

    .status-rht{
        border:none;
    }

    .error-input-popup{
        border: 1px solid red;
    }

    .edit-data-width-inner .label-box {
        height: 18px;
        overflow: hidden;
        width: 100px !important;
    }

    .input-white .custom-width {
         background: transparent none repeat scroll 0 0;
         width: 90%;
    }

    .error-msg {
        color: #f00;
        position: absolute;
        text-align: left;
        top: 55px;
    }
    
    /****************************** radio button css end  here  ******************/

</style>
<div class="popup-edit-data overlay-edit-model" style="display: none;">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-model"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'X')); ?></div>

        <ul class="edit-data-popup font20 marginbottom30">
            <li style="display: block;"><a href="javascript:void(0)" class="tablinks active" onclick="editData(event, 'London')" id="editpopup_metrices">Edit Data</a>
            </li>
            <li><a href="javascript:void(0)" class="tablinks" onclick="editData(event, 'Paris')">Edit Color Indicators</a></li>
        </ul>
        <div id="Paris" class="set-prfomance tabcontent p0" style="display: none;margin-top: 20px">

            <div class="full-width margintop20 black">
                Kindly choose the performance indicator for following set of metrics:<br/>
                <ol>
                    <li>Performance Metrics</li>
                    <li>Commercial Execution</li>
                    <li>External Environment</li>
                    <li>Quality of Marketing</li>
                    <li>Quantity of Marketing</li>
                </ol>
                Please refer to the following criteria while setting the color for Performance indicator.<br/><br/>
                <div style="padding:10px;border:1px solid"><span style="color:#889939 ">Green</span> = Performing in line with or above expectations<br/></div>
                <div style="padding:10px;border:1px solid"><span style="color:#FECD29 ">Yellow</span> = Watchout<br/></div>
                <div style="padding:10px;border:1px solid"><span style="color:#EF2F3E">Red</span> = Performing below expectations</div>
            </div>
            <div class="set-prfomance">
                <div class="set-prfomance">
                    <div class="set-prfomance-lft lineheight35">Performace Metrics</div>
                    <div class="set-prfomance-rht">
                        <div class="status-rht">
                            <div class="input-radio">
                                <input type="radio" id="radios_performance1" name="performance_metrics" value="<?php echo PERFORMANCEINDI_HIGH; ?>" <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_HIGH, 'Performance_Metrics', $statusPerformanceIndiArray); ?>>
                                <label for="radios_performance1" class="input-radio-first-child"><?php echo $this->Html->image('/images/arrow.png', array('class' => 'marginrht5')); ?>HIGH</label>
                                <input type="radio" id="radios_performance2" name="performance_metrics" value="<?php echo PERFORMANCEINDI_WATCHOUT; ?>" <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_WATCHOUT, 'Performance_Metrics', $statusPerformanceIndiArray); ?>>
                                <label for="radios_performance2"><span><?php echo $this->Html->image('/images/watchout-icon.png', array('class' => 'marginrht5', 'align' => 'absmiddle')); ?></span><span>WATCHOUT</span></label>
                                <input type="radio" id="radios_performance3" name="performance_metrics" value="<?php echo PERFORMANCEINDI_LOW; ?>" <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_LOW, 'Performance_Metrics', $statusPerformanceIndiArray); ?>>
                                <label for="radios_performance3"><?php echo $this->Html->image('/images/arrow-down.png', array('class' => 'marginrht5')); ?>LOW</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="set-prfomance">
                    <div class="set-prfomance-lft lineheight35">Commercial Execution</div>
                    <div class="set-prfomance-rht">
                        <div class="status-rht">
                            <div class="input-radio">
                                <input type="radio" id="radios_commercial1" name="commercial_execution" value="<?php echo PERFORMANCEINDI_HIGH; ?>"  <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_HIGH, 'Commercial_Execution', $statusPerformanceIndiArray); ?>>
                                <label for="radios_commercial1" class="input-radio-first-child"><?php echo $this->Html->image('/images/arrow.png', array('class' => 'marginrht5')); ?>HIGH</label>
                                <input type="radio" id="radios_commercial2" name="commercial_execution" value="<?php echo PERFORMANCEINDI_WATCHOUT; ?>"  <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_WATCHOUT, 'Commercial_Execution', $statusPerformanceIndiArray); ?>>
                                <label for="radios_commercial2"><span><?php echo $this->Html->image('/images/watchout-icon.png', array('class' => 'marginrht5', 'align' => 'absmiddle')); ?></span><span>WATCHOUT</span></label>
                                <input type="radio" id="radios_commercial3" name="commercial_execution" value="<?php echo PERFORMANCEINDI_LOW; ?>"  <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_LOW, 'Commercial_Execution', $statusPerformanceIndiArray); ?>>
                                <label for="radios_commercial3"><?php echo $this->Html->image('/images/arrow-down.png', array('class' => 'marginrht5')); ?>LOW</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="set-prfomance">
                    <div class="set-prfomance-lft lineheight35">Quality of Marketing</div>
                    <div class="set-prfomance-rht">
                        <div class="status-rht">
                            <div class="input-radio">
                                <input type="radio" id="radios_quality1" name="quality_of_marketing" value="<?php echo PERFORMANCEINDI_HIGH; ?>" <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_HIGH, 'Quality_of_marketing', $statusPerformanceIndiArray); ?>>
                                <label for="radios_quality1" class="input-radio-first-child"><?php echo $this->Html->image('/images/arrow.png', array('class' => 'marginrht5')); ?>HIGH</label>
                                <input type="radio" id="radios_quality2" name="quality_of_marketing" value="<?php echo PERFORMANCEINDI_WATCHOUT; ?>" <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_WATCHOUT, 'Quality_of_marketing', $statusPerformanceIndiArray); ?>>
                                <label for="radios_quality2"><span><?php echo $this->Html->image('/images/watchout-icon.png', array('class' => 'marginrht5', 'align' => 'absmiddle')); ?></span><span>WATCHOUT</span></label>
                                <input type="radio" id="radios_quality3" name="quality_of_marketing" value="<?php echo PERFORMANCEINDI_LOW; ?>" <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_LOW, 'Quality_of_marketing', $statusPerformanceIndiArray); ?>>
                                <label for="radios_quality3"><?php echo $this->Html->image('/images/arrow-down.png', array('class' => 'marginrht5')); ?>LOW</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="set-prfomance">
                    <div class="set-prfomance-lft lineheight35">Quantity of Maketing</div>
                    <div class="set-prfomance-rht">
                        <div class="status-rht">
                            <div class="input-radio">
                                <input type="radio" id="radios_quantity1" name="quantity_of_marketing" value="<?php echo PERFORMANCEINDI_HIGH; ?>" <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_HIGH, 'Quantity_of_marketing', $statusPerformanceIndiArray); ?>>
                                <label for="radios_quantity1" class="input-radio-first-child"><?php echo $this->Html->image('/images/arrow.png', array('class' => 'marginrht5')); ?>HIGH</label>
                                <input type="radio" id="radios_quantity2" name="quantity_of_marketing" value="<?php echo PERFORMANCEINDI_WATCHOUT; ?>" <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_WATCHOUT, 'Quantity_of_marketing', $statusPerformanceIndiArray); ?>>
                                <label for="radios_quantity2"><span><?php echo $this->Html->image('/images/watchout-icon.png', array('class' => 'marginrht5', 'align' => 'absmiddle')); ?></span><span>WATCHOUT</span></label>
                                <input type="radio" id="radios_quantity3" name="quantity_of_marketing" value="<?php echo PERFORMANCEINDI_LOW; ?>" <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_LOW, 'Quantity_of_marketing', $statusPerformanceIndiArray); ?>>
                                <label for="radios_quantity3"><?php echo $this->Html->image('/images/arrow-down.png', array('class' => 'marginrht5')); ?>LOW</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="set-prfomance">
                    <div class="set-prfomance-lft lineheight35">External Environment</div>
                    <div class="set-prfomance-rht">
                        <div class="status-rht">
                            <div class="input-radio">
                                <input type="radio" id="radio1" name="external_environment" value="<?php echo PERFORMANCEINDI_HIGH; ?>"  <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_HIGH, 'External_environment', $statusPerformanceIndiArray); ?>>
                                <label for="radio1" class="input-radio-first-child"><?php echo $this->Html->image('/images/arrow.png', array('class' => 'marginrht5')); ?>HIGH</label>
                                <input type="radio" id="radio2" name="external_environment" value="<?php echo PERFORMANCEINDI_WATCHOUT; ?>"  <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_WATCHOUT, 'External_environment', $statusPerformanceIndiArray); ?>>
                                <label for="radio2"><span><?php echo $this->Html->image('/images/watchout-icon.png', array('class' => 'marginrht5', 'align' => 'absmiddle')); ?></span><span>WATCHOUT</span></label>
                                <input type="radio" id="radio3" name="external_environment" value="<?php echo PERFORMANCEINDI_LOW; ?>"  <?php echo $this->Metrices->defaultIndicator(PERFORMANCEINDI_LOW, 'External_environment', $statusPerformanceIndiArray); ?>>
                                <label for="radio3"><?php echo $this->Html->image('/images/arrow-down.png', array('class' => 'marginrht5')); ?>LOW</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="London" class="edit-data-popup-wrapper tabcontent" style="margin-top: 40px">  
            <div class="error-msg" id="error_edit_pop_message" style="display: none">Please provide valid inputs.</div>

            <div class="edit-data-width">
                <div class="edit-data-width-inner">TV Share of Voice over Core Sparkling <span class="small-text">%/pts vs PY</span></div>
                <div class="edit-data-width-inner"><span class="small-text-black">PY</span><input type="text" id="txt_core_sparking_1" value="" class="custom-input edit-pop-up-inputs" placeholder="Share %"></div>
                <div class="edit-data-width-inner"><span class="small-text-black"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_43']; ?></span><input type="text" id="txt_core_sparking_2" value="" class="custom-input edit-pop-up-inputs" placeholder="Share %"></div>
                <div class="edit-data-width-inner"><button class="calculate-btn" onclick="calculateMedia2Value23Value24Cmp()" disabled id="btn_cal_1">Calculate</button></div>
                <div class="edit-data-width-inner"><span class="small-text-black"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_44']; ?></span><div class="label-box"><span id="cal_core_sparking"></span></div></div>
            </div>
            <div class="edit-data-width">
                <div class="edit-data-width-inner">TV Share of Voice over NARTD <span class="small-text">%/pts vs PY</span></div>
                <div class="edit-data-width-inner"><span class="small-text-black">PY</span><input type="text" id="txt_core_nartd_1" value="" class="custom-input edit-pop-up-inputs" placeholder="Share %"></div>
                <div class="edit-data-width-inner"><span class="small-text-black"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_43']; ?></span><input type="text" id="txt_core_nartd_2" value="" class="custom-input edit-pop-up-inputs" placeholder="Share %"></div>
                <div class="edit-data-width-inner"><button class="calculate-btn" onclick="calculateMedia2Value26Value27Cmp()" disabled id="btn_cal_2" >Calculate</button></div>
                <div class="edit-data-width-inner"><span class="small-text-black"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_44']; ?></span><div class="label-box"><span  id="calc_core_nartd"></span></div></div>
            </div>
            <div class="edit-data-width">
                <div class="edit-data-width-inner">Sys TV Media Inv (CN US$) <span class="small-text">% vs PY</span></div>
                <div class="edit-data-width-inner"><span class="small-text-black"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_40']; ?></span><input type="text" id="txt_sys_tv_media_inv_2" value="" class="custom-input custom-input-white edit-pop-up-inputs" placeholder="Growth %"></div>
            </div>
            <div class="edit-data-width">
                <div class="edit-data-width-inner">Sys Dig Media Inv (CN US$) <span class="small-text">% vs PY</span></div>
                <div class="edit-data-width-inner"><span class="small-text-black"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_40']; ?></span><input type="text" value="" id="txt_sys_dig_media_inv_2" class="custom-input custom-input-white edit-pop-up-inputs" placeholder="Growth %"></div>
            </div>
            <div class="edit-data-width">
                <div class="edit-data-width-inner">TV Media Ind Inflation <span class="small-text">% vs PY</span></div>
                <div class="edit-data-width-inner"><span class="small-text-black"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_45']; ?></span><input type="text" id="txt_tv_media_ind_inf_1" value="" class="custom-input edit-pop-up-inputs custom-width " placeholder="Growth %"></div>
                <div class="edit-data-width-inner"><span class="small-text-black"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_46']; ?></span><input type="text" id="txt_tv_media_ind_inf_2" value="" class="custom-input edit-pop-up-inputs custom-width " placeholder="Growth %"></div>
            </div>
            <div class="edit-data-width">
                <div class="edit-data-width-inner">Unemployment <span class="small-text">%</span></div>
                <div class="edit-data-width-inner"><span class="small-text-black"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_34']; ?></span><input type="text" id="txt_unemployment_1" value="" class="custom-input custom-input-white edit-pop-up-inputs" placeholder="% Unemployed"></div>
            </div>
            <span class="note-text-red">Note: All values left blank will be treated as "NA" (Not Available)</span>
        </div>
        <div class="set-prfomance text-center margin-top15">            
            <button class="cancel-btn" onclick="return setPerformanceIndicatorStatus(0, '<?php echo PERFORMANCEINDI_WATCHOUT; ?>');">Cancel</button>
            <button class="cancel-btn" onclick="return validateEditPopUp(event);">Update</button>
            <input type="hidden"  id="auto_cal_data_1" value="0">
            <input type="hidden"  id="auto_cal_data_2" value="0">
        </div>
    </div>
</div>

<?php
$this->start('script');
?>
<script>
    function editData(evt, editData) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(editData).style.display = "block";
        evt.currentTarget.className += " active";
    }

    function validateEditPopUp(event) {
        var flag  = false;
        var check_id = ["txt_core_sparking_1", "txt_core_sparking_2", "txt_core_nartd_1", "txt_core_nartd_2", "txt_sys_tv_media_inv_2", "txt_sys_dig_media_inv_2", "txt_tv_media_ind_inf_1", "txt_tv_media_ind_inf_2", "txt_unemployment_1"];
        for (j = 0; j < check_id.length; j++) {

            var checkValue = ($('#' + check_id[j]).val().trim() != '' ? $('#' + check_id[j]).val().trim() : 'NA');

            if (!$.isNumeric($('#' + check_id[j]).val().trim()) && checkValue.toUpperCase() != 'NA') {
                $('#error_edit_pop_message').show();
                $('#' + check_id[j]).addClass('error-input-popup');
                editData(event, 'London');
                $('.cancel-btn').removeClass('active');
                $('#editpopup_metrices').addClass('active');
                flag = true;
            } else {
                $('#' + check_id[j]).removeClass('error-input-popup');
            }

        }
        if(flag){
                return false;
            }
        if(document.getElementById('auto_cal_data_1').value!=0){            
            calculateMedia2Value23Value24Cmp();
        }
         if(document.getElementById('auto_cal_data_2').value!=0){
            calculateMedia2Value26Value27Cmp();
        }
        setPerformanceIndicatorStatus(1, '<?php echo PERFORMANCEINDI_WATCHOUT; ?>');
        setMetricData(1);
    }
    $('.edit-pop-up-inputs').on('change', function () {
        $('#' + $(this).attr('id')).removeClass('error-input-popup');
        $('#error_edit_pop_message').hide();
        if($(this).attr('id')=='txt_core_sparking_1' || $(this).attr('id')=='txt_core_sparking_2'){
            if($('#txt_core_sparking_1').val().trim()!='' && $('#txt_core_sparking_2').val().trim()!='' && $.isNumeric($('#txt_core_sparking_1').val().trim()) && $.isNumeric($('#txt_core_sparking_2').val().trim())){
                $('#btn_cal_1').prop('disabled', false);
                document.getElementById('auto_cal_data_1').value=1;
            }else{
                 $('#btn_cal_1').prop('disabled', true);
                 document.getElementById('auto_cal_data_1').value=0;
            }
        }
        
        if($(this).attr('id')=='txt_core_nartd_1' || $(this).attr('id')=='txt_core_nartd_2'){
            
            if($('#txt_core_nartd_1').val().trim()!='' && $('#txt_core_nartd_2').val().trim()!='' && $.isNumeric($('#txt_core_nartd_1').val().trim()) && $.isNumeric($('#txt_core_nartd_2').val().trim())){
                $('#btn_cal_2').prop('disabled', false);
                document.getElementById('auto_cal_data_2').value=1;
            }else{
                 $('#btn_cal_2').prop('disabled', true);
                 document.getElementById('auto_cal_data_2').value=0;
            }
        }
        
        
    });

    function getArrowClassForEdit(values, method='asc', otherparam=[]) {
        var value = values.trim();
        if (method == 'asc') {
            if (parseFloat(value) > 0) {
                return '<?php echo GREEN_ARROW_SMALL; ?>';
            } else if (parseFloat(value) < 0) {
                return '<?php echo RED_ARROW_SMALL; ?>';
            } else if (parseFloat(value) == 0) {
                if(isNegative0(parseFloat(value))){
                    return '<?php echo RED_ARROW_SMALL; ?>';
                }else{
                    return '<?php echo YELLOW_ARROW_SMALL; ?>';
            }
            }
        } else if (method == 'desc') {
            if (parseFloat(value) < 0) {
                return '<?php echo GREEN_DOWN_ARROW_SMALL; ?>';
            } else if (parseFloat(value) > 0) {
                return '<?php echo RED_UP_ARROW_SMALL; ?>';
            } else if (parseFloat(value) == 0) {                 
                   return '<?php echo YELLOW_ARROW_SMALL; ?>';                
            }
        } else if (method == 'b3') {
            if (value.toUpperCase() == 'GREEN') {
                return '<?php echo GREEN_ARROW_SMALL; ?>';
            } else if (value.toUpperCase() == 'RED') {
                return '<?php echo RED_ARROW_SMALL; ?>';
            } else if (value.toUpperCase() == 'YELLOW') {
                return '<?php echo YELLOW_ARROW_SMALL; ?>';
            } else if (value.toUpperCase() == 'BLACK') {
                return null;
            }
            if (otherparam != '' && (Object.keys(otherparam) == 'b3_value') && otherparam['b3_value'] == null) {
                return null;
            }
        }
    }
    
    function removeClassForArrow(val) {
        var classNames=['<?php echo GREEN_ARROW_SMALL; ?>','<?php echo RED_ARROW_SMALL; ?>','<?php echo YELLOW_ARROW_SMALL; ?>','<?php echo GREEN_DOWN_ARROW_SMALL; ?>','<?php echo RED_UP_ARROW_SMALL; ?>','<?php echo YELLOW_ARROW_SMALL; ?>','<?php echo GREEN_ARROW_SMALL; ?>','<?php echo RED_ARROW_SMALL; ?>','<?php echo YELLOW_ARROW_SMALL; ?>'];
        for(i=0;i< classNames.length;i++){
            if ($('#' + val).hasClass(classNames[i])) {
                $('#' + val).removeClass(classNames[i]);
            }
         }

    }
 $(document).ready(function(){
     var metricesVal = ["#txt_sys_tv_media_inv_2", "#txt_sys_dig_media_inv_2", "#txt_tv_media_ind_inf_1", "#txt_tv_media_ind_inf_2", "#txt_unemployment_1"];
     $.each(metricesVal, function(index,value){
              $(value).val($(value).val()*100);
            });
    });
    
function isNegative0(x) {
   if (x!==0) return false;
   var obj=Object.freeze({z:-0});
   try {
      Object.defineProperty(obj,'z',{value:x});
   } catch (e) {return false};
   return true;
}
</script>
<?php
$this->end();
?>

<!-----------pageblock box------------------>

<div class="performance-box-alert" style="display: none" id="perf_metric_popup">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-model" id="keypopup"><?php echo $this->Html->image('/images/close-btn.png', array('alt' => 'close-btn')) ?></div>
        <div class="full-width margintop25 text-center" >Please provide the Performance Indicator for <span id="metric_name_error"></span></div>
    </div>
</div>
<!-----------pageblock box------------------>