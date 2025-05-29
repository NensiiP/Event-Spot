<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/secondsection.css"> 
    <title>Seven Seas Party & Lawns</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/hallbook.css">
    <link rel="stylesheet" href="./css/thirdsection.css">
    <style>

    body, html {
      height: 100%;
      width: 100%;
    }

    .navbar {
      position: fixed;
      left: 0;
      height: 60px;
      width: 100%;
      background: rgba(255, 255, 255, 0.46);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      z-index: 1000;
      margin-top: -150px;
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

    @media screen and (max-width: 768px) {
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

        @media (max-width: 478px) {
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
    margin-top:5px ;
  }

  .nav-links li {
    text-align: center;
    padding: 10px 0;
  }

  .logo img{
    height:140px;
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
  
  
    <section class="facilities-section">
  <h1 class="head">≼ Facilities ≽</h1>
        <div class="facility">
            <img src="image/swim1.jpg" alt="Swimming Pool">
            <h3>Swimming Pool</h3>
        </div>

        <div class="facility">
            <img src="image/fground2.jpg" alt="Seating Arrangement">
            <h3>Seating Arrangements</h3>
        </div>

        <div class="facility">
            <img src="image/ffood1.jpg" alt="Food Catering">
            <h3>Catering/Food Services</h3>
        </div>

        <div class="facility">
            <img src="image/parking.jpg" alt="Parking">
            <h3>Parking</h3>
        </div>

        <div class="facility">
            <img src="image/security.jpg" alt="Security">
            <h3>Security</h3>
        </div>

        <div class="facility">
            <img src="image/bridal.jpeg" alt="Bridal-Groom Room">
            <h3>Bridal - Groom Room</h3>
        </div>

        <div class="facility">
            <img src="image/fground1.jpg" alt="Open Ground">
            <h3>Open Ground</h3>
        </div>

        <div class="facility">
            <img src="image/fstage1.jpg" alt="Lighting Decoration">
            <h3>Lighting Decoration</h3>
        </div>

        <div class="facility">
            <img src="image/stagee.jpeg" alt="Stage">
            <h3>Stage</h3>
        </div>

        <div class="facility">
            <img src="image/fhall2.jpg" alt="Halls">
            <h3>Halls</h3>
        </div>

        <div class="facility">
            <img src="image/sound.jpeg" alt="Sound System">
            <h3>Sound System</h3>
        </div>

        <div class="facility">
            <img src="image/event.jpg" alt="Event Management Services">
            <h3>Event Management Services</h3>
        </div>

        <div class="facility">
            <img src="image/play.jpg" alt="Children’s Play Area">
            <h3>Children’s Play Area</h3>
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
