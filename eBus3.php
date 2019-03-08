<!DOCTYPE html>
<html>
    <body style="background-color: darksalmon">
        <!-- //Starting the session to get the session variable from last page-->
        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        
        echo "Thank you for your purchase!";
        echo "<br></br>";    
        echo "The name is : " .$fullNameValue.".";
        echo "<br></br>";
        echo "The total value is : " .$totalValue2.".";
        ?>
        
    </body>
</html>


