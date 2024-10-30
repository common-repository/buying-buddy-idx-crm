<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly   ?>
<div id="bbplugin-settings" class="bbthanks">
    <img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/buying-buddy-juggler.png" height="180" class="juggler" alt="">
	<div class="container-fluid bb-main-wrapper">          
        <div class="maxwidth-xl ml-0 pl-lg-3">
            <div class="card card-outline border-top border-secondary border-opacity-45">
                <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="h2 lh-1">
                            <?php echo wp_kses_post($thankyouForHeading); ?>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="body-inner700">
                        <div class="row">
                            <div class="col-12">
                                <?php echo wp_kses_post($thankyouFor); ?>
            
                                <div class="d-print-none d-flex align-items-center mb-3">
                                    <a class="btn btn-outline-primary btn-sm ml-auto mr-0" href="#" onclick="window.print();">Print This Page</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <?php echo wp_kses_post($confirmationMessage); ?>
                                <?php echo wp_kses_post($installationInstructions); ?>
                                <?php echo wp_kses_post($welcomeMsg); ?>
            
                                <div class="card card-inner-outline overflow-hidden mb-5">
                                    <div class="card-header alert alert-dark alert-marker marker-rounded">
                                        <div class="marker-icon">
                                            <img src="<?php echo esc_url(plugin_dir_url(__FILE__))?>../images/location-dot.png" alt="" />
                                        </div>
                                        <div class="text-h4">Google Map Key</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-body pt-3">
                                    		<div class="max600 mx-auto"> 
                                            	<?php echo wp_kses_post($gmapInstructions); ?>
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                                <?php echo wp_kses_post($couponMesssage); ?>
            
                                <form action="<?php echo get_site_url();?>/wp-admin/options-general.php?page=buying-buddy" method="post" name="install">
                                    <input type="hidden" name="buyingbuddy_install" value="1" />
                                    <?php wp_nonce_field( 'buyingbuddy_install_action', 'buyingbuddy_install' ); ?>
            
                                    <div class="card card-inner-outline mb-5">
                                        <div class="card-header alert alert-dark alert-marker marker-rounded">
                                            <div class="marker-icon">
                                                <img src="<?php echo esc_url(plugin_dir_url(__FILE__))?>../images/angles-right.png" alt="" />
                                            </div>
                                            <div class="text-h4">Add Additional Template Pages</div>
                                        </div>
                                        <div class="card-body pt-3">
                                           	<div class="max600 mx-auto"> 
                                                <p class="mb-1">
                                                    Use the templates below to add more pages with widgets.
                                                </p>
                                                <p class="mb-2">                                                
                                                    Template Pages can be edited, modified or deleted as needed.<br>
                                                    The slugs for template pages have been chosen to be unique, but you may change these.<br>  
                                                    If you need help, you'll find page tutorials in the "help" sidebar on the next page.
                                                </p>
                                                <div class="alert alert-sm alert-warning alert-marker marker-right border-inner-outline">
                                                    <div class="marker-icon">
                                                        <img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/circle-exclamation.png" alt="" />
                                                    </div>
                                                    <div class="lh-13">
                                                        <strong>Note</strong> - Currently this action can only be performed <strong>once</strong>.<br />
                                                        We recommend you add all pages now.
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center flex-grow-1">
                                                            <input type="checkbox" class="chk-input" id="buyingbuddy_install_featured" name="buyingbuddy_install_featured" value="1" checked="checked" />
                                                            <label class="chk-label no-bg" for="buyingbuddy_install_featured">
                                                                <span class="chk-check"></span>
                                                                <span class="chk-text">Featured Listings</span>
                                                            </label>
                                                        </div>
                                                        <label for="buyingbuddy_install_featured_slug" class="lh-1 ml-auto mb-0 mr-2 text-muted">
                                                            Page slug:
                                                        </label>
                                                        <div class="input-icon w-auto mr-0">
                                                            <span class="strong">&#47;</span>
                                                            <input type="text" class="form-control pl-4" id="buyingbuddy_install_featured_slug" name="buyingbuddy_install_featured_slug" value="bbidx-listing-featured" />
                                                        </div>
                                                    </div>
                                                    <div class="ml-1px pl-4 xsmall">Displays featured properties using the Gallery widget.</div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center flex-grow-1">
                                                            <input type="checkbox" class="chk-input" id="buyingbuddy_install_sold" name="buyingbuddy_install_sold" value="1" checked="checked" />
                                                            <label class="chk-label no-bg" for="buyingbuddy_install_sold">
                                                                <span class="chk-check"></span>
                                                                <span class="chk-text">Sold Listings</span>
                                                            </label>
                                                        </div>
                                                        <label for="buyingbuddy_install_sold_slug" class="lh-1 ml-auto mb-0 mr-2 text-muted">
                                                            Page slug:
                                                        </label>
                                                        <div class="input-icon w-auto mr-0">
                                                            <span class="strong">&#47;</span>
                                                            <input type="text" class="form-control pl-4" id="buyingbuddy_install_sold_slug" name="buyingbuddy_install_sold_slug" value="bbidx-listing-sold" />
                                                        </div>
                                                    </div>
                                                    <div class="ml-1px pl-4 xsmall">Displays sold listings using the Gallery widget.</div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center flex-grow-1">
                                                            <input type="checkbox" class="chk-input" id="buyingbuddy_install_list" name="buyingbuddy_install_list" value="1" checked="checked" />
                                                            <label class="chk-label no-bg" for="buyingbuddy_install_list">
                                                                <span class="chk-check"></span>
                                                                <span class="chk-text">Property List</span>
                                                            </label>
                                                        </div>
                                                        <label for="buyingbuddy_install_list_slug" class="lh-1 ml-auto mb-0 mr-2 text-muted">
                                                            Page slug:
                                                        </label>
                                                        <div class="input-icon w-auto mr-0">
                                                            <span class="strong">&#47;</span>
                                                            <input type="text" class="form-control pl-4" id="buyingbuddy_install_list_slug" name="buyingbuddy_install_list_slug" value="bbidx-listing-list" />
                                                        </div>
                                                    </div>
                                                    <div class="ml-1px pl-4 xsmall">Displays properties using the List widget.</div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center flex-grow-1">
                                                            <input type="checkbox" class="chk-input" id="buyingbuddy_install_map" name="buyingbuddy_install_map" value="1" checked="checked" />
                                                            <label class="chk-label no-bg" for="buyingbuddy_install_map">
                                                                <span class="chk-check"></span>
                                                                <span class="chk-text">Map Search</span>
                                                            </label>
                                                        </div>
                                                        <label for="buyingbuddy_install_map_slug" class="lh-1 ml-auto mb-0 mr-2 text-muted">
                                                            Page slug:
                                                        </label>
                                                        <div class="input-icon w-auto mr-0">
                                                            <span class="strong">&#47;</span>
                                                            <input type="text" class="form-control pl-4" id="buyingbuddy_install_map_slug" name="buyingbuddy_install_map_slug" value="bbidx-listing-map" />
                                                        </div>
                                                    </div>
                                                    <div class="ml-1px pl-4 xsmall">Displays properties using the Map.</div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center flex-grow-1">
                                                            <input type="checkbox" class="chk-input" id="buyingbuddy_install_about" name="buyingbuddy_install_about" value="1" checked="checked" />
                                                            <label class="chk-label no-bg" for="buyingbuddy_install_about">
                                                                <span class="chk-check"></span>
                                                                <span class="chk-text">About Me</span>
                                                            </label>
                                                        </div>
                                                        <label for="buyingbuddy_install_about_slug" class="lh-1 ml-auto mb-0 mr-2 text-muted">
                                                            Page slug:
                                                        </label>
                                                        <div class="input-icon w-auto mr-0">
                                                            <span class="strong">&#47;</span>
                                                            <input type="text" class="form-control pl-4" id="buyingbuddy_install_about_slug" name="buyingbuddy_install_about_slug" value="team" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="ml-1px pl-4 xsmall">Displays personal profile information along with your active and sold listings. Or agent index / office index. This widget uses the "/team" slug only.</div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center flex-grow-1">
                                                            <input type="checkbox" class="chk-input" id="buyingbuddy_install_calculator" name="buyingbuddy_install_calculator" value="1" checked="checked" />
                                                            <label class="chk-label no-bg" for="buyingbuddy_install_calculator">
                                                                <span class="chk-check"></span>
                                                                <span class="chk-text">Calculator</span>
                                                            </label>
                                                        </div>
                                                        <label for="buyingbuddy_install_calculator_slug" class="lh-1 ml-auto mb-0 mr-2 text-muted">
                                                            Page slug:
                                                        </label>
                                                        <div class="input-icon w-auto mr-0">
                                                            <span class="strong">&#47;</span>
                                                            <input type="text" class="form-control pl-4" id="buyingbuddy_install_calculator_slug" name="buyingbuddy_install_calculator_slug" value="bbidx-listing-calculator" />
                                                        </div>
                                                    </div>
                                                    <div class="ml-1px pl-4 xsmall">Displays a payment calculator.</div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center flex-grow-1">
                                                            <input type="checkbox" class="chk-input" id="buyingbuddy_install_cma" name="buyingbuddy_install_cma" value="1" checked="checked" />
                                                            <label class="chk-label no-bg" for="buyingbuddy_install_cma">
                                                                <span class="chk-check"></span>
                                                                <span class="chk-text">Home value</span>
                                                            </label>
                                                        </div>
                                                        <label for="buyingbuddy_install_cma_slug" class="lh-1 ml-auto mb-0 mr-2 text-muted">
                                                            Page slug:
                                                        </label>
                                                        <div class="input-icon w-auto mr-0">
                                                            <span class="strong">&#47;</span>
                                                            <input type="text" class="form-control pl-4" id="buyingbuddy_install_cma_slug" name="buyingbuddy_install_cma_slug" value="bbidx-listing-cma" />
                                                        </div>
                                                    </div>
                                                    <div class="ml-1px pl-4 xsmall">Displays a form for capturing leads requesting a home valuation.</div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center flex-grow-1">
                                                            <input type="checkbox" class="chk-input" id="buyingbuddy_install_contact" name="buyingbuddy_install_contact" value="1" checked="checked" />
                                                            <label class="chk-label no-bg" for="buyingbuddy_install_contact">
                                                                <span class="chk-check"></span>
                                                                <span class="chk-text">Contact</span>
                                                            </label>
                                                        </div>
                                                        <label for="buyingbuddy_install_cma_slug" class="lh-1 ml-auto mb-0 mr-2 text-muted">
                                                            Page slug:
                                                        </label>
                                                        <div class="input-icon w-auto mr-0">
                                                            <span class="strong">&#47;</span>
                                                            <input type="text" class="form-control pl-4" id="buyingbuddy_install_contactfeatured_slug" name="buyingbuddy_install_contact_slug" value="bbidx-listing-contact" />
                                                        </div>
                                                    </div>
                                                    <div class="ml-1px pl-4 xsmall">Contact page that displays a form for capturing leads that request contact and help.</div>
                                            	</div>
                                        	</div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                    	<div class="col-12">
                                    		<div class="smaller text-right mb-1">
                                    			Add selected pages, and complete setup!
                                			</div>
                                    	</div>
                                        <div class="col-12">
                                            <div class="mb-4 text-right">
                                                <button type="submit" class="btn btn-success btn-label label-right ml-auto mr-0 ">
                                                	Continue
                                                	<span class="btn-label-icon">
                                                        <svg
                                                        	style="width:1.125em;height:1.125em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
                                                        	viewBox="0 0 512 512">
                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        	<path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM281 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L136 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l182.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L393 239c9.4 9.4 9.4 24.6 0 33.9L281 385z"/>
                                                        </svg>                                                	
                                            		</span>
                                            	</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card  -->
