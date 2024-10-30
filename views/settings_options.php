
<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly   ?>       
<div id="bbplugin-settings" class="bbsettings">
    <header class="header position-md-fixed w-100 bg-light pl-lg-3">
        <nav class="navbar navbar-expand-md navbar-dark py-2 py-md-0">
            <span class="navbar-brand p-0" style="position: absolute; top: 0; left: 10px; z-index: 1">
                <img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/bb-logo_flash.png" class="" alt="Buying Buddy">
            </span>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bbPluginMenuContent" aria-controls="bbPluginMenuContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="bbPluginMenuContent">
                <ul class="navbar-nav nav" id="mybbTab" role="tablist">	<?php // navbar-nav and nav for tabs to wotk and navbar to look correct ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="bbWelcomeTab" data-toggle="tab" data-target="#bbWelcome" type="button" role="tab" aria-controls="bbWelcome" aria-selected="true">
                            <svg 
                            	class="svg-icon mr-1" 
                            	viewBox="0 0 576 512" 
                            	style="width: 1.25em; height: auto; margin-bottom: 3px; vertical-align: middle;fill: currentColor;overflow: hidden;">  
                        		<!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                        		<path d="M277.4 4c6-5.3 15.1-5.3 21.2 0l272 240c6.6 5.8 7.3 16 1.4 22.6s-16 7.3-22.6 1.4L512 235v197c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V235l-37.4 33c-6.6 5.8-16.8 5.2-22.6-1.4s-5.2-16.8 1.4-22.6l272-240zM96 206.7V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V206.7L288 37.3 96 206.7z"/>
							</svg>                        	
                        	Dashboard
                    	</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="bbTutorialsTab" data-toggle="tab" data-target="#bbTutorials" type="button" role="tab" aria-controls="bbTutorials" aria-selected="false">Tutorials</a>
                    </li>                            
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" title="Access your Buying Buddy Account Dashboard">
                            CRM Shortcuts
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://leadsandcontacts.com/lead/summary/" target="_blank">Lead Summary</a>      
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://leadsandcontacts.com/segment/summary" target="_blank">Manage Segments</a>
                            <a class="dropdown-item" href="https://leadsandcontacts.com/groups/manage-groups/account_id" target="_blank">Groups &amp; Categories</a>  
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://leadsandcontacts.com/task/summary/timeframe/today/my-tasks/1" target="_blank">Follow Up Tasks</a>
                            <div class="dropdown-divider"></div> 
                            <a class="dropdown-item" href="https://leadsandcontacts.com/lead-email/summary" target="_blank">Email Marketing</a> 
                            <a class="dropdown-item" href="https://leadsandcontacts.com/widget-market/list" target="_blank">Market Reports</a>
                            <a class="dropdown-item" href="https://leadsandcontacts.com/marketing/campaigns" target="_blank">Drip Campaigns</a>                                  
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" title="Shortcuts to Listings">
                            Listings
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://leadsandcontacts.com/property/list/tab/my-listings" target="_blank">My MLS Listings</a>
                            <a class="dropdown-item" href="https://leadsandcontacts.com/property/list/tab/custom" target="_blank">My Private Listings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://leadsandcontacts.com/listing/lookup-listing-form" target="_blank">Listing Lookup Tool</a>
                        </div>
                    </li>     
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" title="Buying Buddy account dashboard settings">
                            Account
                        </a>
                        <div class="dropdown-menu">
                        	<a class="dropdown-item" href="https://leadsandcontacts.com/" target="_blank">Buying Buddy Account Dashboard</a>
                            <a class="dropdown-item" href="https://leadsandcontacts.com/user/dashboard/user_id" target="_blank">My Profile &amp; Preferences</a>
                            <a class="dropdown-item" href="https://leadsandcontacts.com/user-settings/notifications/user_id" target="_blank">Notification Settings</a>
                            <a class="dropdown-item" href="https://leadsandcontacts.com/account/lead-capture-settings/account_id" target="_blank">Lead Capture Settings</a>
                        </div>
                    </li>                                                        
                </ul>
            </div>
        </nav> 
    </header>
	<div class="container-fluid bb-main-wrapper">    
		<div class="maxwidth-xl ml-0 pl-lg-3">  
    		
    		<div class="tab-content" id="mybbTabContent">
                <div class="tab-pane fade show active" id="bbWelcome" role="tabpanel" aria-labelledby="bbWelcomeTab">
                              
                    <div class="row">
                        <div class="col-lg-3">
                        	<div class="fixed-tab-menu d-none d-lg-block">
                                <ul class="nav nav-pills nav-vertical nav-arrowtabs" id="bbWelcomePanelTab" role="tablist" > 
                					<li class="nav-item"> 
                                        <a href="#" class="nav-link active" id="bbDashboardTab" data-toggle="tab" data-target="#bbDashboard" type="button" role="tab" aria-controls="bbDashboard" aria-selected="true">	
                                            Plugin Dashboard
                                        </a>
                					</li>
                					<li class="nav-item"> 
                                        <a class="nav-link" id="bbGrabWidgetsTab" data-toggle="tab" data-target="#bbGrabWidgets" type="button" role="tab" aria-controls="bbGrabWidgets" aria-selected="false">	
                                            Grab-and-go Widgets
                                        </a>   
                					</li>              					
                					<li class="nav-item">                         
                                        <a class="nav-link" id="bbSettingsTab" data-toggle="tab" data-target="#bbSettings" type="button" role="tab" aria-controls="bbSettings" aria-selected="false">
                                            Settings
                                        </a> 
                					</li>
                					<li class="nav-item"> 
                                        <a class="nav-link" id="bbResourcesTab" data-toggle="tab" data-target="#bbResources" type="button" role="tab" aria-controls="bbResources" aria-selected="false">	
                                            Helpful Resources
                                        </a>   
                					</li>                  					
                					<li class="nav-item">                          
                                        <a class="nav-link" id="bbDebugTab" data-toggle="tab" data-target="#bbDebug" type="button" role="tab" aria-controls="bbDebug" aria-selected="false">
                                            Debug Information
                                        </a> 
                					</li>  
    							</ul> 
    							<hr>
    							<ul class="list-disc list-compact list-smaller">
              					    <li>
                                        <a href="<?php echo get_site_url();?>/wp-admin/edit.php?s=mbb_widget&post_type=page&post_status=all">
                                            Your pages with widgets
                                        </a>            					    
              					    </li>     												
                        		</ul>		                   													          					                         
                   			</div>			            					              					            					                                  					            					              					            					
                           	<h1 class="d-lg-none mb-3">
                           		Plugin Dashboard
                            </h1>
                            <select class="form-control d-lg-none mb-3 tab_selector">
                                <option value="bbDashboardTab">Plugin Dashboard</option>
                                <option value="bbGrabWidgetsTab">Grab-and-go Widgets</option>
                                <option value="bbSettingsTab">Settings</option>
                                <option value="bbDebugTab">Debug Information</option>                                					            					              					            					                                  					            					              					            					
                            </select> 
                        </div>
                        <div class="col-lg-9">
                        <?php if (!empty($msg_status)  && $msg_status != "") { 
                                echo wp_kses_post($msg_status);
                         } ?>
                        <?php if (!empty($_POST['buyingbuddy_check_activation'])  && $invalid_acid == "") { ?>
							<div class="alert alert-sm alert-success alert-marker marker-right border-inner-outline lh-13">
                                <div class="marker-icon">
                                    <svg
                                        style="width: 1rem; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                        viewBox="0 0 512 512">  
                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM363.3 203.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L224 297.4l-52.7-52.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l64 64c6.2 6.2 16.4 6.2 22.6 0l128-128z"/>
                                    </svg>
                                </div>
                                <span class="weight700">Your account is now activated!</span> See "Settings" for more options.
                            </div>
                        <?php } ?>
                    	<?php if(esc_html($buyingbuddy_options["google_map_key"]) =="") { ?>
            				<div class="alert alert-sm alert-danger alert-marker marker-right border-inner-outline lh-13">
                                <div class="marker-icon">
                                    <svg
                                    	style="width: 1rem; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                        viewBox="0 0 512 512"> 
                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                        <path d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-8.8 0-16 7.2-16 16V272c0 8.8 7.2 16 16 16s16-7.2 16-16V144c0-8.8-7.2-16-16-16zm24 224a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/>
                                    </svg>   
                                </div>
                                <span class="weight700">Google Map Key is missing</span> - See "Settings" for instructions.
                            </div>
                    	<?php } ?>
                            <div class="tab-content" id="bbWelcomePanelTabContent">
                            
                                <div class="tab-pane fade active show" id="bbDashboard" role="tabpanel" aria-labelledby="bbDashboardTab">

                    				<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">                                                 	
                                                <div class="h2 lh-1">
                                                	Welcome to Buying Buddy!
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700"> 
                             					<div class="row">
                             						<div class="col">
                             							<p>
                             								Welcome to Buying Buddy's Plugin Dashboard - a tool for webmasters to add widgets and manage the plugin.
                         								</p>
                         								<p>
                             								The plugin menu has helpful links to many of the other features including lead management and other services that are all in your
															<a href="https://leadsandcontacts.com" target="_blank">Buying Buddy account dashboard                         									
															<svg 
																style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
																viewBox="0 0 512 512">
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                            </svg></a>.                               								
                         								</p>
                             						</div>
                         						</div>
                        						<a href="#" class="btn btn-link-solid btn-label lh-1375 rounded-pill mb-4 show-video" data-pic="https://dr94erhe1w4ic.cloudfront.net/bb-support/2510-poster.jpg"  data-vid="https://dr94erhe1w4ic.cloudfront.net/bb-support/2510-bb-wp-orientation.mp4" data-target="#bbVideoModal" >	
                        							<span class="btn-label-icon rounded-pill">				 
                                                        <svg
                                                            style="width: 1.25rem; height: 1.25rem; fill:currentColor;fill-rule:evenodd;stroke:none;stroke-width:1"
                                                            viewBox="0 0 512 512">
                                                            <path d="M256 12.8C121.9 12.8 12.8 121.9 12.8 256S121.9 499.2 256 499.2 499.2 390.1 499.2 256 390.1 12.8 256 12.8zm0 465.9c-122.9 0-222.7-99.8-222.7-222.7S133.1 33.3 256 33.3 478.7 133.1 478.7 256 378.9 478.7 256 478.7zm101.4-239.1-141.3-88.1c-12.8-8.2-29.7 1-29.7 16.4v176.6c0 15.4 16.9 24.6 29.7 16.4l141.3-88.1c12.3-8.2 12.3-25.6 0-33.3z"/>                                	
                                                        </svg> 
                        							</span>         
                                                    Video: Start Here
                                                </a>                              				 
                                    <?php if ($buyingbuddy_status == 30 ) { // Free Trial ?>                                                                                                                                            
                             					<div class="row">
                             						<div class="col">
                             							<div class="h3 d-flex align-items-center lh-1">
                             								<span class="text-success mr-2">
                                 								<svg
                                                                    style="width:1.5em;height:1.5em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
                                                                    viewBox="0 0 68 68">
                                                                    <path d="m 27.22475,50.92713 -0.0958,-0.0838 -0.0878,0.0838 -14.84406,-14.84493 5.27807,-5.27438 9.65382,9.67037 23.39596,-23.40532 5.27408,5.27837 z M 33.99601,0 C 15.22734,0 0,15.22823 0,34.002 0,52.77576 15.22734,68 33.99601,68 52.76867,68 68,52.77576 68,34.002 68,15.22823 52.76867,0 33.99601,0 Z"/>
                                                                </svg>
                                                            </span>
                                                            <span>
                             									This Is Your Account With A 30-day Free Trial
                         									</span>
                         								</div>
                         							</div>
                     							</div>
                     							<div class="row">
                             						<div class="col-md-6 mb-3">
                                                        <p class="mt-3">
                                                            <b>Remember!</b> All property information comes from the
                                                            <a href="https://support.buyingbuddy.com/knowledge-base/demonstration-mls-data-set/" target="_blank" title="See details">
                                                            	Demonstration MLS data set
																<svg 
																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
																	viewBox="0 0 512 512">
                                                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                </svg>                                                                                   
                                                            </a>
                                                            (not a live MLS feed) and does not represent any properties for sale.
                                                        </p>
                                                        <p>
                                                            CRM features that rely on live MLS data, such as sending property alerts etc, are mostly disabled.
                                                        </p>                              
                                                        <p class="mb-1 lh-13">
                                                            Try searching now with these search examples:
                                                        </p>
                                                        <ul class="text-1em list-disc list-compact list-smaller mb-2">
                                                            <li>Search city of "Arvada"</li>
                                                            <li>Search property type "Detached Residential"</li>
                                                        </ul>
                                                        
														<div class="alert alert-sm alert-success alert-marker marker-right border-inner-outline mb-0 lh-13">
                                                            <div class="marker-icon">
                                                                <svg style="width:1rem;height:auto;vertical-align:middle;fill:currentColor;overflow: hidden;" viewBox="0 0 512 512">
                                                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"></path>
                                                                </svg>  
                                                            </div>  
                                                        	<b>Your Hotline for Help</b><br>Call Paul on +1-303-968-2727. If there's no answer, just leave a detailed message so we can call you back.                                                          	                                                        	
                                                        </div>                                                      
                                                	</div>  
                                                	<div class="col-md-6 mb-3">
                                                		<div class="text-center">
                                                			<img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/working-at-desk.png" alt="" style="max-width:250px">
                                            			</div>
                                                	</div>
                                                </div>
                     							<div class="row">
                             						<div class="col-12 mb-3">   
                                                        <div class="h6 d-flex align-items-center mb-1">
                                                            <svg 
                                                            	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                            	viewBox="0 50 768 1024"  >
                                                                <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                            </svg>                                  
                                                            Seamless Upgrade  
                                                        </div>                       
                                                        <p>
                                                        	When you are ready, upgrade to a live MLS feed. You wont need to make any changes.<br>                                                        	
                                                        	All the widgets and displays you have added will <span class="weight600">automatically</span> update to display listings from YOUR MLS instead of the Demo MLS.
                                                        </p>
														<a href="https://leadsandcontacts.com/buyingbuddy?do=upgrade" class="btn btn-info btn-label label-left position-relative mb-3" target="_blank" title="Upgrade your account">
                                                        	Upgrade Now
                                                            <span class="btn-label-icon">
                                                                <svg style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 512 512">
                                                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M304.4 419.8H207.6v-41.6h96.9zm0-217.6h101L256 25.6 106.6 202.3h101V343h96.9zm-96.9 295h96.9v-41.6H207.6z"></path>
                                                                </svg>
                                                            </span>
                                                    	</a>                               						
                             						</div>
                         						</div>                                             
                                    <?php } ?> 
 
 
                                        
                                    <?php if ($buyingbuddy_status == 40) { // Pending  ?>                                                                                                                                            
                                                <div class="card border-0 mb-4">
                                                    <div class="alert alert-sm alert-info alert-marker marker-right border-inner-outline mb-0 lh-13">
                                                        <div class="marker-icon">
                                                            <svg 
                                                                viewBox="0 0 512 512" 
                                                                style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                <path d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-8.8 0-16 7.2-16 16V272c0 8.8 7.2 16 16 16s16-7.2 16-16V144c0-8.8-7.2-16-16-16zm24 224a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/>
                                                            </svg>   
                                                        </div>                                 
                                                        <div class="mb-1">
                                                            <strong>Until your IDX license is approved by your MLS</strong>, all property information comes from the
                                                            <a href="https://support.buyingbuddy.com/knowledge-base/demonstration-mls-data-set/" target="_blank" title="See details">
                                                            	Demonstration MLS data set
																<svg 
																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
																	viewBox="0 0 512 512">
                                                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                </svg>                                                                                
                                                            </a>.
                                                        </div>
                                                        <div class="mb-1 lh-13">
                                                            Try searching now with these search examples:
                                                        </div>
                                                        <ul class="text-1em list-disc list-compact list-smaller mb-2">
                                                            <li>Search city of "Arvada"</li>
                                                            <li>Search property type "Detached Residential"</li>
                                                        </ul>
                                                        <p>
                                                        	When your IDX license is approved by your MLS,                                              
                                                        	widgets will then show live active listings (and pending and sold if provided) from your MLS.
                                                    	</p>
                                                    </div>   
                                                </div>
                                    <?php } ?>   
                                                    
                                				<div class="card card-inner-outline mb-4">
                                                    <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                    									<div class="marker-icon">	
                                                            <svg                                                               
                                                                style="width:1rem;height:auto;vertical-align:middle;fill:currentColor;overflow: hidden;"
                                                                viewBox="0 0 512 512">
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <path d="M62 333.2l-12.8 9.6L62 333.2zM178.8 450l-9.6 12.8 9.6-12.8zM414 242.8l-12.8-9.6 12.8 9.6zm-352 0l-12.8-9.6L62 242.8zM304 64c0-19.4-10.5-35.8-25.1-46.7S244.8 0 224 0V32c14.5 0 27.1 4.4 35.7 10.9S272 56.9 272 64h32zm-25.3 46.8C293.4 99.9 304 83.5 304 64H272c0 7.1-3.8 14.8-12.4 21.2l19.2 25.6zM336 128H279.2v32H336V128zm48 104.8V176H352v56.8h32zM448 208c-19.5 0-35.9 10.6-46.8 25.3l25.6 19.2c6.4-8.6 14.1-12.4 21.2-12.4V208zm64 80c0-20.8-6.3-40.2-17.3-54.9s-27.3-25.1-46.7-25.1v32c7.1 0 14.7 3.8 21.1 12.3s10.9 21.1 10.9 35.7h32zm-64 80c19.4 0 35.8-10.5 46.7-25.1s17.3-34.1 17.3-54.9H480c0 14.5-4.4 27.1-10.9 35.7s-14.1 12.3-21.1 12.3v32zm-46.8-25.3c11 14.7 27.4 25.3 46.8 25.3V336c-7.1 0-14.8-3.8-21.2-12.4l-25.6 19.2zM384 464V343.2H352V464h32zM279.2 512H336V480H279.2v32zM272 416c0 7.1-3.8 14.8-12.4 21.2l19.2 25.6c14.7-11 25.3-27.4 25.3-46.8H272zm-48-32c14.5 0 27.1 4.4 35.7 10.9s12.3 14.1 12.3 21.1h32c0-19.4-10.5-35.8-25.1-46.7s-34.1-17.3-54.9-17.3v32zm-48 32c0-7.1 3.8-14.7 12.3-21.1s21.1-10.9 35.7-10.9V352c-20.8 0-40.2 6.3-54.9 17.3s-25.1 27.3-25.1 46.7h32zm12.4 21.2c-8.6-6.4-12.4-14.1-12.4-21.2H144c0 19.5 10.6 35.9 25.3 46.8l19.2-25.6zM48 512H168.8V480H48v32zM0 343.2V464H32V343.2H0zM96 336c-7.1 0-14.8-3.8-21.2-12.4L49.2 342.7C60.1 357.4 76.5 368 96 368V336zm32-48c0 14.5-4.4 27.1-10.9 35.7S103.1 336 96 336v32c19.4 0 35.8-10.5 46.7-25.1s17.3-34.1 17.3-54.9H128zM96 240c7.1 0 14.7 3.8 21.1 12.3s10.9 21.1 10.9 35.7h32c0-20.8-6.3-40.2-17.3-54.9S115.4 208 96 208v32zM74.8 252.4C81.2 243.8 88.9 240 96 240V208c-19.5 0-35.9 10.6-46.8 25.3l25.6 19.2zM0 176v56.8H32V176H0zm168.8-48H48v32H168.8V128zM144 64c0 19.5 10.6 35.9 25.3 46.8l19.2-25.6C179.8 78.8 176 71.1 176 64H144zM224 0c-20.8 0-40.2 6.3-54.9 17.3S144 44.6 144 64h32c0-7.1 3.8-14.7 12.3-21.1S209.5 32 224 32V0zM208 120.8c0-16.2-9.9-28.4-19.6-35.6l-19.2 25.6c5.2 3.8 6.7 7.7 6.7 10h32zM39.2 336c2.3 0 6.1 1.6 10 6.7l25.6-19.2C67.6 313.9 55.4 304 39.2 304v32zM32 343.2c0-4 3.2-7.2 7.2-7.2V304C17.5 304 0 321.5 0 343.2H32zM48 480c-8.8 0-16-7.2-16-16H0c0 26.5 21.5 48 48 48V480zm128-7.2c0 4-3.2 7.2-7.2 7.2v32c21.6 0 39.2-17.5 39.2-39.2H176zm-6.7-10c5.2 3.8 6.7 7.7 6.7 10h32c0-16.2-9.9-28.4-19.6-35.6l-19.2 25.6zM352 464c0 8.8-7.2 16-16 16v32c26.5 0 48-21.5 48-48H352zm39.2-160c-21.7 0-39.2 17.5-39.2 39.2h32c0-4 3.2-7.2 7.2-7.2V304zm35.6 19.6c-7.2-9.7-19.4-19.6-35.6-19.6v32c2.3 0 6.1 1.6 10 6.7l25.6-19.2zM168.8 160c21.6 0 39.2-17.5 39.2-39.2H176c0 4-3.2 7.2-7.2 7.2v32zM391.2 272c16.2 0 28.4-9.9 35.6-19.6l-25.6-19.2c-3.8 5.2-7.7 6.7-10 6.7v32zM32 176c0-8.8 7.2-16 16-16V128c-26.5 0-48 21.5-48 48H32zm320 56.8c0 21.6 17.5 39.2 39.2 39.2V240c-4 0-7.2-3.2-7.2-7.2H352zM39.2 240c-4 0-7.2-3.2-7.2-7.2H0C0 254.5 17.5 272 39.2 272V240zM336 160c8.8 0 16 7.2 16 16h32c0-26.5-21.5-48-48-48v32zM272 472.8c0-2.3 1.6-6.1 6.7-10l-19.2-25.6c-9.7 7.2-19.6 19.4-19.6 35.6h32zM49.2 233.3c-3.8 5.2-7.7 6.7-10 6.7v32c16.2 0 28.4-9.9 35.6-19.6L49.2 233.3zM240 120.8c0 21.6 17.5 39.2 39.2 39.2V128c-4 0-7.2-3.2-7.2-7.2H240zM279.2 480c-4 0-7.2-3.2-7.2-7.2H240c0 21.7 17.5 39.2 39.2 39.2V480zM259.6 85.2c-9.7 7.2-19.6 19.4-19.6 35.6h32c0-2.3 1.6-6.1 6.7-10L259.6 85.2z"/>
                                                            </svg>
                    								   	</div>
                                						<div class="text-h4">Get More Widgets, Links and Filters!</div> 
                                                    </div>   				           	          		
                                                    <div class="card-body pt-3">
                                                    	<div class="max600 mx-auto pb-3"> 
                                                            <div class="alert alert-sm alert-success alert-marker marker-right border-inner-outline lh-13">
                                                                <div class="marker-icon">
                                                                    <svg
                                                                        style="width:1rem;height:auto;vertical-align:middle;fill:currentColor;overflow: hidden;"
                                                                        viewBox="0 0 512 512">
                                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                        <path d="M288.8 81.7c3.5-12.8 16.7-20.3 29.5-16.8s20.3 16.7 16.8 29.5l-4.5 16.4c-5.5 20.2-13.9 39.3-24.7 56.9c-3.1 4.9-3.2 11.1-.4 16.2s8.2 8.2 14 8.2H448c17.7 0 32 14.3 32 32c0 11.3-5.9 21.3-14.8 27c-7.2 4.6-9.5 13.9-5.3 21.3c2.6 4.6 4.1 10 4.1 15.7c0 12.4-7 23.1-17.3 28.5c-4.2 2.2-7.3 6.1-8.3 10.8s.1 9.5 3 13.2c4.2 5.4 6.7 12.2 6.7 19.5c0 14.2-9.2 26.3-22.1 30.4c-7.8 2.6-12.4 10.6-10.7 18.6c.5 2.2 .7 4.5 .7 6.9c0 17.7-14.3 32-32 32H294.5c-15.8 0-31.2-4.7-44.4-13.4l-38.5-25.7c-9-6-16.6-13.7-22.4-22.6c-4.9-7.4-14.8-9.4-22.2-4.6s-9.4 14.8-4.6 22.2c8.1 12.3 18.7 23.1 31.4 31.6l38.5 25.7c18.4 12.3 40 18.8 62.1 18.8H384c35.3 0 64-28.7 64-64l0-.6c19.1-11.1 32-31.7 32-55.4c0-8.7-1.8-17.1-4.9-24.7C487.9 323.6 496 306.8 496 288c0-6.5-1-12.8-2.8-18.7C504.8 257.7 512 241.7 512 224c0-35.3-28.7-64-64-64H346.4c6.2-13.1 11.3-26.7 15.1-40.9l4.5-16.4c8.1-29.8-9.5-60.6-39.3-68.8s-60.6 9.5-68.8 39.3l-4.5 16.4c-8.9 32.6-29.6 60.8-58.2 79l-3.1 2c-11.8 7.5-21.7 17.1-29.5 28.2c-5.1 7.2-3.3 17.2 4 22.3s17.2 3.3 22.3-4c5.4-7.7 12.2-14.4 20.4-19.5l3.1-2c35.3-22.4 60.9-57.2 71.9-97.5l4.5-16.4zM32 224H96V448H32V224zM0 224V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32c-17.7 0-32 14.3-32 32z"/>
                                                                    </svg>  
                                                                </div>  
                                                            	See the <b>Tutorials</b> menu item above for guided instructions to help you rapidly add popular features and pages! 
                                                            </div>                                                    	
                                                            <p class="mb-2">
                                                                Use the Wizard to add more widgets to your website.<br>
                                                                The Wizard has the full range of Widgets and options.
                                                            </p>
                                                            <ul class="list-disc list-compact list-smaller mb-3">
                                                                <li>Display properties. This includes your own listings,or any listings from your MLS filtered by any MLS criteria. 
                                                                </li>                            
                                                                <li>Search forms. Add extra search forms to pages.
                                                                </li>
                                                                <li>Add lead capture forms to encourage signup and capture leads.                                
                                                                </li> 
                                                                <li>Create search links.                                
                                                                </li> 
                                                            </ul>
                                                            <a href="https://leadsandcontacts.com/widget-filter/start" class="btn btn-primary btn-label label-left position-relative" target="_blank" title="Use the Widget Wizard in your Buying Buddy account">
                                                            	Widget Wizard
                                                                <span class="btn-label-icon">
                                                                    <svg
                                                                        style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;"
                                                                        viewBox="0 0 512 512">
                                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                        <path d="M234.7 42.7L197 56.8c-3 1.1-5 4-5 7.2s2 6.1 5 7.2l37.7 14.1L248.8 123c1.1 3 4 5 7.2 5s6.1-2 7.2-5l14.1-37.7L315 71.2c3-1.1 5-4 5-7.2s-2-6.1-5-7.2L277.3 42.7 263.2 5c-1.1-3-4-5-7.2-5s-6.1 2-7.2 5L234.7 42.7zM46.1 395.4c-18.7 18.7-18.7 49.1 0 67.9l34.6 34.6c18.7 18.7 49.1 18.7 67.9 0L529.9 116.5c18.7-18.7 18.7-49.1 0-67.9L495.3 14.1c-18.7-18.7-49.1-18.7-67.9 0L46.1 395.4zM484.6 82.6l-105 105-23.3-23.3 105-105 23.3 23.3zM7.5 117.2C3 118.9 0 123.2 0 128s3 9.1 7.5 10.8L64 160l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L128 160l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L128 96 106.8 39.5C105.1 35 100.8 32 96 32s-9.1 3-10.8 7.5L64 96 7.5 117.2zm352 256c-4.5 1.7-7.5 6-7.5 10.8s3 9.1 7.5 10.8L416 416l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L480 416l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L480 352l-21.2-56.5c-1.7-4.5-6-7.5-10.8-7.5s-9.1 3-10.8 7.5L416 352l-56.5 21.2z"/>
                                                                    </svg>
                                                                </span>
                                                        	</a>
                                                        </div>
                                            		</div>       
                                        		</div>
                                				<div class="card card-inner-outline mb-4">
                                                    <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                    									<div class="marker-icon">	                   									
                                                            <svg                                                               
                                                                style="width:1rem;height:auto;vertical-align:middle;fill:currentColor;overflow: hidden;"
                                                                viewBox="0 0 512 512">
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <path d="M480 258.3c-.1 14.1-13.8 29.7-38.1 29.7H344c-44.2 0-80 35.8-80 80c0 5.6 .6 11.2 1.7 16.6c2.9 13.8 8.9 27.3 13.2 37c.8 1.7 1.5 3.3 2.1 4.8c5 11.6 6.9 18.2 6.9 23.5c0 19.2-12.3 29.6-22.7 30c-3.1 .1-6.2 .2-9.3 .2C132.3 480 32 379.7 32 256S132.3 32 256 32s224 100.3 224 224c0 .8 0 1.6 0 2.3zm32 .3c0-.9 0-1.8 0-2.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c3.5 0 7.1-.1 10.6-.2c31.8-1.3 53.4-30.1 53.4-62c0-14.5-6.1-28.3-12.1-42c-4.3-9.8-8.7-19.7-10.8-29.9c-.7-3.2-1-6.5-1-9.9c0-26.5 21.5-48 48-48h97.9c36.5 0 69.7-24.8 70.1-61.3zM152 256a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zm8-72a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm120-56a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zm72 56a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/>
                                                            </svg>
                    								   	</div>
                                						<div class="text-h4">Style Widgets</div> 
                                                    </div>   				           	          		
                                                    <div class="card-body pt-3">
                                                    	<div class="max600 mx-auto pb-3">
                                                    	
                                                    		<div class="row">
                                                    			<div class="col">
                                                    				<p class="mb-2">
                                        								Blend widgets seamlessly with the color and style of your website.                						
                                    								</p>
                                    								<p class="mb-2">
                                                						Use a Library Theme, or 
                                                							<a href="https://support.buyingbuddy.com/knowledge-base/widget-theme-design/" target="_blank">
                                                								see how to create a 'custom theme'
                            													<svg 
                            														style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
                            														viewBox="0 0 512 512">
                                                                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                    <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                                </svg>                                                  								
                                            								</a> 
                                            							to apply unique styling to your site, which can also include custom CSS if needed.                 						
                                    								</p>
                                    								<p class="mb-0">
                                    									To review themes and make changes, go to your Buying Buddy account.<br>
                                    									Then see <span class="weight700">Widgets > Website Options</span>,
                                    									then the "Widget Theme" tab.
                                									</p>
                                    							</div>
                                							</div>    
                                                		</div>     
                                        			</div>
                                        		</div>                                        		
                                            </div>
                                        </div>                                 
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="bbResources" role="tabpanel" aria-labelledby="bbResources">
                                
                    				<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">                                                 	
                                                <div class="h2 lh-1">
                                                	Helpful Resources
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700">
                                                <div class="card card-inner-outline mt-2 mb-4">
                                                    <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                    									<div class="marker-icon">
                                                            <svg 
                                                                viewBox="0 0 512 512" 
                                                                style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                    		</svg> 
                    								   	</div>
                                                        <div class="h3">Quick Links to Reference and Documentation</div>
                                                    </div>  
                                                    <div class="card-body">  
                                                  		<div class="max600 mx-auto">                              				
                            								<h4 class="mb-1">Documentation</h4>
                                                            <div class="bb-text d-flex mb-1">
                                                                <svg 
                                                                	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                	viewBox="0 50 768 1024"  >
                                                                    <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                </svg>   
                                                                <a href="https://support.buyingbuddy.com/knowledge-base/installing-mbb-wordpress-plugin/" target="_blank">Installation Guide</a>
                                                            </div>                            
                                                            <div class="bb-text d-flex mb-1">
                                                                <svg 
                                                                	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                	viewBox="0 50 768 1024"  >
                                                                    <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                </svg>  
                                                                <a href="https://support.buyingbuddy.com/webmaster-content/widget-reference/" target="_blank">Widget Reference Guide</a>
                                                            </div>
                                                            <div class="bb-text d-flex mb-3">
                                                                <svg 
                                                                	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                	viewBox="0 50 768 1024"  >
                                                                    <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                </svg>  
                                                                <a href="https://support.buyingbuddy.com/knowledge-base/search-filters-settings/" target="_blank">Widget Filters Reference</a>
                                                            </div>
                                                            <h4 class="mb-1">Demonstration Website</h4>
                                                            <div class="bb-text d-flex mb-3">
                                                                <svg 
                                                                	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                	viewBox="0 50 768 1024"  >
                                                                    <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                </svg>                           
                                                            	<a href="https://charliesmithrealty.com" target="_blank">CharlieSmithRealty.com</a>
                                                        	</div>
                                                            <h4 class="mb-1">Buying Buddy Dashboard</h4>
                                                            <div class="bb-text d-flex mb-3">
                                                                <svg 
                                                                	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                	viewBox="0 50 768 1024"  >
                                                                    <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                </svg>  
                                                            	<a href="https://leadsandcontacts.com" target="_blank">LeadsAndContacts.com</a>
                                                        	</div>
                                                            <h4 class="mb-1">Need Help?</h5>
                                                            <p class="mb-3">
                                                                If you need assistance, 
                                                                <a href="https://www.leadsandcontacts.com/help/ticket-new" target="_blank">submit a help ticket</a> from within your Buying Buddy account dashboard.
                                                            </p>
                                                            <h4 class="mb-1">Trouble logging in to your Buying Buddy account? </h5>
                                                            <p class="mb-3">
                                                                <a href="https://www.leadsandcontacts.com/" target="_blank">Use the "Forgot Password" link on the login page</a>.
                                                            </p>   
                                                            <p class="mb-5">
                                                                Established in 2003.<br>
                                                                We make IDX simple and effective.
                                                            </p>                                                                            
                                                            <div class="text-center mb-2">           					
                                                                <img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/developers.png" class="img-fluid" alt="" style="max-width: 350px;">
                                                            </div>

                                                		</div>
                                            		</div>
                                        		</div>
                                    		</div>
                                		</div>
                            		</div>
                        		</div>		

                                <div class="tab-pane fade" id="bbGrabWidgets" role="tabpanel" aria-labelledby="bbGrabWidgetsTab">
                    				<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">                                                 	
                                                <div class="h2 lh-1">
                                                	Pre-configured Shortcodes for Widgets to use right now
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                                    		<p class="mb-2">
                                                The following widgets can be quickly added to your web pages with little- or no- customization needed.<br>
                                                Remember to replace the demonstration values for <span class="weight700 text-danger font-italic text-highlight">agent_id:318092</span> 
                                                and <span class="weight700 text-danger font-italic text-highlight">office_id</span> in paricular, 
                                                if you have a LIVE mls data feed.
                                            </p>
                                            <p class="smaller">
                                                Using filters will allow you to display practically any properties you like from your MLS.<br>
                                                Use the 
                                                <a href="https://leadsandcontacts.com/widget-filter/start" target="_blank">
                                                    Widget Wizard
													<svg 
														style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
														viewBox="0 0 512 512">
                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                    </svg>  
                                                </a>
                                                to create customized widget displays.
                                                See our demonstration site  
                                                <a href="https://charliesmithrealty.com" target="_blank">
                                                    CharlieSmithRealty.com
													<svg 
														style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
														viewBox="0 0 512 512">
                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                    </svg>  
                                                </a> for inspiration!
                                    		</p>            			                  		

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="alert alert-sm alert-warning alert-marker marker-right border-inner-outline">
                                                        <div class="marker-icon">
                                                            <svg 
                                                                viewBox="0 0 512 512" 
                                                                style="width: 1em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                <path d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-8.8 0-16 7.2-16 16V272c0 8.8 7.2 16 16 16s16-7.2 16-16V144c0-8.8-7.2-16-16-16zm24 224a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/>
                                                            </svg>  
                                                        </div>
                                                        <strong>Important</strong>
                                                        <div class="lh-13">
                                                            You must always use WordsPress shortcodes to display widgets in your WordPress site.
                                                            Do NOT use the HTML alternative.
                                                        </div>            
                                                    </div>     
                                                </div>
                                            </div>
     
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul class="nav nav-pills nav-vertical nav-arrowtabs nav-arrowtabs-smaller" id="bbGrabGoWidgetsTab" role="tablist">     
                                    					<li class="nav-item">                                                      
                                                            <a class="nav-link active" id="bbGridTab" data-toggle="tab" data-target="#bbGrid" type="button" role="tab" aria-controls="bbGrid" aria-selected="true">
                                                                Properties in a Grid
                                                            </a>  
                                    					</li>
                                    					<li class="nav-item">                                                           
                                                            <a class="nav-link" id="bbListTab" data-toggle="tab" data-target="#bbList" type="button" role="tab" aria-controls="bbList" aria-selected="false">
                                                            	Properties in a List    
                                                            </a>  
                                    					</li>
                                    					<li class="nav-item">  
                                                            <a class="nav-link" id="bbMapTab" data-toggle="tab" data-target="#bbMap" type="button" role="tab" aria-controls="bbMap" aria-selected="false">
                                                                Properties on a Map
                                                            </a>
                                    					</li>
                                    					<li class="nav-item">                                
                                                            <a class="nav-link" id="bbSearchTab" data-toggle="tab" data-target="#bbSearch" type="button" role="tab" aria-controls="bbSearch" aria-selected="false">
                                                                Search Form
                                                            </a>
                                    					</li>
                                    					<li class="nav-item">  
                                                            <a class="nav-link" id="bbQuickSearchTab" data-toggle="tab" data-target="#bbQuickSearch" type="button" role="tab" aria-controls="bbQuickSearch" aria-selected="false">
                                                                Quick Search Form
                                                            </a>
                                    					</li>
                                    					<li class="nav-item">  
                                                            <a class="nav-link" id="bbLcFormTab" data-toggle="tab" data-target="#bbLcForm" type="button" role="tab" aria-controls="bbLcForm" aria-selected="false">
                                                                Lead Capture Forms
                                                            </a>
                                    					</li>
                                    					<li class="nav-item">                                                               
                                                            <a class="nav-link" id="bbOfficeRosterTab" data-toggle="tab" data-target="#bbOfficeRoster" type="button" role="tab" aria-controls="bbOfficeRoster" aria-selected="false">
                                                            	Agent Profile / Index
                                                            </a>
                                    					</li>
