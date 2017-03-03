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
          
 <?php 
include("menu-left-investors.php");
?>



        </div>
        <div class="right ">
           
            <h2>SEC Filings</h2> 
                
            
            
        <div id="ndq-content" class="ndq-sec ">
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
     
    

<form name="DocFilter" id="DocFilter" action="/sec.cfm" method="get" class="bww-form contact-us-form">
  
  <div class="ndq-smForm">
  <label for="DocType">View:</label> 
  <div class="selector" id="uniform-DocType"><span>All Filings</span><select class="select-box-it uniform" onchange="document.forms.DocFilter.submit();" name="DocType" id="DocType" style="opacity: 0;">
    <option value="" selected="selected">All Filings</option>
    <option value="NoSection16">All (excl. Section 16)</option>
    <option value="Annual">Annual</option>
    <option value="Quarterly">Quarterly</option>
    <option value="Current">Current</option>

    <option value="Section16">Section 16</option>
    <option value="Proxy">Proxy</option>
    <option value="Other">Other</option>

  </select></div>
  </div>
  
  <div class="formSpacer"></div>
  <div class="ndq-smForm">
  <label for="Year">Year:</label> 
  <div class="selector" id="uniform-Year"><span>All Years</span><select class="select-box-it uniform" onchange="document.forms.DocFilter.submit();" name="Year" id="Year" style="opacity: 0;">
    <option value="" selected="selected">All Years</option>
      
        <option value="2017">2017</option>
      
        <option value="2016">2016</option>
      
        <option value="2015">2015</option>
      
        <option value="2014">2014</option>
      
        <option value="2013">2013</option>
      
        <option value="2012">2012</option>
      
        <option value="2011">2011</option>
      
        <option value="2010">2010</option>
      
        <option value="2009">2009</option>
      
        <option value="2008">2008</option>
      
        <option value="2007">2007</option>
      
        <option value="2006">2006</option>
      
        <option value="2005">2005</option>
      
        <option value="2004">2004</option>
      
        <option value="2003">2003</option>
      
        <option value="1998">1998</option>
      
    </select></div>
  </div>  
  
  <div class="formSpacer"></div>
    <div class="ndq-smForm">
  <label for="SortOrder">Sort By:</label> 
  <div class="selector" id="uniform-undefined"><span>Date Descending</span><select onchange="DocFilter.submit();" name="SortOrder" class="uniform" style="opacity: 0;">  
    <option value="Date Descending">Date Descending</option>
    <option value="Date Ascending">Date Ascending</option>
    <option value="Type Descending">Filing Descending</option>
    <option value="Type Ascending">Filing Ascending</option>
    <option value="Description Descending">Description Descending</option>
    <option value="Description Ascending">Description Ascending</option>
  </select></div>  
    </div>
  <input type="hidden" value="" name="FormatFilter" class="uniform">
  <noscript>&lt;button type="submit" class="ndq-button"&gt;Update&lt;/button&gt;</noscript>
  
</form>

<div class="ndq-wide-screen ndq-form-spacer">&nbsp;</div>


<table cellpadding="0" summary="" class="wsh-dataTable wsh-sec">
  <caption>SEC Filings</caption>
  <colgroup>
    
      <col style="width:18%" />
      <col style="width:12%" />
    
    <col style="width:50%" />
    <col style="width:20%" />
  </colgroup>
  
  <thead>
  <tr>
  <th scope="col"><a href="/sec.cfm?SortOrder=Date%20Ascending&DocType=&DocTypeExclude=&Year=&FormatFilter=&CIK=">Date  <span class="ndqicon-sort-down"></span></a></th>
  <th scope="col"><a href="/sec.cfm?SortOrder=Type%20Ascending&DocType=&DocTypeExclude=&Year=&FormatFilter=&CIK=">Filing </a></th>
  <th scope="col"><a href="/sec.cfm?SortOrder=Description%20Ascending&DocType=&DocTypeExclude=&Year=&FormatFilter=&CIK=">Description </a></th>
  <th scope="col">View</th>
  </tr>
  </thead>
  
  <tr>
    <td data-before="Date">Feb 22, 2017</td>
    <td data-before="Filing">DEFA14A</td>
    <td data-before="Description">

    <a href="secfiling.cfm?filingID=1062449-17-15&CIK=1062449" title="View HTML"
      onclick="window.open(this,'SECFiling10624491715','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling10624491715','scrollbars=yes,resizable=yes'); return false;">
