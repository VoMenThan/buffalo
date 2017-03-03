

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
<head><link rel="stylesheet" type="text/css" href="/DXR.axd?r=2_1-Yfdhe" /><link rel="stylesheet" type="text/css" href="/DXR.axd?r=1_4-Yfdhe" /><link rel="stylesheet" type="text/css" href="/DXR.axd?r=2_2-Yfdhe" /><link rel="stylesheet" type="text/css" href="/DXR.axd?r=2_0-Yfdhe" /><title>
	Buffalo Wild Wings - Time
</title><meta name="msapplication-config" content="none" /><meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
    <script src="/Scripts/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="/Scripts/json2.js" type="text/javascript"></script>
    <link href='/Styles.ashx?wv=1000' rel='stylesheet' /><link href='/Content.ashx?ContentFile=AlohaOnline.css&wv=1000&Design=2&companyCode=BWWI001' rel='stylesheet' /><link href='Content.ashx?ContentFile=favicon.ico&companyCode=BWWI001' rel='shortcut icon' type='image/x-icon' /><meta name='msapplication-config' content='none'/><script src="/Scripts/jquery-1.5.1.min.js" type="text/javascript"></script></head>
<body onload="TooltipValidators('ValidationError')">
<h1 style="display:none">Buffalo Wild Wings - Time</h1>
    
    
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T5VXLF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer', 'GTM-T5VXLF');
    </script>
    <!-- End Google Tag Manager -->
    

<script type="text/javascript">
    
    window.onerror = function (errorMsg, url, lineNumber, column, errorObj) {
        try { // never throw from the error handler
            var message = "Error: '" + errorMsg + "', script: '" + url + "', line: '" + lineNumber + "', column: '" + column + "', stack trace: '" + errorObj + "'";
            var logUrl = "/Log/Item";
            $.ajax({
                type: "POST",
                url: logUrl,
                data: { message: message }
            });
        } catch (error) {};
    }
    

    var tformatter = null;
    $(document).ready(function () {
        if ($("#ctl00_ctl00_Corporate").length > 0) { $("#ctl00_ctl00_Corporate").attr('tabindex', '1'); }
        if ($("#ctl00_ctl00_Menu").length > 0) { $("[#ctl00_ctl00_Menu").attr('tabindex', '2'); }
        if ($("#ctl00_ctl00_Locations").length > 0) { $("#ctl00_ctl00_Locations").attr('tabindex', '3'); }
        if ($("#ctl00_ctl00_ContactUs").length > 0) { $("#ctl00_ctl00_ContactUs").attr('tabindex', '4'); }
        if ($("#ctl00_ctl00_NavBar1").length > 0) { $("#ctl00_ctl00_NavBar1").attr('tabindex', '5'); }
        if ($("#ctl00_ctl00_NavBar2").length > 0) { $("#ctl00_ctl00_NavBar2").attr('tabindex', '6'); }
        if ($("#ctl00_ctl00_NavBar3").length > 0) { $("#ctl00_ctl00_NavBar3").attr('tabindex', '7'); }
        if ($("#ctl00_ctl00_NavBarAccount").length > 0) { $("#ctl00_ctl00_NavBarAccount").attr('tabindex', '8'); }
        if ($("#ctl00_ctl00_NavBarLogin").length > 0) { $("#ctl00_ctl00_NavBarLogin").attr('tabindex', '9'); }
        if ($("#ctl00_ctl00_NavBarLogout").length > 0) { $("#ctl00_ctl00_NavBarLogout").attr('tabindex', '10'); }
        if ($("#ctl00_ctl00_FAQ").length > 0) { $("#ctl00_ctl00_FAQ").attr('tabindex', '11'); }

        tformatter = new DateTimeFormatter('h:mm tt');

        if (!$.cookie("UpsellSuggestionComplete")) {
            document.cookie = "UpsellSuggestionComplete=false";
        }
    });

    $(window).load(function () {
        document.cookie = "utm_params=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
        document.cookie = "utm_params_retrieved=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
    });

    var contentUrl = "Content.ashx";
    var companyCodeQueryString = "&companyCode=BWWI001";

    // Place accessor methods to get at application settings here over the Util.js/Order.js file
    // because substition will not happen in the separate script files

    function GetMaxOrderDollarAmount() {
        var maxAmount = '175';
        return CurrencyFormatted(maxAmount);
    }

    function GetMaxLineItemQuantity() {
        return '500';
    }

    function GetPickupTimeGranularity() {
        return '10';
    }

    function GetDeliveryTimeGranularity() {
        return '10';
    }

    function GetDeliveryTimesAsRange() {
        return 'False' == 'True';
    }

    function GetEnableASAPOnDelivery() {
        return 'False' == 'True';
    }

    function GetServerGMTOffset() {
        return '6';
    }

    function GetServerTime() {
        return '3/2/2017 3:56:13 AM';
    }

    function GetServerContentLocation(template) {
        return contentUrl + '?ContentFile=' + template + companyCodeQueryString;
    }

    function GetPortionAssistantMaxFedPercentage() {
        return '120';
    }

    function GetPortionAssistantNumGraphics() {
        return '0';
    }

    function GetHideTaxCompanyOrSiteSetting() {
        return false;
    }

    function GetCultureCode() {
        return 'en-US';
    }

    function GetCultureISOCurrencySymbol() {
        return 'USD';
    }

    function IsCurrencyPositionLeft()
    {
        return 'True';
    }

    function GetCultureCurrencyDecimalSeparator() {
        return '.';
    }

    function realignMenus() {
        $('.account_div').css('float', 'left');
        $('#menulinks').css('float', 'right');
        $('#menulinks').css('position', 'relative');
        $('#menulinks').css('left', '-22px');
        $("div[id$=_lnkOrderEntry]").hide();
        $("div[id$=_lnkSelectStore]").hide();
    }
</script>   

<script src='/ScriptHandler.ashx?ScriptType=Localization&wv=1000' type='text/javascript'></script>

    <form method="post" action="./Time.aspx" id="aspnetForm">
<div class="aspNetHidden">
<input type="hidden" name="ctl00_ctl00_ScriptManager_HiddenField" id="ctl00_ctl00_ScriptManager_HiddenField" value="" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="whJ93PWJzn2cODuZHlioTrnADWdDxRhq1JWBBy0E5BhdadgIRaTuyojTU3GHajf8xavRs1fbbjJwlxYvSKgifqFXk1NJuBvlsXUoiS7cp1+92oRh1tRYTNljPwtokJrv4NgHRgJintW90MDo9LBfNL14oZaxDbbdaCvrGHDOCxDm9R4Pbq95ia7VVcS41Qn13oJwOGcUXvN5aTNvWtqvBYLZbf2QbOChbOz57C/HIQrw+fsXSy5v3qk+PakStX/BIp/lMBzP836l1w9nfL/taOGW5j0oTgETwl+jAZ5LMJs0bN6vRqJje03/LxxbspiAqEW0MsNvnqt85AbJKwYe6BykAwVS7qCZySUxzrIjGeRaBWWg9Kp77OiSjGrvCPdKsjVPZv/n6qWM+gQkx+c02hsS5jUDQlwayMUTo6LckPLw0dMWZBG/o+MFDpZV8la9JYLLg/9kppqugK/AQ+or4/OTF5YkE5Msl6tSrf+L0Gfdg+VTTLZu85A6a9nNxFbnugPTIyGAiXtax92Eqk72VquInU7Uc/JqUVMFOi64HiVCjEP33s/kLDBlYU1zN8rCdbxpLTOPXQAIsNrOyGs4aVyUQptdWJCttAiz92O5GECYvKoMdAKCwSberXBf9xvSN2JxCBVxJSttI5rRG8TGDyHOG6WVIS6apDpON2V6GRveVU8TmlHp1CNqF8nQvbY2TMO/674uFAi57NXErxzlmeMhcWkY1hZsavcmSlt6qf1B2DOeGHRJzFKghx8p8V+F3W9oj5K2XCczW8RAeQWxQhTQ4Ju3lL2hBtaD1uytXJWiyWMjjPMlDniS4ZJLOg2YqGDKGbRSfLs439T4GJDj+yYZ700bj0uG2FdUGnoQidESvkmoaHAcD2sMcQdOS6wJMwecOyFrnSwXwHEA0P0EFRVeLAD4FrlUXI4hprw1NWz/HhNTRho9Za9Ul/AyMNoFEa0J40Ps3963NdUHfBo5szuJHlF76n52Bl6Dog0Zk6ttJlQ1Q/O3/SNRVd+Sy36HohDNxSSDaM19/ohr2w/6zutt7EHppYjv3WuDlP2n7UUEqp/Kb9MHz728ltdHeWCiAXoJbLWbBgeJGlrjn+SDiAlTypDFxv3s8jhhXTWVgqMtiFmXl9ZYVgFAHgZ2U/oBl/BrwqYNUfnsu+ybdSg7Zen7ZUVdH5+nyTYwVoF+KQldepn2qTKeQCz/tW51eZlfKfEItQVtWReQjk1GFmjZ8uBfQ0U3L6CcxHRAD3ZrDCFQHzzTFgTXcxAUFtLTgShTNCkLfs8cLr/doSqBuE/4DBzCXUfFYnuC+l2V49fRYBsPwSGWwJKKN5gd4o9Dxcfv/rRXBGMPQ6px4AsROUY2hQbhtzjjx0ZTAlwmBQy4YQpqcyXZAbAdmTJCflH50I7gyolHscJ0Is79qiXCck+rKzjTg08PY3pptpWidDZ8pbphJ4bI2/YEV2mjG46TQTdNobOUUvwrCW9r7mC0rIF8qE8+YahhGlkYZ3zcFrlqsjPNDVG0e2TPSRgb4zO9WLC0THFmMrL8+EzIYxkcGY8uBHm9g4/QkRG14poXFu4PToVn2J4peYzQt12Rrh19WwqadAXTD5JlMYcQcErpXGsBV2xLfNcta49z6IOVmnReWIBtF3M7RER5n0AzZxvx6DzBcY3Gy++Qx5SFQi2icUDJUbEEjhgfEivLSEtmBrWAfe/nVlhU4DH9QzstW02EY/VLc1OYtpaUdmV3391f0verV+iKbbZEfNZFpLbNxrDUxJwMsGw+Syxk8BI+fY7CkQRvQB5TKrMIz3aL0V3xm5d341wTthoZuO71JIY3r5ainm5fgUtBg4rTkQL0nyIWAUYMsOGRkVmWHsswtY+ZCFFv9fMk30p3sdN/MatpHXJSxYR7IESKLl5MxNFnPiP3coFVHcxpokAbbzfga5mdZ1A3OjmxF490Ipk0Ajb+p8zwnb5UMHPocNPg8RO9GopV3jSQH/Lw0GvbSOj/Mufow+VDsWZsBpIqtG9OKoxCtfXJPmsp5V59GvFZrOI19IgHh7ai4D3/gz1OXXvwxnCM4nUYorLzQxpoQTditINJf1amGTaBDutalvbyrsInC6Mt0M8SjruhS1kx/VKGFA6ebJlQDBdUYP+CwKwpV8pDFxGEZIlW24ssRgJ5Fei+pzEQizVs1n0lYNhVlfV6RbGpH8JPwqD8fgygPnd4F0PsxJJQ/o9dFQWf3pW8AxZ0aOtzHspWumcq10jzILv0zi7l9HpE0F03VptxmeEgeLH02lsRBJSi6yiNG/j1Wti6GolzBs8te2cJA0zvnKYVO2AuxQkR623+aaeXlLblw4QzdztigG1DLalwc4r1Pt7itmbwmEXGNPiPhI2F+M5DktL8K1wl6Y4cRK3b5/FYH2T0V/tUEtpVe33fCOJzBqR3yZZWmwfp18azZ5mx1f1V8rrgfGVbwzBmCQv/nyEESPq7Jz5Z4Pz6SDsWCzxzBze//Qmahl0qeOF8keGfDU0dTUo6SpCk45tMBC21d2pI9Nw/wYFa3foEmtXFTmiftQt6bRQBjyQ825pMHw==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZDb_iA5heyN_fBOmcrliyBXWqGvhy0ZgmxfjKebZRBduN5z-Uw2&amp;t=636161582620000000" type="text/javascript"></script>


