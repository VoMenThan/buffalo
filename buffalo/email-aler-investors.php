<?php include("header.php");?>
 
<section class="row generic-content">
  <div class="inner-hero-slim">
  
    <div class="hero-bg mobile-img" data-desktop-img="./images/Quick-Links.jpg" data-mobile-img="./images/Quick-Links.jpg"> <img src="./images/Quick-Links.jpg" class="mobile-img" alt="" /> </div>
  	    
    <div class="hero-content">
      <div class="hero-container">
            <h1> Quick Links </h1>
      </div>

        
      
    </div>
  </div>
</section>

    



<article class="row generic-content yellow">
  <div class="inner article-container no-image">
    <div class="article-content quarter-columns">
      <div class="article-title">
        <h2> </h2>
      </div>
      <div class="article-copy">
        <div class="left"> 
        	
    <?php include("menu-left-investors.php");?> 




        </div>
        <div class="right ">
        	 
        		<h2>Email Alerts Subscription</h2> 
                
            
            
    		<div id="ndq-content" class="ndq-alerts ">
                <!--[if lte IE 7]> 
                    <div class="ndq-unsupported" style="display:none"><p>Some features of this website may not be available in the browser you are currently using. <a href="http://browsehappy.com/">Please click here to upgrade your browser for free.</a></p>