<span class="ndq_txtCap">definitive additional proxy materials</span></a></td>
    <td data-before="View"> 
<span class="ndq-filetypes ndq-nowrap">
  
    <a href="secfiling.cfm?filingID=1062449-17-15&CIK=1062449" title="View HTML" alt="View HTML"
      onclick="window.open(this,'SECFiling10624491715','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling10624491715','scrollbars=yes,resizable=yes'); return false;" class="ndq-html"><span class="hide-txt">HTML</span></a>
  
    <a href="/common/download/sec.cfm?CompanyID=BWLD&FID=1062449-17-15&CIK=1062449" target="download" title="Download PDF" alt="Download PDF" class="ndq-pdf"><span class="hide-txt">PDF</span></a>
  
    <a href="http://www.shareholder.com/visitors/activeedgardoc.cfm?f=xls&companyid=BWLD&id=11875608" target="download" title="Download XLS" alt="Download XLS" class="ndq-xls"><span class="hide-txt">XLS</span></a>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <span id="ndq-briefcase">
      
    <span id="add1062449-17-15" style="display:inline;"><a title="Add to Briefcase" alt="Add to Briefcase" class="ndqicon-briefcase-add" href="#" onClick="sh_appendCookie('BWLD_BRIEFCASE','SEC%7C1062449%2D17%2D15','ir.buffalowildwings.com');sh_toggleCase('1062449-17-15');return false;"><span class="hide-txt">Add to Briefcase</span></a></span>
    <span id="del1062449-17-15" style="display:none;"><a title="File is in Briefcase" alt="File is in Briefcase" class="ndqicon-briefcase-added" href="#" onClick="sh_unappendCookie('BWLD_BRIEFCASE','SEC%7C1062449%2D17%2D15','ir.buffalowildwings.com');sh_toggleCase('1062449-17-15');return false;"><span class="hide-txt">File is in Briefcase</span></a></span>
  
    </span>      
  
</span>
</td>
  </tr>
  
  <tr>
    <td data-before="Date">Feb 22, 2017</td>
    <td data-before="Filing">DFAN14A</td>
    <td data-before="Description">

    <a href="secfiling.cfm?filingID=914121-17-279&CIK=1062449" title="View HTML"
      onclick="window.open(this,'SECFiling91412117279','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling91412117279','scrollbars=yes,resizable=yes'); return false;">
<span class="ndq_txtCap">definitive proxy statement</span></a></td>
    <td data-before="View"> 
<span class="ndq-filetypes ndq-nowrap">
  
    <a href="secfiling.cfm?filingID=914121-17-279&CIK=1062449" title="View HTML" alt="View HTML"
      onclick="window.open(this,'SECFiling91412117279','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling91412117279','scrollbars=yes,resizable=yes'); return false;" class="ndq-html"><span class="hide-txt">HTML</span></a>
  
    <a href="/common/download/sec.cfm?CompanyID=BWLD&FID=914121-17-279&CIK=1062449" target="download" title="Download PDF" alt="Download PDF" class="ndq-pdf"><span class="hide-txt">PDF</span></a>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <span id="ndq-briefcase">
      
    <span id="add914121-17-279" style="display:inline;"><a title="Add to Briefcase" alt="Add to Briefcase" class="ndqicon-briefcase-add" href="#" onClick="sh_appendCookie('BWLD_BRIEFCASE','SEC%7C914121%2D17%2D279','ir.buffalowildwings.com');sh_toggleCase('914121-17-279');return false;"><span class="hide-txt">Add to Briefcase</span></a></span>
    <span id="del914121-17-279" style="display:none;"><a title="File is in Briefcase" alt="File is in Briefcase" class="ndqicon-briefcase-added" href="#" onClick="sh_unappendCookie('BWLD_BRIEFCASE','SEC%7C914121%2D17%2D279','ir.buffalowildwings.com');sh_toggleCase('914121-17-279');return false;"><span class="hide-txt">File is in Briefcase</span></a></span>
  
    </span>      
  
