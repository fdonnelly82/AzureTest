<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <p>
            <?php
             $name = "Fraser";
             $myAge = 19;

             if ($myAge >= 16) {
                 print $name + " can buy specs.";
             }
             elseif ($myAge < 16) {
                 print $name + " cannot by specs.";
             }

            if ($myAge >= 18) {
                print $name + " can buy mugs.";
            }

            elseif ($myAge < 18) {
                print $name + " cannot buy mugs.";
            }

            if ($myAge >= 21) {
                print $name + " can buy sausage rolla.";
            }

            elseif ($myAge < 21) {
                print $name + " cannot buy sausage rolls.";
            }
            ?>
        </p>
    </body>
</html>
/**
 * Created by PhpStorm.
 * User: Fraser
 * Date: 19/10/2015
 * Time: 14:59
 */