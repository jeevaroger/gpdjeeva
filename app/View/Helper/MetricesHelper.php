<?php

App::uses('AppHelper', 'View/Helper');
App::uses('App', 'View');
App::uses('CakeText', 'Utility');

/**
 * Metrices helper
 *
 * @package       app.View.Helper
 */
class MetricesHelper extends AppHelper {

    private $pdfTextColor;

    /*
     * Get Arrow Class Name
     * function is used to provide the class name for display of up/down/equal arrow
     * 
     * @return String
     * 
     */

    public function getArrowClassName($value, $method = 'asc', $isExcel = false, $otherparam = array()) {
        $returnValue = NULL;
        $returnValueExcel = array();
        $returnValueExcel['name'] = NULL;
        $returnValueExcel['color'] = NULL;
        $returnValueExcel['value'] = NULL;
        $returnValueExcel['size'] = NULL;
        if ($method == 'asc') {
            if ((float) $value > 0) {
                if ($isExcel) {
                    $returnValueExcel['name'] = 'Webdings';
                    $returnValueExcel['color'] = GREEN;
                    $returnValueExcel['value'] = 5;
                    $returnValueExcel['size'] = 18;
                }
                $returnValue = GREEN_ARROW_SMALL;
            } elseif ((float) $value < 0) {
                if ($isExcel) {
                    $returnValueExcel['name'] = 'Webdings';
                    $returnValueExcel['color'] = RED;
                    $returnValueExcel['value'] = 6;
                    $returnValueExcel['size'] = 18;
                }
                $returnValue = RED_ARROW_SMALL;
            } elseif ((float) $value == 0) {
                if ($isExcel) {
                    $returnValueExcel['name'] = 'Wingdings 3';
                    $returnValueExcel['color'] = YELLOW;
                    $returnValueExcel['value'] = 'tu';
                    $returnValueExcel['size'] = 10;
                }
                $returnValue = YELLOW_ARROW_SMALL;
            }
        } elseif ($method == 'desc') {
            if ((float) $value < 0) {
                if ($isExcel) {
                    $returnValueExcel['name'] = 'Webdings';
                    $returnValueExcel['color'] = GREEN;
                    $returnValueExcel['value'] = 6;
                    $returnValueExcel['size'] = 18;
                }
                $returnValue = GREEN_DOWN_ARROW_SMALL;
            } elseif ((float) $value > 0) {
                if ($isExcel) {
                    $returnValueExcel['name'] = 'Webdings';
                    $returnValueExcel['color'] = RED;
                    $returnValueExcel['value'] = 5;
                    $returnValueExcel['size'] = 18;
                }
                $returnValue = RED_UP_ARROW_SMALL;
            } elseif ((float) $value == 0) {
                if ($isExcel) {
                    $returnValueExcel['name'] = 'Wingdings 3';
                    $returnValueExcel['color'] = YELLOW;
                    $returnValueExcel['value'] = 'tu';
                    $returnValueExcel['size'] = 10;
                }
                $returnValue = YELLOW_ARROW_SMALL;
            }
        } elseif ($method == 'b3') {
            if (strtoupper(trim($value)) == 'GREEN') {
                if ($isExcel) {
                    $returnValueExcel['name'] = 'Webdings';
                    $returnValueExcel['color'] = GREEN;
                    $returnValueExcel['value'] = 5;
                    $returnValueExcel['size'] = 18;
                }
                $returnValue = GREEN_ARROW_SMALL;
            } elseif (strtoupper(trim($value)) == 'RED') {
                if ($isExcel) {
                    $returnValueExcel['name'] = 'Webdings';
                    $returnValueExcel['color'] = RED;
                    $returnValueExcel['value'] = 6;
                    $returnValueExcel['size'] = 18;
                }
                $returnValue = RED_ARROW_SMALL;
            } elseif (strtoupper(trim($value)) == 'YELLOW') {
                if ($isExcel) {
                    $returnValueExcel['name'] = 'Wingdings 3';
                    $returnValueExcel['color'] = YELLOW;
                    $returnValueExcel['value'] = 'tu';
                    $returnValueExcel['size'] = 10;
                }
                $returnValue = YELLOW_ARROW_SMALL;
            } elseif (strtoupper(trim($value)) == 'BLACK') {
                if ($isExcel) {
                    $returnValueExcel['name'] = NULL;
                    $returnValueExcel['color'] = NULL;
                    $returnValueExcel['value'] = NULL;
                    $returnValueExcel['size'] = NULL;
                }
                $returnValue = NULL;
            }

            if (!empty($otherparam) && (key($otherparam) == 'b3_value') && is_null($otherparam['b3_value'])) {
                $returnValue = NULL;
            }
        }
        if ($isExcel) {
            return $returnValueExcel;
        } else {
            if (is_null($value)) {
                $returnValue = NULL;
            }
            $this->pdfTextColor = $returnValue;

            return $returnValue;
        }
    }

