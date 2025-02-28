<?php

require 'functions.php';

$header = ['Product', 'Price', 'Weight', 'Type of product', 'Image'];

$file = "product.csv";

$data = getDataFromFile($file);

$search = $_GET['search'] ?? '';
if ('' !== $search) {
    $data = search($data, $search);
}

$page = $_GET['page'] ?? 1;
$countProductPage = 5;
$totalFruits = count($data);
$startIndex = ($page - 1) * $countProductPage;
$totalPages = ceil($totalFruits / $countProductPage);
$data = array_splice($data, $startIndex, $countProductPage);

$maxName = getMaxName($data, $header);

$totalPrice = getSumPrice($data);

$totalWeight = getSumWeight($data);

$totalProduct = getTotalProduct($data);

?>

<html>
    <body>
        <a href="create.php"><button>Create new product</button></a>
        <br><br>
        <table border="1" width="400px">
            <tr bgcolor="gray">
                <td style="text-align: center"><b><?php echo $header[0] ?></b></td>
                <td style="text-align: center"><b><?php echo $header[1] ?></b></td>
                <td style="text-align: center"><b><?php echo $header[2] ?></b></td>
                <td style="text-align: center"><b><?php echo $header[3] ?></b></td>
                <td style="text-align: center"><b><?php echo $header[4] ?></b></td>
            </tr>
            <?php foreach ($data as $product): ?>
                <tr>
                    <td style="text-align: left"><?php echo $product -> name ?></td>
                    <td style="text-align: right"><?php echo $product -> price ?> €</td>
                    <td style="text-align: right"><?php echo $product -> weight ?> kg</td>
                    <td style="text-align: center"><?php echo $product -> typeProduct ?></td>
                    <td style="text-align: center"><img src="images/<?php echo $product -> image ?>" width="50" /></td>
                </tr>
            <?php endforeach ?>
            <tr bgcolor="gray">
                <td style="text-align: left"><i>Total: </i></td>
                <td style="text-align: right"><i><?php echo $totalPrice ?> €</i></td>
                <td style="text-align: right"><i><?php echo $totalWeight ?> kg</i></td>
                <td style="text-align: center"><i><?php echo $totalProduct ?> positions</i></td>
                <td></td>
            </tr>
        </table>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="index.php?page=<?php echo $i ?>&search=<?php echo $search ?>"><?php echo $i ?></a>
        <?php endfor ?>
    </body>
    <br>
    <br>
    <a href="object_example.php"><button>Example</button></a>
</html>
