<?php include("header.php");?> 

<section class="row generic-content">
  <div class="inner-hero-slim">
  
    <div class="hero-bg mobile-img" data-desktop-img="./images/home.jpg" data-mobile-img="./images/home.jpg"> <img src="./images/home.jpg" class="mobile-img" alt="" /> </div>
  	    
    <div class="hero-content">
      <div class="hero-container">
            <h1>Investors</h1>
      </div>

      

          <div class="headerProfile bkgrHeader">  
              <h2>Company Profile</h2>    
              
            <a class="btn btnHeader" href="overview-investors.php">READ MORE <span class="fwd-icon svg-icon-chevron-right-yellow"></span></a>
       	  </div>
	  
      
      	<div class="hero-QRs bkgrHeader">
			

  <div id="ndq-expand">
	
      	
        <h2>Q4 2016 Earnings</h2>
      
      <div class="ndq-expand-content">
      
        
            	<p><a class="ndq-no-icon show-txt btn btnHeader" href="releasedetail-investors.php">Webcast</a> <span class="fwd-icon svg-icon-chevron-right-yellow"></span></p>
            
            	<p><a class="ndq-no-icon show-txt btn btnHeader" href="releasedetail-investors.php" onclick="sh_windowpopup('releasedetail.cfm?ReleaseID=1010834','1010834',925,600);return false;">Release</a> <span class="fwd-icon svg-icon-chevron-right-yellow"></span></p>
            
            	<p><a class="ndq-no-icon show-txt btn btnHeader" href="/public/BWW052.3_TO-PAR_menu_Store0292.pdf" target="_blank">Form 10-K</a> <span class="fwd-icon svg-icon-chevron-right-yellow"></span></p>
            
          <p>
            <a class="show-txt btn btnHeader" href="/public/BWW052.3_TO-PAR_menu_Store0292.pdf" target="_blank">Transcript</a>  <span class="fwd-icon svg-icon-chevron-right-yellow"></span>
            
          </p>
        
      </div>
    
	</div>



        </div>
      	<div class="hero-AR bkgrHeader">
        	



<h2>Annual Report and Proxy</h2>


    <p><a class="ndq-no-icon btn btnHeader" href="/public/BWW052.3_TO-PAR_menu_Store0292.pdf" target="_blank">2015 10-K Report</a> <span class="fwd-icon svg-icon-chevron-right-yellow"></span></p>
  
    <p><a class="ndq-no-icon btn btnHeader" href="/public/BWW052.3_TO-PAR_menu_Store0292.pdf" target="_blank">2016 Proxy Statement</a> <span class="fwd-icon svg-icon-chevron-right-yellow"></span></p>
  
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
        <div class="right ndq-index-right">
        	
            
    		<div id="ndq-content" class="ndq-index ">
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
		 
		 

                <div class="ndq-colwrap">
                
                  <div class="ndq-stock">
                    



<link rel="stylesheet"type="text/css" href="./css/jquery.easy-pie-chart.css">





<div id="ndq-inc-stock-quote-pie">
	
    	
    	<div class="ndq-inc-stock-quote-title">NASDAQ: BWLD</div>
		
         
        <div class="ndq-stock-quote-price-mini">
        	<h3>$ 156.45</h3>
            <div class="ndq-inc-stock-quote-date">
                4:00 PM | Feb 27, 2017
            </div> 
		</div>
        <div class="chart" data-percent="100">
        	<div class="ndq-stock-quote-change-mini ">$0.00</div> 	
        	(0.00%)
        </div>
		
        <br clear="left"/>

        
        <div class="ndq-inc-stock-quote-other">
        	<strong>Day High:</strong> N/A
            <br/>
            <strong>Day Low:</strong> &nbsp;N/A
            <br/>
        	<strong>Volume:</strong> &nbsp;&nbsp;&nbsp;N/A
		</div>

        
        <div class="ndq-inc-stock-quote-disclaimer">Delayed ~20 min., by eSignal.</div>   
    
  
</div>


<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="./js/jquery.easy-pie-chart.js"></script>
	<script type="text/javascript">	
		jQuery(document).ready(function(jQuery) {
			//create instance
			var currentChange = jQuery('#ndq-inc-stock-quote-pie .chart').find('.ndq-stock-quote-change-mini').html();
			
			if (currentChange.indexOf('+') === 0) {
				jQuery('#ndq-inc-stock-quote-pie .chart').easyPieChart({
						animate: 2000,
						barColor: '#00853f',
						trackColor: '#f2f2f2',
						scaleColor: false,
						lineCap: 'round',
						rotate: 0,
						size: 90,
						lineWidth: 3/*,
						 onStep: function(value) {
							this.jQueryel.find('.ndq-stock-quote-change-mini').text("+$"+~~value/100);
						} */
				});
			}
			//else if (currentChange < 0)  {
			else if (currentChange.indexOf('-') === 0) {
				jQuery('#ndq-inc-stock-quote-pie .chart').easyPieChart({
						animate: 2000,
						barColor: '#ad0000',
						trackColor: '#f2f2f2',
						scaleColor: false,
						lineCap: 'round',
						rotate: 0,
						size: 100,
						lineWidth: 3/*,
						onStep: function(value) {
							this.jQueryel.find('.ndq-stock-quote-change-mini').text("-$"+~~value/100);
						} */
				});
			}
			else {
				jQuery('#ndq-inc-stock-quote-pie .chart').easyPieChart({
						animate: false,
						scaleColor: false,
						size: 100
				});
			}
		});	
		
		jQuery(function() {	
			//update instance after 5 sec 1200000
			setTimeout(function() {
				jQuery('#ndq-inc-stock-quote-pie .chart').data('easyPieChart').update(currentChange);
			}, 1200000);
		}); 
	</script>
