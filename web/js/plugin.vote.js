function pushVote(obj) {
	
	var id =  obj.find("input").val();
	var val = obj.find("input[name=vote]:checked").val();
	values = {id: id, vote: val};
	var html = "";
	$.ajax({
		  url: "/voted.php",
		  type: 'POST',
		  data: values,
		  context: document.body
		}).done(function(msg) {
			html = msg;
			alert(html);
		});
		obj.html(html);
}