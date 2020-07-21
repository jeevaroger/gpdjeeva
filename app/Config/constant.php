<?php

$config = array();

define('PRINT_DETAIL', 'Print');
define('EXPORT_PDF', 'Export PDF');
define('EXPORT_EXCEL', 'Export Excel');
define('UPLOAD', 'Upload');
define('USER_MGMT', 'User Mgmt');
define('EDIT', 'Edit');
define('SIGN_OFF', 'Sign-off');
define('VIEW_DRAFT_VERSION', 'View Draft version');
define('VIEW_PUBLISHED_VERSION', 'View Published Version');
define('VIEW_HR_DATA', 'View HR Data');
define('BULK_SIGN_OFF', 'Bulk-Sign-off');
define('AUDIT_LOG', 'Audit-Log');
define('GPDS', 'GPDS');


define('GREEN_ARROW_SMALL', 'green-img');
define('RED_ARROW_SMALL', 'red-img');
define('YELLOW_ARROW_SMALL', 'yellow-img');

define('DATA_NOT_YET_PUBLISHED', 'There is no published dashboard available for ###market name###.');
define('DATA_NOT_YET_SUBMITTED', 'There is no dashboard available for ###market name###.');
define('OPEN_STATUS', 'Open');
define('BU_SIGNED_OFF_STATUS', 'BU Signed-off');
define('PUBLISHED_STATUS', 'Published');

define('HELPTEXT_OPEN_STATUS', 'Open for BU admin to sign off');
define('HELPTEXT_BU_SIGNED_OFF_STATUS', 'BU admin - Signed off the data');
define('HELPTEXT_PUBLISHED_STATUS', 'Global admin - Signed off the data');

define('ACCESS_DENIED', 'Access Denied');


define("TEMPLATE", WWW_ROOT . '/template/');
define("SAMPLETEMPLATE", TEMPLATE . 'template.xlsx');
define("INPUTFILETYPE", 'Excel2007');
define("SAVEWITHEXTENSION", '.xlsx');
define("PATHTOSTORESHEETDATA", TEMPLATE . "sheetdata.txt");

define("GSCTEMPLATE", WWW_ROOT . '/gsc_template/');
define("GSCPATHTOSTORESHEETDATA", GSCTEMPLATE . "gscsheetdata.txt");
define("GSCPATHTOSTORESHEETCUSTOMERDATA", GSCTEMPLATE . "gscsheetcustomerdata.txt");

/**
 * Constant for user redirect as per role
 * 
 * Used in: AuthorizationsController
 * Created By: Shashank
 * Created Date:10/12/2015
 * Modified By: 
 * Modified Date: 
 */
define("BU_ADMIN", 'SEC-IDM-GPD-BU-ADMIN');
define("BU_READ_WITH_FINANACE", 'SEC-IDM-GPD-BU-READ-FINANCE');
define("BU_READ_WITHOUT_FINANACE", 'SEC-IDM-GPD-BU-READ');
define("GLOBAL_ADMIN", 'SEC-IDM-GPD-GLOBAL-ADMIN');
define("GLOBAL_ADMIN_WITH_FINANCE", 'SEC-IDM-GPD-GLOBAL-READ-FINANCE');
define("GLOBAL_ADMIN_WITHOUT_FINANCE", 'SEC-IDM-GPD-GLOBAL-READ');
define("WNS_UPLOAD", 'SEC-IDM-GPD-UPLOAD');
define("WNS_VIEW_ONLY", '');
define("TOOL_ADMIN", 'SEC-IDM-GPD-TOOL-ADMIN');
define("DATA_OWNER", 'SEC-IDM-GPD-DATA-OWNER');

/**
 * Constant for controlling login 
 * 
 * Used in: AppController
 * Created By: Shashank
 * Created Date:15/12/2015
 * Modified By: 
 * Modified Date: 
 */
define("CONTROLLER_LOGIN", 'Authorizations');
define("LOGIN_INDEX", 'index');
define("LOGIN_POST", 'loginPost');

