<?php

App::uses('AppController', 'Controller');
App::import('Lib', 'Upload');

/**
 * AuditLogs Controller
 *
 * @property SessionComponent $Session
 */
class AuditLogsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Session', 'Paginator', 'Cookie');

    /**
     * Models
     *
     * @var array
     */
    public $uses = array('AuditLog', 'Market', 'UserMaster', 'Media2', 'DashboardFilter');

    /**
     * Helpers
     *
     * @var array
     */
    public $helpers = array('Market', 'Metrices', 'Paginator');
    public $paginate = array(
        'fields' => array('AuditLog.dashboard_filter_id', 'Market.market_name'),
        'group' => array('AuditLog.dashboard_filter_id', 'Market.market_name'),
        'limit' => AUDIT_LIST_RECORDS,
        'joins' => array(
            array(
                'table' => 'market',
                'alias' => 'Market',
                'type' => 'RIGHT',
                'conditions' => array(
                    'DashboardFilter.market_id = Market.market_id'
                )
            )
        ),
        'order' => 'Market.market_name asc',
    );

    /**
     * index method
     * 
     * @return void
     * Created By: Anoop
     * Created Date:21/10/2016
     * Modified By: Jeeva
     * Modified Date: 23/12/2016 
     */
    public function index() {
        $this->set('title_for_layout', AUDIT_LOG);


        $publicationPeriodForLog = $this->Market->getPastPublicationPeriod();
        if (empty($publicationPeriodForLog[0])) {
            $publicationPeriodForLog[0] = '';
        }

        $selectedPublicationDate = @$publicationPeriodForLog[0];
        $this->request->data = SanatizeInput::cleanInput($this->request->data);
        if ($this->request->is('post') && !empty($this->request->data['quarter_publication_period'])) {
            $selectedPublicationDate = $this->request->data['quarter_publication_period'];
        } elseif ((strpos($this->here, 'page') !== false) && $this->Session->read('auditlog.publication_filter')) {
            $selectedPublicationDate = $this->Session->read('auditlog.publication_filter');
        }

        $this->Session->write('auditlog.publication_filter', $selectedPublicationDate);

        $userMarkets = $this->Market->findAllPrimaryMarketListByUser($this->userId);
        $marketIdArray = array_keys($userMarkets);

        $activityTypes = Configure::read('ActivityTypes');


        $selectedMarketIdArray = array();
        if ($this->request->is('post') && !empty($this->request->data['marketId'])) {
            $selectedMarketIdArray = $this->request->data['marketId'];
            $marketIdArray = $this->request->data['marketId'];
        } elseif ((strpos($this->here, 'page') !== false) && $this->Session->read('auditlog.market_filter')) {
            $selectedMarketIdArray = $this->Session->read('auditlog.market_filter');
            $marketIdArray = $this->Session->read('auditlog.market_filter');
        }
        $this->Session->write('auditlog.market_filter', $selectedMarketIdArray);


        $selectedActivityTypes = array();
        if ($this->request->is('post') && !empty($this->request->data['aType'])) {
            $selectedActivityTypes = $this->request->data['aType'];
            $activityTypes = $this->request->data['aType'];
        } elseif ((strpos($this->here, 'page') !== false) && $this->Session->read('auditlog.activity_type_filter')) {
            $selectedActivityTypes = $this->Session->read('auditlog.activity_type_filter');
            $activityTypes = $this->Session->read('auditlog.activity_type_filter');
        }

        $this->Session->write('auditlog.activity_type_filter', $selectedActivityTypes);

        $this->paginate['conditions'] = array('AuditLog.publication_period' => $selectedPublicationDate, 'DashboardFilter.market_id' => $marketIdArray);
        $this->Paginator->settings = $this->paginate;
        $pagedDashboardIds = $this->Paginator->paginate('AuditLog');

        if ($this->request->is('post') && !empty($this->request->data['marketId']) || !empty($this->request->data['aType'])) {
            $this->request->data['pPeriod'] = $selectedPublicationDate;
            $summaryData = $this->getFilteredSummaryData();
        } else {
            $summaryData = $this->AuditLog->getAuditLogSummary($selectedPublicationDate, array('market_id' => $marketIdArray, 'paged_dashboard_ids' => $pagedDashboardIds));
        }

        $this->set(compact(array('summaryData', 'activityTypes', 'publicationPeriodForLog', 'selectedPublicationDate', 'userMarkets')));
    }

    /**
     * detail method
     * 
     * @return void
     * Created By: Anoop
     * Created Date:21/10/2016
     * Modified By: 
     * Modified Date: 
     */
    public function detail() {
        $this->set('title_for_layout', AUDIT_LOG);
        $globaladminsignoffH3accordian = $globaladminsignoffStyle = $busignoffH3accordian = $busignoffStyle = $notesH3accordian = $notesStyle = $keytakeoutsH3accordian = $keytakeoutsStyle = $datauploadH3accordian = $datauploadStyle = $performanceindicatorH3accordian = $performanceindicatorStyle = '';
        $globaladmindashboardreopenH3accordian = $globaladmindashboardreopenStyle = $metricEditsH3accordian = $metricEditsStyle = '';
        if ($this->request->is('get')) {
            $dashboardFilterId = $this->request->query('dfid');
            $actId = $this->request->query('actid');
            $accordianActive = "accordian-inner-rht-active";
            $styleBlock = "display: block;";
            if ($actId == $this->getActivityIdByName(TYPE_PERFORMANCE_INDI)) {
                $performanceindicatorH3accordian = $accordianActive;
                $performanceindicatorStyle = $styleBlock;
            } elseif ($actId == $this->getActivityIdByName(TYPE_METRIC_EDITS_INITIATION) || $actId == $this->getActivityIdByName(TYPE_METRIC_EDITS_COMPLETED)) {
                $metricEditsH3accordian = $accordianActive;
                $metricEditsStyle = $styleBlock;
            } elseif ($actId == $this->getActivityIdByName(GLOBAL_ADMIN_SIGN_OFF)) {
                $globaladminsignoffH3accordian = $accordianActive;
                $globaladminsignoffStyle = $styleBlock;
            } elseif ($actId == $this->getActivityIdByName(BU_SIGN_OFF)) {
                $busignoffH3accordian = $accordianActive;
                $busignoffStyle = $styleBlock;
            } elseif ($actId == $this->getActivityIdByName(TYPE_COMMENT_NOTES)) {
                $notesH3accordian = $accordianActive;
                $notesStyle = $styleBlock;
            } elseif ($actId == $this->getActivityIdByName(TYPE_KEY_TAKEOUTS)) {
                $keytakeoutsH3accordian = $accordianActive;
                $keytakeoutsStyle = $styleBlock;
            } elseif ($actId == $this->getActivityIdByName(GLOBAL_ADMIN_DASHBOARD_REOPEN)) {
                $globaladmindashboardreopenH3accordian = $accordianActive;
                $globaladmindashboardreopenStyle = $styleBlock;
            } elseif ($actId == $this->getActivityIdByName(TYPE_DATA_UPLOAD)) {
                $datauploadH3accordian = $accordianActive;
                $datauploadStyle = $styleBlock;
            }


            $userMarkets = $this->Market->findAllPrimaryMarketListByUser($this->userId);
            $marketIdArray = array_keys($userMarkets);

            /* verify user accessibility */
            $marketId = $this->DashboardFilter->find('first', array(
                'fields' => array('market_id', 'quarter_year', 'Market.market_name'),
                'conditions' => array('dashboardfilter_id' => $dashboardFilterId),
                'recursive' => 1,
            ));

            $processLogDetailFlag = false;
            if (in_array(@$marketId['DashboardFilter']['market_id'], $marketIdArray)) {
                $processLogDetailFlag = true;
            }
            if ($processLogDetailFlag) {
                $auditLogs = $this->AuditLog->find('all', array(
                    'fields' => array('AuditLog.id', 'AuditLog.revision_id', 'AuditLog.type', 'AuditLog.detail', 'AuditLog.group_name', 'AuditLog.sub_group_name', 'AuditLog.modified_by', 'AuditLog.modified_date', 'AuditLog.column_name', 'AuditLog.value', 'AuditLog.table_name', 'UserMaster.first_name', 'UserMaster.first_name', 'UserMaster.last_name', 'UserMaster.role_id', 'role.role_name'),
                    'conditions' => array('AuditLog.dashboard_filter_id' => $dashboardFilterId),
                    'order' => 'AuditLog.modified_by DESC',
                    'recursive' => 1,
                    'order' => 'AuditLog.id  DESC',
                    'joins' => array(
                        array(
                            'table' => 't_role',
                            'alias' => 'role',
                            'type' => 'INNER',
                            'conditions' => array(
                                'UserMaster.role_id  = role.role_id'
                            )
                        )
                    ),
                        )
                );
            }
            $colorIndicator = array('Performance_Metrics' => array(), 'Commercial_Execution' => array(), 'External_environment' => array(), 'Quantity_of_marketing' => array(), 'Quality_of_marketing' => array());
            $updatedNumberArray = $notes = $keytakeouts = $dataUpload = $dataSignedOffBU = $dataSignedOffGA = $reopen = array();
            $updatedNumber = array(SUB_GROUP_OVER_CORE_SPARKLING => array(),
                SUB_GROUP_OVER_CORE_NARTD => array(),
                SUB_GROUP_SYS_TV_MEDIA_INV => array(),
                SUB_GROUP_SYS_DIG_MEDIA_INV => array(),
                SUB_GROUP_TV_MEDIA_IND_INFLATION => array(),
                SUB_GROUP_UNEMPLOYMENT => array()
            );
            if (!empty($auditLogs)) {
                foreach ($auditLogs as $key => $value) {
                    $case = $value['AuditLog']['detail'];
                    switch ($case) {
                        case TYPE_PERFORMANCE_INDI_MSG:
                            $colorIndicator[$value['AuditLog']['group_name']][] = $auditLogs[$key];
                            break;
                        case TYPE_KEY_TAKEOUTS_MSG:
                            $keytakeouts[] = $auditLogs[$key];
                            break;
                        case DETAIL_UPDATED_NUMBER:
                            $updatedNumber[$value['AuditLog']['sub_group_name']][] = $auditLogs[$key];
                            break;
                        case TYPE_COMMENT_NOTES_MSG:
                            $notes[] = $auditLogs[$key];
                            break;
                        case TYPE_DATA_UPLOAD:
                            $dataUpload[] = $auditLogs[$key];
                            break;
                        case DATA_SIGNED_OFF:
                            $dataSignedOffBU[] = $auditLogs[$key];
                            break;
                        case DATA_SIGNED_OFF_BY_GLOBAL_ADMIN:
                            $dataSignedOffGA[] = $auditLogs[$key];
                            break;
                        case DATA_REOPENED:
                            $reopen[] = $auditLogs[$key];
                            break;
                        default:
                            break;
                    }
                }
            }
            // pr($updatedNumber[SUB_GROUP_OVER_CORE_SPARKLING]); die;
            if (!empty($updatedNumber[SUB_GROUP_OVER_CORE_SPARKLING])) {
                foreach ($updatedNumber[SUB_GROUP_OVER_CORE_SPARKLING] as $key => $updatedValue) {
                    if (!($key % 2)) {
                        if ($updatedNumber[SUB_GROUP_OVER_CORE_SPARKLING][$key]['AuditLog']['column_name'] == 'value23') {
                            $media2_value23 = $updatedValue['AuditLog']['value'];
                            $media2_value24 = $updatedNumber[SUB_GROUP_OVER_CORE_SPARKLING][$key + 1]['AuditLog']['value'];
                        } else {
                            $media2_value24 = $updatedValue['AuditLog']['value'];
                            $media2_value23 = $updatedNumber[SUB_GROUP_OVER_CORE_SPARKLING][$key + 1]['AuditLog']['value'];
                        }

                        $this->log('===================v23 is ' . $media2_value23 . ' and v24 is ' . $media2_value24);
                        $value23_value24_cmp = $this->Media2->callDbFunction(array('exec' => "Select [dbo].[sub_mul_100] (" . $media2_value24 . "," . $media2_value23 . ") as output"));
                        $value23_value24_cmp = number_format($value23_value24_cmp, 1, '.', ',');
                        $updatedNumberArray[SUB_GROUP_OVER_CORE_SPARKLING][$updatedValue['AuditLog']['revision_id']]['value23_value24_cmp'] = $value23_value24_cmp;
                    }
                    $updatedNumberArray[SUB_GROUP_OVER_CORE_SPARKLING][$updatedValue['AuditLog']['revision_id']][$updatedValue['AuditLog']['column_name']] = $updatedValue;
                }
            }

            if (!empty($updatedNumber[SUB_GROUP_OVER_CORE_NARTD])) {
                foreach ($updatedNumber[SUB_GROUP_OVER_CORE_NARTD] as $key => $updatedValue) {
                    if (!($key % 2)) {
                        if ($updatedNumber[SUB_GROUP_OVER_CORE_NARTD][$key]['AuditLog']['column_name'] == 'value26') {
                            $media2_value26 = $updatedValue['AuditLog']['value'];
                            $media2_value27 = $updatedNumber[SUB_GROUP_OVER_CORE_NARTD][$key + 1]['AuditLog']['value'];
                        } else {
                            $media2_value27 = $updatedValue['AuditLog']['value'];
                            $media2_value26 = $updatedNumber[SUB_GROUP_OVER_CORE_NARTD][$key + 1]['AuditLog']['value'];
                        }

                        $this->log('===================v26 is ' . $media2_value26 . ' and v27 is ' . $media2_value27);
                        $value26_value27_cmp = $this->Media2->callDbFunction(array('exec' => "Select [dbo].[sub_mul_100] (" . $media2_value27 . "," . $media2_value26 . ") as output"));
                        $value26_value27_cmp = number_format($value26_value27_cmp, 1, '.', ',');
                        $updatedNumberArray[SUB_GROUP_OVER_CORE_NARTD][$updatedValue['AuditLog']['revision_id']]['value26_value27_cmp'] = $value26_value27_cmp;
                    }
                    $updatedNumberArray[SUB_GROUP_OVER_CORE_NARTD][$updatedValue['AuditLog']['revision_id']][$updatedValue['AuditLog']['column_name']] = $updatedValue;
                }
            }

            $auditLogsTypes = array('colorIndicator' => $colorIndicator,
                'keytakeouts' => $keytakeouts,
                'updatedNumber' => $updatedNumber,
                'notes' => $notes,
                'dataUpload' => $dataUpload,
                'dependentMetrics' => $updatedNumberArray,
                'dataSignedOffBU' => $dataSignedOffBU,
                'dataSignedOffGA' => $dataSignedOffGA,
                'reopen' => $reopen,
                'performanceindicatorH3accordian' => $performanceindicatorH3accordian,
                'performanceindicatorStyle' => $performanceindicatorStyle,
                'metricEditsH3accordian' => $metricEditsH3accordian,
                'metricEditsStyle' => $metricEditsStyle,
                'busignoffH3accordian' => $busignoffH3accordian,
                'busignoffStyle' => $busignoffStyle,
                'notesH3accordian' => $notesH3accordian,
                'notesStyle' => $notesStyle,
                'keytakeoutsH3accordian' => $keytakeoutsH3accordian,
                'keytakeoutsStyle' => $keytakeoutsStyle,
                'datauploadH3accordian' => $datauploadH3accordian,
                'datauploadStyle' => $datauploadStyle,
                'globaladmindashboardreopenH3accordian' => $globaladmindashboardreopenH3accordian,
                'globaladmindashboardreopenStyle' => $globaladmindashboardreopenStyle,
                'globaladminsignoffH3accordian' => $globaladminsignoffH3accordian,
                'globaladminsignoffStyle' => $globaladminsignoffStyle,
                'dashboardDetail' => $marketId
            );
            $this->set('auditLogs', $auditLogsTypes);
        }
    }

    /**
     * getFilteredSummaryData method
     * 
     * @return void
     * Created By: Rohit
     * Created Date:27/10/2016
     * Modified By: Jeeva 
     * Modified Date: 23/12/2016 
     */
    public function getFilteredSummaryData() {
        //$this->layout = false;
        $summaryData = array();
        $activityTypes = Configure::read('ActivityTypes');
        if ($this->request->is('post')) {
            $this->request->data = SanatizeInput::cleanInput($this->request->data);

            $publication_period = $this->request->data['pPeriod'];
            $options = array();

            $userMarkets = $this->Market->findAllPrimaryMarketListByUser($this->userId);
            $marketIdArray = array_keys($userMarkets);

            if (!empty($this->request->data['marketId'])) {
                $options['market_id'] = $this->request->data['marketId'];
                //$this->Session->write('auditlog.market_filter',$this->request->data['marketId']);
            }
            if (!empty($this->request->data['aType'])) {
                $options['activity_type'] = $this->request->data['aType'];
                $activityTypes = $this->request->data['aType'];
                //$this->Session->write('auditlog.activity_type_filter',$this->request->data['aType']);
            }

            if (empty($options)) {
                $this->paginate['conditions'] = array('AuditLog.publication_period' => $publication_period, 'DashboardFilter.market_id' => $marketIdArray);
                $this->Paginator->settings = $this->paginate;
                $options['paged_dashboard_ids'] = $this->Paginator->paginate('AuditLog');
            }

            if (!isset($options['market_id'])) {
                $options['market_id'] = $marketIdArray;
            }

            $summaryData = $this->AuditLog->getAuditLogSummary($publication_period, $options);
        }
        //$this->set(compact(array('activityTypes', 'summaryData')));
        return $summaryData;
    }

    /**
     * getActivityIdByName method
     * @param string $aType 
     * @return string
     * Created By: Harish
     * Created Date:17/11/2016
     * Modified By: 
     * Modified Date: 
     */
    function getActivityIdByName($aType) {
        $actId = str_replace(array('-', ' '), array('', ''), strtolower($aType) . 'Id');
        return $actId;
    }

}
