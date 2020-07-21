<div class="submenu-wrapper">
			<div class="submenu-wrapper-left">
				<div class="submenu-wrapper-left-up">
					<!---->
					
                        <div class="form-item">
				<input id="country_selector" type="text">
				<label for="country_selector" style="display:none;">Select a country here...</label>
			</div>
			<div class="form-item" style="display:none;">
				<input type="text" id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
				<label for="country_selector_code">...and the selected country code will be updated here</label>
			</div>
					<!---->
				</div>
				<div class="submenu-wrapper-left-up border-bottom-remove">DASHBOARD STATUS: OPEN</div>
			</div>
			<div class="submenu-wrapper-mid">
				<ul>
					<li><a href="javascript:void(0);">Summary</a></li>
					<li><a href="javascript:void(0);" class="submenu-wrapper-mid-active">Detail</a></li>
					<!--<li><a href="javascript:void(0);">Audit log</a></li>-->
				</ul>
			</div>
			<div class="submenu-wrapper-rht">
                            <?php if(in_array(PRINT_DETAIL,$roleResources)){?>
                                <a href="javascript:void(0);">
                                    <?php echo $this->Html->image('/images/print-icon.jpg', array('alt' => 'Print')); ?>
                                </a>
                            <?php } if(in_array(EXPORT_PDF,$roleResources) || in_array(EXPORT_EXCEL,$roleResources)){?>
                                <a href="javascript:void(0);">
                                    <?php echo $this->Html->image('/images/icon.jpg', array('alt' => 'Excel')); ?>
                                </a>
                            <?php } ?>
			</div>
		</div>

