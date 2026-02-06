jQuery( function( $ ){	

	jQuery.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
		}
	});

	
 	/*Action : ajax
 	* used to: submit forms
 	* Instance of: Jquery vailidate libaray
	* @JSON 
 	**/
	$("#form").validate({
		errorPlacement: function (error, element) {
			 return;
		},
		highlight: function(element) {
        	$(element).addClass('is-invalid');
        	$(element).parent().addClass("error");
	    },
	    unhighlight: function(element) {
	    	$(element).parent().removeClass("error");
	        $(element).removeClass('is-invalid').addClass('is-valid');
	    },
		submitHandler: function(form){
			for (var i in CKEDITOR.instances) {
                CKEDITOR.instances[i].updateElement();// to update the textarea
            }

			var formData = new FormData($("#form")[0]);
			$.ajax({
			  	beforeSend:function(){
			  		$("#form").find('button').attr('disabled',true);
					$("#form").find('button>i').show(); 
			  	},
			  	url: $("#form").attr('action'),
			  	data: formData,
			  	type: 'POST',
			  	processData: false,
    			contentType: false,
			  	success:function(response){
				  	if(response.success){
				        toastr.success(response.message,'Success');
				        if (response.reload != undefined) {
				        	setTimeout(function(){
								location.href = location.reload();
							},1000);

				        	location.reload();
				        }else if (response.redirect_url != undefined) {
							setTimeout(function(){
								 location.href = response.redirect_url;
							},1000);
						}
				  	}else{
					  
				  	}
				  	$(".modal").modal('hide');
			  	},
			  	complete:function(){
			  		$("#form").find('button').attr('disabled',false);
					$("#form").find('button>i').hide(); 
			  	},
              	error:function(status,error){
					var errors = JSON.parse(status.responseText);
					var msg_error = '';
					if(status.status == 401 || status.status == 413){
	                    $("#form").find('button').attr('disabled',false);
	                    $("#form").find('button>i').hide();  
						$.each(errors.error, function(i,v){	
							msg_error += v[0]+'!</br>';
						});
						toastr.error( msg_error,'Opps!'); 
					}else{
						toastr.error(errors.message,'Opps!');
					} 				
              	}		  
			});	
			return false;
		}
	});

	
});
