/*
***********************************
Page: ndq-functions.js
Category: N/A
Search: 0
Track: 0
Version: 9.8.0 
Author: Jonathan Hagan
Date: 27 Jun 2014
***********************************
*/

(function($){})(window.$);

//$.noConflict();
$(document).ready(function(){

	/* Alternate colors on table rows */
	//$("#ndq-content table").find("tbody tr:even").css("background-color", "#fafafa");
	//$("#ndq-content table").find("tbody tr:odd").css("background-color", "#EFF1F1");

	/* Accordion MULTIPLE open at the same time */
	function multipleAcc() {	
		$('.ndq-expand-content').hide(); /* Hide all */
		//$('.ndq-expand-content:first').slideDown(400);  /* First open */
		$(".ndq-expand-link").hover(function(){
			$(this).toggleClass("ndq-on");
		});	
		$('.ndq-expand-link').click(function() {
			$(this).toggleClass("ndq-on");
			var h = $(this).next().outerHeight();
			$(this).next().css('height', h+'px').slideToggle(400, function(){
				$(this).css('padding', '0');
				$(this).css('margin', '10px');
			});
		});
	}
	
	/* Accordion open ONE at the time */
	function singleAcc() {	
		$(".ndq-expand-link:first").addClass("ndq-on");
		$(".ndq-events .ndq-expand-link:first, .ndq-corporate-governance-document .ndq-expand-link:first").removeClass("ndq-on"); 
		$(".ndq-expand-content").hide();
		$(".ndq-expand-content:first").css('display','block'); /* Trick for IE8 */
		$(".ndq-events .ndq-expand-content,.ndq-corporate-governance-document .ndq-expand-content").hide(); /* hide ALL */
		
		$(".ndq-expand-link").hover(function(){
			$(this).toggleClass("ndq-on");
		});	
		$(".ndq-expand-link").click(function(){
			$(this).next(".ndq-expand-content").slideToggle("400")
			.siblings(".ndq-expand-content:visible").slideUp("400");
			$(this).toggleClass("ndq-on");
			$(this).siblings().removeClass("ndq-on");
		});
	}
	
	/* Call the function for accordion that you would like */
	singleAcc();
	//multipleAcc();

	/* Show/hide all */ 
	$(function () { 
	function ndqCustomShowAll() { 
	$('#ndq-expand').find('.ndq-expand-content').show(); 
	$(".ndq-expand-link:first").removeClass("ndq-on"); // remove highlight class for the first element
	 $(this).html('Hide all <span class="ndq-hide-all"></span>'); 
	$(this).one("click", ndqCustomHideAll); 
	} 
	function ndqCustomHideAll() { 
	$('#ndq-expand').find('.ndq-expand-content').hide(); 
	$(this).html('Show all <span class="ndq-show-all"></span>'); 
	$(this).one("click", ndqCustomShowAll); 
	} 
	$("#ndq-exp-col a").one("click", ndqCustomShowAll); 
	}); 


	/* Dialog popup */
	$("#ndq-content").find(".ndq-open-dialog").click(function () {
		$(this).siblings(".ndq-dialog-overlay").show();
		$(this).siblings(".ndq-dialog").fadeIn(300);
		$(this).siblings(".ndq-dialog").find(".ndq-close-dialog").click(function () { 
			$("#ndq-content").find(".ndq-dialog-overlay").hide();
			$(this).parent().fadeOut(300);
		}); 
		$(this).siblings(".ndq-dialog-overlay").click(function () {
			$("#ndq-content").find(".ndq-dialog-overlay").hide();
			$("#ndq-content").find(".ndq-dialog").fadeOut(300);
		});
	});

	/* Dialog popup for toolbar */
	$("#ndq-tools").find(".ndq-dialog").hide();
	$("#ndq-tools").find(".ndq-open-dialog").click(function () { 
		$("#ndq-tools").find(".ndq-dialog-overlay").show();
		$("#ndq-tools").find(".ndq-dialog").fadeIn(300);
		$("#ndq-tools").find(".ndq-dialog").find(".ndq-close-dialog").click(function () { 
			$("#ndq-tools").find(".ndq-dialog-overlay").hide();
			$("#ndq-tools").find(".ndq-dialog").fadeOut(300);
		}); 
		$(this).siblings(".ndq-dialog-overlay").click(function () {
			$("#ndq-tools").find(".ndq-dialog-overlay").hide();
			$("#ndq-tools").find(".ndq-dialog").fadeOut(300);
		});
	})

	/* Event reminder popup */
	$("#ndq-eReminder .ndq-open-dialog").each( function () {
		$(this).click(function() {
			$(this).siblings(".ndq-dialog-overlay").show();
			$(this).siblings(".ndq-dialog").fadeIn(300);
			$(this).siblings(".ndq-dialog").find(".ndq-close-dialog").click(function () { 
				$(this).parent().parent().find(".ndq-dialog-overlay").hide();
				$(this).parent().fadeOut(300);
			}); 
			$(this).siblings(".ndq-dialog-overlay").click(function () {
				$(this).hide();
				$(this).next(".ndq-dialog").fadeOut(300);
			});
		});
	});	
	
	/* Tabs */
	$(document).ready(function(){
		$('#ndq-tabs div').hide();
		$('#ndq-tabs div:first').show();
		$('#ndq-tabs ul li:first').addClass('active');
	 
		$('#ndq-tabs ul li a').click(function(){
		$('#ndq-tabs ul li').removeClass('active');
		$(this).parent().addClass('active');
		var currentTab = $(this).attr('href');
		$('#ndq-tabs div').hide();
		$(currentTab).show();
		return false;
		});
	});
	
	/* MNGT and BofD */
    $(document).ready(function() {
        $('#ndq-expand-NO').find('.whiteBox').click(function() {
			$('#ndq-expand-NO').hide();
            var bID = $(this).find('a').attr('name');
            $('#bio' + bID).show();
            return false;
        });
    });

	
});

