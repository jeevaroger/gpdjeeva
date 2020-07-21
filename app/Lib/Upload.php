<?php

/**
 * Upload , Description of Sheet Column with databse column name, and the type of data they hold.
 *
 * Created By: Harish
 * Created Date: 12/05/2015
 * Modified By: Harish
 * Modified Date: 12/10/2015
 */
class Upload {

    /**
     * VolPT
     *
     * @var array
     */
    public static $VolPT = array(array('B', NUMERIC, 'value9'),
        array('C', NUMERIC, 'value10'),
        array('D', NUMERIC, 'value11'),
        array('E', NUMERIC, 'value1'),
        array('F', NUMERIC, 'value2'),
        array('G', NUMERIC, 'value3'),
        array('J', PUBLICATION_PERIOD, 'value4'),
        array('L', NUMERIC, 'value5'),
        array('M', NUMERIC, 'value6'),
        array('N', NUMERIC, 'value7'),
        array('Q', PUBLICATION_PERIOD, 'value8')
    );

    /**
     * Fin
     *
     * @var array
     */
    public static $Fin = array(array('B', NUMERIC, 'value1'),
        array('C', NUMERIC, 'value2'),
        array('E', NUMERIC, 'value3'),
        array('F', NUMERIC, 'value4'),
        array('H', PUBLICATION_PERIOD, 'value5'),
        array('V', NUMERIC, 'value9'),
        array('W', NUMERIC, 'value10'),
        array('X', PUBLICATION_PERIOD, 'value11'),
        array('Z', NUMERIC, 'value12'),
        array('AA', NUMERIC, 'value13'),
        array('AB', PUBLICATION_PERIOD, 'value14'),
        array('J', NUMERIC, 'value15'),
        array('K', NUMERIC, 'value16'),
        array('M', NUMERIC, 'value17'),
        array('N', NUMERIC, 'value18'),
        array('P', PUBLICATION_PERIOD, 'value19'),
        array('AD', NUMERIC, 'value20'),
        array('AE', NUMERIC, 'value21'),
        array('AF', PUBLICATION_PERIOD, 'value22')
    );

    /**
     * Share
     *
     * @var array
     */
    public static $Share = array(array('B', NUMERIC, 'value1'),
        array('C', NUMERIC, 'value2'),
        array('D', NUMERIC, 'value3'),
        array('G', PUBLICATION_PERIOD, 'value4'),
        array('I', NUMERIC, 'value5'),
        array('J', NUMERIC, 'value6'),
        array('K', NUMERIC, 'value7'),
        array('L', NUMERIC, 'value8'),
        array('P', PUBLICATION_PERIOD, 'value9'),
        array('R', NUMERIC, 'value10'),
        array('S', NUMERIC, 'value11'),
        array('T', NUMERIC, 'value12'),
        array('U', NUMERIC, 'value13'),
        array('Y', PUBLICATION_PERIOD, 'value14'),
        array('AA', NUMERIC, 'value15'),
        array('AB', NUMERIC, 'value16'),
        array('AC', NUMERIC, 'value17'),
        array('AD', NUMERIC, 'value18'),
        array('AH', PUBLICATION_PERIOD, 'value19'),
        array('AJ', NUMERIC, 'value20'),
        array('AK', NUMERIC, 'value21'),
        array('AL', NUMERIC, 'value22'),
        array('AM', NUMERIC, 'value23'),
        array('AQ', PUBLICATION_PERIOD, 'value24'),
        array('AS', NUMERIC, 'value30'),
        array('AT', NUMERIC, 'value31'),
        array('AU', NUMERIC, 'value32'),
        array('AV', NUMERIC, 'value33'),
        array('AZ', PUBLICATION_PERIOD, 'value34'),
        array('BB', NUMERIC, 'value35'),
        array('BC', NUMERIC, 'value36'),
        array('BD', NUMERIC, 'value37'),
        array('BE', NUMERIC, 'value38'),
        array('BI', PUBLICATION_PERIOD, 'value39'),
        array('BK', NUMERIC, 'value40'),
        array('BL', NUMERIC, 'value41'),
        array('BM', NUMERIC, 'value42'),
        array('BN', NUMERIC, 'value43'),
        array('BR', PUBLICATION_PERIOD, 'value44'),
        array('BT', NUMERIC, 'value45'),
        array('BU', NUMERIC, 'value46'),
        array('BV', NUMERIC, 'value47'),
        array('BW', NUMERIC, 'value48'),
        array('CA', PUBLICATION_PERIOD, 'value49')
    );

