$(document).ready(function(){
	var regNo = $('#ajax');
	var data = {};
	data.regNo = regNo;
	var baseurl = 'http://localhost:8000';
	var url = '/delete';
	$.ajax(
    {
        type: "POST",
        url: baseurl + url,
        data: data,
        dataType: "json"
	}
});