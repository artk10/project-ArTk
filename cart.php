<?php

require 'functions.php';

$header = ['Product', 'Price', 'Weight', 'Type of product', 'Image', 'Location', 'Delete product'];

$file = "cart.csv";

?>

<html>
    <body>
    <a href="index.php"><button>Back to list</button></a>
    <br><br>
    <table border="1" width="600px">
        <tr bgcolor="gray">
            <td style="text-align: center"><b><?php echo $header[0] ?></b></td>
            <td style="text-align: center"><b><?php echo $header[1] ?></b></td>
            <td style="text-align: center"><b><?php echo $header[2] ?></b></td>
            <td style="text-align: center"><b><?php echo $header[3] ?></b></td>
            <td style="text-align: center"><b><?php echo $header[4] ?></b></td>
            <td style="text-align: center"><b><?php echo $header[5] ?></b></td>
            <td style="text-align: center"><b><?php echo $header[6] ?></b></td>
        </tr>
        <tr>
            <td style="text-align: left">TEST</td>
            <td style="text-align: right">TEST</td>
            <td style="text-align: right">TEST</td>
            <td style="text-align: center">TEST</td>
            <td style="text-align: center">TEST</td>
            <td style="text-align: center">TEST</td>
            <td style="text-align: center"></td>
        </tr>
        <tr bgcolor="gray">
            <td style="text-align: left">Total</td>
            <td style="text-align: right">600€</td>
            <td style="text-align: right">600kg</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </body>
</html>