    /**
     * Commercial_Metrics
     *
     * @var array
     */
    public static $Commercial_Metrics = array(array('B', NUMERIC, 'value1'),
        array('C', NUMERIC, 'value2'),
        array('E', PUBLICATION_PERIOD, 'value49'),
        array('G', NUMERIC, 'value3'),
        array('H', NUMERIC, 'value4'),
        array('J', PUBLICATION_PERIOD, 'value5'),
        array('Q', NUMERIC, 'value6'),
        array('R', NUMERIC, 'value7'),
        array('T', PUBLICATION_PERIOD, 'value8'),
        array('V', NUMERIC, 'value9'),
        array('W', NUMERIC, 'value10'),
        array('Y', PUBLICATION_PERIOD, 'value11'),
        array('AA', NUMERIC, 'value12'),
        array('AB', NUMERIC, 'value13'),
        array('AD', PUBLICATION_PERIOD, 'value14'),
        array('AF', NUMERIC, 'value15'),
        array('AG', NUMERIC, 'value16'),
        array('AI', PUBLICATION_PERIOD, 'value17'),
        array('AK', NUMERIC, 'value48'),
        array('AL', NUMERIC, 'value18'),
        array('AN', PUBLICATION_PERIOD, 'value19'),
        array('AP', NUMERIC, 'value23'),
        array('AQ', NUMERIC, 'value24'),
        array('AS', PUBLICATION_PERIOD, 'value25'),
        array('AU', NUMERIC, 'value26'),
        array('AV', NUMERIC, 'value27'),
        array('AW', PUBLICATION_PERIOD, 'value28'),
        array('BC', NUMERIC, 'value29'),
        array('BD', NUMERIC, 'value30'),
        array('BF', PUBLICATION_PERIOD, 'value31'),
        array('BH', NUMERIC, 'value32'),
        array('BI', NUMERIC, 'value33'),
        array('BJ', PUBLICATION_PERIOD, 'value34'),
        array('BP', NUMERIC, 'cmp9_cmp17_cmp18'),
        array('BQ', NUMERIC, 'cmp10_cmp21_cmp22'),
        array('BS', PUBLICATION_PERIOD, 'cmp24_cmp'),
        array('BU', NUMERIC, 'value35_value36_cmp9'),
        array('BV', NUMERIC, 'value37_value38_cmp10'),
        array('BX', PUBLICATION_PERIOD, 'value39_cmp'),
    );

