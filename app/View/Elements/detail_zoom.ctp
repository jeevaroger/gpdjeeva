<div id="zoom-performance-metrics" class="zoom-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-zoom-model"><?php echo $this->Html->image('/images/zoom-out.png', array('alt' => 'close-btn')) ?></div>
        <div class="detail-performance-lft">
            <?php 
                $indiClass = null;
                if($dbSubStatus && isset($statusPerformanceIndiArray[PERFORMANCE_METRICS]) && in_array($statusPerformanceIndiArray[PERFORMANCE_METRICS], array(PERFORMANCEINDI_DEFAULT, NULL))){
                    $indiClass = 'DEFAULT-STATUS '.PERFORMANCEINDI_HIDE;
                }else{
                    $indiClass = !empty($statusPerformanceIndiArray[PERFORMANCE_METRICS]) ? $this->Metrices->getStatusClass($statusPerformanceIndiArray[PERFORMANCE_METRICS]) : $this->Metrices->getStatusClass('DEFAULT');
                    $indiClass .= (!$isIndicatorAndKeyTakeoutAllowed ? ' '.PERFORMANCEINDI_HIDE : '');
                }?>
            <h1 id="performace_image" class="<?php echo $indiClass;?>">Performance Metrics</h1>
            <div class="summary-detail">
                <div class="summary-detail-box">
                    <div class="summary-title title-bg">
                        <div class="summary-detail-box-a summary-title-txt">TCCC Financials</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_21']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_22']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('TCCC Sales Value'); ?></div>
                        <div class="summary-detail-box-b">
                            % vs PY
                        </div>
                        <?php $share_value1_value2_cmp = isset($metricesData['share']['Share']['value1_value2_cmp']) ? ($metricesData['share']['Share']['value1_value2_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($share_value1_value2_cmp); ?>"><?php echo (!is_null($share_value1_value2_cmp)) ? number_format($share_value1_value2_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $share_value2_value3_cmp = isset($metricesData['share']['Share']['value2_value3_cmp']) ? ($metricesData['share']['Share']['value2_value3_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($share_value2_value3_cmp); ?>"><?php echo (!is_null($share_value2_value3_cmp)) ? number_format($share_value2_value3_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['share']['Share']['value4']) && !empty($metricesData['share']['Share']['value4'])) ? $metricesData['share']['Share']['value4'] : 'NA'; ?></div>
                    </div>
                    <?php if (isset($metricesData['vieHrFlag']) && $metricesData['vieHrFlag'] && isset($metricesData['mediaHrFlag']) && $metricesData['mediaHrFlag']) { ?>
                        <div class="summary-title title-bg margin-top5">
                            <div class="summary-detail-box-a summary-title-txt"></div>
                            <div class="summary-detail-box-b">
                                &nbsp;
                            </div>
                            <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_23']; ?></div>
                            <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_24']; ?></div>
                            <div class="summary-detail-box-e summary-title-txt">Period</div>
                        </div>
                        <div class="summary-title margin-top5">
                            <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('CN Net Revenue'); ?></div>
                            <div class="summary-detail-box-b">
                                % vs PY
                            </div>
                            <?php $fin_value1_value2_cmp = isset($metricesData['finance']['Finance']['value1_value2_cmp']) ? ($metricesData['finance']['Finance']['value1_value2_cmp'] * 100) : null; ?>
                            <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($fin_value1_value2_cmp); ?>"><?php echo (!is_null($fin_value1_value2_cmp)) ? number_format($fin_value1_value2_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                            <?php $fin_value3_value4_cmp = isset($metricesData['finance']['Finance']['value3_value4_cmp']) ? ($metricesData['finance']['Finance']['value3_value4_cmp'] * 100) : null; ?>
                            <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($fin_value3_value4_cmp); ?>"><?php echo (!is_null($fin_value3_value4_cmp)) ? number_format($fin_value3_value4_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                            <div class="summary-detail-box-e"><?php echo (isset($metricesData['finance']['Finance']['value5']) && !empty($metricesData['finance']['Finance']['value5'])) ? $metricesData['finance']['Finance']['value5'] : 'NA'; ?></div>
                        </div>
                        <div class="summary-title margintop5">
                            <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Net Revenue per Case'); ?></div>
                            <div class="summary-detail-box-b">
                                US$
                            </div>
                            <?php $fin_value6 = isset($metricesData['finance']['Finance']['value6']) ? ($metricesData['finance']['Finance']['value6']) : null; ?>
                            <div class="summary-detail-box-c"><?php echo (!is_null($fin_value6)) ? number_format($fin_value6, 2, '.', ',') : 'NA'; ?></div>
                            <?php $fin_value7 = isset($metricesData['finance']['Finance']['value7']) ? ($metricesData['finance']['Finance']['value7']) : null; ?>
                            <div class="summary-detail-box-d"><?php echo (!is_null($fin_value7)) ? number_format($fin_value7, 2, '.', ',') : 'NA'; ?></div>
                            <div class="summary-detail-box-e"><?php echo (isset($metricesData['finance']['Finance']['value8']) && !empty($metricesData['finance']['Finance']['value8'])) ? $metricesData['finance']['Finance']['value8'] : 'NA'; ?></div>
                        </div>
                        <div class="summary-title margintop5">
                            <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('%Gross Profit Margin'); ?></div>
                            <div class="summary-detail-box-b">
                                %
                            </div>
                            <?php $fin_value9 = isset($metricesData['finance']['Finance']['value9']) ? ($metricesData['finance']['Finance']['value9'] * 100) : null; ?>
                            <div class="summary-detail-box-c"><?php echo (!is_null($fin_value9)) ? number_format($fin_value9, 1, '.', '') . '%' : 'NA'; ?></div>
                            <?php $fin_value10 = isset($metricesData['finance']['Finance']['value10']) ? ($metricesData['finance']['Finance']['value10'] * 100) : null; ?>
                            <div class="summary-detail-box-d"><?php echo (!is_null($fin_value10)) ? number_format($fin_value10, 1, '.', '') . '%' : 'NA'; ?></div>
                            <div class="summary-detail-box-e"><?php echo (isset($metricesData['finance']['Finance']['value11']) && !empty($metricesData['finance']['Finance']['value11'])) ? $metricesData['finance']['Finance']['value11'] : 'NA'; ?></div>
                        </div>
                        <div class="summary-title margintop5">
                            <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Brand Contribution'); ?></div>
                            <div class="summary-detail-box-b">
                                % vs PY
                            </div>
                            <?php $fin_value12 = isset($metricesData['finance']['Finance']['value12']) ? ($metricesData['finance']['Finance']['value12'] * 100) : null; ?>
                            <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($fin_value12); ?>"><?php echo (!is_null($fin_value12)) ? number_format($fin_value12, 1, '.', '') . '%' : 'NA'; ?></div>
                            <?php $fin_value13 = isset($metricesData['finance']['Finance']['value13']) ? ($metricesData['finance']['Finance']['value13'] * 100) : null; ?>
                            <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($fin_value13); ?>"><?php echo (!is_null($fin_value13)) ? number_format($fin_value13, 1, '.', '') . '%' : 'NA'; ?></div>
                            <div class="summary-detail-box-e"><?php echo (isset($metricesData['finance']['Finance']['value14']) && !empty($metricesData['finance']['Finance']['value14'])) ? $metricesData['finance']['Finance']['value14'] : 'NA'; ?></div>
                        </div>
                        <div class="summary-title margintop5">
                            <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Profit Before Tax'); ?></div>
                            <div class="summary-detail-box-b">
                                % vs PY
                            </div>
                            <?php $fin_value20 = isset($metricesData['finance']['Finance']['value20']) ? ($metricesData['finance']['Finance']['value20'] * 100) : null; ?>
                            <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($fin_value20); ?>"><?php echo (!is_null($fin_value20)) ? number_format($fin_value20, 1, '.', '') . '%' : 'NA'; ?></div>
                            <?php $fin_value21 = isset($metricesData['finance']['Finance']['value21']) ? ($metricesData['finance']['Finance']['value21'] * 100) : null; ?>
                            <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($fin_value21); ?>"><?php echo (!is_null($fin_value21)) ? number_format($fin_value21, 1, '.', '') . '%' : 'NA'; ?></div>
                            <div class="summary-detail-box-e"><?php echo (isset($metricesData['finance']['Finance']['value22']) && !empty($metricesData['finance']['Finance']['value22'])) ? $metricesData['finance']['Finance']['value22'] : 'NA'; ?></div>
                        </div>
                        <div class="summary-title margintop5">
                            <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Volume'); ?></div>
                            <div class="summary-detail-box-b relative">
                                % vs PY
                            </div>
                            <?php $fin_value15_value16_cmp = isset($metricesData['finance']['Finance']['value15_value16_cmp']) ? ($metricesData['finance']['Finance']['value15_value16_cmp'] * 100) : null; ?>
                            <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($fin_value15_value16_cmp); ?>"><?php echo (!is_null($fin_value15_value16_cmp)) ? number_format($fin_value15_value16_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                            <?php $fin_value17_value18_cmp = isset($metricesData['finance']['Finance']['value17_value18_cmp']) ? ($metricesData['finance']['Finance']['value17_value18_cmp'] * 100) : null; ?>
                            <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($fin_value17_value18_cmp); ?>"><?php echo (!is_null($fin_value17_value18_cmp)) ? number_format($fin_value17_value18_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                            <div class="summary-detail-box-e"><?php echo (isset($metricesData['finance']['Finance']['value19']) && !empty($metricesData['finance']['Finance']['value19']) ) ? $metricesData['finance']['Finance']['value19'] : 'NA'; ?></div>
                        </div>
                    <?php } ?>
                    <div class="summary-title title-bg margin-top5">
                        <div class="summary-detail-box-a">&nbsp;</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_25']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_26']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>

                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Volume'); ?></div>
                        <div class="summary-detail-box-b">
                            % ADS vs PY
                        </div>
                        <?php $voipt_value1_value2_cmp = isset($metricesData['voipt']['Voipt']['value1_value2_cmp']) ? ($metricesData['voipt']['Voipt']['value1_value2_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($voipt_value1_value2_cmp); ?>"><?php echo (!is_null($voipt_value1_value2_cmp)) ? number_format($voipt_value1_value2_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $voipt_value2_value3_cmp = isset($metricesData['voipt']['Voipt']['value2_value3_cmp']) ? ($metricesData['voipt']['Voipt']['value2_value3_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($voipt_value2_value3_cmp); ?>"><?php echo (!is_null($voipt_value2_value3_cmp)) ? number_format($voipt_value2_value3_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['voipt']['Voipt']['value4']) && !empty($metricesData['voipt']['Voipt']['value4']) ) ? $metricesData['voipt']['Voipt']['value4'] : 'NA'; ?></div>
                    </div>

                    <div class="summary-title <?php echo (isset($metricesData['vieHrFlag']) && $metricesData['vieHrFlag'] && isset($metricesData['mediaHrFlag']) && $metricesData['mediaHrFlag']) ? 'margintop5' : 'margin-top5'; ?>">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Transactions'); ?></div>
                        <div class="summary-detail-box-b">
                            % ADS vs PY
                        </div>
                        <?php $voipt_value5_value6_cmp = isset($metricesData['voipt']['Voipt']['value5_value6_cmp']) ? ($metricesData['voipt']['Voipt']['value5_value6_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($voipt_value5_value6_cmp); ?>"><?php echo (!is_null($voipt_value5_value6_cmp)) ? number_format($voipt_value5_value6_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $voipt_value6_value7_cmp = isset($metricesData['voipt']['Voipt']['value6_value7_cmp']) ? ($metricesData['voipt']['Voipt']['value6_value7_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($voipt_value6_value7_cmp); ?>"><?php echo (!is_null($voipt_value6_value7_cmp)) ? number_format($voipt_value6_value7_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['voipt']['Voipt']['value8']) && !empty($metricesData['voipt']['Voipt']['value8']) ) ? $metricesData['voipt']['Voipt']['value8'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title title-bg margin-top5">
                        <div class="summary-detail-box-a summary-title-txt">TCCC Share</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_27']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_28']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Val Share- NARTD'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $share_value11_value13_cmp4 = isset($metricesData['share']['Share']['value11_value13_cmp4']) ? ($metricesData['share']['Share']['value11_value13_cmp4'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($share_value11_value13_cmp4)) ? number_format($share_value11_value13_cmp4, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $share_cmp3_cmp4_cmp = isset($metricesData['share']['Share']['cmp3_cmp4_cmp']) ? ($metricesData['share']['Share']['cmp3_cmp4_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($share_cmp3_cmp4_cmp); ?>"><?php echo (!is_null($share_cmp3_cmp4_cmp)) ? number_format($share_cmp3_cmp4_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['share']['Share']['value14']) && !empty($metricesData['share']['Share']['value14']) ) ? $metricesData['share']['Share']['value14'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Val Share- SSD'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $share_value6_value8_cmp2 = isset($metricesData['share']['Share']['value6_value8_cmp2']) ? ($metricesData['share']['Share']['value6_value8_cmp2'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($share_value6_value8_cmp2)) ? number_format($share_value6_value8_cmp2, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $share_cmp1_cmp2_cmp = isset($metricesData['share']['Share']['cmp1_cmp2_cmp']) ? ($metricesData['share']['Share']['cmp1_cmp2_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($share_cmp1_cmp2_cmp); ?>"><?php echo (!is_null($share_cmp1_cmp2_cmp)) ? number_format($share_cmp1_cmp2_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['share']['Share']['value9']) && !empty($metricesData['share']['Share']['value9']) ) ? $metricesData['share']['Share']['value9'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Val Share- Stills Ex Water'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $share_value31_value33_cmp12 = isset($metricesData['share']['Share']['value31_value33_cmp12']) ? ($metricesData['share']['Share']['value31_value33_cmp12'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($share_value31_value33_cmp12)) ? number_format($share_value31_value33_cmp12, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $share_cmp11_cmp12_cmp = isset($metricesData['share']['Share']['cmp11_cmp12_cmp']) ? ($metricesData['share']['Share']['cmp11_cmp12_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($share_cmp11_cmp12_cmp); ?>"><?php echo (!is_null($share_cmp11_cmp12_cmp)) ? number_format($share_cmp11_cmp12_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['share']['Share']['value34']) && !empty($metricesData['share']['Share']['value34']) ) ? $metricesData['share']['Share']['value34'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Val Share- Waters'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $share_value36_value38_cmp14 = isset($metricesData['share']['Share']['value36_value38_cmp14']) ? ($metricesData['share']['Share']['value36_value38_cmp14'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($share_value36_value38_cmp14)) ? number_format($share_value36_value38_cmp14, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $share_cmp13_cmp14_cmp = isset($metricesData['share']['Share']['cmp13_cmp14_cmp']) ? ($metricesData['share']['Share']['cmp13_cmp14_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($share_cmp13_cmp14_cmp); ?>"><?php echo (!is_null($share_cmp13_cmp14_cmp)) ? number_format($share_cmp13_cmp14_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['share']['Share']['value39']) && !empty($metricesData['share']['Share']['value39']) ) ? $metricesData['share']['Share']['value39'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Vol Share- NARTD'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $share_value21_value23_cmp8 = isset($metricesData['share']['Share']['value21_value23_cmp8']) ? ($metricesData['share']['Share']['value21_value23_cmp8'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($share_value21_value23_cmp8)) ? number_format($share_value21_value23_cmp8, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $share_cmp7_cmp8_cmp = isset($metricesData['share']['Share']['cmp7_cmp8_cmp']) ? ($metricesData['share']['Share']['cmp7_cmp8_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($share_cmp7_cmp8_cmp); ?>"><?php echo (!is_null($share_cmp7_cmp8_cmp)) ? number_format($share_cmp7_cmp8_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['share']['Share']['value24']) && !empty($metricesData['share']['Share']['value24']) ) ? $metricesData['share']['Share']['value24'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Vol Share- SSD'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $share_value16_value18_cmp6 = isset($metricesData['share']['Share']['value16_value18_cmp6']) ? ($metricesData['share']['Share']['value16_value18_cmp6'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($share_value16_value18_cmp6)) ? number_format($share_value16_value18_cmp6, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $share_cmp5_cmp6_cmp = isset($metricesData['share']['Share']['cmp5_cmp6_cmp']) ? ($metricesData['share']['Share']['cmp5_cmp6_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($share_cmp5_cmp6_cmp); ?>"><?php echo (!is_null($share_cmp5_cmp6_cmp)) ? number_format($share_cmp5_cmp6_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['share']['Share']['value19']) && !empty($metricesData['share']['Share']['value19']) ) ? $metricesData['share']['Share']['value19'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Vol Share- Stills Ex Water'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $share_value41_value43_cmp16 = isset($metricesData['share']['Share']['value41_value43_cmp16']) ? ($metricesData['share']['Share']['value41_value43_cmp16'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($share_value41_value43_cmp16)) ? number_format($share_value41_value43_cmp16, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $share_cmp15_cmp16_cmp = isset($metricesData['share']['Share']['cmp15_cmp16_cmp']) ? ($metricesData['share']['Share']['cmp15_cmp16_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($share_cmp15_cmp16_cmp); ?>"><?php echo (!is_null($share_cmp15_cmp16_cmp)) ? number_format($share_cmp15_cmp16_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['share']['Share']['value44']) && !empty($metricesData['share']['Share']['value44']) ) ? $metricesData['share']['Share']['value44'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Vol Share- Waters'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $share_value46_value48_cmp18 = isset($metricesData['share']['Share']['value46_value48_cmp18']) ? ($metricesData['share']['Share']['value46_value48_cmp18'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($share_value46_value48_cmp18)) ? number_format($share_value46_value48_cmp18, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $share_cmp17_cmp18_cmp = isset($metricesData['share']['Share']['cmp17_cmp18_cmp']) ? ($metricesData['share']['Share']['cmp17_cmp18_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($share_cmp17_cmp18_cmp); ?>"><?php echo (!is_null($share_cmp17_cmp18_cmp)) ? number_format($share_cmp17_cmp18_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['share']['Share']['value49']) && !empty($metricesData['share']['Share']['value49']) ) ? $metricesData['share']['Share']['value49'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title title-bg margin-top5">
                        <div class="summary-detail-box-a summary-title-txt">Consumers</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_29']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_30']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('All-Incid(%P4W):CokeTM'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $consumer_value2 = isset($metricesData['consumer']['Consumer']['value2']) ? ($metricesData['consumer']['Consumer']['value2'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($consumer_value2)) ? number_format($consumer_value2, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $consumer_value1_value2_cmp = isset($metricesData['consumer']['Consumer']['value1_value2_cmp']) ? ($metricesData['consumer']['Consumer']['value1_value2_cmp']) : null; ?>
                        <div class="summary-detail-box-d no-arrow <?php
                        if (isset($metricesData['consumer']['Consumer']['value3']) && !empty($metricesData['consumer']['Consumer']['value3'])) {
                            echo $this->Metrices->getArrowClassName($metricesData['consumer']['Consumer']['value3'], 'b3', false, array('b3_value' => $consumer_value1_value2_cmp));
                        }
                        ?>"><?php echo (!is_null($consumer_value1_value2_cmp)) ? number_format($consumer_value1_value2_cmp, 2, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['consumer']['Consumer']['value4']) && !empty($metricesData['consumer']['Consumer']['value4']) ) ? $metricesData['consumer']['Consumer']['value4'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('All-%Wkly+ :CokeTM'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $consumer_value6 = isset($metricesData['consumer']['Consumer']['value6']) ? ($metricesData['consumer']['Consumer']['value6'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($consumer_value6)) ? number_format($consumer_value6, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $consumer_value5_value6_cmp = isset($metricesData['consumer']['Consumer']['value5_value6_cmp']) ? ($metricesData['consumer']['Consumer']['value5_value6_cmp']) : null; ?>
                        <div class="summary-detail-box-d no-arrow <?php
                        if (isset($metricesData['consumer']['Consumer']['value7']) && !empty($metricesData['consumer']['Consumer']['value7'])) {
                            echo $this->Metrices->getArrowClassName($metricesData['consumer']['Consumer']['value7'], 'b3', false, array('b3_value' => $consumer_value5_value6_cmp));
                        }
                        ?>"><?php echo (!is_null($consumer_value5_value6_cmp)) ? number_format($consumer_value5_value6_cmp, 2, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['consumer']['Consumer']['value8']) && !empty($metricesData['consumer']['Consumer']['value8']) ) ? $metricesData['consumer']['Consumer']['value8'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Teens-Incid(%P4W):CokeTM'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $consumer_value10 = isset($metricesData['consumer']['Consumer']['value10']) ? ($metricesData['consumer']['Consumer']['value10'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($consumer_value10)) ? number_format($consumer_value10, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $consumer_value9_value10_cmp = isset($metricesData['consumer']['Consumer']['value9_value10_cmp']) ? ($metricesData['consumer']['Consumer']['value9_value10_cmp']) : null; ?>
                        <div class="summary-detail-box-d no-arrow <?php
                        if (isset($metricesData['consumer']['Consumer']['value11']) && !empty($metricesData['consumer']['Consumer']['value11'])) {
                            echo $this->Metrices->getArrowClassName($metricesData['consumer']['Consumer']['value11'], 'b3', false, array('b3_value' => $consumer_value9_value10_cmp));
                        }
                        ?>"><?php echo (!is_null($consumer_value9_value10_cmp)) ? number_format($consumer_value9_value10_cmp, 2, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['consumer']['Consumer']['value12']) && !empty($metricesData['consumer']['Consumer']['value12']) ) ? $metricesData['consumer']['Consumer']['value12'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Teens-%Wkly+ :CokeTM'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $consumer_value14 = isset($metricesData['consumer']['Consumer']['value14']) ? ($metricesData['consumer']['Consumer']['value14'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($consumer_value14)) ? number_format($consumer_value14, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $consumer_value13_value14_cmp = isset($metricesData['consumer']['Consumer']['value13_value14_cmp']) ? ($metricesData['consumer']['Consumer']['value13_value14_cmp']) : null; ?>
                        <div class="summary-detail-box-d no-arrow <?php
                        if (isset($metricesData['consumer']['Consumer']['value15']) && !empty($metricesData['consumer']['Consumer']['value15'])) {
                            echo $this->Metrices->getArrowClassName($metricesData['consumer']['Consumer']['value15'], 'b3', false, array('b3_value' => $consumer_value13_value14_cmp));
                        }
                        ?>"><?php echo (!is_null($consumer_value13_value14_cmp)) ? number_format($consumer_value13_value14_cmp, 2, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['consumer']['Consumer']['value16']) && !empty($metricesData['consumer']['Consumer']['value16']) ) ? $metricesData['consumer']['Consumer']['value16'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title title-bg margin-top5">
                        <div class="summary-detail-box-a summary-title-txt">Households</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_31']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_32']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('HH Penetration-CokeTM'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $household_value4 = isset($metricesData['household']['Household']['value4']) ? ($metricesData['household']['Household']['value4'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($household_value4)) ? number_format($household_value4, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $household_value3_value4_cmp2 = isset($metricesData['household']['Household']['value3_value4_cmp2']) ? ($metricesData['household']['Household']['value3_value4_cmp2']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($household_value3_value4_cmp2); ?>"><?php echo (!is_null($household_value3_value4_cmp2)) ? number_format($household_value3_value4_cmp2, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['household']['Household']['value5']) && !empty($metricesData['household']['Household']['value5']) ) ? $metricesData['household']['Household']['value5'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Liters per HH-CokeTM'); ?></div>
                        <div class="summary-detail-box-b">
                            Ltrs/% vs PY
                        </div>
                        <?php $household_value7 = isset($metricesData['household']['Household']['value7']) ? ($metricesData['household']['Household']['value7']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($household_value7)) ? number_format($household_value7, 1, '.', ',') : 'NA'; ?></div>
                        <?php $household_value6_value7_cmp = isset($metricesData['household']['Household']['value6_value7_cmp']) ? ($metricesData['household']['Household']['value6_value7_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($household_value6_value7_cmp); ?>"><?php echo (!is_null($household_value6_value7_cmp)) ? number_format($household_value6_value7_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['household']['Household']['value8']) && !empty($metricesData['household']['Household']['value8']) ) ? $metricesData['household']['Household']['value8'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Basket Incidence-CokeTM'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $household_value12 = isset($metricesData['household']['Household']['value12']) ? ($metricesData['household']['Household']['value12'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($household_value12)) ? number_format($household_value12, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $household_value11_cmp12_cmp2 = isset($metricesData['household']['Household']['value11_value12_cmp2']) ? ($metricesData['household']['Household']['value11_value12_cmp2']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($household_value11_cmp12_cmp2); ?>"><?php echo (!is_null($household_value11_cmp12_cmp2)) ? number_format($household_value11_cmp12_cmp2, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['household']['Household']['value13']) && !empty($metricesData['household']['Household']['value13']) ) ? $metricesData['household']['Household']['value13'] : 'NA'; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="zoom-commercial-execution" class="zoom-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-zoom-model"><?php echo $this->Html->image('/images/zoom-out.png', array('alt' => 'close-btn')) ?></div>
        <div class="detail-performance-lft">
            <?php 
                $indiClass = null;
                if($dbSubStatus && isset($statusPerformanceIndiArray[COMMERCIAL_EXECUTION]) && in_array($statusPerformanceIndiArray[EXTERNAL_ENVIRONMENT], array(COMMERCIAL_EXECUTION, NULL))){
                    $indiClass = 'DEFAULT-STATUS '.PERFORMANCEINDI_HIDE;
                }else{
                    $indiClass = !empty($statusPerformanceIndiArray[COMMERCIAL_EXECUTION]) ? $this->Metrices->getStatusClass($statusPerformanceIndiArray[COMMERCIAL_EXECUTION]) : $this->Metrices->getStatusClass('DEFAULT');
                    $indiClass .= (!$isIndicatorAndKeyTakeoutAllowed ? ' '.PERFORMANCEINDI_HIDE : '');
                }?>
            <h1 id="commercial_image"  class="<?php echo $indiClass;?>">Commercial Execution</h1>
            <div class="summary-detail">
                <div class="summary-detail-box">
                    <div class="summary-title title-bg">
                        <div class="summary-detail-box-a summary-title-txt">Outlets</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_35']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_36']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Outlet Coverage'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $commercial_value4_value2_cmp2 = isset($metricesData['commercial']['Commercial']['value4_value2_cmp2']) ? ($metricesData['commercial']['Commercial']['value4_value2_cmp2'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_value4_value2_cmp2)) ? number_format($commercial_value4_value2_cmp2, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $commercial_cmp1_cmp2_cmp = isset($metricesData['commercial']['Commercial']['cmp1_cmp2_cmp']) ? ($metricesData['commercial']['Commercial']['cmp1_cmp2_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_cmp1_cmp2_cmp); ?>"><?php echo (!is_null($commercial_cmp1_cmp2_cmp)) ? number_format($commercial_cmp1_cmp2_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value5_cmp']) && !empty($metricesData['commercial']['Commercial']['value5_cmp']) ) ? $metricesData['commercial']['Commercial']['value5_cmp'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Universe Outlets'); ?></div>
                        <div class="summary-detail-box-b">
                            #/% vs PY
                        </div>
                        <?php $commercial_value2 = isset($metricesData['commercial']['Commercial']['value2']) ? ($metricesData['commercial']['Commercial']['value2']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_value2)) ? number_format($commercial_value2, 0, '.', ',') : 'NA'; ?></div>
                        <?php $commercial_value1_value2_cmp = isset($metricesData['commercial']['Commercial']['value1_value2_cmp']) ? ($metricesData['commercial']['Commercial']['value1_value2_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_value1_value2_cmp); ?>"><?php echo (!is_null($commercial_value1_value2_cmp)) ? number_format($commercial_value1_value2_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value49']) && !empty($metricesData['commercial']['Commercial']['value49']) ) ? $metricesData['commercial']['Commercial']['value49'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('TCCC Outlets'); ?></div>
                        <div class="summary-detail-box-b">
                            #/% vs PY
                        </div>
                        <?php $commercial_value4 = isset($metricesData['commercial']['Commercial']['value4']) ? ($metricesData['commercial']['Commercial']['value4']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_value4)) ? number_format($commercial_value4, 0, '.', ',') : 'NA'; ?></div>
                        <?php $commercial_value3_value4_cmp = isset($metricesData['commercial']['Commercial']['value3_value4_cmp']) ? ($metricesData['commercial']['Commercial']['value3_value4_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_value3_value4_cmp); ?>"><?php echo (!is_null($commercial_value3_value4_cmp)) ? number_format($commercial_value3_value4_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value5']) && !empty($metricesData['commercial']['Commercial']['value5']) ) ? $metricesData['commercial']['Commercial']['value5'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title title-bg margintop5">
                        <div class="summary-detail-box-a summary-title-txt">Avail & Afford Entry Pack</div>
                        <!--                        <div class="summary-detail-box-b">
                                                </div>-->
                        <div class="summary-detail-box-c"></div>
                        <div class="summary-detail-box-d"></div>
                        <div class="summary-detail-box-e">Period</div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Num Dist Entry Pack'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $commercial_value7 = isset($metricesData['commercial']['Commercial']['value7']) ? ($metricesData['commercial']['Commercial']['value7'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_value7)) ? number_format($commercial_value7, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $commercial_value6_value7_cmp = isset($metricesData['commercial']['Commercial']['value6_value7_cmp']) ? ($metricesData['commercial']['Commercial']['value6_value7_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_value6_value7_cmp); ?>"><?php echo (!is_null($commercial_value6_value7_cmp)) ? number_format($commercial_value6_value7_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value8']) && !empty($metricesData['commercial']['Commercial']['value8']) ) ? $metricesData['commercial']['Commercial']['value8'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Num Dist Affrd Entry Pk'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $commercial_value10 = isset($metricesData['commercial']['Commercial']['value10']) ? ($metricesData['commercial']['Commercial']['value10'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_value10)) ? number_format($commercial_value10, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $commercial_value10_value_9_cmp = isset($metricesData['commercial']['Commercial']['value10_value_9_cmp']) ? ($metricesData['commercial']['Commercial']['value10_value_9_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_value10_value_9_cmp); ?>"><?php echo (!is_null($commercial_value10_value_9_cmp)) ? number_format($commercial_value10_value_9_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value11']) && !empty($metricesData['commercial']['Commercial']['value11']) ) ? $metricesData['commercial']['Commercial']['value11'] : 'NA'; ?></div>
                    </div>

                    <!-- change request
                    <div class="summary-title margintop5">
                    <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Coke TM Val Share - Core Sparkling'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                    <?php $share_value26_value28_cmp10 = isset($metricesData['share']['Share']['value26_value28_cmp10']) ? ($metricesData['share']['Share']['value26_value28_cmp10'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($share_value26_value28_cmp10)) ? number_format($share_value26_value28_cmp10, 1, '.', '') . '%' : 'NA'; ?></div>
                    <?php $share_cmp9_cmp10_cmp = isset($metricesData['share']['Share']['cmp9_cmp10_cmp']) ? ($metricesData['share']['Share']['cmp9_cmp10_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($share_cmp9_cmp10_cmp); ?>"><?php echo (!is_null($share_cmp9_cmp10_cmp)) ? number_format($share_cmp9_cmp10_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['share']['Share']['value29']) && !empty($metricesData['share']['Share']['value29']) ) ? $metricesData['share']['Share']['value29'] : 'NA'; ?></div>
                    </div>							
                    <div class="summary-title margintop5">
                    <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Coke TM Price vs CSp Comp'); ?></div>
                        <div class="summary-detail-box-b">
                            $/pts vs PY
                        </div>
                    <?php $commercial_cmp10_cmp12_cmp14 = isset($metricesData['commercial']['Commercial']['cmp10_cmp12_cmp14']) ? ($metricesData['commercial']['Commercial']['cmp10_cmp12_cmp14']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_cmp10_cmp12_cmp14)) ? number_format($commercial_cmp10_cmp12_cmp14, 0, '.', ',') : 'NA'; ?></div>
                    <?php $commercial_cmp13_cmp14_cmp = isset($metricesData['commercial']['Commercial']['cmp13_cmp14_cmp']) ? ($metricesData['commercial']['Commercial']['cmp13_cmp14_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_cmp13_cmp14_cmp); ?>"><?php echo (!is_null($commercial_cmp13_cmp14_cmp)) ? number_format($commercial_cmp13_cmp14_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value44_cmp']) && !empty($metricesData['commercial']['Commercial']['value44_cmp']) ) ? $metricesData['commercial']['Commercial']['value44_cmp'] : 'NA'; ?></div>
                    </div>
                    -->
                    <div class="summary-title margintop title-bg margin-bottom-5">
                        <div class="summary-detail-box-a summary-title-txt"><?php echo $this->Metrices->getMetricesNameFormated('Coke TM Price vs SSD'); ?></div>
                        <div class="summary-detail-box-b">
                            $/pts vs PY
                        </div>
                        <?php $commercial_cmp10_cmp21_cmp22 = isset($metricesData['commercial']['Commercial']['cmp10_cmp21_cmp22']) ? ($metricesData['commercial']['Commercial']['cmp10_cmp21_cmp22']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_cmp10_cmp21_cmp22)) ? number_format($commercial_cmp10_cmp21_cmp22, 0, '.', ',') : 'NA'; ?></div>
                        <?php $commercial_cmp18_cmp22_cmp23 = isset($metricesData['commercial']['Commercial']['cmp18_cmp22_cmp23']) ? ($metricesData['commercial']['Commercial']['cmp18_cmp22_cmp23']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_cmp18_cmp22_cmp23); ?>"><?php echo (!is_null($commercial_cmp18_cmp22_cmp23)) ? number_format($commercial_cmp18_cmp22_cmp23, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['cmp24_cmp']) && !empty($metricesData['commercial']['Commercial']['cmp24_cmp']) ) ? $metricesData['commercial']['Commercial']['cmp24_cmp'] : 'NA'; ?></div>
                    </div>


                    <div class="summary-title margintop title-bg margin-bottom-5">
                        <div class="summary-detail-box-a summary-title-txt"><?php echo $this->Metrices->getMetricesNameFormated('Out of Stocks (OOS)'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $commercial_value13 = isset($metricesData['commercial']['Commercial']['value13']) ? ($metricesData['commercial']['Commercial']['value13'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_value13)) ? number_format($commercial_value13, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $commercial_value13_value12_cmp = isset($metricesData['commercial']['Commercial']['value13_value12_cmp']) ? ($metricesData['commercial']['Commercial']['value13_value12_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_value13_value12_cmp, 'desc'); ?>"><?php echo (!is_null($commercial_value13_value12_cmp)) ? number_format($commercial_value13_value12_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value14']) && !empty($metricesData['commercial']['Commercial']['value14']) ) ? $metricesData['commercial']['Commercial']['value14'] : 'NA'; ?></div>
                    </div>
                    <!-- change request
                    <div class="summary-title margintop5">
                    <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Net CDE per Outlet'); ?></div>
                        <div class="summary-detail-box-b">
                            #/% vs PY
                        </div>
                    <?php $commercial_value21 = isset($metricesData['commercial']['Commercial']['value21']) ? ($metricesData['commercial']['Commercial']['value21']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_value21)) ? number_format($commercial_value21, 0, '.', ',') : 'NA'; ?></div>
                    <?php $commercial_value20_value21_cmp = isset($metricesData['commercial']['Commercial']['value20_value21_cmp']) ? ($metricesData['commercial']['Commercial']['value20_value21_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_value20_value21_cmp); ?>"><?php echo (!is_null($commercial_value20_value21_cmp)) ? number_format($commercial_value20_value21_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value22']) && !empty($metricesData['commercial']['Commercial']['value22']) ) ? $metricesData['commercial']['Commercial']['value22'] : 'NA'; ?></div>
                    </div>
                    -->
                    <div class="summary-title title-bg margintop">
                        <div class="summary-detail-box-a summary-title-txt ">Cold Drink Equipment</div>
                        <div class="summary-detail-box-b">
                        </div>
                        <div class="summary-detail-box-c"></div>
                        <div class="summary-detail-box-d"></div>
                        <div class="summary-detail-box-e">Period</div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Total KO CDE'); ?></div>
                        <div class="summary-detail-box-b">
                            #/% vs PY
                        </div>
                        <?php $commercial_value16 = isset($metricesData['commercial']['Commercial']['value16']) ? ($metricesData['commercial']['Commercial']['value16']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_value16)) ? number_format($commercial_value16, 0, '.', ',') : 'NA'; ?></div>
                        <?php $commercial_value16_value15_cmp = isset($metricesData['commercial']['Commercial']['value16_value15_cmp']) ? ($metricesData['commercial']['Commercial']['value16_value15_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_value16_value15_cmp); ?>"><?php echo (!is_null($commercial_value16_value15_cmp)) ? number_format($commercial_value16_value15_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value17']) && !empty($metricesData['commercial']['Commercial']['value17']) ) ? $metricesData['commercial']['Commercial']['value17'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('KO CDE/10K'); ?></div>
                        <div class="summary-detail-box-b">
                            #/% vs PY
                        </div>
                        <?php $commercial_value18 = isset($metricesData['commercial']['Commercial']['value18']) ? ($metricesData['commercial']['Commercial']['value18']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_value18)) ? number_format($commercial_value18, 0, '.', ',') : 'NA'; ?></div>
                        <?php $commercial_value18_value48_cmp = isset($metricesData['commercial']['Commercial']['value18_value48_cmp']) ? ($metricesData['commercial']['Commercial']['value18_value48_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_value18_value48_cmp); ?>"><?php echo (!is_null($commercial_value18_value48_cmp)) ? number_format($commercial_value18_value48_cmp, 1, '.', ',') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value19']) && !empty($metricesData['commercial']['Commercial']['value19']) ) ? $metricesData['commercial']['Commercial']['value19'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title title-bg margintop5">
                        <div class="summary-detail-box-a summary-title-txt">SOVI/SOM - NARTD/SSD</div>
                        <div class="summary-detail-box-b">
                        </div>
                        <div class="summary-detail-box-c"></div>
                        <div class="summary-detail-box-d"></div>
                        <div class="summary-detail-box-e">Period</div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('SOVI:SOM Ratio NARTD'); ?></div>
                        <div class="summary-detail-box-b">
                            #/pts vs PY
                        </div>
                        <?php $commercial_value27_value24_cmp6 = isset($metricesData['commercial']['Commercial']['value27_value24_cmp6']) ? ($metricesData['commercial']['Commercial']['value27_value24_cmp6'] ) : null; ?>
                        <div class="summary-detail-box-c "><?php echo (!is_null($commercial_value27_value24_cmp6)) ? number_format($commercial_value27_value24_cmp6, 1, '.', '') . '' : 'NA'; ?></div>
                        <?php $commercial_cmp5_cmp6_cmp = isset($metricesData['commercial']['Commercial']['cmp5_cmp6_cmp']) ? ($metricesData['commercial']['Commercial']['cmp5_cmp6_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_cmp5_cmp6_cmp); ?>"><?php echo (!is_null($commercial_cmp5_cmp6_cmp)) ? number_format($commercial_cmp5_cmp6_cmp, 2, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value28_cmp']) && !empty($metricesData['commercial']['Commercial']['value28_cmp']) ) ? $metricesData['commercial']['Commercial']['value28_cmp'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('SOVI NARTD'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $commercial_value24 = isset($metricesData['commercial']['Commercial']['value24']) ? ($metricesData['commercial']['Commercial']['value24'] * 100) : null; ?>
                        <div class="summary-detail-box-c "><?php echo (!is_null($commercial_value24)) ? number_format($commercial_value24, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $commercial_value23_value24_cmp = isset($metricesData['commercial']['Commercial']['value23_value24_cmp']) ? ($metricesData['commercial']['Commercial']['value23_value24_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_value23_value24_cmp); ?>"><?php echo (!is_null($commercial_value23_value24_cmp)) ? number_format($commercial_value23_value24_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value25']) && !empty($metricesData['commercial']['Commercial']['value25']) ) ? $metricesData['commercial']['Commercial']['value25'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('SOVI:SOM Ratio (SSD)'); ?></div>
                        <div class="summary-detail-box-b">
                            #/pts vs PY
                        </div>
                        <?php $commercial_value30_value33_cmp8 = isset($metricesData['commercial']['Commercial']['value30_value33_cmp8']) ? ($metricesData['commercial']['Commercial']['value30_value33_cmp8'] ) : null; ?>
                        <div class="summary-detail-box-c "><?php echo (!is_null($commercial_value30_value33_cmp8)) ? number_format($commercial_value30_value33_cmp8, 1, '.', '') . '' : 'NA'; ?></div>
                        <?php $commercial_cmp7_cm8_cmp = isset($metricesData['commercial']['Commercial']['cmp7_cm8_cmp']) ? ($metricesData['commercial']['Commercial']['cmp7_cm8_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_cmp7_cm8_cmp); ?>"><?php echo (!is_null($commercial_cmp7_cm8_cmp)) ? number_format($commercial_cmp7_cm8_cmp, 2, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value31_cmp']) && !empty($metricesData['commercial']['Commercial']['value31_cmp']) ) ? $metricesData['commercial']['Commercial']['value31_cmp'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('SOVI:SSD'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $commercial_value30 = isset($metricesData['commercial']['Commercial']['value30']) ? ($metricesData['commercial']['Commercial']['value30'] * 100) : null; ?>
                        <div class="summary-detail-box-c "><?php echo (!is_null($commercial_value30)) ? number_format($commercial_value30, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $commercial_value30_value29_cmp = isset($metricesData['commercial']['Commercial']['value30_value29_cmp']) ? ($metricesData['commercial']['Commercial']['value30_value29_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_value30_value29_cmp); ?>"><?php echo (!is_null($commercial_value30_value29_cmp)) ? number_format($commercial_value30_value29_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value31']) && !empty($metricesData['commercial']['Commercial']['value31']) ) ? $metricesData['commercial']['Commercial']['value31'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title title-bg margintop5">
                        <div class="summary-detail-box-a summary-title-txt">Other Commercial Metrics</div>
                        <div class="summary-detail-box-b">
                        </div>
                        <div class="summary-detail-box-c"></div>
                        <div class="summary-detail-box-d"></div>
                        <div class="summary-detail-box-e">Period</div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Avg Price-Coke TM'); ?></div>
                        <div class="summary-detail-box-b">
                            $/% vs PY
                        </div>
                        <?php $commercial_value37_value38_cmp10 = isset($metricesData['commercial']['Commercial']['value37_value38_cmp10']) ? ($metricesData['commercial']['Commercial']['value37_value38_cmp10']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($commercial_value37_value38_cmp10)) ? number_format($commercial_value37_value38_cmp10, 2, '.', ',') : 'NA'; ?></div>
                        <?php $commercial_cmp9_cmp10_cmp = isset($metricesData['commercial']['Commercial']['cmp9_cmp10_cmp']) ? ($metricesData['commercial']['Commercial']['cmp9_cmp10_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($commercial_cmp9_cmp10_cmp); ?>"><?php echo (!is_null($commercial_cmp9_cmp10_cmp)) ? number_format($commercial_cmp9_cmp10_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['commercial']['Commercial']['value39_cmp']) && !empty($metricesData['commercial']['Commercial']['value39_cmp']) ) ? $metricesData['commercial']['Commercial']['value39_cmp'] : 'NA'; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="zoom-quantity-marketing" class="zoom-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-zoom-model"><?php echo $this->Html->image('/images/zoom-out.png', array('alt' => 'close-btn')) ?></div>
        <div class="detail-performance-lft">
            <?php 
                $indiClass = null;
                if($dbSubStatus && isset($statusPerformanceIndiArray[QUANTITY_OF_MARKETING]) && in_array($statusPerformanceIndiArray[QUANTITY_OF_MARKETING], array(PERFORMANCEINDI_DEFAULT, NULL))){
                    $indiClass = 'DEFAULT-STATUS '.PERFORMANCEINDI_HIDE;
                }else{
                    $indiClass = !empty($statusPerformanceIndiArray[QUANTITY_OF_MARKETING]) ? $this->Metrices->getStatusClass($statusPerformanceIndiArray[QUANTITY_OF_MARKETING]) : $this->Metrices->getStatusClass('DEFAULT');
                    $indiClass .= (!$isIndicatorAndKeyTakeoutAllowed ? ' '.PERFORMANCEINDI_HIDE : '');
                }?>
            <h1 id="quantity_image"  class="<?php echo $indiClass;?>">Quantity of Marketing</h1>
            <div class="summary-detail">
                <div class="summary-detail-box">
                    <div class="summary-title title-bg">
                        <div class="summary-detail-box-a summary-title-txt">TCCC DMI</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_37']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_38']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Total DMI (CN US$)'); ?></div>
                        <div class="summary-detail-box-b">
                            % vs PY
                        </div>
                        <?php $media1_value1_value2_cmp = isset($metricesData['media1']['Media1']['value1_value2_cmp']) ? ($metricesData['media1']['Media1']['value1_value2_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($media1_value1_value2_cmp); ?>"><?php echo (!is_null($media1_value1_value2_cmp)) ? number_format($media1_value1_value2_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media1_value3_value4_cmp = isset($metricesData['media1']['Media1']['value3_value4_cmp']) ? ($metricesData['media1']['Media1']['value3_value4_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media1_value3_value4_cmp); ?>"><?php echo (!is_null($media1_value3_value4_cmp)) ? number_format($media1_value3_value4_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media1']['Media1']['value5']) && !empty($metricesData['media1']['Media1']['value5'])) ? $metricesData['media1']['Media1']['value5'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Refuel Rate'); ?></div>
                        <div class="summary-detail-box-b">
                            %
                        </div>
                        <?php $media1_value6_value7_cmp = isset($metricesData['media1']['Media1']['value6_value7_cmp']) ? ($metricesData['media1']['Media1']['value6_value7_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($media1_value6_value7_cmp)) ? number_format($media1_value6_value7_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media1_value8_value9_cmp = isset($metricesData['media1']['Media1']['value8_value9_cmp']) ? ($metricesData['media1']['Media1']['value8_value9_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d"><?php echo (!is_null($media1_value8_value9_cmp)) ? number_format($media1_value8_value9_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media1']['Media1']['value10']) && !empty($metricesData['media1']['Media1']['value10'])) ? $metricesData['media1']['Media1']['value10'] : 'NA'; ?></div>
                    </div>							
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('All Media DMI (CN US$)'); ?></div>
                        <div class="summary-detail-box-b">
                            % vs PY
                        </div>
                        <?php $media1_value11_value12_cmp = isset($metricesData['media1']['Media1']['value11_value12_cmp']) ? ($metricesData['media1']['Media1']['value11_value12_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($media1_value11_value12_cmp); ?>"><?php echo (!is_null($media1_value11_value12_cmp)) ? number_format($media1_value11_value12_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media1_value13_value14_cmp = isset($metricesData['media1']['Media1']['value13_value14_cmp']) ? ($metricesData['media1']['Media1']['value13_value14_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media1_value13_value14_cmp); ?>"><?php echo (!is_null($media1_value13_value14_cmp)) ? number_format($media1_value13_value14_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media1']['Media1']['value15']) && !empty($metricesData['media1']['Media1']['value15'])) ? $metricesData['media1']['Media1']['value15'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('%All Media DMI to Total DMI'); ?></div>
                        <div class="summary-detail-box-b">
                            %
                        </div>
                        <?php $media1_value16_value17_cmp = isset($metricesData['media1']['Media1']['value16_value17_cmp']) ? ($metricesData['media1']['Media1']['value16_value17_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($media1_value16_value17_cmp)) ? number_format($media1_value16_value17_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media1_value18_value19_cmp = isset($metricesData['media1']['Media1']['value18_value19_cmp']) ? ($metricesData['media1']['Media1']['value18_value19_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d"><?php echo (!is_null($media1_value18_value19_cmp)) ? number_format($media1_value18_value19_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media1']['Media1']['value20']) && !empty($metricesData['media1']['Media1']['value20'])) ? $metricesData['media1']['Media1']['value20'] : 'NA'; ?></div>
                    </div>
                    
                    <?php if (isset($metricesData['mediaHrFlag']) && $metricesData['mediaHrFlag']) { ?>
                    <div class="summary-title title-bg">
                        <div class="summary-detail-box-a summary-title-txt">System Media Investment</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_39']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_40']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Sys TV Media Inv (CN US$)'); ?></div>
                        <div class="summary-detail-box-b">
                            % vs PY
                        </div>
                        <?php $media2_value1_value2_cmp = isset($metricesData['media2']['Media2']['value1_value2_cmp']) ? ($metricesData['media2']['Media2']['value1_value2_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($media2_value1_value2_cmp); ?>"><?php echo (!is_null($media2_value1_value2_cmp)) ? number_format($media2_value1_value2_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media2_value3_value4_cmp = isset($metricesData['media2']['Media2']['value3_value4_cmp']) ? ($metricesData['media2']['Media2']['value3_value4_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media2_value3_value4_cmp); ?>"><?php echo (!is_null($media2_value3_value4_cmp)) ? number_format($media2_value3_value4_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media2']['Media2']['value5']) && !empty($metricesData['media2']['Media2']['value5'])) ? $metricesData['media2']['Media2']['value5'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Sys Dig Media Inv (CN US$)'); ?></div>
                        <div class="summary-detail-box-b">
                            % vs PY
                        </div>
                        <?php $media2_value6_value7_cmp = isset($metricesData['media2']['Media2']['value6_value7_cmp']) ? ($metricesData['media2']['Media2']['value6_value7_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($media2_value6_value7_cmp); ?>"><?php echo (!is_null($media2_value6_value7_cmp)) ? number_format($media2_value6_value7_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media2_value8_value9_cmp = isset($metricesData['media2']['Media2']['value8_value9_cmp']) ? ($metricesData['media2']['Media2']['value8_value9_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media2_value8_value9_cmp); ?>"><?php echo (!is_null($media2_value8_value9_cmp)) ? number_format($media2_value8_value9_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media2']['Media2']['value10']) && !empty($metricesData['media2']['Media2']['value10'])) ? $metricesData['media2']['Media2']['value10'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title title-bg margin-top5">
                        <div class="summary-detail-box-a summary-title-txt">Core Media Metrics</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_41']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_42']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>


                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Reuse Rate'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $media2_value15 = isset($metricesData['media2']['Media2']['value15']) ? ($metricesData['media2']['Media2']['value15'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($media2_value15)) ? number_format($media2_value15, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media2_value14_value15_cmp = isset($metricesData['media2']['Media2']['value14_value15_cmp']) ? ($metricesData['media2']['Media2']['value14_value15_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media2_value14_value15_cmp); ?>"><?php echo (!is_null($media2_value14_value15_cmp)) ? number_format($media2_value14_value15_cmp, 1, '.', '') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media2']['Media2']['value16']) && !empty($metricesData['media2']['Media2']['value16'])) ? $metricesData['media2']['Media2']['value16'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('CokeTM # Impressions'); ?></div>
                        <div class="summary-detail-box-b">
                            #/% vs PY
                        </div>
                        <?php $media2_value18 = isset($metricesData['media2']['Media2']['value18']) ? ($metricesData['media2']['Media2']['value18']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($media2_value18)) ? number_format($media2_value18, 0, '.', ',') : 'NA'; ?></div>
                        <?php $media2_value17_value18_cmp = isset($metricesData['media2']['Media2']['value17_value18_cmp']) ? ($metricesData['media2']['Media2']['value17_value18_cmp'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media2_value17_value18_cmp); ?>"><?php echo (!is_null($media2_value17_value18_cmp)) ? number_format($media2_value17_value18_cmp, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media2']['Media2']['value19']) && !empty($metricesData['media2']['Media2']['value19'])) ? $metricesData['media2']['Media2']['value19'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('CokeTM # Weeks on air'); ?></div>
                        <div class="summary-detail-box-b">
                            #/abs vs PY
                        </div>
                        <?php $media2_value21 = isset($metricesData['media2']['Media2']['value21']) ? ($metricesData['media2']['Media2']['value21']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($media2_value21)) ? number_format($media2_value21, 0, '.', ',') : 'NA'; ?></div>
                        <?php $media2_value20_value21_cmp = isset($metricesData['media2']['Media2']['value20_value21_cmp']) ? ($metricesData['media2']['Media2']['value20_value21_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media2_value20_value21_cmp); ?>"><?php echo (!is_null($media2_value20_value21_cmp)) ? number_format($media2_value20_value21_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media2']['Media2']['value22']) && !empty($metricesData['media2']['Media2']['value22'])) ? $metricesData['media2']['Media2']['value22'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title title-bg margin-top5">
                        <div class="summary-detail-box-a summary-title-txt">TV Share of Voice</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_43']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_44']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('over Sparkling Soft Drinks'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $media2_value24 = isset($metricesData['media2']['Media2']['value24']) ? ($metricesData['media2']['Media2']['value24'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($media2_value24)) ? number_format($media2_value24, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media2_value23_value24_cmp = isset($metricesData['media2']['Media2']['value23_value24_cmp']) ? ($metricesData['media2']['Media2']['value23_value24_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media2_value23_value24_cmp); ?>"><?php echo (!is_null($media2_value23_value24_cmp)) ? number_format($media2_value23_value24_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media2']['Media2']['value25']) && !empty($metricesData['media2']['Media2']['value25'])) ? $metricesData['media2']['Media2']['value25'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('over NARTD'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $media2_value27 = isset($metricesData['media2']['Media2']['value27']) ? ($metricesData['media2']['Media2']['value27'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($media2_value27)) ? number_format($media2_value27, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media2_value26_value27_cmp = isset($metricesData['media2']['Media2']['value26_value27_cmp']) ? ($metricesData['media2']['Media2']['value26_value27_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media2_value26_value27_cmp); ?>"><?php echo (!is_null($media2_value26_value27_cmp)) ? number_format($media2_value26_value27_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media2']['Media2']['value28']) && !empty($metricesData['media2']['Media2']['value28'])) ? $metricesData['media2']['Media2']['value28'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title title-bg margin-top5">
                        <div class="summary-detail-box-a summary-title-txt">Media Inflation</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_45']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_46']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('TV Media Ind Inflation'); ?></div>
                        <div class="summary-detail-box-b">
                            % vs PY
                        </div>
                        <?php $media2_value11 = isset($metricesData['media2']['Media2']['value11']) ? ($metricesData['media2']['Media2']['value11'] * 100) : null; ?>
                        <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($media2_value11); ?>"><?php echo (!is_null($media2_value11)) ? number_format($media2_value11, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media2_value12 = isset($metricesData['media2']['Media2']['value12']) ? ($metricesData['media2']['Media2']['value12'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media2_value12); ?>"><?php echo (!is_null($media2_value12)) ? number_format($media2_value12, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media2']['Media2']['value13']) && !empty($metricesData['media2']['Media2']['value13'])) ? $metricesData['media2']['Media2']['value13'] : 'NA'; ?></div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div id="zoom-external-env" class="zoom-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-zoom-model"><?php echo $this->Html->image('/images/zoom-out.png', array('alt' => 'close-btn')) ?></div>
        <div class="detail-performance-lft">
            <?php 
                $indiClass = null;
                if($dbSubStatus && isset($statusPerformanceIndiArray[EXTERNAL_ENVIRONMENT]) && in_array($statusPerformanceIndiArray[EXTERNAL_ENVIRONMENT], array(PERFORMANCEINDI_DEFAULT, NULL))){
                    $indiClass = 'DEFAULT-STATUS '.PERFORMANCEINDI_HIDE;
                }else{
                    $indiClass = !empty($statusPerformanceIndiArray[EXTERNAL_ENVIRONMENT]) ? $this->Metrices->getStatusClass($statusPerformanceIndiArray[EXTERNAL_ENVIRONMENT]) : $this->Metrices->getStatusClass('DEFAULT');
                    $indiClass .= (!$isIndicatorAndKeyTakeoutAllowed ? ' '.PERFORMANCEINDI_HIDE : '');
                }?>
            <h1 id="external_image" class="<?php echo $indiClass;?>" >External Environment</h1>
            <div class="summary-detail">    
                <div class="summary-detail-box">
                    <div class="summary-title title-bg">
                        <div class="summary-detail-box-a">&nbsp;</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_33']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_34']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('PCE'); ?></div>
                        <div class="summary-detail-box-b">
                            % vs PY
                        </div>
                        <?php $macro_value1 = isset($metricesData['macro']['Macro']['value1']) ? ($metricesData['macro']['Macro']['value1'] * 100) : null; ?>
                        <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($macro_value1); ?>"><?php echo (!is_null($macro_value1)) ? number_format($macro_value1, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $macro_value2 = isset($metricesData['macro']['Macro']['value2']) ? ($metricesData['macro']['Macro']['value2'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($macro_value2); ?>"><?php echo (!is_null($macro_value2)) ? number_format($macro_value2, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['macro']['Macro']['value5']) && !empty($metricesData['macro']['Macro']['value5'])) ? $metricesData['macro']['Macro']['value5'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('CPI/Inflation'); ?></div>
                        <div class="summary-detail-box-b">
                            % vs PY
                        </div>
                        <?php $macro_value11 = isset($metricesData['macro']['Macro']['value11']) ? ($metricesData['macro']['Macro']['value11'] * 100) : null; ?>
                        <div class="summary-detail-box-c <?php echo $this->Metrices->getArrowClassName($macro_value11); ?>"><?php echo (!is_null($macro_value11)) ? number_format($macro_value11, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $macro_value12 = isset($metricesData['macro']['Macro']['value12']) ? ($metricesData['macro']['Macro']['value12'] * 100) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($macro_value12); ?>"><?php echo (!is_null($macro_value12)) ? number_format($macro_value12, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['macro']['Macro']['value15']) && !empty($metricesData['macro']['Macro']['value15'])) ? $metricesData['macro']['Macro']['value15'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Unemployment'); ?></div>
                        <div class="summary-detail-box-b">
                            %
                        </div>
                        <?php $macro_value6 = isset($metricesData['macro']['Macro']['value6']) ? ($metricesData['macro']['Macro']['value6'] * 100) : null; ?>
                        <div class="summary-detail-box-c "><?php echo (!is_null($macro_value6)) ? number_format($macro_value6, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $macro_value7 = isset($metricesData['macro']['Macro']['value7']) ? ($metricesData['macro']['Macro']['value7'] * 100) : null; ?>
                        <div class="summary-detail-box-d "><?php echo (!is_null($macro_value7)) ? number_format($macro_value7, 1, '.', '') . '%' : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['macro']['Macro']['value8']) && !empty($metricesData['macro']['Macro']['value8'])) ? $metricesData['macro']['Macro']['value8'] : 'NA'; ?></div>
                    </div>							
                </div>
            </div>
        </div>
    </div>
</div>

<div id="zoom-quality-marketing" class="zoom-model">
    <div class="overlay-head"></div>
    <div class="overlay-head-txt">
        <div class="close-zoom-model"><?php echo $this->Html->image('/images/zoom-out.png', array('alt' => 'close-btn')) ?></div>
        <div class="detail-performance-lft">
            <?php 
                $indiClass = null;
                if($dbSubStatus && isset($statusPerformanceIndiArray[QUALITY_OF_MARKETING]) && in_array($statusPerformanceIndiArray[QUALITY_OF_MARKETING], array(PERFORMANCEINDI_DEFAULT, NULL))){
                    $indiClass = 'DEFAULT-STATUS '.PERFORMANCEINDI_HIDE;
                }else{
                    $indiClass = !empty($statusPerformanceIndiArray[QUALITY_OF_MARKETING]) ? $this->Metrices->getStatusClass($statusPerformanceIndiArray[QUALITY_OF_MARKETING]) : $this->Metrices->getStatusClass('DEFAULT');
                    $indiClass .= (!$isIndicatorAndKeyTakeoutAllowed ? ' '.PERFORMANCEINDI_HIDE : '');
                }?>
            <h1 id="quality_image" class="<?php echo $indiClass;?>">Quality of Marketing</h1>
            <div class="summary-detail">
                <div class="summary-detail-box">
                    <div class="summary-title title-bg">
                        <div class="summary-detail-box-a">&nbsp;</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_47']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_48']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('BLS Score - Coke'); ?></div>
                        <div class="summary-detail-box-b">
                            Abs/pts vs PY
                        </div>
                        <?php $consumer_value18 = isset($metricesData['consumer']['Consumer']['value18']) ? ($metricesData['consumer']['Consumer']['value18']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($consumer_value18)) ? number_format($consumer_value18, 2, '.', ',') : 'NA'; ?></div>
                        <?php $consumer_value17_value18_cmp = isset($metricesData['consumer']['Consumer']['value17_value18_cmp']) ? ($metricesData['consumer']['Consumer']['value17_value18_cmp']) : null; ?>
                        <div class="summary-detail-box-d no-arrow <?php
                        if (isset($metricesData['consumer']['Consumer']['value19']) && !empty($metricesData['consumer']['Consumer']['value19'])) {
                            echo $this->Metrices->getArrowClassName($metricesData['consumer']['Consumer']['value19'], 'b3', false, array('b3_value' => $consumer_value17_value18_cmp));
                        }
                        ?>"><?php echo (!is_null($consumer_value17_value18_cmp)) ? number_format($consumer_value17_value18_cmp, 2, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['consumer']['Consumer']['value20']) && !empty($metricesData['consumer']['Consumer']['value20'])) ? $metricesData['consumer']['Consumer']['value20'] : 'NA'; ?></div>
                    </div>
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('CATA Score - SSD'); ?></div>
                        <div class="summary-detail-box-b">
                            Abs/pts vs PY
                        </div>
                        <?php $consumer_value22 = isset($metricesData['consumer']['Consumer']['value22']) ? ($metricesData['consumer']['Consumer']['value22']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($consumer_value22)) ? number_format($consumer_value22, 2, '.', ',') : 'NA'; ?></div>
                        <?php $consumer_value21_value22_cmp = isset($metricesData['consumer']['Consumer']['value21_value22_cmp']) ? ($metricesData['consumer']['Consumer']['value21_value22_cmp']) : null; ?>
                        <div class="summary-detail-box-d no-arrow <?php
                        if (isset($metricesData['consumer']['Consumer']['value23']) && !empty($metricesData['consumer']['Consumer']['value23'])) {
                            echo $this->Metrices->getArrowClassName($metricesData['consumer']['Consumer']['value23'], 'b3', false, array('b3_value' => $consumer_value21_value22_cmp));
                        }
                        ?>"><?php echo (!is_null($consumer_value21_value22_cmp)) ? number_format($consumer_value21_value22_cmp, 2, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['consumer']['Consumer']['value24']) && !empty($metricesData['consumer']['Consumer']['value24'])) ? $metricesData['consumer']['Consumer']['value24'] : 'NA'; ?></div>
                    </div>							
                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('CORA Score - TCCC'); ?></div>
                        <div class="summary-detail-box-b">
                            Abs/pts vs PY
                        </div>
                        <?php $consumer_value26 = isset($metricesData['consumer']['Consumer']['value26']) ? ($metricesData['consumer']['Consumer']['value26']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($consumer_value26)) ? number_format($consumer_value26, 2, '.', ',') : 'NA'; ?></div>
                        <?php $consumer_value25_value26_cmp = isset($metricesData['consumer']['Consumer']['value25_value26_cmp']) ? ($metricesData['consumer']['Consumer']['value25_value26_cmp']) : null; ?>
                        <div class="summary-detail-box-d no-arrow <?php
                        if (isset($metricesData['consumer']['Consumer']['value27']) && !empty($metricesData['consumer']['Consumer']['value27'])) {
                            echo $this->Metrices->getArrowClassName($metricesData['consumer']['Consumer']['value27'], 'b3', false, array('b3_value' => $consumer_value25_value26_cmp));
                        }
                        ?>"><?php echo (!is_null($consumer_value25_value26_cmp)) ? number_format($consumer_value25_value26_cmp, 2, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['consumer']['Consumer']['value28']) && !empty($metricesData['consumer']['Consumer']['value28'])) ? $metricesData['consumer']['Consumer']['value28'] : 'NA'; ?></div>
                    </div>
                    
                    <?php if (isset($metricesData['mediaHrFlag']) && $metricesData['mediaHrFlag']) { ?>
                    <div class="summary-title title-bg">
                        <div class="summary-detail-box-a">&nbsp;</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_49']; ?></div>
                        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricesData['metricLabelData']['MetricLabel']['label_50']; ?></div>
                        <div class="summary-detail-box-e summary-title-txt">Period</div>
                    </div>
                    <div class="summary-title margin-top5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('ONS (Wtd by Impression)'); ?></div>
                        <div class="summary-detail-box-b">
                            Avg/abs vs PY
                        </div>
                        <?php $media2_value30 = isset($metricesData['media2']['Media2']['value30']) ? ($metricesData['media2']['Media2']['value30']) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($media2_value30)) ? number_format($media2_value30, 1, '.', ',') : 'NA'; ?></div>
                        <?php $media2_value29_value30_cmp = isset($metricesData['media2']['Media2']['value29_value30_cmp']) ? ($metricesData['media2']['Media2']['value29_value30_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media2_value29_value30_cmp); ?>"><?php echo (!is_null($media2_value29_value30_cmp)) ? number_format($media2_value29_value30_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media2']['Media2']['value31']) && !empty($metricesData['media2']['Media2']['value31'])) ? $metricesData['media2']['Media2']['value31'] : 'NA'; ?></div>
                    </div>

                    <div class="summary-title margintop5">
                        <div class="summary-detail-box-a bold"><?php echo $this->Metrices->getMetricesNameFormated('Impression test thru Link'); ?></div>
                        <div class="summary-detail-box-b">
                            %/pts vs PY
                        </div>
                        <?php $media2_value34_value35_cmp2 = isset($metricesData['media2']['Media2']['value34_value35_cmp2']) ? ($metricesData['media2']['Media2']['value34_value35_cmp2'] * 100) : null; ?>
                        <div class="summary-detail-box-c"><?php echo (!is_null($media2_value34_value35_cmp2)) ? number_format($media2_value34_value35_cmp2, 1, '.', '') . '%' : 'NA'; ?></div>
                        <?php $media2_cmp1_cmp2_cmp = isset($metricesData['media2']['Media2']['cmp1_cmp2_cmp']) ? ($metricesData['media2']['Media2']['cmp1_cmp2_cmp']) : null; ?>
                        <div class="summary-detail-box-d <?php echo $this->Metrices->getArrowClassName($media2_cmp1_cmp2_cmp); ?>"><?php echo (!is_null($media2_cmp1_cmp2_cmp)) ? number_format($media2_cmp1_cmp2_cmp, 1, '.', ',') : 'NA'; ?></div>
                        <div class="summary-detail-box-e"><?php echo (isset($metricesData['media2']['Media2']['value36']) && !empty($metricesData['media2']['Media2']['value36'])) ? $metricesData['media2']['Media2']['value36'] : 'NA'; ?></div>
                    </div>
                    <?php } ?>
                    <div class="summary-title">
                        <div class="summary-detail-box-a">&nbsp;</div>
                        <div class="summary-detail-box-b">
                            &nbsp;
                        </div>
                        <div class="summary-detail-box-c summary-title-txt">&nbsp;</div>
                        <div class="summary-detail-box-d summary-title-txt">&nbsp;</div>
                        <div class="summary-detail-box-e summary-title-txt">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>