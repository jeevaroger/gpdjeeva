<?php

App::uses('Helper', 'View');

/**
 * Market Helper 
 *
 * Created By: Shashank
 * Created Date:27/11/2015
 * Modified By: Shashank
 * Modified Date: 27/11/2015
 */
class MarketHelper extends Helper {

    /**
     * marketDropdown method for market drop down on country-selector
     * 
     * @param array $marketList 
     * @var string
     * Created By: Shashank
     * Created Date:27/11/2015
     * Modified By: Shashank
     * Modified Date: 27/11/2015
     */
    public function marketDropdown($marketList) {
        $dropdown = '<select class="country-selector" id="comboboxcountry" ><option>Select Market</option>';
        if (sizeof($marketList)) {
            foreach ($marketList as $key => $value) {
                $dropdown.="<option value=" . $key . ">" . $value . "</option>";
            }
        }
        return $dropdown.="</select>";
    }

    /**
     * marketList method for market list in user view
     * 
     * @param array $marketArray 
     * @var string
     * Created By: Shashank
     * Created Date:27/11/2015
     * Modified By: Shashank
     * Modified Date: 27/11/2015
     */
    public function marketList($marketArray) {
        $list = "<ul>";

        if (sizeof($marketArray)) {
            foreach ($marketArray as $value) {
                $list.="<li>" . $value['market_name'] . "</li>";
            }
        }
        return $list.="</ul>";
    }

    //create market array in js format
    public function getMarketArray($marketArray, $selectedMarketIso = null) {

        $script = '<script>';
        if ($selectedMarketIso != null && !in_array($selectedMarketIso, $marketArray)) {
            //die('unauthorized attempt to access'); /* unauthorized attempt to access */
        } elseif ($selectedMarketIso != null && trim($selectedMarketIso) != '') {
            $script .= 'var selectedMarketIso = "' . $selectedMarketIso . '";';
        }
        return $script .= 'var countries = [' . '"' . implode('","', $marketArray) . '" ];</script>';
    }

 
     //quarter drop down creator
    public function quarterDropdown($publicationPeriod, $selectedPublicationDate, $style = '') {
        $dropdown = '<select class ="drop_down_arrow"  id="publication_year" name="quarter_publication_period">';
        if (sizeof($publicationPeriod)) {
            foreach ($publicationPeriod as $value) {
                $selected = '';
                 if ($selectedPublicationDate == $value) {
                    $selected = ' selected=selected';
                }
                $dropdown.="<option value=" . $value . $selected . ">" . $this->getPublicationDisplayName($value) . "</option>";
            }
        }
        return $dropdown.="</select>";
    }

    public function aggregateDropdown($aggregateArray, $selectedAggregate) {
        $selected = '';
        if ($selectedAggregate == '' || $selectedAggregate == '0') {
            //$selected = ' selected=selected';
        }
        $dropdown = '<select class ="drop_down_arrow" id="aggregate_selector"><option value="0" ' . $selected . ' disabled selected>Select Aggregate</option>';
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
    }

    public function countryDropdown($marketArray, $selectedMarket) {
        $selected = '';
        if ($selectedMarket == '' || $selectedMarket == '0') {
            $selected = ' selected=selected';
        }
        $dropdown = '<select class="custom-select2" id="market_selector"><option value="0" ' . $selected . '>Select Market</option>';
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

    /* get publication period display name */

    public function getPublicationDisplayName($value = '') {
        if ($value == '') {
            return NO_CYCLE_AVAILABLE;
        }
        if (!preg_match('/^FULL_YEAR/', $value)) {
            $value = $value . '_CYCLE';
        }

        return ucwords(strtolower(str_replace('_', ' ', $value)));
    }

    /**
     * marketChosen method for market drop down for pop up
     * 
     * @param array $marketList 
     * @var string
     * Created By: Shashank
     * Created Date:21/12/2015
     * Modified By: 
     * Modified Date:
     */
    public function marketChosen($marketList, $selectedMarketId = 0) {

        $dropdown = "";
        if (sizeof($marketList)) {
            foreach ($marketList as $key => $value) {
                $dropdown.="<option value='" . $key . "' " . ($selectedMarketId == $key ? 'selected' : '') . ">" . strtoupper($value) . "</option>";
            }
        }
        return $dropdown;
    }

}
