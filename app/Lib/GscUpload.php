<?php

/**
 * Upload , Description of Sheet Column with databse column name, and the type of data they hold.
 *
 * Created By: Jeeva
 * Created Date: 27/07/2018
 * Modified By: 
 * Modified Date: 
 */
class GscUpload {

    public static $GscShare = array(array('B', NUMERIC, 'tccc_ssd_py'),
        array('C', NUMERIC, 'tccc_ssd_cy'),
        array('D', NUMERIC, 'ssd_py'),
        array('E', NUMERIC, 'ssd_cy'),
        array('F', NUMERIC, 'ssd_share_cy'),
        array('G', NUMERIC, 'ssd_share_py'),
        array('H', NUMERIC, 'ssd_pts_vs_py'),
        array('I', NUMERIC, 'ssd_share1_cy'),
        array('J', NUMERIC, 'ssd_share1_py'),
        array('K', NUMERIC, 'ssd_pts1_vs_py'),
        array('L', PUBLICATION_PERIOD, 'ssd_timeperiod'),
        
        array('N', NUMERIC, 'tccc_waters_py'),
        array('O', NUMERIC, 'tccc_waters_cy'),
        array('P', NUMERIC, 'waters_py'),
        array('Q', NUMERIC, 'waters_cy'),
        array('R', NUMERIC, 'waters_share_cy'),
        array('S', NUMERIC, 'waters_share_py'),
        array('T', NUMERIC, 'waters_pts_vs_py'),
        array('U', NUMERIC, 'waters_share1_cy'),
        array('V', NUMERIC, 'waters_share1_py'),
        array('W', NUMERIC, 'waters_pts1_vs_py'),
        array('X', PUBLICATION_PERIOD, 'waters_timeperiod'),
        
        
        array('Z', NUMERIC, 'nartd_nartd_tccc_py'),
        array('AA', NUMERIC, 'nartd_nartd_tccc_cy'),
        array('AB', NUMERIC, 'nartd_nartd_py'),
        array('AC', NUMERIC, 'nartd_nartd_cy'),
        array('AD', NUMERIC, 'nartd_nartd_share_cy'),
        array('AE', NUMERIC, 'nartd_nartd_share_py'),
        array('AF', NUMERIC, 'nartd_nartd_pts_vs_py'),
        array('AG', PUBLICATION_PERIOD, 'nartd_nartd_timeperiod'),
       
       
        array('AI', NUMERIC, 'category_energy_tccc_py'),
        array('AJ', NUMERIC, 'category_energy_tccc_cy'),
        array('AK', NUMERIC, 'category_energy_nartd_py'),
        array('AL', NUMERIC, 'category_energy_nartd_cy'),
        array('AM', NUMERIC, 'category_energy_share_cy'),
        array('AN', NUMERIC, 'category_energy_share_py'),
        array('AO', NUMERIC, 'category_energy_pts_vs_py'),
        array('AP', NUMERIC, 'category_energy_share1_cy'),
        array('AQ', NUMERIC, 'category_energy_share1_py'),
        array('AR', NUMERIC, 'category_energy_pts1_vs_py'),
        array('AS', PUBLICATION_PERIOD, 'category_energy_timeperiod'),
        
        
        array('AU', NUMERIC, 'category_juice_tccc_py'),
        array('AV', NUMERIC, 'category_juice_tccc_cy'),
        array('AW', NUMERIC, 'category_juice_nartd_py'),
        array('AX', NUMERIC, 'category_juice_nartd_cy'),
        array('AY', NUMERIC, 'category_juice_share_cy'),
        array('AZ', NUMERIC, 'category_juice_share_py'),
        array('BA', NUMERIC, 'category_juice_pts_vs_py'),
        array('BB', NUMERIC, 'category_juice_share1_cy'),
        array('BC', NUMERIC, 'category_juice_share1_py'),
        array('BD', NUMERIC, 'category_juice_pts1_vs_py'),
        array('BE', PUBLICATION_PERIOD, 'category_juice_timeperiod'),
        
        
      
        array('BG', NUMERIC, 'category_plant_tccc_py'),
        array('BH', NUMERIC, 'category_plant_tccc_cy'),
        array('BI', NUMERIC, 'category_plant_nartd_py'),
        array('BJ', NUMERIC, 'category_plant_nartd_cy'),
        array('BK', NUMERIC, 'category_plant_share_cy'),
        array('BL', NUMERIC, 'category_plant_share_py'),
        array('BM', NUMERIC, 'category_plant_pts_vs_py'),
        array('BN', NUMERIC, 'category_plant_share1_cy'),
        array('BO', NUMERIC, 'category_plant_share1_py'),
        array('BP', NUMERIC, 'category_plant_pts1_vs_py'),
        array('BQ', PUBLICATION_PERIOD, 'category_plant_timeperiod'),
        
        
        
        array('BS', NUMERIC, 'category_dairy_tccc_py'),
        array('BT', NUMERIC, 'category_dairy_tccc_cy'),
        array('BU', NUMERIC, 'category_dairy_nartd_py'),
        array('BV', NUMERIC, 'category_dairy_nartd_cy'),
        array('BW', NUMERIC, 'category_dairy_share_cy'),
        array('BX', NUMERIC, 'category_dairy_share_py'),
        array('BY', NUMERIC, 'category_dairy_pts_vs_py'),
        array('BZ', NUMERIC, 'category_dairy_share1_cy'),
        array('CA', NUMERIC, 'category_dairy_share1_py'),
        array('CB', NUMERIC, 'category_dairy_pts1_vs_py'),
        array('CC', PUBLICATION_PERIOD, 'category_dairy_timeperiod'),
        
        
        array('CE', NUMERIC, 'category_tea_tccc_py'),
        array('CF', NUMERIC, 'category_tea_tccc_cy'),
        array('CG', NUMERIC, 'category_tea_nartd_py'),
        array('CH', NUMERIC, 'category_tea_nartd_cy'),
        array('CI', NUMERIC, 'category_tea_share_cy'),
        array('CJ', NUMERIC, 'category_tea_share_py'),
        array('CK', NUMERIC, 'category_tea_pts_vs_py'),
        array('CL', NUMERIC, 'category_tea_share1_cy'),
        array('CM', NUMERIC, 'category_tea_share1_py'),
        array('CN', NUMERIC, 'category_tea_pts1_vs_py'),
        array('CO', PUBLICATION_PERIOD, 'category_tea_timeperiod'),
        
        
        array('CQ', NUMERIC, 'category_sports_tccc_py'),
        array('CR', NUMERIC, 'category_sports_tccc_cy'),
        array('CS', NUMERIC, 'category_sports_nartd_py'),
        array('CT', NUMERIC, 'category_sports_nartd_cy'),
        array('CU', NUMERIC, 'category_sports_share_cy'),
        array('CV', NUMERIC, 'category_sports_share_py'),
        array('CW', NUMERIC, 'category_sports_pts_vs_py'),
        array('CX', NUMERIC, 'category_sports_share1_cy'),
        array('CY', NUMERIC, 'category_sports_share1_py'),
        array('CZ', NUMERIC, 'category_sports_pts1_vs_py'),
        array('DA', PUBLICATION_PERIOD, 'category_sports_timeperiod'),
        
       
        
        array('DC', NUMERIC, 'category_coffee_tccc_py'),
        array('DD', NUMERIC, 'category_coffee_tccc_cy'),
        array('DE', NUMERIC, 'category_coffee_nartd_py'),
        array('DF', NUMERIC, 'category_coffee_nartd_cy'),
        array('DG', NUMERIC, 'category_coffee_share_cy'),
        array('DH', NUMERIC, 'category_coffee_share_py'),
        array('DI', NUMERIC, 'category_coffee_pts_vs_py'),
        array('DJ', NUMERIC, 'category_coffee_share1_cy'),
        array('DK', NUMERIC, 'category_coffee_share1_py'),
        array('DL', NUMERIC, 'category_coffee_pts1_vs_py'),
        array('DM', PUBLICATION_PERIOD, 'category_coffee_timeperiod'),
        
        
        array('DO', NUMERIC, 'coke_tm_py'),
        array('DP', NUMERIC, 'coke_tm_cy'),
        array('DQ', NUMERIC, 'coke_tm_nartd_py'),
        array('DR', NUMERIC, 'coke_tm_nartd_cy1'),
        array('DS', NUMERIC, 'coke_tm_nartd_cy2'),
        array('DT', NUMERIC, 'coke_tm_ssd_py'),
        array('DU', NUMERIC, 'coke_tm_ssd_cy1'),
        array('DV', NUMERIC, 'coke_tm_ssd_cy2'),
        array('DW', PUBLICATION_PERIOD, 'coke_tm_timeperiod'),
     
        array('EA', STRING, 'ssd_combo'),
        array('EB', STRING, 'juice_combo'),
        array('EC', STRING, 'plant_based_combo'),
        array('ED', STRING, 'dairy_combo'),
        array('EE', STRING, 'tea_combo'),
        array('EF', STRING, 'water_combo'),
        array('EG', STRING, 'sports_combo'),
        array('EH', STRING, 'coffee_combo'),
        array('EI', STRING, 'energy_combo'),
        
        
        array('EL', NUMERIC, 'te_tccc_ssd_py'),
        array('EM', NUMERIC, 'te_tccc_ssd_cy'),
        array('EN', NUMERIC, 'te_ssd_py'),
        array('EO', NUMERIC, 'te_ssd_cy'),
        array('EP', NUMERIC, 'te_ssd_share_py'),
        array('EQ', NUMERIC, 'te_ssd_share_cy'),
        array('ER', NUMERIC, 'te_ssd_pts_vs_py'),
        array('ES', NUMERIC, 'te_ssd_share1_py'),
        array('ET', NUMERIC, 'te_ssd_share1_cy'),
        array('EU', NUMERIC, 'te_ssd_pts1_vs_py'),
        array('EV', PUBLICATION_PERIOD, 'te_ssd_timeperiod'),
        
        
        array('EX', NUMERIC, 'te_tccc_waters_py'),
        array('EY', NUMERIC, 'te_tccc_waters_cy'),
        array('EZ', NUMERIC, 'te_waters_py'),
        array('FA', NUMERIC, 'te_waters_cy'),
        array('FB', NUMERIC, 'te_waters_share_py'),
        array('FC', NUMERIC, 'te_waters_share_cy'),
        array('FD', NUMERIC, 'te_waters_pts_vs_py'),
        array('FE', NUMERIC, 'te_waters_share1_py'),
        array('FF', NUMERIC, 'te_waters_share1_cy'),
        array('FG', NUMERIC, 'te_waters_pts1_vs_py'),
        array('FH', PUBLICATION_PERIOD, 'te_waters_timeperiod'),
        
        array('FJ', NUMERIC, 'te_nartd_nartd_tccc_py'),
        array('FK', NUMERIC, 'te_nartd_nartd_tccc_cy'),
        array('FL', NUMERIC, 'te_nartd_nartd_py'),
        array('FM', NUMERIC, 'te_nartd_nartd_cy'),
        array('FN', NUMERIC, 'te_nartd_nartd_share_py'),
        array('FO', NUMERIC, 'te_nartd_nartd_share_cy'),
        array('FP', NUMERIC, 'te_nartd_nartd_pts_vs_py'),
        array('FQ', PUBLICATION_PERIOD, 'te_nartd_nartd_timeperiod'),
        
        
        array('FS', NUMERIC, 'te_energy_tccc_py'),
        array('FT', NUMERIC, 'te_energy_tccc_cy'),
        array('FU', NUMERIC, 'te_energy_nartd_py'),
        array('FV', NUMERIC, 'te_energy_nartd_cy'),
        array('FW', NUMERIC, 'te_energy_share_py'),
        array('FX', NUMERIC, 'te_energy_share_cy'),
        array('FY', NUMERIC, 'te_energy_pts_vs_py'),
        array('FZ', NUMERIC, 'te_energy_share1_py'),
        array('GA', NUMERIC, 'te_energy_share1_cy'),
        array('GB', NUMERIC, 'te_energy_pts1_vs_py'),
        array('GC', PUBLICATION_PERIOD, 'te_energy_timeperiod'),
        
        array('GE', NUMERIC, 'te_juice_tccc_py'),
        array('GF', NUMERIC, 'te_juice_tccc_cy'),
        array('GG', NUMERIC, 'te_juice_nartd_py'),
        array('GH', NUMERIC, 'te_juice_nartd_cy'),
        array('GI', NUMERIC, 'te_juice_share_py'),
        array('GJ', NUMERIC, 'te_juice_share_cy'),
        array('GK', NUMERIC, 'te_juice_pts_vs_py'),
        array('GL', NUMERIC, 'te_juice_share1_py'),
        array('GM', NUMERIC, 'te_juice_share1_cy'),
        array('GN', NUMERIC, 'te_juice_pts1_vs_py'),
        array('GO', PUBLICATION_PERIOD, 'te_juice_timeperiod'),
        
        array('GQ', NUMERIC, 'te_plant_tccc_py'),
        array('GR', NUMERIC, 'te_plant_tccc_cy'),
        array('GS', NUMERIC, 'te_plant_nartd_py'),
        array('GT', NUMERIC, 'te_plant_nartd_cy'),
        array('GU', NUMERIC, 'te_plant_share_py'),
        array('GV', NUMERIC, 'te_plant_share_cy'),
        array('GW', NUMERIC, 'te_plant_pts_vs_py'),
        array('GX', NUMERIC, 'te_plant_share1_py'),
        array('GY', NUMERIC, 'te_plant_share1_cy'),
        array('GZ', NUMERIC, 'te_plant_pts1_vs_py'),
        array('HA', PUBLICATION_PERIOD, 'te_plant_timeperiod'),
        
        array('HC', NUMERIC, 'te_dairy_tccc_py'),
        array('HD', NUMERIC, 'te_dairy_tccc_cy'),
        array('HE', NUMERIC, 'te_dairy_nartd_py'),
        array('HF', NUMERIC, 'te_dairy_nartd_cy'),
        array('HG', NUMERIC, 'te_dairy_share_py'),
        array('HH', NUMERIC, 'te_dairy_share_cy'),
        array('HI', NUMERIC, 'te_dairy_pts_vs_py'),
        array('HJ', NUMERIC, 'te_dairy_share1_py'),
        array('HK', NUMERIC, 'te_dairy_share1_cy'),
        array('HL', NUMERIC, 'te_dairy_pts1_vs_py'),
        array('HM', PUBLICATION_PERIOD, 'te_dairy_timeperiod'),
        
        array('HO', NUMERIC, 'te_tea_tccc_py'),
        array('HP', NUMERIC, 'te_tea_tccc_cy'),
        array('HQ', NUMERIC, 'te_tea_nartd_py'),
        array('HR', NUMERIC, 'te_tea_nartd_cy'),
        array('HS', NUMERIC, 'te_tea_share_py'),
        array('HT', NUMERIC, 'te_tea_share_cy'),
        array('HU', NUMERIC, 'te_tea_pts_vs_py'),
        array('HV', NUMERIC, 'te_tea_share1_py'),
        array('HW', NUMERIC, 'te_tea_share1_cy'),
        array('HX', NUMERIC, 'te_tea_pts1_vs_py'),
        array('HY', PUBLICATION_PERIOD, 'te_tea_timeperiod'),
        
        array('IA', NUMERIC, 'te_sports_tccc_py'),
        array('IB', NUMERIC, 'te_sports_tccc_cy'),
        array('IC', NUMERIC, 'te_sports_nartd_py'),
        array('ID', NUMERIC, 'te_sports_nartd_cy'),
        array('IE', NUMERIC, 'te_sports_share_py'),
        array('IF', NUMERIC, 'te_sports_share_cy'),
        array('IG', NUMERIC, 'te_sports_pts_vs_py'),
        array('IH', NUMERIC, 'te_sports_share1_py'),
        array('II', NUMERIC, 'te_sports_share1_cy'),
        array('IJ', NUMERIC, 'te_sports_pts1_vs_py'),
        array('IK', PUBLICATION_PERIOD, 'te_sports_timeperiod'),
        
        array('IM', NUMERIC, 'te_coffee_tccc_py'),
        array('IN', NUMERIC, 'te_coffee_tccc_cy'),
        array('IO', NUMERIC, 'te_coffee_nartd_py'),
        array('IP', NUMERIC, 'te_coffee_nartd_cy'),
        array('IQ', NUMERIC, 'te_coffee_share_py'),
        array('IR', NUMERIC, 'te_coffee_share_cy'),
        array('IS', NUMERIC, 'te_coffee_pts_vs_py'),
        array('IT', NUMERIC, 'te_coffee_share1_py'),
        array('IU', NUMERIC, 'te_coffee_share1_cy'),
        array('IV', NUMERIC, 'te_coffee_pts1_vs_py'),
        array('IW', PUBLICATION_PERIOD, 'te_coffee_timeperiod'),
        
        array('IY', NUMERIC, 'te_coke_tm_py'),
        array('IZ', NUMERIC, 'te_coke_tm_cy'),
        array('JA', NUMERIC, 'te_coke_tm_nartd_py'),
        array('JB', NUMERIC, 'te_coke_tm_nartd_cy1'),
        array('JC', NUMERIC, 'te_coke_tm_nartd_cy2'),
        array('JD', NUMERIC, 'te_coke_tm_ssd_py'),
        array('JE', NUMERIC, 'te_coke_tm_ssd_cy1'),
        array('JF', NUMERIC, 'te_coke_tm_ssd_cy2'),
        array('JG', PUBLICATION_PERIOD, 'te_coke_tm_timeperiod'),
        
        array('JK', STRING, 'te_ssd_combo'),
        array('JL', STRING, 'te_juice_combo'),
        array('JM', STRING, 'te_plant_based_combo'),
        array('JN', STRING, 'te_dairy_combo'),
        array('JO', STRING, 'te_tea_combo'),
        array('JP', STRING, 'te_water_combo'),
        array('JQ', STRING, 'te_sports_combo'),
        array('JR', STRING, 'te_coffee_combo'),
        array('JS', STRING, 'te_energy_combo'),
        
        array('JV', NUMERIC, 'to_tccc_ssd_py'),
        array('JW', NUMERIC, 'to_tccc_ssd_cy'),
        array('JX', NUMERIC, 'to_ssd_py'),
        array('JY', NUMERIC, 'to_ssd_cy'),
        array('JZ', NUMERIC, 'to_ssd_share_py'),
        array('KA', NUMERIC, 'to_ssd_share_cy'),
        array('KB', NUMERIC, 'to_ssd_pts_vs_py'),
        array('KC', NUMERIC, 'to_ssd_share1_cy'),
        array('KD', NUMERIC, 'to_ssd_share1_py'),
        array('KE', NUMERIC, 'to_ssd_pts1_vs_py'),
        array('KF', PUBLICATION_PERIOD, 'to_ssd_timeperiod'),
        
        array('KH', NUMERIC, 'to_tccc_waters_py'),
        array('KI', NUMERIC, 'to_tccc_waters_cy'),
        array('KJ', NUMERIC, 'to_waters_py'),
        array('KK', NUMERIC, 'to_waters_cy'),
        array('KL', NUMERIC, 'to_waters_share_py'),
        array('KM', NUMERIC, 'to_waters_share_cy'),
        array('KN', NUMERIC, 'to_waters_pts_vs_py'),
        array('KO', NUMERIC, 'to_waters_share1_py'),
        array('KP', NUMERIC, 'to_waters_share1_cy'),
        array('KQ', NUMERIC, 'to_waters_pts1_vs_py'),
        array('KR', PUBLICATION_PERIOD, 'to_waters_timeperiod'),
        
        array('KT', NUMERIC, 'to_nartd_nartd_tccc_py'),
        array('KU', NUMERIC, 'to_nartd_nartd_tccc_cy'),
        array('KV', NUMERIC, 'to_nartd_nartd_py'),
        array('KW', NUMERIC, 'to_nartd_nartd_cy'),
        array('KX', NUMERIC, 'to_nartd_nartd_share_py'),
        array('KY', NUMERIC, 'to_nartd_nartd_share_cy'),
        array('KZ', NUMERIC, 'to_nartd_nartd_pts_vs_py'),
        array('LA', PUBLICATION_PERIOD, 'to_nartd_nartd_timeperiod'),
        
        array('LC', NUMERIC, 'to_energy_tccc_py'),
        array('LD', NUMERIC, 'to_energy_tccc_cy'),
        array('LE', NUMERIC, 'to_energy_nartd_py'),
        array('LF', NUMERIC, 'to_energy_nartd_cy'),
        array('LG', NUMERIC, 'to_energy_share_py'),
        array('LH', NUMERIC, 'to_energy_share_cy'),
        array('LI', NUMERIC, 'to_energy_pts_vs_py'),
        array('LJ', NUMERIC, 'to_energy_share1_py'),
        array('LK', NUMERIC, 'to_energy_share1_cy'),
        array('LL', NUMERIC, 'to_energy_pts1_vs_py'),
        array('LM', PUBLICATION_PERIOD, 'to_energy_timeperiod'),
        
        array('LO', NUMERIC, 'to_juice_tccc_py'),
        array('LP', NUMERIC, 'to_juice_tccc_cy'),
        array('LQ', NUMERIC, 'to_juice_nartd_py'),
        array('LR', NUMERIC, 'to_juice_nartd_cy'),
        array('LS', NUMERIC, 'to_juice_share_py'),
        array('LT', NUMERIC, 'to_juice_share_cy'),
        array('LU', NUMERIC, 'to_juice_pts_vs_py'),
        array('LV', NUMERIC, 'to_juice_share1_py'),
        array('LW', NUMERIC, 'to_juice_share1_cy'),
        array('LX', NUMERIC, 'to_juice_pts1_vs_py'),
        array('LY', PUBLICATION_PERIOD, 'to_juice_timeperiod'),
        
        
        array('MA', NUMERIC, 'to_plant_tccc_py'),
        array('MB', NUMERIC, 'to_plant_tccc_cy'),
        array('MC', NUMERIC, 'to_plant_nartd_py'),
        array('MD', NUMERIC, 'to_plant_nartd_cy'),
        array('ME', NUMERIC, 'to_plant_share_py'),
        array('MF', NUMERIC, 'to_plant_share_cy'),
        array('MG', NUMERIC, 'to_plant_pts_vs_py'),
        array('MH', NUMERIC, 'to_plant_share1_py'),
        array('MI', NUMERIC, 'to_plant_share1_cy'),
        array('MJ', NUMERIC, 'to_plant_pts1_vs_py'),
        array('MK', PUBLICATION_PERIOD, 'to_plant_timeperiod'),
        
        array('MM', NUMERIC, 'to_dairy_tccc_py'),
        array('MN', NUMERIC, 'to_dairy_tccc_cy'),
        array('MO', NUMERIC, 'to_dairy_nartd_py'),
        array('MP', NUMERIC, 'to_dairy_nartd_cy'),
        array('MQ', NUMERIC, 'to_dairy_share_py'),
        array('MR', NUMERIC, 'to_dairy_share_cy'),
        array('MS', NUMERIC, 'to_dairy_pts_vs_py'),
        array('MT', NUMERIC, 'to_dairy_share1_py'),
        array('MU', NUMERIC, 'to_dairy_share1_cy'),
        array('MV', NUMERIC, 'to_dairy_pts1_vs_py'),
        array('MW', PUBLICATION_PERIOD, 'to_dairy_timeperiod'),
        
        array('MY', NUMERIC, 'to_tea_tccc_py'),
        array('MZ', NUMERIC, 'to_tea_tccc_cy'),
        array('NA', NUMERIC, 'to_tea_nartd_py'),
        array('NB', NUMERIC, 'to_tea_nartd_cy'),
        array('NC', NUMERIC, 'to_tea_share_py'),
        array('ND', NUMERIC, 'to_tea_share_cy'),
        array('NE', NUMERIC, 'to_tea_pts_vs_py'),
        array('NF', NUMERIC, 'to_tea_share1_py'),
        array('NG', NUMERIC, 'to_tea_share1_cy'),
        array('NH', NUMERIC, 'to_tea_pts1_vs_py'),
        array('NI', PUBLICATION_PERIOD, 'to_tea_timeperiod'),
        
        array('NK', NUMERIC, 'to_sports_tccc_py'),
        array('NL', NUMERIC, 'to_sports_tccc_cy'),
        array('NM', NUMERIC, 'to_sports_nartd_py'),
        array('NN', NUMERIC, 'to_sports_nartd_cy'),
        array('NO', NUMERIC, 'to_sports_share_py'),
        array('NP', NUMERIC, 'to_sports_share_cy'),
        array('NQ', NUMERIC, 'to_sports_pts_vs_py'),
        array('NR', NUMERIC, 'to_sports_share1_py'),
        array('NS', NUMERIC, 'to_sports_share1_cy'),
        array('NT', NUMERIC, 'to_sports_pts1_vs_py'),
        array('NU', PUBLICATION_PERIOD, 'to_sports_timeperiod'),
        
        array('NW', NUMERIC, 'to_coffee_tccc_py'),
        array('NX', NUMERIC, 'to_coffee_tccc_cy'),
        array('NY', NUMERIC, 'to_coffee_nartd_py'),
        array('NZ', NUMERIC, 'to_coffee_nartd_cy'),
        array('OA', NUMERIC, 'to_coffee_share_py'),
        array('OB', NUMERIC, 'to_coffee_share_cy'),
        array('OC', NUMERIC, 'to_coffee_pts_vs_py'),
        array('OD', NUMERIC, 'to_coffee_share1_py'),
        array('OE', NUMERIC, 'to_coffee_share1_cy'),
        array('OF', NUMERIC, 'to_coffee_pts1_vs_py'),
        array('OG', PUBLICATION_PERIOD, 'to_coffee_timeperiod'),
        
        
        array('OI', NUMERIC, 'to_coke_tm_py'),
        array('OJ', NUMERIC, 'to_coke_tm_cy'),
        array('OK', NUMERIC, 'to_coke_tm_nartd_py'),
        array('OL', NUMERIC, 'to_coke_tm_nartd_cy1'),
        array('OM', NUMERIC, 'to_coke_tm_nartd_cy2'),
        array('ON', NUMERIC, 'to_coke_tm_ssd_py'),
        array('OO', NUMERIC, 'to_coke_tm_ssd_cy1'),
        array('OP', NUMERIC, 'to_coke_tm_ssd_cy2'),
        array('OQ', PUBLICATION_PERIOD, 'to_coke_tm_timeperiod'),
        
        array('OU', STRING, 'to_ssd_combo'),
        array('OV', STRING, 'to_juice_combo'),
        array('OW', STRING, 'to_plant_based_combo'),
        array('OX', STRING, 'to_dairy_combo'),
        array('OY', STRING, 'to_tea_combo'),
        array('OZ', STRING, 'to_water_combo'),
        array('PA', STRING, 'to_sports_combo'),
        array('PB', STRING, 'to_coffee_combo'),
        array('PC', STRING, 'to_energy_combo'),
        
        
        
        
        
       
        
    );
    public static $GscTransaction = array(array('B', NUMERIC, 'total_tccc_py'),
        array('C', NUMERIC, 'total_tccc_cy'),
        array('D', NUMERIC, 'total_tccc_chg_vs_py'),
        array('E', PUBLICATION_PERIOD, 'total_tccc_timeperiod'),
        array('G', NUMERIC, 'tccc_nartd_py'),
        array('H', NUMERIC, 'tccc_nartd_cy'),
        array('I', NUMERIC, 'tccc_nartd_chg_vs_py'),
        array('J', PUBLICATION_PERIOD, 'tccc_nartd_timeperiod'),
        array('L', NUMERIC, 'tccc_ssd_py'),
        array('M', NUMERIC, 'tccc_ssd_cy'),
        array('N', NUMERIC, 'tccc_ssd_chg_vs_py'),
        array('O', PUBLICATION_PERIOD, 'tccc_ssd_timeperiod'),
        array('Q', NUMERIC, 'coke_tm_py'),
        array('R', NUMERIC, 'coke_tm_cy'),
        array('S', NUMERIC, 'coke_tm_chg_vs_py'),
        array('T', PUBLICATION_PERIOD, 'coke_tm_timeperiod'),
        
        array('V', NUMERIC, 'tccc_juice_py'),
        array('W', NUMERIC, 'tccc_juice_cy'),
        array('X', NUMERIC, 'tccc_juice_chg_vs_py'),
        array('Y', PUBLICATION_PERIOD, 'tccc_juice_timeperiod'),
        
        array('AA', NUMERIC, 'tccc_water_py'),
        array('AB', NUMERIC, 'tccc_water_cy'),
        array('AC', NUMERIC, 'tccc_water_chg_vs_py'),
        array('AD', PUBLICATION_PERIOD, 'tccc_water_timeperiod'),
        
        array('AF', NUMERIC, 'tccc_dairy_py'),
        array('AG', NUMERIC, 'tccc_dairy_cy'),
        array('AH', NUMERIC, 'tccc_dairy_chg_vs_py'),
        array('AI', PUBLICATION_PERIOD, 'tccc_dairy_timeperiod'),
        
        array('AK', NUMERIC, 'tccc_plant_based_py'),
        array('AL', NUMERIC, 'tccc_plant_based_cy'),
        array('AM', NUMERIC, 'tccc_plant_based_chg_vs_py'),
        array('AN', PUBLICATION_PERIOD, 'tccc_plant_based_timeperiod'),
        
        array('AP', NUMERIC, 'tccc_sports_py'),
        array('AQ', NUMERIC, 'tccc_sports_cy'),
        array('AR', NUMERIC, 'tccc_sports_chg_vs_py'),
        array('AS', PUBLICATION_PERIOD, 'tccc_sports_timeperiod'),
        
        array('AU', NUMERIC, 'tccc_energy_py'),
        array('AV', NUMERIC, 'tccc_energy_cy'),
        array('AW', NUMERIC, 'tccc_energy_chg_vs_py'),
        array('AX', PUBLICATION_PERIOD, 'tccc_energy_timeperiod'),
        
        array('AZ', NUMERIC, 'tccc_tea_py'),
        array('BA', NUMERIC, 'tccc_tea_cy'),
        array('BB', NUMERIC, 'tccc_tea_chg_vs_py'),
        array('BC', PUBLICATION_PERIOD, 'tccc_tea_timeperiod'),
        
        array('BE', NUMERIC, 'tccc_coffee_py'),
        array('BF', NUMERIC, 'tccc_coffee_cy'),
        array('BG', NUMERIC, 'tccc_coffee_chg_vs_py'),
        array('BH', PUBLICATION_PERIOD, 'tccc_coffee_timeperiod'),
        
        
        
        
    );
    public static $GscMedia = array(array('B', NUMERIC, 'coke_tm_py'),
        array('C', NUMERIC, 'coke_tm_cy'),
        array('D', NUMERIC, 'coke_tm_chg_vs_py'),
        array('E', PUBLICATION_PERIOD, 'coke_tm_timeperiod'),
        array('G', NUMERIC, 'sprite_tm_py'),
        array('H', NUMERIC, 'sprite_tm_cy'),
        array('I', NUMERIC, 'sprite_tm_chg_vs_py'),
        array('J', PUBLICATION_PERIOD, 'sprite_tm_timeperiod'),
        array('L', NUMERIC, 'fanta_tm_py'),
        array('M', NUMERIC, 'fanta_tm_cy'),
        array('N', NUMERIC, 'fanta_tm_chg_vs_py'),
        array('O', PUBLICATION_PERIOD, 'fanta_tm_timeperiod'),
        array('Q', NUMERIC, 'fuze_tm_py'),
        array('R', NUMERIC, 'fuze_tm_cy'),
        array('S', NUMERIC, 'fuze_tm_chg_vs_py'),
        array('T', PUBLICATION_PERIOD, 'fuze_tm_timeperiod'),
    );
    public static $GscMacro = array(array('B', NUMERIC, 'real_pce_py'),
        array('C', NUMERIC, 'real_pce_cy'),
        array('D', NUMERIC, 'real_pce_chg_vs_py'),
        array('E', PUBLICATION_PERIOD, 'real_pce_timeperiod'),
        array('F', NUMERIC, 'nominal_pce_py'),
        array('G', NUMERIC, 'nominal_pce_cy'),
        array('H', NUMERIC, 'nominal_pce_chg_vs_py'),
    );
    public static $GscConsumer = array(array('B', NUMERIC, 'incidence_total_tccc_py'),
        array('C', NUMERIC, 'incidence_total_tccc_cy'),
        array('D', NUMERIC, 'incidence_total_tccc_pts_vs_py'),
        array('E', B3_COLOR, 'incidence_total_tccc_sig_colour'),
        array('F', PUBLICATION_PERIOD, 'incidence_total_tccc_timeperiod'),
        array('H', NUMERIC, 'drinkers_total_tccc_py'),
        array('I', NUMERIC, 'drinkers_total_tccc_cy'),
        array('J', NUMERIC, 'drinkers_total_tccc_pts_vs_py'),
        array('K', B3_COLOR, 'drinkers_total_tccc_sig_colour'),
        array('L', PUBLICATION_PERIOD, 'drinkers_total_tccc_timeperiod'),
        array('N', NUMERIC, 'incidence_tccc_ssd_py'),
        array('O', NUMERIC, 'incidence_tccc_ssd_cy'),
        array('P', NUMERIC, 'incidence_tccc_ssd_pts_vs_py'),
        array('Q', B3_COLOR, 'incidence_tccc_ssd_sig_colour'),
        array('R', PUBLICATION_PERIOD, 'incidence_tccc_ssd_timeperiod'),
        array('T', NUMERIC, 'drinkers_tccc_ssd_py'),
        array('U', NUMERIC, 'drinkers_tccc_ssd_cy'),
        array('V', NUMERIC, 'drinkers_tccc_ssd_pts_vs_py'),
        array('W', B3_COLOR, 'drinkers_tccc_ssd_sig_colour'),
        array('X', PUBLICATION_PERIOD, 'drinkers_tccc_ssd_timeperiod'),
        
        array('Z', NUMERIC, 'cata_tccc_ssd_py'),
        array('AA', NUMERIC, 'cata_tccc_ssd_cy'),
        array('AB', NUMERIC, 'cata_tccc_ssd_pts_vs_py'),
        array('AC', B3_COLOR, 'cata_tccc_ssd_sig_colour'),
        array('AD', PUBLICATION_PERIOD, 'cata_tccc_ssd_timeperiod'),
        
        array('AF', NUMERIC, 'incidence_coketm_py'),
        array('AG', NUMERIC, 'incidence_coketm_cy'),
        array('AH', NUMERIC, 'incidence_coketm_pts_vs_py'),
        array('AI', B3_COLOR, 'incidence_coketm_sig_colour'),
        array('AJ', PUBLICATION_PERIOD, 'incidence_coketm_timeperiod'),
        
        array('AL', NUMERIC, 'drinkers_coketm_py'),
        array('AM', NUMERIC, 'drinkers_coketm_cy'),
        array('AN', NUMERIC, 'drinkers_coketm_pts_vs_py'),
        array('AO', B3_COLOR, 'drinkers_coketm_sig_colour'),
        array('AP', PUBLICATION_PERIOD, 'drinkers_coketm_timeperiod'),
        
        array('AR', NUMERIC, 'ssd_great_tasting_py'),
        array('AS', NUMERIC, 'ssd_great_tasting_cy'),
        array('AT', NUMERIC, 'ssd_great_tasting_pts_vs_py'),
        array('AU', B3_COLOR, 'ssd_great_tasting_sig_colour'),
        array('AV', PUBLICATION_PERIOD, 'ssd_great_tasting_timeperiod'),
        
        
        array('AX', NUMERIC, 'ssd_uplifting_py'),
        array('AY', NUMERIC, 'ssd_uplifting_cy'),
        array('AZ', NUMERIC, 'ssd_uplifting_pts_vs_py'),
        array('BA', B3_COLOR, 'ssd_uplifting_sig_colour'),
        array('BB', PUBLICATION_PERIOD, 'ssd_uplifting_timeperiod'),
        
        array('BD', NUMERIC, 'incidence_tccc_juice_py'),
        array('BE', NUMERIC, 'incidence_tccc_juice_cy'),
        array('BF', NUMERIC, 'incidence_tccc_juice_pts_vs_py'),
        array('BG', B3_COLOR, 'incidence_tccc_juice_sig_colour'),
        array('BH', PUBLICATION_PERIOD, 'incidence_tccc_juice_timeperiod'),
        
        array('BJ', NUMERIC, 'drinkers_tccc_juice_py'),
        array('BK', NUMERIC, 'drinkers_tccc_juice_cy'),
        array('BL', NUMERIC, 'drinkers_tccc_juice_pts_vs_py'),
        array('BM', B3_COLOR, 'drinkers_tccc_juice_sig_colour'),
        array('BN', PUBLICATION_PERIOD, 'drinkers_tccc_juice_timeperiod'),
        
        array('BP', NUMERIC, 'incidence_tccc_water_py'),
        array('BQ', NUMERIC, 'incidence_tccc_water_cy'),
        array('BR', NUMERIC, 'incidence_tccc_water_pts_vs_py'),
        array('BS', B3_COLOR, 'incidence_tccc_water_sig_colour'),
        array('BT', PUBLICATION_PERIOD, 'incidence_tccc_water_timeperiod'),
        
        array('BV', NUMERIC, 'drinkers_tccc_water_py'),
        array('BW', NUMERIC, 'drinkers_tccc_water_cy'),
        array('BX', NUMERIC, 'drinkers_tccc_water_pts_vs_py'),
        array('BY', B3_COLOR, 'drinkers_tccc_water_sig_colour'),
        array('BZ', PUBLICATION_PERIOD, 'drinkers_tccc_water_timeperiod'),
        
        array('CB', NUMERIC, 'incidence_tccc_dairy_py'),
        array('CC', NUMERIC, 'incidence_tccc_dairy_cy'),
        array('CD', NUMERIC, 'incidence_tccc_dairy_pts_vs_py'),
        array('CE', B3_COLOR, 'incidence_tccc_dairy_sig_colour'),
        array('CF', PUBLICATION_PERIOD, 'incidence_tccc_dairy_timeperiod'),
        
        array('CH', NUMERIC, 'drinkers_tccc_dairy_py'),
        array('CI', NUMERIC, 'drinkers_tccc_dairy_cy'),
        array('CJ', NUMERIC, 'drinkers_tccc_dairy_pts_vs_py'),
        array('CK', B3_COLOR, 'drinkers_tccc_dairy_sig_colour'),
        array('CL', PUBLICATION_PERIOD, 'drinkers_tccc_dairy_timeperiod'),
        
        array('CN', NUMERIC, 'incidence_plant_based_py'),
        array('CO', NUMERIC, 'incidence_plant_based_cy'),
        array('CP', NUMERIC, 'incidence_plant_based_pts_vs_py'),
        array('CQ', B3_COLOR, 'incidence_plant_based_sig_colour'),
        array('CR', PUBLICATION_PERIOD, 'incidence_plant_based_timeperiod'),
        
        
        array('CT', NUMERIC, 'drinkers_plant_based_py'),
        array('CU', NUMERIC, 'drinkers_plant_based_cy'),
        array('CV', NUMERIC, 'drinkers_plant_based_pts_vs_py'),
        array('CW', B3_COLOR, 'drinkers_plant_based_sig_colour'),
        array('CX', PUBLICATION_PERIOD, 'drinkers_plant_based_timeperiod'),
        
        array('CZ', NUMERIC, 'incidence_sports_py'),
        array('DA', NUMERIC, 'incidence_sports_cy'),
        array('DB', NUMERIC, 'incidence_sports_pts_vs_py'),
        array('DC', B3_COLOR, 'incidence_sports_sig_colour'),
        array('DD', PUBLICATION_PERIOD, 'incidence_sports_timeperiod'),
        
        array('DF', NUMERIC, 'drinkers_sports_py'),
        array('DG', NUMERIC, 'drinkers_sports_cy'),
        array('DH', NUMERIC, 'drinkers_sports_pts_vs_py'),
        array('DI', B3_COLOR, 'drinkers_sports_sig_colour'),
        array('DJ', PUBLICATION_PERIOD, 'drinkers_sports_timeperiod'),
        
        array('DL', NUMERIC, 'incidence_energy_py'),
        array('DM', NUMERIC, 'incidence_energy_cy'),
        array('DN', NUMERIC, 'incidence_energy_pts_vs_py'),
        array('DO', B3_COLOR, 'incidence_energy_sig_colour'),
        array('DP', PUBLICATION_PERIOD, 'incidence_energy_timeperiod'),
        
        
        array('DR', NUMERIC, 'drinkers_energy_py'),
        array('DS', NUMERIC, 'drinkers_energy_cy'),
        array('DT', NUMERIC, 'drinkers_energy_pts_vs_py'),
        array('DU', B3_COLOR, 'drinkers_energy_sig_colour'),
        array('DV', PUBLICATION_PERIOD, 'drinkers_energy_timeperiod'),
        
        array('DX', NUMERIC, 'incidence_tea_py'),
        array('DY', NUMERIC, 'incidence_tea_cy'),
        array('DZ', NUMERIC, 'incidence_tea_pts_vs_py'),
        array('EA', B3_COLOR, 'incidence_tea_sig_colour'),
        array('EB', PUBLICATION_PERIOD, 'incidence_tea_timeperiod'),
        
        array('ED', NUMERIC, 'drinkers_tea_py'),
        array('EE', NUMERIC, 'drinkers_tea_cy'),
        array('EF', NUMERIC, 'drinkers_tea_pts_vs_py'),
        array('EG', B3_COLOR, 'drinkers_tea_sig_colour'),
        array('EH', PUBLICATION_PERIOD, 'drinkers_tea_timeperiod'),
        
        array('EJ', NUMERIC, 'incidence_coffee_py'),
        array('EK', NUMERIC, 'incidence_coffee_cy'),
        array('EL', NUMERIC, 'incidence_coffee_pts_vs_py'),
        array('EM', B3_COLOR, 'incidence_coffee_sig_colour'),
        array('EN', PUBLICATION_PERIOD, 'incidence_coffee_timeperiod'),
        
        array('EP', NUMERIC, 'drinkers_coffee_py'),
        array('EQ', NUMERIC, 'drinkers_coffee_cy'),
        array('ER', NUMERIC, 'drinkers_coffee_pts_vs_py'),
        array('ES', B3_COLOR, 'drinkers_coffee_sig_colour'),
        array('ET', PUBLICATION_PERIOD, 'drinkers_coffee_timeperiod'),
        
        
    );
    public static $GscFinance = array(array('B', NUMERIC, 'revenue_total_tccc'),
        array('C', NUMERIC, 'gp_total_tccc'),
        array('D', NUMERIC, 'dme_total_tccc'),
        array('E', NUMERIC, 'dmi_total_tccc'),
        array('F', NUMERIC, 'pbt_total_tccc'),
        array('G', NUMERIC, 'revenue_ssd'),
        array('H', NUMERIC, 'revenue_juice'),
        array('I', NUMERIC, 'revenue_vad'),
        array('J', NUMERIC, 'revenue_plant_based'),
        array('K', NUMERIC, 'revenue_water'),
        array('L', NUMERIC, 'revenue_sports'),
        array('M', NUMERIC, 'revenue_tea'),
        array('N', NUMERIC, 'revenue_coffee'),
        array('O', NUMERIC, 'revenue_energy'),
        array('P', NUMERIC, 'revenue_coketm'),
        array('Q', PUBLICATION_PERIOD, 'revenue_timeperiod'),
        array('R', NUMERIC, 'relative_value_share_growth'),
        array('S', NUMERIC, 'dme_gross_profit'),
        array('T', NUMERIC, 'oi_margin'),
        array('U', NUMERIC, 'costa_revenue'),
        array('V', NUMERIC, 'costa_oi'),
        array('W', STRING, 'costa_lce'),
        array('X', STRING, 'lce_timeperiod'),
        array('AA', STRING, 'costa_lce_cmp'),
        array('AB', STRING, 'lce_timeperiod_cmp'),
        array('AC', STRING, 'relative_value_timeperiod'),
        
        
    );
    public static $GscCustomer = array(array('A', NUMERIC, 'current_month_rank'),
        array('B', STRING, 'customer_name'),
        array('C', NUMERIC, 'vs_bp'),
        array('D', NUMERIC, 'vs_ry'),
        array('E', NUMERIC, 'result'),
        array('F', PUBLICATION_PERIOD, 'time_period'),
    );
    
