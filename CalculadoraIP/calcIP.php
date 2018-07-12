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
            return "classe A";
          }
          elseif ($primeOct > 127 AND $primeOct < 192) {
            return "classe B";
          }
          elseif ($primeOct > 191 AND $primeOct  < 224) {
            return "classe C";
          }
          elseif ($primeOct > 223 AND $primeOct  < 240) {
            return "classe D";
          }
          elseif ($primeOct > 239 AND $primeOct  < 248) {
            return "classe E";
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
        print_r($subRedeQuant);
         
        $subRede = subRede($subRedeQuant);
        print_r($subRede);
        
        $hostsPorSubRedes = hostsPorSubRedes($subRedeQuant);
        print_r($hostsPorSubRedes);
       
        $primeHost = primeHost($_POST['quartOct'], $subRedeQuant,$_POST['primeOct'],$_POST['segundOct'],$_POST['tercOct']);
        print_r($primeHost);
                  
        $ultimHots = ultimHots( $subRedeQuant,$_POST['primeOct'],$_POST['segundOct'],$_POST['tercOct'],$_POST['quartOct']);
        print_r($ultimHots);
                      
        $mascaraDeRede = mascaraDeRede($subRedeQuant);
        print_r($mascaraDeRede);
                         
        $classes = classes($_POST['primeOct']);
        print_r($classes);

 
        $publicoPrivado = publicoPrivado($_POST['primeOct'],$_POST['segundOct'],$_POST['tercOct']);
        print_r($publicoPrivado);