<?php /*                                    					
                                    					<li class="nav-item">                                                                         
                                                            <a class="nav-link" id="bbResultsTab" data-toggle="tab" data-target="#bbResults" type="button" role="tab" aria-controls="bbResults" aria-selected="false">
                                                            	Search Results    
                                                            </a>
                                    					</li>
*/ ?>                            					
                                    					<li class="nav-item">  
                        						            <a class="nav-link" id="bbDisclaimerTab" data-toggle="tab" data-target="#bbDisclaimer" type="button" role="tab" aria-controls="bbDisclaimer" aria-selected="false">
                                                                IDX Disclaimer
                                                            </a>
                                    					</li>
                                    					<li class="nav-item">  
                                                            <a class="nav-link" id="bbPortalTab" data-toggle="tab" data-target="#bbPortal" type="button" role="tab" aria-controls="bbPortal" aria-selected="false">
                                                                Portal Quick Access
                                                            </a>
                                    					</li>
                                    					<li class="nav-item">  
                                                            <a class="nav-link" id="bbAdvancedWidgetTab" data-toggle="tab" data-target="#bbAdvancedWidget" type="button" role="tab" aria-controls="bbAdvancedWidget" aria-selected="false">
                                                                Advanced Functions
                                                            </a>
                                    					</li>                                    					                                    					                                    					                                                                            					            					              					            					
                                                    </ul>
                                                    <hr>
                                                    <ul class="list-disc list-compact list-smaller">
                                    					<li>  
                        									<a href="https://leadsandcontacts.com/widget-filter/start" title="Widget Wizard" target="_blank">
                        										Widget Wizard
																<svg 
																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
																	viewBox="0 0 512 512">
                                                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                </svg>                      										
                        									</a>   
                    									</li>  
                									</ul>                                                   
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="tab-content tab-pane-vertical" id="bbGrabGoWidgetsTabContent">


                                                        <div class="tab-pane fade active show" id="bbGrid" role="tabpanel" aria-labelledby="bbGridTab">
                                                            <div class="card card-inner-outline mb-4">
                                                                <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                                									<div class="marker-icon">	                   									
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                                		</svg> 
                                								   	</div>
                                								   	<div class="d-flex align-items-center">
                                                						<div class="text-h4">
                                                                            Properties in a Grid
                                                                        </div>
                                                                        <a href="https://support.buyingbuddy.com/knowledge-base/gallery-display-widget-reference/" class="smaller ml-auto mr-0" target="_blank">
                                                                            Documentation
            																<svg 
            																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
            																	viewBox="0 0 512 512">
                                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                            </svg>  
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                	<div>
                                                                		<img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/thumb-gallery.jpg" alt="Example of Grid layout">
                                                                		<p class="text-center xsmall mt-1">
                                                                			Remember! Use Widget Themes to blend colors with your website.
                                                            			</p>
                                                            		</div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                                Default View
                                                                            </h4>
                                                                            <p class="mb-1">
                                                                                If no filters are included this shows the default listing set for your account type.
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_FeaturedGallery"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Show My Active Properties
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                                This option will show active (only) listings that are listed by the Agent ID specified.
                                                                            </p>
                                                                            <p class="smaller mb-1">
                                                                                <span class="weight700">Note:</span>
                                                                                With no other options added, the default shows listings where 'listing_status' is equal to 'active', 
                                                                                i.e. this will NOT include active-rental, under-contract, or other status.<br>
                                                                           
                                                                            	To clarify the 'listing-status' used for your listing, use the 
                                                                            	<a href="https://leadsandcontacts.com/listing/lookup-listing-form" target="_blank">
                                                                            		listing lookup tool
                    																<svg 
                    																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
                    																	viewBox="0 0 512 512">
                                                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                        <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                                    </svg>                                                                              		
                                                                        		</a>.
                                                                        	</p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_FeaturedGallery" filter="agent_id:<span class="weight700 text-danger font-italic text-highlight">318092</span>"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <p class="mb-1">
                                                                            	Or to show 12 at a time, use this code:
                                                                        	</p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_FeaturedGallery" filter="agent_id:<span class="weight700 text-danger font-italic text-highlight">318092</span>+limit:12"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Show My Active using the 'Featured' layout
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                            	The featured layout shows larger photos and less text information for listings that are listed by the Agent ID specified.
                                                                        	</p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_FeaturedGallery" filter="featured:true+agent_id:<span class="weight700 text-danger font-italic text-highlight">318092</span>+limit:12"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Show My Active and Under Contract/ Pending Properties
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                            	This option will show all Active and Pending listings that are listed by the Agent ID specified.
                                                                        	</p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_FeaturedGallery" filter="agent_id:<span class="weight700 text-danger font-italic text-highlight">318092</span>+listing_status:active,under-contract"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Show My Sold Properties
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                            	This option will show all Sold listings that are listed by the Agent ID specified.
                                                                        	</p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_FeaturedGallery" filter="agent_id:<span class="weight700 text-danger font-italic text-highlight">318092</span>+listing_status:sold"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <p class="mb-1">
                                                                            	Or to show 12 at a time, use this code:
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_FeaturedGallery" filter="agent_id:<span class="weight700 text-danger font-italic text-highlight">318092</span>+limit:12"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Show Animated Carousel of My Sold Properties
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                            	This option will show all Sold listings that are listed by the Agent ID specified.
                                                                        	</p>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_FeaturedGallery" filter="carousel:true+agent_id:<span class="weight700 text-danger font-italic text-highlight">318092</span>+listing_status:sold"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Show Office Listings BUT always show MY Listings first
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                                This option is great if you have few listings. This will always show the office listings 
                                                                                - i.e. hopefully always some listings, but the sort will ensure that your listings always show first.<br>
                                                                                <span class="smaller">This filter can be used 'as-is' with the 'List' widget too.<br>
                                                                                Replace <span class="weight700 text-danger font-italic text-highlight">318092</span> 
                                                								and <span class="weight700 text-danger font-italic text-highlight">{OFFICE_ID}</span> 
                                                								with your MLS Agent and Office ID.
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                	[mbb_widget id="MBBv3_FeaturedGallery" filter="office_id:<span class="weight700 text-danger font-italic text-highlight">{OFFICE_ID}</span>+order:FIELD(agent_id,'<span class="weight700 text-danger font-italic text-highlight">318092</span>') desc, create_dt desc"]
                                                                            	</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="bbList" role="tabpanel" aria-labelledby="bbListTab">
                                                            <div class="card card-inner-outline mb-4">
                                                                <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                                									<div class="marker-icon">	                   									
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                                		</svg> 
                                								   	</div>
                                								   	<div class="d-flex align-items-center">
                                                						<div class="text-h4">
                                                                             Properties in a List
                                                                        </div>
                                                                        <a href="https://support.buyingbuddy.com/knowledge-base/list-display-widget-reference/" class="smaller ml-auto mr-0" target="_blank">
                                                                            Documentation
            																<svg 
            																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
            																	viewBox="0 0 512 512">
                                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                            </svg>  
                                                                        </a>
                                                                    </div>
                                                                </div>                                                            
                                                                <div class="card-body">
                                                                	<div>
                                                                		<img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/thumb-list.jpg" alt="Example of List layout">
                                                                		<p class="text-center xsmall mt-1">
                                                                			Remember! Use Widget Themes to blend colors with your website.
                                                            			</p>
                                                            		</div>                                                                
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Default View
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                                If no filters are included this shows the default listing set for your account type.
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_FeaturedList"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="bbMap" role="tabpanel" aria-labelledby="bbMapTab">
                                                            <div class="card card-inner-outline mb-4">

                                                                <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                                									<div class="marker-icon">	                   									
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                                		</svg> 
                                								   	</div>
                                								   	<div class="d-flex align-items-center">
                                                						<div class="text-h4">
                                                                             Properties On A Map
                                                                        </div>
                                                                        <a href="https://support.buyingbuddy.com/knowledge-base/map-display-widget-reference" class="smaller ml-auto mr-0" target="_blank">
                                                                            Documentation
            																<svg 
            																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
            																	viewBox="0 0 512 512">
                                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                            </svg>  
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <div class="card-body">
                                                                	<div>
                                                                		<img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/thumb-map.jpg" alt="Example of map layout">
                                                                		<p class="text-center xsmall mt-1">
                                                                			Remember! Use Widget Themes to blend colors with your website.
                                                            			</p>
                                                            		</div>                                                                 
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="small text-danger mb-3">
                                                                                No more than one Map widget per page.<br />
                                                                                Cannot be on the same page as the Results widget.
                                                                            </div>
                                                                            <h4 class="mb-1">
                                                                            	Default View
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                                Use this widget to display selected properties on a map.<br />
                                                                                It is NOT recommended to use this widget for general map searching. For a general map search, you should create your "map search" page and display the Results widget (above) with the "tab:map" option set.
                                                                            </p>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_InteractiveMap"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="bbSearch" role="tabpanel" aria-labelledby="bbSearchTab">
                                                            <div class="card card-inner-outline mb-4">
                                                                <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                                									<div class="marker-icon">	                   									
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                                		</svg> 
                                								   	</div>
                                								   	<div class="d-flex align-items-center">
                                                						<div class="text-h4">
                                                                             Search Form
                                                                        </div>
                                                                        <a href="https://support.buyingbuddy.com/knowledge-base/search-widget-reference/" class="smaller ml-auto mr-0" target="_blank">
                                                                            Documentation
            																<svg 
            																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
            																	viewBox="0 0 512 512">
                                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                            </svg>  
                                                                        </a>
                                                                    </div>
                                                                </div>                                                            
                                                                
                                                                <div class="card-body">
                                                                	<div>
                                                                		<img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/thumb-search.jpg" alt="Example of search forms">
                                                                		<p class="text-center xsmall mt-1">
                                                                			Remember! Use Widget Themes to blend colors with your website.
                                                            			</p>
                                                            		</div>                                                                   
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                                Standard Search Form
                                                                            </h4>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_SearchForm"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <p class="mb-1">
                                                                            	To preset the search form with selected values use the <a href="https://leadsandcontacts.com/widget-filter/start" target="_blank">Widget Wizard</a>.
                                                                        	</p>
                                                                            <p class="mb-1">
                                                                                <span class="strong">Need a Map Search?</span><br />
                                                                                Use the Results Widget (below) with the 'tab:map' option set.
                                                                            </p>
                                                                            <p class="mb-1">
                                                                                <span class="strong">Need a simple search?</span><br />
                                                                                Use the Quick Search Widget (below) for shorter search forms.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="tab-pane fade" id="bbQuickSearch" role="tabpanel" aria-labelledby="bbQuickSearchTab">
                                                            <div class="card card-inner-outline mb-4">
                                                                <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                                									<div class="marker-icon">	                   									
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                                		</svg> 
                                								   	</div>
                                								   	<div class="d-flex align-items-center">
                                                						<div class="text-h4">
                                                                             Quick-Search Form
                                                                        </div>
                                                                        <a href="https://support.buyingbuddy.com/knowledge-base/quick-search-widget-reference/" class="smaller ml-auto mr-0" target="_blank">
                                                                            Documentation
            																<svg 
            																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
            																	viewBox="0 0 512 512">
                                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                            </svg>  
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                	<div>
                                                                		<img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/thumb-quick-search.jpg" alt="Example of quick search forms">
                                                                		<p class="text-center xsmall mt-1">
                                                                			Remember! Use Widget Themes to blend colors with your website.
                                                            			</p>
                                                            		</div>                                                                 
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Simple1: Has fields for: area, price, beds, baths
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                                For most scenarios, use this first version as a short 1-line quick search form. This includes area, price, beds, baths.
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-12 mb-4">
                                                                            <div class="d-flex">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_QuickSearch" filter="formType:simple1"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Simple2: A single field for 'Area'
                                                                        	</h4>
                                                                        </div>
                                                                        <div class="col-12 mb-4">
                                                                            <div class="d-flex">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_QuickSearch" filter="formType:simple2"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Multiple options
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                                This version is good for a sidebar. This includes fields for: area, price, beds, baths, mls#, price-drop, has photos, and just listed.
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_QuickSearch"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="bbLcForm" role="tabpanel" aria-labelledby="bbLcFormTab">
                                                            <div class="card card-inner-outline mb-4">
                                                                <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                                									<div class="marker-icon">	                   									
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                                		</svg> 
                                								   	</div>
                                								   	<div class="d-flex align-items-center">
                                                						<div class="text-h4">
                                                                             Lead Capture Forms
                                                                        </div>
                                                                        <a href="https://support.buyingbuddy.com/knowledge-base/lead-capture-forms-reference" class="smaller ml-auto mr-0" target="_blank">
                                                                            Documentation
            																<svg 
            																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
            																	viewBox="0 0 512 512">
                                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                            </svg>  
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                	<div>
                                                                		<img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/thumb-lcf.jpg" alt="Example of lead capture forms">
                                                                		<p class="text-center xsmall mt-1">
                                                                			Remember! Use Widget Themes to blend colors with your website.
                                                            			</p>
                                                            		</div>                                                                 
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Show a CMA form
                                                                        	</h4>
                                                                            
                                                                            <p class="mb-1">
                                                                                The Lead Capture Form widget must be used with a filter to specify the form type to be displayed.<br />
                                                                                See support article for all options. This example will show the "cmashort" form.
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_LcForm" filter="form:cmashort"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Show a CMA form on a dark panel
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                            	This option shows the short CMA on a dark panel and displays the default titles.
                                                                        	</p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_LcForm" filter="form:cmashort+labelcolor:#ffffff+textcolor:#ffffff+showtitle:yes+backgroundpanel:0,0,0,0.25"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                      
                                                        
                                                        <div class="tab-pane fade" id="bbOfficeRoster" role="tabpanel" aria-labelledby="bbOfficeRosterTab">
                                                            <div class="card card-inner-outline mb-4">
                                                                <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                                									<div class="marker-icon">	                   									
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                                		</svg> 
                                								   	</div>
                                								   	<div class="d-flex align-items-center">
                                                						<div class="text-h4">
                                                                             Agent Profile, or Index of Agents/Offices
                                                                        </div>
                                                                        <a href="https://support.buyingbuddy.com/knowledge-base/officeroster-widget/" class="smaller ml-auto mr-0" target="_blank">
                                                                            Documentation
            																<svg 
            																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
            																	viewBox="0 0 512 512">
                                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                            </svg>  
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                	<div>
                                                                		<img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/thumb-agent.jpg" alt="Example of agent profile">
                                                                		<p class="text-center xsmall mt-1">
                                                                			Remember! Use Widget Themes to blend colors with your website.
                                                            			</p>
                                                            		</div>                                                                 
                                                                    <div class="row">                                                                       
                                                                        <div class="col-12">
                                                                            <div class="alert alert-sm alert-warning alert-marker marker-right border-inner-outline">
                                                                                <div class="marker-icon">
                                                                                    <svg 
                                                                                        viewBox="0 0 512 512" 
                                                                                        style="width: 1em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                                        <path d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-8.8 0-16 7.2-16 16V272c0 8.8 7.2 16 16 16s16-7.2 16-16V144c0-8.8-7.2-16-16-16zm24 224a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/>
                                                                                    </svg>  
                                                                                </div>
                                                                                <strong>Important</strong>
                                                                                <div class="mb-1 lh-13">
                                                                                    The OfficeRoster Widget <span class="strong">must</span> be installed on page slug "/team".<br />
                                                                                    If this is unavailable or cannot be used, or you have a single-user account and don't want to use this, then you should use the Brokers Widget (below) that can be added to any page.
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="mb-1">
                                                                            	Multiple Permalink Views
                                                                        	</h4>
                                                                            <div class="badge badge-success">Recommended</div>
                                                                            <p class="mb-1">
                                                                                For a single user account, the User profile is displayed, showing contact details, bio, active / sold listings.
                                                                            </p>
                                                                            <p class="mb-1">
                                                                                For a multi-user account, the widget dynamically creates multiple SEO-friendly (indexable) landing pages showing: list of offices, list of agents, agents in an office and a branded business view.<br />
                                                                                Agents will have a permalink slug for their profile.<br />
                                                                                See documentation support articles for special installation requirements.
                                                                            </p>
                                                                            <div class="mb-2">
                                                                                <p class="strong">
                                                                                    The following example permalinks will all be generated automatically (do not create these pages!):
                                                                                </p>
                                                                                <p>
                                                                                    <i class="fa-solid fa-caret-right mr-1"></i>Show a single Agent Profile:<br />
                                                                                    <code>www.charliesmithrealty.com/team/<span class="weight700 text-danger font-italic text-highlight">[agent_name_NO_SPACES]</span></code>
                                                                                </p>
                                                                                <p>
                                                                                    <i class="fa-solid fa-caret-right mr-1"></i>Show Offices:<br />
                                                                                    <code>www.charliesmithrealty.com/team</code>
                                                                                </p>
                                                                                <p>
                                                                                    <i class="fa-solid fa-caret-right mr-1"></i>Show All Agents:<br />
                                                                                    <code>www.charliesmithrealty.com/team/search</code>
                                                                                </p>
                                                                                <p>
                                                                                    <i class="fa-solid fa-caret-right mr-1"></i>Show Agents in one location:<br />
                                                                                    <code>www.charliesmithrealty.com/team/office/business/<span class="weight700 text-danger font-italic text-highlight">[your_location_ID]</span></code>
                                                                                </p>
                                                                                <p>
                                                                                    <i class="fa-solid fa-caret-right mr-1"></i>Show Business:<br />
                                                                                    <code>www.charliesmithrealty.com/team/office/business/<span class="weight700 text-danger font-italic text-highlight">[your_business_ID]</span></code>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 mb-4">
                                                                            <div class="d-flex">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_OfficeRoster"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Brokers Widget
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                                This alternative to the OfficeRoster widget can be used on any page.
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_Brokers"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="bbDisclaimer" role="tabpanel" aria-labelledby="bbDisclaimerTab">
                                                            <div class="card card-inner-outline mb-4">
                                                                <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                                									<div class="marker-icon">	                   									
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                                		</svg> 
                                								   	</div>
                                								   	<div class="d-flex align-items-center">
                                                						<div class="text-h4">
                                                                             IDX Disclaimers
                                                                        </div>
                                                                        <a href="https://support.buyingbuddy.com/knowledge-base/idx-disclaimer-widget/" class="smaller ml-auto mr-0" target="_blank">
                                                                            Documentation
            																<svg 
            																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
            																	viewBox="0 0 512 512">
                                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                            </svg>  
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Default View
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                                We recommend adding the IDX disclaimer widget to the footer area of every page in your website. 
                                                                                This will then hide the disclaimers shown with each widget and keep your page layouts clean.
                                                                            </p>
                                                                                                                                                       
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_Disclaimer"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                	</div>
                                                                    <div class="row">
                                                                        <div class="col-12">    
                                                                        	<p class="smaller">
                                                                        		The image below shows this effect. On the left, how MLS disclaimers will be shown underneath each widget. 
                                                                            	The image on the right demonstrates how the disclaimer widget is added to the very bottom of the page has the effect of suppressing all other disclaimers on that page.
                                                                            </p>
                                                                        	                                                            	
                                                                    		<img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/thumb-disclaimer.jpg" alt="Using the disclaimer widget">
                                                            			</div>                                                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        
                                                        <div class="tab-pane fade" id="bbPortal" role="tabpanel" aria-labelledby="bbPortalTab">
                                                            <div class="card card-inner-outline mb-4">
                                                                <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                                									<div class="marker-icon">	                   									
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                                		</svg> 
                                								   	</div>
                                								   	<div class="d-flex align-items-center">
                                                						<div class="text-h4">
                                                                             Portal Menu bar
                                                                        </div>
                                                                        <a href="https://support.buyingbuddy.com/knowledge-base/my-account-panel-widget" class="smaller ml-auto mr-0" target="_blank">
                                                                            Documentation
            																<svg 
            																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
            																	viewBox="0 0 512 512">
                                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                            </svg>  
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                	<div>
                                                                		<img src="<?php echo esc_url(plugin_dir_url(__FILE__)); ?>../images/thumb-myaccount.jpg" alt="Example of portal menu">
                                                                		<p class="text-center xsmall mt-1">
                                                                			Remember! Use Widget Themes to blend colors with your website.
                                                            			</p>
                                                            		</div>                                                                   
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Default View
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                                Use this on any page to show the Login/Signup options and menu access to My Account Portal functions.
                                                                            </p>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                    [mbb_widget id="MBBv3_LoginPanel"]
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
                                                        <div class="tab-pane fade" id="bbAdvancedWidget" role="tabpanel" aria-labelledby="bbAdvancedWidgetTab">
                                                            <div class="card card-inner-outline mb-4">
                                                                <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                                									<div class="marker-icon">	                   									
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                                		</svg> 
                                								   	</div>
                                								   	<div class="d-flex align-items-center">
                                                						<div class="text-h4">
                                                                             Advanced Widget Functions
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">  
                                                                    	<div class="col-12">                                                                    
                                                                    		<p>These advanced functions require varying levels (from novice to webmaster) of HTML, CSS and JavaScript knowledge.</p>
                                                                    		<ul class="list-disc list-compact mb-3">
                                                                    			<li><a href="https://support.buyingbuddy.com/knowledge-base/custom-search-form/" target="_blank">
                                                                        				Create Custom Search Forms
                        																<svg 
                        																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
                        																	viewBox="0 0 512 512">
                                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                            <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                                        </svg> 
                                                                					</a>                                                                    				
                                                                				</li>
                                                                    			<li><a href="https://support.buyingbuddy.com/knowledge-base/codepen/" target="_blank">
                                                                    				See Custom Form examples in Codepen
                    																<svg 
                    																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
                    																	viewBox="0 0 512 512">
                                                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                        <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                                    </svg>                                                                     			
                                                                    				</a>
                                                                				</li>
                                                                    			<li><a href="https://support.buyingbuddy.com/knowledge-base/custom-lead-capture-form/" target="_blank">
                                                                    				Create Custom Lead Capture Forms
                    																<svg 
                    																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
                    																	viewBox="0 0 512 512">
                                                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                        <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                                    </svg>                                                                     			
                                                                    				</a>
                                                                				</li>
                                                                    			<li>..and more. 
                                                                    			</li>           		
                                                                    		</ul> 
																			<p>
																				See 
                                                                    			<a href="https://support.buyingbuddy.com/article-categories/widget-reference/" target="_blank">
                                                                        			Widget Reference
                    																<svg 
                    																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
                    																	viewBox="0 0 512 512">
                                                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                        <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                                    </svg>                                                                     			
                                                                    			</a> 
                                                                    			and more 
                                                                    			<a href="https://support.buyingbuddy.com/article-categories/advanced-techniques/" target="_blank">
                                                                        			Advanced Widget techniques
                    																<svg 
                    																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
                    																	viewBox="0 0 512 512">
                                                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                        <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                                    </svg>                                                                     			
                                                                    			</a> features in our Support Site.
                                                                    		</p>	
                                                                		</div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
