<style>
    .accordian-inner-txt-lft{
        width: 73% !important;
    }
    .accordian-inner-txt-rht{
        width: 23%
    }
</style>
<div class="summary-wrapper-content border-bottom-remove top-border">
    <div class="summary-table">
        <div class="accordian-above-txt white">
            <h2 style="background-color: #A6AAA8">GLOSSARY</h2>
            <p>The purpose of this country Dashboard is to create a shared understanding on how our marketing is contributing to our business performance.</p>
            <p class="margin-top15">This Dashboard will be produced once a quarter and will be shared with the Global Marketing Executive Committee. Currently the Dashboard is only available for key markets. We are working to be able to provide Dashboards for more markets, clusters, brands in the course of the year.</p>
            <p class="margin-top15">In case of questions or feedback, please contact:</p>
            <p class="margin-top15">Martin Egger <a href="mailto:megger@coca-cola.com" target="_top">megger@coca-cola.com</a></p>
            <p class="margin-top15">Liz Morales <a href="mailto:limorales@coca-cola.com" target="_top">limorales@coca-cola.com</a></p>
            <p class="margin-top15">GPD.Team <a href="mailto:GPD.Team@wns.com" target="_top">GPD.Team@wns.com</a></p>

            <h2 style="background-color: #A6AAA8">BEVERAGE DEFINITIONS</h2>
            <p>NARTD = Sum of Sparkling Soft Drinks, Waters (excluding Bulk & Pouch), Juices, Sports Drinks, Energy Drinks, RTD Tea and RTD Coffee</p>
            <p class="margin-top15">Sparkling Soft Drinks = SSD or formerly known as Carbonated Soft Drinks (CSD) or Core Sparkling (CSp)</p>
            <p class="margin-top15">Coca-Cola TM = Coca-Cola Trademark or all Coca-Cola brands (regular, light, zero, life, flavors) consolidated;  Coca-Cola = Coca-Cola Red or Coca-Cola Classic</p>

            <p class="margin-top15">Stills ex Water = NARTD less Sparkling Soft Drinks category less Waters category; or sum of Juices, Sports Drinks, Energy Drinks, RTD Tea and RTD Coffee</p>
            <p class="margin-top15">Waters = Includes Packaged Water (excluding Bulk & Pouch) and Enhanced Water Beverages</p>
        </div>

        <div class="accordian-parent">
            <div class="full-width text-right"><a href="javascript:void(0);" class="show-all">Show All</a></div>
            <!-- first tab start-->
            <?php 
            $head_one='';
            $head_two='';
            $head_three='';
            foreach ($metricesContent as $iterator) : ?>            
                <div class="accordian-inner margin-top15">
                    <?php if (!empty(key($iterator))): ?>
                        <h1><span><?php echo trim(key($iterator)); ?></span></h1>
                    <?php endif; ?>
                    <?php foreach ($iterator[key($iterator)]['data'] as $records) : ?>
                        <div class="accordian-inner-txt">
                            <?php if (!empty($records['heads'][0]['Name'])): ?>
                                <h2><?php echo (!empty($records['heads'][0]['Name']) ? trim($records['heads'][0]['Name']) : ''); ?></h2>
                            <?php endif; ?>
                            <?php if (!empty($records['content'][0])): ?>
                                <h3><span><?php echo (!empty($records['content'][0]) ? trim($records['content'][0]) : ''); ?></span></h3>
                            <?php endif; ?>
                            <div class="accordian-inner-txt-box">
                                <div class="accordian-inner-txt-lft">
                                    <p><?php echo (!empty($records['content'][1]) ? trim($records['content'][1]) : ''); ?></p>
                                    <p class="margintop35"><?php echo (!empty($records['content'][2]) ? trim($records['content'][2]) : ''); ?></p>
                                    <p></p>
                                    <p class="margintop35"><strong class="black">Data Source:  </strong><?php echo (!empty($records['content'][7]) ? trim(str_replace('&nbsp;<br/>', '', $records['content'][7])) : ''); ?></p>
                                    <p class="margintop35"> <strong class="black">Global Data Owner: </strong><?php echo (!empty($records['content'][8]) ? trim(str_replace('&nbsp;<br/>', '', $records['content'][8])) : ''); ?></p>									
                                </div>
                                <div class="accordian-inner-txt-rht">
                                    <p><strong class="black">Unit:</strong> <?php echo (!empty($records['content'][3]) ? trim(str_replace('&nbsp;<br/>', '', $records['content'][3])) : ''); ?></p>
                                    <?php 
                                    $head_one= (!empty($records['heads'][1]['Name']) ? trim($records['heads'][1]['Name']) : $head_one); 
                                    $head_two= (!empty($records['heads'][2]['Name']) ? trim($records['heads'][2]['Name']) : $head_two); 
                                    $head_three= (!empty($records['heads'][3]['Name']) ? trim($records['heads'][3]['Name']) : $head_three); ?>
                                    
                                    <p class="margintop35"><strong class="black"><?php echo $head_one;?>:</strong> <?php echo (!empty($records['content'][4]) ? trim(str_replace('&nbsp;<br/>', '', $records['content'][4])) : ''); ?></p>
                                    <p class="margintop35"><strong class="black"><?php echo $head_two;?>:</strong> <?php echo (!empty($records['content'][5]) ? trim(str_replace('&nbsp;<br/>', '', $records['content'][5])) : ''); ?></p>
                                    <p class="margintop35"><strong class="black"><?php echo $head_three;?>:</strong> <?php echo (!empty($records['content'][6]) ? trim(str_replace('&nbsp;<br/>', '', $records['content'][6])) : ''); ?></p>
                                </div>                                
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>   
        </div>
    </div>
</div>
<?php
$this->start('script');
?>
<script>
    $(document).ready(function () {
        $('.accordian-inner h1').click(function () {
            $(this).parent().find('.accordian-inner-txt').slideToggle();
            $(this).toggleClass('accordian-inner-h1-active');
        });
        $('.accordian-inner h3').click(function () {
            $(this).parent().find('.accordian-inner-txt-box').slideToggle();
            $(this).toggleClass('accordian-inner-txt-h3-active');
            $(this).parent().find("span").toggleClass('accordian-inner-txt-h3-span');

        });
        $('a.show-all').click(function () {

            var text = $(this).html();
            if (text == 'Show All')
            {
                $('.accordian-inner-txt').slideDown();
                $('.accordian-inner-txt-box').slideDown();
                $('.accordian-inner-txt h3').addClass('accordian-inner-txt-h3-active');
                $('.accordian-inner h1').addClass('accordian-inner-h1-active');
            }
            else
            {
                $('.accordian-inner-txt').slideUp();

                $('.accordian-inner-txt-box').slideUp();
                $('.accordian-inner-txt h3').removeClass('accordian-inner-txt-h3-active');
                $('.accordian-inner h1').removeClass('accordian-inner-h1-active');
            }

            // $('.accordian-inner-txt').slideToggle();
            // $('.accordian-inner-txt-box').slideToggle();
            //  $('.accordian-inner-txt h3').toggleClass('accordian-inner-txt-h3-active');
            // $('.accordian-inner h1').toggleClass('accordian-inner-h1-active');
            $('a.show-all').html($('a.show-all').text() == 'Hide All' ? 'Show All' : 'Hide All');
        })

    });
</script>
<?php
$this->end();
?>