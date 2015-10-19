<!DOCTYPE html>
<html>
<head>

</head>

<body>
    <p>
        <?php
         $wandedgood = 3;

        switch ($wandedgood) {
            case 1:
                echo "You have to be 18 to buy a mug";
                break;
            case 2:
                echo "You have to be 16 to buy a spec";
                break;
            case 3:
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