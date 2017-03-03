
<?php include("header.php");?>



<script src="./js/common.js" charset="UTF-8" type="text/javascript"></script>
    <script src="./js/util.js" charset="UTF-8" type="text/javascript"></script>
    <script src="./js/geocoder.js" charset="UTF-8" type="text/javascript"></script>
    <style type="text/css">
        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }
        
        .fb_reposition {
            overflow: hidden;
            position: relative
        }
        
        .fb_invisible {
            display: none
        }
        
        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }
        
        .fb_reset>div {
            overflow: hidden
        }
        
        .fb_link img {
            border: none
        }
        
        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }
            to {
                opacity: 1;
                transform: scale(1)
            }
        }
        
        .fb_animate {
            animation: fb_transform .3s forwards
        }
        
        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }
        
        .fb_reset .fb_dialog_legacy {
            overflow: visible
        }
        
        .fb_dialog_advanced {
            padding: 10px;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px
        }
        
        .fb_dialog_content {
            background: #fff;
            color: #333
        }
        
        .fb_dialog_close_icon {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
            _background-image: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }
        
        .fb_dialog_mobile .fb_dialog_close_icon {
            top: 5px;
            left: 5px;
            right: auto
        }
        
        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }
        
        .fb_dialog_close_icon:hover {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;
            _background-image: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)
        }
        
        .fb_dialog_close_icon:active {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;
            _background-image: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)
        }
        
        .fb_dialog_loader {
            background-color: #f6f7f8;
            border: 1px solid #606060;
            font-size: 24px;
            padding: 20px
        }
        
        .fb_dialog_top_left,
        .fb_dialog_top_right,
        .fb_dialog_bottom_left,
        .fb_dialog_bottom_right {
            height: 10px;
            width: 10px;
            overflow: hidden;
            position: absolute
        }
        
        .fb_dialog_top_left {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;
            left: -10px;
            top: -10px
        }
        
        .fb_dialog_top_right {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;
            right: -10px;
            top: -10px
        }
        
        .fb_dialog_bottom_left {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;
            bottom: -10px;
            left: -10px
        }
        
        .fb_dialog_bottom_right {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;
            right: -10px;
            bottom: -10px
        }
        
        .fb_dialog_vert_left,
        .fb_dialog_vert_right,
        .fb_dialog_horiz_top,
        .fb_dialog_horiz_bottom {
            position: absolute;
            background: #525252;
            filter: alpha(opacity=70);
            opacity: .7
        }
        
        .fb_dialog_vert_left,
        .fb_dialog_vert_right {
            width: 10px;
            height: 100%
        }
        
        .fb_dialog_vert_left {
            margin-left: -10px
        }
        
        .fb_dialog_vert_right {
            right: 0;
            margin-right: -10px
        }
        
        .fb_dialog_horiz_top,
        .fb_dialog_horiz_bottom {
            width: 100%;
            height: 10px
        }
        
        .fb_dialog_horiz_top {
            margin-top: -10px
        }
        
        .fb_dialog_horiz_bottom {
            bottom: 0;
            margin-bottom: -10px
        }
        
        .fb_dialog_iframe {
            line-height: 0
        }
        
        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #3a5795;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }
        
        .fb_dialog_content .dialog_title>span {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
            float: left;
            padding: 5px 0 7px 26px
        }
        
        body.fb_hidden {
            -webkit-transform: none;
            height: 100%;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            left: 0;
            width: 100%
        }
        
        .fb_dialog.fb_dialog_mobile.loading {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }
        
        .fb_dialog.fb_dialog_mobile.loading.centered {
            width: auto;
            height: auto;
            min-height: initial;
            min-width: initial;
            background: none
        }
        
        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }
        
        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }
        
        .loading.centered #fb_dialog_loader_close {
            color: #fff;
            display: block;
            padding-top: 20px;
            clear: both;
            font-size: 18px
        }
        
        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .45);
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            width: 100%;
            min-height: 100%;
            z-index: 10000
        }
        
        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }
        
        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }
        
        .fb_dialog_content .dialog_header {
            -webkit-box-shadow: white 0 1px 1px -1px inset;
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));
            border-bottom: 1px solid;
            border-color: #1d4088;
            color: #fff;
            font: 14px Helvetica, sans-serif;
            font-weight: bold;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }
        
        .fb_dialog_content .dialog_header table {
            -webkit-font-smoothing: subpixel-antialiased;
            height: 43px;
            width: 100%
        }
        
        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }
        
        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }
        
        .fb_dialog_content .touchable_button {
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));
            border: 1px solid #2f477a;
            -webkit-background-clip: padding-box;
            -webkit-border-radius: 3px;
            -webkit-box-shadow: rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;
            display: inline-block;
            margin-top: 3px;
            max-width: 85px;
            line-height: 18px;
            padding: 4px 12px;
            position: relative
        }
        
        .fb_dialog_content .dialog_header .touchable_button input {
            border: none;
            background: none;
            color: #fff;
            font: 12px Helvetica, sans-serif;
            font-weight: bold;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }
        
        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }
        
        .fb_dialog_content .dialog_content {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
            border: 1px solid #555;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }
        
        .fb_dialog_content .dialog_footer {
            background: #f6f7f8;
            border: 1px solid #555;
            border-top-color: #ccc;
            height: 40px
        }
        
        #fb_dialog_loader_close {
            float: left
        }
        
        .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }
        
        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }
        
        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-image: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yD/r/t-wz8gw1xG1.png);
            background-repeat: no-repeat;
            background-position: 50% 50%;
            height: 24px;
            width: 24px
        }
        
        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }
            100% {
                transform: rotate(360deg)
            }
        }
        
        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }
        
        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }
        
        .fb_iframe_widget iframe {
            position: absolute
        }
        
        .fb_iframe_widget_fluid_desktop,
        .fb_iframe_widget_fluid_desktop span,
        .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }
        
        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }
        
        .fb_iframe_widget_lift {
            z-index: 1
        }
        
        .fb_hide_iframes iframe {
            position: relative;
            left: -10000px
        }
        
        .fb_iframe_widget_loader {
            position: relative;
            display: inline-block
        }
        
        .fb_iframe_widget_fluid {
            display: inline
        }
        
        .fb_iframe_widget_fluid span {
            width: 100%
        }
        
        .fb_iframe_widget_loader iframe {
            min-height: 32px;
            z-index: 2;
            zoom: 1
        }
        
        .fb_iframe_widget_loader .FB_Loader {
            background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;
            height: 32px;
            width: 32px;
            margin-left: -16px;
            position: absolute;
            left: 50%;
            z-index: 4
        }
    </style>
    <script src="./js/stats.js" charset="UTF-8" type="text/javascript"></script>





