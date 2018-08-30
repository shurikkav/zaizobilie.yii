function pushVote(obj) {
	
	var id =  obj.find("input").val();
	var val = obj.find("input[name=vote]:checked").val();
	values = {id: id, vote: val};
	var html = "";
	$.ajax({
		  url: "/vote/savevoted",
		  type: 'POST',
		  data: values,
		  context: document.body
		}).done(function(msg) {
			html = msg;
			obj.html(html);
		});
	    obj.html(html);

}