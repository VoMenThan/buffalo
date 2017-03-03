<?php include("header.php");?>
    
<section class="row generic-content">
  <div class="inner-hero-slim">
  
    <div class="hero-bg mobile-img" data-desktop-img="./images/Stock-Information.jpg" data-mobile-img="./images/Stock-Information.jpg"> <img src="./images/Stock-Information.jpg" class="mobile-img" alt="" /> </div>
  	    
    <div class="hero-content">
      <div class="hero-container">
            <h1> Stock Information </h1>
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
        	 
        		<h2>Stock Information</h2> 
                
            
            
    		<div id="ndq-content" class="ndq-stockquote ">
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
		 
		
<h2>Stock Quote (BWLD)</h2>
<div class="ndq-leftcol ndq-mb10">
	<span class="ndq-stock-price">154.90</span>
	
    <span class="ndq-stock-change ndq-price-down">-0.20&nbsp;
      (-0.129%)</span>
  
</div>
<div class="ndq-rightcol">
	<div class="ndq-stock-time">4:00 PM ET on Mar 2, 2017</div>
</div>
<div class="ndq-clear"></div>
<div class="ndq-leftcol">
<table class="wsh-stockquote">
	<colgroup width="50%"></colgroup>
	<tr>
  	<th scope="row">Previous Close</th>
    <td>155.10</td>
  </tr>
	<tr>
  	<th scope="row">Open</th>
    <td>154.65</td>
  </tr>
	<tr>
  	<th scope="row">Volume</th>
    <td>293,042</td>
  </tr>
  <tr>
  	<th scope="row">Exchange</th>
  	<td>NASDAQ</td>
  </tr>
</table>
</div>
<div class="ndq-rightcol">
<table class="wsh-stockquote">
	<colgroup width="50%"></colgroup>
  <tr>
  	<th scope="row">Day High</th>
    <td>157.00</td>
  </tr>
  <tr>
  	<th scope="row">Day Low</th>
    <td>154.30</td>
  </tr>
  <tr>
  	<th scope="row">52-Week High</th>
    <td>175.10</td>
  </tr>
  <tr>
  	<th scope="row">52-Week Low</th>
    <td>122.25</td>
  </tr>
</table>
</div>
<div class="ndq-clear"></div>