</span>
</td>
  </tr>
  
  <tr>
    <td data-before="Date">Feb 22, 2017</td>
    <td data-before="Filing">4</td>
    <td data-before="Description">

    <a href="secfiling.cfm?filingID=1437749-17-2964&CIK=1062449" title="View HTML"
      onclick="window.open(this,'SECFiling1437749172964','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172964','scrollbars=yes,resizable=yes'); return false;">
<span class="ndq_txtCap">block, andrew d.</span></a></td>
    <td data-before="View"> 
<span class="ndq-filetypes ndq-nowrap">
  
    <a href="secfiling.cfm?filingID=1437749-17-2964&CIK=1062449" title="View HTML" alt="View HTML"
      onclick="window.open(this,'SECFiling1437749172964','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172964','scrollbars=yes,resizable=yes'); return false;" class="ndq-html"><span class="hide-txt">HTML</span></a>
  
    <a href="/common/download/sec.cfm?CompanyID=BWLD&FID=1437749-17-2964&CIK=1062449" target="download" title="Download PDF" alt="Download PDF" class="ndq-pdf"><span class="hide-txt">PDF</span></a>
  
    <a href="http://www.shareholder.com/visitors/activeedgardoc.cfm?f=xls&companyid=BWLD&id=11874363" target="download" title="Download XLS" alt="Download XLS" class="ndq-xls"><span class="hide-txt">XLS</span></a>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <span id="ndq-briefcase">
      
    <span id="add1437749-17-2964" style="display:inline;"><a title="Add to Briefcase" alt="Add to Briefcase" class="ndqicon-briefcase-add" href="#" onClick="sh_appendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2964','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2964');return false;"><span class="hide-txt">Add to Briefcase</span></a></span>
    <span id="del1437749-17-2964" style="display:none;"><a title="File is in Briefcase" alt="File is in Briefcase" class="ndqicon-briefcase-added" href="#" onClick="sh_unappendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2964','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2964');return false;"><span class="hide-txt">File is in Briefcase</span></a></span>
  
    </span>      
  
</span>
</td>
  </tr>
  
  <tr>
    <td data-before="Date">Feb 22, 2017</td>
    <td data-before="Filing">4</td>
    <td data-before="Description">

    <a href="secfiling.cfm?filingID=1437749-17-2963&CIK=1062449" title="View HTML"
      onclick="window.open(this,'SECFiling1437749172963','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172963','scrollbars=yes,resizable=yes'); return false;">
<span class="ndq_txtCap">decker, emily c.</span></a></td>
    <td data-before="View"> 
<span class="ndq-filetypes ndq-nowrap">
  
    <a href="secfiling.cfm?filingID=1437749-17-2963&CIK=1062449" title="View HTML" alt="View HTML"
      onclick="window.open(this,'SECFiling1437749172963','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172963','scrollbars=yes,resizable=yes'); return false;" class="ndq-html"><span class="hide-txt">HTML</span></a>
  
    <a href="/common/download/sec.cfm?CompanyID=BWLD&FID=1437749-17-2963&CIK=1062449" target="download" title="Download PDF" alt="Download PDF" class="ndq-pdf"><span class="hide-txt">PDF</span></a>
  
    <a href="http://www.shareholder.com/visitors/activeedgardoc.cfm?f=xls&companyid=BWLD&id=11874362" target="download" title="Download XLS" alt="Download XLS" class="ndq-xls"><span class="hide-txt">XLS</span></a>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <span id="ndq-briefcase">
      
    <span id="add1437749-17-2963" style="display:inline;"><a title="Add to Briefcase" alt="Add to Briefcase" class="ndqicon-briefcase-add" href="#" onClick="sh_appendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2963','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2963');return false;"><span class="hide-txt">Add to Briefcase</span></a></span>
    <span id="del1437749-17-2963" style="display:none;"><a title="File is in Briefcase" alt="File is in Briefcase" class="ndqicon-briefcase-added" href="#" onClick="sh_unappendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2963','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2963');return false;"><span class="hide-txt">File is in Briefcase</span></a></span>
  
    </span>      
  