/* Email alerts */
var SH_thresholdChk=0;  //  Bit to state that Threshold Alerts Exist
var SH_formhigh="";  // High Threshold Form ID
var SH_formlow="";  // Low Threshold Form ID
var SH_price=0;  // Current Stock Price
var SH_thresholdChkID=""; // ID of Threshold ID
var SH_percentChkID=""; // Percent Change Checkbox ID
var SH_stockChangeAmount=""; // Percent Change Amount Input Box
var SH_percentChk=0;  // Bit to state that the prior two exist

var SH_alertsArray=new Array();
// SH_alertsArray.length

function sh_verifyPrice(high,low,prc,chkbox) { 
	if (document.getElementById(chkbox).checked==true) { 
		if( isNaN( parseFloat(document.getElementById(high).value)) || isNaN( parseFloat(document.getElementById(low).value))) { 
			alert("Prices must be entered as a number.")
			return false;
		}
		if((parseFloat(document.getElementById(high).value)<=prc)||((parseFloat(document.getElementById(low).value)>=prc)||(document.getElementById(low).value==""))) { 
			alert("The High price must be greater and Low price must be less than the current price of $" + SH_price + " per share.");
			return false;
		} else 
		 return true;
	}
	else
	 return true;
}
function sh_verifyPercent(dataField,chkbox) {
	if (document.getElementById(chkbox).checked==true) {
		dataValue=document.getElementById(dataField).value;
		if( isNaN( parseFloat(dataValue))) {
			alert("Percent Change must be entered as a number.")
			return false;
		} else {
			if (dataValue<=0) {
				alert("Percent Change must be greater than zero.");
				return false;
			}
			else
				return true;
		}
	}
	else
		return true;
}

function SH_verify_Alerts() {
	var anyChecked=0;
	for(var x=0;x<SH_alertsArray.length;x++) {        
		if(document.getElementById(SH_alertsArray[x]).checked)
		anyChecked=1;
	}
	if(!anyChecked) {
		alert("You must select a list to sign up for.");
		return false;
	}
	if(SH_thresholdChk>0) {
		if(!sh_verifyPrice(SH_formhigh,SH_formlow,SH_price,SH_thresholdChkID))
		return false;
	}
	if(SH_percentChk>0) {
		if(!sh_verifyPercent(SH_stockChangeAmount,SH_percentChkID))
		return false;
	}
	return true;
}

/* optional triggers */
/* 
$(window).load(function() {
});
$(window).resize(function() {
});
*/

$(document).ready(function () {
    $('span.relSummaryToggle').click(function () {
        var $thisID = this.id.substr(16);
        $('span#relSummaryToggle' + $thisID).toggleClass('exp');
        $('div#releaseSummary' + $thisID).slideToggle('fast');
    });
	
	/* call  Expand / Collapse Table  */
	//arTables();
});


/* Expand / Collapse Table */
function arTables() {	
	var numShown = 5; // Initial rows shown & index
	var $table = $('.ndq-annuals-proxies > table').find('tbody');  // tbody containing all the rows
	var numRows = $table.find('tr').length; // Total # rows

		// Hide rows and add clickable div
	
		if(numRows > numShown) {
			$table.find('tr:gt(' + (numShown - 1) + ')').hide().end()
			.after('<tbody id="archARs"><tr><td colspan="' +$table.find('tr:first td').length +'">Show Archive <span class="ndqicon-arw-dot-d"></span></td></tr></tbody>');
		}
		
		$('.ndq-annuals-proxies > table').find('#archARs').click(function() {
			if (numShown < numRows) {
				if ($(window).width() <= 1024) {$(this).siblings('tbody').find('tr:gt(' + (numShown-1) + ')').css('display','block'); }
				else {$(this).siblings('tbody').find('tr:gt(' + (numShown-1) + ')').show(); }
				numShown = numRows;
				$(this).find('td').html('Hide Archive <span class="ndqicon-arw-dot-u"></span>');
			}
			else {
				numShown = 5;
				$(this).siblings('tbody').find('tr:gt(' + (numShown - 1) + ')').hide();
				$(this).find('td').html('Show Archive <span class="ndqicon-arw-dot-d"></span>');
			}
		});
}