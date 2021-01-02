<?php


$hipotenusa = $_POST["Hipotenusa"];
$adjacente = $_POST['adjacente'];
$oposto = $_POST['oposto'];
$Angulo = $_POST['angulo'];


if(empty($Angulo)){
    
    if ($hipotenusa == "x"){

        $sobe2 = 2;
        $adjElevado = $adjacente ** $sobe2;
        $opostoElevado = $oposto ** $sobe2;
        $resultadoSoma = $adjElevado + $opostoElevado;
        $resultadoFinal = sqrt($resultadoSoma);

            echo "Resultado Final:" . " " . $resultadoFinal;

        } else{

                if ($oposto == "x"){

                    $sobe2 = 2;
                    $adjElevado = $adjacente ** $sobe2;
                    $hipotenusaElevada = $hipotenusa ** $sobe2;
                    $resultadoDimi = $adjElevado - $hipotenusaElevada;
                    $resultadoFinal = sqrt($resultadoDimi);

                        echo "Resultado final:" . " " . $resultadoFinal;
        
                 } else{
                
                    if($adjacente == "x"){

                         $sobe2 = 2;
                        $opostoElevado = $oposto ** $sobe2;
                        $hipotenusaElevada = $hipotenusa ** $sobe2;
                        $resultadoDimi = $opostoElevado - $hipotenusaElevada;
                        $resultadoFinal = sqrt($resultadoDimi);

                            echo "Resultado final:" . " " . $resultadoFinal;
                }
            
            }

    }

};

if ($hipotenusa == "x"){

    if ($Angulo == "30"){ 

        if(empty($oposto)){
            
            $sobe2 = 2; 
            $sobe9 = 9;

           $adjacenteX2 = $adjacente * $sobe2;
           $adjacenteDivi = $adjacenteX2 / $sobe9;
           echo $adjacenteDivi . "V3";
           echo "<br>" . "V é o simbolo da raiz.";
        
          }else{

            if(empty($adjacente)){

                $sobe2 = 2;
                $resultadoFinal = $oposto / $sobe2;
            
                echo "O resultado é: " .  $resultadoFinal;

            }
        }

    } else{

             if ($Angulo == "45"){ 


                    if(empty($oposto)){
                        
                        $sobe2 = 2; 
                        $sobe4 = 4;
                        $resultadoMulti = $adjacente * $sobe2;
                        $resultadoFinal = $resultadoMulti / $sobe4;


                       echo "O resultado é: " . $resultadoFinal . "V2";
                       echo "<br>" . "V é o simbolo da raiz.";

                    
                      } else{
            
                        if(empty($adjacente)){

                        $sobe2 = 2; 
                        $sobe4 = 4;
                        $resultadoMulti = $oposto * $sobe2;
                        $resultadoFinal = $resultadoMulti / $sobe4;

                       echo "O resultado é: " . $resultadoFinal . "V2";
                       echo "<br>" . "V é o simbolo da raiz.";

                            
                        }
                    }

             } else{

                 if ($Angulo == "60"){ 

                    if(empty($oposto)){
                        $sobe2 = 2;

                        $resultadoFinal = $adjacente / $sobe2;

                        echo "O resultado é: " . $resultadoFinal;
                        


                    } else{

                        if(empty($adjacente)){
                        
                        $sobe2 = 2;
                        $sobe3 = 3;

                        $resultadoMulti = $oposto * $sobe2;
                        $resultadoFinal = $resultadoMulti / $sobe3;


                        echo "O resultado é: " . $resultadoFinal . "V3";
                        echo "<br>" . "<br>" . "V é o simbolo da raiz.";

                        }

                    }
                    
                }else {

                    echo "Só tenho 15 anos, não faço coisas da faculdade, marmanjo.";

                  }
        }
    }

};