<p>If you have downloaded the most recent version of Internet Explorer and are having trouble viewing this website, please note recent versions of Internet Explorer have introduced a feature called Compatibility Mode.  Please make sure that you have disabled Compatibility Mode using the following recommendations from Microsoft <a href="https://support.microsoft.com/">https://support.microsoft.com/</a>.</p></div>
                <![endif]--> 
                <script type="text/javascript"> 
                    if(typeof document.documentMode !== 'undefined') { // checks if this is IE 8 or >
                      jQuery(".ndq-unsupported").css('display', 'none'); 
                        if(document.documentMode < 8) { // check if in compat mode 
                             jQuery(".ndq-unsupported").css('display', 'block'); 
                        } 
                    } 
                </script> 
		 
		<h2>Step 1 of 3: Select Options</h2> 
    <p>You may automatically receive Buffalo Wild Wings financial information by email. Please enter your preferences for email notifications below and click &quot;Continue&quot; to enter your contact information on the next page. If you have already signed up and would like to review your subscription, <a href='login.cfm' atl='click here'>click here</a>.</p>
    
		
        
    <form method="post" id="EmailAlerts" action="/alerts.cfm?SH_Auth=3988361467%20%2E%20False%20%2E0%20%2E42797%20%2E29A3A58FDE0CC0A8FB546E6522A96033" onSubmit="return SH_verify_Alerts();">
    
    <div id="ndq-form">
      <input type="hidden" name="ndq_form_post" value="1" />

		
      
      	<div class="ndq-vSpace"></div>
        <h3>Press Releases</h3>
        
          <div class="ndq-alert-checkbox"><input type="checkbox" name="NewsLists" id="NewsList53445" value="53445" onClick="NewsListsContent[0]=this.checked;" /> <label for="NewsList53445">General Releases</label></div>
          <script type="text/javascript">
          <!-- 
            SH_alertsArray[SH_alertsArray.length]="NewsList53445";
          // -->
          </script>
        
		
        <div class="ndq-vSpace"></div>
    <h3>SEC Filings</h3>
    
      <div class="ndq-alert-checkbox"><input type="checkbox" name="SECLists" id="SECLists53450" value="53450" onclick="sh_greyAll('EmailAlerts','SECLists','SECLists53450',SECListsContent)" /> <label for="SECLists53450">All SEC Filings</label></div>
        <script type="text/javascript">
        <!-- 
          SH_alertsArray[SH_alertsArray.length]="SECLists53450";
        // -->
        </script>
    	
      <div class="ndq-indent ndq-alert-checkbox"><input type="checkbox" name="SECLists" id="SECLists53453" value="53453" onclick="SECListsContent[1]=this.checked;" /> <label for="SECLists53453">Insider Transactions</label></div>
        <script type="text/javascript">
        <!-- 
          SH_alertsArray[SH_alertsArray.length]="SECLists53453";
        // -->
        </script>
    	
      <div class="ndq-indent ndq-alert-checkbox"><input type="checkbox" name="SECLists" id="SECLists53452" value="53452" onclick="SECListsContent[2]=this.checked;" /> <label for="SECLists53452">Quarterly and Annual Reports</label></div>
        <script type="text/javascript">
        <!-- 
          SH_alertsArray[SH_alertsArray.length]="SECLists53452";
        // -->
        </script>
    	
      <div class="ndq-vSpace"></div>    
  		<h3>Events & Presentations</h3>
    	
    		<div class="ndq-alert-checkbox"><input type="checkbox" name="EventLists" id="EventLists53451" value="53451" onClick="" /> <label for="EventLists53451">All Events & Presentations</label></div>
        <script type="text/javascript">
				<!-- 
        	SH_alertsArray[SH_alertsArray.length]="EventLists53451";
        //-->
        </script>
    	
    	<div class="ndq-indent">
    		<input type="checkbox" id="RemindEvent" name="RemindEvent" />
        <label for="RemindEvent">Remind me</label>
        <select name="RemindMinutes" id="RemindMinutes" size="1">
          <option value="" selected="selected">choose a time</option>
          <option value="30" >1/2 hour</option>
          <option value="60" >1 hour</option>
          <option value="120" >2 hours</option>
          <option value="360" >6 hours</option>
          <option value="720" >12 hours</option>
          <option value="1440" >1 day</option>
          <option value="2880" >2 days</option>
          <option value="4320" >3 days</option>
          <option value="10080" >1 week</option>
        </select> in advance of any event.
      </div>
			<script type="text/javascript">
      <!-- 
        SH_alertsArray[SH_alertsArray.length]="RemindEvent";
      //-->
      </script>
		
                <div class="ndq-vSpace"></div>
  	<h3>Stock Information</h3>
  
    <div>Send me the closing stock price.</div>
		
      <div class="ndq-alert-checkbox ndq-mb10"><input type="checkbox" id="QuoteByEmail53446" name="QuoteByEmail" value="53446" /> <label for="QuoteByEmail53446">Quote By Email </label></div>
      <script type="text/javascript">
      <!-- 
        SH_alertsArray[SH_alertsArray.length]="QuoteByEmail53446";
      //-->
      </script>
    
		<div>Send me a stock update at the end of the week.</div>
		
      <div class="ndq-alert-checkbox ndq-mb10"><input type="checkbox" id="QuoteByEmail53447" name="QuoteByEmail" value="53447" /> <label for="QuoteByEmail53447">Weekly Stock Summary</label></div>
      <script type="text/javascript">
      <!-- 
        SH_alertsArray[SH_alertsArray.length]="QuoteByEmail53447";
      //-->
      </script>
    
  	<div>Alert me when the stock crosses the following price thresholds:</div>
  	

      <div class="ndq-alert-checkbox"><input type="checkbox" id="StockRange53449" name="StockRange"  value="53449" /> <label for="StockRange53449">Stock Threshold Alert</label></div>
      <script type="text/javascript">
      <!--
        SH_alertsArray[SH_alertsArray.length]="StockRange53449";
        SH_thresholdChkID="StockRange53449";
        SH_formhigh="StockRangeHigh53449";
        SH_formlow="StockRangeLow53449";
        SH_price="155.100";
        SH_thresholdChk=1;
      -->
      </script>
      <div class="ndq-alert-textbox"><label for="StockRangeLow53449">Low:</label> <input type="text" size="3" id="StockRangeLow53449" name="StockRangeLow53449" value="" />
      <label for="StockRangeHigh53449">High:</label> <input type="text" size="3" id="StockRangeHigh53449" name="StockRangeHigh53449" value="" /> Current price: 155.10</div>
      <input type="hidden" name="SelectedTicker53449" id="SelectedTicker53449" value="BWLD">
  	
  	<div>Alert me when the stock changes a specific percentage in one day.</div>
  	
			<script type="text/javascript">
      <!-- 
        SH_alertsArray[SH_alertsArray.length]="StockPercent53448";
        SH_percentChkID="StockPercent53448";
        SH_stockChangeAmount="StockPercentAmount53448";
        SH_percentChk=1;
      -->
      </script>
      <div class="ndq-alert-checkbox"><input type="checkbox" id="StockPercent53448" name="StockPercent" value="53448" /> <label for="StockPercent53448">Percent Change Alert </label></div>
      <div class="ndq-alert-textbox"><input type="text" size="2" maxlength="2" id="StockPercentAmount53448" name="StockPercent53448"  value="" /> % in one day.</div>
  	

	<div class="ndq-vSpace"></div>
    <div class="ndq-submit"><button type="submit" class="ndq-button">Continue</button></div>
    
    <div class="ndq-mt10"><a href="login-investors.php">Unsubscribe from Investor Relations email alerts.</a></div>
    
	  
      <p class="ndq-disclaimer ndq-pt10">Our email alerts provide automated opt-out methods as well as complete contact information.</p>
    
  
  </div>
	</form>
  
    <script type="text/javascript">
		<!--
    	var NewsListsContent=new Array();
    
    	NewsListsContent[0]="NewsList53445";
			
    	for(var i=0;i<NewsListsContent.length;i++) { 
				NewsListsContent[i]=document.getElementById(NewsListsContent[i]).checked;
    	}
    -->
    </script>
  
  	<script type="text/javascript">
		<!--
			var SECListsContent=new Array();
    	
					SECListsContent[0]="SECLists53453";
					
					SECListsContent[1]="SECLists53452";
					
    	for(var i=0;i<SECListsContent.length;i++) {
				SECListsContent[i]=document.getElementById(SECListsContent[i]).checked;
    	}
    -->
    </script>
	

    		</div>
		</div>
      </div>
    </div>
  </div>
  <div class="hr black"></div>
