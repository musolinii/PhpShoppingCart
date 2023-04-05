<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <title>
            Dashboard
        </title>
    </head>
    <body>

    <form action = "add_items.php" method="POST">
        <input type = "number"  name = "id" placeholder = "id">
        <br>
        <input type = "text"  name = "name" placeholder = "name">
        <br>
        <input type = "text"  name = "description" placeholder = "description">
        <br>
        <input type = "number" step ="any" name = "price" placeholder = "price">
        <br>
        <button type = "submit" name = "submit" >Add item</button>
    </body>
</html>