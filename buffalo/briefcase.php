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
        	 
        		<h2>Shareholder Briefcase</h2> 
                
            
            
    		<div id="ndq-content" class="ndq-briefcase ">
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
		 
		

<script type="text/javascript">
<!--
function selectAll(_chkBx,_form) 
{
  if (document.getElementById(_chkBx).checked) 
  {
    for (i=0; i < document.forms[_form].elements.length; i++)
    {	document.forms[_form].elements[i].checked = true;	}
  }
  else
  {
    for (i=0; i < document.forms[_form].elements.length; i++)
    { document.forms[_form].elements[i].checked = false; }
  }
  calculateSize();
}

function allChecked(_chkBx,_form) 
{
  var tmpCntr = 0;
  var tmpHldr = 0;
  for (i=0; i < document.forms[_form].elements.length; i++)
  {
    if ( document.forms[_form].elements[i].type == 'checkbox' && document.forms[_form].elements[i].id != _chkBx ) 
    {
      tmpHldr++;
      if ( document.forms[_form].elements[i].checked == true ) 
      {
        tmpCntr++;
      }
    }
  }
  if ( tmpCntr == tmpHldr ) 
  {
    document.getElementById(_chkBx).checked = true;
  } 
  else 
  {
    document.getElementById(_chkBx).checked = false;
  }
  calculateSize();
}

function calculateSize() 
{
  theSize = 0
  if(!document.forms.briefcase.ckValue.length)
  {
    if(document.forms.briefcase.ckValue.checked)
    {
      theSize += parseInt(eval('document.forms.briefcase.FileSize0.value'));
    }
  }
  else
  {
    for(i=0;i<document.forms.briefcase.ckValue.length;i++)
    {
      if(document.forms.briefcase.ckValue[i].checked)
      {
        theSize += parseInt(eval('document.forms.briefcase.FileSize' + i + '.value'));
      }
    }
  }
  document.getElementById("totalFileSize").innerHTML = '' + theSize + ' KB'
}
  
function doAction(elemId) 
{
  var emptyListCheck=0;

  
  if(!document.forms.briefcase.ckValue.length)
  {
    if(document.forms.briefcase.ckValue.checked)
      emptyListCheck++;
  }
  else
  {
    for(i=0;i<document.forms.briefcase.ckValue.length;i++)
    {
      if(document.forms.briefcase.ckValue[i].checked)
        emptyListCheck++;
    }
  }

  elem = document.getElementById(elemId);
  if( elem.value == '1' ) 
  {
    if (emptyListCheck)
    {
      // Download Selected
      downloadFiles(getURL());
      return false;
    }
    else
    {
      alert("Select the files to download");
    }  
  } 
  else if ( elem.value == '2') 
  {
    if (emptyListCheck)
    {
      // Email Selected
      var temp = getURL();
      temp = temp.replace(/&/g,"||||");
      temp = temp.replace(/=/g,"QQQQ"); 
      sh_popup('briefcase-email.cfm?downloadfile=' + temp,400,545);
      return false;
    }
    else
    {
      alert("Select the files to email");
    }  
  } 
  else if ( elem.value == '3' ) 
  {
    if (emptyListCheck)
    {
      // Remove From Briefcase
      removeFiles();
    }
    else
    {
      alert("Select the files to remove from briefcase");
    }  
  }

}
  
function removeFiles()
{
  if(!document.forms.briefcase.ckValue.length)
  {
    if(document.forms.briefcase.ckValue.checked)
    {
      sh_unappendCookie('BWLD_BRIEFCASE',document.forms.briefcase.ckValue.value,'ir.buffalowildwings.com');
    }
  }
  else
  {
    for(i=0;i<document.forms.briefcase.ckValue.length;i++)
    {
      if(document.forms.briefcase.ckValue[i].checked)
      {
              sh_unappendCookie('BWLD_BRIEFCASE',document.forms.briefcase.ckValue[i].value,'ir.buffalowildwings.com');
      }
    }
  }
  location.href='?';
}


function getURL()
{
  idstring = '';
  keystring = '';
  counter = 0
  lastfilename = '';
  if(!document.forms.briefcase.ckValue.length)
  {
    /* ONLY ONE TOTAL */
    if(document.forms.briefcase.ckValue.checked)
    {
      counter = 1;
      idstring = idstring +   eval('document.forms.briefcase.FileID0.value');
      keystring = keystring + eval('document.forms.briefcase.FileKey0.value');
      lastfilename=eval('document.forms.briefcase.FileName0.value');
    }
  } 
  else 
  {
    for(i=0;i<document.forms.briefcase.ckValue.length;i++)
    {
      if(document.forms.briefcase.ckValue[i].checked)
      {
        if(idstring.length > 0)
        {
          idstring = idstring + '.';
          keystring = keystring + '.';
        }
        idstring = idstring + eval('document.forms.briefcase.FileID' + i + '.value');
        keystring = keystring + eval('document.forms.briefcase.FileKey' + i + '.value');
        lastfilename=eval('document.forms.briefcase.FileName' + i + '.value');
        counter+=1;
      }
    }
  }
  if(counter == 1)
  {
    return '&fileid=' + idstring + '&attachment=1' + '&filekey=' + keystring  + '&filename=' + lastfilename;
  } 
  else 
  {
    return '&fileid=' + idstring + '&filekey=' + keystring  + '&filename=BWLD_03-01-2017114249.zip'; 
  }
}

function downloadFiles(idstring)
{
  if(idstring.length > 10)
  {
    location.href='/common/download/download.cfm?companyid=BWLD' + idstring;	
  }
  else
    alert('Please Select something to download.');
}
-->
</script>

<p>Collect, zip and download files from our Investor Relations website. Click on the briefcase icon  <span class="ndqicon-briefcase-add"></span> located near most downloadable files throughout our IR website and use this page to manage your briefcase.</p>


  <p>You currently have no files in your Shareholder Briefcase.</p>


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