

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regjistrohu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Regjistrohu.css">

    <script>
    function validateLoginForm() {
        var emri = document.getElementById("emri").value;
        var mbiemri = document.getElementById("mbiemri").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var passwordP = document.getElementById("passwordP").value;

        var error = document.getElementById("error");

        let emriRegex = /[a-zA-Z]{2,10}$/;
        let mbiemriRegex = /[a-zA-Z]{2,10}$/;
        let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
        let passwordRegex = /(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/;

        // Initialize an empty error message
        var errorMessage = "";

        if (!emriRegex.test(emri)) {
            errorMessage += 'Emri jo Valid! ';
        }

        if (!mbiemriRegex.test(mbiemri)) {
            errorMessage += 'Mbiemer jo Valid! ';
        }

        if (!emailRegex.test(email)) {
            errorMessage += 'Email jo Valid! ';
        }

        if (!passwordRegex.test(password)) {
            errorMessage += 'Passwordi Duhet te Permbaje Shkronja dhe Numra! ';
        }

        if (passwordP != password) {
            errorMessage += 'Passwordi duhet te jete i njejt! ';
        }

        // Display the accumulated error messages
        error.innerHTML = errorMessage;

        // If there are any error messages, prevent form submission
        return errorMessage === "";
    }
</script>




   
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
                <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"  onsubmit="return validateLoginForm()">
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

                <button type="submit" name="submit">Regjistrohu</button>
                <a href="Login.php" class="pallogari" style="margin-left: 100px;">Keni LLogari?</a>

            </div>
            </form>
            <?php 
            include_once 'controller/registerController.php';
          
            ?>
            
            </div>
        </div>
    </div>

   



    
</body>
</html>
    
</body>
</html>