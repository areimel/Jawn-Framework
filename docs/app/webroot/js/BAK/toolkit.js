/********************************************
********************************************

DEV TOOLKIT - JS FILE

Contents:
	- GA Event Viewer

********************************************
********************************************/



/********************************************

GA EVENTS VIEWER
	
	- creates a tooltip containing GA event details


	data-category="Header" 
	data-action="Click" 
	data-label="Logo"
	data-value="undefined" 
	data-event="GAEvent" 

? $(this).attr('data-category') : '',
? $(this).attr('data-action') : '',
? $(this).attr('data-label') : '',
? $(this).attr('data-value') : '';

********************************************/
$(document).ready(function(){


	//GA TOOLTIPS
		$('.toolkit_active a[data-event]').each(function(){
			var category = $(this).attr('data-category') ? $(this).attr('data-category') : '<span style="color:red; text-decoration:underline;">NOT SET</span>';
			var action = $(this).attr('data-action') ? $(this).attr('data-action') : '<span style="color:red; text-decoration:underline;">NOT SET</span>';
			var label = $(this).attr('data-label') ? $(this).attr('data-label') : '<span style="color:red; text-decoration:underline;">NOT SET</span>';
			var value = $(this).attr('data-value') ? $(this).attr('data-value') : '<span style="color:red; text-decoration:underline;">NOT SET</span>';
			var href = $(this).attr('href') ? $(this).attr('href') : 'NULL';

			$(this).parent().append("<p class='ga_viewer_tooltip'>GA EVENT <br> href = "+href+" <br> category = "+category+"<br> label = "+label+"<br> action = "+action+"<br>  value = "+value+"<br> <i class='fas fa-chevron-down'></i></p>");
		});

	//GA WARNINGS
		$('.toolkit_active a:not([data-event])').each(function(){
			$(this).parent().append("<p class='ga_viewer_tooltip'>NO GA EVENT SET<i class='fas fa-chevron-down'></i></p>");
		});

		$('.toolkit_active button:not([data-event])').each(function(){
			$(this).parent().append("<p class='ga_viewer_tooltip'>NO GA EVENT SET<i class='fas fa-chevron-down'></i></p>");
		});

		$('.toolkit_active input[type="submit"]:not([data-event])').each(function(){
			$(this).parent().append("<p class='ga_viewer_tooltip'>NO GA EVENT SET<i class='fas fa-chevron-down'></i></p>");
		});


});