/**
 * Constant for color code
 *
 * Created By: Harish
 * Created Date:29/12/2015
 * Modified By: Rohit
 * Modified Date: 16/09/2016
 */
define('GREEN', '21610B');
define('RED', 'FE2E2E');
define('YELLOW', 'FBCB23');
define('GREY', '858688');
define('VOLPT', 'VolPT');

define('TEMPLATE_DETAIL_HR', TEMPLATE . 'Detailed_HR.xlsx');
define('TEMPLATE_DETAIL', TEMPLATE . 'Detailed.xlsx');
define('TEMPLATE_SUMMARY_HR', TEMPLATE . 'Summary_HR.xlsx');
define('TEMPLATE_SUMMARY', TEMPLATE . 'Summary.xlsx');

define('TEMPLATE_SUMMARY_WITH_HR_WITHOUT_MEDIA', TEMPLATE . 'Summary_With_HR_Without_Media.xlsx');
define('TEMPLATE_SUMMARY_WITHOUT_HR_WITH_MEDIA', TEMPLATE . 'Summary_Without_HR_With_Media.xlsx');
define('TEMPLATE_SUMMARY_WITHOUT_HR_WITHOUT_MEDIA', TEMPLATE . 'Summary_Without_HR_Without_Media.xlsx');

define('TEMPLATE_DETAIL_WITH_HR_WITHOUT_MEDIA', TEMPLATE . 'Detail_With_HR_Without_Media.xlsx');
define('TEMPLATE_DETAIL_WITHOUT_HR_WITH_MEDIA', TEMPLATE . 'Detail_Without_HR_With_Media.xlsx');
define('TEMPLATE_DETAIL_WITHOUT_HR_WITHOUT_MEDIA', TEMPLATE . 'Detail_Without_HR_Without_Media.xlsx');

define('EXCEL_EXPORT_FILE_NAME', 'dashboard.xlsx');
define('SUMMARY', 'summary');
define('DETAIL', 'detail');
define('BOTH', 'both');
define('COUNTRY_NAME', 'Country Name');
define('TIME_PEROID', 'Publication Period');

/**
 * Constant for controlling keytakeouts and notes 
 * 
 * Used in: AppController
 * Created By: Shashank
 * Created Date:30/12/2015
 * Modified By: 
 * Modified Date: 
 */
define("DASHBOARD_LOCK_CHECK", 'checkDashboardLock');
define("DASHBOARD_LOCK_AJAX", 'checkDashboardLock');
/**
 * Constant for color code
 *
 * Created By: Harish
 * Created Date:04/01/2016
 * Modified By: 
 * Modified Date: 
 */
define('GENERATEDEXCEL', 'generatedExcel');
define('EXCEL_GLOSSARY', TEMPLATE . 'Glossary.xlsx');
define('EXCEL_INDEX', TEMPLATE . 'index.xlsx');
define('INDEX_PAGE', 'Index Page');
define('INDEX', 'index');

define('COMMENTARY', TEMPLATE . 'Commentary.xlsx');

/**
 * Constant for datetime
 *
 * Created By: Shashank
 * Created Date:05/01/2016
 * Modified By: 
 * Modified Date: 
 */
define('DATE_TIME', date('Y-m-d H:i:s'));
define('MAIL_FROM_NAME', 'Global Performance Dashboard');
define('MAIL_FROM_EMAIL', 'noreply@coca-cola.com');

define('DASHBOARD_SIGNOFF', 'dashboard_signoff');
define('DASHBOARD_PUBLISHED', 'dashboard_published');
define('DASHBOARD_REOPEN', 'dashboard_reopen');
define('DASHBOARD_SAVE', 'dashboard_save');

define('SIGNOFF_SUBJECT', 'BU Admin has signed-off GPD Data');
define('SIGNOFF_ACTION_REQUIRED', 'Action required: Global Admin to review & sign-off');
define('SIGNOFF_MESSAGE_BODY', 'We would like to inform you that the data has been reviewed and signed-Off by BU-Admin for following markets on the Global Performance Dashboard:');
define('SIGNOFF_ADDRESS_TO', 'Global Admin');

