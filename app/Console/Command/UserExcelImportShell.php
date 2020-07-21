<?php

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));

/**
 * UserExcelImportShell Shell
 *
 * Created By: Anoop
 * Created Date:02/05/2016
 * Modified By: 
 * Modified Date:  
 */
class UserExcelImportShell extends AppShell {

    public $uses = array('UserMaster', 'Market');

    public function main() {

        $createSheetPath = TEMPLATE . '/userimport.xlsx';
        
        $objPHPExcel = PHPExcel_IOFactory::load($createSheetPath);
        if (empty($objPHPExcel)) {
            throw new PHPExcel_Exception('Invalid sheet,please try again!');
        }

        $i = 0;
        $count_upload = 0;
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
            if (!empty($worksheet)) {
                foreach ($worksheet->getRowIterator() as $row) {
                    $i++;
                    if (!empty($row) && $i > 3) {

                        $cellIterator = $row->getCellIterator();
                        $cellIterator->setIterateOnlyExistingCells(true);

                        $rowsData = iterator_to_array($cellIterator);

                        if (!empty($rowsData[0]) && !empty($rowsData[1]) && !empty($rowsData[2]) && !empty($rowsData[3]) && !empty($rowsData[0]->getValue()) && !empty($rowsData[1]->getValue()) && !empty($rowsData[2]->getValue())) {

                            if (!filter_var(trim($rowsData[3]->getValue()), FILTER_VALIDATE_EMAIL) === false) {
                                $userMaster = $this->UserMaster->getUserBySSOId(trim($rowsData[0]->getValue()));


                                if (empty($userMaster)) {


                                    if (strlen(strtolower(trim($rowsData[3]->getValue()))) < 50) {
                                        $this->UserMaster->create();
                                        $data['UserMaster']['user_sso_id'] = trim($rowsData[0]->getValue());
                                        $data['UserMaster']['first_name'] = trim($rowsData[1]->getValue());
                                        $data['UserMaster']['last_name'] = trim($rowsData[2]->getValue());
                                        $data['UserMaster']['email'] = trim($rowsData[3]->getValue());
                                        $data['UserMaster']['created_at'] = DATE_TIME;
                                        $data['Market'] = $this->addUserMarkets($rowsData);

                                        if ($this->UserMaster->saveAll(SanatizeInput::cleanInput($data))) {                                            
                                            $count_upload++;
                                        } else {
                                            $this->log("----------------------User-import-log save failed----------------");
                                            $this->log($data);
                                            $this->log("---Ends----User-import-log save failed-------------");
                                        }
                                        $this->UserMaster->clear();
                                    } else {
                                        $this->log("----------------------User-import-log-email-error-length-----------------");
                                        $this->log('Invalid email length,unable to add user cell row:' . $i . " KO-ID:" . (!empty($rowsData[0]) ? $rowsData[0]->getValue() : ''));
                                        $this->log("---Ends----User-import-log-email-error-length------------");
                                    }
                                } else {
                                    $this->log("----------------------User-import-log not unique KO ID----------------");
                                    $this->log('Invalid input,unable to add user cell row:' . $i . " KO-ID:" . (!empty($rowsData[0]) ? $rowsData[0]->getValue() : ''));
                                    $this->log("---Ends----User-import-log not unique KO ID failed-------------");
                                }
                            } else {
                                $this->log("----------------------User-import-log-email-error-----------------");
                                $this->log('Invalid email,unable to add user cell row:' . $i . " KO-ID:" . (!empty($rowsData[0]) ? $rowsData[0]->getValue() : ''));
                                $this->log("---Ends----User-import-log-email-error-------------");
                            }
                        } else {
                            $this->log("----------------------User-import-log-invalid-input----------------");
                            $this->log('Invalid input,unable to add user cell row:' . $i . " KO-ID:" . (!empty($rowsData[0]) ? $rowsData[0]->getValue() : ''));
                            $this->log("---Ends----User-import-log-invalid-input-------------");
                        }
                    }
                }
            }
        }
        $this->out($count_upload);
    }

    public function addUserMarkets($excelRows = NULL) {

        if (empty($excelRows)) {
            throw new InvalidArgumentException('Invalid input, please try again!');
        }

        $data['Market'] = array();

        $markets = $this->Market->find('list', array(
            'fields'     => array('Market.market_id', 'Market.market_name'),
            'conditions' => array('Market.is_central' => 0, 'Market.is_cluster' => 0),
            'order'      => array('Market.market_name'),
            'recursive'  => 0)
        );

        $mappingArray = Configure::read('UserImport');

        foreach ($mappingArray as $marketIndex => $marketName) {
            if ((!empty($excelRows[$marketIndex]) && !empty($excelRows[$marketIndex]->getValue()) && trim(strtoupper($excelRows[$marketIndex]->getValue())) == 'YES') && (!empty($this->getMarketId($marketName, $markets)))) {
                array_push($data['Market'], $this->getMarketId($marketName, $markets));
            }
        }

        return $data;
    }

    public function getMarketId($name, $markets) {
        return array_search(trim($name), $markets);        
    }

}
