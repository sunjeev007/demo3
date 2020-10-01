<!-- 
    Name: Sangeev Thapa Magar
    Date: 04/07/2020
    Subject: CS 355 (Advanced Web Programming)
    Assignment 4: PHP and MySQL 
-->
<?php

require_once('database.php');

// setting the default value of min_price as 0.
$min_price = filter_input(INPUT_POST, 'min_price',
        FILTER_VALIDATE_FLOAT);
if (!isset($min_price)) {
     if ($min_price == NULL || $min_price == FALSE) {
       $min_price = 0;
   }
}

// getting all the names and prices of dishes.
$query = 'SELECT dish_name, 
            price FROM dishes WHERE (price >= :min_price) 
            ORDER BY dish_id';
$statement1 = $db->prepare($query);
$statement1->bindValue(':min_price', $min_price);
$statement1->execute();
$dishes = $statement1->fetchAll();
$statement1->closeCursor();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assignment.css">
    <!-- Title of the page-->
    <title>Filtering the list according to the least price</title>
</head>
<body>
    <header>
        <h1>Filter the Dishes </h1>
    </header>
    <center>
    <main>
        <form action="." method="POST">
            <label for="price">Enter a min price for the dish: </label><br>
            <input type="number" name="min_price"><br><br>
            <button type="submit" value="search">Search</button>
        </form>

        <section>
            <!--Display the results in the table-->
            <h2>Dishes with the minimum price of $<?php echo $min_price; ?> are:</h2>
            
            <table>
            <tr>
                <th><u>Name of the dish</u></th>
                <th class="right"><u>Price</u></th>
            </tr>

            <?php foreach ($dishes as $dish) : ?>
            <tr>
                <td><?php echo $dish['dish_name']; ?></td>
                <td class="right"><?php echo "$",$dish['price']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </section>
    </main></center>

    <footer>
    <p>&copy; <?php echo date("Y"); ?> Food Finder, Inc.</p>
    </footer>
</body>
</html>