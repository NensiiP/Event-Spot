<!-- <?php 

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}

?>-->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Seven Seas Party & Lawns</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cookie&family=Poppins:wght@600&display=swap');

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
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body, html {
      height: 100%;
      width: 100%;
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
    }

    .logo {
    height: 300%;
    display: flex;
    justify-content: center;
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

    .hero {
      height: 100vh;
      width: 100%;
      background: url('./image/halll.jpg') no-repeat center center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 60px;
    }

    .welcome h1 {
      font-size: 110px;
      color: white;
      text-align: center;
      font-family: 'Cookie', cursive;
      background: -webkit-linear-gradient(317deg, rgba(0, 60, 255, 0.81), rgb(255, 0, 123));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      padding: 10px;
    }

    @media screen and (max-width: 768px) {
      .toggle {
        display: block;
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

      .welcome h1 {
        font-size: 8vw;
      }
    }

    @media screen and (min-width: 769px) {
      .nav-links {
        display: flex !important;
        flex-direction: row;
        position: static;
        background: none;
      }

      .nav-links li {
        padding: 0;
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

  <section class="hero">
    <div class="welcome">
      <h1>Welcome to celebration station..!!</h1>
    </div>
  </section>

  <script>
    const toggleBtn = document.getElementById("toggleBtn");
    const navLinks = document.getElementById("navLinks");

    toggleBtn.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });
  </script>
</body>
</html>