<div class="bgarea">
<div class="joinimg">
<img style="border-style:none; display: inline;" alt="" src="http://assets.fbmta.com/clt/bww/lp/join/10/Join_files/join.png">
</div>
<div class="jointable">
<!-- END HEADER -->		
		
	<div id="ctl00_PageContent_MessageContainer" class="Message">
	<span id="ctl00_PageContent_CustomMessage"><!-- Welcome Message for New Join --></span>
	</div>
	
	<script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$PageContent$MemberScriptManager', 'aspnetForm', [], [], [], 90, 'ctl00');
//]]>
</script>

	
	
<table border="0" class="Fields" cellpadding="2" cellspacing="0">
	<col class="FieldsCol1" />
	<col class="FieldsCol2" />
	<tr id="ctl00_PageContent_MemberProfileControl_FieldsRequiredRow">
	<td colspan="2" class="FieldsCell1">
			<span id="ctl00_PageContent_MemberProfileControl_FieldsRequiredNote" class="FieldsRequiredNote">NOTE:&nbsp;Fields marked with an asterisk (<span class="FieldsRequiredIndicator">*</span>) are required.</span>
		</td>
</tr>

	<input name="ctl00$PageContent$MemberProfileControl$TagsToAssign" type="hidden" id="ctl00_PageContent_MemberProfileControl_TagsToAssign" class="TagsToAssign" /><input name="ctl00$PageContent$MemberProfileControl$TagsToUnassign" type="hidden" id="ctl00_PageContent_MemberProfileControl_TagsToUnassign" class="TagsToUnassign" /><input name="ctl00$PageContent$MemberProfileControl$ExistingTags" type="hidden" id="ctl00_PageContent_MemberProfileControl_ExistingTags" class="ExistingTags" /><tr class="firstname FieldsRow StringField">
	<td class="FieldsCell1"><label for="ctl00_PageContent_MemberProfileControl_CustomField_FirstName_0"><span class="FieldsLabel">First Name</span></label><span class="FieldsRequiredIndicator">&nbsp;*</span></td>
	<td class="FieldsCell2"><input name="ctl00$PageContent$MemberProfileControl$CustomField_FirstName_0" type="text" maxlength="100" size="40" id="ctl00_PageContent_MemberProfileControl_CustomField_FirstName_0" title="First Name" class="FieldsInput" /><span id="ctl00_PageContent_MemberProfileControl_ctl07" class="errortext" style="display:none;">Required</span></td>
</tr>
<tr class="lastname FieldsRow StringField">
	<td class="FieldsCell1"><label for="ctl00_PageContent_MemberProfileControl_CustomField_LastName_0"><span class="FieldsLabel">Last Name</span></label><span class="FieldsRequiredIndicator">&nbsp;*</span></td>
	<td class="FieldsCell2"><input name="ctl00$PageContent$MemberProfileControl$CustomField_LastName_0" type="text" maxlength="100" size="40" id="ctl00_PageContent_MemberProfileControl_CustomField_LastName_0" title="Last Name" class="FieldsInput" /><span id="ctl00_PageContent_MemberProfileControl_ctl14" class="errortext" style="display:none;">Required</span></td>
</tr>
<tr class="emailaddress FieldsRow StringField">
	<td class="FieldsCell1"><label for="ctl00_PageContent_MemberProfileControl_CustomField_EmailAddress_0"><span class="FieldsLabel">E-mail Address</span></label><span class="FieldsRequiredIndicator">&nbsp;*</span></td>
	<td class="FieldsCell2"><input name="ctl00$PageContent$MemberProfileControl$CustomField_EmailAddress_0" type="text" maxlength="200" size="40" id="ctl00_PageContent_MemberProfileControl_CustomField_EmailAddress_0" title="E-mail Address" class="FieldsInput" /><span id="ctl00_PageContent_MemberProfileControl_ctl21" class="errortext" style="display:none;">Required</span><span id="ctl00_PageContent_MemberProfileControl_ctl22" class="errortext" style="display:none;">Invalid</span></td>