</span>
</td>
  </tr>
  
  <tr>
    <td data-before="Date">Feb 22, 2017</td>
    <td data-before="Filing">4</td>
    <td data-before="Description">

    <a href="secfiling.cfm?filingID=1437749-17-2962&CIK=1062449" title="View HTML"
      onclick="window.open(this,'SECFiling1437749172962','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172962','scrollbars=yes,resizable=yes'); return false;">
<span class="ndq_txtCap">patterson, lee r.</span></a></td>
    <td data-before="View"> 
<span class="ndq-filetypes ndq-nowrap">
  
    <a href="secfiling.cfm?filingID=1437749-17-2962&CIK=1062449" title="View HTML" alt="View HTML"
      onclick="window.open(this,'SECFiling1437749172962','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172962','scrollbars=yes,resizable=yes'); return false;" class="ndq-html"><span class="hide-txt">HTML</span></a>
  
    <a href="/common/download/sec.cfm?CompanyID=BWLD&FID=1437749-17-2962&CIK=1062449" target="download" title="Download PDF" alt="Download PDF" class="ndq-pdf"><span class="hide-txt">PDF</span></a>
  
    <a href="http://www.shareholder.com/visitors/activeedgardoc.cfm?f=xls&companyid=BWLD&id=11874352" target="download" title="Download XLS" alt="Download XLS" class="ndq-xls"><span class="hide-txt">XLS</span></a>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <span id="ndq-briefcase">
      
    <span id="add1437749-17-2962" style="display:inline;"><a title="Add to Briefcase" alt="Add to Briefcase" class="ndqicon-briefcase-add" href="#" onClick="sh_appendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2962','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2962');return false;"><span class="hide-txt">Add to Briefcase</span></a></span>
    <span id="del1437749-17-2962" style="display:none;"><a title="File is in Briefcase" alt="File is in Briefcase" class="ndqicon-briefcase-added" href="#" onClick="sh_unappendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2962','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2962');return false;"><span class="hide-txt">File is in Briefcase</span></a></span>
  
    </span>      
  
</span>
</td>
  </tr>
  
  <tr>
    <td data-before="Date">Feb 22, 2017</td>
    <td data-before="Filing">4</td>
    <td data-before="Description">

    <a href="secfiling.cfm?filingID=1437749-17-2961&CIK=1062449" title="View HTML"
      onclick="window.open(this,'SECFiling1437749172961','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172961','scrollbars=yes,resizable=yes'); return false;">
<span class="ndq_txtCap">schmidt, james m</span></a></td>
    <td data-before="View"> 
<span class="ndq-filetypes ndq-nowrap">
  
    <a href="secfiling.cfm?filingID=1437749-17-2961&CIK=1062449" title="View HTML" alt="View HTML"
      onclick="window.open(this,'SECFiling1437749172961','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172961','scrollbars=yes,resizable=yes'); return false;" class="ndq-html"><span class="hide-txt">HTML</span></a>
  
    <a href="/common/download/sec.cfm?CompanyID=BWLD&FID=1437749-17-2961&CIK=1062449" target="download" title="Download PDF" alt="Download PDF" class="ndq-pdf"><span class="hide-txt">PDF</span></a>
  
    <a href="http://www.shareholder.com/visitors/activeedgardoc.cfm?f=xls&companyid=BWLD&id=11874351" target="download" title="Download XLS" alt="Download XLS" class="ndq-xls"><span class="hide-txt">XLS</span></a>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <span id="ndq-briefcase">
      
    <span id="add1437749-17-2961" style="display:inline;"><a title="Add to Briefcase" alt="Add to Briefcase" class="ndqicon-briefcase-add" href="#" onClick="sh_appendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2961','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2961');return false;"><span class="hide-txt">Add to Briefcase</span></a></span>
    <span id="del1437749-17-2961" style="display:none;"><a title="File is in Briefcase" alt="File is in Briefcase" class="ndqicon-briefcase-added" href="#" onClick="sh_unappendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2961','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2961');return false;"><span class="hide-txt">File is in Briefcase</span></a></span>
  
    </span>      
  
