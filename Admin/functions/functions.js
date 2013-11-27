//Filename: functions.js

function loadPage(divId, page){
	$(document).ready(function(){
		$("#"+divId).load(page+'.php');
	});
}
