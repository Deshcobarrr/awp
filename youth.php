<?php 
    $title = "Youth";
    include 'includes/header.php' 
?>
    <h1 style = "color:red">YOUTH TEAM PAGE - IF STATEMENT</h1>


    <?php
        //declare variables
        $age = 18;
        echo "Age of player is: $age";
        $grade = 49;


        //IF Statement to check first team eligibility
        if ($age >= 18)
            {
                echo '<h3 style= "color: green"> Player is eligible for first team! </h3>';
            }
            
        else
            {
                echo '<h3 style= "color: red"> Player is not eligible for first team!</h3>';
            }


        //IF Statement to check training grade
        

        if ($grade >= 80)
            {
                echo "Player attained a grade of $grade in training this week. ";
                $grade = 'A';
                echo "Player received a new grade of $grade";
                echo '<h3 style= "color: green"> Player trained very good!</h3>';
            }

        else if ($grade <80 AND $grade >=65)
            {
                echo "Player attained a grade of $grade in training this week. ";
                $grade = 'B';
                echo "Player received a new grade of $grade.";
                echo '<h3 style= "color: darkblue"> Player trained okay.</h3>';
            }    

        else if ($grade <65 AND $grade >=50)
            {
                echo "Player attained a grade of $grade in training this week. ";
                $grade = 'C';
                echo "Player received a new grade of $grade.";
                echo '<h3 style= "color: darkblue"> Player trained okay. Could be better.</h3>';
            }    

        else
            {
                echo "Player attained a grade of $grade in training this week. ";
                $grade = 'F';
                echo "Player received a new grade of $grade.";
                echo '<h3 style= "color: crimson"> Player trained poorly. Not good enough. </h3>';
            }    
    ?>


<?php 
require 'includes/footer.php'
?>