</tr>
<tr class="emailaddress FieldsRow StringField">
	<td class="FieldsCell1"><label for="ctl00_PageContent_MemberProfileControl_CustomField_EmailAddress_1"><span class="FieldsLabel">Confirm E-mail Address</span></label><span class="FieldsRequiredIndicator">&nbsp;*</span></td>
	<td class="FieldsCell2"><input name="ctl00$PageContent$MemberProfileControl$CustomField_EmailAddress_1" type="text" maxlength="200" size="40" id="ctl00_PageContent_MemberProfileControl_CustomField_EmailAddress_1" title="E-mail Address" class="FieldsInput" /><span id="ctl00_PageContent_MemberProfileControl_ctl29" class="errortextconfirm" style="display:none;">Entries do not match</span><span id="ctl00_PageContent_MemberProfileControl_ctl30" class="errortext" style="display:none;">Please confirm</span></td>
</tr>
<tr class="birthdate FieldsRow DateField DateFieldTextbox">
	<td class="FieldsCell1"><label for="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0"><span class="FieldsLabel">Birth Date</span></label><span class="FieldsRequiredIndicator">&nbsp;*</span></td>
	<td class="FieldsCell2"><div id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_wrapper" title="Birth Date" class="RadPicker RadPicker_Default FieldsDate" style="display:inline-block;width:160px;">
		<!-- 2014.1.403.45 --><input style="visibility:hidden;display:block;float:right;margin:0 0 -1px -1px;width:1px;height:1px;overflow:hidden;border:0;padding:0;" id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0" name="ctl00$PageContent$MemberProfileControl$CustomField_Birthdate_0" type="text" class="rdfd_ radPreventDecorate" value="" title="Visually hidden input created for functionality purposes." /><table cellspacing="0" class="rcTable rcSingle" summary="Table holding date picker control for selection of dates." style="width:100%;">
			<caption style="display:none;">
				RadDatePicker
			</caption><thead style="display:none;">
				<tr>
					<th scope="col">RadDatePicker</th>
				</tr>
			</thead><tbody>
				<tr>
					<td class="rcInputCell" style="width:100%;"><span id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_dateInput_wrapper" class="riSingle RadInput RadInput_Default" style="display:block;width:100%;"><input id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_dateInput" name="ctl00$PageContent$MemberProfileControl$CustomField_Birthdate_0$dateInput" maxlength="10" class="riTextBox riEmpty FieldsDateInput" value="m/d/yyyy" type="text" /><input id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_dateInput_ClientState" name="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_dateInput_ClientState" type="hidden" /></span></td><td><a title="Open the calendar popup." href="#" id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_popupButton" class="rcCalPopup"></a><div id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_wrapper" style="display:none;">
						<table id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar" summary="Calendar control which enables the selection of dates." cellspacing="0" class="RadCalendar RadCalendar_Default">
							<caption>
								<span style='display:none;'>Calendar</span>
							</caption><thead>
								<tr>
									<td class="rcTitlebar"><table cellspacing="0" summary="Title and navigation which can change and show the current year and month.">
										<caption>
											<span style='display:none;'>Title and navigation</span>
										</caption><thead>
											<tr style="display:none;">
												<th scope="col">Title and navigation</th>
											</tr>
										</thead><tbody>
	<tr>
		<td><a id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_FNP" class="rcFastPrev" title="&lt;&lt;" href="#">&lt;&lt;</a></td><td><a id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_NP" class="rcPrev" title="&lt;" href="#">&lt;</a></td><td id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Title" class="rcTitle">March 2017</td><td><a id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_NN" class="rcNext" title=">" href="#">&gt;</a></td><td><a id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_FNN" class="rcFastNext" title=">>" href="#">&lt;&lt;</a></td>
	</tr>
