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
                 print "Can buy specs.";
             }
             elseif ($myAge < 16) {
                 print "Cannot by specs.";
             }

            if ($myAge >= 18) {
                print "Can buy mugs.";
            }

            elseif ($myAge < 18) {
                print "Cannot buy mugs.";
            }

            if ($myAge >= 21) {
                print "Can buy sausage rolla.";
            }

            elseif ($myAge < 21) {
                print "Cannot buy sausage rolls.";
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