    public function gpdsCellColor($val1, $val2 = NULL, $bpFlag = 0) {
        $style = '';
        $cmp1 = number_format($val1, 1, '.', '');
        $cmp2 = number_format($val2, 1, '.', '');
        
        if ($cmp1 < 0 && $bpFlag == 0) {
            $style = 'style="color:red"';
        } else if ($bpFlag == 1) {
            if ($cmp1 < 0) {
                $style = 'style="color:red"';
            }
            if ($cmp1 < $cmp2) {
                $style = 'style="background-color:#f5bebe"';
            }
            if (($cmp1 < $cmp2) && $cmp1 < 0) {
                $style = 'style="background-color:#f5bebe;color:red"';
            }
        }

        return $style;
    }

    public function getDashboardStatus($approvalStatus) {

        $status = '';
        if ($approvalStatus == 0) {
            $status = OPEN_STATUS;
        } elseif ($approvalStatus == 1) {
            $status = BU_SIGNED_OFF_STATUS;
        } elseif ($approvalStatus == 2) {
            $status = PUBLISHED_STATUS;
        }

        return $status;
    }

    /*
     * Get Dashboard Help Text Status
     * function is used to provide help text status of dashboard
     * 
     * @return String
     * 
     */

    public function getDashboardHelptextStatus($approvalStatus) {

        $helpText = '';
        if ($approvalStatus == 0) {
            $helpText = HELPTEXT_OPEN_STATUS;
        } elseif ($approvalStatus == 1) {
            $helpText = HELPTEXT_BU_SIGNED_OFF_STATUS;
        } elseif ($approvalStatus == 2) {
            $helpText = HELPTEXT_PUBLISHED_STATUS;
        }

        return $helpText;
    }

    /*
     * Show dashboard status
     * function to check display priveledge of dashboard status
     * 
     * @return Boolean
     * 
     */

    public function showStatus($userRole) {

        $roleArray = array(SEC_IDM_GPD_GLOBAL_ADMIN, SEC_IDM_GPD_BU_ADMIN, SEC_IDM_GPD_UPLOAD, SEC_IDM_GPD_DATA_OWNER);
        $flag = false;
        if (in_array(trim($userRole['ad_group']), $roleArray)) {
            $flag = true;
        }
        return $flag;
    }

    /*
     * Show edit option
     * function to check priveledge for edit option
     * 
     * @return Boolean
     * 
     */

    public function showEdit($roleResources) {

        $flag = false;
        if (in_array(EDIT, $roleResources)) {
            $flag = true;
        }
        return $flag;
    }

    public function getStatusClass($name) {
        if ($name == PERFORMANCEINDI_HIGH) {
            return 'HIGH-STATUS';
        } elseif ($name == PERFORMANCEINDI_LOW) {
            return 'LOW-STATUS';
        } elseif ($name == PERFORMANCEINDI_WATCHOUT) {
            return 'WATCHOUT-STATUS';
        } else {
            return 'DEFAULT-STATUS';
        }
    }

    public function defaultIndicator($flag, $name, $statusImagesArray) {
        if (!empty($statusImagesArray[$name])) {
            if ($statusImagesArray[$name] == $flag) {
                return 'checked';
            }
        } elseif ($flag == PERFORMANCEINDI_WATCHOUT) {
            return 'checked';
        }
    }

    public function getDashboardStatusPDF($status) {
        if ($status == PERFORMANCEINDI_LOW) {
            return 'red-arrow.png';
        } elseif ($status == PERFORMANCEINDI_HIGH) {
            return 'green-up-arrow.png';
        } elseif ($status == PERFORMANCEINDI_WATCHOUT) {
            return 'double-arrow.png';
        } else {
            return 'double-arrow-grey.png';
        }
    }

    /**
     * getMetricesNameFormated method for getting formated string
     * @return string
     *
     * Created By: Shashank
     * Created Date: 23/03/2016
     * Modified By: 
     * Modified Date: 
     */
    public function getMetricesNameFormated($metricesName) {
        return CakeText::truncate(trim($metricesName), TRUNCATE_LENGTH);
    }