define('PUBLISHED_SUBJECT', 'GPD data has been published');
define('PUBLISHED_ACTION_REQUIRED', '');
define('PUBLISHED_MESSAGE_BODY', 'We would like to inform you that data has been Published for following markets in Global Performance Dashboard.');
define('BULK_PUBLISHED_MESSAGE_BODY', 'We would like to inform you that the following markets have been published in Global Performance Dashboard:');
define('PUBLISHED_ADDRESS_TO', 'All');

define('REOPEN_SUBJECT', 'GPD data has been re-opened');
define('REOPEN_ACTION_REQUIRED', 'Action required: BU Admin to review & sign-off');
define('REOPEN_MESSAGE_BODY', 'We would like to inform you that the following markets have been re-opened in Global Performance Dashboard:');
define('REOPEN_ADDRESS_TO', 'BU-Admin');



/**
 * Constant for rootmetrics
 *
 * Created By: Shashank
 * Created Date:14/01/2016
 * Modified By: 
 * Modified Date: 
 */
define('PERFORMANCE_METRICS', 'Performance_Metrics');
define('COMMERCIAL_EXECUTION', 'Commercial_Execution');
define('EXTERNAL_ENVIRONMENT', 'External_environment');
define('QUALITY_OF_MARKETING', 'Quality_of_marketing');
define('QUANTITY_OF_MARKETING', 'Quantity_of_marketing');

/**
 * Constant for performance indicator
 *
 * Created By: Shashank
 * Created Date:14/01/2016
 * Modified By: Rohit
 * Modified Date: 16/09/2016
 */
define('PERFORMANCEINDI_WATCHOUT', 'WATCHOUT');
define('PERFORMANCEINDI_HIGH', 'HIGH');
define('PERFORMANCEINDI_LOW', 'LOW');
define('PERFORMANCEINDI_DEFAULT', 'DEFAULT');
define('PERFORMANCEINDI_HIDE', 'no-indicator');
define('AJAXENC_KEY', 'WNS_COKE@123');
define('CSRF_EXPIRES', '+30 minutes');

define('DASHBOARD_EMAIL_NOT_SENT_STATUS', 0);
define('DASHBOARD_EMAIL_SENT_STATUS', 1);
define('DASHBOARD_STATUS_OPEN', 0);
define('DASHBOARD_SIGNOFF_STATUS', 1);
define('DASHBOARD_PUBLISHED_STATUS', 2);
define('SEC_IDM_GPD_BU_ADMIN', 'SEC-IDM-GPD-BU-ADMIN');
define('SEC_IDM_GPD_BU_READ', 'SEC-IDM-GPD-BU-READ');
define('SEC_IDM_GPD_BU_READ_FINANCE', 'SEC-IDM-GPD-BU-READ-FINANCE');
define('SEC_IDM_GPD_GLOBAL_ADMIN', 'SEC-IDM-GPD-GLOBAL-ADMIN');
define('SEC_IDM_GPD_GLOBAL_READ', 'SEC-IDM-GPD-GLOBAL-READ');
define('SEC_IDM_GPD_GLOBAL_READ_FINANCE', 'SEC-IDM-GPD-GLOBAL-READ-FINANCE');
define('SEC_IDM_GPD_UPLOAD', 'SEC-IDM-GPD-UPLOAD');
define('SEC_IDM_GPD_TOOL_ADMIN', 'SEC-IDM-GPD-TOOL-ADMIN');
define('SEC_IDM_GPD_DATA_OWNER', 'SEC-IDM-GPD-DATA-OWNER');
define('UPLOAD_MAIL_SUBJECT', 'GPD Data uploaded successfully');
define('NUMERIC', 'numeric');
define('STRING', 'string');
define('B3_COLOR', 'b3_color');
define('CONSUMPTION', 'consumption');
define('VALUE', 'value');
define('CELL_INDEX', 'index');
define('PUBLICATION_PERIOD', 'publication_period');
define('CALCULATED', 'Calculated');
define('MAX_BUG', 10);
define('GLOSSARY', "Glossary");
define('GLOSSARY_INDEX', "B18");
define('SITEMINDER_LOGOUT', "https://apps.devko.com/global/2.0/logoff.htm");
define('LOGIN_ERROR', "loginError");
define('UNABLE_TO_ACCESS_DASHBOARD', "Unable to get logged in to Dashboard.");
define('INVALID_REQUEST_ERROR', "Invalid request. please try again.");

