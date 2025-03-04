<?php

if (($_POST["product"] ?? '')
    && is_numeric($_POST["price"] ?? '')
    && is_numeric($_POST["weight"] ?? '')
    && ($_POST["typeProduct"] ?? '')
    && ($_FILES["image"]["type"])
    && ($_POST["country"] ?? '')
    && ($_POST["city"] ?? '')) {
        if ($_FILES["image"]["type"] == "image/jpeg" && "image/png" && "image/jpg") {
        file_put_contents("product.csv", $_POST["product"] . ";"
            . $_POST["price"] . ";"
            . $_POST["weight"] . ";"
            . $_POST["typeProduct"] . ";"
            . $_FILES["image"]["name"] . ";"
            . $_POST["country"] . ";"
            . $_POST["city"] . "\n" , FILE_APPEND);
        header("location: index.php");
    } else {
        echo "ERROR IMAGE TYPE";
    }
}

?>

<html>
    <head>
        <style>
            label {
                width: 200px;
                display: inline-block;
            }
            div {
                padding-bottom: 2px;
            }
        </style>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <div>
                <label>Product</label>
                <input type="text" name="product">
            </div>
            <div>
                <label>Price</label>
                <input type="text" name="price">
            </div>
            <div>
                <label>Weight</label>
                 <input type="text" name="weight">
            </div>
            <div>
                <label>Type of product</label>
                <select name="typeProduct">
                    <option value="Fruit">Fruit</option>
                    <option value="Vegetable">Vegetable</option>
                </select>
            </div>
            <div>
                <label>Photo</label>
                <input type="file" name="image" />
            </div>
            <div>
                <label>Location</label>
                <input type="text" name="country" placeholder="Country">
                <input type="text" name="city" placeholder="City">
            </div>
            <br><br>
            <button type="submit" style="background-color: green; color: white;">Submit</button>
        </form>
        <a href="index.php"><button>Back to list</button></a>
    </body>
</html>
