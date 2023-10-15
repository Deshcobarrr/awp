<?php 
    $title = "Supplies";
    include 'includes/header.php' 
?>
    <h1 style = "color:red">SUPPLIES PAGE - STRING MANIPULATION</h1>

    <?php
        //Concatenation of strings
        $bonus1= "Player who scored a goal in yesterday's match ";
        $bonus2= "will get a day-off tomorrow and $1,000 bonus";
        $name = 'sergio ramos';
        echo $bonus1;
        echo $bonus2;
        echo "</br>";
        echo "</br>";
        echo "</br>";
        echo $bonus1 ." against KC, ". $bonus2;

        //String Transformation
        echo "</br>";
        echo "</br>";
        echo 'Uppercase first letter of player name: ' . ucfirst($name).'</br>';
        echo 'Uppercase first letter of player names: ' . ucwords($name).'</br>';
        echo 'Player name in all Uppercase Letters: ' . strtoupper($name).'</br>';
        echo 'Player name in all Lowercase Letters: ' . strtolower("WE WON").'</br>';
        echo '<hr>';
        echo 'Repeat Letter: ' . strtoupper(str_repeat('s', 10)).'</br>';
        echo 'Repeat Letter: ' . strtolower(str_repeat('A', 10)).'</br>';
        echo 'Get a Substring: ' . substr($name, 3, 10).'</br>';
        echo 'Get position of string: ' . strpos($name, 'i').'</br>';

        echo 'Find Character "S": ' . strchr($name, 'S').'</br>';
        echo 'Find Character "r": ' . strchr($name, 'r').'</br>';
        echo 'Find Character "o": ' . strchr($name, 'o').'</br>';

        echo 'Find Length of string: ' . strlen($name).'</br>';

        echo 'Without Trim: ' . "A" . "B C D" . "E" .'</br>';
        echo 'Trim Spaces on both sides: ' . "A" . trim (" B C D" ) . "E" .'</br>';
        echo 'Trim Spaces to the left: ' . "A" . ltrim (" B C D" ) . "E" .'</br>';
        echo 'Trim Spaces to the right: ' . "A" . rtrim ( "B C D" ) . "E" .'</br>';

        echo 'Replace string with another: '. str_replace("yesterday's", "today's", $bonus1). '</br>';
        echo 'Replace string with another: '. str_replace("tomorrow", "next week", $bonus2). '</br>';

    ?>


<?php 
require 'includes/footer.php'
?>