</span>
</td>
  </tr>
  
  <tr>
    <td data-before="Date">Feb 22, 2017</td>
    <td data-before="Filing">4</td>
    <td data-before="Description">

    <a href="secfiling.cfm?filingID=1437749-17-2960&CIK=1062449" title="View HTML"
      onclick="window.open(this,'SECFiling1437749172960','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172960','scrollbars=yes,resizable=yes'); return false;">
<span class="ndq_txtCap">shoulak, judith a</span></a></td>
    <td data-before="View"> 
<span class="ndq-filetypes ndq-nowrap">
  
    <a href="secfiling.cfm?filingID=1437749-17-2960&CIK=1062449" title="View HTML" alt="View HTML"
      onclick="window.open(this,'SECFiling1437749172960','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172960','scrollbars=yes,resizable=yes'); return false;" class="ndq-html"><span class="hide-txt">HTML</span></a>
  
    <a href="/common/download/sec.cfm?CompanyID=BWLD&FID=1437749-17-2960&CIK=1062449" target="download" title="Download PDF" alt="Download PDF" class="ndq-pdf"><span class="hide-txt">PDF</span></a>
  
    <a href="http://www.shareholder.com/visitors/activeedgardoc.cfm?f=xls&companyid=BWLD&id=11874350" target="download" title="Download XLS" alt="Download XLS" class="ndq-xls"><span class="hide-txt">XLS</span></a>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <span id="ndq-briefcase">
      
    <span id="add1437749-17-2960" style="display:inline;"><a title="Add to Briefcase" alt="Add to Briefcase" class="ndqicon-briefcase-add" href="#" onClick="sh_appendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2960','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2960');return false;"><span class="hide-txt">Add to Briefcase</span></a></span>
    <span id="del1437749-17-2960" style="display:none;"><a title="File is in Briefcase" alt="File is in Briefcase" class="ndqicon-briefcase-added" href="#" onClick="sh_unappendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2960','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2960');return false;"><span class="hide-txt">File is in Briefcase</span></a></span>
  
    </span>      
  
</span>
</td>
  </tr>
  
  <tr>
    <td data-before="Date">Feb 22, 2017</td>
    <td data-before="Filing">4</td>
    <td data-before="Description">

    <a href="secfiling.cfm?filingID=1437749-17-2959&CIK=1062449" title="View HTML"
      onclick="window.open(this,'SECFiling1437749172959','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172959','scrollbars=yes,resizable=yes'); return false;">
<span class="ndq_txtCap">sorum, b jeffrey</span></a></td>
    <td data-before="View"> 
<span class="ndq-filetypes ndq-nowrap">
  
    <a href="secfiling.cfm?filingID=1437749-17-2959&CIK=1062449" title="View HTML" alt="View HTML"
      onclick="window.open(this,'SECFiling1437749172959','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172959','scrollbars=yes,resizable=yes'); return false;" class="ndq-html"><span class="hide-txt">HTML</span></a>
  
    <a href="/common/download/sec.cfm?CompanyID=BWLD&FID=1437749-17-2959&CIK=1062449" target="download" title="Download PDF" alt="Download PDF" class="ndq-pdf"><span class="hide-txt">PDF</span></a>
  
    <a href="http://www.shareholder.com/visitors/activeedgardoc.cfm?f=xls&companyid=BWLD&id=11874344" target="download" title="Download XLS" alt="Download XLS" class="ndq-xls"><span class="hide-txt">XLS</span></a>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <span id="ndq-briefcase">
      
    <span id="add1437749-17-2959" style="display:inline;"><a title="Add to Briefcase" alt="Add to Briefcase" class="ndqicon-briefcase-add" href="#" onClick="sh_appendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2959','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2959');return false;"><span class="hide-txt">Add to Briefcase</span></a></span>
    <span id="del1437749-17-2959" style="display:none;"><a title="File is in Briefcase" alt="File is in Briefcase" class="ndqicon-briefcase-added" href="#" onClick="sh_unappendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2959','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2959');return false;"><span class="hide-txt">File is in Briefcase</span></a></span>
  
    </span>      
  
