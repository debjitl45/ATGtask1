$(function(){
	$('#form-data').submit(function(e){
		var route = $('#form-data').data('route');
		var form_data = $(this);
		$.ajaxSetup({
         headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $('.alert').remove();
		$.ajax({
			type:'POST',
			url:route,
			data: form_data.serialize(),
			success: function(Response){
				console.log(Response);
				if(Response.person_name) 
				{
                   $('#messages').append('<p class="alert">'+Response.person_name+'</p><br>');  
				}
				if(Response.person_email) 
				{
                   $('#messages').append('<p class="alert">'+Response.person_email+'</p><br>');  
				}
				if(Response.person_pincode)
				{
				  $('#messages').append('<p class="alert">'+Response.person_pincode+'</p><br>');	
				}
				if(Response.success)
				{
				  $('#messages').append('<p class="alert">'+Response.success+'</p><br>');	
				}
			}
		});
       e.preventDefault();
	});
});