<!--<![endif]--> 
  
  

<div id="ndq-tabs">
   <ul>
      	
     <li><a href="#ndq-tab-1">Intra</a></li>
     <li><a href="#ndq-tab-2">3 mo.</a></li>
     <li><a href="#ndq-tab-3">6 mo.</a></li>
     <li><a href="#ndq-tab-4">1 yr.</a></li>
     
   </ul>
   <div id="ndq-tab-1">
     <img border="0" src="http://charts.edgar-online.com/ext/charts.dll?2-4-a-0-0-009301600-03NA000000BWLD&fs-100-HF:2|4|6|7-HC:2-BG=ffffff-BG1=ffffff-BG2=ffffff-FF:A18=ffffff|A33=ffffff-ht=165-wd=300-FT:0=2-FL:R1=000000-HO:SW|SE|NW|NE-AP:9=2|10=2-FB:1=444444-FL:1=000000-FF:1=000000-FL:18=000000-FF:18=000000-FL:5=ffffff-FF:5=ffffff-FL:7=333333-FF:7=333333-HC:2-FL:G1=333333-FL:G2=333333-FI:-TRC=FFFFFF-BG=FFFFFF-BT=8-G2-FC:A34=555555|A7=555555|A11=ffd200|A19=ffd200-G2-FL:G1=555555" alt="Intraday stock price graph" title="" />
   </div>
   <div id="ndq-tab-2" style="display:none;">
     <img border="0" src="http://charts.edgar-online.com/ext/charts.dll?2-4-e-0-0-53-03NA000000BWLD&fs-100-SF:1|2|5|3-BG=ffffff-BG1=ffffff-BG2=ffffff-FF:A18=ffffff|A33=ffffff-ht=165-wd=300-FT:0=2-HO:SW|SE|NW|NE-AP:9=2|10=2-FB:1=444444-FL:2=990033-FF:2=990033-FL:3=009900-FF:3=009900-FL:1=000000-FF:1=000000-FL:18=000000-FF:18=000000-FL:5=ffffff-FF:5=ffffff-FL:7=333333-FF:7=333333-HC:2-FL:G1=333333-FL:G2=333333-AT:9=0-FI:-TRC=FFFFFF-BG=FFFFFF-BT=0-G2-FC:A35=FFFFFF|A7=ffffff|A11=ffffff|A19=ffffff-G2-FL:G1=ffffff" alt="3 month stock price graph" title="" />
   </div>
   <div id="ndq-tab-3" style="display:none;">
     <img border="0" src="http://charts.edgar-online.com/ext/charts.dll?2-4-e-0-0-56-03NA000000BWLD&fs-100-SF:1|2|5|3-BG=ffffff-BG1=ffffff-BG2=ffffff-FF:A18=ffffff|A33=ffffff-ht=165-wd=300-FT:0=2-HO:SW|SE|NW|NE-AP:9=2|10=2-FB:1=444444-FL:2=990033-FF:2=990033-FL:3=009900-FF:3=009900-FL:1=000000-FF:1=000000-FL:18=000000-FF:18=000000-FL:5=ffffff-FF:5=ffffff-FL:7=333333-FF:7=333333-HC:2-FL:G1=333333-FL:G2=333333-AT:9=0-FI:-TRC=FFFFFF-BG=FFFFFF-BT=0-G2-FC:A35=FFFFFF|A7=ffffff|A11=ffffff|A19=ffffff-G2-FL:G1=ffffff" alt="6 month stock price graph" title="" />
   </div>
   <div id="ndq-tab-4" style="display:none;">
     <img border="0" src="http://charts.edgar-online.com/ext/charts.dll?2-4-e-0-0-512-03NA000000BWLD&fs-100-SF:1|2|5|3-BG=ffffff-BG1=ffffff-BG2=ffffff-FF:A18=ffffff|A33=ffffff-ht=165-wd=300-FT:0=2-HO:SW|SE|NW|NE-AP:9=2|10=2-FB:1=444444-FL:2=990033-FF:2=990033-FL:3=009900-FF:3=009900-FL:1=000000-FF:1=000000-FL:18=000000-FF:18=000000-FL:5=ffffff-FF:5=ffffff-FL:7=333333-FF:7=333333-HC:2-FL:G1=333333-FL:G2=333333-AT:9=0-FI:-TRC=FFFFFF-BG=FFFFFF-BT=0-G2-FC:A35=FFFFFF|A7=ffffff|A11=ffffff|A19=ffffff-G2-FL:G1=ffffff" alt="12 month stock price graph" title="" />
   </div>