</span>
</td>
  </tr>
  
  <tr>
    <td data-before="Date">Feb 22, 2017</td>
    <td data-before="Filing">4</td>
    <td data-before="Description">

    <a href="secfiling.cfm?filingID=1437749-17-2958&CIK=1062449" title="View HTML"
      onclick="window.open(this,'SECFiling1437749172958','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172958','scrollbars=yes,resizable=yes'); return false;">
<span class="ndq_txtCap">smith, sally j</span></a></td>
    <td data-before="View"> 
<span class="ndq-filetypes ndq-nowrap">
  
    <a href="secfiling.cfm?filingID=1437749-17-2958&CIK=1062449" title="View HTML" alt="View HTML"
      onclick="window.open(this,'SECFiling1437749172958','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling1437749172958','scrollbars=yes,resizable=yes'); return false;" class="ndq-html"><span class="hide-txt">HTML</span></a>
  
    <a href="/common/download/sec.cfm?CompanyID=BWLD&FID=1437749-17-2958&CIK=1062449" target="download" title="Download PDF" alt="Download PDF" class="ndq-pdf"><span class="hide-txt">PDF</span></a>
  
    <a href="http://www.shareholder.com/visitors/activeedgardoc.cfm?f=xls&companyid=BWLD&id=11874343" target="download" title="Download XLS" alt="Download XLS" class="ndq-xls"><span class="hide-txt">XLS</span></a>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <span id="ndq-briefcase">
      
    <span id="add1437749-17-2958" style="display:inline;"><a title="Add to Briefcase" alt="Add to Briefcase" class="ndqicon-briefcase-add" href="#" onClick="sh_appendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2958','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2958');return false;"><span class="hide-txt">Add to Briefcase</span></a></span>
    <span id="del1437749-17-2958" style="display:none;"><a title="File is in Briefcase" alt="File is in Briefcase" class="ndqicon-briefcase-added" href="#" onClick="sh_unappendCookie('BWLD_BRIEFCASE','SEC%7C1437749%2D17%2D2958','ir.buffalowildwings.com');sh_toggleCase('1437749-17-2958');return false;"><span class="hide-txt">File is in Briefcase</span></a></span>
  
    </span>      
  
</span>
</td>
  </tr>
  
  <tr>
    <td data-before="Date">Feb 22, 2017</td>
    <td data-before="Filing">DFAN14A</td>
    <td data-before="Description">

    <a href="secfiling.cfm?filingID=914121-17-275&CIK=1062449" title="View HTML"
      onclick="window.open(this,'SECFiling91412117275','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling91412117275','scrollbars=yes,resizable=yes'); return false;">
<span class="ndq_txtCap">definitive proxy statement</span></a></td>
    <td data-before="View"> 