<script src="/ScriptResource.axd?d=LFH9LEcQJyqJuCdPIX6EkiZGPJ6rag8Thp_KKlDjpifP93KX_OsmtBBi7FKXM7-JhJubhwx-ucrnz4VA35Pz-MV5VoHTrNMt25rDOZbi6A4E64Pb1k_ekH3ej1c0OA5YyK8kgrQJ1ViRs-C8fH6fi3ApbrKklAPTuzdlxO8-keRQ7omseoEpxE3uRIm5mWX-YSuUkyOuaHoNGSwiqCGGFIZ2Su5d2m6skRWyJ3YnXaEvekk-63xhktp-wGmfO5d3wpIDoK4umDYDHu0umsCSyLJybK38RFjDntB0TitcByaMj0b0ddUa_TaUmQ25NkEW2skGoKDe7V6RVgYz8PgjR7B0tqTTW7jKLOkzUinqueOyQKUsNAypZ-hK3qoO5FG7R-R72v-dEhW9uzhn-Dq0DYv0MNhNh_hSnN-UGgCNHky-FpYQrAQc88rjX3h4xWyWY_TF6xsgp2aIQO6n1_Jm-9awYiRjQ9wpulT2kqIJIpqfEdrGLs9s5NNlpz64XMTf_pJh-luL1p71-NHrZPGqp0M0Ax9UjLKbNkVXK005hVF2K-TPZisRl-acb83ftHOX_fjJ7A2" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=5rPex4jQtXgYnQY-IQHj641Mi_Ffiq-DJui-SGBjGJ4e_3F7vzSucANfSh8nKHNJmDiYfsAwwtJ2zqrQ_DPhPdYnwyO_Kv9OS_tkyv440h1mB5sch9bCNPv7ZxWGtq2BLGfDsQ2&amp;t=f2cd5c5" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
Sys.Services._AuthenticationService.DefaultWebServicePath = 'Authentication_JSON_AppService.axd';
//]]>
</script>

<script src="ScriptHandler.ashx?_TSM_HiddenField_=ctl00_ctl00_ScriptManager_HiddenField&amp;_TSM_CombinedScripts_=%3b%3bAjaxControlToolkit%2c+Version%3d4.1.40412.0%2c+Culture%3dneutral%2c+PublicKeyToken%3d28f01b0e84b6d53e%3aen-US%3aacfc7575-cdee-46af-964f-5d85d9cdcf92%3ade1feab2%3af2c8e708%3a8613aea7%3af9cec9bc%3a3202a5a2%3aab09e3fe%3a87104b7c%3aa67c2700%3abe6fb298" type="text/javascript"></script>
<script src="OrderEntryService.asmx/js" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="1111ACC9" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="prHNThiGeVZlNylXXGBtEzu4kLHl6eAAGty3FpyYE910fKHJLlcsu1HqoQSIX1AyJmqfhAv/rSLHHIsWEqk6ssHxCr0vIolrC2kUa9+siGXP8pSq7Q+xBtg8xli/ttdnZNKMkR7QpaO14znp7vxouuGbzVnjJXiuwy5l2XN2G2kSTSWwqquK1zCk77YfNSGLLHJO4OdaSK02eLQ2Hobf8i+2Ye6nnUyAckJs8RzHHmJf329guxmewFB5rW2i27PkD5sZ37wgh7QUMqPS6MBK1eK3iy6YS0yygyijxn26lewoAHfPFl0hWv9o9FHg1xne2UDkLqeNPoEtAxzfLkiZgfg1LtM10OCdUwdAGFRKc+hFYiuoUne/gu+D1QthUEEnoPCGh9eeNwRWUjAqiZ6Ev43XCjLmuUFenB9I/HExIK96GfPk+4nJQfje6m5K9n1khnv4r/S5FftpilK9hrg7m7yC+tz2I1KaopXwIhLpxN+aFDfmao84waBXdYqFh3ORCcgAC4etdUD4fKhdSMp9cP3DGvvDFofKdOt62RYT62l3VQ3Q" />
</div>
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ctl00$ScriptManager', 'aspnetForm', ['tctl00$ctl00$Content$Content$TimeSelection$SelectedDate$DDD$DDTC$Panel',''], ['ctl00$ctl00$ScriptManager',''], [], 90, 'ctl00$ctl00');
//]]>
</script>
<input type="hidden" name="ctl00$ctl00$ScriptManager" id="ctl00_ctl00_ScriptManager" />
<script type="text/javascript">
//<![CDATA[
Sys.Application.setServerId("ctl00_ctl00_ScriptManager", "ctl00$ctl00$ScriptManager");
Sys.Application._enableHistoryInScriptManager();
//]]>
</script>
   

    

    

    
    

    
        
    

                

    <a id="ctl00_ctl00_LinkButton1" href="javascript:__doPostBack(&#39;ctl00$ctl00$LinkButton1&#39;,&#39;&#39;)" style="display:none;">modal target</a>
    <input id="Button1" type="button" value="YES" style="display:none"/>
    <input id="Button2" type="button" value="NO" style="display:none"/>

    <div id="ctl00_ctl00_InfoPopup" class="InfoPopup" style="display:none;">
	
        <div id="InfoPlaceHolder" >
            <div id="InfoLeft">
            </div>
            <div id="InfoMiddle">
                <div id="InfoMessage">
                </div>
                <div id="ProgressBar">
                    <div id="ProgressBarStatus">
                    </div>
                </div>
            </div>
            <div id="InfoRight">
            </div>
        </div>
    
</div>
        
    <div id="ctl00_ctl00_ModalCheckListPopup" style="display:none;">
	
         <div id="ModalCheckListPopupPlaceholder">
             <div id="ModalCheckListPopupMiddle">
                <br/>
                     <div id="ModalCheckListPopupRewardPrompt">
                            <span>You have the following Rewards/Discounts:</span>
                     </div>
                     <div id="ModalChecklistPopupTable"></div>
                <br/>
                     <div style="margin: 20px">
                        <div id='ModalCheckListPopupOKButtonDiv' class='Right' style='display:inline;' ><div class='ButtonRight bottom-left' onclick='document.getElementById("ctl00_ctl00_ModalCheckListPopupOKButton").click();'  onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "ButtonRightHover bottom-left");' onfocus='ButtonClassHover(this, "ButtonRightHover bottom-left");' onmouseout='ButtonClassOut(this, "ButtonRight bottom-left");' onblur='ButtonClassOut(this, "ButtonRight bottom-left");'  ><span>Apply</span></div><div class='ButtonRightHover bottom-left' style='display:none; '></div><input type="submit" name="ctl00$ctl00$ModalCheckListPopupOKButton" value="Apply" onclick="AcceptLoyaltyRewards(); return false;" id="ctl00_ctl00_ModalCheckListPopupOKButton" class="Hidden" /></div>
                        <div id='ModalCheckListPopupCancelButtonDiv' class='Left' style='display:inline;' ><div class='ButtonLeft bottom-right' onclick='document.getElementById("ctl00_ctl00_ModalCheckListPopupCancelButton").click();'  onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "ButtonLeftHover bottom-right");' onfocus='ButtonClassHover(this, "ButtonLeftHover bottom-right");' onmouseout='ButtonClassOut(this, "ButtonLeft bottom-right");' onblur='ButtonClassOut(this, "ButtonLeft bottom-right");'  ><span>No Thanks</span></div><div class='ButtonLeftHover bottom-right' style='display:none; '></div><input type="submit" name="ctl00$ctl00$ModalCheckListPopupCancelButton" value="No Thanks" onclick="RejectLoyaltyRewards(); return false;" id="ctl00_ctl00_ModalCheckListPopupCancelButton" class="Hidden" /></div>
                     </div>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
        </div>
    
