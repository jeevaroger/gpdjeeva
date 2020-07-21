<?php

/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
// Setup a 'default' cache configuration for use in the application.

Cache::config('default', array('engine' => 'File'));

// short
//Cache::config('short', array(
//    'engine' => 'Memcache',
//    'duration' => '+1 hours',
//    'prefix' => 'cake_short_',
//    'servers' => array(
//        'localhost'
//    ),
//    'persistent' => true,
//    'compress' => false,
//));
//
//// long
//
//Cache::config('long', array(
//    'engine' => 'Memcache',
//    'duration' => '+1 week',
//    'prefix' => 'cake_long_',
//    'servers' => array(
//        'localhost'
//    ),
//    'persistent' => true,
//    'compress' => false,
//));
//
////LDAP
/* Cache::config('ldap', array(
  'engine' => 'Memcache',
  'duration' => '+30 minutes',
  'prefix' => 'cake_ldap_',
  'servers' => array(
  'localhost'
  ),
  'persistent' => true,
  'compress' => false,
  )); */

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Model'                     => array('/path/to/models/', '/next/path/to/models/'),
 *     'Model/Behavior'            => array('/path/to/behaviors/', '/next/path/to/behaviors/'),
 *     'Model/Datasource'          => array('/path/to/datasources/', '/next/path/to/datasources/'),
 *     'Model/Datasource/Database' => array('/path/to/databases/', '/next/path/to/database/'),
 *     'Model/Datasource/Session'  => array('/path/to/sessions/', '/next/path/to/sessions/'),
 *     'Controller'                => array('/path/to/controllers/', '/next/path/to/controllers/'),
 *     'Controller/Component'      => array('/path/to/components/', '/next/path/to/components/'),
 *     'Controller/Component/Auth' => array('/path/to/auths/', '/next/path/to/auths/'),
 *     'Controller/Component/Acl'  => array('/path/to/acls/', '/next/path/to/acls/'),
 *     'View'                      => array('/path/to/views/', '/next/path/to/views/'),
 *     'View/Helper'               => array('/path/to/helpers/', '/next/path/to/helpers/'),
 *     'Console'                   => array('/path/to/consoles/', '/next/path/to/consoles/'),
 *     'Console/Command'           => array('/path/to/commands/', '/next/path/to/commands/'),
 *     'Console/Command/Task'      => array('/path/to/tasks/', '/next/path/to/tasks/'),
 *     'Lib'                       => array('/path/to/libs/', '/next/path/to/libs/'),
 *     'Locale'                    => array('/path/to/locales/', '/next/path/to/locales/'),
 *     'Vendor'                    => array('/path/to/vendors/', '/next/path/to/vendors/'),
 *     'Plugin'                    => array('/path/to/plugins/', '/next/path/to/plugins/'),
 * ));
 */
/**
 * Custom Inflector rules can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the inflection functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 */
/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. Make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 * CakePlugin::loadAll(); // Loads all plugins at once
 * CakePlugin::load('DebugKit'); // Loads a single plugin named DebugKit
 */
CakePlugin::load('PDO_ODBC');
/**
 * To prefer app translation over plugin translation, you can set
 *
 * Configure::write('I18n.preferApp', true);
 */
/**
 * You can attach event listeners to the request lifecycle as Dispatcher Filter. By default CakePHP bundles two filters:
 *
 * - AssetDispatcher filter will serve your asset files (css, images, js, etc) from your themes and plugins
 * - CacheDispatcher filter will read the Cache.check configure variable and try to serve cached content generated from controllers
 *
 * Feel free to remove or add filters as you see fit for your application. A few examples:
 *
 * Configure::write('Dispatcher.filters', array(
 * 		'MyCacheFilter', //  will use MyCacheFilter class from the Routing/Filter package in your app.
 * 		'MyCacheFilter' => array('prefix' => 'my_cache_'), //  will use MyCacheFilter class from the Routing/Filter package in your app with settings array.
 * 		'MyPlugin.MyFilter', // will use MyFilter class from the Routing/Filter package in MyPlugin plugin.
 * 		array('callable' => $aFunction, 'on' => 'before', 'priority' => 9), // A valid PHP callback type to be called on beforeDispatch
 * 		array('callable' => $anotherMethod, 'on' => 'after'), // A valid PHP callback type to be called on afterDispatch
 *
 * ));
 */
Configure::write('Dispatcher.filters', array(
    'AssetDispatcher',
    'CacheDispatcher'
));

Configure::write('memcachedFlag', false);


/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
    'engine' => 'File',
    'types' => array('notice', 'info', 'debug'),
    'file' => 'debug',
));
CakeLog::config('error', array(
    'engine' => 'File',
    'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
    'file' => 'error',
));
CakeLog::config('ldap', array(
    'engine' => 'File',
    'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
    'scopes' => array('ldap'),
    'file' => 'ldap.log',
));


Configure::load('constant');


Configure::write('RouteResourceMap', array(
    'Dashboards___index' => array(VIEW_HR_DATA, VIEW_PUBLISHED_VERSION, VIEW_DRAFT_VERSION),
    'Dashboards___summary' => array(VIEW_HR_DATA, VIEW_PUBLISHED_VERSION, VIEW_DRAFT_VERSION),
    'Dashboards___marketSelector' => array(VIEW_HR_DATA, VIEW_PUBLISHED_VERSION, VIEW_DRAFT_VERSION),
    'Dashboards___exportPdf' => array(EXPORT_PDF, PRINT_DETAIL),
    'Dashboards___exportExcel' => array(EXPORT_EXCEL),
    'Dashboards___edit' => array(EDIT),
    'Dashboards___signoff' => array(SIGN_OFF),
    'Dashboards___bulkSignoff' => array(BULK_SIGN_OFF),
    'DataImporter___upload' => array(UPLOAD),
    'UserMasters___*' => array(USER_MGMT),
    'AuditLogs___*' => array(AUDIT_LOG),
    'GPDS___*' => array(GPDS),
    'GscImporter___*' => array(UPLOAD),
    'Gsc___*' => array(VIEW_HR_DATA, VIEW_PUBLISHED_VERSION, VIEW_DRAFT_VERSION),
));


/**
 * Configuration for Loading MemcacheHandler
 * 
 * Created By: Shashank
 * Created Date:10/12/2015
 * Modified By: 
 * Modified Date: 
 */
App::uses('MemcacheHandler', 'Lib');

Configure::load('msg_constant');
Configure::write('sheetTabs', array('Instructions', 'Summary', 'Detail', 'Input', 'Fin', 'VolPT', 'Share', 'Consumer', 'Commercial_Metrics', 'Macro', 'Fin_Media', 'Media', 'Households'));
Configure::write('AllowedSheetExt', array('xlsx'));

/**
 * Configuration for redirect user as per role after login 
 * 
 * Created By: Shashank
 * Created Date:14/12/2015
 * Modified By: 
 * Modified Date: 
 */
Configure::write('UserRedirect', array(
    BU_ADMIN => array('controller' => 'Dashboards', 'action' => 'marketSelector'),
    BU_READ_WITH_FINANACE => array('controller' => 'Dashboards', 'action' => 'marketSelector'),
    BU_READ_WITHOUT_FINANACE => array('controller' => 'Dashboards', 'action' => 'marketSelector'),
    GLOBAL_ADMIN => array('controller' => 'Dashboards', 'action' => 'marketSelector'),
    GLOBAL_ADMIN_WITH_FINANCE => array('controller' => 'Dashboards', 'action' => 'marketSelector'),
    GLOBAL_ADMIN_WITHOUT_FINANCE => array('controller' => 'Dashboards', 'action' => 'marketSelector'),
    WNS_UPLOAD => array('controller' => 'DataImporter', 'action' => 'upload'),
    WNS_VIEW_ONLY => array('controller' => 'Dashboards', 'action' => 'marketSelector'),
    TOOL_ADMIN => array('controller' => 'UserMasters', 'action' => 'index'),
    DATA_OWNER => array('controller' => 'Dashboards', 'action' => 'marketSelector')
));

