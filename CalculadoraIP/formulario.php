<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script>



		$(document). ready(function(){
			$('#botao').click(function(){
				$.get("calcIP.php",
					{
                        IP1: $("#primeOct") .val(),
                        IP2: $("#segundOct") .val(),
                        IP3: $("#tercOct") .val(),
                        IP4: $("#quartOct") .val()
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
		<p>Digite o endereço ip:</p>
		<input type="text" id="primeOct" name="primeOct">
		<input type="text" id="segundOct" name="segundOct">
		<input type="text" id="tercOct" name="tercOct">
		<input type="text" id="quartOct" name="quartOct">
		<input type="text" id="contBits" name="contBits"> Mascara em Bits 
		<input type="submit" id="botao" name="enviar" value="Calcular">
	</form>
	
</body>
</html>
