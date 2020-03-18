<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>

    <form name="Calc" method="POST" action="controller.php">
    <?php
    echo 'op1:';
    echo '<input type="text"  name="Op1" value="" size="3" /> ';
    echo '+';
    echo 'op2:';
    echo '<input type="text"  name="Op2" value="" size="3" /> ';
    ?>

        <input type="submit" value="=" name="type" />



    </form>
</body>

</html>