define('USER_LIST_RECORDS', 20);
define('TRUNCATE_LENGTH', 35);

define('PCE_DETAIL', 9);
define('CPI_INFLATION_DETAIL', 10);
define('UNEMPLOYMENT_DETAIL', 11);

define('OUTLET_COVERAGE_DETAIL', 16);
define('UNIVERSE_OUTLETS_DETAIL', 17);
define('TCCC_OUTLETS_DETAIL', 18);
define('NUM_DIST_ENTRY_PACK_DETAIL', 20);
define('NUM_DIST_AFFRD_ENTRY_PK_DETAIL', 21);
define('COKETM_PRICE_VS_CSP_COMP_DETAIL', 22);
define('OUT_OF_STOCKS_OOS_DETAIL', 23);
define('TOTAL_CDE_DETAIL', 25);
define('NET_PLACEMENT_DETAIL', 26);
define('SOVI_SOM_RATIO_NARTD_DETAIL', 28);
define('SOVI_NARTD_DETAIL', 29);
define('SOVI_SOM_RATIO_CORE_SP_DETAIL', 30);
define('SOVI_COR_SSD', 31);
define('AVG_PRICE_COKE_TM_DETAIL', 33);
define('DASHBOARD_TEAM', 'Global Performance Dashboard Team');

define('GREEN_DOWN_ARROW_SMALL', 'green-down-arrow');
define('RED_UP_ARROW_SMALL', 'red-up-arrow');

define('EMAIL_SUBJECT_ENVIRONMENT', ' DEV - ');

define('ENV_BASE_URL', 'devko.com');

define('USERLIST_USERNAME', 'GPD_USER_UPLOAD');
define('USERLIST_USERPASSWORD', 'GPD@157#coke');

define('CN_NET_REVENUE_SUMMARY_HR', 9);
define('VOLUME_SUMMARY_HR', 10);
define('VAL_SHARE_CORE_SPARKLING_SUMMARY_HR', 12);
define('VOL_SHARE_CORE_SPARKLING_SUMMARY_HR', 13);
define('ALL_INCID_P4W_COKETM_SUMMARY_HR', 15);
define('HH_PENETRATION_COKE_TM_SUMMARY_HR', 17);

define('OUTLET_COVERAGE_GROWTH_SUMMARY_HR', 20);
define('NUM_DIST_AFFRD_ENTRY_PK_SUMMARY_HR', 21);
define('COKETM_PRICE_VS_CSP_COMP_SUMMARY_HR', 22);
define('OUT_OF_STOCKS_OOS_SUMMARY_HR', 23);
define('TOTAL_KO_CDE_SUMMARY_HR', 24);
define('SOVI_SOM_RATIO_CORE_SP_SUMMARY_HR', 25);

define('PCE_SUMMARY_HR', 9);
define('CPI_INFLATION_SUMMARY_HR', 10);

define('TOTAL_DMI_CN_US_SUMMARY_HR', 14);
define('TV_SOV_OVER_CORE_NARTD_SUMMARY_HR', 16);

define('BLS_SCORE_COKE_SUMMARY_HR', 20);
define('ONS_WTD_BY_IMPRESSION_SUMMARY_HR', 22);

define('VAL_SHARE_CORE_SPARKLING_SUMMARY_WHR', 9);
define('VOL_SHARE_CORE_SPARKLING_SUMMARY_WHR', 10);
define('ALL_INCID_P4W_COKETM_SUMMARY_WHR', 12);
define('HH_PENETRATION_COKE_TM_SUMMARY_WHR', 14);
define('TCCC_SALES_VALUE_DETAIL_HR', 9);
define('CN_NET_REVENUE_DETAIL_HR', 11);
define('NET_REVENUE_PER_CASE_DETAIL_HR', 12);
define('GROSS_PROFIT_MARGIN_DETAIL_HR', 13);
define('BRAND_CONTRIBUTION_DETAIL_HR', 14);

