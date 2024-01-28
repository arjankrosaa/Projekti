<?php
session_start();

// Check if the user is an admin, otherwise redirect them
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Fetch contact form data from the database
$conn = new mysqli("localhost", "root", "", "luxeliving");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM kontakti";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN-Dashboard</title>
</head>
<body>
<style>

    header{
        display: flex;
        justify-content: space-between;
        padding: 0 50px 0 50px;
        background-color: #ccc;
    }

    body{
        background-color: #f2f2f2;
        
    }

    
        .body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            
        }

        div {
            box-sizing: border-box;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            width: calc(30% - 20px);
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        div:hover {
            transform: scale(1.02);
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        hr {
            border: 1px solid #ccc;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #e2f2d2;
        }

        a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            cursor: pointer;
        }

        @media (max-width: 950px) {
div{
    width: 400px;
}
}

    </style>
    <header>
    <h2><a href="index.php"> <span>&#8592;</span> HOME   </a></h2>
    <h2 >Luxeliving</h2>
    </header>
    <hr>

    <main class="body">
  


    <!-- Your existing dashboard content -->

    <div style="border:1px black solid;">
    <h1>Contact Form Submissions</h1>
    <hr>

    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<p><b>Emri Mbiemri:</b> " . $row["emri_mbiemri"] . "<br><b>Email:</b> " . $row["email"] . "<br><b>Message: </b>" . $row["pershkrimi"] . "</p>";
        }
    } else {
        echo "No contact form submissions yet.";
    }

    $conn->close();
    ?>

</div>

<br><br><br>



<br>


 
  


   




    <div style="border:1px black solid;">
    <h1>Subscribers</h1>
    <hr>

    <?php
    // Fetch contact form data from the database
$conn = new mysqli("localhost", "root", "", "luxeliving");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM subscribe";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<p><b>ID:</b> " . $row["id"] . "<b>, Email:</b> " . $row["email"]. "</p>";
        }
    } else {
        echo "No Subscribers yet.";
    }

    $conn->close();
    ?>

</div>


   
</main>
<hr>
<h2 style="text-align:center;" >Users</h2>
<table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>SURNAME</th>
                 <th>EMAIL</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once 'repository/userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[id]</td>
                     <td>$user[emri]</td>
                     <td>$user[mbiemri] </td>
                     <td>$user[email] </td>
                     <td>$user[password] </td>
                     <td><a href='edit.php?id=$user[id]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[id]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>


<br><br>
<hr>
<h2 style="text-align:center;" >Top Produktet Javore</h2>
<table border="1">
   
             <tr>
                 <th>ID</th>
                 <th>Image</th>
                 <th>text</th>
                 <th><a href='produkti.php?id=$produkti[id]'>ADD NEW</a></th>
                 
                 
             </tr>

             <?php 
             include_once 'repository/produktiRepository.php';

             $produktiRepository = new ProduktiRepository();

             $produktet = $produktiRepository->getAllProducts();

             foreach($produktet as $produkti){
                echo 
                "
                <tr>
                     <td>$produkti[id]</td>
                     <td>$produkti[image]</td>
                     <td>$produkti[text] </td>
                     <td><a href='deleteProduct.php?id=$produkti[id]'>Delete</a></td>
                    
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>

    




<footer><h4 style="text-align: center;" >Copyright @2024</h4></footer>

</body>
</html>