</article>
        



<?php 
include("investors-footer.php");

include("footer.php");
?>

<script>
    !function ( $, app ) {

      /////////////////////////////////////
      // Begin Google Analytics Module Data
      /////////////////////////////////////

      app.GoogleAnalytics = new app._Modules.GoogleAnalytics({
        profileId: app._analyticsProfileId,
        domainName: app._analyticsDomainName,
        currentPath: '/en/about/',
        pageview: app._analyticsPageview
      })

      /////////////////////////////////////
      // Begin My BDubs Module Data
      /////////////////////////////////////

      

    }( jQuery, BuffaloWildWings )
  </script> 

<!--[if lt IE 9]>
    <script src="js/es5-shim.js?8GHWxOCGhZxNxzvc3hhFQI4aqjY=" type="text/javascript"></script>
<script src="js/es5-sham.js?umtlEBr45aiZPn1VcjXaYAWOVrw=" type="text/javascript"></script>
<script src="js/oldie.js?j1VEyJ9ggRFGlRAn8oDNCNPikf4=" type="text/javascript"></script>
    <script>
      !function( app ) {

        // Begin IE Modules
        app.OldIE = new app._Modules.OldIE()
      }( BuffaloWildWings )
    </script>
  <![endif]--> 

<!-- Google Tag Manager -->
<noscript>
<iframe src="http://www.buffalowildwings.com//www.googletagmanager.com/ns.html?id=GTM-WTBPP2" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>    (function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({ 'gtm.start':
  new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
  j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
  '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WTBPP2');</script> 
<!-- End Google Tag Manager -->





	<script src="js/jquery.uniform.js"></script>
	
    <script>
		/////////////////////////////////
		// Contact Template Modules
		/////////////////////////////////
		$(document).ready(function($) {
			$("#ndq-content form").addClass('bww-form contact-us-form');
			$("#ndq-content form").find('select').addClass('uniform');
			$("#ndq-content form").find('input').addClass('uniform');
			$("#ndq-content form .uniform").uniform();
		});
	  </script> 


<script type="text/javascript" src="/common/scripts/exLinks.js"></script>  
<script language="JavaScript" type="text/javascript" src="/common/scripts/SiteCatalyst/s_code_baseline_dev_v3.js"></script>
<script language="JavaScript" type="text/javascript"><!--
/* You may give each page an identifying name, server, and channel on
the next lines. */
s.pageName=document.title.toLowerCase();
/* Conversion Variables */
s.campaign=""
s.state=""
s.zip=""
s.events="event1"
s.products=""
s.purchaseID=""
s.prop15="115.78.238.232"
s.eVar1="alerts.cfm"
s.eVar2=""
s.eVar3=""
s.eVar4=""
s.eVar5=""
s.eVar15="115.78.238.232"
/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
var s_code=s.t();if(s_code)document.write(s_code)//--></script>
<script language="JavaScript" type="text/javascript"><!--
if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
//--></script><!--/DO NOT REMOVE/-->
<!-- End SiteCatalyst code version: H.25.3. -->