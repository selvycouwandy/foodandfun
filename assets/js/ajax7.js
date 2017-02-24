


 
$("#nim").change( function(){
   $.ajax({
        url: "ajax/ceknim",
        data: { "nimanggotanya" : $(this).val() },
        method: "POST",
        success: function(result){
            if( result =='1' )  
                { 
			$("#warning_nim").html( "nim sudah ada" ); 
			$("#btn_submit_pendaftaran").prop("disabled","true");
		} 
            else 
                { 
			$("#warning_nim").html( "nim available" ); 
			$("#btn_submit_pendaftaran").removeAttr("disabled");	
		}    
        }
    }); 
});