</div>

                    
    <div id="ctl00_ctl00_QuestionPopup" class="QuestionPopup" style="display:none;">
	
        <div id="QuestionPlaceHolder">
            <div id="QuestionLeft">
            </div>
            <div id="QuestionMiddle">
                <div id="QuestionMessage">
                    <table>
                        <tr>
                            <td>
                                <div id="ctl00_ctl00_QuestionMessageText" class="QuestionMessageText"></div>
                            </td>
                        </tr>
                    </table>
                    <div>
                    </div>
                </div>
                <div id="QuestionActions">
                    <div id='QuestionOKButtonDiv' class='Left' style='display:inline;' ><div class='Button' onclick='document.getElementById("ctl00_ctl00_QuestionOKButton").click();'  onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "ButtonHover");' onfocus='ButtonClassHover(this, "ButtonHover");' onmouseout='ButtonClassOut(this, "Button");' onblur='ButtonClassOut(this, "Button");'  ><span>OK</span></div><div class='ButtonHover' style='display:none; '></div><input type="submit" name="ctl00$ctl00$QuestionOKButton" value="OK" id="ctl00_ctl00_QuestionOKButton" class="Hidden" /></div>
                    <div id='QuestionCancelButtonDiv' class='Right' style='display:inline;' ><div class='Button' onclick='document.getElementById("ctl00_ctl00_QuestionCancelButton").click();'  onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "ButtonHover");' onfocus='ButtonClassHover(this, "ButtonHover");' onmouseout='ButtonClassOut(this, "Button");' onblur='ButtonClassOut(this, "Button");'  ><span>Cancel</span></div><div class='ButtonHover' style='display:none; '></div><input type="submit" name="ctl00$ctl00$QuestionCancelButton" value="Cancel" id="ctl00_ctl00_QuestionCancelButton" class="Hidden" /></div>
                </div>
            </div>
            <div id="QuestionRight">
            </div>
        </div>
    
</div>

     <div id="ctl00_ctl00_QuestionOrderTypePopup" class="QuestionPopup" style="display:none;">
	
         <div id="QuestionOrderTypePlaceHolder">
             <div id="QuestionOrderTypeLeft">
             </div>
             <div id="QuestionOrderTypeMiddle">
                 <div id="QuestionOrderTypeMessage">
                     <div id="ctl00_ctl00_QuestionMessageOrderType" class="QuestionMessageText"></div>
                     <div>
                     </div>
                 </div>
                 <div class="QuestionOrderTypeMessageButtonDiv">
                     <div id='DeliveryButtonDiv' style='display:inline' ><div class='ButtonRight' onclick='document.getElementById("ctl00_ctl00_DeliveryButton").click();'  onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "ButtonRightHover");' onfocus='ButtonClassHover(this, "ButtonRightHover");' onmouseout='ButtonClassOut(this, "ButtonRight");' onblur='ButtonClassOut(this, "ButtonRight");'  ><span>Delivery</span></div><div class='ButtonRightHover' style='display:none; '></div><input type="submit" name="ctl00$ctl00$DeliveryButton" value="Delivery" onclick="OnBrowseModeClicked(2); return false;" id="ctl00_ctl00_DeliveryButton" class="Hidden" /></div>
                     <div class="Clear"></div>
                     <div id='PickupButtonDiv' style='display:inline' ><div class='ButtonRight' onclick='document.getElementById("ctl00_ctl00_PickupButton").click();'  onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "ButtonRightHover");' onfocus='ButtonClassHover(this, "ButtonRightHover");' onmouseout='ButtonClassOut(this, "ButtonRight");' onblur='ButtonClassOut(this, "ButtonRight");'  ><span>Pickup</span></div><div class='ButtonRightHover' style='display:none; '></div><input type="submit" name="ctl00$ctl00$PickupButton" value="Pickup" onclick="OnBrowseModeClicked(1); return false;" id="ctl00_ctl00_PickupButton" class="Hidden" /></div>
                 </div>
             </div>
             <div id="QuestionOrderTypeRight">
             </div>
         </div>
    
</div>

     <div id="ctl00_ctl00_QuestionAddressSuggestionPopup" class="QuestionPopup" style="display:none;">
	
         <div id="QuestioAddressSuggestionPlaceHolder">
              <div id="QuestionAddressSuggestionLeft"></div>
             <div id="QuestionAddressSuggestionMiddle">
                 <div>
                     <div id="DivAddressSuggestion">
                     </div>
                 </div>
                 <div >
                     <div id='CssButton1Div' class='Left' style='display:inline;' ><div class='Button' onclick='document.getElementById("ctl00_ctl00_CssButton1").click();'  onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "ButtonHover");' onfocus='ButtonClassHover(this, "ButtonHover");' onmouseout='ButtonClassOut(this, "Button");' onblur='ButtonClassOut(this, "Button");'  ><span>Yes</span></div><div class='ButtonHover' style='display:none; '></div><input type="submit" name="ctl00$ctl00$CssButton1" value="Yes" onclick="SetSuggestedAddress(); return false;" id="ctl00_ctl00_CssButton1" class="Hidden" /></div>
                     <div id='CssButton2Div' class='Right' style='display:inline;' ><div class='Button' onclick='document.getElementById("ctl00_ctl00_CssButton2").click();'  onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "ButtonHover");' onfocus='ButtonClassHover(this, "ButtonHover");' onmouseout='ButtonClassOut(this, "Button");' onblur='ButtonClassOut(this, "Button");'  ><span>No</span></div><div class='ButtonHover' style='display:none; '></div><input type="submit" name="ctl00$ctl00$CssButton2" value="No" onclick="HideAddressSuggestionQuestion();DisplayResults();return false;" id="ctl00_ctl00_CssButton2" class="Hidden" /></div>
                 </div>
             </div>
             <div id="QuestionAddressSuggestionRight">
             </div>
         </div>
    
</div>

    <div id="ctl00_ctl00_QuestionNoSiteInRangePopup" class="QuestionPopup NoSiteRangePopup" style="display:none;">
	
         <div id="QuestionNoSiteInRangePlaceHolder">
             <div id="QuestionNoSiteInRangeLeft">
                 
             </div>
             <div id="">
                    
                 <div id="DivNoSiteInRangeSuggestion" align="center"></div>
                
                 <br/>
                 
               
                <div id="div_choose_location" class="orderTypeSelection rounded">
                    <div id="choose_location_header" class="landing_advanced_ordertype_header" style="visibility:visible">
                        <span id="choose_location_header_line_one" class="choose_location_header_line_one">
                            Let me choose another
                        </span>
                       <div id="choose_location_header_line_two" class="choose_location_header_line_two">
                            Location
                       </div>
                    </div>
                    <div id="no_site_modal_button_start_location">
                       <div id='StoreLocatorW2GIButtonDiv' style='display:inline' ><div class='Center Button' onclick='document.getElementById("ctl00_ctl00_StoreLocatorW2GIButton").click();'  uniqueattribute='StoreLocatorW2GIButton' onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "Center ButtonHover");' onfocus='ButtonClassHover(this, "Center ButtonHover");' onmouseout='ButtonClassOut(this, "Center Button");' onblur='ButtonClassOut(this, "Center Button");'  ><span>Locator</span></div><div class='Center ButtonHover' style='display:none; '></div><input type="button" name="ctl00$ctl00$StoreLocatorW2GIButton" value="Locator" onclick="OnStoreLocatorClicked();return false;__doPostBack(&#39;ctl00$ctl00$StoreLocatorW2GIButton&#39;,&#39;&#39;)" id="ctl00_ctl00_StoreLocatorW2GIButton" class="Hidden" /></div>
                    </div>
                </div>


                <div id="centerModDiv">
                   
                </div>

                 <div id="div_choose_pickup" class="orderTypeSelection rounded">
                    <div id="choose_picker_header" class="landing_advanced_ordertype_header" style="visibility:visible">
                        <span id="choose_pickup_header_line_one" class="choose_pickup_header_line_one">
                            I'll just
                        </span>
                       <div id="choose_pickup_header_line_two" class="choose_pickup_header_line_two">
                            Pick it up
                       </div>
                    </div>
                    <div id="no_site_modal_button_start_pickup">
                       <div id='LocatorPickupButtonDiv' style='display:inline' ><div class='Center Button' onclick='document.getElementById("ctl00_ctl00_LocatorPickupButton").click();'  uniqueattribute='LocatorPickupButton' onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "Center ButtonHover");' onfocus='ButtonClassHover(this, "Center ButtonHover");' onmouseout='ButtonClassOut(this, "Center Button");' onblur='ButtonClassOut(this, "Center Button");'  ><span>Pickup</span></div><div class='Center ButtonHover' style='display:none; '></div><input type="button" name="ctl00$ctl00$LocatorPickupButton" value="Pickup" onclick="DisplayDateTimeForSite();return false;__doPostBack(&#39;ctl00$ctl00$LocatorPickupButton&#39;,&#39;&#39;)" id="ctl00_ctl00_LocatorPickupButton" class="Hidden" /></div>
                    </div>
                </div>
                
              </div>  
             </div>
             <div id="QuestionNoSiteInRangeRight">
                 
             </div>
   
