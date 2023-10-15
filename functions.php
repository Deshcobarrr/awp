<?php 
    $title = "Functions";
    include 'includes/header.php' 
?>
    <h1 style = "color:red">FUNCTIONS PAGE - FUNCTIONS</h1>

    <?php

        //Defining a Function

        function matchMessage()
            {
                echo "TODAY IS GAME DAY";
            }



        matchMessage();
        
        //Functions with Parameters

        function matchProfit($ticket, $attendance)
            {
                $sales = $ticket * $attendance;
                echo "The ticket sales for the match today is: $$sales </br>";
            }

        $ticket = 150;

        echo "</br>";
        echo "</br>";
        matchProfit($ticket, 30000);    

        function matchVenue()
            {
                echo "Match is being played at Sabina Park";
            }
        
        matchVenue();
        echo "</br>";
        echo "</br>";


        function returnSum($ticket, $attendance)
            {
                 $sum = $ticket + $attendance;
                 return $sum;   
            }

        $return = returnSum(20, 14000);
        echo $return . '</br>';


    ?>
 <?php 
require 'includes/footer.php'
?>