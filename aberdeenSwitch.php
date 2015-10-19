<!DOCTYPE html>
<html>
<head>

</head>

<body>
    <p>
        <?php
         $wandedgood = "mug";

        switch ($wandedgood) {
            case "mug":
                echo "You have to be 18 to buy a mug";
                break;
            case "spec":
                echo "You have to be 16 to buy a spec";
                break;
            case "sausage":
                echo "You have to be 21 to buy a sausage roll";
                break;
            default:
                echo "You are not old enough to purchase an item.";
        }
        ?>

    </p>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: Fraser
 * Date: 19/10/2015
 * Time: 15:53
 */