    /**
     * getArrowColorStyle method for getting text color
     * @return string
     *
     * Created By: Shashank
     * Created Date: 5/04/2016
     * Modified By: 
     * Modified Date: 
     */
    public function getArrowColorStyle() {

        //default value is black
        $colorStyle = NULL;


        $arrowClass = $this->pdfTextColor;


        $arrowClass = trim($arrowClass);


        if (!empty($arrowClass)) {
            if (stristr($arrowClass, 'red')) {
                $colorStyle = ' color:red; ';
            }
            if (stristr($arrowClass, 'green')) {
                $colorStyle = ' color:green; ';
            }
            if (stristr($arrowClass, 'yellow')) {
                $colorStyle = ' color:#FBCB23; ';
            }
            if (stristr($arrowClass, 'black')) {
                $colorStyle = ' color:black; ';
            }
        }

        return $colorStyle;
    }

    public function getArroInfo($name) {
        if ($name == PERFORMANCEINDI_HIGH) {
            return '<span class="arrow-up-green"></span>';
        } elseif ($name == PERFORMANCEINDI_LOW) {
            return '<span class="arrow-down-red"></span>';
        } else {
            return '<span class="arrow-lft-yellow"></span><span class="arrow-rht-yellow"></span>';
        }
    }

    public function getArrowDetail($value, $method = 'asc', $isExcel = false, $otherparam = array()) {
        if ($method == 'asc') {
            if ((float) $value > 0) {
                $returnValue = '<span class="arrow-sm-up-green"></span>';
            } elseif ((float) $value < 0) {
                $returnValue = '<span class="arrow-sm-down-red"></span>';
            } elseif ((float) $value == 0) {
                $returnValue = '<span class="arrow-sm-lft-yellow"></span><span class="arrow-sm-rht-yellow"></span>';
            }
        } elseif ($method == 'desc') {
            if ((float) $value < 0) {
                $returnValue = '<span class="arrow-sm-down-green2"></span>';
            } elseif ((float) $value > 0) {
                $returnValue = '<span class="arrow-sm-up-red2"></span>';
            } elseif ((float) $value == 0) {
                $returnValue = '<span class="arrow-sm-lft-yellow"></span><span class="arrow-sm-rht-yellow"></span>';
            }
        } elseif ($method == 'b3') {
            if (strtoupper(trim($value)) == 'GREEN') {
                $returnValue = '<span class="arrow-sm-up-green"></span>';
            } elseif (strtoupper(trim($value)) == 'RED') {
                $returnValue = '<span class="arrow-sm-down-red"></span>';
            } elseif (strtoupper(trim($value)) == 'YELLOW') {
                $returnValue = '<span class="arrow-sm-lft-yellow"></span><span class="arrow-sm-rht-yellow"></span>';
            } elseif (strtoupper(trim($value)) == 'BLACK') {
                $returnValue = '';
            }

            if (!empty($otherparam) && (key($otherparam) == 'b3_value') && is_null($otherparam['b3_value'])) {
                $returnValue = '';
            }
        }

        if (is_null($value)) {
            $returnValue = '';
        }
        return $returnValue;
    }

    /**
     * isIndicatorAndKeyTakeoutAllowed method 
     * 
     * @param filterDetail
     * @return isIndicatorAndKeyTakeoutAllowed
     * Created By: Rohit 
     * Created Date:13/09/2016
     * Modified By: Rohit
     * Modified Date: 22/09/2016 
     */
    public function isIndicatorAndKeyTakeoutAllowed($filterDetail) {
        $isIndicatorAndKeyTakeoutAllowed = false;
        if (isset($filterDetail['is_editable']) && !is_null($filterDetail['is_editable'])) {
            $isIndicatorAndKeyTakeoutAllowed = ($filterDetail['is_editable'] == SUBMISSION_EDIT_TRUE);
        }
        return $isIndicatorAndKeyTakeoutAllowed;
    }

    /**
     * getColorByStatus method 
     * 
     * @param string $status
     * @return string
     * Created By: Harish 
     * Created Date:24/10/2016
     * Modified By: 
     * Modified Date: 
     */
    public function getColorByStatus($status) {
        switch ($status) {
            case 'HIGH':
                $return = 'Green';
                break;
            case 'LOW':
                $return = 'Red';
                break;
            case 'WATCHOUT':
                $return = 'Yellow';
                break;
            default :
                $return = 'Grey';
        }
        return $return;
    }