</tbody>
									</table></td>
								</tr>
							</thead><tbody>
	<tr>
		<td class="rcMain"><table id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top" class="rcMainTable" cellspacing="0" summary="Table containing all dates for the currently selected month.">
	<caption>
		<span style='display:none;'>March 2017</span>
	</caption><thead>
		<tr class="rcWeek">
			<th class="rcViewSel" scope="col">&nbsp;</th><th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_cs_1" title="Sunday" scope="col" abbr="Sun">S</th><th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_cs_2" title="Monday" scope="col" abbr="Mon">M</th><th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_cs_3" title="Tuesday" scope="col" abbr="Tue">T</th><th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_cs_4" title="Wednesday" scope="col" abbr="Wed">W</th><th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_cs_5" title="Thursday" scope="col" abbr="Thu">T</th><th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_cs_6" title="Friday" scope="col" abbr="Fri">F</th><th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_cs_7" title="Saturday" scope="col" abbr="Sat">S</th>
		</tr>
	</thead><tbody>
		<tr class="rcRow">
			<th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_rs_1" scope="row">9</th><td class="rcOtherMonth" title="Sunday, February 26, 2017"><a href="#">26</a></td><td class="rcOtherMonth" title="Monday, February 27, 2017"><a href="#">27</a></td><td class="rcOtherMonth" title="Tuesday, February 28, 2017"><a href="#">28</a></td><td title="Wednesday, March 01, 2017"><a href="#">1</a></td><td title="Thursday, March 02, 2017"><a href="#">2</a></td><td title="Friday, March 03, 2017"><a href="#">3</a></td><td class="rcWeekend" title="Saturday, March 04, 2017"><a href="#">4</a></td>
		</tr><tr class="rcRow">
			<th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_rs_2" scope="row">10</th><td class="rcWeekend" title="Sunday, March 05, 2017"><a href="#">5</a></td><td title="Monday, March 06, 2017"><a href="#">6</a></td><td title="Tuesday, March 07, 2017"><a href="#">7</a></td><td title="Wednesday, March 08, 2017"><a href="#">8</a></td><td title="Thursday, March 09, 2017"><a href="#">9</a></td><td title="Friday, March 10, 2017"><a href="#">10</a></td><td class="rcWeekend" title="Saturday, March 11, 2017"><a href="#">11</a></td>
		</tr><tr class="rcRow">
			<th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_rs_3" scope="row">11</th><td class="rcWeekend" title="Sunday, March 12, 2017"><a href="#">12</a></td><td title="Monday, March 13, 2017"><a href="#">13</a></td><td title="Tuesday, March 14, 2017"><a href="#">14</a></td><td title="Wednesday, March 15, 2017"><a href="#">15</a></td><td title="Thursday, March 16, 2017"><a href="#">16</a></td><td title="Friday, March 17, 2017"><a href="#">17</a></td><td class="rcWeekend" title="Saturday, March 18, 2017"><a href="#">18</a></td>
		</tr><tr class="rcRow">
			<th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_rs_4" scope="row">12</th><td class="rcWeekend" title="Sunday, March 19, 2017"><a href="#">19</a></td><td title="Monday, March 20, 2017"><a href="#">20</a></td><td title="Tuesday, March 21, 2017"><a href="#">21</a></td><td title="Wednesday, March 22, 2017"><a href="#">22</a></td><td title="Thursday, March 23, 2017"><a href="#">23</a></td><td title="Friday, March 24, 2017"><a href="#">24</a></td><td class="rcWeekend" title="Saturday, March 25, 2017"><a href="#">25</a></td>
		</tr><tr class="rcRow">
			<th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_rs_5" scope="row">13</th><td class="rcWeekend" title="Sunday, March 26, 2017"><a href="#">26</a></td><td title="Monday, March 27, 2017"><a href="#">27</a></td><td title="Tuesday, March 28, 2017"><a href="#">28</a></td><td title="Wednesday, March 29, 2017"><a href="#">29</a></td><td title="Thursday, March 30, 2017"><a href="#">30</a></td><td title="Friday, March 31, 2017"><a href="#">31</a></td><td class="rcOtherMonth" title="Saturday, April 01, 2017"><a href="#">1</a></td>
		</tr><tr class="rcRow">
			<th id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top_rs_6" scope="row">14</th><td class="rcOtherMonth" title="Sunday, April 02, 2017"><a href="#">2</a></td><td class="rcOtherMonth" title="Monday, April 03, 2017"><a href="#">3</a></td><td class="rcOtherMonth" title="Tuesday, April 04, 2017"><a href="#">4</a></td><td class="rcOtherMonth" title="Wednesday, April 05, 2017"><a href="#">5</a></td><td class="rcOtherMonth" title="Thursday, April 06, 2017"><a href="#">6</a></td><td class="rcOtherMonth" title="Friday, April 07, 2017"><a href="#">7</a></td><td class="rcOtherMonth" title="Saturday, April 08, 2017"><a href="#">8</a></td>
		</tr>
	</tbody>
</table></td>
	</tr>
</tbody>
						</table><input type="hidden" name="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_SD" id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_SD" value="[]" /><input type="hidden" name="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_AD" id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_AD" value="[[1753,1,1],[2999,12,31],[2017,3,1]]" />
					</div></td>
				</tr>
			</tbody>
		</table><input id="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_ClientState" name="ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_ClientState" type="hidden" />
	</div><span id="ctl00_PageContent_MemberProfileControl_ctl37" class="errortext" style="display:none;">Required</span><span id="ctl00_PageContent_MemberProfileControl_ctl38" class="errortext" style="display:none;">Invalid</span></td>
</tr>
<tr class="storelabel FieldsRow LabelField">
	<td colspan="2" class="FieldsCell1" style="padding-top:10px;padding-bottom:10px;"><span class="FieldsLabel">We want you to get special news about your favorite Buffalo Wild Wings. Please find your favorite location.</span></td>
</tr>
<tr class="ppv FieldsRow BooleanField BooleanFieldCheckbox">
	<td class="FieldsCell1"><label for="ctl00_PageContent_MemberProfileControl_CustomField_PPV_0"><span class="FieldsLabel">Pay per view events</span></label></td>
	<td class="FieldsCell2"><span class="FieldsCheckBox" title="Pay per view events"><input id="ctl00_PageContent_MemberProfileControl_CustomField_PPV_0" type="checkbox" name="ctl00$PageContent$MemberProfileControl$CustomField_PPV_0" /></span></td>
