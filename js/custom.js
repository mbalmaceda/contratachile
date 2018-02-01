$(document).on('ready', function() {

	/*$('#contact-form').on('submit', function() {
		var	div = $();
		$.ajax({
	        type: "POST",
	        url: $(this).attr('action'),
	        data: $(this).serialize(),
	        dataType:'json',
	        success: function(obj)
	        {
	            $(div).css('display','block');
	            $(div).html(obj.msg);
	            $(div).addClass('alert-danger');
	            if (obj.estado == '1') {
	                $(div).removeClass('alert-danger');
	                $(div).addClass('alert-success');
	                eval(fnc);
	            }

	            $('#xModal').modal('hide');
	        }
    	});		
	});*/
});

function enviaForm(frm,div,fnc) {
    $(div).css('display','none');
    $.ajax({
        type: "POST",
        url: $(frm).attr('action'),
        data: $(frm).serialize(),
        dataType:'json',
        success: function(obj)
        {
            $(div).css('display','block');
            $(div).html(obj.msg);
            $(div).addClass('alert-danger');
            if (obj.estado == '1') {
                $(div).removeClass('alert-danger');
                $(div).addClass('alert-success');
                $('#btnEnviarCalle').hide();

                eval(fnc);
            }
            scrollToAnchor('aerr');

            $('#xModal').modal('hide');
        }
    });
}


function modalEspera() {
    $('.modal-dialog').removeClass('modal-lg');
    $('.modal-dialog').addClass('modal-sm');
    $('#xModalTitle').html('Procesando, espere por favor...');
    $('.modal-body' ).html('');
    $('.modal-body').addClass('ajaxloadingp');
    $('.modal-footer').hide();
    $('.modal-header .close').hide();
    $('#xModal').modal({
        backdrop: 'static',
        keyboard: false,
        show: true
    });

    $('#xModal').modal('hide');
}