    /**
     * Consumer
     *
     * @var array
     */
    public static $Consumer = array(array('B', NUMERIC, 'value1'),
        array('C', NUMERIC, 'value2'),
        array('E', B3_COLOR, 'value3'),
        array('F', PUBLICATION_PERIOD, 'value4'),
        array('H', NUMERIC, 'value5'),
        array('I', NUMERIC, 'value6'),
        array('K', B3_COLOR, 'value7'),
        array('L', PUBLICATION_PERIOD, 'value8'),
        array('N', NUMERIC, 'value9'),
        array('O', NUMERIC, 'value10'),
        array('Q', B3_COLOR, 'value11'),
        array('R', PUBLICATION_PERIOD, 'value12'),
        array('T', NUMERIC, 'value13'),
        array('U', NUMERIC, 'value14'),
        array('W', B3_COLOR, 'value15'),
        array('X', PUBLICATION_PERIOD, 'value16'),
        array('Z', NUMERIC, 'value17'),
        array('AA', NUMERIC, 'value18'),
        array('AC', B3_COLOR, 'value19'),
        array('AD', PUBLICATION_PERIOD, 'value20'),
        array('AF', NUMERIC, 'value21'),
        array('AG', NUMERIC, 'value22'),
        array('AI', B3_COLOR, 'value23'),
        array('AJ', PUBLICATION_PERIOD, 'value24'),
        array('AL', NUMERIC, 'value25'),
        array('AM', NUMERIC, 'value26'),
        array('AO', B3_COLOR, 'value27'),
        array('AP', PUBLICATION_PERIOD, 'value28')
    );

    /**
     * Macro
     *
     * @var array
     */
    public static $Macro = array(array('B', NUMERIC, 'value1'),
        array('C', NUMERIC, 'value2'),
        array('D', PUBLICATION_PERIOD, 'value5'),
        array('F', NUMERIC, 'value6'),
        array('G', NUMERIC, 'value7'),
        array('H', PUBLICATION_PERIOD, 'value8'),
        array('J', NUMERIC, 'value11'),
        array('K', NUMERIC, 'value12'),
        array('L', PUBLICATION_PERIOD, 'value15')
    );

    /**
     * Media_1
     *
     * @var array
     */
    public static $Media_1 = array(array('B', NUMERIC, 'value1'),
        array('C', NUMERIC, 'value2'),
        array('E', NUMERIC, 'value3'),
        array('F', NUMERIC, 'value4'),
        array('H', PUBLICATION_PERIOD, 'value5'),
        array('J', NUMERIC, 'value11'),
        array('K', NUMERIC, 'value12'),
        array('M', NUMERIC, 'value13'),
        array('N', NUMERIC, 'value14'),
        array('P', PUBLICATION_PERIOD, 'value15'),
        array('V', NUMERIC, 'value6_value7_cmp'),
        array('W', NUMERIC, 'value8_value9_cmp'),
        array('X', PUBLICATION_PERIOD, 'value10'));

    /**
     * Media_2
     *
     * @var array
     */
    public static $Media_2 = array(array('B', NUMERIC, 'value1'),
        array('C', NUMERIC, 'value2'),
        array('G', NUMERIC, 'value3_value4_cmp'),
        array('H', PUBLICATION_PERIOD, 'value5'),
        array('J', NUMERIC, 'value6'),
        array('K', NUMERIC, 'value7'),
        array('O', NUMERIC, 'value8_value9_cmp'),
        array('P', PUBLICATION_PERIOD, 'value10'),
        array('R', NUMERIC, 'value11'),
        array('S', NUMERIC, 'value12'),
        array('T', PUBLICATION_PERIOD, 'value13'),
        array('V', NUMERIC, 'value14'),
        array('W', NUMERIC, 'value15'),
        array('Y', PUBLICATION_PERIOD, 'value16'),
        array('AA', NUMERIC, 'value17'),
        array('AB', NUMERIC, 'value18'),
        array('AD', PUBLICATION_PERIOD, 'value19'),
        array('AF', NUMERIC, 'value20'),
        array('AG', NUMERIC, 'value21'),
        array('AI', PUBLICATION_PERIOD, 'value22'),
        array('AK', NUMERIC, 'value23'),
        array('AL', NUMERIC, 'value24'),
        array('AN', PUBLICATION_PERIOD, 'value25'),
        array('AP', NUMERIC, 'value26'),
        array('AQ', NUMERIC, 'value27'),
        array('AS', PUBLICATION_PERIOD, 'value28'),
        array('AU', NUMERIC, 'value29'),
        array('AV', NUMERIC, 'value30'),
        array('AX', PUBLICATION_PERIOD, 'value31'),
        array('AZ', NUMERIC, 'value32'),
        array('BA', NUMERIC, 'value33'),
        array('BC', NUMERIC, 'value34'),
        array('BD', NUMERIC, 'value35'),
        array('BG', PUBLICATION_PERIOD, 'value36'),
        array('BI', NUMERIC, 'value37'),
        array('BJ', NUMERIC, 'value38'),
        array('BL', PUBLICATION_PERIOD, 'value39'),
        array('BN', NUMERIC, 'value40'),
        array('BO', NUMERIC, 'value41'),
        array('BQ', PUBLICATION_PERIOD, 'value42')
    );

