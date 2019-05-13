jQuery(document).ready(function() {
	
	$('#form-consultoria').submit(function(e) {
		e.preventDefault();

		var nome = $('#nomeconsultoria').val();
	    var email = $('#emailconsultoria').val();
	    var telefone = $('#telefoneconsultoria').val();

	    $.ajax({
	      url: ajaxurl,
	      type:"POST",
	      data: {
	        'action': 'send_consultoria',
	        'nome': nome,
	        'email': email,
	        'telefone': telefone
	      },
	      success:function(result) {
	        alert(result)
	      },
	      error: function (result) { alert(result); }
	    })
	});

	$('#form-simulador').on('submit', function(e) {
		e.preventDefault();
 
		var nome = $('#nomesimulador').val();
	    var email = $('#emailsimulador').val();
	    var telefone = $('#telefonesimulador').val();
	    var tipo = $('input[name="valor-de"]:checked').val();
	    var parcela = $('output').html();
	    var credito = $('output').html();
	    var modelo = $('select').val();


	    $.ajax({
	      url: ajaxurl,
	      type:"POST",
	      data: {
	        'action': 'send_simulador',
	        'nome': nome,
	        'email': email,
	        'telefone': telefone,
	        'tipo': tipo,
	        'parcela': parcela,
	        'credito': credito,
	        'modelo': modelo
	      },
	      success:function(result) {
	        alert(result)
	      },
	      error: function (result) { alert(result); }
	    })
	});
 
});