<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
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
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect('/about_us', array('controller' => 'StaticPages', 'action' => 'aboutUs'));

/**
 * Routing for Login and default page
 */
Router::connect('/', array('controller' => 'Authorizations', 'action' => 'index', 'home'));
Router::connect('/pages', array('controller' => 'pages', 'action' => 'display'));

/**
 * Routing for UserMastersController
 */
Router::connect('/user', array('controller' => 'UserMasters', 'action' => 'index'));

/**
 * Routing for country-selector
 */
Router::connect('/home', array('controller' => 'Dashboards', 'action' => 'marketSelector'));


/**
 * Routing for AuditLogsController
 */
Router::connect('/audit-log', array('controller' => 'AuditLogs', 'action' => 'index'));
Router::connect('/audit-log/page/*', array('controller' => 'AuditLogs', 'action' => 'index'));

/**
 * Routing for AuditLogsController
 */
Router::connect('/audit-log/detail', array('controller' => 'AuditLogs', 'action' => 'detail'));

Router::connect('/audit-log/get-filtered-summary', array('controller' => 'AuditLogs', 'action' => 'getFilteredSummaryData'));


/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
Router::connect('/dashboard/detail', array('controller' => 'dashboards', 'action' => 'index', 'dashboard_detail'));

Router::connect('/glossary', array('controller' => 'StaticPages', 'action' => 'glossary'));


Router::connect('/dashboard/summary', array('controller' => 'dashboards', 'action' => 'summary', 'dashboard_summary'));

Router::connect('/dashboard/print', array('controller' => 'dashboards', 'action' => 'exportPdf', 'dashboard_print'));

Router::connect('/dashboard/export_pdf', array('controller' => 'dashboards', 'action' => 'exportPdf', 'dashboard_export_pdf'));

Router::connect('/dashboard/export_excel', array('controller' => 'dashboards', 'action' => 'exportExcel', 'dashboard_export_excel'));

Router::connect('/dashboard/edit', array('controller' => 'dashboards', 'action' => 'edit', 'dashboard_edit'));

Router::connect('/dashboard/aggregate_summary', array('controller' => 'dashboards', 'action' => 'aggregateSummary', 'dashboard_aggregate_summary'));

Router::connect('/upload', array('controller' => 'DataImporter','action' => 'upload', 'upload'));

Router::connect('/user_mgmt/*', array('controller' => 'UserManagements', 'user_mgmt'));

/**
 * Routing for UserMastersController action
 */
Router::connect('/user/:action/*', array('controller' => 'UserMasters'));

/**
 * Routing for AuthorizationsController action
 */
Router::connect('/auth/:action/*', array('controller' => 'Authorizations'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';


Router::connect('/dashboard/pdf', array('controller' => 'dashboards', 'action' => 'exportPdf', 'dashboard_export_pdf'));