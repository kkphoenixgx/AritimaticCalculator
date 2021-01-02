<?php


$hypotenuse = $_POST["hypotenuse"];
$Adjacent = $_POST['Adjacent'];
$Opposite = $_POST['Opposite'];
$Angle = $_POST['Angle'];


if(empty($Angle)){
    
    if ($hypotenuse == "x"){

        $up2 = 2;
        $adjUp = $Adjacent ** $up2;
        $OppositeUp = $Opposite ** $up2;
        $ResultSum = $adjUp + $OppositeUp;
        $FinalResult = sqrt($ResultSum);

            echo "Final Result:" . " " . $FinalResult;

        } else{

                if ($Opposite == "x"){

                    $up2 = 2;
                    $adjUp = $Adjacent ** $up2;
                    $hypotenuseup = $hypotenuse ** $up2;
                    $ResultDecreased = $adjUp - $hypotenuseup;
                    $FinalResult = sqrt($ResultDecreased);

                        echo "Final Result:" . " " . $FinalResult;
        
                 } else{
                
                    if($Adjacent == "x"){

                         $up2 = 2;
                        $OppositeUp = $Opposite ** $up2;
                        $hypotenuseup = $hypotenuse ** $up2;
                        $ResultDecreased = $OppositeUp - $hypotenuseup;
                        $FinalResult = sqrt($ResultDecreased);

                            echo "Final Result:" . " " . $FinalResult;
                }
            
            }

    }

};

if ($hypotenuse == "x"){

    if ($Angle == "30"){ 

        if(empty($Opposite)){
            
            $up2 = 2; 
            $up9 = 9;

           $AdjacentX2 = $Adjacent * $up2;
           $AdjacentDecreased = $AdjacentX2 / $up9;
           echo $AdjacentDecreased . "V3";
           echo "<br>" . "V is the square root symbol.";
        
          }else{

            if(empty($Adjacent)){

                $up2 = 2;
                $FinalResult = $Opposite / $up2;
            
                echo "O Result is: " .  $FinalResult;

            }
        }

    } else{

             if ($Angle == "45"){ 


                    if(empty($Opposite)){
                        
                        $up2 = 2; 
                        $up4 = 4;
                        $ResultMultiplied = $Adjacent * $up2;
                        $FinalResult = $ResultMultiplied / $up4;


                       echo "O Result is: " . $FinalResult . "V2";
                       echo "<br>" . "V is the square root symbol.";

                    
                      } else{
            
                        if(empty($Adjacent)){

                        $up2 = 2; 
                        $up4 = 4;
                        $ResultMultiplied = $Opposite * $up2;
                        $FinalResult = $ResultMultiplied / $up4;

                       echo "O Result is: " . $FinalResult . "V2";
                       echo "<br>" . "V is the square root symbol.";

                            
                        }
                    }

             } else{

                 if ($Angle == "60"){ 

                    if(empty($Opposite)){
                        $up2 = 2;

                        $FinalResult = $Adjacent / $up2;

                        echo "The Result is: " . $FinalResult;
                        


                    } else{

                        if(empty($Adjacent)){
                        
                        $up2 = 2;
                        $up3 = 3;

                        $ResultMultiplied = $Opposite * $up2;
                        $FinalResult = $ResultMultiplied / $up3;


                        echo "The Result is: " . $FinalResult . "V3";
                        echo "<br>" . "<br>" . "V is the square root symbol.";

                        }

                    }
                    
                }else {

                    echo "I just have 15 years old, You are on college, I don't do it, Think a little bum";

                  }
        }
    }

};

if ($Adjacent == "x"){ 

        if ($Angle == "30"){ 

            if(empty($hypotenuse)){ 

                $up3 = 3;

                $ResultMultiplied = $Opposite * $up3;
                $FinalResult = $ResultMultiplied / $up3;

                echo "O Result is: " . $FinalResult . "V3";
                echo "<br>" . "<br>" . "V is o square root symbol.";

            } else {          
                
                if(empty($Opposite)){
                    
                    $up2 = 2;        

                    $FinalResult = $hypotenuse / $up2;

                    echo "O Result is: " . $FinalResult . "V3";
                    echo "<br>" . "<br>" . "V is o square root symbol."; 
                
                            
                
                    }

                }

        } else{

    if ($Angle == "45"){ 

                    if(empty($hypotenuse)){

                            $up2 = 2;
                            $FinalResult = $Opposite / $up2;
                            
                            echo "O Result is: " . $FinalResult;

                     } else {          
                
                        if(empty($Opposite)){

                            $up2 = 2;
                            $FinalResult = $hypotenuse / $up2;

                            echo "O Result is: " . $FinalResult . "V2";
                            echo "<br>" . "<br>" . "V is o square root symbol.";


                        }
                    
                    }  

                } else{

                    if ($Angle == "60"){ 

                        if(empty($hypotenuse)){

                            $up3 = 3;
                            $FinalResult = $Opposite / $up3;

                            echo "O Result is: " . $FinalResult . "V3";
                            echo "<br>" . "<br>" . "V is o square root symbol.";  

                        } else {   

                                if(empty($Opposite)){ 
                                    $up2 = 2;

                                    $FinalResult = $hypotenuse / $up2;

                                    echo "O Result is: " . $FinalResult;

                                 
                                     }
                                } 

                    } else {

                        echo "I just have 15 years old, You are on college, I don't do it, Think a little bum";

                    }
            
        }
    }
};

if($Opposite == "x"){

    if ($Angle == "30"){

        if(empty($hypotenuse)){

            $up2 = 2;
            $up3 = 3;
            $ResultMultiplied =  $Adjacent * $up2;
            $FinalResult = $ResultMultiplied / $up3;

            echo "O Result is: " . $FinalResult . "V3";
            echo "<br>" . "<br>" . "V is o square root symbol.";

             }else{

                    if(empty($Adjacent)){
                    $up2 = 2;

                    $FinalResult = $hypotenuse / $up2;
                    echo "O Result is: " . $FinalResult . "V3";
                    echo "<br>" . "<br>" . "V is o square root symbol.";
            
                 }
                
             }
                
         } else{

    if ($Angle == "45"){
                    
            if(empty($hypotenuse)){

                 $FinalResult = $Adjacent;

                 echo "O Result is: " . $FinalResult;

                    }else{
                            
                        if(empty($Adjacent)){
                            $up2 = 2;

                            $FinalResult = $hypotenuse / $up2;
                            echo "O Result is: " . $FinalResult . "V2";
                            echo "<br>" . "<br>" . "V is o square root symbol.";

                             
                                    
                        }
                    
                    }
                    
                }else{

    if ($Angle == "60"){ 

                                
        if(empty($hypotenuse)){
         $up3 = 3;

        $FinalResult = $Adjacent / $up3;
        echo "O Result is: " . $FinalResult . "V3";
        echo "<br>" . "<br>" . "V is o square root symbol.";

            }else{

            if(empty($Adjacent)){ 
                $up2 = 2;

                $FinalResult = $hypotenuse / $up2; 
                echo "O Result is: " . $FinalResult . "V3";
                echo "<br>" . "<br>" . "V is o square root symbol.";
 
                    }
                
                }
                
                    }else {

                        echo "I just have 15 years old, You are on college, I don't do it, Think a little bum";


                        
                    }
        }
    }
};
    
    
?>