</tr>
<tr class="zip FieldsRow ZipCodeField">
	<td class="FieldsCell1"><label for="ctl00_PageContent_MemberProfileControl_CustomField_Zip_0"><span class="FieldsLabel">Zip Code</span></label><span class="FieldsRequiredIndicator">&nbsp;*</span></td>
	<td class="FieldsCell2"><span id="ctl00_PageContent_MemberProfileControl_CustomField_Zip_0_wrapper" title="Zip Code" class="riSingle RadInput RadInput_Default" style="width:90px;"><input id="ctl00_PageContent_MemberProfileControl_CustomField_Zip_0" name="ctl00$PageContent$MemberProfileControl$CustomField_Zip_0" size="20" class="riTextBox riEmpty FieldsInput" title="Zip Code" value="ZIP / ZIP+4" type="text" /><input id="ctl00_PageContent_MemberProfileControl_CustomField_Zip_0_ClientState" name="ctl00_PageContent_MemberProfileControl_CustomField_Zip_0_ClientState" type="hidden" /></span><span id="ctl00_PageContent_MemberProfileControl_ctl53" class="errortext" style="display:none;">Required</span><span id="ctl00_PageContent_MemberProfileControl_ctl54" class="errortext" style="display:none;">Invalid</span></td>
</tr>
<tr class="storecode FieldsRow StoreField">
	<td class="FieldsCell1"><label for="ctl00_PageContent_MemberProfileControl_CustomField_StoreCode_0"><span class="FieldsLabel">Favorite Location</span></label><span class="FieldsRequiredIndicator">&nbsp;*</span></td>
	<td class="FieldsCell2"><table class="StoreTable" cellpadding="1" cellspacing="0">
		<tr class="StoreLabelRow">
			<td colspan="2" class="StoreLabelCell"><span id="ctl00_PageContent_MemberProfileControl_CustomField_StoreCode_0_Instructions"><!-- --></span><span id="ctl00_PageContent_MemberProfileControl_CustomField_StoreCode_0_Found" style="display:none;"><!-- --></span><span id="ctl00_PageContent_MemberProfileControl_CustomField_StoreCode_0_Searching" style="display:none;">Please wait<span class="dots"></span></span></td>
		</tr>
		<tr class="StoreRow">
			<td class="StoreCell"><select name="ctl00$PageContent$MemberProfileControl$CustomField_StoreCode_0" id="ctl00_PageContent_MemberProfileControl_CustomField_StoreCode_0" title="Favorite Location" class="StoresDropDown">
				<option value="">-----</option>

			</select></td>
			<td class="AllStoresCell"></td>
		</tr>
		<tr class="StoreRow">
			<td class="StoreCell"><span id="ctl00_PageContent_MemberProfileControl_ctl69" class="errortextup" style="display:none;">Required</span></td>
		</tr>
	</table>
	</td>
</tr>

	<tr>
		<td>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<table class="Subscriptions" border="0">
				<col class="SubscriptionsCol1" />
				<col class="SubscriptionsCol2" />
				<col class="SubscriptionsCol3" />
				<col class="SubscriptionsCol4" />
				<col class="SubscriptionsCol5" />
				<col class="SubscriptionsCol6" />
				<col class="SubscriptionsCol7" />
				<col class="SubscriptionsCol8" />
				<col class="SubscriptionsCol9" />
				<col class="SubscriptionsCol10" />
				<col class="SubscriptionsCol11" />
				<col class="SubscriptionsCol12" />
				
			</table>
		</td>
	</tr>
</table>

	<div id="ctl00_PageContent_SaveControls">
	
		<p class="SaveParagraph">
			
			<input type="image" name="ctl00$PageContent$SubmitImage" id="ctl00_PageContent_SubmitImage" title="Submit" class="SaveButton" UseSubmitBehavior="true" src="http://assets.fbmta.com/clt/bww/lp/join/10/Join_files/submit.png" alt="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$PageContent$SubmitImage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" />
		</p>
	
</div>

		<!-- Begin Footer  -->
</div>


    <div class="hr black"></div>
	<div class="social-bar row">
            <div class="inner">
                <div class="social-icons">
                    <h4 class="img-text nav-title">connect</h4>
                    <ul class="social-list">
                        <li>
                            <div class="social-item facebook">
                                <span class="icon">
<a href="https://www.facebook.com/BuffaloWildWings" target="_blank" title="Visit Our Facebook Page">Buffalo Wild Wings on Facebook</a>
</span>
                                <div fb-iframe-plugin-query="app_id=&amp;container_width=142&amp;href=https%3A%2F%2Fwww.facebook.com%2FBuffaloWildWings&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=100" fb-xfbml-state="rendered" id="connectFacebook" class="fb-like fb_iframe_widget" data-send="false" data-href="https://www.facebook.com/BuffaloWildWings" data-layout="button_count" data-width="100" data-show-faces="false" data-ga="{&quot;category&quot;:&quot;/en/faq/&quot;,&quot;action&quot;:&quot;Content&quot;,&quot;opt_label&quot;:&quot;Facebook_Like&quot;}" data-ga-noclick=""><span style="vertical-align: bottom; width: 85px; height: 20px;"><iframe class="" src="http://www.facebook.com/plugins/like.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df38e29d95b32484%26domain%3Dwww.buffalowildwings.com%26origin%3Dhttp%253A%252F%252Fwww.buffalowildwings.com%252Ff1c99b2ac7df84a%26relation%3Dparent.parent&amp;container_width=142&amp;href=https%3A%2F%2Fwww.facebook.com%2FBuffaloWildWings&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=100" style="border: medium none; visibility: visible; width: 85px; height: 20px;" title="fb:like Facebook Social Plugin" scrolling="no" allowfullscreen="true" allowtransparency="true" name="f18b90c83f456" frameborder="0" height="1000px" width="100px"></iframe></span></div>
                            </div>
                        </li>
                        <li>
                            <a href="http://twitter.com/bwwings" class="social-item btn btn-inverse twitter" data-ga="{&quot;category&quot;:&quot;/en/faq/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Connect_Twitter&quot;}">
                                <span class="icon"></span> @BWWings On Twitter
                                <span class="fwd-icon svg-icon-chevron-right-yellow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.youtube.com/buffalowildwings" class="social-item btn btn-inverse youtube" data-ga="{&quot;category&quot;:&quot;/en/faq/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Connect_YouTube&quot;}">
                                <span class="icon"></span> B-Dubs® on YouTube
                                <span class="fwd-icon svg-icon-chevron-right-yellow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="http://instagram.com/bwwings" class="social-item btn btn-inverse instagram" data-ga="{&quot;category&quot;:&quot;/en/faq/&quot;,&quot;action&quot;:&quot;Global_Footer&quot;,&quot;opt_label&quot;:&quot;Connect_Instagram&quot;}">
                                <span class="icon"></span> B-Dubs® on Instagram
                                <span class="fwd-icon svg-icon-chevron-right-yellow"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		
		
