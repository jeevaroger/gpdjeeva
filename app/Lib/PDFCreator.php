<?php

//Importing TCPDF
App::import('Vendor', 'TCPDF', array('file' => 'tcpdf/tcpdf.php'));

/**
 * Description of PDFCreator 
 * Created By: Shashank
 * Created Date:21/12/2015
 * Modified By: 
 * Modified Date: 
 */
class PDFCreator extends TCPDF {

    private $glossary_header;
    private $glossary_header_content;

    public function __construct($orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = 'UTF-8', $diskcache = false, $pdfa = false) {
        parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache, $pdfa);
        $this->glossary_header = FALSE;
    }

    public function Header() {
        //$this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . ' of ' . $this->getAliasNbPages(), 0, 1, 'R', false);
        
        if ($this->glossary_header){
            $this->setY(20);
            $this->writeHTML($this->glossary_header_content, true, false, true, false, '');
            
        }
    }

    public function Footer() {
         $this->SetY(-20);
        if ($this->getPage() != 1) {
            $index_link = $this->AddLink();
            $this->SetLink($index_link, 0, '*1');
            $this->Cell(0, 5, 'Page ' . $this->getAliasNumPage() . ' of ' . $this->getAliasNbPages(), 0, 1, 'R', false);
            $this->Cell(0, 10, 'Back to INDEX', 0, 1, 'C', false, $index_link);
        }
    }

    public function getGlossary_header() {
        return $this->glossary_header;
    }

    public function getGlossary_header_content() {
        return $this->glossary_header_content;
    }

    public function setGlossary_header($glossary_header) {
        $this->glossary_header = $glossary_header;
        return $this;
    }

    public function setGlossary_header_content($glossary_header_content) {
        $this->glossary_header_content = $glossary_header_content;
        return $this;
    }

}
