<?php 
include("header.php");
?>
  
    
<section class="row generic-content">
  <div class="inner-hero-slim">
  
    <div class="hero-bg mobile-img" data-desktop-img="./images/Financials-Filings.jpg" data-mobile-img="./images/Financials-Filings.jpg"> <img src="./images/Financials-Filings.jpg" class="mobile-img" alt="" /> </div>
        
    <div class="hero-content">
      <div class="hero-container">
            <h1> Financial Information </h1>
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
           
            <h2>Key Ratios</h2> 
                
            
            
        <div id="ndq-content" class="ndq-financials-keyratios ">
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
     
    
      
<style type="text/css">
<!-- 
  .wsh-quantifier {font-size:11px;}
  
 -->
</style>      

<noscript>JavaScript will need to be enabled to view the content of this page.</noscript>
    
<script src="http://www.shareholder.idmanagedsolutions.com/stocks/key_ratios.json?SYMBOL_US=BWLD&callback=processJSON" type="text/javascript"></script>

<div id="JSONNoData" ><p>Data is currently unavailable.</p></div>    

<div id="JSONData" >


<div class="wsh-ratios-top">
  <table class="wsh-dataTable wsh-ratios-revert" cellspacing="0" cellpadding="0" width="100%">
      <colgroup>
          <col width="80%">
          <col width="20%">
        </colgroup>
    <tr>
     <th colspan="2">Price &amp; Volume</th>
    </tr>
    <tr>
      <td>Recent Price $</td>
      <td align="right"><script>document.write(fundObject.recentPrice);</script></td>
    </tr>
    <tr>
      <td>52 Week High $</td>
      <td align="right"><script>document.write(fundObject.yearHigh);</script></td>
    </tr>
    <tr>
      <td>52 Week Low $</td>
      <td align="right"><script>document.write(fundObject.yearLow);</script></td>
    </tr>
    <tr>
      <td>Average Vol <span class="wsh-quantifier">(Mil) (<acronym title="Rolling Three Month Average">RTMA</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.avgDailyVolInMil);</script></td>
    </tr>
    <tr>
      <td>Beta</td>
      <td align="right"><script>document.write(fundObject.beta3Year);</script></td>
    </tr>
  </table>
  <table class="wsh-dataTable wsh-ratios-revert" cellspacing="0" cellpadding="0" width="100%">
      <colgroup>
          <col width="80%">
          <col width="20%">
        </colgroup>
    <tr>
      <th colspan="2">Share Related Items</th>
    </tr>
    <tr>
      <td>Market Cap. <span class="wsh-quantifier">(Mil)</span> $</td>
      <td align="right"><script>document.write(fundObject.marketCapInMil);</script></td>
    </tr>
    <tr>
      <td>Shares Out <span class="wsh-quantifier">(Mil)</span></td>
      <td align="right"><script>document.write(fundObject.sharesOutstandingInMil);</script></td>
    </tr>
    <tr>
      <td>Float <span class="wsh-quantifier">(Mil)</span></td>
      <td align="right"><script>document.write(fundObject.floatInMil);</script></td>
    </tr>
  </table>
  <table class="wsh-dataTable wsh-ratios-revert" cellspacing="0" cellpadding="0" width="100%">
      <colgroup>
          <col width="80%">
          <col width="20%">
        </colgroup>
    <tr>
      <th colspan="2">Dividend Information</th>
    </tr>
    <tr>
      <td>Yield %</td>
      <td align="right"><script>document.write(fundObject.yield);</script></td>
    </tr>
    <tr>
      <td>Annual Dividend</td>
      <td align="right"><script>document.write(fundObject.annualDividend);</script></td>
    </tr>
    <tr>
      <td nowrap>Payout Ratio <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span> %</td>
      <td align="right"><script>document.write(fundObject.payoutRatioTTM);</script></td>
    </tr>
  </table>
  <table class="wsh-dataTable wsh-ratios-revert" cellspacing="0" cellpadding="0" width="100%">
      <colgroup>
          <col width="80%">
          <col width="20%">
        </colgroup>
    <tr>
      <th colspan="2">Financial Strength</th>
    </tr>
    <tr>
      <td>Quick Ratio <span class="wsh-quantifier">(<acronym title="Most Recent Quarter">MRQ</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.quickRatioMRQ);</script></td>
    </tr>
    <tr>
      <td>Current Ratio <span class="wsh-quantifier">(<acronym title="Most Recent Quarter">MRQ</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.currentRatioMRQ);</script></td>
    </tr>
    <tr>
      <td>LT Debt/Equity % <span class="wsh-quantifier">(<acronym title="Most Recent Quarter">MRQ</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.ltDebtEquityMRQ);</script></td>
    </tr>
    <tr>
      <td>Total Debt/Equity % <span class="wsh-quantifier">(<acronym title="Most Recent Quarter">MRQ</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.totalDebtEquityMRQ);</script></td>
    </tr>
  </table>
