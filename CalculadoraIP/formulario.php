<!DOCTYPE>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script>

		$(document). ready(function(){
			$('#botao').click(function(){
				$.post("calcIP.php",
					{
                        primeOct: $("#primeOct") .val(),
                        segundOct: $("#segundOct") .val(),
                        tercOct: $("#tercOct") .val(),
                        quartOct: $("#quartOct") .val(),
                        contBits: $("#contBits").val()
                    }

                    ,
                     function(dados){

                        $("#resultado").html(dados);
				});
				return false;
			});
		});

	</script>
</head>
<body>

	<div class="dados"></div>

	<form action="" method="POST" class="inputs">
		<p>Digite um endereço IP:</p>
		<input type="text" id="primeOct" name="primeOct" placeholder="Primeiro Octeto">
		<input type="text" id="segundOct" name="segundOct" placeholder="Segundo Octeto">
		<input type="text" id="tercOct" name="tercOct" placeholder="Terceiro Octeto">
		<input type="text" id="quartOct" name="quartOct" placeholder="Quarto Octeto">
		<input type="text" id="contBits" name="contBits" placeholder="Mascara em Bits">  
		<button id="botao">Enviar</button>
	</form>
	
	<div id="resultado"></div>
</body> 
</html>
