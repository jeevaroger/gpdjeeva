<?php

App::uses('Helper', 'View');

/**
 * Gsc Helper 
 *
 * Created By: Jeeva
 * Created Date:12/09/2018
 * Modified By: 
 * Modified Date: 
 */
class GscHelper extends Helper {

    public function populatePeriods($periods, $selectedPeriod, $style="margin-left: 92px;margin-top: -33px;", $id) {
        $dropdown = '<select  name="publicationDate"  id="'.$id.'" class="form-control form-control-sm" style="'.$style.'">';
        if (sizeof($periods)) {
            foreach ($periods as $value) {
                $selected = '';
                if ($selectedPeriod == $value) {
                    $selected = ' selected=selected';
                }
                $dropdown.="<option value=" . $value . $selected . ">" . $this->getPublicationDisplayName($value) . "</option>";
            }
        }
        return $dropdown.="</select>";
    }
    
    
    public function populateMarkets($marketArray, $selectedMarket, $style="margin-left: 322px;margin-top: -33px;") {
        $selected = '';
        $dropdown = '<select id="refer1"  name="market_selector" style="'.$style.'" class="form-control form-control-sm" >';
        if (sizeof($marketArray)) {
            foreach ($marketArray as $key => $value) {
                $selected = '';
                if ($selectedMarket == $key) {
                    $selected = ' selected=selected';
                }
                $dropdown.="<option value=" . $key . $selected . ">" . $value . "</option>";
            }
        }

        return $dropdown.="</select>";
        
        
    }
    
    /*public function populateAggregates($aggregateArray, $selectedAggregate) {
        $selected = '';
        $dropdown = '<select  id="refer2"  name="aggregate_selector" style="margin-left: 552px;margin-top: -33px;" class="form-control form-control-sm"><option value="0" ' . $selected . ' selected>Select Aggregate</option>';
        if (sizeof($aggregateArray)) {
            foreach ($aggregateArray as $key => $value) {
                $selected = '';
                if ($selectedAggregate == $key) {
                    $selected = ' selected=selected';
                }
                $dropdown.="<option value=" . $key . $selected . ">" . $value . "</option>";
            }
        }

        return $dropdown.="</select>";
        
        
    }*/

    public function getPublicationDisplayName($value = '') {
        if ($value == '') {
            return NO_CYCLE_AVAILABLE;
        }
        if (!preg_match('/^FULL_YEAR/', $value)) {
            $value = $value . '_CYCLE';
        }

        return ucwords(strtolower(str_replace('_', ' ', $value)));
    }

    public function lceText($val) {
        $text = '';
        if ($val > 0.30) {
            $text = 'L';
        } else if ($val > 0.1 & $val <= 0.30) {
            $text = 'C';
        } else if ($val <= 0.1) {
            $text = 'E';
        }
        return $text;
    }
    
 public function lceText1($G, $J) {
        $text = '';
        if ($J < 0.01 & $J > 0.00) {
            $text = 'E';
        } else {
            if ($G >= 0.30) {
                $text = 'L';
            } else if ($G >= 0.1 & $G < 0.30) {
                $text = 'C';
            } else if ($G < 0.1) {
                $text = 'E';
            }
        }
        return $text;
    }

    public function colorCode1($val) {
        $color = '';
        if (!is_null($val)) {
            $val = number_format($val * 100, 1, '.', '');
            if ($val > 0) {
                $color = 'Green';
            } else if ($val < 0) {
                $color = 'Red';
            } else if ($val == 0) {
                $color = '#ffcc33';
            }
            return $color;
        }
    }

    public function colorCode2($val) {
        $color = '';
        if (!is_null($val)) {
            $val = number_format($val, 1, '.', '');
            if ($val > 50) {
                $color = 'Green';
            } else if ($val < 50) {
                $color = 'Red';
            } else if ($val == 50) {
                $color = '#ffcc33';
            }
            return $color;
        }
    }

    public function colorCode3($val) {
        $color = '';
        if (!is_null($val)) {
            $val = number_format($val, 1, '.', '');
            if ($val >= 0.15) {
                $color = 'Green';
            } else if ($val <= -0.15) {
                $color = 'Red';
            } else if ($val > -0.15 & $val < 0.15) {
                $color = '#ffcc33';
            }
            return $color;
        }
    }

    public function colorCode4($val) {
        $color = '';
        if (!is_null($val)) {
            $val = number_format($val, 1, '.', '');
            if ($val >= 0.5) {
                $color = 'Green';
            } else if ($val <= -0.5) {
                $color = 'Red';
            } else if ($val > -0.5 & $val < 0.5) {
                $color = '#ffcc33';
            }
            return $color;
        }
    }
    
    public function colorCode5($val1, $val2) {
        $color = '';
        if (!is_null($val1) & !is_null($val2)) {
            $val1 = number_format($val1, 1, '.', '');
            $val2 = number_format($val2, 1, '.', '');
            if ($val1 > 0) {
                $color = 'Green';
            } else if ($val1 < 0 & $val2 < 105) {
                $color = 'Red';
            } else if (($val1 == 0) || ($val1 < 0 & $val2 > 105) ) {
                $color = '#ffcc33';
            }
            return $color;
        }
    }
    
    
    public function colorCode6($val) {
        $color = '';
        if (!is_null($val)) {
            $val = number_format($val, 1, '.', '');
            if ($val >= 0.5) {
                $color = 'Green';
            } else if ($val <= -0.5) {
                $color = 'Red';
            } else if ($val > -0.5 & $val < 0.5) {
                $color = '#ffcc33';
            }
            return $color;
        }
    }
    
    
    
     public function costaSplit($val1, $val2) {
         $lce = explode('/', $val1);
         $lce_cmp = explode('/', $val2);
         //print_r($lce);
         //print_r($lce_cmp);exit;
         $l = $this->costaColorCode($lce[0], $lce_cmp[0]);
         $c = $this->costaColorCode($lce[1], $lce_cmp[1]);
         $e = $this->costaColorCode($lce[2], $lce_cmp[2]);
        return array('value' => array($lce[0], $lce[1], $lce[2]), 'color' =>array($l, $c, $e));
    }
    
    
    public function costaColorCode($val1, $val2) {
        $color = '';
        $val1 = (float)substr($val1, 0, -1);
        $val2 = (float)substr($val2, 0, -1);
        if (!is_null($val1) & !is_null($val2)) {
            $val1 = number_format($val1, 1, '.', '');
            $val2 = number_format($val2, 1, '.', '');
            if ($val1 > $val2) {
                $color = 'Green';
            } else if ($val1 < $val2) {
                $color = 'Red';
            } else if ($val1 == $val2 ) {
                $color = 'Black';
            }
            return $color;
        }
    }
    
    
    public function array_slice_keys($array, $keys = null) {
    if ( empty($keys) ) {
        $keys = array_keys($array);
    }
    if ( !is_array($keys) ) {
        $keys = array($keys);
    }
    if ( !is_array($array) ) {
        return array();
    } else {
        return array_intersect_key($array, array_fill_keys($keys, '1'));
    }
}

}