<?php include("footer.php");?>





<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WTBPP2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WTBPP2');
    </script>
    <!-- End Google Tag Manager -->
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_PageContent_MemberProfileControl_ctl07"), document.getElementById("ctl00_PageContent_MemberProfileControl_ctl14"), document.getElementById("ctl00_PageContent_MemberProfileControl_ctl21"), document.getElementById("ctl00_PageContent_MemberProfileControl_ctl22"), document.getElementById("ctl00_PageContent_MemberProfileControl_ctl29"), document.getElementById("ctl00_PageContent_MemberProfileControl_ctl30"), document.getElementById("ctl00_PageContent_MemberProfileControl_ctl37"), document.getElementById("ctl00_PageContent_MemberProfileControl_ctl38"), document.getElementById("ctl00_PageContent_MemberProfileControl_ctl53"), document.getElementById("ctl00_PageContent_MemberProfileControl_ctl54"), document.getElementById("ctl00_PageContent_MemberProfileControl_ctl69"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_PageContent_MemberProfileControl_ctl07 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl07"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl07");
ctl00_PageContent_MemberProfileControl_ctl07.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_FirstName_0";
ctl00_PageContent_MemberProfileControl_ctl07.focusOnError = "t";
ctl00_PageContent_MemberProfileControl_ctl07.errormessage = "Required";
ctl00_PageContent_MemberProfileControl_ctl07.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl07.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl07.initialvalue = "";
var ctl00_PageContent_MemberProfileControl_ctl14 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl14"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl14");
ctl00_PageContent_MemberProfileControl_ctl14.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_LastName_0";
ctl00_PageContent_MemberProfileControl_ctl14.focusOnError = "t";
ctl00_PageContent_MemberProfileControl_ctl14.errormessage = "Required";
ctl00_PageContent_MemberProfileControl_ctl14.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl14.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl14.initialvalue = "";
var ctl00_PageContent_MemberProfileControl_ctl21 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl21"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl21");
ctl00_PageContent_MemberProfileControl_ctl21.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_EmailAddress_0";
ctl00_PageContent_MemberProfileControl_ctl21.focusOnError = "t";
ctl00_PageContent_MemberProfileControl_ctl21.errormessage = "Required";
ctl00_PageContent_MemberProfileControl_ctl21.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl21.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl21.initialvalue = "";
var ctl00_PageContent_MemberProfileControl_ctl22 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl22"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl22");
ctl00_PageContent_MemberProfileControl_ctl22.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_EmailAddress_0";
ctl00_PageContent_MemberProfileControl_ctl22.errormessage = "Invalid";
ctl00_PageContent_MemberProfileControl_ctl22.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl22.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl22.validationexpression = "^\\s*[a-zA-Z\\d][a-zA-Z\\d\\.!#$%&\'*+\\-/=?^_`{|}~]*@([a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.)+[a-zA-Z]{2,24}\\s*$";
var ctl00_PageContent_MemberProfileControl_ctl29 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl29"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl29");
ctl00_PageContent_MemberProfileControl_ctl29.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_EmailAddress_1";
ctl00_PageContent_MemberProfileControl_ctl29.focusOnError = "t";
ctl00_PageContent_MemberProfileControl_ctl29.errormessage = "Entries do not match";
ctl00_PageContent_MemberProfileControl_ctl29.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl29.evaluationfunction = "CompareValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl29.controltocompare = "ctl00_PageContent_MemberProfileControl_CustomField_EmailAddress_0";
ctl00_PageContent_MemberProfileControl_ctl29.controlhookup = "ctl00_PageContent_MemberProfileControl_CustomField_EmailAddress_0";
var ctl00_PageContent_MemberProfileControl_ctl30 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl30"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl30");
ctl00_PageContent_MemberProfileControl_ctl30.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_EmailAddress_1";
ctl00_PageContent_MemberProfileControl_ctl30.focusOnError = "t";
ctl00_PageContent_MemberProfileControl_ctl30.errormessage = "Please confirm";
ctl00_PageContent_MemberProfileControl_ctl30.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl30.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl30.initialvalue = "";
var ctl00_PageContent_MemberProfileControl_ctl37 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl37"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl37");
ctl00_PageContent_MemberProfileControl_ctl37.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0";
ctl00_PageContent_MemberProfileControl_ctl37.focusOnError = "t";
ctl00_PageContent_MemberProfileControl_ctl37.errormessage = "Required";
ctl00_PageContent_MemberProfileControl_ctl37.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl37.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl37.initialvalue = "";
var ctl00_PageContent_MemberProfileControl_ctl38 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl38"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl38");
ctl00_PageContent_MemberProfileControl_ctl38.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0";
ctl00_PageContent_MemberProfileControl_ctl38.errormessage = "Invalid";
ctl00_PageContent_MemberProfileControl_ctl38.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl38.type = "Date";
ctl00_PageContent_MemberProfileControl_ctl38.dateorder = "mdy";
ctl00_PageContent_MemberProfileControl_ctl38.cutoffyear = "2029";
ctl00_PageContent_MemberProfileControl_ctl38.century = "2000";
ctl00_PageContent_MemberProfileControl_ctl38.evaluationfunction = "RangeValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl38.maximumvalue = "2999/12/31";
ctl00_PageContent_MemberProfileControl_ctl38.minimumvalue = "1753/01/01";
var ctl00_PageContent_MemberProfileControl_ctl53 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl53"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl53");
ctl00_PageContent_MemberProfileControl_ctl53.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_Zip_0";
ctl00_PageContent_MemberProfileControl_ctl53.focusOnError = "t";
ctl00_PageContent_MemberProfileControl_ctl53.errormessage = "Required";
ctl00_PageContent_MemberProfileControl_ctl53.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl53.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl53.initialvalue = "";
var ctl00_PageContent_MemberProfileControl_ctl54 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl54"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl54");
ctl00_PageContent_MemberProfileControl_ctl54.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_Zip_0";
ctl00_PageContent_MemberProfileControl_ctl54.errormessage = "Invalid";
ctl00_PageContent_MemberProfileControl_ctl54.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl54.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl54.validationexpression = "^\\s*\\d{5}(-\\d{4})?\\s*$";
var ctl00_PageContent_MemberProfileControl_ctl69 = document.all ? document.all["ctl00_PageContent_MemberProfileControl_ctl69"] : document.getElementById("ctl00_PageContent_MemberProfileControl_ctl69");
ctl00_PageContent_MemberProfileControl_ctl69.controltovalidate = "ctl00_PageContent_MemberProfileControl_CustomField_StoreCode_0";
ctl00_PageContent_MemberProfileControl_ctl69.focusOnError = "t";
ctl00_PageContent_MemberProfileControl_ctl69.errormessage = "Required";
ctl00_PageContent_MemberProfileControl_ctl69.display = "Dynamic";
ctl00_PageContent_MemberProfileControl_ctl69.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_PageContent_MemberProfileControl_ctl69.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[
var siteID = 34359738400;
var postalCodes = false;
var maxResults = 20;
var distanceUnit = 0;
var storeID = 'ctl00_PageContent_MemberProfileControl_CustomField_StoreCode_0';
var allStoresID = '';
var zipID = 'ctl00_PageContent_MemberProfileControl_CustomField_Zip_0';
$telerik.$('#ctl00_PageContent_MemberProfileControl_CustomField_Zip_0').change(getStoresByZip);
if (!window.XMLHttpRequest) {
	window.location.href += (window.location.href.indexOf('?') == -1 ? '?' : '&') + '_NoAJAX=1';
}
var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        
document.getElementById('ctl00_PageContent_MemberProfileControl_ctl07').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl07'));
}

