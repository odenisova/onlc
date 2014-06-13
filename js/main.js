$(function()
{		

	var message_window = $("#search_message");
	var result_table = $("#table");
	var result_data = result_table.find("tbody");

	$('input[name="search"]').keyup(function()
	{
		var string = $('input[name="search"]').val();
		if (string.length > 0)
		{	
			message_window.addClass("hide").html("");
			//get ajax request with search parameters.
			$.getJSON( "/inc/core.php", {search: string},function( data ) {	
				if (data.length >0 )
				{
					result_table.removeClass("hide");
					//clean table
		                        result_data.html("");
					//draw table with data from returned in json object
					for (var i in data)
						{
							item = data[i];
							result_data.append("<tr><td>"+item.id+"</td><td>"+item.name+"</td><td>"+item.cost+"</td><td>"+item.company+"</td><td>"+item.source+"</td></tr>");
						}
					//update sorting
					result_table.trigger("update"); 
				}
				else
				{
					result_table.addClass("hide");
				}
			});
		}
		else
		{
			//show notification
			message_window.removeClass("hide").html("Enter more data");
			$("#table").addClass("hide");
		}
	});

	$("#show_all").click(function()
	{
		//clean and show table
		result_data.html(""); 
		result_table.removeClass("hide");
		//get all records from db
		$.getJSON( "/inc/core.php",function( data ) {	
				for (var i in data)
						{
							item = data[i];
							result_data.append("<tr><td>"+item.id+"</td><td>"+item.name+"</td><td>"+item.cost+"</td><td>"+item.company+"</td><td>"+item.source+"</td></tr>");
						}
					//update sorting
					result_table.trigger("update"); 
			});

	});
});


$(document).ready(function(){
	 $("#table").tablesorter();
});