</div>
    

                    
    <div class="body_div">
        <div class="header_div" title="Buffalo Wild Wings">
            <div class="order_progression_bar_div"> 
                
            </div>
            <div id="ctl00_ctl00_HeaderCompanyLinkDiv" class="header_company_link_div" onclick="return PopupURL(&#39;http://www.buffalowildwings.com/&#39;)" onkeypress="return PopupURL(&#39;http://www.buffalowildwings.com/&#39;)"></div>
        </div>
        <a href="#page_content" style="display:none">[Skip to Content]</a>
        <div id="NavBarDiv" class="nav_bar_div">
           <div id="menulinks" class="Left">
            <div id="ctl00_ctl00_lnkCorporate" class="nav_button">
                <a id="ctl00_ctl00_Corporate" class="link" href="http://www.buffalowildwings.com/" target="_blank">BWW HOME</a>
            </div>
            <div id="ctl00_ctl00_lnkOrderEntry" class="nav_button">
                <a id="ctl00_ctl00_Menu" class="link" href="Menus.aspx">MENU</a>
            </div>
            <div id="ctl00_ctl00_lnkSelectStore" class="nav_button">
                <a id="ctl00_ctl00_Locations" class="link" href="https://www.buffalowildwings.com/en/locations">LOCATIONS</a>
            </div>
            <div id="ctl00_ctl00_lnkContactUs" class="nav_button">
                <a id="ctl00_ctl00_ContactUs" class="link" href="http://listening.buffalowildwings.com/" target="_blank">CONTACT US</a>
            </div>
              
            
            
            
          </div>

          <div class="account_div">
                <div id="ctl00_ctl00_lnkLogin">
                    <a id="ctl00_ctl00_NavBarLogin" class="link LoginLink" href="Login.aspx">MY B-DUBS (LOG IN)</a>
                </div>
                
            </div>
            <br style="clear:both" />
        </div>        
        <a id="page_content" style="display:none">content</a>
        <div id="ctl00_ctl00_PageDiv" class="page_div">
	
            <div id="page_inner_div">
                
                
                <div id="ctl00_ctl00_ReceiptDiv" class="receipt_div">
                    <div id="ctl00_ctl00_Order" class="order" name="Order">
                        <div id="OrderHeaderDiv" class="order_header_div">
                        </div>
                        <div id="OrderDiv" class="order_div">
                        </div>
                    </div>
                    
                        <div id="OrderControlButtons" class="order_controls_tabs_div">
                        </div>
                        <div id="OrderControls" class="order_controls_div">
                            <div id="order_control_section_pickup">
                                <div class="order_section_div">
                                    <a id="ctl00_ctl00_ReceiptTimeSelectionLink" class="link PickupTime" title="Change" href="Time.aspx">Pick up Time:</a>  
                                </div>
                                <div id="PickupDiv" class="site_info_div" >
                                </div>
                            </div>
                                            
                            <div id="order_control_section_site">
                                <div class="order_section_div">
                                    <a id="ctl00_ctl00_ReceiptLocations" title="Change" class="link ReceiptLocations" href="https://www.buffalowildwings.com/en/locations">Wrong location? Choose a new one!</a>
                                </div>
                                <div id="SiteInfoDiv" class="site_info_div">
                                </div>
                                <br style="clear:both" />
                            </div>
                        </div>                    
                        <div id="OrderPortionAssistant" class="order_controls_div" style="display:none;">
                        </div>
                        <div id="GroupOrderNames" class="order_controls_div" style="display:none;">
                        </div>
                    
                    <div id="OrderBufferDiv" class="order_div" style="visibility: hidden; display:none;">
                    </div>
                </div>
                
                <div id="ctl00_ctl00_CenterDiv" class="center_div_no_menu" class="center_div">
		
                    
    
    <input type="hidden" name="ctl00$ctl00$Content$Content$SelectedOrderType" id="ctl00_ctl00_Content_Content_SelectedOrderType" />
    <h1>Select a Pickup Time</h1>
    <br />
    <div id="TimeSelectionContent"> 
        
