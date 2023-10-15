<?php 
    $title = "Players";
    include 'includes/header.php' 
?>
    <h1 style = "color:red">PLAYERS DATA PAGE - ARRAY</h1>

    <?php
        $players = array('Raffique Bryan', 'Zeron Sewell', 'Allando Brown', 'Junior Flemmings', 'Deshaun Brown', 
        'Devaun Brown','Deandre Brown','Desrick Brown','Miller Brown', 'Bruno Fernandes', 'Xavi');

        //search for 3rd player in the array
        echo $players[2];
        echo '</br>';

        //search for 9th player in the array
        echo "<p>$players[8]</p>";
        echo '</br>';
        echo '</br>';

        //count of the players in the array
        $a_size = count($players);
        echo "<p>Players currently in JC team: $a_size</p>";

        //outputting player names in array
        for($count = 0; $count < $a_size; $count++)
            {
                echo "<p>$players[$count]</p>";
            }




    ?>
    
<?php 
require 'includes/footer.php'
?>