<?php  /*?>
                                                        <div class="tab-pane fade" id="bbResults" role="tabpanel" aria-labelledby="bbResultsTab">
                                                            <div class="card card-inner-outline mb-4">
                                                                <div class="card-header border-bottom alert border-secondary border-opacity-15 alert alert-secondary d-flex">
                                                                   	<div class="text-h4">
                                                                        Search Results
                                                                    </div>
                                                                    <a href="https://support.buyingbuddy.com/knowledge-base/search-results-widget-reference" class="ml-auto mr-0" target="_blank">
                                                                    	Documentation
                                                                        <svg
                                                                            style="width: 1em; height: 1em;vertical-align: text-top;fill: currentColor;overflow: hidden;"
                                                                            viewBox="0 0 512 512">
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                            <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"/>
                                                                        </svg>                                                                      	
                                                                	</a>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="small text-danger mb-3">
                                                                                No more than one Results widget per page.<br />
                                                                                Cannot be on the same page as the Interactive Map widget.
                                                                            </div>
                                                                            <h4 class="mb-1">
                                                                            	Show Results with Map Initially Hidden
                                                                        	</h4>
                                                                            <p class="mb-1">
                                                                                This default results widget will show results with the map "hidden".
                                                                            </p>
                                                                        </div>
                                                        
                                                                       	<div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                	[mbb_widget id="MBBv3_ListingResults"]
                                                                           		</div>
                                                                       		</div>
                                                                        </div>
                                                        
                                                                        <div class="col-12">
                                                                            <h4 class="mb-1">
                                                                            	Show Results with Map Displayed Initially
                                                                        	</h4>
																			<p class="mb-1">
																				This option will show the map (the map/grid split-screen) as the initial view.
																			</p>
                                                                        </div>
                                                                       	<div class="col-12">
                                                                            <div class="d-flex mb-3">
                                                                                <div class="form-control form-control-sm copyme">
                                                                                	[mbb_widget id="MBBv3_ListingResults" filter="tab:map"]
                                                                           		</div>
                                                                       		</div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
*/ ?>                                                                                                                

                                                    </div>
                                                </div>
                    
                                            </div>                           
                            			</div>
                            		</div>
                        		</div>
                                
                                <div class="tab-pane fade" id="bbSettings" role="tabpanel" aria-labelledby="bbSettingsTab">
                                

                    				<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">                                                 	
                                                <div class="h2 lh-1">
                                                	Settings
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700"> 
                                                <form action="" method="post" name="options">
                                                    <input type="hidden" name="buyingbuddy_trial" value="<?php echo esc_html($buyingbuddy_options["trial"]);?>">
                                                    <input type="hidden" name="buyingbuddy_purchase" value="<?php echo esc_html($buyingbuddy_options["purchase"]);?>">
                                                    <?php wp_nonce_field( 'buyingbuddy_settings_action', 'buyingbuddy_settings' ); ?>
                                
                                                    <div class="card card-inner-outline mt-2 mb-4">
                                                        <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                        									<div class="marker-icon">
                                                                <svg 
                                                                    viewBox="0 0 512 512" 
                                                                    style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                    <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                        		</svg> 
                        								   	</div>
                                                            <div class="h3">Required Settings</div>
                                                        </div>  
                                                        <div class="card-body">  
                                                      		<div class="max600 mx-auto">  
                                                  		                                		  
                                                                <div class="form-inline justify-content-between mb-4">
                                                                    <label for="buyingbuddy_acid" class="floating-label">
                                                                        <svg 
                                                                        	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                        	viewBox="0 50 768 1024"  >
                                                                            <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                        </svg>  
                                                                        Account activation key
                                                                    </label>
                                                                    <div>
                                                                        <input type="text" class="form-control flex-grow-1" id="buyingbuddy_acid" name="buyingbuddy_acid" placeholder="Account Activation Key" value="<?php echo esc_html($buyingbuddy_options["acid"])?>">
                                                                    </div>
                                                                </div>
                                                      			<h4 class="mb-1">Google Map Key</h4>  
                                                      			<?php if(esc_html($buyingbuddy_options["google_map_key"]) =="" ) { echo wp_kses_post($gmapInstructions); } ?>                               
                                                                <div class="form-group mb-4">
                                                                    <label for="buyingbuddy_google_map_key" class="floating-label">
                                                                        <svg 
                                                                        	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                        	viewBox="0 50 768 1024"  >
                                                                            <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                        </svg> 
                                                                        Google Map API Key
                                                                    </label>
                                                                    <div class="form-inline">
                                                                        <input type="text" class="form-control flex-grow-1" id="buyingbuddy_google_map_key" name="buyingbuddy_google_map_key" placeholder="Google Map API Key" value="<?php echo esc_html($buyingbuddy_options["google_map_key"]);?>">
                                                                    </div>
                                                                </div> 
                                                                <div class="h6 d-flex align-items-center mb-1">
                                                                    <svg 
                                                                    	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                    	viewBox="0 50 768 1024"  >
                                                                        <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                    </svg>                                  
                                                                    Foundation Pages 
                                                                </div> 
                                                <?php if ($buyingbuddy_status == 30) { ?>              
                                                                <p>
                                                                    The installation process automatically created 3 foundation pages with widgets.
                                                                </p>  
                                                                <ul class="small list-disc list-compact mb-2">
                                                                    <li>/listing-results (foundation page that shows "search results")</li>
                                                                    <li>/listing-details (foundation page that shows "property details")</li>
                                                                    <li>/listing-market (foundation page that shows "market reports", if available)</li>
                                                                </ul>
                                                <?php } ?>
                                                                <p class="mb-2">
                                                                    Do not delete or add extra widgets to foundation pages.<br> 
                                                                    See the 
                                                                    <a href="https://support.buyingbuddy.com/knowledge-base/installing-mbb-wordpress-plugin/" target="_blank">installation support article
        																<svg 
        																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
        																	viewBox="0 0 512 512">
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                            <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                        </svg>                                         
                                                                    </a>
                                                                    article for more details.                                       
                                                                </p>   
                                                                <div class="alert alert-sm alert-warning alert-marker marker-right border-inner-outline">
                                                                    <div class="marker-icon">
                                                                        <svg 
                                                                            viewBox="0 0 512 512" 
                                                                            style="width: 1em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                            <path d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-8.8 0-16 7.2-16 16V272c0 8.8 7.2 16 16 16s16-7.2 16-16V144c0-8.8-7.2-16-16-16zm24 224a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/>
                                                                        </svg>  
                                                                    </div>
                                                                    <strong>Important</strong>
                                                                    <div class="mb-1 lh-13">
                                                                        Buying Buddy requires 3 special "foundation pages".<br>                                             
                                                                        Do not delete these pages. 
                                                                    </div>
                                                                    <div class="mb-1 lh-13">
                                                                        The foundation page slugs must also be recorded in your Buying Buddy account dashboard, in  
                                                                        <a href="https://www.leadsandcontacts.com/widget-settings/install?tab=foundation" target="_blank">Plugin Installation and Setup
        																<svg 
        																	style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
        																	viewBox="0 0 512 512">
                                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                            <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                                        </svg>                                           
                                                                        </a> (where you can discover the actual slugs used). These must match.                                          
                                                                    </div>
                                                                </div>   
                                                            </div>                                                                                                                                    
                                                        </div>
                                                    </div>
                                     
                                                    <div class="card card-inner-outline mb-4">
                                                        <div class="card-header border-bottom alert border-normal border-opacity-15 alert alert-dark alert-marker marker-rounded">
                        									<div class="marker-icon">
                                                                <svg 
                                                                    viewBox="0 0 512 512" 
                                                                    style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                    <path d="M459.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L425.4 256 276.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l160-160zm-352 160l160-160c6.2-6.2 6.2-16.4 0-22.6l-160-160c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L233.4 256 84.7 404.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"/>
                                                        		</svg> 
                        								   	</div>
                                                            <div class="h3">Optional Settings</div>
                                                        </div>  
                                                        <div class="card-body">
            												<div class="max600 mx-auto">    
                                                                <div class="mb-4">
                                                                    <div class="form-inline justify-content-between mb-1">
                                                                        <label for="buyingbuddy_google_map">
                                                                            <svg 
                                                                            	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                            	viewBox="0 50 768 1024"  >
                                                                                <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                            </svg>   
                                                                            Buying Buddy Loads Google Maps Library?
                                                                        </label>
                                                                        <select class="form-control w-auto flex-none" id="buyingbuddy_google_map" name="buyingbuddy_google_map">
                                                                            <option value="no" <?php echo selected(esc_html($buyingbuddy_options['google_map']), "no", false )?>>Yes (default)</option>
                                                                            <option value="yes" <?php echo selected(esc_html($buyingbuddy_options['google_map']), "yes", false )?>>No</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="xsmall">If your WordPress theme or another plugin is loading Google Maps API then set this to "No".</div>
                                                                </div>                                                                                                                                                     
                                                                <div class="mb-4">
                                                                    <div class="form-inline justify-content-between mb-1">
                                                                        <label for="buyingbuddy_disable">
                                                                            <svg 
                                                                            	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                            	viewBox="0 50 768 1024"  >
                                                                                <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                            </svg>                                
                                                                            Load the Buying Buddy plugin?
                                                                        </label>
                                                                        <select class="form-control w-auto" id="buyingbuddy_disable" name="buyingbuddy_disable"> 
                                                                            <option value="no" <?php echo selected(esc_html($buyingbuddy_options['disable']), "no", false )?>>Yes (default)</option>
                                                                            <option value="yes" <?php echo selected(esc_html($buyingbuddy_options['disable']), "yes", false )?>>No</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="xsmall">Use this option to temporarily stop the plugin loading.</div>
                                                                </div>  
                                                                <div class="mb-4">                                                                                                                                        
                                                                    <div class="form-inline justify-content-between mb-1">
                                                                        <label for="buyingbuddy_allowedids" class="floating-label">
                                                                            <svg 
                                                                            	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                            	viewBox="0 50 768 1024"  >
                                                                                <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                            </svg>  
                                                                            Only load plugin on these page/post IDs:
                                                                        </label>
                                                                        <input type="text" class="form-control w-auto" id="buyingbuddy_allowedids"  name="buyingbuddy_allowedids" aria-label="Allowed Post IDs" placeholder="e.g. 6,89,111,124" value="<?php echo esc_html($buyingbuddy_allowedids)?>">
                                                                        <div class="xsmall">
                                                                        	Use this option to only load the plugin on the pages or post IDs listed.
                                                                    	</div>                                                                                                        
                                                                    </div> 
                                                                </div>                                                                                       
                                                                <div class="mb-4">
                                                                    <div class="form-inline justify-content-between mb-1">
                                                                        <label for="buyingbuddy_auto_updates">
                                                                            <svg 
                                                                            	style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                            	viewBox="0 50 768 1024"  >
                                                                                <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                            </svg>                                   
                                                                            Enable auto updates?
                                                                        </label>
                                                                        <select class="form-control w-auto" id="buyingbuddy_auto_updates" name="buyingbuddy_auto_updates"> 
                                                                            <option value="yes" <?php echo selected(esc_html($buyingbuddy_options['auto_updates']), "yes", false )?>>Yes (default)</option>
                                                                            <option value="no" <?php echo selected(esc_html($buyingbuddy_options['auto_updates']), "no", false )?>>No</option>
                                                                        </select>
                                                                    </div>
                                                                	<div class="xsmall mb-2">This should be set to "Yes" to automatically receive the latest updates and features for the plugin.</div>
                                                            	</div>
                                                                <div class="mb-4">
                                                                    <div class="form-inline justify-content-between mb-1">
                                                                        <label for="buyingbuddy_express_sites">
                                                                            <svg 
                                                                                style="width: 1.25em; height: 1.25em;vertical-align: middle;fill: currentColor;overflow: hidden;" 
                                                                                viewBox="0 50 768 1024"  >
                                                                                <path d="m 406.576,512 q 0,14.848 -10.85867,25.70667 l -256,256 q -10.85866,10.85866 -25.70666,10.85866 -14.848,0 -25.70667,-10.85866 Q 77.44533,782.848 77.44533,768 V 256 q 0,-14.848 10.85867,-25.70667 10.85867,-10.85866 25.70667,-10.85866 14.848,0 25.70666,10.85866 l 256,256 Q 406.576,497.152 406.576,512 Z" id="path2" >
                                                                            </svg>                                   
                                                                            Enable Express Sites?
                                                                        </label>
                                                                        <select class="form-control w-auto" id="buyingbuddy_express_sites" name="buyingbuddy_express"> 
                                                                            <option value="no" <?php echo selected(esc_html($buyingbuddy_options['express']), "no", false )?>>No (default)</option>
                                                                            <option value="yes" <?php echo selected(esc_html($buyingbuddy_options['express']), "yes", false )?>>Yes</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="xsmall mb-2"><span class="weight700">Leave this as NO</span> unless you receive specific instructions to change this.</div>
                                                                </div>                                                              	 
                                                            </div>                                                                                                                                                                                                                                                                         
                                                        </div>
                                                    </div>

                                
                                                    <div class="row">
                                                        <div class="col">  
                                                            <input type="hidden" name="buyingbuddy_submitted" value="1" />
                                                            <div class="mb-4 text-right">
                                                                <button type="submit" class="btn btn-success ml-auto mr-0">Update Settings</button>
                                                            </div>                      
                                                        </div>
                                                    </div>    
                                                </form>
                                        	</div>		
                                        </div>                                   
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bbDebug" role="tabpanel" aria-labelledby="bbDebugTab">


                    				<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">                                                 	
                                                <div class="h2 lh-1">
                                                	Debug Information
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700"> 
                                                <p class="mt-0">
                                                    Copy these details and add them to a help ticket if you are reporting a problem using Buying Buddy on your site.
                                                </p>
                                                <div class="d-flex">
                                                   
                                                    <div class="copyme w-100">
                                                        <h3 class="mb-2">Plugin Version</h3>
                                                        
                                                            <?php echo esc_html($plugin_data['Version']);?>
                                                        
                                                        <h3 class="mb-2 mt-3">MBB Options</h3>
                                                    
                                                            Acid: <?php echo esc_html($buyingbuddy_options["acid"]);?><br>
                                                            Google MAP Key: <?php echo esc_html($buyingbuddy_options["google_map_key"]);?><br>
                                                            Widget Theme: <?php echo esc_html($buyingbuddy_theme_id);?><br>
                                                            Disable loading of MBB: <?php echo esc_html($buyingbuddy_options["disable"]);?><br>
                                                            Disable loading Google Maps library: <?php echo esc_html($buyingbuddy_options["google_map"]);?><br>
                                                            Only load MBB on these Pages: <?php echo esc_html($buyingbuddy_allowedids);?><br>
                                                            Enable plugin auto updates: <?php echo esc_html($buyingbuddy_options["auto_updates"]);?><br>
                                                        
                                                       <h3 class="mb-2 mt-3">WordPress Details:</h3>
                                                        
                                                            WordPress Version: <?php echo esc_html(get_bloginfo('version'));?><br>
                                                            Active Theme: <?php echo esc_html(get_bloginfo('stylesheet_url'));?><br>
                
                                                       <h3 class="mb-2 mt-3">Rewrite Cache: </h3>
                                                            Last Flushed: <?php echo esc_html(date("Y-m-d H:i:s",$buyingbuddy_options["last_modified"]));?><br>
                                                            Current Time: <?php echo esc_html(date("Y-m-d H:i:s",time()));?><br>
                                                            
                                                       <h3 class="mb-2 mt-3">Active Plugins</h3>
                                                            <?php echo wp_kses_post($plugin_list); ?>
                                                    </div>
                                                </div> 
                                            </div>   
                                        </div>                                                  
                                    </div>                                                          
                                </div>
                            </div>

                        </div>
                    </div>
        		</div>
				<div class="tab-pane fade" id="bbTutorials" role="tabpanel" aria-labelledby="bbTutorialsTab">             
                    <div class="row">
                        <div class="col-lg-3">
                            <ul class="nav nav-pills nav-vertical nav-arrowtabs d-none d-lg-block fixed-tab-menu" id="bbTutorialsPanelTab" role="tablist"> 
            					<li class="nav-item">  
                                    <a class="nav-link active" id="bbHowToAddTab" data-toggle="tab" data-target="#bbHowToAdd" type="button" role="tab" aria-controls="bbHowToAdd" aria-selected="true">	
                                        Add a widget
                                    </a>
            					</li>
            					<li class="nav-item">  
                                    <a class="nav-link" id="bbHowToModifyTab" data-toggle="tab" data-target="#bbHowToModify" type="button" role="tab" aria-controls="bbHowToModify" aria-selected="false">
                                        Modify an existing widget
                                    </a>
            					</li>
            					<li class="nav-item">  
                                    <a class="nav-link" id="bbSearchPageTab" data-toggle="tab" data-target="#bbSearchPage" type="button" role="tab" aria-controls="bbSearchPage" aria-selected="false">
                                        Search Page
                                    </a> 
            					</li>
            					<li class="nav-item">  
                                    <a class="nav-link" id="bbFeaturedTab" data-toggle="tab" data-target="#bbFeatured" type="button" role="tab" aria-controls="bbFeatured" aria-selected="false">
                                        Featured Listings Page
                                    </a> 
            					</li>
            					<li class="nav-item">  
                                    <a class="nav-link" id="bbSoldTab" data-toggle="tab" data-target="#bbSold" type="button" role="tab" aria-controls="bbSold" aria-selected="false">
                                        Sold Listings Page
                                    </a>  
            					</li>
            					<li class="nav-item">                            
                                    <a class="nav-link" id="bbValueTab" data-toggle="tab" data-target="#bbValue" type="button" role="tab" aria-controls="bbValue" aria-selected="false">
                                        Home Value Page
                                    </a>  
            					</li>
            					<li class="nav-item">  
                                    <a class="nav-link" id="bbAboutTab" data-toggle="tab" data-target="#bbAbout" type="button" role="tab" aria-controls="bbAbout" aria-selected="false">
                                        About Page
                                    </a> 
            					</li>                       					            					              					            					                                  					            					              					            					
                            </ul>
                           	<h1 class="d-lg-none mb-3">
                           		Tutorials
                            </h1>                            
                            <select class="form-control d-lg-none mb-3 tab_selector">
                                <option value="bbHowToAddTab">How to add a widget</option>
                                <option value="bbHowToModifyTab">How to modify an existing widget</option>
                                <option value="bbSearchPageTab"> Search Page Tutorial</option>
                                <option value="bbFeaturedTab">Featured Listings Page Tutorial</option>
                                <option value="bbSoldTab">Sold Listings Page Tutorial</option>   
                                <option value="bbValueTab">Home Value Page Tutorial</option>   
                                <option value="bbAboutTab">About Page Tutorial</option>                                  					            					              					            					                                  					            					              					            					
                            </select> 
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content" id="bbTutorialsPanelContent">
                                <div class="tab-pane fade active show" id="bbHowToAdd" role="tabpanel" aria-labelledby="bbHowToAddTab">
                    				<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">     
                                            	<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/bb/bb-helper.png" class="img-sm img-fluid mr-4" alt="">
                                                <div class="h2 lh-1">
                                                	Add a Widget Your Website
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700"> 
                            				
                            				    
                                        		<div class="card card-inner-outline bg-soft-success bg-opacity-60 mb-4">                 		
                                                    <div class="card-header alert alert-success alert-marker marker-right">
                    									<div class="marker-icon">
                        									<svg
                                                            	viewBox="0 0 576 512" 
                                                            	style="width: 1.125rem; height: auto; vertical-align: middle;fill: currentColor;overflow: hidden;">  																		   
                                                            	<!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        									   	<path d="M176 32H400c9 0 15.4 7.3 15.1 15c-6.2 163.9-44.9 239.2-76.1 273.5c-15.5 17.1-29.9 24.8-39.3 28.3c-4.8 1.8-8.5 2.6-10.6 3c-.5 .1-.9 .1-1.2 .2c-.3 0-.7-.1-1.2-.2c-2.1-.3-5.8-1.1-10.6-3c-9.4-3.5-23.8-11.3-39.3-28.3C205.8 286.2 167.1 210.9 160.9 47c-.3-7.8 6.2-15 15.1-15zM400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H48C22 64-1.3 85.6 1.8 113.7c10.1 94 61.9 158.2 118.1 199.9c55.9 41.4 117.1 61.3 149.3 66.9l.1-.3c.9 .3 1.8 .6 2.7 .8V480H176c-8.8 0-16 7.2-16 16s7.2 16 16 16H288 400c8.8 0 16-7.2 16-16s-7.2-16-16-16H304V381.1c.9-.3 1.8-.5 2.7-.8l.1 .3c32.2-5.7 93.4-25.5 149.3-66.9c56.2-41.7 108-105.9 118.1-199.9C577.3 85.6 554 64 528 64H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zm44.2 96H528c9.3 0 15.2 7.3 14.4 14.3c-8.9 82.9-54.3 139.8-105.4 177.6c-19.6 14.6-40 26.2-59.2 35.3C407 281.9 434.5 212.5 444.2 96zm-246 227.2c-19.2-9.1-39.6-20.7-59.2-35.3C87.9 250.1 42.5 193.2 33.6 110.3C32.8 103.3 38.7 96 48 96h83.8c9.8 116.5 37.2 185.9 66.4 227.2z"/>
                        								   	</svg>
                    								   	</div>
                    									<div class="text-h4">
                                                        	Objective
                                                    	</div> 
                                                    </div>
                                                	<div class="card-body">
                                                    	<div class="smaller lh-13">
                                                    		This tutorial will help you add a new widget to your website.
                                                		</div>
                                                	</div>		
                                                </div>   
                        						<a href="#" class="btn btn-link-solid btn-label lh-1375 rounded-pill mb-3 show-video" data-pic="https://dr94erhe1w4ic.cloudfront.net/bb-support/2520-poster.jpg"  data-vid="https://dr94erhe1w4ic.cloudfront.net/bb-support/2520-bb-wp-add-widget.mp4" data-target="#bbVideoModal" >	
                        							<span class="btn-label-icon rounded-pill">				 
                                                        <svg
                                                            style="width: 1.25rem; height: 1.25rem; fill:currentColor;fill-rule:evenodd;stroke:none;stroke-width:1"
                                                            viewBox="0 0 512 512">
                                                            <path d="M256 12.8C121.9 12.8 12.8 121.9 12.8 256S121.9 499.2 256 499.2 499.2 390.1 499.2 256 390.1 12.8 256 12.8zm0 465.9c-122.9 0-222.7-99.8-222.7-222.7S133.1 33.3 256 33.3 478.7 133.1 478.7 256 378.9 478.7 256 478.7zm101.4-239.1-141.3-88.1c-12.8-8.2-29.7 1-29.7 16.4v176.6c0 15.4 16.9 24.6 29.7 16.4l141.3-88.1c12.3-8.2 12.3-25.6 0-33.3z"/>                                	
                                                        </svg> 
                        							</span>         
                                                    Video: How to Add a Widget
                                                </a>                            
                                        		<h2 class="mb-3">How to Add a Widget</h2>
                          
                                				<div class="h3 mb-2">1. Use the Wizard to create a new widget</div>                    				
                            					<ul class="list-alpha lh-13 ml-3">
                                                    <li>In your Buying Buddy account, go to the Widgets menu, then select "Wizard".</li>
                                                    <li>Continue through the wizard selecting any of the filter options available that can include: 
                                                    MLS fields, property status, listing agent, listing office and more.</li>
                                                    <li>On the final step of the wizard, select the "<span class="weight700">Add Widget</span>" tab on the left. <br>
                                                    Then click the copy button to copy the short code to your clipboard.
                                                    <img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/wp-plugin/wizard-get-wordpress-shortcode.jpg" class="mx-auto img-fluid shadow-img my-4" alt="Add new widget">
                                                    </li>								
                            					</ul>
                                				<div class="h3 my-2">2. Add the new widget short code to your page</div>                    				
                            					<ul class="list-alpha lh-13 ml-3 mb-5">
                                                    <li>Return to your WordPress editor </li>
                                                    <li>Paste the short code into your webpage. <br>
                                                    This can be done as plain text or as a "short code" block.</li>											
                            					</ul>        					
                            					
                                        		<div class="card card-inner-outline mb-4">
                                                    <div class="card-header border-bottom alert alert-info alert-marker marker-rounded">
                    									<div class="marker-icon">
                                                            <svg 
                                                                class="mr-1" 
                                                                viewBox="0 0 640 512" 
                                                                style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                <path d="M69.3 4l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3S58.3-3.3 69.3 4zM597.3 44l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zM24 160H88c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24zm528 0h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552c-13.3 0-24-10.7-24-24s10.7-24 24-24zM117.3 332l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zm432-39.9l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3s22.3-14 33.3-6.7zm-100.1 5.7c-19.8 27.1-39.7 54.4-49.2 86.2H240c-9.6-31.9-29.5-59.1-49.2-86.2l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C155.6 247.9 144 213.3 144 176C144 78.8 222.8 0 320 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0zM400 432c0 44.2-35.8 80-80 80s-80-35.8-80-80V416H400v16zM320 96c8.8 0 16-7.2 16-16s-7.2-16-16-16c-61.9 0-112 50.1-112 112c0 8.8 7.2 16 16 16s16-7.2 16-16c0-44.2 35.8-80 80-80z"/>
                                                            </svg>  
                                                        </div> 
                                                        <div class="text-h4">
                                                        	Ideas for Doing More
                                                    	</div>
                                                    </div>
                                                	<div class="card-body">
                                                		<ul class="list-disc">
                                                            <li>Use widgets to add MLS content to your website<br>                       	
                                                            	<div class="smaller lh-13">
                                                            		Use the Wizard to create more widgets to help your marketing.<br>
                                                            		See our demonstration website for inspiration and ideas.
                                                        		</div>
                                                        	</li>
                                                        </ul> 
                                                    </div>
                                                </div>  	
                                        	</div>		
                                        </div>                                   
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bbHowToModify" role="tabpanel" aria-labelledby="bbHowToModifyTab">
                    				<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">     
                                            	<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/bb/bb-helper.png" class="img-sm img-fluid mr-4" alt="">
                                                <div class="h2 lh-1">
                                                	Modify an Existing Widget
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700">     
                                        		<div class="card card-inner-outline bg-soft-success bg-opacity-60 mb-4">             		
                                                    <div class="card-header alert alert-success alert-marker marker-right">
                    									<div class="marker-icon">
                        									<svg
                                                            	viewBox="0 0 576 512" 
                                                            	style="width: 1.125rem; height: auto; vertical-align: middle;fill: currentColor;overflow: hidden;">  																		   
                                                            	<!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        									   	<path d="M176 32H400c9 0 15.4 7.3 15.1 15c-6.2 163.9-44.9 239.2-76.1 273.5c-15.5 17.1-29.9 24.8-39.3 28.3c-4.8 1.8-8.5 2.6-10.6 3c-.5 .1-.9 .1-1.2 .2c-.3 0-.7-.1-1.2-.2c-2.1-.3-5.8-1.1-10.6-3c-9.4-3.5-23.8-11.3-39.3-28.3C205.8 286.2 167.1 210.9 160.9 47c-.3-7.8 6.2-15 15.1-15zM400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H48C22 64-1.3 85.6 1.8 113.7c10.1 94 61.9 158.2 118.1 199.9c55.9 41.4 117.1 61.3 149.3 66.9l.1-.3c.9 .3 1.8 .6 2.7 .8V480H176c-8.8 0-16 7.2-16 16s7.2 16 16 16H288 400c8.8 0 16-7.2 16-16s-7.2-16-16-16H304V381.1c.9-.3 1.8-.5 2.7-.8l.1 .3c32.2-5.7 93.4-25.5 149.3-66.9c56.2-41.7 108-105.9 118.1-199.9C577.3 85.6 554 64 528 64H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zm44.2 96H528c9.3 0 15.2 7.3 14.4 14.3c-8.9 82.9-54.3 139.8-105.4 177.6c-19.6 14.6-40 26.2-59.2 35.3C407 281.9 434.5 212.5 444.2 96zm-246 227.2c-19.2-9.1-39.6-20.7-59.2-35.3C87.9 250.1 42.5 193.2 33.6 110.3C32.8 103.3 38.7 96 48 96h83.8c9.8 116.5 37.2 185.9 66.4 227.2z"/>
                        								   	</svg>
                    								   	</div>
                    									<div class="text-h4">
                                                        	Objective
                                                    	</div> 
                                                    </div>
                                                	<div class="card-body">
                                                    	<div class="smaller lh-13">
                                                    		This tutorial will help you modify an existing widget by replacing the filter.
                                                		</div>
                                                	</div>		
                                                </div>                           
                                        		<h2 class="mb-3">How to Modify a Widget</h2>
                          
                                				<div class="h3 mb-2">1. Use the Wizard to create a new filter.</div>                    				
                            					<ul class="list-alpha lh-13 ml-3">
                                                    <li>In your Buying Buddy account, go to the Widgets menu, then select "Wizard".</li>
                            						<li>On the first step, select the same widget you are modifying.
                            						</li>                                                
                                                    <li>Continue through the wizard selecting any of the filter options available that can include: 
                                                    MLS fields, property status, listing agent, listing office and more.</li>
                                                    <li>On the final step of the Wizard, select the "<span class="weight700">Get Filter</span>" tab and copy the filter to your clipboard.
                                                    <img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/wp-plugin/wordpress-wizard-get-filter.jpg" class="mx-auto img-fluid shadow-img my-4" alt="Get filter">
                                                    </li>								
                            					</ul>
                                				<div class="h3 my-2">2. Update the Widget with this new filter</div>                    				
                            					<ul class="list-alpha lh-13 ml-3 mb-3">
                                                    <li>Return to your WordPress editor.			
                            						</li>
                            						<li>Edit the widget short code.<br>
                            						In the short code for the widget, identify the "filter"<br>
                            						The filter part looks like this: <code>filter="xxxxxxxxx"</code>.<br>
                            						When updating the "filter", 
                            						you will replace everything between the two quotes with the new filter that is in your clipboard<br>
                            						</li>										
                            					</ul>  
                            					<h4 class="mb-2">Example</h4>
                            					<p class="mb-4">
                            						To update the filter in this widget short code:<br>
                            						<code>&#91;mbb_widget id="MBBv3_FeaturedGallery" filter="<span class="weight700 text-highlight">mls_id:tx514+listing_status:active</span>"&#93;</code><br>
                            						Select everything between the two quotes  - this is shown above with a yellow background.<br>
                            						Then replace this with the new filter.                           						
                            					</p>	                     					      					
                            					
                                        		<div class="card card-inner-outline mb-4">
                                                    <div class="card-header border-bottom alert alert-info alert-marker marker-rounded">
                    									<div class="marker-icon">
                                                            <svg 
                                                                class="mr-1" 
                                                                viewBox="0 0 640 512" 
                                                                style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                <path d="M69.3 4l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3S58.3-3.3 69.3 4zM597.3 44l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zM24 160H88c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24zm528 0h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552c-13.3 0-24-10.7-24-24s10.7-24 24-24zM117.3 332l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zm432-39.9l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3s22.3-14 33.3-6.7zm-100.1 5.7c-19.8 27.1-39.7 54.4-49.2 86.2H240c-9.6-31.9-29.5-59.1-49.2-86.2l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C155.6 247.9 144 213.3 144 176C144 78.8 222.8 0 320 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0zM400 432c0 44.2-35.8 80-80 80s-80-35.8-80-80V416H400v16zM320 96c8.8 0 16-7.2 16-16s-7.2-16-16-16c-61.9 0-112 50.1-112 112c0 8.8 7.2 16 16 16s16-7.2 16-16c0-44.2 35.8-80 80-80z"/>
                                                            </svg>  
                                                        </div> 
                                                        <div class="text-h4">
                                                        	Ideas for Doing More
                                                    	</div>
                                                    </div>
                                                	<div class="card-body">
                                                		<ul class="list-disc">
                                                            <li>Use more widgets to add MLS content to your website<br>                       	
                                                            	<div class="smaller lh-13">
                                                            		Use the Wizard to create more widgets to help your marketing.<br>
                                                            		See our demonstration website for inspiration and ideas.
                                                        		</div>
                                                        	</li>
                                                        </ul> 
                                                    </div>
                                                </div>  	
                                        	</div>		
                                        </div>                                   
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bbSearchPage" role="tabpanel" aria-labelledby="bbSearchPageTab">
                    				<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">     
                                            	<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/bb/bb-helper.png" class="img-sm img-fluid mr-4" alt="">
                                                <div class="h2 lh-1">
                                                	 The Search Template Page
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700">     
                                        		<div class="card card-inner-outline bg-soft-success bg-opacity-60 mb-4">               		
                                                    <div class="card-header alert alert-success alert-marker marker-right">
                    									<div class="marker-icon">
                        									<svg
                                                            	viewBox="0 0 576 512" 
                                                            	style="width: 1.125rem; height: auto; vertical-align: middle;fill: currentColor;overflow: hidden;">  																		   
                                                            	<!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        									   	<path d="M176 32H400c9 0 15.4 7.3 15.1 15c-6.2 163.9-44.9 239.2-76.1 273.5c-15.5 17.1-29.9 24.8-39.3 28.3c-4.8 1.8-8.5 2.6-10.6 3c-.5 .1-.9 .1-1.2 .2c-.3 0-.7-.1-1.2-.2c-2.1-.3-5.8-1.1-10.6-3c-9.4-3.5-23.8-11.3-39.3-28.3C205.8 286.2 167.1 210.9 160.9 47c-.3-7.8 6.2-15 15.1-15zM400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H48C22 64-1.3 85.6 1.8 113.7c10.1 94 61.9 158.2 118.1 199.9c55.9 41.4 117.1 61.3 149.3 66.9l.1-.3c.9 .3 1.8 .6 2.7 .8V480H176c-8.8 0-16 7.2-16 16s7.2 16 16 16H288 400c8.8 0 16-7.2 16-16s-7.2-16-16-16H304V381.1c.9-.3 1.8-.5 2.7-.8l.1 .3c32.2-5.7 93.4-25.5 149.3-66.9c56.2-41.7 108-105.9 118.1-199.9C577.3 85.6 554 64 528 64H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zm44.2 96H528c9.3 0 15.2 7.3 14.4 14.3c-8.9 82.9-54.3 139.8-105.4 177.6c-19.6 14.6-40 26.2-59.2 35.3C407 281.9 434.5 212.5 444.2 96zm-246 227.2c-19.2-9.1-39.6-20.7-59.2-35.3C87.9 250.1 42.5 193.2 33.6 110.3C32.8 103.3 38.7 96 48 96h83.8c9.8 116.5 37.2 185.9 66.4 227.2z"/>
                        								   	</svg>
                    								   	</div>
                    									<div class="text-h4">
                                                        	Objective
                                                    	</div> 
                                                    </div>
                                                	<div class="card-body">
                                                    	<div class="smaller lh-13">
                                                    		This tutorial will introduce you to the Search Form widget.
                                                		</div>
                                                	</div>		
                                                </div>                             
                                        		<h2 class="mb-3">What's on this Search Template Page?</h2>
    											<p>
    												The example "Search" template page was automatically created and added to your menu when you installed the Buying Buddy plugin. 
    												If you do not want this page then you can delete it.
    											</p>                                    		
                          						<p>
                          							The Search template page shows the following:
                          						</p>
                          						<ul class="small list-disc">
                          							<li>The Search Form widget.<br>
                    									This will fill the space available. The layout adjusts to fit device screen sizes.
                          							</li>
                          						
                          						</ul>
                          						<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/wp-plugin/wordpress-search-page.jpg" class="mx-auto img-fluid shadow-img mt-4 mb-5 " alt="Search widget">
                                				<div class="card card-inner-outline mb-4">
                                                    <div class="card-header border-bottom alert alert-info alert-marker marker-rounded">
                    									<div class="marker-icon">
                                                            <svg 
                                                                class="mr-1" 
                                                                viewBox="0 0 640 512" 
                                                                style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                <path d="M69.3 4l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3S58.3-3.3 69.3 4zM597.3 44l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zM24 160H88c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24zm528 0h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552c-13.3 0-24-10.7-24-24s10.7-24 24-24zM117.3 332l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zm432-39.9l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3s22.3-14 33.3-6.7zm-100.1 5.7c-19.8 27.1-39.7 54.4-49.2 86.2H240c-9.6-31.9-29.5-59.1-49.2-86.2l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C155.6 247.9 144 213.3 144 176C144 78.8 222.8 0 320 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0zM400 432c0 44.2-35.8 80-80 80s-80-35.8-80-80V416H400v16zM320 96c8.8 0 16-7.2 16-16s-7.2-16-16-16c-61.9 0-112 50.1-112 112c0 8.8 7.2 16 16 16s16-7.2 16-16c0-44.2 35.8-80 80-80z"/>
                                                            </svg>  
                                                        </div> 
                                                        <div class="text-h4">
                                                        	Ideas for Doing More
                                                    	</div>
                                                    </div>
                                                	<div class="card-body">
                            							<ul class="smaller list-disc">
                                                            <li>Insert a title above the widget e.g. "Search for Homes".
                                                    		</li>                      		
                                                    	</ul>                            	                            	
                                                    </div>
                                                </div>  	
                                        	</div>		
                                        </div>                                   
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bbFeatured" role="tabpanel" aria-labelledby="bbFeaturedTab">
                   					<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">     
                                            	<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/bb/bb-helper.png" class="img-sm img-fluid mr-4" alt="">
                                                <div class="h2 lh-1">
                                                	 The Featured Listings Template Page
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700">     
                                        		<div class="card card-inner-outline bg-soft-success bg-opacity-60 mb-4">                		
                                                    <div class="card-header alert alert-success alert-marker marker-right">
                    									<div class="marker-icon">
                        									<svg
                                                            	viewBox="0 0 576 512" 
                                                            	style="width: 1.125rem; height: auto; vertical-align: middle;fill: currentColor;overflow: hidden;">  																		   
                                                            	<!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        									   	<path d="M176 32H400c9 0 15.4 7.3 15.1 15c-6.2 163.9-44.9 239.2-76.1 273.5c-15.5 17.1-29.9 24.8-39.3 28.3c-4.8 1.8-8.5 2.6-10.6 3c-.5 .1-.9 .1-1.2 .2c-.3 0-.7-.1-1.2-.2c-2.1-.3-5.8-1.1-10.6-3c-9.4-3.5-23.8-11.3-39.3-28.3C205.8 286.2 167.1 210.9 160.9 47c-.3-7.8 6.2-15 15.1-15zM400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H48C22 64-1.3 85.6 1.8 113.7c10.1 94 61.9 158.2 118.1 199.9c55.9 41.4 117.1 61.3 149.3 66.9l.1-.3c.9 .3 1.8 .6 2.7 .8V480H176c-8.8 0-16 7.2-16 16s7.2 16 16 16H288 400c8.8 0 16-7.2 16-16s-7.2-16-16-16H304V381.1c.9-.3 1.8-.5 2.7-.8l.1 .3c32.2-5.7 93.4-25.5 149.3-66.9c56.2-41.7 108-105.9 118.1-199.9C577.3 85.6 554 64 528 64H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zm44.2 96H528c9.3 0 15.2 7.3 14.4 14.3c-8.9 82.9-54.3 139.8-105.4 177.6c-19.6 14.6-40 26.2-59.2 35.3C407 281.9 434.5 212.5 444.2 96zm-246 227.2c-19.2-9.1-39.6-20.7-59.2-35.3C87.9 250.1 42.5 193.2 33.6 110.3C32.8 103.3 38.7 96 48 96h83.8c9.8 116.5 37.2 185.9 66.4 227.2z"/>
                        								   	</svg>
                    								   	</div>
                    									<div class="text-h4">
                                                        	Objective
                                                    	</div> 
                                                    </div>
                                                	<div class="card-body">
                                                    	<div class="smaller lh-13">
                                                    		This tutorial will show you how to adjust the widget on this page to show only listings you want displayed.
    														For example: Your listings, your office listings, homes in an area, homes with a certain price, features and so on.
                                                		</div>
                                                	</div>		
                                                </div>
                        						<a href="#" class="btn btn-link-solid btn-label lh-1375 rounded-pill mb-3 show-video" data-pic="https://dr94erhe1w4ic.cloudfront.net/bb-support/2525-poster.jpg"  data-vid="https://dr94erhe1w4ic.cloudfront.net/bb-support/2525-wp-featured-listings-page.mp4" data-target="#bbVideoModal" >	
                        							<span class="btn-label-icon rounded-pill">				 
                                                        <svg
                                                            style="width: 1.25rem; height: 1.25rem; fill:currentColor;fill-rule:evenodd;stroke:none;stroke-width:1"
                                                            viewBox="0 0 512 512">
                                                            <path d="M256 12.8C121.9 12.8 12.8 121.9 12.8 256S121.9 499.2 256 499.2 499.2 390.1 499.2 256 390.1 12.8 256 12.8zm0 465.9c-122.9 0-222.7-99.8-222.7-222.7S133.1 33.3 256 33.3 478.7 133.1 478.7 256 378.9 478.7 256 478.7zm101.4-239.1-141.3-88.1c-12.8-8.2-29.7 1-29.7 16.4v176.6c0 15.4 16.9 24.6 29.7 16.4l141.3-88.1c12.3-8.2 12.3-25.6 0-33.3z"/>                                	
                                                        </svg> 
                        							</span>         
                                                    Video: The Featured Listings Page
                                                </a>                                                                                
                                        		<h2 class="mb-3">What's on this Featured Listings Template Page?</h2>
    											<p>
    												The "Featured Listings" template page was automatically created and added to your menu when you installed the Buying Buddy plugin. 
    												If you do not want this page then you can delete it.
    											</p>                                      		
                          						<p>
                          							The Featured Listings Template page shows the following:
                          						</p>
                          						<ul class="small list-disc">
                          							<li>The Grid Layout display widget (MBBv3_FeaturedGallery).<br>
                                                        This will fill the space available. 
                                                        The layout adjusts to fit device screen sizes.
                                                    </li>
                                                    <li>The widget was added with an example filter to display properties from our demonstration MLS.
                          							</li>
                          						
                          						</ul>
                          						<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/wp-plugin/wordpress-featured-listings-page.jpg" class="mx-auto img-fluid shadow-img mt-4 mb-5 " alt="Featured Listings page">
                          						
                                        		<h2 class="mb-3">How to Show Only Listings You Want Displayed</h2>
    											<p>
    												Add a new "filter" to select the listings you want to show and set options for the widget.
    											</p>                                      		
    											<p>
    												It is easier to replace the whole widget short code rather than trying to replace just the "filter". 
    												In this example, we will replace the whole widget.
    											</p>
                                				<div class="h3 mb-2">1. Use the Wizard to create a new widget</div>                    				
                          						<ul class="small list-decimal">
                                                    <li>In your Buying Buddy account, go to the Widgets menu, then select "Wizard".</li>
                                                    <li>Follow the steps in the wizard to select a Widget and choose options.<br>
                                                    The Grid layout and List layout widgets are good choices for displaying listings.<br>
                                                    If you are displaying "your own" listings by adding listing Agent ID, or listing Office ID to the filter, then you can also use the Featured Grid layout. 
                                                    See the Sold Listings Page tutorial for an example of this.</li>
                                                    <li>Continue through the wizard selecting any of the filter options available that can include: 
                                                    MLS fields, property status, listing agent, listing office and more.</li>
                                                    <li>On the final step of the wizard, select the "Add Widget" tab on the left.<br>
                                                    Then click the copy button to copy the short code to your clipboard.
                                                    <img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/wp-plugin/wizard-get-wordpress-shortcode.jpg" class="mx-auto img-fluid shadow-img my-4" alt="Get short code">     
                                                    </li>
                          						</ul>
                                				<div class="h3 my-2">2. Add the new widget short code to your page</div>                    				
                            					<ul class="list-alpha lh-13 ml-3 mb-5">
                                                    <li>Return to your WordPress editor </li>
                                                    <li>Paste the short code into your webpage. <br>
                                                    This can be done as plain text or as a "short code" block.</li>											
                            					</ul>  											
    
                                				<div class="card card-inner-outline mb-4">
                                                    <div class="card-header border-bottom alert alert-info alert-marker marker-rounded">
                    									<div class="marker-icon">
                                                            <svg 
                                                                class="mr-1" 
                                                                viewBox="0 0 640 512" 
                                                                style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                <path d="M69.3 4l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3S58.3-3.3 69.3 4zM597.3 44l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zM24 160H88c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24zm528 0h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552c-13.3 0-24-10.7-24-24s10.7-24 24-24zM117.3 332l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zm432-39.9l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3s22.3-14 33.3-6.7zm-100.1 5.7c-19.8 27.1-39.7 54.4-49.2 86.2H240c-9.6-31.9-29.5-59.1-49.2-86.2l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C155.6 247.9 144 213.3 144 176C144 78.8 222.8 0 320 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0zM400 432c0 44.2-35.8 80-80 80s-80-35.8-80-80V416H400v16zM320 96c8.8 0 16-7.2 16-16s-7.2-16-16-16c-61.9 0-112 50.1-112 112c0 8.8 7.2 16 16 16s16-7.2 16-16c0-44.2 35.8-80 80-80z"/>
                                                            </svg>  
                                                        </div> 
                                                        <div class="text-h4">
                                                        	Ideas for Doing More
                                                    	</div>
                                                    </div>
                                                	<div class="card-body">
                            							<ul class="smaller list-disc">
                                                            <li>You can edit this page to tailor as you need.<br>
                                                                &bull; Change the page title<br>
                                                                &bull; Change the page slug<br>
                                                                &bull; Add more content above, below or around the widget.
                                                    		</li>  
                                                    		<li>Create multiple landing pages with properties.<br>
                                                                Repeat the approach above to create additional hot-sheet or landing pages that focus on your active, sold, neighborhoods and so on.                                                                                                            		
                                                    		</li>
                                                    		<li>Use the Widget Wizard to add new widgets with filters to your website.
                                                    		</li>                    		
                                                    	</ul>                            	                            	
                                                    </div>
                                                </div>  	
                                        	</div>		
                                        </div>                                   
                                    </div>
                                </div>                            
                                <div class="tab-pane fade" id="bbSold" role="tabpanel" aria-labelledby="bbSoldTab">
                   					<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">     
                                            	<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/bb/bb-helper.png" class="img-sm img-fluid mr-4" alt="">
                                                <div class="h2 lh-1">
                                                	 The Sold Listings Template Page
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700">     
                                        		<div class="card card-inner-outline bg-soft-success bg-opacity-60 mb-4">                		
                                                    <div class="card-header alert alert-success alert-marker marker-right">
                    									<div class="marker-icon">
                        									<svg
                                                            	viewBox="0 0 576 512" 
                                                            	style="width: 1.125rem; height: auto; vertical-align: middle;fill: currentColor;overflow: hidden;">  																		   
                                                            	<!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        									   	<path d="M176 32H400c9 0 15.4 7.3 15.1 15c-6.2 163.9-44.9 239.2-76.1 273.5c-15.5 17.1-29.9 24.8-39.3 28.3c-4.8 1.8-8.5 2.6-10.6 3c-.5 .1-.9 .1-1.2 .2c-.3 0-.7-.1-1.2-.2c-2.1-.3-5.8-1.1-10.6-3c-9.4-3.5-23.8-11.3-39.3-28.3C205.8 286.2 167.1 210.9 160.9 47c-.3-7.8 6.2-15 15.1-15zM400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H48C22 64-1.3 85.6 1.8 113.7c10.1 94 61.9 158.2 118.1 199.9c55.9 41.4 117.1 61.3 149.3 66.9l.1-.3c.9 .3 1.8 .6 2.7 .8V480H176c-8.8 0-16 7.2-16 16s7.2 16 16 16H288 400c8.8 0 16-7.2 16-16s-7.2-16-16-16H304V381.1c.9-.3 1.8-.5 2.7-.8l.1 .3c32.2-5.7 93.4-25.5 149.3-66.9c56.2-41.7 108-105.9 118.1-199.9C577.3 85.6 554 64 528 64H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zm44.2 96H528c9.3 0 15.2 7.3 14.4 14.3c-8.9 82.9-54.3 139.8-105.4 177.6c-19.6 14.6-40 26.2-59.2 35.3C407 281.9 434.5 212.5 444.2 96zm-246 227.2c-19.2-9.1-39.6-20.7-59.2-35.3C87.9 250.1 42.5 193.2 33.6 110.3C32.8 103.3 38.7 96 48 96h83.8c9.8 116.5 37.2 185.9 66.4 227.2z"/>
                        								   	</svg>
                    								   	</div>
                    									<div class="text-h4">
                                                        	Objective
                                                    	</div> 
                                                    </div>
                                                	<div class="card-body">
                                                    	<div class="smaller lh-13">
                                                    		This tutorial will show you how to adjust the widget on this page to show your sold listings
    														The widget filter can be adjusted to show your sold listings, or sold listings from your office etc.
                                                		</div>
                                                	</div>		
                                                </div>                             
                                        		<h2 class="mb-3">What's on this Sold Listings Template Page?</h2>
    											<p>
    												The "Sold Listings" template page was automatically created and added to your menu when you installed the Buying Buddy plugin.
    												If you do not want this page then you can delete it.
    											</p>                                      		
                          						<p>
                          							The Sold Listings template page shows the following:
                          						</p>
    
                          						<ul class="small list-disc">
    												<li>The Featured-Grid layout display widget. <br>
                                                    	This will fill the space available. 
                                                    	The layout adjusts to fit device screen sizes.</li>
                                                    <li>The Featured Grid layout will only be presented when the filter includes your agent ID or your office ID. 
                                                    	If these are not specified, then the regular Grid layout widget will be displayed instead.</li>
                                                    <li>The widget was added with an example filter to display sold properties from our demonstration MLS.</li>
                          						</ul>
                          						<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/wp-plugin/wordpress-sold-listings-page.jpg" class="mx-auto img-fluid shadow-img mt-4 mb-5 " alt="Sold Listings page">
                          						
                                        		<h2 class="mb-3">How to Show Only Listings You Want Displayed</h2>
    											<p>
    												Add a new "filter" to select the listings you want to show and set options for the widget.
    											</p>                                      		
    											<p>
    												It is easier to replace the whole widget short code rather than trying to replace just the "filter". 
    												In this example, we will replace the whole widget.
    											</p>
                                				<div class="h3 mb-2">1. Use the Wizard to create a new widget</div>    
                                				                				
                          						<ul class="small list-decimal">
                                                    <li>In your Buying Buddy account, go to the Widgets menu, then select "Wizard".</li>
                                                    <li>Choose the option to display "Properties listed/sold by me, or my brokerage".</li>
                                                    <li>On step-2, select "Featured-grid layout"</li>
                                                    <li>Follow the steps in the wizard to select more options.<br>
                                                    	You must add your listing Agent ID, or listing Office ID to the options to use the "Featured Grid" layout.<br>
                                                    	NOTE: If you are unsure what this is, then use the Listing Lookup tool (go to Listings &gt; Listing Lookup) to inspect a one of your listings from your MLS. 
                                                    	This will show you the agent ID and office ID.</li>
                                                    <li>On the final step of the wizard, select the "Add Widget" tab on the left.<br>
                                                    Then click the copy button to copy the short code to your clipboard.
                                                    <img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/wp-plugin/wizard-get-wordpress-shortcode.jpg" class="mx-auto img-fluid shadow-img my-4" alt="Get short code">     
                                                    </li>
                          						</ul>
                                				<div class="h3 my-2">2. Add the new widget short code to your page</div>                    				
                            					<ul class="list-alpha lh-13 ml-3 mb-5">
                                                    <li>Return to your WordPress editor</li>
                                                    <li>Delete the current short code.<br>
                                                    Paste the new short code into the webpage.<br>This can be done as plain text or as a 'short code' block.</li>									
                            					</ul>  											
    
                                				<div class="card card-inner-outline mb-4">
                                                    <div class="card-header border-bottom alert alert-info alert-marker marker-rounded">
                    									<div class="marker-icon">
                                                            <svg 
                                                                class="mr-1" 
                                                                viewBox="0 0 640 512" 
                                                                style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                <path d="M69.3 4l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3S58.3-3.3 69.3 4zM597.3 44l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zM24 160H88c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24zm528 0h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552c-13.3 0-24-10.7-24-24s10.7-24 24-24zM117.3 332l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zm432-39.9l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3s22.3-14 33.3-6.7zm-100.1 5.7c-19.8 27.1-39.7 54.4-49.2 86.2H240c-9.6-31.9-29.5-59.1-49.2-86.2l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C155.6 247.9 144 213.3 144 176C144 78.8 222.8 0 320 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0zM400 432c0 44.2-35.8 80-80 80s-80-35.8-80-80V416H400v16zM320 96c8.8 0 16-7.2 16-16s-7.2-16-16-16c-61.9 0-112 50.1-112 112c0 8.8 7.2 16 16 16s16-7.2 16-16c0-44.2 35.8-80 80-80z"/>
                                                            </svg>  
                                                        </div> 
                                                        <div class="text-h4">
                                                        	Ideas for Doing More
                                                    	</div>
                                                    </div>
                                                	<div class="card-body">
                            							<ul class="smaller list-disc">
                                                            <li>You can edit this page to tailor as you need.<br>
                                                                &bull; Change the page title<br>
                                                                &bull; Change the page slug<br>
                                                                &bull; Add more content above, below or around the widget.
                                                    		</li>  
                                                    		<li>Create multiple landing pages with properties.<br>
                                                                Repeat the approach above to create additional hot-sheet or landing pages that focus on your active, sold, neighborhoods and so on.                                                                                                            		
                                                    		</li>
                                                    		<li>Use the Widget Wizard to add new widgets with filters to your website.
                                                    		</li>                    		
                                                    	</ul>                            	                            	
                                                    </div>
                                                </div>  	
                                        	</div>		
                                        </div>                                   
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bbValue" role="tabpanel" aria-labelledby="bbValueTab">
    								<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">     
                                            	<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/bb/bb-helper.png" class="img-sm img-fluid mr-4" alt="">
                                                <div class="h2 lh-1">
                                                	 The Home Value Template Page
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700">     
                                        		<div class="card card-inner-outline bg-soft-success bg-opacity-60 mb-4">               		
                                                    <div class="card-header alert alert-success alert-marker marker-right">
                    									<div class="marker-icon">
                        									<svg
                                                            	viewBox="0 0 576 512" 
                                                            	style="width: 1.125rem; height: auto; vertical-align: middle;fill: currentColor;overflow: hidden;">  																		   
                                                            	<!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        									   	<path d="M176 32H400c9 0 15.4 7.3 15.1 15c-6.2 163.9-44.9 239.2-76.1 273.5c-15.5 17.1-29.9 24.8-39.3 28.3c-4.8 1.8-8.5 2.6-10.6 3c-.5 .1-.9 .1-1.2 .2c-.3 0-.7-.1-1.2-.2c-2.1-.3-5.8-1.1-10.6-3c-9.4-3.5-23.8-11.3-39.3-28.3C205.8 286.2 167.1 210.9 160.9 47c-.3-7.8 6.2-15 15.1-15zM400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H48C22 64-1.3 85.6 1.8 113.7c10.1 94 61.9 158.2 118.1 199.9c55.9 41.4 117.1 61.3 149.3 66.9l.1-.3c.9 .3 1.8 .6 2.7 .8V480H176c-8.8 0-16 7.2-16 16s7.2 16 16 16H288 400c8.8 0 16-7.2 16-16s-7.2-16-16-16H304V381.1c.9-.3 1.8-.5 2.7-.8l.1 .3c32.2-5.7 93.4-25.5 149.3-66.9c56.2-41.7 108-105.9 118.1-199.9C577.3 85.6 554 64 528 64H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zm44.2 96H528c9.3 0 15.2 7.3 14.4 14.3c-8.9 82.9-54.3 139.8-105.4 177.6c-19.6 14.6-40 26.2-59.2 35.3C407 281.9 434.5 212.5 444.2 96zm-246 227.2c-19.2-9.1-39.6-20.7-59.2-35.3C87.9 250.1 42.5 193.2 33.6 110.3C32.8 103.3 38.7 96 48 96h83.8c9.8 116.5 37.2 185.9 66.4 227.2z"/>
                        								   	</svg>
                    								   	</div>
                    									<div class="text-h4">
                                                        	Objective
                                                    	</div> 
                                                    </div>
                                                	<div class="card-body">
                                                    	<div class="smaller lh-13">
                                                    		This tutorial will introduce you to the Lead Capture Form (LCF) widget and guide you on adjusting settings to capture leads and automate follow-up.
                                                		</div>
                                                	</div>		
                                                </div>                             
                                        		<h2 class="mb-3">What's on this Home Value Template Page?</h2>
    											<p>
    												The "Home Value" template page was automatically created and added to your menu when you installed the Buying Buddy plugin.
    												If you do not want this page then you can delete it.
    											</p> 
    											<div class="alert alert-sm alert-warning alert-marker marker-right border-inner-outline">
                                                    <div class="marker-icon">
                                                        <svg 
                                                            viewBox="0 0 512 512" 
                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                            <path d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-8.8 0-16 7.2-16 16V272c0 8.8 7.2 16 16 16s16-7.2 16-16V144c0-8.8-7.2-16-16-16zm24 224a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/>
                                                        </svg>
                                                    </div>
    												<span class="weight700">Note</span>: The form on this page will capture a lead but will not create a CMA (home valuation report). 
    												A task will be created for you in your Buying Buddy dashboard to fulfill the request.
                                                </div>  
                                    		
                          						<p>
                          							The Home Value template page shows the following:
                          						</p>
                          						<ul class="small list-disc">
                          							<li>The Lead Capture Form widget.<br>
                                                        This widget lets you display forms on your website with various messages, such as "How Much Is Your Home Worth?".<br>
                                                        When someone fills out and submits the form, their contact details are captured as a lead in your Buying Buddy account.<br>
                                                        This widget will fill the space available. The layout adjusts to fit device screen sizes.
                                                    </li>
                                                    <li>The widget was added with an example filter to display the Lead Capture Form widget as shown.
                          							</li>
                          						</ul>
                          						<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/wp-plugin/wordpress-home-value-page.jpg" class="mx-auto img-fluid shadow-img mt-4 mb-5 " alt="Home Value page">
                          						
                                        		<h2 class="mb-3">How to Customize the Lead Capture Form</h2>
    											<p>
    												You can customize the form's style, visible fields, and form-processing actions using a widget filter. 
    												The Wizard will walk you through the options and create the filter accordingly.
    											</p>                                      		
    											<p>
    												It is easier to replace the whole widget short code rather than trying to replace just the "filter". 
    												In this example, we will replace the whole widget.
    											</p>
                                				<div class="h3 mb-2">1. Use the Wizard to create a new widget</div>                    				
                          						<ul class="small list-decimal">
                                                    <li>In your Buying Buddy account, go to the Widgets menu, then select "Wizard".</li>                                               
                                                    <li>Then select the option for "Forms to capture leads". <br>
                                                    On the next step, choose any of the templates shown.</li>
                                                    <li>On the next few steps, choose customization options.<br>
                                                    These can include form processing actions and form display options.</li>
                                                    <li>On the final step of the Wizard, select the "Add Widget" tab on the left, 
                                                    and then use the copy button to copy the whole widget short code to your clipboard.
                                                    <img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/wp-plugin/wizard-get-wordpress-shortcode.jpg" class="mx-auto img-fluid shadow-img my-4" alt="Get short code">
                                                    </li>
                          						</ul>
                                				<div class="h3 my-2">2. Add the new widget short code to your page</div>                    				
                            					<ul class="list-alpha lh-13 ml-3 mb-5">
                                                    <li>Return to your WordPress editor </li>
                                                    <li>Paste the short code into your webpage. <br>
                                                    This can be done as plain text or as a "short code" block.</li>											
                            					</ul> 
    
                                				<div class="card card-inner-outline mb-4">
                                                    <div class="card-header border-bottom alert alert-info alert-marker marker-rounded">
                    									<div class="marker-icon">
                                                            <svg 
                                                                class="mr-1" 
                                                                viewBox="0 0 640 512" 
                                                                style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                                <path d="M69.3 4l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3S58.3-3.3 69.3 4zM597.3 44l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zM24 160H88c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24zm528 0h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552c-13.3 0-24-10.7-24-24s10.7-24 24-24zM117.3 332l-48 32c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l48-32c11-7.4 25.9-4.4 33.3 6.7s4.4 25.9-6.7 33.3zm432-39.9l48 32c11 7.4 14 22.3 6.7 33.3s-22.3 14-33.3 6.7l-48-32c-11-7.4-14-22.3-6.7-33.3s22.3-14 33.3-6.7zm-100.1 5.7c-19.8 27.1-39.7 54.4-49.2 86.2H240c-9.6-31.9-29.5-59.1-49.2-86.2l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C155.6 247.9 144 213.3 144 176C144 78.8 222.8 0 320 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0zM400 432c0 44.2-35.8 80-80 80s-80-35.8-80-80V416H400v16zM320 96c8.8 0 16-7.2 16-16s-7.2-16-16-16c-61.9 0-112 50.1-112 112c0 8.8 7.2 16 16 16s16-7.2 16-16c0-44.2 35.8-80 80-80z"/>
                                                            </svg>  
                                                        </div> 
                                                        <div class="text-h4">
                                                        	Ideas for Doing More
                                                    	</div>
                                                    </div>
                                                	<div class="card-body">
                            							<ul class="smaller list-disc">
                                                            <li>Add a Contact form.
                                                            	<div class="smaller lh-13">
                                                            		Use the Wizard to create a simple "Contact Me" form that you can add to your website's Contact Me page.
                                                        		</div>
                                                    		</li>                   		
                                                    	</ul>                            	                            	
                                                    </div>
                                                </div>  	
                                        	</div>		
                                        </div>                                   
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bbAbout" role="tabpanel" aria-labelledby="bbAboutTab">
    								<div class="card card-outline border-top border-secondary border-opacity-45">
                                        <div class="card-header bg-secondary bg-opacity-30 border-secondary border-opacity-30">
                                            <div class="d-flex flex-wrap align-items-center">     
                                            	<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/bb/bb-helper.png" class="img-sm img-fluid mr-4" alt="">
                                                <div class="h2 lh-1">
                                                	 The About Template Page
                                                </div>
                                            </div>
                                        </div>
                            			<div class="card-body">
                            				<div class="body-inner700">     
                                        		<div class="card card-inner-outline bg-soft-success bg-opacity-60 mb-4">                		
                                                    <div class="card-header alert alert-success alert-marker marker-right">
                    									<div class="marker-icon">
                        									<svg
                                                            	viewBox="0 0 576 512" 
                                                            	style="width: 1.125rem; height: auto; vertical-align: middle;fill: currentColor;overflow: hidden;">  																		   
                                                            	<!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        									   	<path d="M176 32H400c9 0 15.4 7.3 15.1 15c-6.2 163.9-44.9 239.2-76.1 273.5c-15.5 17.1-29.9 24.8-39.3 28.3c-4.8 1.8-8.5 2.6-10.6 3c-.5 .1-.9 .1-1.2 .2c-.3 0-.7-.1-1.2-.2c-2.1-.3-5.8-1.1-10.6-3c-9.4-3.5-23.8-11.3-39.3-28.3C205.8 286.2 167.1 210.9 160.9 47c-.3-7.8 6.2-15 15.1-15zM400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H48C22 64-1.3 85.6 1.8 113.7c10.1 94 61.9 158.2 118.1 199.9c55.9 41.4 117.1 61.3 149.3 66.9l.1-.3c.9 .3 1.8 .6 2.7 .8V480H176c-8.8 0-16 7.2-16 16s7.2 16 16 16H288 400c8.8 0 16-7.2 16-16s-7.2-16-16-16H304V381.1c.9-.3 1.8-.5 2.7-.8l.1 .3c32.2-5.7 93.4-25.5 149.3-66.9c56.2-41.7 108-105.9 118.1-199.9C577.3 85.6 554 64 528 64H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zm44.2 96H528c9.3 0 15.2 7.3 14.4 14.3c-8.9 82.9-54.3 139.8-105.4 177.6c-19.6 14.6-40 26.2-59.2 35.3C407 281.9 434.5 212.5 444.2 96zm-246 227.2c-19.2-9.1-39.6-20.7-59.2-35.3C87.9 250.1 42.5 193.2 33.6 110.3C32.8 103.3 38.7 96 48 96h83.8c9.8 116.5 37.2 185.9 66.4 227.2z"/>
                        								   	</svg>
                    								   	</div>
                    									<div class="text-h4">
                                                        	Objective
                                                    	</div> 
                                                    </div>
                                                	<div class="card-body">
                                                    	<div class="smaller lh-13">
                                                    		This tutorial will introduce you to the About Me / Brokers / Office Index  widget.
                                                		</div>
                                                	</div>		
                                                </div>                             
                                        		<h2 class="mb-3">What's on this About Me Template Page?</h2>
    											<p>
    												The "About" template page was automatically created and added to your menu when you installed the Buying Buddy plugin.<br>												
    												If you do not want this page then it can be deleted.
    											</p> 
    											<div class="alert alert-sm alert-warning alert-marker marker-right border-inner-outline">
                                                    <div class="marker-icon">
                                                        <svg 
                                                            viewBox="0 0 512 512" 
                                                            style="width: 1.25em; height: auto;vertical-align: middle;fill: currentColor;overflow: hidden;">  
                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->                              
                                                            <path d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-8.8 0-16 7.2-16 16V272c0 8.8 7.2 16 16 16s16-7.2 16-16V144c0-8.8-7.2-16-16-16zm24 224a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/>
                                                        </svg>
                                                    </div>
                                                   <span class="strong">Note</span>: The widget on this page is the "OfficeRoster" widget that provides indexable permalinks for agents and offices.
    												The page slug must be set as "/team".
                                                </div>                                   		
                          						<p>
                          							The About template page shows the following:
                          						</p>
                          						<ul class="small list-disc">
                          							<li>The About Me / Brokers widget that displays your profile (or the Agent Index).<br>
    													This widget will fill the space available. The layout adjusts to fit device screen sizes..
                                                    </li>
                                                    <li>The widget was added with an example filter to display the Lead Capture Form widget as shown.
                          							</li>
                          						</ul>
                          						<img src="https://d2w6u17ngtanmy.cloudfront.net/gfx/wp-plugin/office-roster-widget-business.jpg" class="mx-auto img-fluid shadow-img mt-4 mb-5 " alt="Office Roster page">
                          						
                                        		<h2 class="mb-3">Update your Buying Buddy User Profile</h2>
    											<p>
    												The information displayed comes from your profile in your Buying Buddy account.
    											</p>     
    											
    											<h2 class="mb-3">About Me / Brokers Widget Options</h2>
                          						<p>
                          							The presentation of this widget will automatically adjust depending on your Buying Buddy account.
                          						</p>
                          						<ul class="small list-decimal">
                                                    <li>Agent Profile.<br>
                                                    This is the initial (and only) view that is presented if you have a single-user Buying Buddy account</li>
                                                    <li>Agent Index.<br>
                                                    This will be the initial view presented if you have a multi-user Buying Buddy account.<br>
                                                    Viewing an agent from the index will then show the Agent Profile view.<br>
                                                    The image below shows the Agent Index view.</li>
                                                    <li>Office Index</li>
                          						</ul>
                          						
                          						<p>
                          							For full details, see the 
                          							<a href="https://support.buyingbuddy.com/knowledge-base/officeroster-widget/" target="_blank">Office Roster reference
    													<svg 
    														style="width:1em;height:1em;vertical-align:text-top;fill:currentColor;overflow:hidden;"
    														viewBox="0 0 512 512">
                                                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                            <path d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                                                        </svg>                            							
                      								</a>.
                          						</p>
                          					
                                        	</div>		
                                        </div>                                   
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </div>
                  
                    <!-- Video Modal -->
                    <div class="modal centered fade" id="bbVideoModal" tabindex="-1" role="dialog" aria-labelledby="bbVideoLabel" aria-hidden="true">
                        <div class="aligner">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header pt-2 pb-0 border-0">
                                    	<h5 class="myModalLabel">Start Here</h5>
                                        <button type="button" class="s30 close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
                                    </div>
                                    <div class="modal-body">
                                        <video controls style="width: 100%; height: auto" id="bbVideo" poster="" preload="metadata">
                                            <source src="" type="video/mp4">
                                            <p>Your browser does not support H.264/MP4.</p>
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            	</div>		    			
            </div> <!-- end tab-content --> 
			         