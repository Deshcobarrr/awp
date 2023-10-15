<?php 
    $title = "Finances";
    include 'includes/header.php' 
?>
    <h1 style = "color:red">FINANCES PAGE - DO-WHILE/WHILE LOOP</h1>


     <?php
       $finance = 1;
       $rating =0;

        while ($finance < 5)
            {
                echo '<p>CLUB FINANCES IS GOOD!</p>';
                $finance++;
            }

        echo 'FINANCE IN CRISIS!'    
    ?>

        <h2>DO-WHILE LOOP</h2>
    <?php
        do
            {
                echo '<p>CLUB RATING IS GOOD!</p>';
                $rating++;
            } 
        while ($rating < 5);
        echo 'RATING NOT GOOD!'
    ?>

<?php 
require 'includes/footer.php'
?>