define('PROFIT_BEFORE_TAX_DETAIL_HR', 15);
define('VOLUME1_DETAIL_HR', 16);
define('VOLUME2_DETAIL_HR', 18);
define('PURCHASE_TRANSACTIONS_DETAIL_HR', 19);
define('VAL_SHARE_CORE_NARTD_DETAIL_HR', 21);
define('VAL_SHARE_CORE_SPARKLING_DETAIL_HR', 22);
define('VAL_SHARE_STILLS_EX_WATER_DETAIL_HR', 23);
define('VAL_SHARE_PKGD_WATER_DETAIL_HR', 24);
define('VOL_SHARE_CORE_NARTD_DETAIL_HR', 25);
define('VOL_SHARE_CORE_SPARKLING_DETAIL_HR', 26);
define('VOL_SHARE_STILLS_EX_WATER_DETAIL_HR', 27);
define('VOL_SHARE_PKGD_WATER_DETAIL_HR', 28);
define('ALL_INCIDENCE_P4W_COKE_TM_DETAIL_HR', 30);
define('ALL_WEEKLY_MORE_COKE_TM_DETAIL_HR', 31);
define('TEENS_INCIDENCE_P4W_COKE_TM_DETAIL_HR', 32);
define('TEENS_WEEKLY_MORE_COKE_TM_DETAIL_HR', 33);

define('HH_PENETRATION_COKE_TM_DETAIL_HR', 35);
define('LITRES_PER_HH_COKE_TM_DETAIL_HR', 36);
define('BASKET_INCIDENCE_COKE_TM_DETAIL_HR', 37);
define('TOTAL_DMI_CN_US_DETAIL', 9);
define('REFUEL_RATE_DETAIL', 10);
define('ALL_MEDIA_DMI_CN_US_DETAIL_HR', 11);
define('ALL_MEDIA_DMI_OVER_TOTAL_DETAIL_HR', 12);
define('SYS_TV_MEDIA_INV_DETAIL_HR', 14);
define('SYS_DIG_MEDIA_INV_DETAIL_HR', 15);
define('REUSE_RATE_TV_DETAIL_HR', 17);
define('COKE_TM_TV_IMPRESSIONS_DETAIL_HR', 18);
define('COKE_TM_WEEKS_ON_AIR_DETAIL_HR', 19);
define('ONS_DETAIL_HR', 31);
define('GRP_TESTED_THROUGH_LINK_DETAIL_HR', 32);
define('OVER_CORE_SPARKLING_DETAIL_HR', 22);
define('OVER_CORE_NARTD_DETAIL_HR', 23);
define('TV_MEDIA_IND_INFLATION_DETAIL_HR', 25);
define('BLS_SCORE_COKE_DETAIL_HR', 29);
define('CATA_SCORE_CSP_DETAIL_HR', 30);
define('CORA_SCORE_TCCC_DETAIL_HR', 31);
define('ONS_WEIGHTED_BY_GRPS_DETAIL_HR', 33);
define('GRPS_TESTED_THROUGH_LINK_DETAIL_HR', 34);
define('VOLUME2_DETAIL_WHR', 11);
define('PURCHASE_TRANSACTIONS_DETAIL_WHR', 12);
define('VAL_SHARE_CORE_NARTD_DETAIL_WHR', 14);
define('VAL_SHARE_CORE_SPARKLING_DETAIL_WHR', 15);
define('VAL_SHARE_STILLS_EX_WATER_DETAIL_WHR', 16);
define('VAL_SHARE_PKGD_WATER_DETAIL_WHR', 17);
define('VOL_SHARE_CORE_NARTD_DETAIL_WHR', 18);
define('VOL_SHARE_CORE_SPARKLING_DETAIL_WHR', 19);
define('VOL_SHARE_STILLS_EX_WATER_DETAIL_WHR', 20);
define('VOL_SHARE_PKGD_WATER_DETAIL_WHR', 21);
define('ALL_INCIDENCE_P4W_COKE_TM_DETAIL_WHR', 23);
define('ALL_WEEKLY_MORE_COKE_TM_DETAIL_WHR', 24);
define('TEENS_INCIDENCE_P4W_COKE_TM_DETAIL_WHR', 25);
define('TEENS_WEEKLY_MORE_COKE_TM_DETAIL_WHR', 26);
define('HH_PENETRATION_COKE_TM_DETAIL_WHR', 28);
define('LITRES_PER_HH_COKE_TM_DETAIL_WHR', 29);
define('BASKET_INCIDENCE_COKE_TM_DETAIL_WHR', 30);


