function pushVoteCom(obj) {
	
	var id =  obj.find("input").val();
	var val = obj.find("input[name=votecom]:checked").val();
	values = {id: id, vote: val};
	var html = "";
	$.ajax({
		  url: "/competition/save",
		  type: 'POST',
		  data: values,
		  context: document.body
		}).done(function(msg) {
			html = msg;
			//alert(html);
			obj.html(html);
		});
	    obj.html(html);

}