</div>
                  </div>
                </div>

			
            	
    		</div>
		</div>
      </div>
    </div>
  </div>
  <div class="hr black"></div>
</article>



<article class="row generic-content black">
  <div class="inner article-container no-image">
    <div class="article-content quarter-columns">
      <div class="article-copy ndq-iEvents">
      	  
          
      	  <div id="ndq-content" class="ndq-index">
            <h2>Events & Presentations</h2>
            
                	<div class="eventsBox">
                      <div class="ndq-date"><div>Feb 7, 2017</div> 5:00 PM ET</div>
                      <div class="ndq-item"><a href="event-detail-investors.php">Q4 2016 Buffalo Wild Wings Inc Earnings Conference Call</a></div>
                	</div>
                
                	<div class="eventsBox">
                      <div class="ndq-date"><div>Oct 26, 2016</div> 5:00 PM ET</div>
                      <div class="ndq-item"><a href="event-detail-investors.php">Q3 2016 Buffalo Wild Wings Inc Earnings Conference Call</a></div>
                	</div>
                
              <br clear="all"/>
            
            <a class="btn-more" href="event-investors.php">View all events & presentations <span class="ndqicon-arw-r"></span></a>
	  	</div>

      </div>
	</div>
  </div>
  <div class="hr black"></div>
</article>
            






<article class="row generic-content inverse">
  <div class="inner article-container no-image">
    <div class="article-content quarter-columns">
      <div class="article-copy">
      	<div id="ndq-content" class="ndq-index">
        	<div>
             <div id="recentRelease">
                <h2>Press Releases</h2>
                
                    <div id="teamSlider">
                      <ul class="slides">
                          <li>
                                <div class="col-md-4 wp5">
                                     <div>Feb 7, 2017</div> <br/>
                                    <div class="ndq-item"><a target="_blank" href="releasedetail-investors.php">Buffalo Wild Wings, Inc. Announces Fourth Quarter Earnings per Share of $0.87</a></div>              
                                </div>
                            
                                <div class="col-md-4 wp5">
                                     <div>Feb 6, 2017</div> <br/>
                                    <div class="ndq-item"><a target="_blank" href="releasedetail-investors.php">Buffalo Wild Wings, Inc. Issues Statement in Response to Marcato</a></div>              
                                </div>
                            
                                <div class="col-md-4 wp5">
                                     <div>Jan 24, 2017</div> <br/>
                                    <div class="ndq-item"><a target="_blank" href="releasedetail-investors.php">Buffalo Wild Wings, Inc. Expands Share Repurchase Program by $400 Million</a></div>              
                                </div>
                            </li> <li>
                                <div class="col-md-4 wp5">
                                     <div>Jan 19, 2017</div> <br/>
                                    <div class="ndq-item"><a target="_blank" href="releasedetail-investors.php">Buffalo Wild Wings, Inc. to Conduct a Webcast of Its Fourth Quarter 2016 Results</a></div>              
                                </div>
                            
                                <div class="col-md-4 wp5">
                                     <div>Dec 14, 2016</div> <br/>
                                    <div class="ndq-item"><a target="_blank" href="releasedetail-investors.php">Buffalo Wild Wings Helps Fans "Wing In" the New Year with Citrus Bowl Activations</a></div>              
                                </div>
                            
                                <div class="col-md-4 wp5">
                                     <div>Nov 15, 2016</div> <br/>
                                    <div class="ndq-item"><a target="_blank" href="releasedetail-investors.php">Buffalo Wild Wings, Inc. Names Santiago Abraham as Chief Information Officer</a></div>              
                                </div>
                            </li> 
                      </ul>
                    </div>
                 
            
                <a class="btn-more" href="releases-investors.php">View all press releases <span class="ndqicon-arw-r"></span></a>
             </div>                       
                              



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
    <script type="text/javascript">
        $(document).ready(function($) {
            $('.wp5').waypoint(function() {
                $('.wp5').addClass('animated fadeInUp');
            }, {
                offset: '75%'
            });
            $('#teamSlider').flexslider({
                animation: "slide",
                directionNav: false,
                controlNav: true,
                touch: true,
                pauseOnHover: true,
                start: function() {
                    $.waypoints('refresh');
                }
            });
      
        });
                        
         /*  !function ($, app) {
            app.HeroSlideshow = new app._Modules.HeroSlideshow()
          } (jQuery, BuffaloWildWings) */
    </script>