<div class="ndq-vSpace"></div>
<h2>Stock Chart</h2>

	 
  <div id="flashnotpresent">
	    
  <div class="wsh_menuselect wsh_mt5">
    <form action="/stockquote.cfm" method="get">
      <label for="benchmark1">Compare:</label>
      		<select class="wshquotemenus" name="benchmark1" id="benchmark1" size="1" class="dd" onchange="form.submit()">
            <option value="">Benchmark</option>
            <option value="-03NA000000COMP">NASDAQ</option>
            <option value="-03NA000000NYA">NYSE</option>
            <option value="-03NA000000SPX">S&amp;P 500</option>
            <option value="-03NA000000.XAX">AMEX</option>
          </select>

          <label for="DisplayType">Benchmark:</label>
          <select class="wshquotemenus" name="DisplayType" id="DisplayType" size="1" onchange="form.submit()" >
              <option value="Area"  selected="selected">Area graph</option>
              <option value="OHLC" >OHLC</option>
              <option value="Line" >Line graph</option>
              <option value="Candle" >Candlestick</option>
            </select>
          
          <label for="Period">Time:</label>
          <select class="wshquotemenus" name="Period" id="Period" size="1" onchange="this.options[this.selectedIndex].value?form.submit():document.getElementById('dateRangeSelector').style.display='block';">
              
                <option value="0">Intraday</option>
              
              <option value="45">5 Day</option>
              <option value="51">1 month</option>
              <option value="53">3 month</option>
              <option value="56">6 Months</option>
              <option value="512" selected="selected">1 year</option>
              <option value="524">2 years</option>
              <option value="536">3 Years</option>
              <option value="560">5 Years</option>
              <option value="">Range</option>
            </select>
          <button type="submit" class="ndq-button">Update</button>
          
					
              <div id="dateRangeSelector" style="display:none;">
                <label for="CustomFromDate">From:</label>
                <img src="/common/images/spacer.gif" width="26" height="1" border="0" alt="" />
                <input value="6/20/2004" id="CustomFromDate" name="CustomFromDate" class="wshquotemenus" />
                <label for="CustomToDate">to</label>
                &nbsp;
                <input value="10/30/2004" id="CustomToDate" name="CustomToDate" class="wshquotemenus" />
								<input type="hidden" name="flashChartStatus" value="on">
              </div>
            
    </form>
  </div>
    
      <div id="ndq-stock-img"><img id="pricechart" border="0" src="http://charts.edgar-online.com/ext/charts.dll?2-4-e-0-0-512-03NA000000BWLD&fs-100-SF:1|2|5|3-BG=ffffff-BG1=ffffff-BG2=ffffff-FF:A18=E2E8F1|A33=E2E8F1-ht=300-wd=700-FT:0=6-HO:SW|SE|NW|NE-AP:9=2|10=2-FB:1=444444-FL:2=990033-FF:2=990033-FL:3=009900-FF:3=009900-FL:1=000000-FF:1=000000-FL:18=000000-FF:18=000000-FL:5=333333-FF:5=333333-AT:9=1-FI:" alt="Stock price graph" title="" /></div>
    
  <p class="ndq-disclaimer">The stock information provided is for informational purposes only and is not intended for trading purposes. The stock information is provided by eSignal, stock charts are provided by EDGAR Online, both third party services, and Buffalo Wild Wings does not maintain or provide information directly to this service. Stock information is delayed approximately 20 minutes.</p>

  </div>
  

  
  <script src="AC_OETags.js" language="javascript"></script>
  <script type="text/javascript">
  	
  	//iPad check 
  	if ((navigator.userAgent.match(/iPad/i) != null) || (navigator.userAgent.match(/iPhone/i) != null) || (navigator.userAgent.match(/iPod/i) != null)) { document.getElementById("flashnotpresent").style.display = "block"; document.getElementById("wsh_flashchart").style.display = "none"; }
	  
	  var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	  // Check to see if the version meets the requirements for playback
	  if (hasReqestedVersion) {document.getElementById("flashnotpresent").style.display="none";}  	
	  else {
	 		document.getElementById("flashnotpresent").style.display="block";
	  }
  </script>
  
  
  

	<script language="JavaScript" type="text/javascript">
    document.write("<div id='wsh_flashchart' class='wsh_JSon'><object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' id='AdvancedGraph' width='100%' height='635' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0'>  <param name='flashVars' value='zoomAlpha=.3&isDST=true&companyid=BWLD&symbol=BWLD&region=U&mainheight=635&mainWidth=100%25&symbolComp=COMP&regionComp=I&symbolComp2=SPX&regionComp2=I&fontFamily=verdana&intradayTxt=Intraday&historyTxt=History&okButtonTxt=Refresh&warningTxt=Start%20date%20must%20be%20before%20end%20date&warningTitle=Warning&Periodtxt=Period&Comparetxt=Compare&Eventstxt=Events&companyThemColor=0x000000&mainBgColor=0xffffff&gridColor=0xCCCCCC&compwithColor=0x990033&compwithColor2=0x009900&menuContainerBg=0xffffff&menuHeaderTextColor=0xffffff&compwithColor3=0x990033&complogoUrl=http%3A%2F%2Finvestor%2Eshareholder%2Ecom%2Fcommon%2Fimages%2Fspacer%2Egif&showEventsLabel=Show%20Events&eventsDDWidth=150&blnShowEvents=1&eventstart=1&fIntra=0&date_Format=MM%2FDD%2FYYYY&axisDateFormat=MM%2FDD&symbolCompLbl=Nasdaq%20Composite&symbolComp2Lbl=S%26P%20500&regionComp3=U&PopupDim=900x500&validtill=1489093578&hashcheck=46FE238F70B1799404233939702A9A8C'/>  <param name='movie' value='http://charting.shareholder.com/wc360/main.swf?unique=tws695872'/>  <param name='quality' value='high' />  <param name='bgcolor' value='#ffffff' />  <param name='wmode' value='transparent' />  <param name='allowScriptAccess' value='always' />  <embed src='http://charting.shareholder.com/wc360/main.swf?unique=tws695872' quality='high' bgcolor='#ffffff'   width='100%' height='635' name='AdvancedGraph' align='middle'    play='true'    loop='false'    allowScriptAccess='always'    wmode='transparent'    type='application/x-shockwave-flash'    flashVars='zoomAlpha=.3&isDST=true&companyid=BWLD&symbol=BWLD&region=U&mainheight=635&mainWidth=100%25&symbolComp=COMP&regionComp=I&symbolComp2=SPX&regionComp2=I&fontFamily=verdana&intradayTxt=Intraday&historyTxt=History&okButtonTxt=Refresh&warningTxt=Start%20date%20must%20be%20before%20end%20date&warningTitle=Warning&Periodtxt=Period&Comparetxt=Compare&Eventstxt=Events&companyThemColor=0x000000&mainBgColor=0xffffff&gridColor=0xCCCCCC&compwithColor=0x990033&compwithColor2=0x009900&menuContainerBg=0xffffff&menuHeaderTextColor=0xffffff&compwithColor3=0x990033&complogoUrl=http%3A%2F%2Finvestor%2Eshareholder%2Ecom%2Fcommon%2Fimages%2Fspacer%2Egif&showEventsLabel=Show%20Events&eventsDDWidth=150&blnShowEvents=1&eventstart=1&fIntra=0&date_Format=MM%2FDD%2FYYYY&axisDateFormat=MM%2FDD&symbolCompLbl=Nasdaq%20Composite&symbolComp2Lbl=S%26P%20500&regionComp3=U&PopupDim=900x500&validtill=1489093578&hashcheck=46FE238F70B1799404233939702A9A8C' </embed></object></div>");
  </script>
		
  
  <div class="wsh_clear"></div>
	
	
    <p class="ndq-mt10"><a href="profile.cfm">Sign up for email alerts <span class="ndqicon-arw-r"></span></a></p>
  <p class="ndq-disclaimer wsh_JSon">The stock information provided is for informational purposes only and is not intended for trading purposes. The stock information is provided by eSignal, stock charts are provided by NASDAQ OMX, both third party services, and Buffalo Wild Wings does not maintain or provide information directly to this service. Stock information is delayed approximately 20 minutes.</p> 

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