</div>

<div class="wsh-ratios-bottom">
  <table class="wsh-dataTable wsh-ratios-revert" cellspacing="0" cellpadding="0" width="100%">
      <colgroup>
          <col width="80%">
          <col width="20%">
        </colgroup>
    <tr>
      <th colspan="2">Valuation Ratios</th>
    </tr>
    <tr>
      <td>Price/Earnings <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.priceEarningsTTM);</script></td>
    </tr>
    <tr>
      <td>Price/Sales <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.priceSalesTTM);</script></td>
    </tr>
    <tr>
      <td>Price/Book <span class="wsh-quantifier">(<acronym title="Most Recent Quarter">MRQ</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.priceBookMRQ);</script></td>
    </tr>
    <tr>
      <td>Price/Cash Flow <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.priceCashFlowTTM);</script></td>
    </tr>
  </table>
  <table class="wsh-dataTable wsh-ratios-revert" cellspacing="0" cellpadding="0" width="100%">
      <colgroup>
          <col width="80%">
          <col width="20%">
        </colgroup>
    <tr>
      <th colspan="2">Per Share Data</th>
    </tr>
    <tr>
      <td>Earnings <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span> $</td>
      <td align="right"><script>document.write(fundObject.earningsTTM);</script></td>
    </tr>
    <tr>
      <td>Sales <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span> $</td>
      <td align="right"><script>document.write(fundObject.salesTTM);</script></td>
    </tr>
    <tr>
      <td>Book Value <span class="wsh-quantifier">(<acronym title="Most Recent Quarter">MRQ</acronym>)</span> $</td>
      <td align="right"><script>document.write(fundObject.bookValueMRQ);</script></td>
    </tr>
    <tr>
      <td>Cash Flow <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span> $</td>
      <td align="right"><script>document.write(fundObject.cashFlowTTM);</script></td>
    </tr>
    <tr>
      <td>Cash <span class="wsh-quantifier">(<acronym title="Most Recent Quarter">MRQ</acronym>)</span> $</td>
      <td align="right"><script>document.write(fundObject.priceCashMRQ);</script></td>
    </tr>
  </table>
  <table class="wsh-dataTable wsh-ratios-revert" cellspacing="0" cellpadding="0" width="100%">
      <colgroup>
          <col width="80%">
          <col width="20%">
        </colgroup>
    <tr>
      <th colspan="2">Mgmt Effectiveness</th>
    </tr>
    <tr>
      <td>Return on Equity <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.returnOnEquityTTM);</script></td>
    </tr>
    <tr>
      <td>Return on Assets <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.returnOnAssetsTTM);</script></td>
    </tr>
    <tr>
      <td>Return on Investment <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span></td>
      <td align="right"><script>document.write(fundObject.returnOnInvestmentTTM);</script></td>
    </tr>
  </table>
  <table class="wsh-dataTable wsh-ratios-revert" cellspacing="0" cellpadding="0" width="100%">
      <colgroup>
          <col width="80%">
          <col width="20%">
        </colgroup>
    <tr>
      <th colspan="2">Profitability</th>
    </tr>
    <tr>
      <td>Gross Margin <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span> %</td>
      <td align="right"><script>document.write(fundObject.grossMarginTTM);</script></td>
    </tr>
    <tr>
      <td>EBIT Margin <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span> %</td>
      <td align="right"><script>document.write(fundObject.ebitMarginTTM);</script></td>
    </tr>
    <tr>
      <td>Profit Margin <span class="wsh-quantifier">(<acronym title="Trailing Twelve Months">TTM</acronym>)</span> %</td>
      <td align="right"><script>document.write(fundObject.profitMarginTTM);</script></td>
    </tr>
  </table>
</div>

<p style="clear:both; float:none;"></p>

<p class="ndq-disclaimer">Historical financial information is provided by MorningStar, Inc. Buffalo Wild Wings makes no representations or warranties with respect to the information contained herein and takes no responsibility for supplementing, updating, or correcting any such information.</p>

<p class="ndq-disclaimer">
  Mil = Millions&nbsp;&nbsp;RTMA = Rolling Three Month Average<br />
  TTM = Trailing Twelve Months&nbsp;&nbsp;MRQ = Most Recent Quarter<br />
  <span class="disclaimer">Pricing and volume data as of 03/02/17.</span>
</p>

</div>



<script type="text/javascript"> 
  if(fundObject.valid == true)
  {
    document.getElementById("JSONData").style.display = "block";
  }
  else
  {
    document.getElementById("JSONNoData").style.display = "block";
  }
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