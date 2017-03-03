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
        	
  <?php 
include("menu-left-investors.php");
?>
   



        </div>
        <div class="right ">
        	 
        		<h2>Investment Calculator</h2> 
                
            
            
    		<div id="ndq-content" class="ndq-calculator ">
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



<script type="text/javascript"><!-- //
  function swapSRC(_obj,_img) { document.getElementById(_obj).src = _img;}
// --></script>


<script type="text/javascript" src="/common/scripts/formval.js"></script>

<script type="text/javascript">
	
  function stripCommas() {
  	if(isNaN(document.forms.InvCalculator.initialAmnt.value)) {
        document.forms.InvCalculator.initialAmnt.value = document.forms.InvCalculator.initialAmnt.value.replace(/\,/g,'');
    }
  };
  
  function validateOnSubmit() {
    var elem;
    var errs=0;

	  if (document.forms.InvCalculator.calc_method.options[document.forms.InvCalculator.calc_method.selectedIndex].value == "shrs") {
        if (!validatePositiveNumber(document.forms.InvCalculator.initialAmnt,'initialAmnt_Note')) errs += 1; 
    } else {
        if (!validateCurrency(document.forms.InvCalculator.initialAmnt,'initialAmnt_Note')) errs += 1; 
    }
    if (errs>1)  alert('There are fields which need correction before sending');
    if (errs==1) alert('There is a field which needs correction before sending');
    return (errs==0);
  };
  
  function changeMethod(newMethod) {
    if(isNaN(document.forms.InvCalculator.initialAmnt.value)) {
        document.forms.InvCalculator.initialAmnt.value = "1000";
    } else if (newMethod == "shrs") {
        document.forms.InvCalculator.initialAmnt.value = parseInt(document.forms.InvCalculator.initialAmnt.value,10);
    }
  }
  
// function added for foreign language //

  function validatePositiveNumber (vfld,   // element to be validated
                         ifld,   // id of element to receive info/error msg
                         reqd)   // true if required
{
  var stat = commonCheck (vfld, ifld, reqd);
  if (stat != proceed) return stat;

  var tfld = trim(vfld.value);
  var amountRE = /^\d+$/
  if (!amountRE.test(tfld) || parseInt(tfld,10) == 0) {
    msg (ifld, "error", "Not a valid number");
    vfld.focus();
    return false;
  }

  return true;
 };

 // added currency+positive number - TWS - 05/02/08

function validateCurrency (vfld,   // element to be validated

                         ifld,   // id of element to receive info/error msg

                         reqd)   // true if required

{

  var stat = commonCheck (vfld, ifld, reqd);

  if (stat != proceed) return stat;



  var tfld = trim(vfld.value);

  var amountRE = /^\d+(\.\d+)?$/

  if (!amountRE.test(tfld) || parseInt(tfld,10) == 0) {

    msg (ifld, "error", "Not a valid number");

    vfld.focus();

    return false;

  }



  return true;

 };
  
  
</script>




<form action="/calculator.cfm" name="InvCalculator" id="InvCalculator" onsubmit="stripCommas(); return validateOnSubmit();">
	<input type="hidden" name="ndq_form_post" value="1" />
	<div class="ndq-calc-shares">
    I invested &nbsp; <input type="text" class="ndq-invested" name="initialAmnt" maxlength="10" value="100" onChange="stripCommas();validatePresent(this, 'initialAmnt_Note');" />
    <select name="calc_method" size="1" onChange="changeMethod(this.options[this.selectedIndex].value);">
      
      <option value="shrs" selected="selected">Shares</option>
      <option value="amnt">Dollars (USD)</option>
      
    </select>
  </div>
	<div class="ndq-calc-date">
    on &nbsp;
    <select name="historic_Month" id="historic_Month" onChange="autoDate('historic_Day','historic_Month','historic_Year','11/21/2003','3/1/2017','false');">
  	
	<option value="1" >January</option>
  	<option value="2" >February</option>
  	<option value="3" >March</option>
  	<option value="4" >April</option>
  	<option value="5" >May</option>
  	<option value="6" >June</option>
  	<option value="7" >July</option>
  	<option value="8" >August</option>
  	<option value="9" >September</option>
  	<option value="10" >October</option>
  	<option value="11" selected="selected">November</option>
  	<option value="12" >December</option>
	
    </select>
    <select name="historic_Day" id="historic_Day"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21"selected="selected">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
    <select name="historic_Year" id="historic_Year" onChange="autoDate('historic_Day','historic_Month','historic_Year','11/21/2003','3/1/2017','true');"><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003"selected="selected">2003</option></select>
	</div>
  <div class="ndq-calc-submit"><button type="submit" class="ndq-button">Calculate</button> &nbsp;<span id="initialAmnt_Note">&nbsp;</span></div>
  

	<div class="ndq-calc-reinvest"><input type="Checkbox" name="ReinvestDividends" id="ReinvestDividends" value="1"  /> <label for="ReinvestDividends">Reinvest Dividends</label></div>

