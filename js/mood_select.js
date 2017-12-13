$(document).ready(function() {
   	$('[data-toggle="tooltip"]').tooltip();   
	$(".clr-slct-btn").on("click" , function () {
		colorPref = $("#colorPrefBtn");
		if ( typeof colorPref.attr('disabled') !== 'undefined'){
			colorPref.removeAttr('disabled');
		}
	});
});

