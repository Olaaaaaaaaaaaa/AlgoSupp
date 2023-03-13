<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    function isPrime($n)
    {
        if ($n <= 1) return false;
        if ($n <= 3) return true;
        if ($n % 2 == 0 || $n % 3 == 0) return false;
        for ($i = 5; $i * $i <= $n; $i += 6) {
            if ($n % $i == 0 || $n % ($i + 2) == 0) return false;
        }
        return true;
    }

    $nb = 1000;
    $comteur = 1;
    $style = "text-align:center; background-color: brown; height:20px; width:20px; position: absolute;";
    $top = 50;
    $left = 50;
    $position = "top:" . $top . "%; left:" . $left . "%;";

    $multi = 0;
    $multiPlus =  1;

    $primeColor = "color: white;";

    echo "<p style=\"" . $style . $position . "\">" . $comteur . "</p>";

    while ($comteur != $nb) {
        if ($multiPlus % 2 == 1) {
            while ($multi != $multiPlus && $comteur != $nb) {
                $comteur++;
                $multi++;
                $left = $left + 2;
                $position = "top:" . $top . "%; left:" . $left . "%;";
                if (isPrime($comteur) == true) {
                    echo "<p style=\"" . $style . $position . $primeColor . "\">" . $comteur .  "</p>";
                } else {
                    echo "<p style=\"" . $style . $position . "\">" . $comteur . "</p>";
                }
            }
            $multi = 0;
            while ($multi != $multiPlus && $comteur != $nb) {
                $comteur++;
                $multi++;
                $top = $top - 3;
                $position = "top:" . $top . "%; left:" . $left . "%;";
                if (isPrime($comteur) == true) {
                    echo "<p style=\"" . $style . $position . $primeColor . "\">" . $comteur .  "</p>";
                } else {
                    echo "<p style=\"" . $style . $position . "\">" . $comteur . "</p>";
                }
            }
            $multi = 0;
        } else {
            while ($multi != $multiPlus && $comteur != $nb) {
                $comteur++;
                $multi++;
                $left = $left - 2;
                $position = "top:" . $top . "%; left:" . $left . "%;";
                if (isPrime($comteur) == true) {
                    echo "<p style=\"" . $style . $position . $primeColor . "\">" . $comteur .  "</p>";
                } else {
                    echo "<p style=\"" . $style . $position . "\">" . $comteur . "</p>";
                }
            }
            $multi = 0;
            while ($multi != $multiPlus && $comteur != $nb) {
                $comteur++;
                $multi++;
                $top = $top + 3;
                $position = "top:" . $top . "%; left:" . $left . "%;";
                if (isPrime($comteur) == true) {
                    echo "<p style=\"" . $style . $position . $primeColor . "\">" . $comteur .  "</p>";
                } else {
                    echo "<p style=\"" . $style . $position . "\">" . $comteur . "</p>";
                }
            }
            $multi = 0;
        }
        $multiPlus++;
    }

    ?>



</body>

</html>