<span class="ndq-filetypes ndq-nowrap">
  
    <a href="secfiling.cfm?filingID=914121-17-275&CIK=1062449" title="View HTML" alt="View HTML"
      onclick="window.open(this,'SECFiling91412117275','scrollbars=yes,resizable=yes'); return false;"
      onkeypress="window.open(this,'SECFiling91412117275','scrollbars=yes,resizable=yes'); return false;" class="ndq-html"><span class="hide-txt">HTML</span></a>
  
    <a href="/common/download/sec.cfm?CompanyID=BWLD&FID=914121-17-275&CIK=1062449" target="download" title="Download PDF" alt="Download PDF" class="ndq-pdf"><span class="hide-txt">PDF</span></a>
  
    <a href="http://www.shareholder.com/visitors/activeedgardoc.cfm?f=xls&companyid=BWLD&id=11873399" target="download" title="Download XLS" alt="Download XLS" class="ndq-xls"><span class="hide-txt">XLS</span></a>
  
    <div class="ndq-filetypes-na" style="display:inline-block !important">&nbsp;</div>
  
    <span id="ndq-briefcase">
      
    <span id="add914121-17-275" style="display:inline;"><a title="Add to Briefcase" alt="Add to Briefcase" class="ndqicon-briefcase-add" href="#" onClick="sh_appendCookie('BWLD_BRIEFCASE','SEC%7C914121%2D17%2D275','ir.buffalowildwings.com');sh_toggleCase('914121-17-275');return false;"><span class="hide-txt">Add to Briefcase</span></a></span>
    <span id="del914121-17-275" style="display:none;"><a title="File is in Briefcase" alt="File is in Briefcase" class="ndqicon-briefcase-added" href="#" onClick="sh_unappendCookie('BWLD_BRIEFCASE','SEC%7C914121%2D17%2D275','ir.buffalowildwings.com');sh_toggleCase('914121-17-275');return false;"><span class="hide-txt">File is in Briefcase</span></a></span>
  
    </span>      
  
</span>
</td>
  </tr>
  
</table>

    

      <div id="ndq-pagination">
        <div id="ndq-page" class="ndq-page-current">1</div> <div id="ndq-page"><a href="/sec.cfm?DocType=&DocTypeExclude=&SortOrder=FilingDate%20Descending&Year=&PageNum=2&FormatFilter=&CIK=&amp;NumberPerPage=10">2</a></div> <div id="ndq-page"><a href="/sec.cfm?DocType=&DocTypeExclude=&SortOrder=FilingDate%20Descending&Year=&PageNum=3&FormatFilter=&CIK=&amp;NumberPerPage=10">3</a></div>  <div id="ndq-page">...</div> <div id="ndq-page"><a href="/sec.cfm?DocType=&DocTypeExclude=&SortOrder=FilingDate%20Descending&Year=&PageNum=129&FormatFilter=&CIK=&amp;NumberPerPage=10">129</a></div> <a id="ndq-page" class=" ndqicon-arw-r" href="/sec.cfm?DocType=&DocTypeExclude=&SortOrder=FilingDate%20Descending&Year=&PageNum=2&FormatFilter=&CIK=&amp;NumberPerPage=10"><span class=" hide-txt">Next</span></a><a id="ndq-page" class="ndq-last  ndqicon-arw-arw-r" href="/sec.cfm?DocType=&DocTypeExclude=&SortOrder=FilingDate%20Descending&Year=&PageNum=129&FormatFilter=&CIK=&amp;NumberPerPage=10"><span class=" hide-txt">Last</span></a> 
        </div>
      
     
<div class="ndq-briefcaseLegend">
  <div class="ndqicon-briefcase"  title="Briefcase" alt="Briefcase"> 
      = add PDF file to <a href='briefcase.cfm'>Briefcase</a>
  </div>
</div>

    
    <br clear="all" /> <div class="ndq-vSpace"></div>
    
          
            <form name="ChangeNumberPerPage" action="/sec.cfm">
                    <div class="ndq-smForm">
              <label for="NumberPerPage">View:</label> 
              <select class="select-box-it" onChange="ChangeNumberPerPage.submit();" name="NumberPerPage">
                <option value="10"selected="selected">10 results per page</option>
                <option value="25">25 results per page</option>
                <option value="50">50 results per page</option>
              </select>
             </div>
                      
              <input type="hidden" name="Year" value="" />
              <input type="hidden" name="DocType" value="" />
              <input type="hidden" name="DocTypeExclude" value="" />
              <input type="hidden" name="SortOrder" value="FilingDate%20Descending" />
              
              <noscript><button type="submit" class="ndq-button">Update View</button></noscript>  
            </form>
          

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