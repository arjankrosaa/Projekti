<?php
session_start();

// Check if the user is an admin, otherwise redirect them
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
</head>
<body>
    <style>
         form {
            max-width: 400px;
            margin: 0 auto;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
        <label for="image">Choose Image:</label>
        <input type="file" name="image" id="image" accept="img/*" >
        <label for="image">Add Product Name:</label>
        <input type="text" name="text" >

        <input type="submit" name="submit" value="Posto">
    </form>


    <?php 
            include_once 'controller/productController.php';
          
            ?>

   
</body>
</html>


