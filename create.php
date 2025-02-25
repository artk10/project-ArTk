<?php

if (($_POST["product"] ?? '')
    && is_numeric($_POST["price"] ?? '')
    && is_numeric($_POST["weight"] ?? '')
    && ($_POST["typeProduct"] ?? '')
    && ($_FILES["image"]["type"])
    && is_numeric($_POST["article"] ?? '')) {
        if ($_FILES["image"]["type"] == "image/jpeg" && "image/png" && "image/jpg") {
        file_put_contents("product.csv", $_POST["product"] . ";"
            . $_POST["price"] . ";"
            . $_POST["weight"] . ";"
            . $_POST["typeProduct"] . ";"
            . $_FILES["image"]["name"] . ";"
            . $_POST["article"] . "\n" , FILE_APPEND);
        header("location: index.php");
    } else {
        echo "ERROR IMAGE TYPE";
    }
}

?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            Product <input type="text" name="product">
            Price <input type="text" name="price">
            Weight <input type="text" name="weight">
            <label>
                Type of product
                <select name="typeProduct">
                    <option value="Fruit">Fruit</option>
                    <option value="Vegetable">Vegetable</option>
                </select>
            </label>
            <input type="file" name="image" />
            Article <input type="text" name="article">
            <br><br>
            <button type="submit" style="background-color: green; color: white;">Submit</button>
        </form>
        <a href="index.php"><button>Back to list</button></a>
    </body>
</html>