document.getElementById('ctl00_PageContent_MemberProfileControl_ctl14').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl14'));
}

document.getElementById('ctl00_PageContent_MemberProfileControl_ctl21').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl21'));
}

document.getElementById('ctl00_PageContent_MemberProfileControl_ctl22').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl22'));
}

document.getElementById('ctl00_PageContent_MemberProfileControl_ctl29').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl29'));
}

document.getElementById('ctl00_PageContent_MemberProfileControl_ctl30').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl30'));
}
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadDateInput, {"_displayText":"m/d/yyyy","_focused":false,"_initialValueAsText":"","_postBackEventReferenceScript":"__doPostBack(\u0027ctl00$PageContent$MemberProfileControl$CustomField_Birthdate_0\u0027,\u0027\u0027)","_skin":"Default","_validationText":"","clientStateFieldID":"ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_dateInput_ClientState","dateFormat":"M/d/yyyy","dateFormatInfo":{"DayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"MonthNames":["January","February","March","April","May","June","July","August","September","October","November","December",""],"AbbreviatedDayNames":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"AbbreviatedMonthNames":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",""],"AMDesignator":"AM","PMDesignator":"PM","DateSeparator":"/","TimeSeparator":":","FirstDayOfWeek":0,"DateSlots":{"Day":1,"Year":2,"Month":0},"ShortYearCenturyEnd":2029,"TimeInputOnly":false,"MonthYearOnly":false},"displayDateFormat":"M/d/yyyy","emptyMessage":"m/d/yyyy","enabled":true,"incrementSettings":{InterceptArrowKeys:true,InterceptMouseWheel:true,Step:1},"maxDate":"2999-12-31-00-00-00","minDate":"1753-01-01-00-00-00","styles":{HoveredStyle: ["width:100%;", "riTextBox riHover FieldsDateInput"],InvalidStyle: ["width:100%;", "riTextBox riError FieldsDateInput"],DisabledStyle: ["width:100%;", "riTextBox riDisabled FieldsDateInput"],FocusedStyle: ["width:100%;", "riTextBox riFocused FieldsDateInput"],EmptyMessageStyle: ["width:100%;", "riTextBox riEmpty FieldsDateInput"],ReadOnlyStyle: ["width:100%;", "riTextBox riRead FieldsDateInput"],EnabledStyle: ["width:100%;", "riTextBox riEnabled FieldsDateInput"]}}, null, null, $get("ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_dateInput"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadCalendar, {"_DayRenderChangedDays":{},"_FormatInfoArray":[["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],["January","February","March","April","May","June","July","August","September","October","November","December",""],["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",""],"dddd, MMMM dd, yyyy h:mm:ss tt","dddd, MMMM dd, yyyy","h:mm:ss tt","MMMM dd","ddd, dd MMM yyyy HH\u0027:\u0027mm\u0027:\u0027ss \u0027GMT\u0027","M/d/yyyy","h:mm tt","yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss","yyyy\u0027-\u0027MM\u0027-\u0027dd HH\u0027:\u0027mm\u0027:\u0027ss\u0027Z\u0027","MMMM, yyyy","AM","PM","/",":",0],"_ViewRepeatableDays":{},"_ViewsHash":{"ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_Top" : [[2017,3,1], 1]},"_calendarWeekRule":0,"_culture":"en-US","_enableKeyboardNavigation":false,"_enableViewSelector":false,"_firstDayOfWeek":7,"_postBackCall":"__doPostBack(\u0027ctl00$PageContent$MemberProfileControl$CustomField_Birthdate_0$calendar\u0027,\u0027@@\u0027)","_rangeSelectionMode":0,"clientStateFieldID":"ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar_ClientState","enableMultiSelect":false,"enabled":true,"monthYearNavigationSettings":["Today","OK","Cancel","Date is out of range.","False","True","300","1","300","1","False"],"skin":"Default","specialDaysArray":[],"stylesHash":{"DayStyle": ["", ""],"CalendarTableStyle": ["", "rcMainTable"],"OtherMonthDayStyle": ["", "rcOtherMonth"],"TitleStyle": ["", ""],"SelectedDayStyle": ["", "rcSelected"],"SelectorStyle": ["", ""],"DisabledDayStyle": ["", "rcDisabled"],"OutOfRangeDayStyle": ["", "rcOutOfRange"],"WeekendDayStyle": ["", "rcWeekend"],"DayOverStyle": ["", "rcHover"],"FastNavigationStyle": ["", "RadCalendarMonthView RadCalendarMonthView_Default"],"ViewSelectorStyle": ["", "rcViewSel"]},"useColumnHeadersAsSelectors":false,"useRowHeadersAsSelectors":false}, null, null, $get("ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadDatePicker, {"_PopupButtonSettings":{ ResolvedImageUrl : "", ResolvedHoverImageUrl : ""},"_animationSettings":{ShowAnimationDuration:300,ShowAnimationType:1,HideAnimationDuration:300,HideAnimationType:1},"_popupControlID":"ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_popupButton","clientStateFieldID":"ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_ClientState","focusedDate":"2017-03-01-00-00-00","maxDate":"2999-12-31-00-00-00","minDate":"1753-01-01-00-00-00"}, null, {"calendar":"ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_calendar","dateInput":"ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0_dateInput"}, $get("ctl00_PageContent_MemberProfileControl_CustomField_Birthdate_0"));
});

document.getElementById('ctl00_PageContent_MemberProfileControl_ctl37').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl37'));
}