/**
 * Configuration for storing session in database 
 * 
 * Created By: Shashank
 * Created Date:14/12/2015
 * Modified By: 
 * Modified Date: 
 */
Configure::write('Session', array(
    'defaults' => 'database',
    'timeout' => 1, /* minutes */
    'ini' => array(
        'session.gc_maxlifetime' => 1800, /* seconds */
        'session.gc_divisor' => 1,
        'session.gc_probability' => 1,
    ),
        // 'autoRegenerate' => true
));


App::uses('SanatizeInput', 'Lib');
CakePlugin::load('Siteminder');


Configure::write('UserGroup', array(
    BU_ADMIN,
    BU_READ_WITH_FINANACE,
    BU_READ_WITHOUT_FINANACE,
    GLOBAL_ADMIN,
    GLOBAL_ADMIN_WITH_FINANCE,
    GLOBAL_ADMIN_WITHOUT_FINANCE,
    WNS_UPLOAD,
    TOOL_ADMIN,
    DATA_OWNER
));


Configure::write('LDAP', array(
    'host' => 'koldap.testko.com',
    'port' => 389,
    'user_name' => 'TESTEUR\X31839',
    'password' => 'Cts@3456Cts@345',
    'ds' => 'dc=testko,dc=com'
));

Configure::write('UserImport', array(
    4 => 'Indonesia',
    5 => 'Philippines',
    6 => 'Thailand',
    7 => 'Vietnam',
    8 => 'Brazil',
    9 => 'Canada',
    10 => 'Nigeria',
    11 => 'Italy',
    12 => 'Poland',
    13 => 'Romania',
    14 => 'China',
    15 => 'Korea South',
    16 => 'India',
    17 => 'Japan',
    18 => 'Colombia',
    19 => 'Ecuador',
    20 => 'Egypt',
    21 => 'Morocco',
    22 => 'Pakistan',
    23 => 'Mexico',
    24 => 'Russia',
    25 => 'South Africa',
    26 => 'Argentina',
    27 => 'Chile',
    28 => 'Peru',
    29 => 'Australia',
    30 => 'Turkey',
    31 => 'United States',
    32 => 'France',
    33 => 'Germany',
    34 => 'Great Britain',
    35 => 'Spain',
));

/**
 * Configuration for Loading Glossary
 * 
 * Created By: Shashank
 * Created Date:16/05/2015
 * Modified By: 
 * Modified Date: 
 */
App::uses('Glossary', 'Lib');

Configure::write('BlankRowInInput', array(4, 6, 8, 11, 14, 15, 16, 17, 18, 25, 27, 29, 35));


Configure::write('EditableModel', array('Media2', 'Macro'));

/**
 * Configuration for default data label
 * Created By: Anoop
 * Created Date:19/09/2016
 * Modified By: 
 * Modified Date: 
 */
Configure::write('DefaultLabel', array('MetricLabel' => array(
        'label_1' => 'FY RE',
        'label_2' => 'FY BP',
        'label_3' => 'YTD',
        'label_4' => 'vs. PY',
        'label_5' => '3MMT',
        'label_6' => 'vs. PY',
        'label_7' => 'QUARTER',
        'label_8' => 'vs. PY',
        'label_9' => 'IHS FY FC',
        'label_10' => 'RB FY BP',
        'label_11' => 'YTD',
        'label_12' => 'vs.PY',
        'label_13' => 'FY RE',
        'label_14' => 'FY BP',
        'label_15' => 'YTD',
        'label_16' => 'vs.PY',
        'label_17' => '3MMT',
        'label_18' => 'vs.PY',
        'label_19' => 'YTD',
        'label_20' => 'vs.PY',
        'label_21' => 'Cycling',
        'label_22' => 'YTD',
        'label_23' => 'FY RE',
        'label_24' => 'FY BP',
        'label_25' => 'Cycling',
        'label_26' => 'YTD',
        'label_27' => 'YTD',
        'label_28' => 'vs. PY',
        'label_29' => '3MMT',
        'label_30' => 'vs. PY',
        'label_31' => 'QUARTER',
        'label_32' => 'vs.PY',
        'label_33' => 'IHS FY FC',
        'label_34' => 'RB FY BP',
        'label_35' => 'YTD',
        'label_36' => 'vs. PY',
        'label_37' => 'FY RE',
        'label_38' => 'FY BP',
        'label_39' => 'FY RE',
        'label_40' => 'FY PROJ',
        'label_41' => 'YTD',
        'label_42' => 'vs. PY',
        'label_43' => 'YTD',
        'label_44' => 'vs. PY',
        'label_45' => 'FY RE',
        'label_46' => 'FY PROJ',
        'label_47' => '3MMT',
        'label_48' => 'vs.PY',
        'label_49' => 'YTD',
        'label_50' => 'vs.PY',
    ))
);


Configure::write('Cycle', array('MONTHLY', 'BU SUBMISSION', 'FULL YEAR'));
Configure::write('Months', array('JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER', 'FULL_YEAR'));
Configure::write('EditableDashboard', array('YES', 'NO'));
Configure::write('ActivityTypes', array(TYPE_DATA_UPLOAD, TYPE_PERFORMANCE_INDI, TYPE_METRIC_EDITS_INITIATION, TYPE_METRIC_EDITS_COMPLETED, TYPE_KEY_TAKEOUTS, TYPE_COMMENT_NOTES, BU_SIGN_OFF, GLOBAL_ADMIN_SIGN_OFF, GLOBAL_ADMIN_DASHBOARD_REOPEN));


/**
 * Configuration for world map metric filter
 * Created By: Jeeva
 * Created Date:03/01/2017
 * Modified By: 
 * Modified Date: 
 */
