/*
***********************************
Page: ndq-release-functions.js
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

	/* Responsive Tables for News Releases */
	$('#ndq-releasebody table, #ndq-secbody table').wrap('<div class="ndq-table-responsive"></div>');
	
	});