// Focus Blur input
	jQuery(document).ready(function($){
		var originalValues = new Array();
		$("input, textarea").focus(function() {
		if (!originalValues[this.id]) {
		originalValues[this.id] = $(this).val()
		}
		if ( $(this).val()==originalValues[this.id]) {
		$(this).val('');
		}
		});
		$("input, textarea").blur(function() {
		if ( $(this).attr("value")=="") {
		$(this).val(originalValues[this.id]); 
		}
		});
	});