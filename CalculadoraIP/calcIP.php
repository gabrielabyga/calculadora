<?php

    function subRedeQuant($contBits){
         $contBits = 32 - $contBits;
         $enderecos = pow(2,$contBits);
         return  $enderecos;  
    }

   	
   	function subRede($enderecos){
   	
   		$subredes = 256/$enderecos;
   		return $subredes;

   	}


    function hostsPorSubRedes($enderecos){
         $enderecos = $enderecos - 2;
         return  $enderecos;     
    }

    function primeHost($enderecos,$primeOct,$segundOct,$tercOct,$quartOct){
        $n = floor($quartOct/$enderecos);
        $primeHost = ($n * $enderecos) + 1; 


        return $primeOct . "." . $segundOct . "." . $tercOct . "." . $primeHost;
    }

        function ultimHots( $enderecos,$primeOct,$segundOct,$tercOct,$quartOct){
        $n = floor($quartOct/$enderecos);
        $primeHost = ($n * $enderecos) + 1; 
        $ultimHots = $primeHost + $enderecos - 3; 

        return $primeOct . "." . $segundOct . "." . $tercOct . "." . $ultimHots;
        }


        function mascaraDeRede($enderecos){ 
          $primeiro = 255;
          $segundo = 255;
          $terceiro = 255;
          $quarto = 256 - $enderecos;
          $mascaraDeRede = $primeiro  . ".". $segundo . ".". $terceiro . ".". $quarto;

        return $mascaraDeRede;
          
        }

      function classes($primeOct){ 

          if ($primeOct > 0 AND $primeOct < 128) {
            return "Classe A";
          }
          elseif ($primeOct > 127 AND $primeOct < 192) {
            return "Classe B";
          }
          elseif ($primeOct > 191 AND $primeOct  < 224) {
            return "Classe C";
          }
          elseif ($primeOct > 223 AND $primeOct  < 240) {
            return "Classe D";
          }
          elseif ($primeOct > 239 AND $primeOct  < 248) {
            return "Classe E";
          }
          else{
            return "Digite seu ip ";

        }
          }

          function PublOuPriv($primeOct,$segundOct,$tercOct){ 
              if ($primeOct = 10 AND $segundOct > 0 AND $segundOct < 256) {
                return "Privado";
                
              }
              elseif ($primeOct = 172 AND $segundOct > 15 AND $segundOct < 32) {
                return "Privado";
                
              }
                            elseif ($primeOct = 192 AND $segundOct = 168 AND $tercOct > 0 AND $tercOct < 256) {
                return "Privado";
                
              }
              else{
                return "Publico";
              }
         }

        $subRedeQuant = subRedeQuant($_POST['contBits']);
        echo "Quantidade de Sub Rede: "; print_r($subRedeQuant); 
        echo "<pre>"; 
        $subRede = subRede($subRedeQuant);
        echo "Numero de Sub Rede: "; print_r($subRede);
        echo "<pre>";
        $hostsPorSubRedes = hostsPorSubRedes($subRedeQuant);
        echo "Quantidade de Hosts por Sub Rede: "; print_r($hostsPorSubRedes);
      	echo "<pre>";
        $primeHost = primeHost($_POST['quartOct'], $subRedeQuant,$_POST['primeOct'],$_POST['segundOct'],$_POST['tercOct']);
        echo "Primeiro Host: "; print_r($primeHost);
        echo "<pre>";        
        $ultimHots = ultimHots( $subRedeQuant,$_POST['primeOct'],$_POST['segundOct'],$_POST['tercOct'],$_POST['quartOct']);
        echo "Ultimo Host: "; print_r($ultimHots);
        echo "<pre>";              
        $mascaraDeRede = mascaraDeRede($subRedeQuant);
        echo "Máscara de Rede: "; print_r($mascaraDeRede);
        echo "<pre>";                 
        $classes = classes($_POST['primeOct']);
        echo "Pertence a: "; print_r($classes);
 		echo "<pre>";
        $publicoPrivado = PublOuPriv($_POST['primeOct'],$_POST['segundOct'],$_POST['tercOct']);
        echo "IP público ou privado: "; print_r($publicoPrivado);









