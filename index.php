<?php 
    $title = "Home";
    include 'includes/header.php' 
?>
    <h1 style = "color:red">HOME</h1>
    

    <!-- Basic HTML statement
        <h1>HELLO WORLDDDD </h1>
    -->

    <?php
        //Printing to HTML using echo
        echo 'PHP Sentence <br/>';
        echo 'PHP Sentence 2';
    ?>


    <?php
        //declare variable
        $club = 'Manchester United';
        $age = 18;
        echo '<br/>';

        //echo variable
        echo $club;
        echo '<h2>Wayne Rooney played for '.$club.'</h2>';
        echo '<h2>He joined at age '.$age.'</h2>';
        echo "<h2>Wayne Rooney played for $club. He joined at age $age </h2>";
    ?>


<?php 
require 'includes/footer.php'
?>