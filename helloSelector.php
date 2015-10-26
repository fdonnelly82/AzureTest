<!DOCTYPE = html>
<html>
<head>
</head>
<body>

    <p1> "Where would you like to say hello?"</p1>
    <p2>
        <?php
            $query = $_GET["query"];
            $type = $GET_["type"];
            echo "The query is " .$query . " and the type is " .$type;
        ?>
    </p2>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: Fraser
 * Date: 26/10/2015
 * Time: 14:49
 */