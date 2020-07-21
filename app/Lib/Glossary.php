<?php

class Glossary {

    public static function getMailContent() {
        return array(
            'In case of questions or feedback, please contact: ', 'MAILIDS' => array(
                array('Martin Egger', 'megger@coca-cola.com'),
                array('Liz Morales', 'limorales@coca-cola.com'),
                array('GPD.Team', 'GPD.Team@wns.com'))
        );
    }

    public static function getBeverageDefinations() {
        return array('BEVERAGE DEFINITIONS' => array(
                'NARTD'      => 'Sum of Sparkling Soft Drinks, Waters (excluding Bulk & Pouch), Juices, Sports Drinks, Energy Drinks, RTD Tea and RTD Coffee.',
                'Sparkling Soft Drinks'  => 'SSD or formerly known as Carbonated Soft Drinks (CSD) or Core Sparkling (CSp)',
                'Coca-Cola TM'    => 'Coca-Cola Trademark or all Coca-Cola brands (regular, light, zero, life, flavors) consolidated;  Coca-Cola = Coca-Cola Red or Coca-Cola Classic',
                'Stills ex Water' => 'NARTD less Sparkling Soft Drinks category less Waters category; or sum of Juices, Sports Drinks, Energy Drinks, RTD Tea and RTD Coffee.',
                'Waters'  => 'Includes Packaged Water (excluding Bulk & Pouch) and Enhanced Water Beverages',
        ));
    }

    public static function getMainHeads() {
        return array('Metric Name', 'Business Question to address', 'Metric Definition', 'Units',
            'Period', 'Data Source', 'Global Data Owner', 'Comments'
        );
    }

