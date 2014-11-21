$(document).ready(function(){
	$('.timepicker').timepicker();
});

$(".checkboxClass").click(function() {
    $(".checkboxClass").each(function() {
        $(this)[0].checked = false;});
    $(this)[0].checked = true;
});