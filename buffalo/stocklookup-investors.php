<?php 
include("header.php");
?>

    
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
        	 
        		<h2>Historic Stock Lookup</h2> 
                
            
            
    		<div id="ndq-content" class="ndq-stocklookup ">
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
		 
		
     
<script type="text/javascript" src="/common/scripts/autoDate.js"></script>



<table cellpadding="0" summary="" class="ndq-data-table wsh-dataTable wsh-stocklookup">
	<caption>Adjusted historic prices for the week of February 27, 2017</caption>
  <colgroup style="width:16%" />
  <thead>
    <tr>
      	
      <th scope="col">Date</th>
      <th scope="col">Open</th>
      <th scope="col">High</th>
      <th scope="col">Low</th>
      <th scope="col">Close</th>
      <th scope="col">Volume</th>
      
    </tr>
  </thead>
  <tbody>
	
    <tr>
      <td data-before="Date" scope="row">Feb 27, 2017</td>
      <td data-before="Open">153.25</td>
      <td data-before="High">157.25</td>
      <td data-before="Low">153.25</td>
      <td data-before="Close">156.45</td>
      <td data-before="Volume">620,968</td>
    </tr>
  
    <tr>
      <td data-before="Date" scope="row">Feb 28, 2017</td>
      <td data-before="Open">155.60</td>
      <td data-before="High">157.50</td>
      <td data-before="Low">154.90</td>
      <td data-before="Close">155.00</td>
      <td data-before="Volume">401,230</td>
    </tr>
  
    <tr id="ndq-table-bold">
      <td data-before="Date" scope="row">Mar 1, 2017</td>
      <td data-before="Open">156.65</td>
      <td data-before="High">157.45</td>
      <td data-before="Low">154.90</td>
      <td data-before="Close">155.10</td>
      <td data-before="Volume">377,287</td>
    </tr>
  
	</tbody>
</table>
<form action="/stocklookup.cfm" name="InvCalculator" id="InvCalculator" class="bww-form contact-us-form">
  <div class="selector" id="uniform-historic_Month">

  <span>March</span>

  <select name="historic_Month" id="historic_Month" onchange="autoDate('historic_Day','historic_Month','historic_Year','11/21/2003','3/2/2017','false');">
    
  <option value="1" >January</option>
    <option value="2" >February</option>
    <option value="3" selected="selected">March</option>
    <option value="4" >April</option>
    <option value="5" >May</option>
    <option value="6" >June</option>
    <option value="7" >July</option>
    <option value="8" >August</option>
    <option value="9" >September</option>
    <option value="10" >October</option>
    <option value="11" >November</option>
    <option value="12" >December</option>
  
  </select>

  </div>
  <div class="selector" id="uniform-historic_Day">

<select name="historic_Day" id="historic_Day"><option value="1" selected="selected">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>

 </div>
  <div class="selector" id="uniform-historic_Year">

 <select name="historic_Day" id="historic_Day"><option value="1" selected="selected">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
  
  <select name="historic_Year" id="historic_Year" onchange="autoDate('historic_Day','historic_Month','historic_Year','11/21/2003','3/2/2017','true');"><option value="2017" selected="selected">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option></select>
  </div>

  <button type="submit" class="ndq-button">Lookup</button>
</form>



  <div class="ndq-vSpace"></div>
    
    <h2>Year End Stock Prices</h2>
    <div id="ndq-stock-img"><img src="http://charting.shareholder.com/wc360/yearendstockprices.aspx?CompanyID=BWLD&Key=20680937E84F0BB1F18F8203E8963847&Ticker=BWLD&ShowLabel=1&ShowLogo=0&Width=700&Height=300&Color=000000&StartYear=2012&BGColor=ffffff&Margin=5&DefaultLanguage=en&lang=en-US" alt="Year end BWLD stock price" /></div>
    

<script type="text/javascript">
  autoDate('historic_Day','historic_Month','historic_Year','11/21/2003','3/2/2017','true');
</script>

<p class="ndq-disclaimer">The historical stock information provided is for informational purposes only and is not intended for trading purposes. The historical stock information is provided by Mergent, a third party service, and Buffalo Wild Wings does not maintain or provide information directly to this service. Prices display split-adjusted cost basis per share on that date.</p>



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