Configure::write('MetricMenu', array('PERFORMANCE METRICS' => array(
        'Heading1' => array('text' => 'TCCC Financials'),
        'label_1' => array('text' => 'TCCC Sales Value', 'metric_label_db' => array('label_21', 'label_22')),
        'Heading2' => array('text' => ''),
        'label_2' => array('text' => 'CN Net Revenue', 'metric_label_db' => array('label_23', 'label_24')),
        'label_3' => array('text' => 'Net Revenue per Case', 'metric_label_db' => array('label_23', 'label_24')),
        'label_4' => array('text' => '%Gross Profit Margin', 'metric_label_db' => array('label_23', 'label_24')),
        'label_5' => array('text' => 'Brand Contribution', 'metric_label_db' => array('label_23', 'label_24')),
        'label_6' => array('text' => 'Profit Before Tax', 'metric_label_db' => array('label_23', 'label_24')),
        'label_7' => array('text' => 'Volume(BP/RE)', 'metric_label_db' => array('label_23', 'label_24')),
        'Heading3' => array('text' => ''),
        'label_8' => array('text' => 'Volume', 'metric_label_db' => array('label_25', 'label_26')),
        'label_9' => array('text' => 'Transactions', 'metric_label_db' => array('label_25', 'label_26')),
        'Heading4' => array('text' => 'TCCC Share'),
        'label_10' => array('text' => 'Val Share- NARTD', 'metric_label_db' => array('label_27', 'label_28')),
        'label_11' => array('text' => 'Val Share- SSD', 'metric_label_db' => array('label_27', 'label_28')),
        'label_12' => array('text' => 'Val Share- Stills Ex Water', 'metric_label_db' => array('label_27', 'label_28')),
        'label_13' => array('text' => 'Val Share- Waters', 'metric_label_db' => array('label_27', 'label_28')),
        'label_14' => array('text' => 'Vol Share- NARTD', 'metric_label_db' => array('label_27', 'label_28')),
        'label_15' => array('text' => 'Vol Share- SSD', 'metric_label_db' => array('label_27', 'label_28')),
        'label_16' => array('text' => 'Vol Share- Stills Ex Water', 'metric_label_db' => array('label_27', 'label_28')),
        'label_17' => array('text' => 'Vol Share- Waters', 'metric_label_db' => array('label_27', 'label_28')),
        'Heading5' => array('text' => 'Consumers'),
        'label_18' => array('text' => 'All-Incid(%P4W):CokeTM', 'metric_label_db' => array('label_29', 'label_30')),
        'label_19' => array('text' => 'All-%Wkly+ :CokeTM', 'metric_label_db' => array('label_29', 'label_30')),
        'label_20' => array('text' => 'Teens-Incid(%P4W):CokeTM', 'metric_label_db' => array('label_29', 'label_30')),
        'label_21' => array('text' => 'Teens-%Wkly+ :CokeTM', 'metric_label_db' => array('label_29', 'label_30')),
        'Heading6' => array('text' => 'Household Panel'),
        'label_22' => array('text' => 'HH Penetration-CokeTM', 'metric_label_db' => array('label_31', 'label_32')),
        'label_23' => array('text' => 'Liters per HH-CokeTM', 'metric_label_db' => array('label_31', 'label_32')),
        'label_24' => array('text' => 'Basket Incidence-CokeTM', 'metric_label_db' => array('label_31', 'label_32')),
    ),
    'EXTERNAL ENVIRONMENT' => array(
        'label_25' => array('text' => 'PCE', 'metric_label_db' => array('label_33', 'label_34')),
        'label_26' => array('text' => 'CPI/Inflation', 'metric_label_db' => array('label_33', 'label_34')),
        'label_27' => array('text' => 'Unemployment', 'metric_label_db' => array('label_33', 'label_34')),
    ),
    'COMMERCIAL EXECUTION' => array(
        'Heading7' => array('text' => 'Outlets'),
        'label_28' => array('text' => 'Outlet Coverage', 'metric_label_db' => array('label_35', 'label_36')),
        'label_29' => array('text' => 'Universe Outlets', 'metric_label_db' => array('label_35', 'label_36')),
        'label_30' => array('text' => 'TCCC Outlets', 'metric_label_db' => array('label_35', 'label_36')),
        'Heading8' => array('text' => 'Avail & Afford Entry Pack'),
        'label_31' => array('text' => 'Num Dist Entry Pack', 'metric_label_db' => array('label_35', 'label_36')),
        'label_32' => array('text' => 'Num Dist Affrd Entry Pk', 'metric_label_db' => array('label_35', 'label_36')),
        'label_33' => array('text' => 'Coke TM Price vs SSD', 'metric_label_db' => array('label_35', 'label_36')),
        'label_34' => array('text' => 'Out of Stocks (OOS)', 'metric_label_db' => array('label_35', 'label_36')),
        'Heading9' => array('text' => 'Cold Drink Equipment'),
        'label_35' => array('text' => 'Total KO CDE', 'metric_label_db' => array('label_35', 'label_36')),
        'label_36' => array('text' => 'KO CDE/10K', 'metric_label_db' => array('label_35', 'label_36')),
        'Heading10' => array('text' => 'SOVI/SOM - NARTD/SSD'),
        'label_37' => array('text' => 'SOVI:SOM Ratio NARTD', 'metric_label_db' => array('label_35', 'label_36')),
        'label_38' => array('text' => 'SOVI NARTD', 'metric_label_db' => array('label_35', 'label_36')),
        'label_39' => array('text' => 'SOVI:SOM Ratio (SSD)', 'metric_label_db' => array('label_35', 'label_36')),
        'label_40' => array('text' => 'SOVI:SSD', 'metric_label_db' => array('label_35', 'label_36')),
        'Heading11' => array('text' => 'Other Commercial Metrics'),
        'label_41' => array('text' => 'Avg Price-Coke TM', 'metric_label_db' => array('label_35', 'label_36')),
    ),
    'QUANTITY OF MARKETING' => array(
        'Heading12' => array('text' => 'TCCC DMI'),
        'label_42' => array('text' => 'Total DMI (CN US$)', 'metric_label_db' => array('label_37', 'label_38')),
        'label_43' => array('text' => 'Refuel Rate', 'metric_label_db' => array('label_37', 'label_38')),
        'label_44' => array('text' => 'All Media DMI (CN US$)', 'metric_label_db' => array('label_37', 'label_38')),
        'label_45' => array('text' => '%All Media DMI to Total DMI', 'metric_label_db' => array('label_37', 'label_38')),
        'Heading13' => array('text' => 'System Media Investment'),
        'label_46' => array('text' => 'Sys TV Media Inv (CN US$)', 'metric_label_db' => array('label_39', 'label_40')),
        'label_47' => array('text' => 'Sys Dig Media Inv (CN US$)', 'metric_label_db' => array('label_39', 'label_40')),
        'Heading14' => array('text' => 'Core Media Metrics'),
        'label_48' => array('text' => 'Reuse Rate', 'metric_label_db' => array('label_41', 'label_42')),
        'label_49' => array('text' => 'CokeTM # Impressions', 'metric_label_db' => array('label_41', 'label_42')),
        'label_50' => array('text' => 'CokeTM # Weeks on air', 'metric_label_db' => array('label_41', 'label_42')),
        'Heading15' => array('text' => 'TV Share of Voice'),
        'label_51' => array('text' => 'over Sparkling Soft Drinks', 'metric_label_db' => array('label_43', 'label_44')),
        'label_52' => array('text' => 'over NARTD', 'metric_label_db' => array('label_43', 'label_44')),
        'Heading16' => array('text' => 'Media Inflation'),
        'label_53' => array('text' => 'TV Media Ind Inflation', 'metric_label_db' => array('label_45', 'label_46')),
    ),
    'QUALITY OF MARKETING' => array(
        'label_54' => array('text' => 'BLS Score - Coke', 'metric_label_db' => array('label_47', 'label_48')),
        'label_55' => array('text' => 'CATA Score - SSD', 'metric_label_db' => array('label_47', 'label_48')),
        'label_56' => array('text' => 'CORA Score - TCCC', 'metric_label_db' => array('label_47', 'label_48')),
        'Heading18' => array('text' => ''),
        'label_57' => array('text' => 'ONS (Wtd by Impression)', 'metric_label_db' => array('label_49', 'label_50')),
        'label_58' => array('text' => 'Impression test thru Link', 'metric_label_db' => array('label_49', 'label_50')),
    )
        )
);




