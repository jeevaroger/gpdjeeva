<div style="background-color:grey;" class="summary-detail-box"><div class="summary-title title-bg">
        <div class="summary-detail-box-a">&nbsp;</div>
        <div class="summary-detail-box-b">
            &nbsp;
        </div>
        <div class="summary-detail-box-c summary-title-txt"><?php echo $metricDbValues[0]; ?></div>
        <div class="summary-detail-box-d summary-title-txt"><?php echo $metricDbValues[1];?></div>
        <div class="summary-detail-box-e summary-title-txt">Period</div>
    </div>     <div class="summary-title margin-top5">
        <div style="color:white !important;" class="summary-detail-box-a bold"><?php echo $worldMapFilterMetricName; ?></div>
        <div class="summary-detail-box-b">
            <?php echo $metricSymbol; ?>
        </div>
        <div class="summary-detail-box-c" <?php echo $this->Metrices->getArrowClassName($dynamicMapArray['output_1']); ?> > <?php echo $dynamicMapArray['output_1'];?></div>
        <div class="summary-detail-box-d" <?php echo $this->Metrices->getArrowClassName($dynamicMapArray['output_2']);?> > <?php echo $dynamicMapArray['output_2'];?></div>
        <div class="summary-detail-box-e"><?php echo $dynamicMapArray['publication_period']);?></div>
    </div></div>