    public static function getMetricesContent() {
        return array(
            array('PERFORMANCE METRICS' => array(
                    'data' => array(
                        array(
                            'heads'   => array(
                                array('Name' => 'TCCC Financials'),
                                array('Name' => 'Cycling'),
                                array('Name' => 'YTD'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'TCCC  Sales Value',
                                'How much are we growing in value within Industry',
                                'NARTD All Channels Sales Value',
                                '% Growth vs. PY',
                                'Prior year',
                                'Current year',
                                'Latest YTD',
                                'GWC (For YTD);&#10;QVVR (For Qtr);&#10;IE (For Annual)',
                                'Corporate - MS&I',
                                '')
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => ''),
                                array('Name' => 'FY  RE or ACT'),
                                array('Name' => 'FY BP'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'CN Net Revenue',
                                'How is our top-line business performing? Will TCCC revenue estimates be in line with BP targets?',
                                'TCCC Operational Net Revenue %Growth in US$ Currency Neutral. Formula: (CY Operational Net Revenue currency neutral to PY / PY Operational Net Revenue Actual)-1',
                                '% Growth vs. PY',
                                'FY  RE or ACTUALS',
                                'BP Full year',
                                'Full Year',
                                'BOFC',
                                'Corporate - Finance',
                                'Operational NSR (and price mix) excludes accounting entries: put options, GPIE (equity), mktg deductions fallout and sales curve',
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Net Revenue per Case',
                                'How much revenue does TCCC receive per UC? Is it in line with BP target?',
                                'TCCC Operational Net Revenue per case in US$ Currency Neutral. Formula: CY TCCC Operational Net Revenue CN to PY / CY unit cases',
                                '# US Dollars',
                                'FY  RE or ACTUALS',
                                'BP Full year',
                                'Full Year',
                                'BOFC',
                                'Corporate - Finance',
                                'Refer to formal Policy SPP 3.4, regarding Income Statement Variance Calculation',
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                '%Gross Profit Margin',
                                'What is the % of revenue we keep after we have paid for the cost of the product we sold? Is it in line with BP Targets?',
                                'TCCC Gross Profit Margin.Formula: CY Gross Profit CN to PY / CY Operational Net Revenue CN to PY',
                                '%',
                                'FY  RE or ACTUALS',
                                'BP Full year',
                                'Full Year',
                                'BOFC',
                                'Corporate - Finance',
                                'Refer to formal Policy SPP 3.4, regarding Income Statement Variance Calculation',
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Brand Contribution',
                                'What is our brand contribution? Are we in line with BP targets?',
                                'TCCC Brand Contribution Growth in US$ CN',
                                '% Growth vs. PY',
                                'FY  RE or ACTUALS',
                                'BP Full year',
                                'Full Year',
                                'BOFC',
                                'Corporate - Finance',
                                '',
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Profit Before Tax',
                                'How much is our Profit Before tax? Is it in line with BP targets?',
                                'TCCC Profit Before Tax',
                                '% Growth vs. PY',
                                'FY  RE or ACTUALS',
                                'BP Full year',
                                'Full Year',
                                'BOFC',
                                'Corporate - Finance',
                                'Data only for Total Business unit levels',
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Volume',
                                'How do we expect to end the year in terms of volume and will it be in line with BP targets?',
                                'TCCC Full Year Volume %Growth in unit cases',
                                '% Growth vs. PY',
                                'FY  RE or ACTUALS',
                                'BP Full year',
                                'Full Year',
                                'BOFC',
                                'Corporate - Finance',
                                '',
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => ''),
                                array('Name' => 'Cycling'),
                                array('Name' => 'YTD'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'Volume',
                                'How is our business evolving in terms of volume?',
                                'TCCC Volume %Growth in Unit Cases vs. Prior Year',
                                '%ADS vs PY&#10;(for YTD);&#10;%As Reported vs PY (for FY)',
                                'Prior year',
                                'Current year',
                                'Latest YTD',
                                'Internal - Compass GCS',
                                'Corporate - Finance',
                                '',
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Transactions',
                                'Are we driving transactions?',
                                'TCCC Transactions %Growth vs. Prior Year. &#10; Note: Count each SKU sold as one transaction - (Multipacks counts also a single transaction)',
                                '%ADS  vs PY(for YTD);&#10;%As Reported vs PY ( for FY)',
                                'Prior year',
                                'Current year',
                                'Latest YTD',
                                'Internal - Compass GCS',
                                'Corporate - Finance'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'TCCC Share'),
                                array('Name' => 'YTD'),
                                array('Name' => 'vs.PY'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'Value Share: NARTD',
                                'How much is our value share over NARTD? Are we performing above competitors? ',
                                'TCCC % Value Share within NARTD',
                                '%',
                                'Year to Date',
                                'Share Point Change vs PY',
                                'Latest YTD',
                                'GWC  (For YTD)&#10;QVVR ( For Qtr)&#10;IE (For Annual)',
                                'Corporate - MS&I',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Value Share: Sparkling Soft Drinks',
                                'How much is our value share over SSD (formerly CSD or CSp)? Are we performing above competitors?',
                                'TCCC % Value Share within Sparkling Soft Drinks',
                                '%',
                                'Year to Date',
                                'Share Point Change vs PY',
                                'Latest YTD',
                                'GWC  (For YTD)&#10;QVVR ( For Qtr)&#10;IE (For Annual)',
                                'Corporate - MS&I'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Value Share : Stills Ex Water',
                                'How much is our value share over Stills excluding Water? Are we performing above competitors? ',
                                'TCCC % Value Share within Stills excluding Water',
                                '%',
                                'Year to Date',
                                'Share Point Change vs PY',
                                'Latest YTD',
                                'GWC  (For YTD)&#10;QVVR ( For Qtr)&#10;IE (For Annual)',
                                'Corporate - MS&I'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Value Share : Waters',
                                'How much is our value share over Packaged Water? Are we performing above competitors? ',
                                'TCCC % Value Share within Packaged Water',
                                '%',
                                'Year to Date',
                                'Share Point Change vs PY',
                                'Latest YTD',
                                'GWC  (For YTD)&#10;QVVR ( For Qtr)&#10;IE (For Annual)',
                                'Corporate - MS&I'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Volume Share: NARTD',
                                'How much is our volume share over NARTD? Are we performing above competitors? ',
                                'TCCC % Volume Share within NARTD',
                                '%',
                                'Year to Date',
                                'Share Point Change vs PY',
                                'Latest YTD',
                                'GWC  (For YTD)&#10;QVVR ( For Qtr)&#10;IE (For Annual)',
                                'Corporate - MS&I'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Volume Share: Sparkling Soft Drinks',
                                'How much is our volume share over SSD (formerly CSD or CSp)? Are we performing above competitors? ',
                                'TCCC % Volume Share within Sparkling Soft Drinks',
                                '%',
                                'Year to Date',
                                'Share Point Change vs PY',
                                'Latest YTD',
                                'GWC  (For YTD)&#10;QVVR ( For Qtr)&#10;IE (For Annual)',
                                'Corporate - MS&I'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Volume Share : Stills Ex Water',
                                'How much is our volume share over Stills excluding Water? Are we performing above competitors? ',
                                'TCCC % Volume Share within Stills excluding Water',
                                '%',
                                'Year to Date',
                                'Share Point Change vs PY',
                                'Latest YTD',
                                'GWC  (For YTD)&#10;QVVR ( For Qtr)&#10;IE (For Annual)',
                                'Corporate - MS&I',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Volume Share :  Waters',
                                'How much is our volume share over Packaged Water? Are we performing above competitors? ',
                                'TCCC % Volume Share within Packaged  Water',
                                '%',
                                'Year to Date',
                                'Share Point Change vs PY',
                                'Latest YTD',
                                'GWC  (For YTD)&#10;QVVR ( For Qtr)&#10;IE (For Annual)',
                                'Corporate - MS&I'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'Consumers'),
                                array('Name' => '3MMT or FY'),
                                array('Name' => 'vs.PY'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'All - Incidence (%P4W) : Coke TM',
                                'Are we able to capture more consumers within the Total Population?',
                                'Past 4 weeks consumers over Total Population (12-49 yo.) - Coke TM',
                                '%',
                                '3MMT&#10;(For Monthly)&#10;Full Year&#10;(For Annual)',
                                'Point Change vs PY',
                                'Latest 3MMT or Year',
                                'B3/BGS/BEV360',
                                'Corporate - MS&I',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'All - %Weekly+ : Coke TM',
                                'Are our consumers increasing their frequency of consumption?',
                                'Weekly+ consumers over Total Population (12-49 yo.) - Coke TM',
                                '%',
                                '3MMT&#10;(For Monthly)&#10;Full Year&#10;(For Annual)',
                                'Point Change vs PY',
                                'Latest 3MMT or Year',
                                'B3/BGS/BEV360',
                                'Corporate - MS&I',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Teens - Incidence (%P4W) : Coke TM',
                                'Are we able to capture more consumers within Teens?',
                                'Past 4 weeks consumers over teens (12-19 yo.) - Coke TM',
                                '%',
                                '3MMT&#10;(For Monthly)&#10;Full Year&#10;(For Annual)',
                                'Point Change vs PY',
                                'Latest 3MMT or Year',
                                'B3/BGS/BEV360',
                                'Corporate - MS&I'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Teens - %Weekly+ : Coke TM',
                                'Are our teens increasing their frequency of consumption?',
                                'Weekly+ consumers over teens (12-19 yo.) - Coke TM',
                                '%',
                                '3MMT&#10;(For Monthly)&#10;Full Year&#10;(For Annual)',
                                'Point Change vs PY',
                                'Latest 3MMT or Year',
                                'B3/BGS/BEV360',
                                'Corporate - MS&I'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'Household Panel'),
                                array('Name' => 'Qtr or 12MMT'),
                                array('Name' => 'vs.PY'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'HH Penetration - Coke TM',
                                'Are we increasing the number of HH who buy Coke TM?',
                                '% Households buying Coke TM (Shopper Incidence)',
                                '%',
                                'Quarter &#10;(For Qtrly)&#10;12MMT&#10;(For Annual)',
                                'Point Change vs PY',
                                '3MMT Qtr &#10; (For Qtrly)&#10; 12MMT&#10; (For Annual)',
                                'Kantar/Nielsen/&#10;Local Supplier',
                                'Corporate - MS&I',
                                'Japan - INTAGE'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Liters per HH - Coke TM',
                                'Are we driving Coke TM consumption per buyer?',
                                'Average # of liters per Household buying Coke TM (Volume in liters / Buyers)',
                                'Liters',
                                'Quarter &#10;(For Qtrly)&#10;12MMT&#10;(For Annual)',
                                '% Growth vs PY',
                                '3MMT Qtr &#10; (For Qtrly)&#10; 12MMT&#10; (For Annual)',
                                'Kantar/Nielsen/&#10;Local Supplier',
                                'Corporate - MS&I',
                                'Japan - INTAGE'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Basket Incidence - Coke TM',
                                'Are we increasing the number of baskets in which Coke TM is present?',
                                '% of baskets containing Coke TM over all FMCG baskets (exclude fresh products)',
                                '%',
                                'Quarter &#10;(For Qtrly)&#10;12MMT&#10;(For Annual)',
                                'Point Change vs PY',
                                '3MMT Qtr &#10; (For Qtrly)&#10; 12MMT&#10; (For Annual)',
                                'Kantar/Nielsen/&#10;Local Supplier',
                                'Corporate - MS&I',
                                'Japan - INTAGE'
                            )
                        ),
                    )
                ),
            ),
            array('EXTERNAL ENVIRONMENT' => array(
                    'data' => array(
                        array(
                            'heads'   => array(
                                array('Name' => ''),
                                array('Name' => 'IHS FY FC'),
                                array('Name' => 'RB FY BP'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'PCE',
                                'Is the Private Consumption a headwind or a tailwind for our business?',
                                'Private Consumption %Growth. &#10; Formula: (CY PCE/PY PCE)-1',
                                '% Growth vs. PY',
                                'Last FY Forecast available',
                                'BP Full year',
                                'Full Year',
                                'Forecast from IHS &#10; BP data from Redbook',
                                'Corporate Strategy&#10;BU Redbook',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'CPI/Inflation',
                                'How much are consumer prices changing in average? Is this above or below our BP estimates?',
                                'Consumer Price Index or Inflation rate.  &#10; Formula: (CY CPI/PY CPI)-1',
                                '% Growth vs. PY',
                                'Last FY Forecast available',
                                'BP Full year',
                                'Full Year',
                                'Forecast from IHS &#10; BP data from Redbook',
                                'Corporate Strategy&#10;BU Redbook',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Unemployment',
                                'Is the Unemployment a headwind or a tailwind for our business?',
                                '% of People unemployed over Active Population.  &#10; Formula: Unemployed Population/Labor Force',
                                '%',
                                'Last FY Forecast available',
                                'BP Full year',
                                'Full Year',
                                'Forecast from IHS  &#10; BP data from BU',
                                'Corporate Strategy',
                                'BP data from BU',
                                ''
                            )
                        )
                    )
                ),
            ),
            array('COMMERCIAL EXECUTION' => array(
                    'data' => array(
                        array(
                            'heads'   => array(
                                array('Name' => 'Execution'),
                                array('Name' => 'Latest'),
                                array('Name' => 'vs.PY'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'Outlet Coverage',
                                'Opening up outlets commensurate with our desire for growth',
                                'Number of outlets selling TCCC products across all channels and RTMs divided by the universe of all FMCG outlets quantified or projected annually.&#10; Outlet Universe : Global definition of all FMCG, on premise, at work and any other commercial establishments. Outlets offering TCCC products, served directly or indirectly by TCCC Bottlers and RTM models.',
                                '%',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10;Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Universe Outlets',
                                'Total number of FMCG outlets (supermarket, hypermarket, traditional store, club store, drug store, pharmacy, petrol station, c-store, etc.)',
                                'Outlet Universe : Global definition of all FMCG, on premise, at work and any other commercial establishments',
                                '#',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10;Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'TCCC Outlets',
                                'Total number of FMCG outlets offering TCCC products (supermarket, hypermarket, traditional store, club store, drug store, pharmacy, petrol station, c-store, etc.)',
                                'Outlets offering TCCC products, served directly or indirectly by TCCC Bottlers and RTM models',
                                '#',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'Available & Affordable Entry Pack'),
                                array('Name' => ''),
                                array('Name' => ''),
                                array('Name' => ''),
                            ),
                            'content' => array(
                                'Num Distribution Entry Packs',
                                'Wide distribution of priced-right recruitment packs',
                                'Numeric distribution of Coca-Cola brand SKUs in 300ml or less',
                                '%',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                "Num Dist'n Affordable Entry Packs",
                                'Wide distribution of priced-right recruitment packs',
                                'Numeric distribution of Coca-Cola brand SKUs in 300ml or less AND priced at entry price of 2% to 6% of Daily Disposable Income',
                                '%',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'Pricing'),
                                array('Name' => ''),
                                array('Name' => ''),
                                array('Name' => ''),
                            ),
                            'content' => array(
                                'Coke TM Price vs SSD',
                                'To what extent Coke TM is premium priced vs. Sparkling Soft Drinks (formerly Carbonated Soft Drinks)?',
                                'Average price per unit of Coke TM divided by the Average price of the Total Sparkling Soft Drinks Category less Coke TM',
                                'Index',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'Out of Stocks (OOS)'),
                                array('Name' => ''),
                                array('Name' => ''),
                                array('Name' => ''),
                            ),
                            'content' => array(
                                'Out of Stocks (OOS)',
                                'Products are available on the shelves and in the coolers at all times',
                                'Volume lost to OOS of all KO NARTD SKUs in outlet. Formula: OOS is a calculated figure which shows OOS volume opportunity: OOS Volume = Volume sales per point of weighted distribution x OOS Weighted distribution.  Sum “OOS vol” for all TCCC items within a country by channel, and then calculate OOS vol share: OOS vol share = OOS equivalent volume / Total TCCC volume',
                                '%',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'Cold Drink Equipment'),
                                array('Name' => ''),
                                array('Name' => ''),
                                array('Name' => ''),
                            ),
                            'content' => array(
                                'Total KO CDE',
                                'How many total Cold Drink Equipments are present',
                                'Cold Drink Equipment = Coolers + Vending + Dispensers (fountain)',
                                '#',
                                'Latest available',
                                '% Growth vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(
                            ),
                            'content' => array(
                                'KO CDE/10K',
                                'What is the number of KO cold drink equipment per 10K?',
                                'Total KO Cold Drink Equipment / (UN Population / 10000)',
                                '#',
                                'Latest available',
                                '% Growth vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'SOVI/SOM - NARTD/SSD'),
                                array('Name' => ''),
                                array('Name' => ''),
                                array('Name' => ''),
                            ),
                            'content' => array(
                                'SOVI:SOM Ratio - NARTD',
                                'Fair share of space (SOVI) vs. our share of market (SOM) in NARTD?',
                                'Formula: TCCC Share of Visible Inventory(SOVI) for NARTD /TCCC Share of Market(SOM) for NARTD.',
                                '#',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'SOVI - NARTD',
                                'What is the Share of Visible Inventory?',
                                'SOVI is % of Space in a store dedicated to TCCC NARTD products compared to NARTD competitors - Home channel (Space measured in length metrics i.e. meters); recommended Global criteria is Number of Facings.',
                                '% ',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'SOVI:SOM Ratio - Sparkling Soft Drinks',
                                'Fair share of space (SOVI) vs. our share of market (SOM) in Sparkling Soft Drinks (formerly Carbonated Soft Drinks)?',
                                'Formula: TCCC Share of Visible Inventory(SOVI) for Sparkling Soft Drinks /TCCC Share of Market(SOM) for Sparkling Soft Drinks.',
                                '#',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'SOVI - Sparkling Soft Drinks',
                                'What is the Share of Visible Inventory?',
                                'SOVI is % of Space in a store dedicated to TCCC Sparkling Soft Drinks products compared to Sparkling Soft Drinks competitors - Home channel (Space measured in length metrics i.e. meters); recommended Global criteria is Number of Facings.',
                                '% ',
                                'Latest available',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Commercial Metrics',
                                'Corporate - &#10; Commercial Team',
                                'Sourced from commercial metrics system. Any correction of this data is to be managed through the commercial metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'Other Commercial Metrics'),
                                array('Name' => 'YTD'),
                                array('Name' => 'BP'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'Average Price: Coke TM',
                                'Is TCCC price / mix strategy allowing the System to increase consumer prices?',
                                'TCCC Sparkling Soft Drinks (formerly CSD or CSp) consumer average price - Home channel.',
                                '% Growth vs. PY',
                                'Year to Date',
                                '% Growth vs PY',
                                'Latest YTD',
                                'Nielsen',
                                'Corporate - MS&I'
                            )
                        ),
                    )
                ),
            ),
            array('QUANTITY OF MARKETING' => array(
                    'data' => array(
                        array(
                            'heads'   => array(
                                array('Name' => 'TCCC DMI'),
                                array('Name' => 'FY  RE or ACT'),
                                array('Name' => 'FY BP'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'Total DMI (CN US$)',
                                'How much money will we invest in marketing? Are we in line with BP targets?',
                                'TCCC Total DMI Growth in US$ CN',
                                '% Growth vs. PY',
                                'FY  RE or ACTUALS',
                                'BP Full year',
                                'Full Year',
                                'Internal',
                                'Corporate Finance',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Refuel Rate',
                                'How much of our gross profit do we reinvest into marketing?',
                                'DMI / Gross Profit',
                                '%',
                                'FY  RE or ACTUALS',
                                'BP Full year',
                                'Full Year',
                                'Internal',
                                'Corporate Finance',
                                'Use new 2015 General Ledger codes.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'All Media DMI (CN US$)',
                                'How much money will we invest in media? Are we in line with BP targets?',
                                'TCCC Media Investment Growth in US$ CN - (Excluding production and agency fees)',
                                '% Growth vs. PY',
                                'FY  RE or ACTUALS',
                                'BP Full year',
                                'Full Year',
                                'Internal',
                                'Corporate Finance',
                                'Use new 2015 General Ledger codes.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                '% All Media DMI over Total DMI',
                                'What is the share of media in Total DMI? Are we in line with BP targets?',
                                'Media DMI (excluding production and agency fees) as a % of Total DMI',
                                '%',
                                'FY  RE or ACTUALS',
                                'BP Full year',
                                'Full Year',
                                'Internal',
                                'Corporate Finance',
                                'Use new 2015 General Ledger codes.'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'System Media Investment'),
                                array('Name' => 'FY  RE or ACT'),
                                array('Name' => 'FY PROJECTIONS'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'System TV Media Investment (CN US$)',
                                'How much are we investing  in TV? Are we in line with BP targets?',
                                'TCCC TV Media Investment Growth in US$ CN - excluding production and agency fees',
                                '% Growth vs. PY',
                                'FY  RE or ACTUALS',
                                'Projections Full year',
                                'Full Year',
                                'Connections & Media Portal',
                                'Corp.- Connections & Media',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'System Digital Media Investment (CN US$)',
                                'How much are we investing in Digital? Are we in line with BP targets?',
                                'TCCC Digital Media Investment Growth in US$ CN - excluding production and agency fees (Digital includes Web, Social, Search, Online Video, Mobile)',
                                '% Growth vs. PY',
                                'FY  RE or ACTUALS',
                                'Projections Full year',
                                'Full Year',
                                'Connections & Media Portal',
                                'Corp.- Connections & Media',
                                'Use new 2015 General Ledger codes.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'TV Media Industry Inflation',
                                'What is the increase in the cost of airing TV ads for TCCC?',
                                'Average expected cost per GRP increase for TCCC.',
                                '% Growth vs. PY',
                                'FY  RE or ACTUALS',
                                'Projections Full year',
                                'Full Year',
                                'Internal',
                                'Local Markets',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'Core Media Metrics'),
                                array('Name' => 'YTD'),
                                array('Name' => 'vs.PY'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'Reuse Rate',
                                'Are we sharing content effectively?',
                                'Formula: TVC Media spend on re-use  / Total TVC Media Spend &#10; Description of re-use categories: Rerun= Zero changes in content, ad is run as is subject to rights agreements.   Reshoot= Same script and storyboard but different actors and/or other local modifications.  Adaptation=Adapt ad to local market (E.g.: replace landmark in background with local landmark).  Non-reuse category is Local= New content',
                                '%',
                                'Year to Date',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Connections & Media Portal',
                                'Corporate - Connections & Media',
                                'Sourced from Media metrics system. Any correction of this data is to be managed through the Media metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Coke TM # Impressions',
                                'How many message impressions have we delivered with TV Ads?',
                                "Total TV impressions delivered (30 sec equivalent for 12-49 audience, GRP's multiplied by population)",
                                '#',
                                'YTD impressions (Absolute)',
                                '% Growth vs PY',
                                'Latest YTD',
                                'Connections & Media Portal',
                                'Corporate - Connections & Media',
                                'Sourced from Media metrics system. Any correction of this data is to be managed through the Media metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(),
                            'content' => array(
                                'Coke TM # Weeks on air',
                                'How many weeks of the year are we on Paid Media(TV, Radio, Print, OOH, Cinema & Online Video)?',
                                '# of Weeks/Year TCCC will air advertising of our brands in on Paid Media(TV, Radio, Print, OOH, Cinema & Online Video).',
                                '#Weeks',
                                'YTD # of Weeks (Absolute)',
                                'Absolute growth in # weeks',
                                'Latest YTD',
                                'Connections & Media Portal',
                                'Corporate - Connections & Media',
                                'Sourced from Media metrics system. Any correction of this data is to be managed through the Media metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => 'TV Share of Voice'),
                                array('Name' => 'YTD'),
                                array('Name' => 'vs.PY'),
                                array('Name' => 'Time Period')
                            ),
                            'content' => array(
                                'over Sparkling Soft Drinks',
                                'What is TCCC Share of TV messages relative to Sparkling Soft Drinks (formerly CSD or CSp) competitors?',
                                "TCCC GRP's in Sparkling Soft Drinks / Total Industry GRP's in Sparkling Soft Drinks",
                                '%',
                                'Year to Date',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Internal',
                                'Local Markets',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(
                            ),
                            'content' => array(
                                'over NARTD',
                                'What is TCCC Share of TV messages relative to NARTD competitors?',
                                "TCCC GRP's in NARTD / Total Industry GRP's in NARTD",
                                '%',
                                'Year to Date',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Internal',
                                'Local Markets',
                                ''
                            )
                        ),
                    )
                ),
            ),
            array('QUALITY OF MARKETING' => array(
                    'data' => array(
                        array(
                            'heads'   => array(
                                array('Name' => ''),
                                array('Name' => '3MMT or FY'),
                                array('Name' => 'vs.PY'),
                                array('Name' => 'Time Period'),
                            ),
                            'content' => array(
                                'BLS Score - Coke',
                                'What is the level of engagement of consumers with Coca-Cola?',
                                'Brand Love Score - Coca-Cola - Total Population (12-49 yo.)',
                                'Absolute Value',
                                '3MMT (For Monthly)  &#10; FY (For Annual)',
                                'Point Change vs PY',
                                'Latest 3MMT or Year',
                                'B3/BGS/BEV360',
                                'Corporate - MS&I',
                                ''
                            )
                        ),
                        array(
                            'heads'   => array(
                            ),
                            'content' => array(
                                'CATA Score - SSD',
                                'What is the level of engagement of consumers with the Sparkling Soft Drinks (formerly CSD or CSp) Category?',
                                'Category Approval Score - Sparkling Soft Drinks - Total Population (12-49 yo.)',
                                'Absolute Value',
                                '3MMT (For Monthly) &#10; FY (For Annual)',
                                'Point Change vs PY',
                                'Latest 3MMT or Year',
                                'B3/BGS/BEV360',
                                'Corporate - MS&I'
                            )
                        ),
                        array(
                            'heads'   => array(
                            ),
                            'content' => array(
                                'CORA Score - TCCC',
                                'What is the level of engagement of consumers with TCCC?',
                                'Corporate Approval Score - TCCC - Total Population (12-49 yo.)',
                                'Absolute Value',
                                '3MMT (For Monthly)  &#10; FY (For Annual)',
                                'Point Change vs PY',
                                'Latest 3MMT or Year',
                                'B3/BGS/BEV360',
                                'Corporate - MS&I'
                            )
                        ),
                        array(
                            'heads'   => array(
                                array('Name' => ''),
                                array('Name' => 'YTD'),
                                array('Name' => 'vs.PY'),
                                array('Name' => 'Time Period')
                            ),
                            'content' => array(
                                'ONS(Weighted by GRPs)',
                                'What is the quality of TV messaging?',
                                'Impression weighted ONS using 12-49 TRPs(30 sec Equivalent)',
                                'Average ONS',
                                'Year to Date',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Connections & Media Portal',
                                'Corp.- Connections & Media',
                                'Sourced from Media metrics system. Any correction of this data is to be managed through the Media metrics system process.'
                            )
                        ),
                        array(
                            'heads'   => array(
                            ),
                            'content' => array(
                                'Impression test thru Link',
                                'How much of our impressions aired are tested?',
                                '12-49 impressions tested/Total 12-49 impressions aired',
                                '%',
                                'Year to Date',
                                'Point Change vs PY',
                                'Latest YTD',
                                'Connections & Media Portal',
                                'Corp.- Connections & Media',
                                'Sourced from Media metrics system. Any correction of this data is to be managed through the Media metrics system process.'
                            )
                        ),
                    )
                ),
            ),
        );
    }

}