</form>
<div class="ndq-vSpace"></div>


       <h2>Calculate Current Value and Shares Since: November 21, 2003</h2>
      <table cellspacing="0" cellpadding="0" summary="Original Investment on November 21, 2003" class="wsh-dataTable wsh-calculator">
        
        <thead>
        <tr>
          
	          <th>Investment Date</th>
	          <th>Original Shares</th>					
	          <th>Original Value</th>
	          <th>Current Shares</th>
	          <th>Current Value</th>	
	          <th>Percent Return</th>
					
        </tr>
        </thead>
        <tr>
        	
	          <td data-before="Investment Date">Nov 21, 2003</td>
	          <td data-before="Original Shares">   100</td>
	          <td data-before="Original Value">  2,295.00</td>
	          <td data-before="Current Shares">   200</td>
	          <td data-before="Current Value"> 31,020.00</td>
	          <td data-before="Percent Return">  1,251.63%</td>
	        
        </tr>
      </table>
      
      
      <div id="ndq-stock-img"><img src="http://charting.shareholder.com/wc360/investmentreturns.aspx?CompanyID=BWLD&Key=20680937E84F0BB1F18F8203E8963847&RightLabel=BottomRight&LeftLabel=BottomRight&AmountInvested=2295.000000000000000000&EndVal=$       31,020.00&NumShares=500&ReinvestDividends=0&ShowLogo=0&Width=700&Height=300&Color=000000&StartDate=11-21-2003&BGColor=ffffff&Margin=5&DefaultLanguage=en&lang=en-US" id="ndq-stock-img" title="Investment of $  2,295.00 on Nov 21, 2003 would yield $ 31,020.00 today" /></div> 
      
      <div class="ndq-vSpace"></div>
      <h2>Adjustments</h2>
      
      <table cellspacing="0" cellpadding="0" summary="All adjustments to the stock (splits and dividends), from the original investment date until today." class="wsh-dataTable wsh-adjustments">
      <thead>
        <tr>
          
          <th>Date</th>
          <th>Reason</th>
          <th>Factor</th>
          <th>Shares</th>
          <th>Price</th>	
          <th>Value</th>
	
          <th>%</th>
        </tr>
      </thead>
      
        <tr id="ndq-table-bold">
          <td data-before="Date">Nov 21, 2003</td>
        
          <td data-before="Reason">Initial Investment</td>
          <td data-before="Factor" class="wsh-adjustments-hide">&nbsp;</td>
        
          <td data-before="Shares">      100</td>
          <td data-before="Price"> 22.95</td>			
          <td data-before="Value">2,295.00</td>
          <td data-before="Percent Return">0.00%</span></td>
        </tr>
      
        <tr>
          <td data-before="Date">Jun 18, 2007</td>
        
          <td data-before="Reason">Dividend</td>
          <td data-before="Factor">
                 1.000 
          </td>
        
          <td data-before="Shares">      200</td>
          <td data-before="Price"> 41.63</td>			
          <td data-before="Value">8,326.00</td>
          <td data-before="Percent Return"><span class="ndq-price-up">262.79%</span></td>
        </tr>
      
        <tr id="ndq-table-bold">
          <td data-before="Date">Mar 1, 2017</td>
        
          <td data-before="Reason">Current Investment</td>
          <td data-before="Factor" class="wsh-adjustments-hide">&nbsp;</td>
        
          <td data-before="Shares">      200</td>
          <td data-before="Price">155.10</td>			
          <td data-before="Value">31,020.00</td>
          <td data-before="Percent Return"><span class="ndq-price-up">1,251.63%</span></td>
        </tr>
      
      </table>
      

<script type="text/javascript">
  autoDate('historic_Day','historic_Month','historic_Year','11/21/2003','3/2/2017','true');
</script>

<p class="ndq-disclaimer">The Investment Calculator page and related information is provided by Mergent, a third party service. Buffalo Wild Wings does not maintain this page and is not responsible for the accuracy, completeness or timeliness of the information. The results are for illustrative purposes only and should not be relied on for investment purposes. The timing and price of dividend reinvestments, taxes, commissions and other factors may affect the values shown. Please note that historical investment performance is not intended to indicate future performance.</p>



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