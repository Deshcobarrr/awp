<?php 
    $title = "Coaches";
    include 'includes/header.php' 
?>
    <h1 style = "color:red">COACHES DATA PAGE - SWITCH</h1>


    <?php
        $grade = 'B';

        switch($grade)
        {
            case 'A';
                echo "Coach received a grade of $grade on Club Coaches Exam last week ";
                echo '<h2 style = "color: green"> A job well done Coach!</h2>';
            break;

             case 'B';
                echo "Coach received a grade of $grade on Club Coaches Exam last week ";
                echo '<h2 style = "color: darkcyan"> You did well coach.</h2>';
            break;

            case 'C';
                echo "Coach received a grade of $grade on Club Coaches Exam last week ";
                echo '<h2 style = "color: darkblue"> You did well coach. Could do better.</h2>';
            break;

            default:
                echo "Coach received a grade of $grade on Club Coaches Exam last week ";
                echo '<h2 style = "color: crimson"> You did poorly coach.</h2>';
            break;

        }



    ?>


<?php 
require 'includes/footer.php'
?>