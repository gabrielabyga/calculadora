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

	<div class="dados" style="background-color: whitesmoke; padding: 100px; margin-right:; margin-left: px">
        <h1 style="font-family: 'DejaVu Sans Light'">Calculadora IP</h1>
	<form action="" method="POST" class="inputs">
		<p style="font-family: 'DejaVu Sans Light'">Digite um endereço IP:</p>
		<input class="form-control" type="text" id="primeOct" name="primeOct" placeholder="Primeiro Octeto" style=" border-style:none ;border-left: 6px solid blue;  background-color: white; border-radius: 5px; height: 45px" size="85">
		<br><br>
        <input class="form-control" type="text" id="segundOct" name="segundOct" placeholder="Segundo Octeto" style=" border-style:none ;border-left: 6px solid blue;  background-color: white; border-radius: 5px; height: 45px" size="85">
		<br> <br>
        <input type="text" id="tercOct" name="tercOct" placeholder="Terceiro Octeto" style=" border-style:none ;border-left: 6px solid blue;  background-color: white; border-radius: 5px; height: 45px" size="85">
		<br><br>
        <input type="text" id="quartOct" name="quartOct" placeholder="Quarto Octeto" style=" border-style:none ;border-left: 6px solid blue;  background-color: white; border-radius: 5px; height: 45px" size="85">
		<br><br>
        <input type="text" id="contBits" name="contBits" placeholder="Mascara em Bits" style=" border-style:none ;border-left: 6px solid red;  background-color: white; border-radius: 5px; height: 45px" size="85">
		<br><br>
        <button style="  background-color: green;  border: none;  color: white; padding: 10px 20px;  text-align: center; text-decoration: none;display: inline-block; font-size: 16px; border-radius: 5px"id="botao">Enviar</button>
	</form>
    </div>

	<div id="resultado" style="background-color: white; margin-left: 60px; margin-right: 100px; font-size: large "></div>
</body> 
</html>
