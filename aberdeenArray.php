<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <p>
        <?php
        $provisionedActivitty = array("Specs", "Drugs", "Rock and Roll");


        $provisionedActivitty[2] = "Hugs";


        unset($provisionedActivitty[3]);

        foreach($provisionedActivitty as $x) {
            print "<p>$x</p>p>";
        }
        ?>

    </p>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: Fraser
 * Date: 19/10/2015
 * Time: 16:14
 */