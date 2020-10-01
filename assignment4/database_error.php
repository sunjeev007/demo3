<!-- 
    Name: Sangeev Thapa Magar
    Date: 04/07/2020
    Subject: CS 355 (Advanced Web Programming)
    Assignment 4: PHP and MySQL 
-->
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Product Filter</title>
    <link rel="stylesheet" type="text/css" href="./main.css" />
</head>

<!-- the body section -->
<body>
    <header><h1>Product Filter</h1></header>

    <main>
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>
        <p>Error message: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
    </main>

    <footer>
    <p>&copy; <?php echo date("Y"); ?> Food Finder, Inc.</p>
    </footer>
</body>
</html>