Configure::write('MetricConfig', array(
    'label_1' => array('text' => 'TCCC Sales Value', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_21', 'label_22'), 'model' => 'Share', 'label_a' => 'value1_value2_cmp', 'label_b' => 'value2_value3_cmp', 'label_period' => 'value4', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_2' => array('text' => 'CN Net Revenue', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_23', 'label_24'), 'model' => 'Finance', 'label_a' => 'value1_value2_cmp', 'label_b' => 'value3_value4_cmp', 'label_period' => 'value5', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_3' => array('text' => 'Net Revenue per Case', 'metric_symbol' => 'US$', 'metric_label_db' => array('label_23', 'label_24'), 'model' => 'Finance', 'label_a' => 'value6', 'label_b' => 'value7', 'label_period' => 'value8', 'label_a_color' => 'orange', 'label_b_color' => 'orange'),
    'label_4' => array('text' => '%Gross Profit Margin', 'metric_symbol' => '%', 'metric_label_db' => array('label_23', 'label_24'), 'model' => 'Finance', 'label_a' => 'value9', 'label_b' => 'value10', 'label_period' => 'value11', 'label_a_color' => 'orange', 'label_b_color' => 'orange'),
    'label_5' => array('text' => 'Brand Contribution', 'metric_symbol' => '%', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_23', 'label_24'), 'model' => 'Finance', 'label_a' => 'value12', 'label_b' => 'value13', 'label_period' => 'value14', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_6' => array('text' => 'Profit Before Tax', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_23', 'label_24'), 'model' => 'Finance', 'label_a' => 'value20', 'label_b' => 'value21', 'label_period' => 'value22', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_7' => array('text' => 'Volume(BP/RE)', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_23', 'label_24'), 'model' => 'Finance', 'label_a' => 'value15_value16_cmp', 'label_b' => 'value17_value18_cmp', 'label_period' => 'value19', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_8' => array('text' => 'Volume', 'model' => 'Voipt', 'metric_symbol' => '% ADS vs PY', 'metric_label_db' => array('label_25', 'label_26'), 'label_a' => 'value1_value2_cmp', 'label_b' => 'value2_value3_cmp', 'label_period' => 'value4', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_9' => array('text' => 'Transactions', 'metric_symbol' => '% ADS vs PY', 'metric_label_db' => array('label_25', 'label_26'), 'model' => 'Voipt', 'label_a' => 'value5_value6_cmp', 'label_b' => 'value6_value7_cmp', 'label_period' => 'value8', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_10' => array('text' => 'Val Share- NARTD', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_27', 'label_28'), 'model' => 'Share', 'label_a' => 'value11_value13_cmp4', 'label_b' => 'cmp3_cmp4_cmp', 'label_period' => 'value14', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_11' => array('text' => 'Val Share- SSD', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_27', 'label_28'), 'model' => 'Share', 'label_a' => 'value6_value8_cmp2', 'label_b' => 'cmp1_cmp2_cmp', 'label_period' => 'value9', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_12' => array('text' => 'Val Share- Stills Ex Water', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_27', 'label_28'), 'model' => 'Share', 'label_a' => 'value31_value33_cmp12', 'label_b' => 'cmp11_cmp12_cmp', 'label_period' => 'value34', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_13' => array('text' => 'Val Share- Waters', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_27', 'label_28'), 'model' => 'Share', 'label_a' => 'value36_value38_cmp14', 'label_b' => 'cmp13_cmp14_cmp', 'label_period' => 'value39', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_14' => array('text' => 'Vol Share- NARTD', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_27', 'label_28'), 'model' => 'Share', 'label_a' => 'value21_value23_cmp8', 'label_b' => 'cmp7_cmp8_cmp', 'label_period' => 'value24', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_15' => array('text' => 'Vol Share- SSD', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_27', 'label_28'), 'model' => 'Share', 'label_a' => 'value16_value18_cmp6', 'label_b' => 'cmp5_cmp6_cmp', 'label_period' => 'value19', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_16' => array('text' => 'Vol Share- Stills Ex Water', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_27', 'label_28'), 'model' => 'Share', 'label_a' => 'value41_value43_cmp16', 'label_b' => 'cmp15_cmp16_cmp', 'label_period' => 'value44', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_17' => array('text' => 'Vol Share- Waters', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_27', 'label_28'), 'model' => 'Share', 'label_a' => 'value46_value48_cmp18', 'label_b' => 'cmp17_cmp18_cmp', 'label_period' => 'value49', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_18' => array('text' => 'All-Incid(%P4W):CokeTM', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_29', 'label_30'), 'model' => 'Consumer', 'label_a' => 'value2', 'label_b' => 'value1_value2_cmp', 'label_period' => 'value4', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_19' => array('text' => 'All-%Wkly+ :CokeTM', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_29', 'label_30'), 'model' => 'Consumer', 'label_a' => 'value6', 'label_b' => 'value5_value6_cmp', 'label_period' => 'value8', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_20' => array('text' => 'Teens-Incid(%P4W):CokeTM', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_29', 'label_30'), 'model' => 'Consumer', 'label_a' => 'value10', 'label_b' => 'value9_value10_cmp', 'label_period' => 'value12', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_21' => array('text' => 'Teens-%Wkly+ :CokeTM', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_29', 'label_30'), 'model' => 'Consumer', 'label_a' => 'value14', 'label_b' => 'value13_value14_cmp', 'label_period' => 'value16', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_22' => array('text' => 'HH Penetration-CokeTM', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_31', 'label_32'), 'model' => 'Household', 'label_a' => 'value4', 'label_b' => 'value3_value4_cmp2', 'label_period' => 'value5', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_23' => array('text' => 'Liters per HH-CokeTM', 'metric_symbol' => 'Liters/% vs PY', 'metric_label_db' => array('label_31', 'label_32'), 'model' => 'Household', 'label_a' => 'value7', 'label_b' => 'value6_value7_cmp', 'label_period' => 'value8', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_24' => array('text' => 'Basket Incidence-CokeTM', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_31', 'label_32'), 'model' => 'Household', 'label_a' => 'value12', 'label_b' => 'value11_value12_cmp2', 'label_period' => 'value13', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_25' => array('text' => 'PCE', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_33', 'label_34'), 'model' => 'Macro', 'label_a' => 'value1', 'label_b' => 'value2', 'label_period' => 'value5', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_26' => array('text' => 'CPI/Inflation', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_33', 'label_34'), 'model' => 'Macro', 'label_a' => 'value11', 'label_b' => 'value12', 'label_period' => 'value15', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_27' => array('text' => 'Unemployment', 'metric_symbol' => '%', 'metric_label_db' => array('label_33', 'label_34'), 'model' => 'Macro', 'label_a' => 'value6', 'label_b' => 'value7', 'label_period' => 'value8', 'label_a_color' => 'orange', 'label_b_color' => 'orange'),
    'label_28' => array('text' => 'Outlet Coverage', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value4_value2_cmp2', 'label_period' => 'value5_cmp', 'label_b' => 'cmp1_cmp2_cmp', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_29' => array('text' => 'Universe Outlets', 'metric_symbol' => '#/% vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value2', 'label_b' => 'value1_value2_cmp', 'label_period' => 'value49', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_30' => array('text' => 'TCCC Outlets', 'metric_symbol' => '#/% vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value4', 'label_b' => 'value3_value4_cmp', 'label_period' => 'value5', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_31' => array('text' => 'Num Dist Entry Pack', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value7', 'label_b' => 'value6_value7_cmp', 'label_period' => 'value8', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_32' => array('text' => 'Num Dist Affrd Entry Pk', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value10', 'label_b' => 'value10_value_9_cmp', 'label_period' => 'value11', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_33' => array('text' => 'Coke TM Price vs SSD', 'metric_symbol' => '$/pts vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'cmp10_cmp21_cmp22', 'label_b' => 'cmp18_cmp22_cmp23', 'label_period' => 'cmp24_cmp', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_34' => array('text' => 'Out of Stocks (OOS)', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value13', 'label_b' => 'value13_value12_cmp', 'label_period' => 'value14', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_35' => array('text' => 'Total KO CDE', 'metric_symbol' => '#/% vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value16', 'label_b' => 'value16_value15_cmp', 'label_period' => 'value17', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_36' => array('text' => 'KO CDE/10K', 'metric_symbol' => '#/% vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value18', 'label_b' => 'value18_value48_cmp', 'label_period' => 'value19', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_37' => array('text' => 'SOVI:SOM Ratio NARTD', 'metric_symbol' => '#/pts vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value27_value24_cmp6', 'label_b' => 'cmp5_cmp6_cmp', 'label_period' => 'value28_cmp', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_38' => array('text' => 'SOVI NARTD', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value24', 'label_b' => 'value23_value24_cmp', 'label_period' => 'value25', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_39' => array('text' => 'SOVI:SOM Ratio (SSD)', 'metric_symbol' => '#/pts vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value30_value33_cmp8', 'label_b' => 'cmp7_cm8_cmp', 'label_period' => 'value31_cmp', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_40' => array('text' => 'SOVI:SSD', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value30', 'label_b' => 'value30_value29_cmp', 'label_period' => 'value31', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_41' => array('text' => 'Avg Price-Coke TM', 'metric_symbol' => '$/% vs PY', 'metric_label_db' => array('label_35', 'label_36'), 'model' => 'Commercial', 'label_a' => 'value37_value38_cmp10', 'label_b' => 'cmp9_cmp10_cmp', 'label_period' => 'value39_cmp', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_42' => array('text' => 'Total DMI (CN US$)', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_37', 'label_38'), 'model' => 'Media1', 'label_a' => 'value1_value2_cmp', 'label_b' => 'value3_value4_cmp', 'label_period' => 'value5', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_43' => array('text' => 'Refuel Rate', 'metric_symbol' => '%', 'metric_label_db' => array('label_37', 'label_38'), 'model' => 'Media1', 'label_a' => 'value6_value7_cmp', 'label_b' => 'value8_value9_cmp', 'label_period' => 'value10', 'label_a_color' => 'orange', 'label_b_color' => 'orange'),
    'label_44' => array('text' => 'All Media DMI (CN US$)', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_37', 'label_38'), 'model' => 'Media1', 'label_a' => 'value11_value12_cmp', 'label_b' => 'value13_value14_cmp', 'label_period' => 'value15', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_45' => array('text' => '%All Media DMI to Total DMI', 'metric_symbol' => '%', 'metric_label_db' => array('label_37', 'label_38'), 'model' => 'Media1', 'label_a' => 'value16_value17_cmp', 'label_b' => 'value18_value19_cmp', 'label_period' => 'value20', 'label_a_color' => 'orange', 'label_b_color' => 'orange'),
    'label_46' => array('text' => 'Sys TV Media Inv (CN US$)', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_39', 'label_40'), 'model' => 'Media2', 'label_a' => 'value1_value2_cmp', 'label_b' => 'value3_value4_cmp', 'label_period' => 'value5', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_47' => array('text' => 'Sys Dig Media Inv (CN US$)', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_39', 'label_40'), 'model' => 'Media2', 'label_a' => 'value6_value7_cmp', 'label_b' => 'value8_value9_cmp', 'label_period' => 'value10', 'label_a_color' => 'ryg', 'label_b_color' => 'ryg'),
    'label_48' => array('text' => 'Reuse Rate', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_41', 'label_42'), 'model' => 'Media2', 'label_a' => 'value15', 'label_b' => 'value14_value15_cmp', 'label_period' => 'value16', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_49' => array('text' => 'CokeTM # Impressions', 'metric_symbol' => '#/% vs PY', 'metric_label_db' => array('label_41', 'label_42'), 'model' => 'Media2', 'label_a' => 'value18', 'label_b' => 'value17_value18_cmp', 'label_period' => 'value19', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_50' => array('text' => 'CokeTM # Weeks on air', 'metric_symbol' => '#/abs vs PY', 'metric_label_db' => array('label_41', 'label_42'), 'model' => 'Media2', 'label_a' => 'value21', 'label_b' => 'value20_value21_cmp', 'label_period' => 'value22', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_51' => array('text' => 'over Sparkling Soft Drinks', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_43', 'label_44'), 'model' => 'Media2', 'label_a' => 'value24', 'label_b' => 'value23_value24_cmp', 'label_period' => 'value25', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_52' => array('text' => 'over NARTD', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_43', 'label_44'), 'model' => 'Media2', 'label_a' => 'value27', 'label_b' => 'value26_value27_cmp', 'label_period' => 'value28', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_53' => array('text' => 'TV Media Ind Inflation', 'metric_symbol' => '% vs PY', 'metric_label_db' => array('label_45', 'label_46'), 'model' => 'Media2', 'label_a' => 'value11', 'label_b' => 'value12', 'label_period' => 'value13', 'label_a_color' => 'orange', 'label_b_color' => 'orange'),
    'label_54' => array('text' => 'BLS Score - Coke', 'metric_symbol' => 'Abs/pts vs PY', 'metric_label_db' => array('label_47', 'label_48'), 'model' => 'Consumer', 'label_a' => 'value18', 'label_b' => 'value17_value18_cmp', 'label_period' => 'value20', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_55' => array('text' => 'CATA Score - SSD', 'metric_symbol' => 'Abs/pts vs PY', 'metric_label_db' => array('label_47', 'label_48'), 'model' => 'Consumer', 'label_a' => 'value22', 'label_b' => 'value21_value22_cmp', 'label_period' => 'value24', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_56' => array('text' => 'CORA Score - TCCC', 'metric_symbol' => 'Abs/pts vs PY', 'metric_label_db' => array('label_47', 'label_48'), 'model' => 'Consumer', 'label_a' => 'value26', 'label_b' => 'value25_value26_cmp', 'label_period' => 'value28', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_57' => array('text' => 'ONS (Wtd by Impression)', 'metric_symbol' => 'Avg/abs vs PY', 'metric_label_db' => array('label_49', 'label_50'), 'model' => 'Media2', 'label_a' => 'value30', 'label_b' => 'value29_value30_cmp', 'label_period' => 'value31', 'label_a_color' => 'orange', 'label_b_color' => 'ryg'),
    'label_58' => array('text' => 'Impression test thru Link', 'metric_symbol' => '%/pts vs PY', 'metric_label_db' => array('label_49', 'label_50'), 'model' => 'Media2', 'label_a' => 'value34_value35_cmp2', 'label_b' => 'cmp1_cmp2_cmp', 'label_period' => 'value36', 'label_a_color' => 'orange', 'label_b_color' => 'ryg')
        )
);




Configure::write('absoluteValuesArray', array('label_3' => array('label_a', 'label_b'),
    'label_10' => array('label_b'),
    'label_11' => array('label_b'),
    'label_12' => array('label_b'),
    'label_13' => array('label_b'),
    'label_14' => array('label_b'),
    'label_15' => array('label_b'),
    'label_16' => array('label_b'),
    'label_17' => array('label_b'),
    'label_18' => array('label_b'),
    'label_19' => array('label_b'),
    'label_20' => array('label_b'),
    'label_21' => array('label_b'),
    'label_22' => array('label_b'),
    'label_23' => array('label_a'),
    'label_24' => array('label_b'),
    'label_28' => array('label_b'),
    'label_29' => array('label_a'),
    'label_30' => array('label_a'),
    'label_31' => array('label_b'),
    'label_32' => array('label_b'),
    'label_33' => array('label_a', 'label_b'),
    'label_34' => array('label_b'),
    'label_35' => array('label_a'),
    'label_36' => array('label_a'),
    'label_37' => array('label_a', 'label_b'),
    'label_38' => array('label_b'),
    'label_39' => array('label_a', 'label_b'),
    'label_40' => array('label_b'),
    'label_41' => array('label_a'),
    'label_48' => array('label_b'),
    'label_49' => array('label_a'),
    'label_50' => array('label_a', 'label_b'),
    'label_51' => array('label_b'),
    'label_52' => array('label_b'),
    'label_54' => array('label_a', 'label_b'),
    'label_55' => array('label_a', 'label_b'),
    'label_56' => array('label_a', 'label_b'),
    'label_57' => array('label_a', 'label_b'),
    'label_58' => array('label_b'),
));


Configure::write('GscSheetTabs', array('Input', 'Share', 'Media', 'Macro', 'Consumer', 'Finance', 'Transaction', 'Customer', 'Commercial'));
//Configure::write('GscSheetTabs', array('Input', 'Finance'));

Configure::write('GscHomePageMenu', array('GscFinance' => array('revenue_total_tccc' => array('label' => 'KO Revenue Growth', 'period' => 'revenue_timeperiod'),
        'revenue_coketm' => array('label' => 'KO SSD Revenue Growth', 'period' => 'revenue_timeperiod'),
        'revenue_ssd' => array('label' => 'Coke TM Revenue Growth', 'period' => 'revenue_timeperiod'),
        'revenue_juice' => array('label' => 'KO Juice Revenue Growth', 'period' => 'revenue_timeperiod'),
        'revenue_plant_based' => array('label' => 'KO Plant based Revenue Growth', 'period' => 'revenue_timeperiod'),
        'revenue_vad' => array('label' => 'KO Dairy Revenue Growth', 'period' => 'revenue_timeperiod'),
        'revenue_tea' => array('label' => 'KO Tea Revenue Growth', 'period' => 'revenue_timeperiod'),
        'revenue_water' => array('label' => 'KO Water Revenue Growth', 'period' => 'revenue_timeperiod'),
        'revenue_sports' => array('label' => 'KO Sports Revenue Growth', 'period' => 'revenue_timeperiod'),
        'revenue_coffee' => array('label' => 'KO Coffee Revenue Growth', 'period' => 'revenue_timeperiod'),
        'revenue_energy' => array('label' => 'KO Energy Revenue Growth', 'period' => 'revenue_timeperiod'),
        'pbt_total_tccc' => array('label' => 'KP PBT Growth', 'period' => 'revenue_timeperiod'),
        'real_pce_chg_vs_py' => array('label' => 'KO Revenue Growth ahead of Real PCE', 'period' => 'revenue_timeperiod'),
        'dmi_total_tccc' => array('label' => 'DME Growth at least 50% of GP growth', 'period' => 'revenue_timeperiod'),
    ),
    'GscShare' => array('nartd_nartd_pts_vs_py' =>  array('label' => 'KO NARTD Value share Growth', 'period' => 'nartd_nartd_timeperiod'),
        'coke_tm_nartd_cy2' =>  array('label' => 'Coke Value share Growth within NARTD', 'period' => 'coke_tm_timeperiod'),
        'coke_tm_ssd_cy2' => array('label' => 'Coke Value share Growth within SSD', 'period' => 'coke_tm_timeperiod'),
        'ssd_pts1_vs_py' =>  array('label' => 'KO SSD Value share Growth within NARTD', 'period' => 'ssd_timeperiod'),
        'ssd_pts_vs_py' => array('label' => 'KO SSD Value share Growth within SSD', 'period' => 'ssd_timeperiod'),
        'category_juice_pts1_vs_py' => array('label' => 'KO Juice Value share Growth within NARTD','period' => 'category_juice_timeperiod'),
        'category_juice_pts_vs_py' =>  array('label' => 'KO Juice Value share Growth within Juice','period' => 'category_juice_timeperiod'),
        'category_plant_pts1_vs_py' => array('label' => 'KO Plant Based Value share Growth within NARTD','period' => 'category_plant_timeperiod'),
        'category_plant_pts_vs_py' =>  array('label' => 'KO Plant Based Value share Growth within Plant Based','period' => 'category_plant_timeperiod'),
        'category_dairy_pts1_vs_py' =>  array('label' => 'KO VAD Value share Growth within NARTD','period' => 'category_dairy_timeperiod'),
        'category_dairy_pts_vs_py' =>  array('label' => 'KO VAD Value share Growth within VAD', 'period' => 'category_dairy_timeperiod'),
        'category_tea_pts1_vs_py' =>  array('label' => 'KO Tea Value share Growth within NARTD','period' => 'category_tea_timeperiod'),
        'category_tea_pts_vs_py' => array('label' => 'KO Tea Value share Growth within Tea', 'period' => 'category_tea_timeperiod'),
        'waters_pts1_vs_py' => array('label' => 'KO Water Value share Growth within NARTD', 'period' => 'waters_timeperiod'),
        'waters_pts_vs_py' => array('label' => 'KO Water Value share Growth within Water', 'period' => 'waters_timeperiod'),
        'category_sports_pts1_vs_py' =>  array('label' => 'KO Sports Value share Growth within NARTD', 'period' => 'category_sports_timeperiod'),
        'category_sports_pts_vs_py' =>  array('label' => 'KO Sports Value share Growth within Sports', 'period' => 'category_sports_timeperiod'),
        'category_coffee_pts1_vs_py' => array('label' => 'KO Coffee Value share Growth within NARTD', 'period' => 'category_coffee_timeperiod'),
        'category_coffee_pts_vs_py' =>  array('label' => 'KO Coffee Value share Growth within Coffee',  'period' => 'category_coffee_timeperiod'),
        'category_energy_pts1_vs_py' => array('label' => 'KO Energy Value share Growth within NARTD', 'period' => 'category_energy_timeperiod'),
        'category_energy_pts_vs_py' => array('label' => 'KO Energy Value share Growth within Energy', 'period' => 'category_energy_timeperiod'),
    ),
    'GscTransaction' => array('total_tccc_chg_vs_py' => array('label' => 'KO Transaction (Individual Units) Growth', 'period' => 'total_tccc_timeperiod'),
        'coke_tm_chg_vs_py' => array('label' => 'Coke Transaction (Individual Units) Growth', 'period' => 'coke_tm_timeperiod'),
        'tccc_ssd_chg_vs_py' => array('label' => 'KO SSD Transaction (Individual Units) Growth', 'period' => 'tccc_ssd_timeperiod'),
        'tccc_juice_chg_vs_py' => array('label' => 'KO Juice Transaction (Individual Units) Growth', 'period' => 'tccc_juice_timeperiod'),
        'tccc_plant_based_chg_vs_py' => array('label' => 'KO Plant Based Transaction (Individual Units) Growth', 'period' => 'tccc_plant_based_timeperiod'),
        'tccc_dairy_chg_vs_py' => array('label' => 'KO Dairy Transaction (Individual Units) Growth', 'period' => 'tccc_dairy_timeperiod'),
        'tccc_tea_chg_vs_py' => array('label' => 'KO Tea Transaction (Individual Units) Growth', 'period' => 'tccc_tea_timeperiod'),
        'tccc_water_chg_vs_py' => array('label' => 'KO Water Transaction (Individual Units) Growth', 'period' => 'tccc_water_timeperiod'),
        'tccc_sports_chg_vs_py' => array('label' => 'KO Sports Transaction (Individual Units) Growth', 'period' => 'tccc_sports_timeperiod'),
        'tccc_coffee_chg_vs_py' => array('label' => 'KO Coffee Transaction (Individual Units) Growth', 'period' => 'tccc_coffee_timeperiod'),
        'tccc_energy_chg_vs_py' => array('label' => 'KO Energy Transaction (Individual Units) Growth', 'period' => 'tccc_energy_timeperiod'),
    ),
    'GscConsumer' => array('incidence_total_tccc_pts_vs_py' =>  array('label' => 'KO Incidence Growth',  'period' => 'incidence_total_tccc_timeperiod', 'colour' => 'incidence_total_tccc_sig_colour'),
        'incidence_coketm_pts_vs_py' =>  array('label' => 'Coke Incidence (Past 4 weeks drinkers) Growth', 'period' => 'incidence_coketm_timeperiod', 'colour' => 'incidence_coketm_sig_colour'),
        'drinkers_coketm_pts_vs_py' =>  array('label' => 'Coke Weekly+ drinkers Growth', 'period' => 'drinkers_coketm_timeperiod','colour' => 'drinkers_coketm_sig_colour'),
        'ssd_great_tasting_pts_vs_py' =>  array('label' => 'Great Tasting (Coke TM)',  'period' => 'ssd_great_tasting_timeperiod', 'colour' => 'ssd_great_tasting_sig_colour'),
        'ssd_uplifting_pts_vs_py' =>  array('label' => 'Uplifting (Coke TM)','period' => 'ssd_uplifting_timeperiod', 'colour' => 'ssd_uplifting_sig_colour'),
        'incidence_tccc_ssd_pts_vs_py' =>  array('label' => 'KO SSD Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_tccc_ssd_timeperiod', 'colour' => 'incidence_tccc_ssd_sig_colour'),
        'drinkers_tccc_ssd_pts_vs_py' =>  array('label' => 'KO SSD Weekly+ drinkers Growth','period' => 'drinkers_tccc_ssd_timeperiod', 'colour' => 'drinkers_tccc_ssd_sig_colour'),
        'cata_tccc_ssd_pts_vs_py' =>  array('label' => 'SSD CATA Score Growth','period' => 'cata_tccc_ssd_timeperiod', 'colour' => 'cata_tccc_ssd_sig_colour'),
        'incidence_tccc_juice_pts_vs_py' =>  array('label' => 'KO Juice Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_tccc_juice_timeperiod', 'colour' => 'incidence_tccc_juice_sig_colour'),
        'drinkers_tccc_juice_pts_vs_py' =>  array('label' => 'KO Juice Weekly+ drinkers Growth','period' => 'drinkers_tccc_juice_timeperiod', 'colour' => 'drinkers_tccc_juice_sig_colour'),
        'incidence_plant_based_pts_vs_py' =>  array('label' => 'KO Plant Based Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_plant_based_timeperiod', 'colour' => 'incidence_plant_based_sig_colour'),
        'drinkers_plant_based_pts_vs_py' =>  array('label' => 'KO Plant Based Weekly+ drinkers Growth','period' => 'drinkers_plant_based_timeperiod', 'colour' => 'drinkers_plant_based_sig_colour'),
        'incidence_tccc_dairy_pts_vs_py' =>  array('label' => 'KO Dairy Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_tccc_dairy_timeperiod', 'colour' => 'incidence_tccc_dairy_sig_colour'),
        'drinkers_tccc_dairy_pts_vs_py' =>  array('label' => 'KO Dairy Weekly+ drinkers Growth','period' => 'drinkers_tccc_dairy_timeperiod', 'colour' => 'drinkers_tccc_dairy_sig_colour'),
        'incidence_tea_pts_vs_py' =>  array('label' => 'KO Tea Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_tea_timeperiod', 'colour' => 'incidence_tea_sig_colour'),
        'drinkers_tea_pts_vs_py' =>  array('label' => 'KO Tea Weekly+ drinkers Growth','period' => 'drinkers_tea_timeperiod', 'colour' => 'drinkers_tea_sig_colour'),
        'incidence_tccc_water_pts_vs_py' =>  array('label' => 'KO Water Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_tccc_water_timeperiod', 'colour' => 'incidence_tccc_water_sig_colour'),
        'drinkers_tccc_water_pts_vs_py' =>  array('label' => 'KO Water Weekly+ drinkers Growth','period' => 'drinkers_tccc_water_timeperiod', 'colour' => 'drinkers_tccc_water_sig_colour'),
        'incidence_sports_pts_vs_py' =>  array('label' => 'KO Sports Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_sports_timeperiod', 'colour' => 'incidence_sports_sig_colour'),
        'drinkers_sports_pts_vs_py' =>  array('label' => 'KO Sports Weekly+ drinkers Growth','period' => 'drinkers_sports_timeperiod', 'colour' => 'drinkers_sports_sig_colour'),
        'incidence_coffee_pts_vs_py' =>  array('label' => 'KO Coffee Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_coffee_timeperiod', 'colour' => 'incidence_coffee_sig_colour'),
        'drinkers_coffee_pts_vs_py' =>  array('label' => 'KO Coffee Weekly+ drinkers Growth','period' => 'drinkers_coffee_timeperiod', 'colour' => 'incidence_coffee_sig_colour'),
        'incidence_energy_pts_vs_py' =>  array('label' => 'KO Energy Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_energy_timeperiod', 'colour' => 'incidence_energy_sig_colour'),
        'drinkers_energy_pts_vs_py' =>  array('label' => 'KO Energy Weekly+ drinkers Growth','period' => 'drinkers_energy_timeperiod', 'colour' => 'drinkers_energy_sig_colour'),
    ),
    'GscMedia' => array( 'coke_tm_cy' => array('label' => 'ONS Coke TM - YTD', 'period' => 'coke_tm_timeperiod'),
        'coke_tm_chg_vs_py' => array('label' => 'ONS Coke TM - Chg vs PY', 'period' => 'coke_tm_timeperiod'),
        'sprite_tm_cy' =>  array('label' => 'ONS Sprite TM - YTD',  'period' => 'sprite_tm_timeperiod'),
        'sprite_tm_chg_vs_py' =>  array('label' => 'ONS Sprite TM - Chg vs PY', 'period' => 'sprite_tm_timeperiod'),
        'fanta_tm_cy' =>  array('label' => 'ONS Fanta TM - YTD', 'period' => 'fanta_tm_timeperiod'),
        'fanta_tm_chg_vs_py' => array('label' => 'ONS Fanta TM - Chg vs PY', 'period' => 'fanta_tm_timeperiod'),
        'fuze_tm_cy' => array('label' => 'ONS Fuze  TM - YTD',  'period' => 'fuze_tm_timeperiod'),
        'fuze_tm_chg_vs_py' =>  array('label' => 'ONS Fuze TM - Chg vs PY',  'period' => 'fuze_tm_timeperiod'),
    ),
    'GscCommercial' => array('outlet_coverage_chg_vs_py' => array('label' => 'Outlet Coverage (Chg vs PY)', 'period' => 'time_period'),
        'affordable_ic_chg_vs_py' => array('label' => 'Affordable IC Entry Pack (Chg vs PY)', 'period' => 'time_period'),
        'coketm_chg_vs_py' => array('label' => 'Coke TM Price vs SSD (Chg vs PY)', 'period' => 'time_period'),
        'total_tccc_chg_vs_py' => array('label' => 'Total TCCC Out of Stock (Chg vs PY)', 'period' => 'time_period'),
        'sovi_som_chg_vs_py' => array('label' => 'SOVI:SOM - NARTD (Chg vs PY)', 'period' => 'time_period'),
        'sovi_som_ssd_chg_vs_py' => array('label' => 'SOVI:SOM - SSD (Chg vs PY)', 'period' => 'time_period'),
        'ko_cde_chg_vs_py' => array('label' => 'KO CDE/10 K (Chg vs PY)', 'period' => 'time_period'),
        'priority_growth_chg_vs_py' => array('label' => 'Priority Growth SKUs Distribution (Change vs PY)', 'period' => 'time_period'),
    ),
        )
);




Configure::write('GscShare', array(
    'KO NARTD' => array('nartd_nartd_pts_vs_py' => array('label' => 'KO NARTD Value share Growth', 'period' => 'nartd_nartd_timeperiod')),
    
    'COKE TM' => array('coke_tm_nartd_cy2' => array('label' => 'Coke Value share Growth within NARTD', 'period' => 'coke_tm_timeperiod'),
        'coke_tm_ssd_cy2' => array('label' => 'Coke Value share Growth within SSD', 'period' => 'coke_tm_timeperiod')),
    
    'KO SSD' => array('ssd_pts1_vs_py' => array('label' => 'KO SSD Value share Growth within NARTD', 'period' => 'ssd_timeperiod'),
        'ssd_pts_vs_py' => array('label' => 'KO SSD Value share Growth within SSD', 'period' => 'ssd_timeperiod')),
    
    'KO Juice' => array(
    'category_juice_pts1_vs_py' => array('label' => 'KO Juice Value share Growth within NARTD', 'period' => 'category_juice_timeperiod'),
    'category_juice_pts_vs_py' => array('label' => 'KO Juice Value share Growth within Juice', 'period' => 'category_juice_timeperiod')),
    
    'KO Plant Based' => array(
    'category_plant_pts1_vs_py' => array('label' => 'KO Plant Based Value share Growth within NARTD', 'period' => 'category_plant_timeperiod'),
    'category_plant_pts_vs_py' => array('label' => 'KO Plant Based Value share Growth within Plant Based', 'period' => 'category_plant_timeperiod')),
    
    'KO VAD' => array(
    'category_dairy_pts1_vs_py' => array('label' => 'KO VAD Value share Growth within NARTD', 'period' => 'category_dairy_timeperiod'),
    'category_dairy_pts_vs_py' => array('label' => 'KO VAD Value share Growth within VAD', 'period' => 'category_dairy_timeperiod')),
    
    'KO TEA' => array(
    'category_tea_pts1_vs_py' => array('label' => 'KO Tea Value share Growth within NARTD', 'period' => 'category_tea_timeperiod'),
    'category_tea_pts_vs_py' => array('label' => 'KO Tea Value share Growth within Tea', 'period' => 'category_tea_timeperiod')),
    
    'KO WATER' => array(
    'waters_pts1_vs_py' => array('label' => 'KO Water Value share Growth within NARTD', 'period' => 'waters_timeperiod'),
    'waters_pts_vs_py' => array('label' => 'KO Water Value share Growth within Water', 'period' => 'waters_timeperiod')),
    
    'KO SPORTS' => array(
    'category_sports_pts1_vs_py' => array('label' => 'KO Sports Value share Growth within NARTD', 'period' => 'category_sports_timeperiod'),
    'category_sports_pts_vs_py' => array('label' => 'KO Sports Value share Growth within Sports', 'period' => 'category_sports_timeperiod')),
    
    'KO COFFEE' => array(
    'category_coffee_pts1_vs_py' => array('label' => 'KO Coffee Value share Growth within NARTD', 'period' => 'category_coffee_timeperiod'),
    'category_coffee_pts_vs_py' => array('label' => 'KO Coffee Value share Growth within Coffee', 'period' => 'category_coffee_timeperiod')),
    
    'KO ENERGY' => array(
    'category_energy_pts1_vs_py' => array('label' => 'KO Energy Value share Growth within NARTD', 'period' => 'category_energy_timeperiod'),
    'category_energy_pts_vs_py' => array('label' => 'KO Energy Value share Growth within Energy', 'period' => 'category_energy_timeperiod')),
));


Configure::write('GscConsumer', array(
        'Total KO' => array('incidence_total_tccc_pts_vs_py' =>  array('label' => 'KO Incidence Growth',  'period' => 'incidence_total_tccc_timeperiod', 'colour' => 'incidence_total_tccc_sig_colour')),  
        
        'Coke TM' => array(
        'incidence_coketm_pts_vs_py' =>  array('label' => 'Coke Incidence (Past 4 weeks drinkers) Growth', 'period' => 'incidence_coketm_timeperiod', 'colour' => 'incidence_coketm_sig_colour'),
        'drinkers_coketm_pts_vs_py' =>  array('label' => 'Coke Weekly+ drinkers Growth', 'period' => 'drinkers_coketm_timeperiod','colour' => 'drinkers_coketm_sig_colour'),
        'ssd_great_tasting_pts_vs_py' =>  array('label' => 'Great Tasting (Coke TM)',  'period' => 'ssd_great_tasting_timeperiod', 'colour' => 'ssd_great_tasting_sig_colour'),
        'ssd_uplifting_pts_vs_py' =>  array('label' => 'Uplifting (Coke TM)','period' => 'ssd_uplifting_timeperiod', 'colour' => 'ssd_uplifting_sig_colour'),
        ),
    
    
    'KO SSD' => array(
        'incidence_tccc_ssd_pts_vs_py' =>  array('label' => 'KO SSD Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_tccc_ssd_timeperiod', 'colour' => 'incidence_tccc_ssd_sig_colour'),
        'drinkers_tccc_ssd_pts_vs_py' =>  array('label' => 'KO SSD Weekly+ drinkers Growth','period' => 'drinkers_tccc_ssd_timeperiod', 'colour' => 'drinkers_tccc_ssd_sig_colour'),
        'cata_tccc_ssd_pts_vs_py' =>  array('label' => 'SSD CATA Score Growth','period' => 'cata_tccc_ssd_timeperiod', 'colour' => 'cata_tccc_ssd_sig_colour'),
      ), 
    
      'KO Juice' => array(
        'incidence_tccc_juice_pts_vs_py' => array('label' => 'KO Juice Incidence (Past 4 weeks drinkers) Growth', 'period' => 'incidence_tccc_juice_timeperiod', 'colour' => 'incidence_tccc_juice_sig_colour'),
        'drinkers_tccc_juice_pts_vs_py' => array('label' => 'KO Juice Weekly+ drinkers Growth', 'period' => 'drinkers_tccc_juice_timeperiod', 'colour' => 'drinkers_tccc_juice_sig_colour'),
    ),
    
    'KO Plant based' => array(
        'incidence_plant_based_pts_vs_py' =>  array('label' => 'KO Plant Based Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_plant_based_timeperiod', 'colour' => 'incidence_plant_based_sig_colour'),
        'drinkers_plant_based_pts_vs_py' =>  array('label' => 'KO Plant Based Weekly+ drinkers Growth','period' => 'drinkers_plant_based_timeperiod', 'colour' => 'drinkers_plant_based_sig_colour'),
         ), 
    
    'KO Dairy' => array(
        'incidence_tccc_dairy_pts_vs_py' =>  array('label' => 'KO Dairy Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_tccc_dairy_timeperiod', 'colour' => 'incidence_tccc_dairy_sig_colour'),
        'drinkers_tccc_dairy_pts_vs_py' =>  array('label' => 'KO Dairy Weekly+ drinkers Growth','period' => 'drinkers_tccc_dairy_timeperiod', 'colour' => 'drinkers_tccc_dairy_sig_colour'),
      ),    
    
    'KO TEA' => array(
        'incidence_tea_pts_vs_py' =>  array('label' => 'KO Tea Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_tea_timeperiod', 'colour' => 'incidence_tea_sig_colour'),
        'drinkers_tea_pts_vs_py' =>  array('label' => 'KO Tea Weekly+ drinkers Growth','period' => 'drinkers_tea_timeperiod', 'colour' => 'drinkers_tea_sig_colour'),
      ),  
    
    'KO WATER' => array(
    'incidence_tccc_water_pts_vs_py' =>  array('label' => 'KO Water Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_tccc_water_timeperiod', 'colour' => 'incidence_tccc_water_sig_colour'),
    'drinkers_tccc_water_pts_vs_py' =>  array('label' => 'KO Water Weekly+ drinkers Growth','period' => 'drinkers_tccc_water_timeperiod', 'colour' => 'drinkers_tccc_water_sig_colour'),
     ), 
    
    'KO SPORTS' => array(
    'incidence_sports_pts_vs_py' =>  array('label' => 'KO Sports Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_sports_timeperiod', 'colour' => 'incidence_sports_sig_colour'),
    'drinkers_sports_pts_vs_py' =>  array('label' => 'KO Sports Weekly+ drinkers Growth','period' => 'drinkers_sports_timeperiod', 'colour' => 'drinkers_sports_sig_colour'),
     ), 
     
    'KO COFFEE' => array(
    'incidence_coffee_pts_vs_py' =>  array('label' => 'KO Coffee Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_coffee_timeperiod', 'colour' => 'incidence_coffee_sig_colour'),
    'drinkers_coffee_pts_vs_py' =>  array('label' => 'KO Coffee Weekly+ drinkers Growth','period' => 'drinkers_coffee_timeperiod', 'colour' => 'incidence_coffee_sig_colour'),
     ), 
    
    'KO ENERGY' => array(
    'incidence_energy_pts_vs_py' =>  array('label' => 'KO Energy Incidence (Past 4 weeks drinkers) Growth','period' => 'incidence_energy_timeperiod', 'colour' => 'incidence_energy_sig_colour'),
     'drinkers_energy_pts_vs_py' =>  array('label' => 'KO Energy Weekly+ drinkers Growth','period' => 'drinkers_energy_timeperiod', 'colour' => 'drinkers_energy_sig_colour'),
   ),
   ));





