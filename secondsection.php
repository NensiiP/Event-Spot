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
    <style>
      /* header.css  ;*/
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

      .guestdetailpanelform {
    width: 95%;
    height: auto;
  }

  .middle {
    flex-direction: row;
    flex-wrap: nowrap;
  }

  .middle .guestinfo,
  .middle .reservationinfo {
    width: 100%;
    padding: 15px;
  }

  .guestdetailpanelform .head h3 {
    font-size: 22px;
  }

  input, .selectinput {
    font-size: 14px;
    padding: 8px 12px;
  }

  .datesection {
    flex-direction: row;
    gap: 10px;
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

      .guestdetailpanelform {
    width: 95%;
    height: auto;
  }

  .middle {
    flex-direction: row;
    flex-wrap: nowrap;
  }

  .middle .guestinfo,
  .middle .reservationinfo {
    width: 100%;
    padding: 15px;
  }

  .guestdetailpanelform .head h3 {
    font-size: 22px;
  }

  input, .selectinput {
    font-size: 14px;
    padding: 8px 12px;
  }

  .datesection {
    flex-direction: row;
    gap: 10px;
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

  .head{
    padding-top:50px;
  }

  .logo img{
    height:140px;
  }

  @media (max-width: 478px) {
  .guestdetailpanelform {
    width: 95%;
    height: auto;
    padding: 10px;
    overflow-y: auto;  /* Allow scroll if content slightly exceeds screen */
  }

  .middle {
    flex-direction: column;
    height: auto;
  }

  .middle .guestinfo,
  .middle .reservationinfo {
    width: 100%;
    padding: 10px 5px;
  }

  .line {
    display: none;
  }

  input,
  .selectinput {
    width: 100%;
    padding: 8px;
    font-size: 14px;
    margin: 5px 0;
  }

  .guestdetailpanelform .head h3 {
    font-size: 18px;
    text-align: center;
    left: 0;
    width: 100%;
  }

  .datesection {
    flex-direction: column;       /* Stack vertically */
    width: 100%;                  /* Ensure full width */
    gap: 5px;
    padding-bottom:45px ;
  }

  .datesection span {
    width: 100%;                  /* Full width inputs */
    display: block;
  }

  .footer {
    justify-content: center;
    
    display: flex;
    margin-top: 20px;
  }

  .footer button {
    width: 100%;
    max-width: 200px;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    position: fixed;
  }
}

}
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
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
  
<!-- bookbox -->
<div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                    <input type="text" name="Name" placeholder="Enter Full name">
                    <input type="email" name="Email" placeholder="Enter Email">

                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput">
						            <option value selected >Select your country</option>
                        <?php
                          foreach($countries as $key => $value):
                          echo '<option value="'.$value.'">'.$value.'</option>';
                                        //close your tags!!
                          endforeach;
                        ?>
                    </select>
                    <input type="text" name="Phone" placeholder="Enter Phoneno">
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation information</h4>
       
                    <select name="HallType" class="selectinput">
						            <option value selected >Type Of Hall</option>
                        <option value="Birthday Hall">Birthday Hall</option>
                        <option value="Event Hall">Event Hall</option>
						            <option value="Haldi Hall">Haldi Hall</option>
						            <option value="Dandiya Night">Dandiya Night</option>
                        <option value="Baby Shower Hall">Baby Shower Hall</option>
                        <option value="NamKaran">NamKaran</option>
                        <option value="Engagement Hall">Engagement Hall</option>
                        <option value="Mahendi Hall">Mahendi Hall</option>
                        <option value="Marrige Hall">Marrige Hall</option>
                    </select>


                    <input type="text" name="Event" placeholder="Enter Your Event">
                                     
                    <select name="Food" class="selectinput">
						            <option value selected >Food</option>
                        <option value="hall only">Gujarati</option>                        
                        <option value="Panjabi">Panjabi</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Italian">Italian</option>
                        <option value="South Indian">South Indian</option>
                    </select>

                    <div class="datesection">
                        <span>
                            <label for="cin"> Check-In</label>
                            <input name="cin" type ="date">
                        </span>
                        <span>
                            <label for="cin"> Check-Out</label>
                            <input name="cout" type ="date">
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>

        <!-- ==== hall book php ====-->
        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $HallType = $_POST['HallType'];
                $Event = $_POST['Event'];            
                $Food = $_POST['Food'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == "" || $Email == "" || $Country == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                    $sta = "NotConfirm";
                    $sql = "INSERT INTO hallbook(Name,Email,Country,Phone,HallType,Event,Food,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$HallType','$Event','$Food','$cin','$cout','$sta',datediff('$cout','$cin'))";
                    $result = mysqli_query($conn, $sql);

                    
                        if ($result) {
                            echo "<script>swal({
                                title: 'Reservation successful',
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
          </div>

    </div>
  </section>


<section id="secondsection"> 
    <img src="./image/homeanimatebg.svg">
    <div class="ourhall">
      <h1 class="head">≼ Our Halls ≽</h1>

      <?php
       $conn=mysqli_connect("localhost","root","","sevenseas");
       $query="SELECT * FROM `hall`";
       $queary_execut=mysqli_query($conn,$query);
       $row=mysqli_num_rows($queary_execut);

       echo "<div class='hallselect mt-5'>"; // Start the first row

       for ($i = 1; $i <= $row; $i++) {
           $fetch = mysqli_fetch_row($queary_execut);
       
           echo "<div class='hallbox'>
                 <div class='hotelphoto' style='background-image: url(\"$fetch[3]\");'></div>
                 <div class='halldata'>
                   <h2>$fetch[1]</h2>
                     <h2>Rs. $fetch[2]</h2>
                   
                   <button class='btn btn-primary bookbtn' onclick='openbookbox()'>Book</button>
                 </div>
               </div>";
       
           // Close the row after 6 cards
           if ($i % 5 == 0 && $i < $row) {
               echo "</div><div class='hallselect mt-5'>"; // Start a new row
           }
       }
      
       echo "</div>"; 
            ?>
      
    
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

<script>

    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () =>{
      bookbox.style.display = "flex";
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>

</html>