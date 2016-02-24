$(document).ready(function () {
        $('.dropdown-toggle').dropdown();
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

$(document).ready(function() {
    $('#example').DataTable();
} );

$(document).ready(function() {
    $('#example').DataTable();
} );

$(document).ready(function() {
    $( "#btn_cars" ).click(function() {
    	$( "#carsedit" ).show();
    	var text = $(this).parent().parent().children().filter(':first-child');
    	var thisTr = text.parent();
    	console.log($('.table.accepted-orders'));
    	$('.table.accepted-orders').append('<tr><td>'+text.text()+'</td><td class="pull-right"><button type="button" class="btn btn-primary">Completed</button></td>');
  		
	});
} );




