<?php 
    $title = "Club";
    include 'includes/header.php' 
?>
    <h1 style = "color:red">CLUB DATA PAGE - FOR LOOP</h1>

   
    <?php
    $club = 'Manchester United </br></br>';
        for ($count =0; $count <5; $count++)
            echo $club;
            echo '<p> Hello User </p>';
            echo"<p>The Count is: $count </p>";


    ?>

<?php 
require 'includes/footer.php'
?>