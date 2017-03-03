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
        	 
        		<h2>Dividend History</h2> 
                
            
            
    		<div id="ndq-content" class="ndq-dividends ">
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
		 
		
    
		<table cellspacing="0" cellpadding="0" summary="" class="wsh-dataTable wsh-dividends">
			
		  <thead>
		  
		  <tr>
		    <th>Declared</th>
		    <th>Ex-Date</th>
		    <th>Record</th>
		    <th>Payable</th>
		    <th>Amount</th>
		    <th>Type</th>
		  </tr>
		  
			</thead>
		
		  <tr>
		    <td data-before="Declared">May 18, 2007</td>
		    <td data-before="Ex-Date">Jun 18, 2007</td>
		    <td data-before="Record">Jun 1, 2007</td>
		    <td data-before="Payable">Jun 15, 2007</td>
		    <td data-before="Amount"> 1.0000</td>
		    <td data-before="Type">Stock dividend</td>
		  </tr>
		
			  <tr>
			    <td colspan="4" class="ndq-table-bold">Total dividends in 2007:</td>
			    <td colspan="2" class="ndq-table-bold"> 1.0000</td>
			  </tr>
				
		</table>
	

<p class="ndq-disclaimer">The historical dividend information provided is for informational purposes only, and is not intended for trading purposes. The historical dividend information is provided by Mergent, a third party service, and Buffalo Wild Wings does not maintain or provide information directly to this service. Total dividends per year is based on the dividend ex-date.</p>



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