    /**
     * Households
     *
     * @var array
     */
    public static $Households = array(array('B', NUMERIC, 'value3'),
        array('C', NUMERIC, 'value4'),
        array('E', PUBLICATION_PERIOD, 'value5'),
        array('G', NUMERIC, 'value6'),
        array('H', NUMERIC, 'value7'),
        array('J', PUBLICATION_PERIOD, 'value8'),
        array('L', NUMERIC, 'value11'),
        array('M', NUMERIC, 'value12'),
        array('O', PUBLICATION_PERIOD, 'value13')
    );
    public static $TVShareofVoiceoverCoreSparkling = array('value23', 'value24');
    public static $TVShareofVoiceoverCoreNARTD = array('value26', 'value27');
    public static $SysTVMediaInv = array('value3_value4_cmp');
    public static $SysDigMediaInv = array('value8_value9_cmp');
    public static $TVMediaIndInflation = array('value11', 'value12');
    public static $Unemployment = array('value7');

    /**
     * getGroupNSubGroupName method
     * @param string $model, string $column,  
     * @return array
     * Created By: Harish
     * Created Date: 19/10/2016
     * Modified By: Harish
     * Modified Date: 20/10/2016
     */
    public function getGroupNSubGroupName($model, $column) {
        $TVShareofVoiceoverCoreSparkling = array('value23', 'value24');
        $TVShareofVoiceoverCoreNARTD = array('value26', 'value27');
        $SysTVMediaInv = array('value3_value4_cmp');
        $SysDigMediaInv = array('value8_value9_cmp');
        $TVMediaIndInflation = array('value11', 'value12');
        $Unemployment = array('value7');
        $return = array();

        switch ($model) {
            case 'Media2':
                if (in_array($column, $TVShareofVoiceoverCoreSparkling)) {
                    $return = array('group_name' => GROUP_TV_SHARE_OF_VOICE, 'sub_group_name' => SUB_GROUP_OVER_CORE_SPARKLING);
                } elseif (in_array($column, $TVShareofVoiceoverCoreNARTD)) {
                    $return = array('group_name' => GROUP_TV_SHARE_OF_VOICE, 'sub_group_name' => SUB_GROUP_OVER_CORE_NARTD);
                } elseif (in_array($column, $SysTVMediaInv)) {
                    $return = array('group_name' => GROUP_SYSTEM_MEDIA_INVESTMENT, 'sub_group_name' => SUB_GROUP_SYS_TV_MEDIA_INV);
                } elseif (in_array($column, $SysDigMediaInv)) {
                    $return = array('group_name' => GROUP_SYSTEM_MEDIA_INVESTMENT, 'sub_group_name' => SUB_GROUP_SYS_DIG_MEDIA_INV);
                } elseif (in_array($column, $TVMediaIndInflation)) {
                    $return = array('group_name' => GROUP_MEDIA_INFLATION, 'sub_group_name' => SUB_GROUP_TV_MEDIA_IND_INFLATION);
                }
                break;
            case 'Macro':

                if (in_array($column, $Unemployment)) {
                    $return = array('group_name' => NULL, 'sub_group_name' => SUB_GROUP_UNEMPLOYMENT);
                }
                break;

            default:
                break;
        }
        return $return;
    }

}
