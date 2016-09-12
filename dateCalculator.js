/*JS file: making ajax calls */
$(document).ready(function(){
    $("#noOfDays").click(function(){
		var request = $.ajax({
			url: "callComp.php",
			method: "GET",
			data: { startDate:$("#sDate").val(), endDate:$("#eDate").val(), performCal:"noOfDays" },
			dataType: "html"
		});
		request.done(function( msg ) {
		  $("#result").html(msg);
		});
    });
	
	$("#noOfWeekDays").click(function(){
		var request = $.ajax({
			url: "callComp.php",
			method: "GET",
			data: { startDate:$("#sDate").val(), endDate:$("#eDate").val(), performCal:"noOfWeekDays" },
			dataType: "html"
		});
		request.done(function( msg ) {
		  $("#result").html(msg);
		});
    });
	
	$("#noOfCompleteWeeks").click(function(){
		var request = $.ajax({
			url: "callComp.php",
			method: "GET",
			data: { startDate:$("#sDate").val(), endDate:$("#eDate").val(), performCal:"noOfCompleteWeeks" },
			dataType: "html"
		});
		request.done(function( msg ) {
		  $("#result").html(msg);
		});
    });
	
	$("#noOfDaysConvert").click(function(){
		var request = $.ajax({
			url: "callComp.php",
			method: "GET",
			data: { startDate:$("#sDate").val(), endDate:$("#eDate").val(), performCal:"noOfDays", convert:"yes" },
			dataType: "html"
		});
		request.done(function( msg ) {
		  $("#result").html(msg);
		});
    });
	
	$("#noOfWeekDaysConvert").click(function(){
		var request = $.ajax({
			url: "callComp.php",
			method: "GET",
			data: { startDate:$("#sDate").val(), endDate:$("#eDate").val(), performCal:"noOfWeekDays", convert:"yes" },
			dataType: "html"
		});
		request.done(function( msg ) {
		  $("#result").html(msg);
		});
    });
	
	$("#noOfCompleteWeeksConvert").click(function(){
		var request = $.ajax({
			url: "callComp.php",
			method: "GET",
			data: { startDate:$("#sDate").val(), endDate:$("#eDate").val(), performCal:"noOfCompleteWeeks", convert:"yes" },
			dataType: "html"
		});
		request.done(function( msg ) {
		  $("#result").html(msg);
		});
    });
	$("#compareDTZs").click(function(){
		var request = $.ajax({
			url: "callComp.php",
			method: "GET",
			data: { startDate:$("#sDate").val(), endDate:$("#eDate").val(), performCal:"compareTimeZones", compareDTZs:$('select[name=timeZone]').val() },
			dataType: "html"
		});
		request.done(function( msg ) {
		  $("#result").html(msg);
		});
    });
	
}); 