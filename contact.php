<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){
 
}else{
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact.css"> 
    <title>Seven Seas Party & Lawns</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Cookie&family=Poppins:wght@600&display=swap');

:root {
    --bg-text-shadow: 0 2px 4px rgb(13 0 77 / 8%), 0 3px 6px rgb(13 0 77 / 8%), 0 8px 16px rgb(13 0 77 / 8%);
    --bg-box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.621);
}
*::-webkit-scrollbar{
    width: .4rem;
}
*::-webkit-scrollbar-track{
    background: rgb(6, 6, 44);
}
*::-webkit-scrollbar-thumb{
    background: #0040ff;
}

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

        body {
    background: url('./image/halll.jpg') no-repeat center center/cover;
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;   
}

         body, html {
      margin: 0;
    padding: 0;
    min-height: 100%;
  }

    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      height: 60px;
      width: 100%;
      background: rgba(255, 255, 255, 0.46);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      z-index: 1000;
      margin-top: 0.1px;
    }

    .logo {
    height: 300%;
    display: flex;
    justify-content: center;
    margin-top: -60px;
}

    .logo img {
      height: 160px;
    }

    .toggle {
      font-size: 28px;
      background: none;
      border: none;
      display: none;
      cursor: pointer;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 20px;
      margin-top: -50px;
    }

    .nav-links li a,
    .nav-links li button {
      text-decoration: none;
      color: black;
      background: none;
      border: none;
      font-size: 16px;
      cursor: pointer;
    }

    .nav-links li button.btn {
      padding: 5px 10px;
      background: crimson;
      color: white;
      border-radius: 4px;
    }

            .contact-container {
  background: rgba(65, 65, 38, 0.53);
  color: white;
  padding: 30px;
  border-radius: 12px;
  width: 100%;
  max-width: 450px;
  box-sizing: border-box;
  text-align: center;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
  margin-top: 150px;
  
}

.contact-container input,
.contact-container textarea,
.contact-container button {
  width: 100%;
  margin: 8px 0;
  padding: 10px;
  border: none;
  border-radius: 6px;
  box-sizing: border-box;
  font-size: 12px;
}

.contact-container input,
.contact-container textarea {
  background: #f0f0f0;
  color: #333;
}

.contact-container button {
  background: #0099ff;
  color: white;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s ease;
}

.contact-container button:hover {
  background: #0077cc;
}

/* 📱 Mobile: max 478px */
@media (max-width: 478px) {
body {
    align-items: flex-start;
    padding-top: -10px;
    padding-bottom: 20px;
  }
.navbar {
    flex-direction: column;
    align-items: flex-start;
  }

  .nav-links {
    display: none;
    flex-direction: column;
    width: 100%;
    background-color: red;
  }

  .nav-links.active {
    display: flex;
  }

  .toggle {
    display: block;
    padding-top:50px ;
  }

  .nav-links li {
    text-align: center;
    padding: 10px 0;
  }

  .logo img{
    height:140px;
  }    
  .contact-container {
    padding: 5px;
    max-width: 90%;
    margin: 20px auto;
    width: 100%;
    font-size:13px;
    
   }
.center-wrapper {
    align-items: flex-start;
    
  }
  .contact-container h2 {
    font-size: 18px;
  }

  .contact-container input,
  .contact-container textarea,
  .contact-container button {
    font-size: 12px;
  }
}

/* 📲 Tablet: max 768px */
@media (max-width: 768px) {
    .toggle {
        display: block;
        margin-top: -50px;
      }

      .nav-links {
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        flex-direction: column;
        background: rgba(255, 255, 255, 0.95);
        display: none;
        padding: 10px 0;
      }

      .nav-links.active {
        display: flex;
      }

      .nav-links li {
        text-align: center;
        padding: 10px 0;
        
      }

  .contact-container {
    /* max-width: 60%; */
    padding: 20px;
    margin-top:70px;
  }

  .contact-container h2 {
    font-size: 22px;
  }
}

/* 💻 Desktop: min 769px */
@media (min-width: 769px) {
    .nav-links {
        display: flex !important;
        flex-direction: row;
        position: static;
        background: none;
      }

      .nav-links li {
        padding: 0;
      }

  .contact-container {
    max-width: 450px;
    margin-top:100px;
  }
}
</style>
</head>

<body>
<nav class="navbar">
    <div class="logo">
      <img src="./image/logo.png" alt="logo" />
    </div>
    <button class="toggle" id="toggleBtn">&#9776;</button>
    <ul class="nav-links" id="navLinks">
      <li><a href="home.php">Home</a></li>
      <li><a href="secondsection.php">Halls</a></li>
      <li><a href="thirdsection.php">Facilities</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="logout.php"><button class="btn">Logout</button></a></li>
    </ul>
  </nav>
<div class="center-wrapper">
    <div class="contact-container">
  <div class="contact-info">
    <p><strong>Address:</strong> Krishna Plot, Radhe Street, Rajkot</p>
    <p><strong>Phone:</strong> +91 9512368740</p>
    <p><strong>Email:</strong> sevenseas@gmail.com</p>
  </div>

  <form action="" method="POST" class="contact-form">
    <h2>Contact Us</h2>
    <input type="text" name="Name" placeholder="Name" required>
    <input type="email" name="Email" placeholder="Email Address" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="text" name="Subject" placeholder="Subject" required>
    <textarea placeholder="Message" name="Message" required></textarea>
    <button type="submit" name="querysend">Send</button>
  </form>
</div>
</div>
</body>
</html>



<?php    
 
if (isset($_POST['querysend'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $Subject = $_POST['Subject'];            
    $Message = $_POST['Message'];

    if($Name == "" || $Email == "" || $phone == ""){
        echo "<script>swal({
            title: 'Fill the proper details',
            icon: 'error',
        });
        </script>";
    }
    else{
        $sta = "NotConfirm";
        $sql = "INSERT INTO contact(Name,Email,phone,Subject,Message) VALUES ('$Name','$Email','$phone','$Subject','$Message')";
        $result = mysqli_query($conn, $sql);

        
            if ($result) {
                echo "<script>swal({
                    title: 'Message send successfully',
                    icon: 'success',
                });
            </script>";
            } else {
                echo "<script>swal({
                        title: 'Something went wrong',
                        icon: 'error',
                    });
            </script>";
            }
    }
}
?>