document.getElementById('ctl00_PageContent_MemberProfileControl_ctl38').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl38'));
}
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadTextBox, {"_displayText":"ZIP / ZIP+4","_focused":false,"_initialValueAsText":"","_postBackEventReferenceScript":"setTimeout(\"__doPostBack(\\\u0027ctl00$PageContent$MemberProfileControl$CustomField_Zip_0\\\u0027,\\\u0027\\\u0027)\", 0)","_skin":"Default","_validationText":"","clientStateFieldID":"ctl00_PageContent_MemberProfileControl_CustomField_Zip_0_ClientState","emptyMessage":"ZIP / ZIP+4","enabled":true,"styles":{HoveredStyle: ["width:90px;", "riTextBox riHover FieldsInput"],InvalidStyle: ["width:90px;", "riTextBox riError FieldsInput"],DisabledStyle: ["width:90px;", "riTextBox riDisabled FieldsInput"],FocusedStyle: ["width:90px;", "riTextBox riFocused FieldsInput"],EmptyMessageStyle: ["width:90px;", "riTextBox riEmpty FieldsInput"],ReadOnlyStyle: ["width:90px;", "riTextBox riRead FieldsInput"],EnabledStyle: ["width:90px;", "riTextBox riEnabled FieldsInput"]}}, null, null, $get("ctl00_PageContent_MemberProfileControl_CustomField_Zip_0"));
});

document.getElementById('ctl00_PageContent_MemberProfileControl_ctl53').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl53'));
}

document.getElementById('ctl00_PageContent_MemberProfileControl_ctl54').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl54'));
}

document.getElementById('ctl00_PageContent_MemberProfileControl_ctl69').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_PageContent_MemberProfileControl_ctl69'));
}
//]]>
</script>