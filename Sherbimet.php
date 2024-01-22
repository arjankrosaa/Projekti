<?php
  session_start();
  $hide="";
  
  if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "admin") {
        $hide = "";
    } else {
        $hide = "hide";
    }
} else {
    $hide = "hide";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "email" key exists in the $_POST array
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        $conn = new mysqli("localhost", "root", "", "luxeliving");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO subscribe (email) VALUES ('$email')"; // Enclose $email in single quotes

        if ($conn->query($sql) === TRUE) {
            echo "Form submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}















?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sherbimet</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Sherbimet.css">
</head>
<body>
    <style>
    .hide{
        display: none;
    }
    </style>
    <nav  class="zone">
        <ul class="main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Projektet.php">Projektet</a></li>
            <li><a href="#">Sherbimet</a></li>
            <li><a href="RrethNesh.php">Rreth Nesh</a></li>
            
            <?php if (!isset($_SESSION['email'])) : ?>
                <li class="push"><a href="Login.php">Login</a></li>
            <?php else : ?>
                <li class="push"><a href="logout.php">Logout</a></li>
            <?php endif; ?>

            <li><a href="dashboard.php" class="<?php echo $hide?>" >Dashboard</a></li>


        </ul>
    </nav>

    <div class="hero-sher">
            <div class="hero-elements-sher">
                <h1 class="title-sher" id="first-title-sher">Sherbimet Tona!</h1>
                
        </div>
    </div>




    <div class="services" id="sherbimet">
        <div class="container">
         <h1>-Sherbimet-</h1> 
            <div class="cards">
                <!------KOLONA E 1-->
                <div class="card">
                    <div class="front">
                        <img src="img/closet (1).png" alt="Kuzhina">
                        <h2>Kuzhina</h2>
                    </div>
                    <div class="back">
                        <p>Kuzhina eshte Zemra e Shtepis!!!</p>
                    </div>
                </div>
                <!------KOLONA E 2-->

                <div class="card">
                    <div class="front">
                        <img src="img/closet (3).png" alt="dhoma e gjunmit">
                        <h2>Dhoma e gjunmit</h2>
                    </div>
                    <div class="back">
                        <p>Dhoma e gjumit eshte vendi ku trupi gjen pushimi e duhur!!!</p>
                    </div>
                </div>

                  <!------KOLONA E 3-->
                <div class="card">
                    <div class="front">
                        <img src="img/closet (2).png" alt="Dhoma e Ndejes">
                        <h2>Komodina</h2>
                    </div>
                    <div class="back">
                        <p>Dhoma e ndejes vendi ku qendrojm(komodina)!!!</p>
                    </div>
                </div>




                 <!------KOLONA E 4-->
                 <div class="card">
                    <div class="front">
                        <img src="img/closet.png" alt="te ndryshme">
                        <h2>Te ndryshme</h2>
                    </div>
                    <div class="back">
                        <p>Ju jepni ide ne e kryejm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    





    <div class="Footer">
        <div class="footer-rresht">
            <div class="footer-kolon">
                <h4>Info</h4>
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="Projektet.php">Projektet</a></li>
                    <li><a href="Sherbimet.php">Sherbimet</a></li>
                    <li><a href="RrethNesh.php">Reth-Nesh</a></li>
                </ul>
            </div>

            <div class="footer-kolon">
                <h4>Account</h4>
                <ul class="links">
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="Regjistrohu.php">Regjistrohu</a></li>
                </ul>
            </div>

            <div class="footer-kolon">
                <h4>Legal</h4>
                <ul class="links">
                  <li><a href="#">Customer Agreement</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Media Kit</a></li>
                </ul>
              </div>

               <div class="footer-kolon">
                <h4>Newsletter</h4>
                <p>
                  Subscribe to our newsletter for a weekly dose
                  of news, updates, helpful tips, and
                  exclusive offers.
                </p>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                            <input type="text" name="email" placeholder="Your email" required>
                            <button type="submit" name="subscribe">SUBSCRIBE</button>
              </form>
                <img src="img/instagram.png" alt="" style="width: 50px;cursor: pointer; margin-top: 40px;">
                <img src="img/facebook (1).png" alt="" style="width: 50px;cursor: pointer;">
                <img src="img/whatsapp.png" alt="" style="width: 50px;cursor: pointer;">

              </div>


        </div>
    </div>

<script src="index.js"></script>
</body>
</html>