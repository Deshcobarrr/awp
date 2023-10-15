<?php 
    $title = "Training";
    include 'includes/header.php' 
?>
    <h1 style = "color:red">TRAINING PAGE - DATE & TIME MANIPULATION</h1>

    <?php
        $datenow = getdate();
        echo "Training Today: </br>";
        echo $datenow['mday']. '</br>';
        echo $datenow['mon']. '</br>';
        echo $datenow['year']. '</br>';
        echo '<hr>';
       
       //Printing Short Date
        echo "Training Date: ". $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'];
        
        //Set Timezone for time
        echo '</br>';
        echo '</br>';
        date_default_timezone_set("America/Jamaica");

        //Exact Time
        echo "Training started at " . date("h:i:sa");
        echo '</br>';
        echo '</br>';

        //Printing Short Date and Time
        print "Training Time and Date Started: " . date ("m/d/y \a\\t h:i:a <br>", time()) . '</br>';
        echo '</br>';

        //Printing Long Date and Time
        print "Training is today on " . date(" l, F j, Y, \a\\t g:i a", time());

        echo '<hr>';
        

    ?>

<?php 
require 'includes/footer.php'
?>