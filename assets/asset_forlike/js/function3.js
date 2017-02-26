$(function() {
$(".like").click(function() {
var item_id = $(this).attr("id");
var dataString = 'item_id='+item_id;  
$('a#'+item_id).removeClass('like');
$('a#'+item_id).html('<img src="assets/asset_forlike/images/loader.gif" class="loading" />'); 
$.ajax({
	type: "POST",
	url: "assets/asset_forlike/ajax.php",
	data: dataString,
	cache: false,
	success: function(data){
    if (data == 0) {
	alert('you have liked this quote before');
	} else {
	$('a#'+item_id).addClass('liked');
    $('a#'+item_id).html(data);
	}
	}  
});
return false;
});
});