if ($adjacente == "x"){ 

        if ($Angulo == "30"){ 

            if(empty($hipotenusa)){ 

                $sobe3 = 3;

                $resultadoMulti = $oposto * $sobe3;
                $resultadoFinal = $resultadoMulti / $sobe3;

                echo "O resultado é: " . $resultadoFinal . "V3";
                echo "<br>" . "<br>" . "V é o simbolo da raiz.";

            } else {          
                
                if(empty($oposto)){
                    
                    $sobe2 = 2;        

                    $resultadoFinal = $hipotenusa / $sobe2;

                    echo "O resultado é: " . $resultadoFinal . "V3";
                    echo "<br>" . "<br>" . "V é o simbolo da raiz."; 
                
                            
                
                    }

                }

        } else{

    if ($Angulo == "45"){ 

                    if(empty($hipotenusa)){

                            $sobe2 = 2;
                            $resultadoFinal = $oposto / $sobe2;
                            
                            echo "O resultado é: " . $resultadoFinal;

                     } else {          
                
                        if(empty($oposto)){

                            $sobe2 = 2;
                            $resultadoFinal = $hipotenusa / $sobe2;

                            echo "O resultado é: " . $resultadoFinal . "V2";
                            echo "<br>" . "<br>" . "V é o simbolo da raiz.";


                        }
                    
                    }  

                } else{

                    if ($Angulo == "60"){ 

                        if(empty($hipotenusa)){

                            $sobe3 = 3;
                            $resultadoFinal = $oposto / $sobe3;

                            echo "O resultado é: " . $resultadoFinal . "V3";
                            echo "<br>" . "<br>" . "V é o simbolo da raiz.";  

                        } else {   

                                if(empty($oposto)){ 
                                    $sobe2 = 2;

                                    $resultadoFinal = $hipotenusa / $sobe2;

                                    echo "O resultado é: " . $resultadoFinal;

                                 
                                     }
                                } 

                    } else {

                        echo "Só tenho 15 anos, não faço coisas da faculdade, marmanjo.";

                    }
            
        }
    }
};

if($oposto == "x"){

    if ($Angulo == "30"){

        if(empty($hipotenusa)){

            $sobe2 = 2;
            $sobe3 = 3;
            $resultadoMulti =  $adjacente * $sobe2;
            $resultadoFinal = $resultadoMulti / $sobe3;

            echo "O resultado é: " . $resultadoFinal . "V3";
            echo "<br>" . "<br>" . "V é o simbolo da raiz.";

             }else{

                    if(empty($adjacente)){
                    $sobe2 = 2;

                    $resultadoFinal = $hipotenusa / $sobe2;
                    echo "O resultado é: " . $resultadoFinal . "V3";
                    echo "<br>" . "<br>" . "V é o simbolo da raiz.";
            
                 }
                
             }
                
         } else{

    if ($Angulo == "45"){
                    
            if(empty($hipotenusa)){

                 $resultadoFinal = $adjacente;

                 echo "O resultado é: " . $resultadoFinal;

                    }else{
                            
                        if(empty($adjacente)){
                            $sobe2 = 2;

                            $resultadoFinal = $hipotenusa / $sobe2;
                            echo "O resultado é: " . $resultadoFinal . "V2";
                            echo "<br>" . "<br>" . "V é o simbolo da raiz.";

                             
                                    
                        }
                    
                    }
                    
                }else{

    if ($Angulo == "60"){ 

                                
        if(empty($hipotenusa)){
         $sobe3 = 3;

        $resultadoFinal = $adjacente / $sobe3;
        echo "O resultado é: " . $resultadoFinal . "V3";
        echo "<br>" . "<br>" . "V é o simbolo da raiz.";

            }else{

            if(empty($adjacente)){ 
                $sobe2 = 2;

                $resultadoFinal = $hipotenusa / $sobe2; 
                echo "O resultado é: " . $resultadoFinal . "V3";
                echo "<br>" . "<br>" . "V é o simbolo da raiz.";
 
                    }
                
                }
                
                    }else {

                        echo "Só tenho 15 anos, não faço coisas da faculdade, marmanjo.";


                        
                    }
        }
    }
};
    
    
?>