    public function BpReTrend($ewaMetrics, $metricNames, $metricData, $metric, $cmpPrevious = false) {
        foreach ($metricNames as $key => $value) {
            $tempArr = array();
            $periodArr = array();

            for ($i = 0; $i < sizeof($ewaMetrics[$metricData]); $i++) {
                # code...
                $val = $ewaMetrics[$metricData][$i][$metric][$value];
                $prd = $ewaMetrics[$metricData][$i][$metric]['period'];

                if (!(strpos($prd, "FY ") !== false )) {

                    $prd = str_replace("'", "", $prd);
                    $prd = str_replace(" ", "_", $prd);
                    array_push($tempArr, $val);
                    array_push($periodArr, $prd);
                }
            }

            $splitMetric = explode("__", $value);
            $data_metric = $splitMetric[0];
            $data_lable = str_replace("_", " ", $splitMetric[0]);
            $data_metricunit = str_replace("_", "", $splitMetric[1]);

            if ($cmpPrevious && isset($tempArr[0]) && isset($tempArr[1]) && $tempArr[0] < $tempArr[1]) {
                $str = '';
                for ($i = 0; $i < sizeof($ewaMetrics[$metricData]); $i++) {
                    $str = $str . "$periodArr[$i],$tempArr[$i] | ";
                }
                $str = "'" . $str . "'";
                echo "<button class='ewsbtn' onclick='drawChart(this)' data-toggle='modal' data-target='#myModal' data-chart-data = $str data-metric= $data_metric data-metricunit = $data_metricunit  type='submit'> $data_lable </button>";
            } else if ($cmpPrevious == false) {
                $str = '';
                for ($i = 0; $i < sizeof($ewaMetrics[$metricData]); $i++) {
                    $str = $str . "$periodArr[$i],$tempArr[$i] | ";
                }
                $str = "'" . $str . "'";
                echo "<button class='ewsbtn' onclick='drawChart(this)' data-toggle='modal' data-target='#myModal' data-chart-data = $str data-metric= $data_metric data-metricunit = $data_metricunit  type='submit'> $data_lable </button>";
            }
        }
    }

    public function myFilter($string) {
        return strpos($string, 'Q') === false;
    }

    public function checkTrend($ewaMetrics, $metricNames, $metricData, $metric, $ssd = false) {
        foreach ($metricNames as $key => $value) {
            $tempArr = array();
            $periodArr = array();
            for ($i = 0; $i < sizeof($ewaMetrics[$metricData]); $i++) {
                # code...
                $val = $ewaMetrics[$metricData][$i][$metric][$value];
                $prd = $ewaMetrics[$metricData][$i][$metric]['period'];

                if (!(strpos($prd, "FY ") !== false )) {

                    $prd = str_replace("'", "", $prd);
                    $prd = str_replace(" ", "_", $prd);
                    array_push($tempArr, $val);
                    array_push($periodArr, $prd);
                }
            }

            //echo '<pre>';print_r($tempArr2);print_r($tempArr);exit;
            $splitMetric = explode("__", $value);
            $data_metric = $splitMetric[0];
            $data_lable = str_replace("_", " ", $splitMetric[0]);
            $data_metricunit = str_replace("_", "", $splitMetric[1]);


            if ($ssd) {
                $periodArr = array_filter($periodArr, function($value) {
                    if (strstr($value, 'Q') !== false) {
                        return false;
                    }
                    return true;
                });
            }


            if (sizeof($tempArr) > 3) {
                if (($tempArr[3] < $tempArr[2] && $tempArr[2] < $tempArr[1] && $tempArr[1] < $tempArr[0]) || ($tempArr[3] < $tempArr[2] && $tempArr[2] > $tempArr[1] && $tempArr[1] > $tempArr[0])) {
                    if ($data_metric == "ONS_Wtd_by_Impression" && (isset($metricesData['mediaHrFlag']) && $metricesData['mediaHrFlag'])) {
                        $str = '';
                        for ($i = 0; $i < sizeof($tempArr); $i++) {
                            $str = $str . "$periodArr[$i],$tempArr[$i] | ";
                        }

                        $str = "'" . $str . "'";
                        echo "<button class='ewsbtn' onclick='drawChart(this)' data-toggle='modal' data-target='#myModal' data-chart-data = $str data-metric= $data_metric data-metricunit = $data_metricunit  type='submit'> $data_lable </button>";
                    } elseif ($data_metric != "Volume" && $data_metric != "CN_Net_Revenue" && $data_metric != "ONS_Wtd_by_Impression") {
                        $str = '';
                        for ($i = 0; $i < sizeof($tempArr); $i++) {
                            $str = $str . "$periodArr[$i],$tempArr[$i] | ";
                        }

                        $str = "'" . $str . "'";
                        echo "<button class='ewsbtn' onclick='drawChart(this)' data-toggle='modal' data-target='#myModal' data-chart-data = $str data-metric= $data_metric data-metricunit = $data_metricunit  type='submit'> $data_lable </button>";
                    }
                }
            }
        }
    }

}
