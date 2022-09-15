<?php
$hofok = $argv[1];
$me = $argv[2];
$valtas1 = ($me-32)/1.8;
$valtas2 = $me*1.8+32;
if ($argc==2)
{


    if ($me == "c" || $me =="celsius" || $me =="f" || $me =="fahrenheit")
    {
        if(is_int($hofok) == true || is_float($hofok) == true)
        {
            if ($me == "c"|| $me == "celius")
            {

                echo $me . $hofok . "az" . $valtas2 . "fahrenheit";
            }
            else if ($me == "f"|| $me == "fahrenheit")
            {

                echo $me . $hofok . "az" . $valtas1 . "celsius";
            }
            
        }

        else
        {
            echo "Hibás Hőfok";
        }
    }
    else
    {
        echo "Hibás mértékegység";
    }
}
else if($argc>2)
{
    echo "Túl sok paraméter";
}
else
{
    echo "Túl kevés paraméter";
}
?>