/**
 * Constant for Submission Types
 *
 * Created By: Rohit
 * Created Date:13/09/2016
 * Modified By: Rohit
 * Modified Date: 13/09/2016
 */
define('SUBMISSION_EDIT_TRUE', 1);

define('TEMP_UPLOAD_FOLDER', 'UploadSheet');

//Adding for Email 
define('SEND_EMAIL', FALSE);
define('NO_CYCLE_AVAILABLE', 'No cycle available');
define('LOCKDASHBOARDATUPLOAD', 'lockDashboardAtUpload');
define('UPLOADACTION', 'upload');
define('UPLOADSHEETDATA', 'uploadSheetData');
define('TYPE_DATA_UPLOAD', 'Data upload');
define('GROUP_TV_SHARE_OF_VOICE', 'TV Share of Voice');
define('SUB_GROUP_OVER_CORE_SPARKLING', 'over Core Sparkling');
define('SUB_GROUP_OVER_CORE_NARTD', 'over NARTD');
define('GROUP_SYSTEM_MEDIA_INVESTMENT', 'System Media Investment');
define('SUB_GROUP_SYS_TV_MEDIA_INV', 'Sys TV Media Inv (CN US$)');
define('SUB_GROUP_SYS_DIG_MEDIA_INV', 'Sys Dig Media Inv (CN US$)');
define('GROUP_MEDIA_INFLATION', 'Media Inflation');
define('SUB_GROUP_TV_MEDIA_IND_INFLATION', 'TV Media Ind Inflation');
define('SUB_GROUP_UNEMPLOYMENT', 'Unemployment');
define('TYPE_KEY_TAKEOUTS', 'Key Takeouts');
define('TYPE_COMMENT_NOTES', 'Notes');
define('BU_SIGN_OFF', 'BU Sign Off');
define('GLOBAL_ADMIN_SIGN_OFF', 'Global Admin Sign Off');
define('GLOBAL_ADMIN_DASHBOARD_REOPEN', 'Global Admin Dashboard Reopen');
define('DATA_SIGNED_OFF', 'Data Signed Off');
define('DATA_SIGNED_OFF_BY_GLOBAL_ADMIN', 'Data Signed Off By Global Admin');
define('DATA_REOPENED', 'Data Reopened');
define('TYPE_PERFORMANCE_INDI', 'Color Indicator');
define('TYPE_PERFORMANCE_INDI_MSG', 'Changed Color');
define('TYPE_METRIC_EDITS', 'Metric Edits');
define('DETAIL_UPDATED_NUMBER', 'Updated Number');
define('TYPE_KEY_TAKEOUTS_MSG', 'Updated Key takeouts');
define('TYPE_COMMENT_NOTES_MSG', 'Updated Notes');
define('TYPE_METRIC_EDITS_INITIATION', 'Metric Edits - initiation');
define('TYPE_METRIC_EDITS_COMPLETED', 'Metric Edits - completed');

define('AUDIT_LIST_RECORDS', 24);

define("GLOSSARY_PDF", TEMPLATE . 'Glossary.pdf');
define("BASIC_GLOSSARY_PDF", TEMPLATE . 'Basic_Glossary.pdf');
define("METRIC_CONTACT_LIST_PDF", TEMPLATE . 'Metric_Contact_List.pdf');

define('TEMP_GSC_UPLOAD_FOLDER', 'GscUploadSheet');
