<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $password= ($_POST['password']);

    $conn = new mysqli("localhost", "root", "", "luxeliving");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email already exists
    $checkEmailQuery = "SELECT * FROM userat WHERE email = '$email'";
    $checkEmailResult = $conn->query($checkEmailQuery);

    if ($checkEmailResult->num_rows > 0) {
        echo "<h2>Error: This email is already registered.</h2>";
    } else {
        // Insert data into the database
        $insertQuery = "INSERT INTO userat (emri, mbiemri, email, password) VALUES ('$emri', '$mbiemri','$email', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "<h2>Form submitted successfully!</h2>";

            $newUser = [
                "emri" => $emri,
                "mbiemri" => $mbiemri,
                "email" => $email,
                "password" => $password,
                "admin" => false
            ];
        
            include "users.php";
            $users[] = $newUser;  
            $usersFile = fopen("users.php", "w");
            fwrite($usersFile, "<?php\n\n\$users = " . var_export($users, true) . ";\n\n?>");
            fclose($usersFile);

            $_SESSION['email'] = $email;                    
            $_SESSION['emri'] = $emri;
            $_SESSION['mbimeri'] = $mbimeri;
            $_SESSION['admin'] = false;
            $_SESSION['logged'] = true;
            header('Location: Login.php');
         
        
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }

    $conn->close();
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regjistrohu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Regjistrohu.css">
</head>
<body>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <nav  class="zone">
        <ul class="main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Projektet.php">Projektet</a></li>
            <li><a href="Sherbimet.php">Sherbimet</a></li>
            <li><a href="RrethNesh.php">Rreth Nesh</a></li>
            <li class="push"><a href="Login.php">Login</a></li>


        </ul>
    </nav>


    <div class="Regjistrohu">
        <div class="countiner">


            <div class="Regjistrohu-elemnts">
           <h1 style="text-align: center;padding-top: 30px;">LuxeLiving</h1>
                <div id="error" style="display: flex;justify-content: center;color: red;"></div>
           <div class="regjistrohu-form">
                <form form action="" method="post" >
                    <label >Emri</label> <br>
                    <input type="text"   id="emri"  name="emri"><br>

                    <label>Mbiemri</label> <br>
                    <input type="text"   id="mbiemri" name="mbiemri" ><br>


                <label >Emaili:</label> <br>
                <input type="text"  id="email" name="email"><br>

                
                <label >Password:</label> <br>
                <input type="password"  id="password" name="password"><br>

                <label >Perserit Passwordin:</label> <br>
                <input type="password"  id="passwordP" name="cpassword" ><br>

                <button type="submit" onclick="validateLoginForm()" name="submit">Regjistrohu</button>
                <a href="Login.php" class="pallogari" style="margin-left: 100px;">Keni LLogari?</a>

            </div>
            </form>
            </div>
        </div>
    </div>

    <script>
        function validateLoginForm(){
            var emri = document.getElementById("emri").value;
            var mbiemri=document.getElementById("mbiemri").value;
            var email=document.getElementById("email").value;
            var password=document.getElementById("password").value;
            var passwordP = document.getElementById("passwordP").value;

            var error =document.getElementById("error");

        /*  if(emri == "" || mbiemri== ""|| email=="" || passwordP==""){
                alert('Duhet te plotesoni të gjitha fushat');
                return;
            } */


            let emriRegex = /[a-zA-Z]{2,10}$/;
            let mbiemriRegex = /[a-zA-Z]{2,10}$/;
            let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
            let passwordRegex = /(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/


            

if(!emriRegex.test(emri)){
    error.innerHTML = 'Emri jo Valid! ';
    return false;
}

if(!mbiemriRegex.test(mbiemri)){
    error.innerHTML = 'Mbiemer jo Valid! ';
    return;
}

if(!emailRegex.test(email)){
    error.innerHTML = 'Email jo Valid! ';
    return;
}

if(!passwordRegex.test(password)){
    error.innerHTML = 'Passwordi Duhet te Permbaje Shkronja dhe Numra! ';
    return;
}

if(passwordP!=password){
    error.innerHTML = 'Passwordi duhet te jete i njejt!';
    return;
}
alert('U regjistruat me Sukses!');

    document.getElementById("emri").value = "";
    document.getElementById("mbiemri").value = "";
    document.getElementById("email").value = "";
    document.getElementById("password").value = "";
    document.getElementById("passwordP").value = "";

   
    
    error.innerHTML = "";

}



    </script>

    
</body>
</html>
    
</body>
</html>