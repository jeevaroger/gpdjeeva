<?php

$config = array();
define("SUC_VALIDATED", 'Successfully Validated.');
define("SUC_UPLOADED", 'File uploaded successfully.');
define("ERR_WHILE_VALIDATING", 'Error found while validating the file.');
define("ERR_EXT_TYPE", "Incorrect file type. Please choose an .xlsx file to validate.");
define("ERR_TAB_MISSING", " tab missing in the file.");
define("ERR_FILE_NOT_SELECTED", "Please choose a file to validate.");
define("ERR_UNABLE", "Unable to validate, Please try again.");
define("ERR_INCORRECT_DATA", " Incorrect data format found in file.");
define('CUSTOM_ERROR_MESSAGE', 'Error count exceeded 10. Excel sheet seems to be highly erroneous, Please revisit the same.');
define('ONLY_NUMERIC', 'Cell should contain only numbers.');
define('ONLY_ALPHABETS', 'Cell should contain only alphabets.');
define('MISSPELLED', 'seems to be misspelled.');
define('CONSUMPTION_NOTFOUND', 'Consumption Days row not found.');
define('EMPTY_SHEET', 'Empty Sheet.');
define('OUT_OF_RANGE', 'Cell should contain values in range.');
define('INCCORECT_CALCULATED', 'Operands required for computing the cell should have correct value.');
define('INVALID_PUBLICATION_PERIOD', 'Invalid value for "Publication Period".');
define('HEADING_MISSING', ' heading is missing.');
define('HEADING_EXCEEDS', ' heading exceeds the character limit.');
define('INVALID_EDITABLE', 'Invalid value for "Edit Dashboard".');
define('UPLOAD_LOCKED_DUE_TO_EDITING', 'Uploading is locked since Dashboard is in Edit Mode.');
define("UPLOAD_LOCKED", 'Upload is locked.');


//Glossary Upload
define("GLOSSARY_ERR_FILE_NOT_SELECTED", "Please choose a file.");
define("GLOSSARY_ERR_EXT_TYPE", "Incorrect glossary file type.");
define("GLOSSARY_NOT_UPLOADED", "Please try again ! Glossary file not uploaded.");
define("GLOSSARY_SUC_UPLOADED", "Glossary file uploaded successfully.");

//Basic Glossary Upload
define("GPDS_ERR_FILE_NOT_SELECTED", "Please choose atleast one file.");
define("GPDS_BGLOSSORY_ERR_EXT_TYPE", "Incorrect basic glossary file type.");
define("GPDS_BGLOSSORY_SUC_UPLOADED", "Summary Glossary file uploaded successfully.");
define("GPDS_BGLOSSORY_NOT_UPLOADED", "Please try again ! Summary glossary file not uploaded.");

//Metric Contact List Upload
define("GPDS_METRICCONTACT_ERR_EXT_TYPE", "Incorrect metric contact list file type.");
define("GPDS_METRICCONTACT_SUC_UPLOADED", "Metric contact list file uploaded successfully.");
define("GPDS_METRICCONTACT_NOT_UPLOADED", "Please try again ! Metric contact list file not uploaded.");