<div id="TimeSelectionFields">
    <div id="DateSelection">
        <div id="CalendarDropDownLabel">
            <label for="DropDownContainer">
                Pickup Date:</label>
        </div>
        <div id="DropDownContainer" class="DropDownEdit">
            <input type="hidden" id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDateKV" name="ctl00_ctl00_Content_Content_TimeSelection_SelectedDateKV" value="" /><script id="dxis_658264995" src="/DXR.axd?r=1_42-Yfdhe" type="text/javascript"></script><script id="dxis_245696979" src="/DXR.axd?r=1_74-Yfdhe" type="text/javascript"></script><script id="dxis_1802153053" src="/DXR.axd?r=2_22-Yfdhe" type="text/javascript"></script><script id="dxis_1627491146" src="/DXR.axd?r=2_29-Yfdhe" type="text/javascript"></script><script id="dxis_498191138" src="/DXR.axd?r=2_21-Yfdhe" type="text/javascript"></script><script id="dxis_417920852" src="/DXR.axd?r=1_67-Yfdhe" type="text/javascript"></script><script id="dxis_321391059" src="/DXR.axd?r=1_64-Yfdhe" type="text/javascript"></script><script id="dxis_1579145359" src="/DXR.axd?r=1_46-Yfdhe" type="text/javascript"></script><script id="dxis_948316017" src="/DXR.axd?r=2_16-Yfdhe" type="text/javascript"></script><table class="dxeButtonEdit" cellspacing="1" cellpadding="0" type="text" name="time" class="Hand" id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate" style="width: 176px">
			<tr>
				<td class="dxic" onmousedown="return aspxDDDropDown(&#39;ctl00_ctl00_Content_Content_TimeSelection_SelectedDate&#39;, event)" style="width:100%;padding-left:1px;padding-right:1px;padding-top:1px;padding-bottom:1px;"><input class="dxeEditArea dxeEditAreaSys" name="ctl00$ctl00$Content$Content$TimeSelection$SelectedDate" id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_I" onchange="aspxETextChanged(&#39;ctl00_ctl00_Content_Content_TimeSelection_SelectedDate&#39;)" onblur="aspxELostFocus(&#39;ctl00_ctl00_Content_Content_TimeSelection_SelectedDate&#39;)" onfocus="aspxEGotFocus(&#39;ctl00_ctl00_Content_Content_TimeSelection_SelectedDate&#39;)" type="text" onkeydown="aspxEKeyDown(&#39;ctl00_ctl00_Content_Content_TimeSelection_SelectedDate&#39;, event)" readonly="readonly" style="height:15px;" /></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_B-1" class="dxeButtonEditButton" onmousedown="return aspxDDDropDown(&#39;ctl00_ctl00_Content_Content_TimeSelection_SelectedDate&#39;, event)" style="-khtml-user-select:none;"><table class="dxbebt" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border-collapse:separate;">
					<tr>
						<td class="dx"><img id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_B-1Img" class="dxEditors_edtDropDown" src="/DXR.axd?r=1_5-Yfdhe" alt="v" /></td>
					</tr>
				</table></td>
			</tr>
		</table><input type="hidden" id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDDWS" name="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDDWS" value="0:0:-1:-10000:-10000:0:-10000:-10000:1" /><div id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_PW-1" style="position:absolute;left:0px;top:0px;z-index:10000;visibility:hidden;display:none;">
			<table id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_PWST-1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border-collapse:separate;position:relative;">
				<tr>
					<td onmousedown="aspxPWMDown(event,&#39;ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD&#39;,-1,false)" style="width:200px;cursor:default;"><table id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_CLW-1" cellspacing="0" cellpadding="0" style="width:200px;border-collapse:collapse;border-collapse:separate;">
						<tr>
							<td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_PWC-1" class="dxeDropDownWindow" style="border-width:0px;height:100%;"><div id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_CSD-1" style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;">
								<div id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDDC">
									
                    <div id="TimeSelectionCalendar">
                        <div id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_Panel">
										
                                <table id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_ET" class="dxeErrorFrameWithoutError" cellspacing="0" cellpadding="0" style="border-style:None;border-collapse:collapse;visibility:hidden;">
											<tr>
												<td class="dxeControlsCell" style="visibility:visible;vertical-align:middle;"><table style="display:none;">
													<tr>
														<td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_D" class="dxeCalendarDay"></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_DS" class="dxeCalendarSelected"></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_DA" class="dxeCalendarOtherMonth"></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_DW"></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_DO" class="dxeCalendarOutOfRange"></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_DT" class="dxeCalendarToday"></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_DD" class="dxeDisabled"></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_FNM" class="dxeCalendarFastNavMonth"></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_FNMS" class="dxeCalendarFastNavMonthSelected"></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_FNY" class="dxeCalendarFastNavYear"></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_EC_FNYS" class="dxeCalendarFastNavYearSelected"></td>
													</tr>
												</table><table class="dxeCalendar" cellspacing="0" cellpadding="0" id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate" style="width:248px;border-collapse:collapse;">
													<tr>
														<td valign="top"><table cellpadding="0" style="width:100%;border-collapse:collapse;">
															<tr>
																<td class="dxeCalendarHeader" style="border-top:0;"><table cellpadding="0" style="width:100%;border-collapse:collapse;">
																	<tr>
																		<td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_PMC" class="dxe" onclick="aspxCalShiftMonth(&#39;ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate&#39;, -1);"><img id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_PMCImg" class="dxEditors_edtCalendarPrevMonth" src="/DXR.axd?r=1_5-Yfdhe" alt="&lt;" /></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_TC" class="dxe" style="width:100%;cursor:default;"><span id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_T">March, 2017</span></td><td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_NMC" class="dxe" onclick="aspxCalShiftMonth(&#39;ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate&#39;, 1);"><img id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_NMCImg" class="dxEditors_edtCalendarNextMonth" src="/DXR.axd?r=1_5-Yfdhe" alt=">" /></td>
																	</tr>
																</table></td>
															</tr><tr>
																<td id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_mc" class="dxMonthGrid" style="-khtml-user-select:none;"><table id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_mt" cellspacing="0" cellpadding="0" style="width:100%;border-collapse:collapse;border-collapse:separate;">
																	<tr align="center">
																		<td class="dxeCalendarDayHeader">Sun</td><td class="dxeCalendarDayHeader">Mon</td><td class="dxeCalendarDayHeader">Tue</td><td class="dxeCalendarDayHeader">Wed</td><td class="dxeCalendarDayHeader">Thu</td><td class="dxeCalendarDayHeader">Fri</td><td class="dxeCalendarDayHeader">Sat</td>
																	</tr><tr>
																		<td class="dxeCalendarDay dxeCalendarOtherMonth dxeCalendarOutOfRange">26</td><td class="dxeCalendarDay dxeCalendarOtherMonth dxeCalendarOutOfRange">27</td><td class="dxeCalendarDay dxeCalendarOtherMonth dxeCalendarOutOfRange">28</td><td class="dxeCalendarDay dxeCalendarOutOfRange">1</td><td class="dxeCalendarDay dxeCalendarToday">2</td><td class="dxeCalendarDay">3</td><td class="dxeCalendarDay">4</td>
																	</tr><tr>
																		<td class="dxeCalendarDay">5</td><td class="dxeCalendarDay">6</td><td class="dxeCalendarDay">7</td><td class="dxeCalendarDay">8</td><td class="dxeCalendarDay">9</td><td class="dxeCalendarDay">10</td><td class="dxeCalendarDay">11</td>
																	</tr><tr>
																		<td class="dxeCalendarDay">12</td><td class="dxeCalendarDay">13</td><td class="dxeCalendarDay">14</td><td class="dxeCalendarDay">15</td><td class="dxeCalendarDay">16</td><td class="dxeCalendarDay">17</td><td class="dxeCalendarDay">18</td>
																	</tr><tr>
																		<td class="dxeCalendarDay">19</td><td class="dxeCalendarDay">20</td><td class="dxeCalendarDay">21</td><td class="dxeCalendarDay">22</td><td class="dxeCalendarDay">23</td><td class="dxeCalendarDay">24</td><td class="dxeCalendarDay">25</td>
																	</tr><tr>
																		<td class="dxeCalendarDay">26</td><td class="dxeCalendarDay">27</td><td class="dxeCalendarDay">28</td><td class="dxeCalendarDay">29</td><td class="dxeCalendarDay">30</td><td class="dxeCalendarDay">31</td><td class="dxeCalendarDay dxeCalendarOtherMonth">1</td>
																	</tr><tr>
																		<td class="dxeCalendarDay dxeCalendarOtherMonth dxeCalendarOutOfRange">2</td><td class="dxeCalendarDay dxeCalendarOtherMonth dxeCalendarOutOfRange">3</td><td class="dxeCalendarDay dxeCalendarOtherMonth dxeCalendarOutOfRange">4</td><td class="dxeCalendarDay dxeCalendarOtherMonth dxeCalendarOutOfRange">5</td><td class="dxeCalendarDay dxeCalendarOtherMonth dxeCalendarOutOfRange">6</td><td class="dxeCalendarDay dxeCalendarOtherMonth dxeCalendarOutOfRange">7</td><td class="dxeCalendarDay dxeCalendarOtherMonth dxeCalendarOutOfRange">8</td>
																	</tr>
																</table></td>
															</tr>
														</table><div>
															<input id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_KBS" readonly="readonly" style="opacity:0;width:1px;height:1px;position:relative;background-color:transparent;margin:0;padding:0;border-width:0;font-size:0pt;" />
														</div></td>
													</tr>
												</table><input id="ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_STATE" name="ctl00$ctl00$Content$Content$TimeSelection$SelectedDate$DDD$DDTC$calDate" type="hidden" /></td>
											</tr>
										</table><script id="dxss_163942221" type="text/javascript">
<!--
aspxAddDisabledItems('ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate',[[['dxeDisabled'],[''],['']],[[''],[''],['PYC','PMC','NMC','NYC'],,[[{'spriteCssClass':'dxEditors_edtCalendarPrevYearDisabled'}],[{'spriteCssClass':'dxEditors_edtCalendarPrevMonthDisabled'}],[{'spriteCssClass':'dxEditors_edtCalendarNextMonthDisabled'}],[{'spriteCssClass':'dxEditors_edtCalendarNextYearDisabled'}]],['Img']]]);
document.getElementById("ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate_ET").setAttribute("errorFrame", "errorFrame");

var dxo = new ASPxClientCalendar('ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD_DDTC_calDate');
window['calDate'] = dxo;
dxo.autoPostBack = true;
dxo.uniqueID = 'ctl00$ctl00$Content$Content$TimeSelection$SelectedDate$DDD$DDTC$calDate';
dxo.SelectionChanged.AddHandler(function(s,e){setSelectedDate(s,e);});
dxo.cpOrderTimesSelectedDay='{ \'date\': 1488434400000, \'times\': [ 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }';
dxo.cpOrderTimes='{ \'date\': 1488434400000, \'times\': [ 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1488520800000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1488607200000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 0.666666666666667, 0.833333333333333, 1, 1.16666666666667, 1.33333333333333, 1.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1488693600000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 0.666666666666667, 0.833333333333333, 1, 1.16666666666667, 1.33333333333333, 1.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5 ] }, { \'date\': 1488780000000, \'times\': [ 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1488866400000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1488952800000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1489039200000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1489125600000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1489212000000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 0.666666666666667, 0.833333333333333, 1, 1.16666666666667, 1.33333333333333, 1.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1489298400000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 0.666666666666667, 0.833333333333333, 1, 1.16666666666667, 1.33333333333333, 1.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5 ] }, { \'date\': 1489381200000, \'times\': [ 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1489467600000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1489554000000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1489640400000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1489726800000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1489813200000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 0.666666666666667, 0.833333333333333, 1, 1.16666666666667, 1.33333333333333, 1.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1489899600000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 0.666666666666667, 0.833333333333333, 1, 1.16666666666667, 1.33333333333333, 1.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5 ] }, { \'date\': 1489986000000, \'times\': [ 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1490072400000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1490158800000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1490245200000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1490331600000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1490418000000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 0.666666666666667, 0.833333333333333, 1, 1.16666666666667, 1.33333333333333, 1.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1490504400000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 0.666666666666667, 0.833333333333333, 1, 1.16666666666667, 1.33333333333333, 1.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5 ] }, { \'date\': 1490590800000, \'times\': [ 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1490677200000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1490763600000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1490850000000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1490936400000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1491022800000, \'times\': [ 0, 0.166666666666667, 0.333333333333333, 0.5, 0.666666666666667, 0.833333333333333, 1, 1.16666666666667, 1.33333333333333, 1.5, 11, 11.1666666666667, 11.3333333333333, 11.5, 11.6666666666667, 11.8333333333333, 12, 12.1666666666667, 12.3333333333333, 12.5, 12.6666666666667, 12.8333333333333, 13, 13.1666666666667, 13.3333333333333, 13.5, 13.6666666666667, 13.8333333333333, 14, 14.1666666666667, 14.3333333333333, 14.5, 14.6666666666667, 14.8333333333333, 15, 15.1666666666667, 15.3333333333333, 15.5, 15.6666666666667, 15.8333333333333, 16, 16.1666666666667, 16.3333333333333, 16.5, 16.6666666666667, 16.8333333333333, 17, 17.1666666666667, 17.3333333333333, 17.5, 17.6666666666667, 17.8333333333333, 18, 18.1666666666667, 18.3333333333333, 18.5, 18.6666666666667, 18.8333333333333, 19, 19.1666666666667, 19.3333333333333, 19.5, 19.6666666666667, 19.8333333333333, 20, 20.1666666666667, 20.3333333333333, 20.5, 20.6666666666667, 20.8333333333333, 21, 21.1666666666667, 21.3333333333333, 21.5, 21.6666666666667, 21.8333333333333, 22, 22.1666666666667, 22.3333333333333, 22.5, 22.6666666666667, 22.8333333333333, 23, 23.1666666666667, 23.3333333333333, 23.5, 23.6666666666667, 23.8333333333333 ] }, { \'date\': 1491109200000, \'times\': [  ] }, { \'date\': 1491195600000, \'times\': [  ] }, { \'date\': 1491282000000, \'times\': [  ] }, { \'date\': 1491368400000, \'times\': [  ] }, { \'date\': 1491454800000, \'times\': [  ] }, { \'date\': 1491541200000, \'times\': [  ] }, { \'date\': 1491627600000, \'times\': [  ] }, { \'date\': 1491714000000, \'times\': [  ] }';
dxo.customValidationEnabled = true;
dxo.isValid = true;
dxo.errorText = 'Invalid value';
dxo.validationPatterns = [ new ASPxRequiredFieldValidationPattern('*') ];
dxo.causesValidation = true;
dxo.errorDisplayMode = "n";
dxo.RequireStyleDecoration();
dxo.styleDecoration.AddStyle('I','dxeInvalid','');
dxo.styleDecoration.AddStyle('F','dxeFocused','');
dxo.visibleDate = new Date(2017,2,1);
dxo.selection.AddArray([new Date(2017,2,2,0,0,0,0)]);
dxo.enableFast = false;
dxo.minDate = new Date(2017,2,2);
dxo.maxDate = new Date(2017,3,1,3,56,13,282);
dxo.customDraw = true;
dxo.showWeekNumbers = false;
dxo.InlineInitialize();

//-->
</script>
                            
									</div>
                    </div>
                
								</div>
							</div></td>
						</tr>
					</table></td><td style="background:url('/DXR.axd?r=1_25-Yfdhe') no-repeat left top;"></td>
				</tr><tr>
					<td style="background:url('/DXR.axd?r=1_24-Yfdhe') no-repeat left top;"></td><td style="background:url('/DXR.axd?r=1_26-Yfdhe') no-repeat left top;"><div style="height:5px;width:5px;">

					</div></td>
				</tr>
			</table>
		</div><script id="dxss_978951589" type="text/javascript">
<!--

var dxo = new ASPxClientPopupControl('ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD');
window['ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_DDD'] = dxo;
dxo.uniqueID = 'ctl00$ctl00$Content$Content$TimeSelection$SelectedDate$DDD';
dxo.Shown.AddHandler(function (s, e) { aspxDDBPCShown('ctl00_ctl00_Content_Content_TimeSelection_SelectedDate', e); });
dxo.closeAction='CloseButton';
dxo.popupHorizontalAlign='LeftSides';
dxo.popupVerticalAlign='Below';
dxo.isPopupPositionCorrectionOn=false;
dxo.width=0;
dxo.height=0;
dxo.InlineInitialize();

//-->
</script><script id="dxss_270941419" type="text/javascript">
<!--
aspxAddHoverItems('ctl00_ctl00_Content_Content_TimeSelection_SelectedDate',[[['dxeButtonEditButtonHover'],[''],['B-1'],,[['']],['Img']]]);
aspxAddPressedItems('ctl00_ctl00_Content_Content_TimeSelection_SelectedDate',[[['dxeButtonEditButtonPressed'],[''],['B-1'],,[['']],['Img']]]);
aspxAddDisabledItems('ctl00_ctl00_Content_Content_TimeSelection_SelectedDate',[[['dxeDisabled'],[''],['','I']],[['dxeDisabled dxeButtonDisabled'],[''],['B-1'],,[[{'spriteCssClass':'dxEditors_edtDropDownDisabled'}]],['Img']]]);
document.getElementById("ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_I").setAttribute("autocomplete", "off");

var dxo = new ASPxClientDropDownEdit('ctl00_ctl00_Content_Content_TimeSelection_SelectedDate');
window['SelectedDate'] = dxo;
dxo.autoPostBack = true;
dxo.uniqueID = 'ctl00$ctl00$Content$Content$TimeSelection$SelectedDate';
dxo.RequireStyleDecoration();
dxo.styleDecoration.AddStyle('F','dxeFocused','');
dxo.allowUserInput = false;
dxo.dropDownWindowWidth='248';
dxo.InlineInitialize();

//-->
</script>
        </div>
    </div>
    <div id="TimeSelection">
        <div id="TimeSelectionLabel">
            <label for="TimeList">
                Pick up Time:</label>
        </div>
        <div id="ctl00_ctl00_Content_Content_TimeSelection_ClosedDiv" class="ClosedDiv" style="display: none">
            Sorry, but there are no available pickup times on this date.
        </div>
        <div id="TimeDiv" style="display: none">
            <div id="TimeListContainer">
                <select id="TimeList" name='TimeList'>
                </select>
            </div>
            <input name="ctl00$ctl00$Content$Content$TimeSelection$time" type="hidden" id="ctl00_ctl00_Content_Content_TimeSelection_time" style="width: 100px" readonly="readonly" />
            <input name="ctl00$ctl00$Content$Content$TimeSelection$date" type="hidden" id="ctl00_ctl00_Content_Content_TimeSelection_date" />
            <input name="ctl00$ctl00$Content$Content$TimeSelection$initial_time_selection_index" type="hidden" id="ctl00_ctl00_Content_Content_TimeSelection_initial_time_selection_index" value="-1" />
        </div>
        <div id="ASAPDetails" class="Left Hidden_WordWrap">
            <div id = "breakLines" style="clear:both">
                <br>
                <br>
                <br>
            </div>
            <div id = "breakLinesForQuickOrder" style="clear:both;">
                <br>
                <br>
            </div>
            <div id="ctl00_ctl00_Content_Content_TimeSelection_ASAPQuestion"><label for="ASAPQuestion" id="lblQuestion">Would you accept delivery before %FirstAvailableTime% if we can get to you sooner?</label>
                <div class="Right" id="ASAPRadios">
                    <input type="radio" name="group1" value="yes" id="YesButton" class="noborder"/><label for="YesButton">Yes</label>
                    <input type="radio" name="group1" value="no" checked="checked" id="NoButton" class="noborder"/><label for="NoButton">No</label>
                </div>
            </div>
            <br/>
        <span id="TimeSelectorOneClickHelperText" class="OneClickHelperTextContainer" style="display: none">
            
        </span>
        </div>
    </div>
    <input type="hidden" id="hfTimeList" />
    <span id="isGroupOrder"></span>
    <input type="hidden" name="ctl00$ctl00$Content$Content$TimeSelection$hfSelectedDate" id="ctl00_ctl00_Content_Content_TimeSelection_hfSelectedDate" />
</div>
<script type="text/javascript">

var isPostBack = false;
var postBackOrderTimes = null;

    var posClientOffsetTS = new Date('3/2/2017 4:56:13 AM') - Date.now();

    function setCalenderDropdownImage() {
        var timeSelector = $('#ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_B-1Img');
        if (timeSelector) {
            $(timeSelector)
                .attr("src", contentUrl + "?ContentFile=button_calendar.png&companyCode=BWWI001");
        }
    }

function setSelectedDate(s, e) {
        if ($("input[id*=hfSelectedDate]").length > 0) {
            $("input[id*=hfSelectedDate]").val(new Date(s.GetSelectedDate()).format('MM/dd/yyyy HH:mm:ss'));
            SelectedDate.SetText(FormatDate(calDate.GetSelectedDate()));
            SelectedDate.HideDropDown();
        }
    }

    function timeSelectorPageLoad() {
        ResetTimes();
        calDate.OriginalGetView = calDate.GetView;
        calDate.GetView = OverrideGetView;
        if (isPostBack){
            SelectedDate.ShowDropDown();
            isPostBack = false;
        }
    }

    function OverrideGetView(row, column)
    {
        var view = this.OriginalGetView(row, column);

        if (view.OriginalGetDateByIndex == null)
        {
            view.OriginalGetDateByIndex = view.GetDateByIndex;
            view.GetDateByIndex = OverrideGetDateByIndex;
        }
        return view;
    }


    function OverrideGetDateByIndex(index)
    {
        var cell = this.GetDayCell(index);
        var className = GetClass(cell);
        if (className.indexOf("dxeCalendarOutOfRange") != -1)
        {
            var date = new Date();
            date.setFullYear(2000, 1, 1);
            return date;
        }
        return this.OriginalGetDateByIndex(index);
    }

    var oldSelectedTimes = null;
        
    function ResetTimes() {
        var ThirtyMinsInMilliseconds = 1800000;
        var day = -1; //parseInt($get("date").value);
        var count = 0;
        var sHTML = "";

        var timesToUse = null;

        var calSelectedDate = calDate.GetSelectedDate();
        if (calSelectedDate != null) {
            if (oldSelectedTimes != null) {
                var orderDate = new Date();
                orderDate.setTime(oldSelectedTimes.date);
                orderDate = TranslateServerTime(orderDate);

                if ((orderDate.getFullYear() === calSelectedDate.getFullYear()) &&
                    (orderDate.getMonth() === calSelectedDate.getMonth()) &&
                    (orderDate.getDate() === calSelectedDate.getDate())) {
                    timesToUse = oldSelectedTimes;
                }
            }

            if(postBackOrderTimes != null) {
                timesToUse = postBackOrderTimes;
            }

            if (timesToUse == null) {
                var selectedInfo = calDate.cpOrderTimesSelectedDay;
                var orderInfo = calDate.cpOrderTimes;
                var orderTimes;
               
                if ((selectedInfo != null) && (orderInfo != null) &&
                    (selectedInfo.length > 0) && (orderInfo.length > 0)) {
                    orderTimes = eval("{ [" + selectedInfo + ", " + orderInfo + "] }");
                }
                else if (orderInfo != null && orderInfo.length > 0) {
                    orderTimes = eval("{ [" + orderInfo + "] }");
                }
                else if (selectedInfo != null && selectedInfo.length > 0) {
                    orderTimes = eval("{ [" + selectedInfo + "] }");
                }

                var sPrefix = "";        
                var dtNow = new Date();
                dtNow.setTime(1488434400000);
                dtNow = TranslateServerTime(dtNow);
                        
                if ((calSelectedDate.getFullYear() === dtNow.getFullYear()) &&
                    (calSelectedDate.getMonth() === dtNow.getMonth()) &&
                    (calSelectedDate.getDate() === dtNow.getDate()))
                {
                    sPrefix = GetResourceObject('WebOrder.Time.TodayLabel') + " ";
                }

                SelectedDate.SetText(sPrefix + FormatDate(calSelectedDate));

                if (orderTimes != null) {
                    for (var i = 0; i < orderTimes.length; i++) {
                        var orderDate = new Date();
                        orderDate.setTime(orderTimes[i].date);
                        orderDate = TranslateServerTime(orderDate);

                        if ((orderDate.getFullYear() === calSelectedDate.getFullYear()) &&
                            (orderDate.getMonth() === calSelectedDate.getMonth()) &&
                            (orderDate.getDate() === calSelectedDate.getDate())) {
                            timesToUse = oldSelectedTimes = orderTimes[i];
                            break;
                        }
                    }
                }
            }
        }
           
        // Get start time
        if (timesToUse != null)
        {
            $get("ctl00_ctl00_Content_Content_TimeSelection_date").value = timesToUse.date;

            var limit = timesToUse.times.length;
            var useTimeRanges = (GetOrderMode() == OrderModeType_Delivery) && GetDeliveryTimesAsRange();
            if (useTimeRanges)
            {
                limit--;
            }

            var toDeduct = parseInt(("30"));
            toDeduct += parseInt(("60"));
            var hoursToDeduct = Math.floor(toDeduct / 60);
            var minsToDeduct = toDeduct % 60;
                
            sHTML += '<select id="TimeList" onchange="checkForASAP(this)" tabindex="'+$("#hfTimeList").val()+'" name="TimeList">';

            for (var i = 0; i < limit; i++)
            {
                var sRowHTML = "";
                var t = timesToUse.times[i];
                var className = "TimeCell";
                if (useTimeRanges)
                {
                    className += "Range";
                }

//checking to see if it is a grouporder, and removing invalid times if so
                var GroupOrderCheck = '';
                var isGroupOrder = $("#isGroupOrder").val();

                if (GroupOrderCheck == "GroupOrderByInvitation" || isGroupOrder == "YES")
                {
                    var reqRespTime = new Date(calSelectedDate);//calculated from the tempdate, to compare then to the tempdate to see if it is 30 minutes into the future or not.
                    var rawTime = FormatTime(t);
                    SetTime(rawTime.toString(), reqRespTime, hoursToDeduct, minsToDeduct);

                    //get current time on POS in ISO fortmat.
                    var posCurrentTime = new Date(Date.now() + posClientOffsetTS);
                  
                    if ((reqRespTime - posCurrentTime) < ThirtyMinsInMilliseconds)
                    {
                        continue;
                    }
                }
                   
                sRowHTML += '<option class="' + className + '" value="' + FormatTime(t) + '">';
                trunctime = (t >= 24) ? trunctime = t - 24 : t;
                sRowHTML += tformatter.formatDisplayTime(FormatTime(trunctime));
                if (useTimeRanges)
                {
                    t = t + GetDeliveryTimeGranularity()/60;
                    trunctime = (t >= 24) ? trunctime = t - 24 : t;
                    sRowHTML += " - " + FormatTime(trunctime);
                }
                sRowHTML += "</option>";
                sHTML += sRowHTML;
                count++;
            }
            sHTML += '</select>';   
            var timePopup = $get("TimeListContainer");
            timePopup.innerHTML = sHTML; 

            // Set default time selection should it exist
            if (timesToUse.times.length > 0)
            {
                var initialTimeIndex = null;
                var initialTimeIndexInput = $get("ctl00_ctl00_Content_Content_TimeSelection_initial_time_selection_index");

                if(initialTimeIndexInput != null)
                {
                    initialTimeIndex = initialTimeIndexInput.value;
                }

                if(initialTimeIndex != null && initialTimeIndex >= 0 && initialTimeIndex < timesToUse.times.length){
                    $get('TimeList').selectedIndex = initialTimeIndex;
                    initialTimeIndexInput.value = "-1";
                }
            }
        }

        // Check for no availability
        PubClosed = (count == 0);
        $get("TimeDiv").style.display = (PubClosed) ? "none" : "";
        $get("ctl00_ctl00_Content_Content_TimeSelection_ClosedDiv").style.display = (PubClosed) ? "" : "none";
    }
</script>

        <br style="clear:both"/> 
        <br /> 
        <input name="ctl00$ctl00$Content$Content$MaxAddressId" type="hidden" id="ctl00_ctl00_Content_Content_MaxAddressId" value="0" />

        <div id="OrderTypeSelectionBase" class="OrderTypeSelectionBase">
            <div id="OrderTypeSectionEmpty" class="OrderTypeSection"></div>
<div id="OrderTypeSectionEmpty" class="OrderTypeSection"></div>
<div id="TimeSelectionPromotionArea" class="PromotionArea"></div>

                </div>
        <div class="Clear"></div>
        <div style="float: right;">
        <div id='CssButton3Div' style='display:inline' ><div class='ButtonRight' onclick='document.getElementById("ctl00_ctl00_Content_Content_CssButton3").click();'  uniqueattribute='ContinueButton' onkeypress='HandleKeyPressEvent(event);' onmouseover='ButtonClassHover(this, "ButtonRightHover");' onfocus='ButtonClassHover(this, "ButtonRightHover");' onmouseout='ButtonClassOut(this, "ButtonRight");' onblur='ButtonClassOut(this, "ButtonRight");'  ><span>Continue</span></div><div class='ButtonRightHover' style='display:none; '></div><input type="submit" name="ctl00$ctl00$Content$Content$CssButton3" value="Continue" onclick="return CheckTime();" id="ctl00_ctl00_Content_Content_CssButton3" class="Hidden" /></div>
        </div>
    </div>
         

    <input name="ctl00$ctl00$Content$Content$InCheckout" type="hidden" id="ctl00_ctl00_Content_Content_InCheckout" />
    <input name="ctl00$ctl00$Content$Content$ReturnURL" type="hidden" id="ctl00_ctl00_Content_Content_ReturnURL" />
   
    <script type="text/javascript">
        var gothrough = false;
        var okayPressed = false;
        var ASAPEnabled = false;
        var ASAPModeIsOn = false;
        var posClientOffset = new Date('3/2/2017 4:56:13 AM') - Date.now();

        function SetElementsTabOrder() {
            $(".dxeEditArea").attr('tabindex', '11');
            $("#hfTimeList").val('12');
            $("input[id$=OrderType1Radio]").attr('tabindex', '13');
            $("input[id$=OrderType2Radio]").attr('tabindex', '14');
            $("input[id$=OrderType3Radio]").attr('tabindex', '15');
            $("#GroupOrderInviteeName").attr('tabindex', '16');
            $("div[uniqueattribute$=AddButton]").attr('tabindex', '17');
            $("#GroupOrderRecipientGridContainerInterior").attr('tabindex', '18');
            $("div[uniqueattribute$=ContinueButton]").attr('tabindex', '19');
            $("#hfCheckoutButtonTabIndex").val('20');
            $("#hfDeliveryTimeTabIndex").val('21');
            $("#hfReceiptStartingTabIndex").val('22');
        }
        function pageLoad() {
            // Check for valid site

            PubOrderReadOnly = true;
            PubTime = true;
            GetExistingOrderAndSiteInfo();
            timeSelectorPageLoad();
            
            ToggleGroupOrderInput();
            CheckDisabledColumns();

            $(document).ready(function (){
                //adding listeners for the asap radio buttons
                var ASAPYesRadioButton = $('#YesButton');
                var ASAPNoRadioButton = $('#NoButton');
                if (ASAPYesRadioButton != null) $(ASAPYesRadioButton).focusin(ASAPButtonListener);
                if (ASAPNoRadioButton != null)  $(ASAPNoRadioButton).focusin(ASAPButtonListener);

                //check for asap
                checkForASAP(document.getElementById('TimeList'));
                if (setCalenderDropdownImage) {
                    setCalenderDropdownImage();
                }
            });
        }

        function ASAPButtonListener() {
            var todayText = GetResourceObject('WebOrder.Time.TodayLabel');
            var dateString = $('#ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_I').val().replace(todayText, "");//filter today text for datestring
            var deliveryTimesAsRange = GetDeliveryTimesAsRange();

            if (($(this).val()) == 'yes') 
            {
                    var selectedTime = document.getElementById("TimeList")[0].value;
                    $('#PickupDiv').html(dateString + ", <br>" + tformatter.formatDisplayTime(selectedTime) + " " + GetResourceObject('WebOrder.Time.ASAPTimeSuffix'));
                    ASAPModeIsOn = true;

            }
            else if ($(this).val() == 'no')
                {
                var selectedTime = $("#TimeList option:selected").text();
                    if (deliveryTimesAsRange) {
                        $('#PickupDiv').html(dateString + ", <br>" + tformatter.formatDisplayTime(selectedTime));
                    } else {
                        $('#PickupDiv').html(dateString + ", " + tformatter.formatDisplayTime(selectedTime));
                    }
                    ASAPModeIsOn = false;
                }
        }

        function checkForASAP(timelist) {
            var todayText = GetResourceObject('WebOrder.Time.TodayLabel');
            var deliveryTimesAsRange = GetDeliveryTimesAsRange();
            var selectedIndex = timelist.selectedIndex;
            var txtInCalendarDropDown = $('#ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_I').val().split(todayText);
            var dateString = txtInCalendarDropDown[txtInCalendarDropDown.length -1 ];

            var bASAPNotForTodayOrNonDeliveryOrder = ((txtInCalendarDropDown.length < 2) || getCookie("OrderMode").toString() != "2");

            if (getSelectedOrderType() === "GroupOrderOrganizer") {
                bASAPNotForTodayOrNonDeliveryOrder = true;
            }

            if (ASAPEnabled == true 
                && (selectedIndex == 0 || selectedIndex == -1) 
                && !bASAPNotForTodayOrNonDeliveryOrder
                && timelist.length > 0) {
                $("#TimeSelectionFields").attr("id", "TimeSelectionFieldsASAP");
                if(selectedIndex != -1) ASAPModeIsOn = true;
                //grab the tag
                var questionMessage = $('#lblQuestion').html().toString();
                var startPosition = questionMessage.indexOf("%");
                var lastPosition = questionMessage.lastIndexOf("%") + 1;
                if(startPosition != -1 && lastPosition != 0)
                    var tag = questionMessage.substring(startPosition, lastPosition);

                //now to get the time from the list
                var selectedTime = '';
                if( timelist.length > 0)
                    selectedTime = timelist[0].value;

                $('#lblQuestion').html(questionMessage.replace(tag, selectedTime));
                if (getCookie("ASAPDeliveryEnabled") == "true")
                    document.getElementById("YesButton").checked = true;

                $("#ASAPDetails").css("visibility","visible");

                if($('input[name=group1]:checked').val().toString() == "yes")
                    $('#PickupDiv').html(dateString + ", <br>" + tformatter.formatDisplayTime(selectedTime) + " " + GetResourceObject('WebOrder.Time.ASAPTimeSuffix'));
                else {
                    selectedTime = $("#TimeList option:selected").text();
                    if (deliveryTimesAsRange) {
                        $('#PickupDiv').html(dateString + ", <br>" + tformatter.formatDisplayTime(selectedTime));
                    }
                    else
                        $('#PickupDiv').html(dateString + ", " + tformatter.formatDisplayTime(selectedTime));
                }
            } 
            else {
                ASAPModeIsOn = false;
                $("#ASAPDetails").css("visibility","hidden");
                if (getCookie("OrderMode") == "2") {
                    if (txtInCalendarDropDown.length < 2) {
                        $("#TimeSelectionFieldsASAP").attr("id", "TimeSelectionFields");
                    } 
                    var selectedTime = $("#TimeList option:selected").text();
                    if (deliveryTimesAsRange) {
                        $('#PickupDiv').html(dateString + ", <br>" + tformatter.formatDisplayTime(selectedTime));
                    } else {
                        $('#PickupDiv').html(dateString + ", " + tformatter.formatDisplayTime(selectedTime));
                    }
                } 
                else {
                    $("#TimeSelectionFieldsASAP").attr("id", "TimeSelectionFields");
                    var selectedTime = $("#TimeList option:selected").text();
                    $('#PickupDiv').html(dateString + ", " + tformatter.formatDisplayTime(selectedTime));
                }
            }
        }

        function GetControl(sName) {
            return document.getElementById(sName);
        }

        function getCalendarSelectedDateClientId() {
            return 'ctl00_ctl00_Content_Content_TimeSelection_SelectedDate_I';
        }

        function ToggleGroupOrderInput(s) {
            var selectedOrderType = getSelectedOrderType();
            $('#ctl00_ctl00_Content_Content_SelectedOrderType').val(selectedOrderType);
            
            var nameInput = $get("GroupOrderInviteeName");
            if (nameInput != null) {
                if (selectedOrderType === "GroupOrderByName") {
                    nameInput.disabled = false;
                    nameInput.focus();
                    SetClass(nameInput, "");
                } else {
                    nameInput.disabled = true;
                    nameInput.value = "";
                    SetClass(nameInput, "disabled");
                }
            }

            var feedsInput = $get("PortionAssistantFeeds");
            if (feedsInput != null) {
                if (selectedOrderType === "PortionAssistant") {
                    feedsInput.disabled = false;
                    feedsInput.focus();
                    SetClass(feedsInput, "");
                } else {
                    feedsInput.disabled = true;
                    feedsInput.value = "";
                    SetClass(feedsInput, "disabled");
                }
            }

            if (s != null) {
                setSelectedOrderType(s);
            }

            orderTypeChangedListener();
        }

        function setSelectedOrderType(s) {
            $(".OrderTypeSection").removeClass("Selected");
            $(s).parents(".OrderTypeSection").addClass("Selected");
        }

        function CheckDisabledColumns() {
            $(".OrderTypeSection div input[name=OrderType]:disabled").parents(".OrderTypeSection").addClass("OrderTypeSectionDisabled");
            $(".OrderTypeSection div input[name=OrderType]:checked").parents(".OrderTypeSection").addClass("Selected");
        }

        function CheckTime() {
            //check for radio buttons for ASAP and set cookie if needed
            var checkedASAPRadio = $('input[name=group1]:checked').val().toString();
            var isGroupOrder = $('#isGroupOrder').val();
            if(ASAPModeIsOn && checkedASAPRadio == "yes" && isGroupOrder != "YES")                 
                setSessionCookie("ASAPDeliveryEnabled", "true");
            if (!ASAPModeIsOn && getCookie("ASAPDeliveryEnabled") == 'true')
                deletecookie("ASAPDeliveryEnabled");

            if (PubClosed) {
                DisplayQuestion(GetResourceObject('WebOrder.Time.TimeNotSelectedError'),
                GetResourceObject('WebOrder.QuestionPopup.OKButton'), null, null, null);
                return false;
            }

            var ThirtyMinsInMilliseconds = 1800000;

            var inCheckout = $get("ctl00_ctl00_Content_Content_InCheckout").value;
            if (inCheckout == "true") {
                ShowLoading('', '', 40, null);
            }

            //checks if the order is grouporder type and does time validation 
            var orderType = getSelectedOrderType();
            $('#ctl00_ctl00_Content_Content_SelectedOrderType').val(orderType);

            if (orderType === "GroupOrderOrganizer") {// && gothrough == false) {
                //get current time on POS in ISO fortmat.
                var posCurrentTime = new Date(Date.now() + posClientOffset);

                var selectedDate = calDate.GetSelectedDate();
                var selectedTime = $("#TimeList").val();

                var toDeduct = parseInt(("30"));
                toDeduct += parseInt(("60"));

                var hoursToDeduct = Math.floor(toDeduct / 60);
                var minsToDeduct = toDeduct % 60;
                var reqRespTime = new Date(selectedDate);

                SetTime(selectedTime, reqRespTime, hoursToDeduct, minsToDeduct);

                if ((reqRespTime - posCurrentTime) < ThirtyMinsInMilliseconds) {
                    var selectedObj = document.getElementById("TimeList");

                    var tempdate = new Date(selectedDate);

                    for (var i = 0; i < selectedObj.options.length; i++) {
                        SetTime(selectedObj.options[i].text, tempdate, hoursToDeduct, minsToDeduct);

                        if ((tempdate - posCurrentTime) > ThirtyMinsInMilliseconds) {
                            selectedObj.options[i].selected = true;
                            break;
                        }
                    }
                    var localResourceMessage = "{0} has changed based on the next available time from the store.<br/>The new time is {1}, would you like to continue with the new time?";
                    var strMsg = localResourceMessage.replace("{0}", "Pickup Time");
                    var msg = strMsg.replace("{1}", $("#TimeList").val());
                    msg = msg.toString();
                    DisplayQuestion(msg,
                    GetResourceObject('WebOrder.QuestionPopup.OKButton'), GetResourceObject('WebOrder.QuestionPopup.CancelButton'), "whenOkayPressed()", "whenCancelPressed()");

                    gothrough = false;
                }
                else gothrough = true;
            }

            if (gothrough === true || orderType === "Individual" || orderType === "GroupOrderByName") {
                return true;
            } 
            else {
                return false;
            }
        }

        function whenOkayPressed() { //handler for when okay is pressed. 
            gothrough = true;
            document.getElementById("ctl00_ctl00_Content_Content_CssButton3").click();
        }

        function whenCancelPressed()//handler for when cancel is pressed. Calls ResetTimes to hide invalid times
        {
            gothrough = true;
            $("#isGroupOrder").val("YES");
            ResetTimes();
        }

        function orderTypeChangedListener() {
            $("#isGroupOrder").val("NO");

            var selectedOrderType = getSelectedOrderType();
            
            if (selectedOrderType === "GroupOrderOrganizer") {
                    $("#isGroupOrder").val("YES");
                    ASAPModeIsOn = false;
                    var deliveryTime = $('#PickupDiv').html();
                    deliveryTime = deliveryTime.replace("<br>", "");
                    deliveryTime = deliveryTime.replace(" or sooner", "");
                    $('#PickupDiv').html(deliveryTime);
                    $("#ASAPDetails").css('visibility', 'hidden');
                    $("#TimeSelectionFieldsASAP").attr("id", "TimeSelectionFields");
            } else {
                checkForASAP(document.getElementById('TimeList'));
            }

            ResetTimes();
            }

        function getSelectedOrderType() {
            var singleOrderType = "Individual";
            var selectedOrderTypeRadio = $(".OrderTypeSection div input[type=radio]:checked");
            return selectedOrderTypeRadio.length > 0 ? selectedOrderTypeRadio.val().toString() : singleOrderType;
        }

    </script>
    


                
	</div>
                <div class="Clear"></div>
            </div>
        
        
</div>
           
        <div id="FooterDiv" class="footer_div">
            <a id="ctl00_ctl00_PrivacyPolicy" class="PrivacyPolicy" href="http://www.buffalowildwings.com/privacy.php" target="_blank">Privacy Policy</a>
            &nbsp;|&nbsp;
            <a id="ctl00_ctl00_TermsOfUse" class="TermsOfUse" href="http://www.buffalowildwings.com/privacy.php" target="_blank">Terms of Use</a>
            

            <div class="Clear"></div>
            <div id="SocialMedia" class="social_media">
                
                
                
            </div>
            <div id="CalorieInformation">
                ​
            </div>
            <div id="CalorieDisclaimer">
                ​
            </div>
        </div>
     <input id="hfReceiptStartingTabIndex" type="hidden" />
    <input type="hidden" name="ctl00$ctl00$hfSiteMenu" id="ctl00_ctl00_hfSiteMenu" />
    <input type="hidden" name="ctl00$ctl00$hfModMappings" id="ctl00_ctl00_hfModMappings" value="{&quot;keys&quot;:[0,1,2,4,8,16,32,64],&quot;values&quot;:[&quot;Default&quot;,&quot;Add&quot;,&quot;No&quot;,&quot;Extra&quot;,&quot;On Side&quot;,&quot;Light&quot;,&quot;Everything&quot;,&quot;Plain&quot;]}" />
    </div>
    

<script type="text/javascript">
//<![CDATA[
if (typeof SetElementsTabOrder === 'function'){SetElementsTabOrder();}(function() {var fn = function() {$get("ctl00_ctl00_ScriptManager_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"Button2","OkControlID":"Button1","PopupControlID":"ctl00_ctl00_InfoPopup","dynamicServicePath":"/Time.aspx","id":"InfoBehavior","repositionMode":1}, null, null, $get("ctl00_ctl00_LinkButton1"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"QuestionModalBackground","CancelControlID":"ctl00_ctl00_QuestionCancelButton","OkControlID":"ctl00_ctl00_QuestionOKButton","PopupControlID":"ctl00_ctl00_QuestionPopup","dynamicServicePath":"/Time.aspx","id":"QuestionBehavior","repositionMode":1}, null, null, $get("ctl00_ctl00_LinkButton1"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"QuestionModalBackground","PopupControlID":"ctl00_ctl00_QuestionOrderTypePopup","dynamicServicePath":"/Time.aspx","id":"OrderTypeBehavior","repositionMode":1}, null, null, $get("ctl00_ctl00_LinkButton1"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"QuestionModalBackground","PopupControlID":"ctl00_ctl00_QuestionAddressSuggestionPopup","dynamicServicePath":"/Time.aspx","id":"AddressSuggestionBehavior","repositionMode":1}, null, null, $get("ctl00_ctl00_LinkButton1"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"QuestionModalBackground","PopupControlID":"ctl00_ctl00_QuestionNoSiteInRangePopup","X":656,"Y":284,"dynamicServicePath":"/Time.aspx","id":"NoSiteInRangeBehavior","repositionMode":1}, null, null, $get("ctl00_ctl00_LinkButton1"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"QuestionModalBackground","PopupControlID":"ctl00_ctl00_ModalCheckListPopup","dynamicServicePath":"/Time.aspx","id":"ShowLoyaltyRewardsBehavior","repositionMode":1}, null, null, $get("ctl00_ctl00_LinkButton1"));
});
//]]>
</script>
</form> 
      
<script type="text/javascript">

    (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments);
            },
            i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m);
    })
    (window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    //ga('create', 'UA-48435316-4', 'auto');
    ga('create', 'UA-11571954-12', 'auto');
    ga('create', 'UA-28816601-1', 'auto', { 'name': 'newTracker' });
    ga('send', 'pageview');
    ga('newTracker.send', 'pageview');

</script>
        
</body>

</html>