     public static $GscCommercial = array(
         array('B', NUMERIC, 'outlet_universe_py'),
         array('C', NUMERIC, 'outlet_universe_cy'),
         array('D', NUMERIC, 'outlet_universe_chg_vs_py'),
         array('E', NUMERIC, 'tccc_outlets_py'),
         array('F', NUMERIC, 'tccc_outlets_cy'),
         array('G', NUMERIC, 'tccc_outlets_chg_vs_py'),
         array('H', NUMERIC, 'outlet_coverage_py'),
         array('I', NUMERIC, 'outlet_coverage_cy'),
         array('J', NUMERIC, 'outlet_coverage_chg_vs_py'),
         array('K', NUMERIC, 'available_ic_py'),
         array('L', NUMERIC, 'available_ic_cy'),
         array('M', NUMERIC, 'available_ic_chg_vs_py'),
         array('N', NUMERIC, 'affordable_ic_py'),
         array('O', NUMERIC, 'affordable_ic_cy'),
         array('P', NUMERIC, 'affordable_ic_chg_vs_py'),
         array('Q', NUMERIC, 'coketm_py'),
         array('R', NUMERIC, 'coketm_cy'),
         array('S', NUMERIC, 'coketm_chg_vs_py'),
         array('T', NUMERIC, 'total_tccc_py'),
         array('U', NUMERIC, 'total_tccc_cy'),
         array('V', NUMERIC, 'total_tccc_chg_vs_py'),
         array('W', NUMERIC, 'total_market_py'),
         array('X', NUMERIC, 'total_market_cy'),
         array('Y', NUMERIC, 'total_market_chg_vs_py'),
         array('Z', NUMERIC, 'sovi_py'),
         array('AA', NUMERIC, 'sovi_cy'),
         array('AB', NUMERIC, 'sovi_chg_vs_py'),
         array('AC', NUMERIC, 'som_py'),
         array('AD', NUMERIC, 'som_cy'),
         array('AE', NUMERIC, 'som_chg_vs_py'),
         array('AF', NUMERIC, 'sovi_som_py'),
         array('AG', NUMERIC, 'sovi_som_cy'),
         array('AH', NUMERIC, 'sovi_som_chg_vs_py'),
         array('AI', NUMERIC, 'sovi_ssd_py'),
         array('AJ', NUMERIC, 'sovi_ssd_cy'),
         array('AK', NUMERIC, 'sovi_ssd_chg_vs_py'),
         array('AL', NUMERIC, 'som_ssd_py'),
         array('AM', NUMERIC, 'som_ssd_cy'),
         array('AN', NUMERIC, 'som_ssd_chg_vs_py'),
         array('AO', NUMERIC, 'sovi_som_ssd_py'),
         array('AP', NUMERIC, 'sovi_som_ssd_cy'),
         array('AQ', NUMERIC, 'sovi_som_ssd_chg_vs_py'),
         array('AR', NUMERIC, 'population_py'),
         array('AS', NUMERIC, 'population_cy'),
         array('AT', NUMERIC, 'population_chg_vs_py'),
         array('AU', NUMERIC, 'ko_cde_py'),
         array('AV', NUMERIC, 'ko_cde_cy'),
         array('AW', NUMERIC, 'ko_cde_chg_vs_py'),
         array('AX', NUMERIC, 'priority_growth_py'),
         array('AY', NUMERIC, 'priority_growth_cy'),
         array('AZ', NUMERIC, 'priority_growth_chg_vs_py'),
         array('BA', PUBLICATION_PERIOD, 'time_period'),
         
    );
     
     
     
 

}