<?php
session_start();
include '../config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./css/hallbook.css">
    <title>SevenSeas - Admin</title>
</head>

<body>
    <!-- guestdetailpanel -->

    <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="adduserclose()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                    <input type="text" name="Name" placeholder="Enter Full name" required>
                    <input type="email" name="Email" placeholder="Enter Email" required>

                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput" required>
						<option value selected >Select your country</option>
                        <?php
							foreach($countries as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';                      
							endforeach;
						?>
                    </select>
                    <input type="text" name="Phone" placeholder="Enter Phoneno" required>
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
						<<option value selected >Food</option>
                        <option value="Gujaratis">Gujarati</opion>                        
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

        <?php       
        // <!-- hall availablity start-->

        $rsql ="select * from hall";
        $rre= mysqli_query($conn,$rsql);
        $h = 0;
        $birht = 0;
        $event = 0;
        $haldi = 0;
        $dandiya = 0;
        $baby = 0;
        $namkaran = 0;
        $engage = 0;
        $mahendi = 0;
        $marrige = 0;

        while($hrow=mysqli_fetch_array($rre))
        {
            $h = $h + 1;
            $s = $hrow['type'];
            if($s=="Birthday Hall")
            {
                $birth = $birth+ 1;
            }
            if($s=="Event Hall")
            {
                $event = $event + 1;
            }
            if($s=="Haldi Hall" )
            {
                $haldi = $haldi + 1;
            }
            if($s=="Dandiya Night" )
            {
                $dandiya = $dandiya + 1;
            }
            if($s=="Baby Shower Hall" )
            {
                $baby = $baby + 1;
            }
            if($s=="NamKaran" )
            {
                $namkaran = $namkaran + 1;
            }
            if($s=="Engagement Hall" )
            {
                $engage = $engage + 1;
            }
            if($s=="Mahendi Hall" )
            {
                $mahendi = $mahendi + 1;
            }
            if($s=="Marrige Hall" )
            {
                $marrige = $marrige + 1;
            }
        }

       
        // hall availablity
        // Birthday Hall =>
        $f1 =$birth - $cbirth;
        if($f1 <=0 )
        {	
            $f1 = "NO";
        }
        // Event Hall =>
        $f2 =  $event -$cevent;
        if($f2 <=0 )
        {	
            $f2 = "NO";
        }
        // Haldi Hall =>
        $f3 =$haldi - $chaldi;
        if($f3 <=0 )
        {	
            $f3 = "NO";
        }
        // Dandiya Night =>
        $f4 =$dandiya - $cdandiya; 
        if($f4 <=0 )
        {	
            $f4 = "NO";
        }
        //Baby Shower Hall =>
        $f5 =$baby - $cbaby;
        if($f5 <=0 )
        {	
            $f5 = "NO";
        }
        // Namkaran Hall =>
        $f6 =  $namkaran -$cnamkaran;
        if($f6 <=0 )
        {	
            $f6 = "NO";
        }
        // Engagement Hall =>
        $f7 =$engage - $cengage;
        if($f7 <=0 )
        {	
            $f7 = "NO";
        }
        // Mahendi Hall =>
        $f8 =$mahendi - $cmahendi; 
        if($f8 <=0 )
        {	
            $f8 = "NO";
        }
         // Marrige Hall =>
         $f9 =$marrige - $cmarrige; 
         if($f9 <=0 )
         {	
             $f9 = "NO";
         }

        //total available hall =>
        $f10 =$h-$ch; 
        if($f10 <=0 )
        {
            $f10 = "NO";
        }
        ?>
        <!-- hall availablity end-->

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

                    if($f1=="NO")
                    {
                        echo "<script>swal({
                            title: 'Birthday Hall is not available',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else if($f2=="NO")
                    {
                        echo "<script>swal({
                            title: 'Event Hall is not available',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else if($f3 == "NO")
                    {
                        echo "<script>swal({
                            title: 'Haldi Hall is not available',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else if($f4 == "NO")
                    {
                        echo "<script>swal({
                            title: 'Dandiya Hall is not available',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else if($f5 == "NO")
                    {
                        echo "<script>swal({
                            title: 'Baby Shower Hall is not available',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else if($f6 == "NO")
                    {
                        echo "<script>swal({
                            title: 'Namkaran Hall is not available',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else if($f7 == "NO")
                    {
                        echo "<script>swal({
                            title: 'Engagement Hall is not available',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else if($f8 == "NO")
                    {
                        echo "<script>swal({
                            title: 'Mahendi Hall is not available',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else if($f9 == "NO")
                    {
                        echo "<script>swal({
                            title: 'Marrige Hall is not available',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else if($result = mysqli_query($conn, $sql))
                    {
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
            }
        ?>
    </div>

    
    <!-- ================================================= -->
    <div class="searchsection">
        <input type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
        <form action="./exportdata.php" method="post">
            <button class="exportexcel" id="exportexcel" name="exportexcel" type="submit"><i class="fa-solid fa-file-arrow-down"></i></button>
        </form>
    </div>

    <div class="hallbooktable" class="table-responsive-xl">
        <?php
            $hallbooktablesql = "SELECT * FROM hallbook";
            $hallbookresult = mysqli_query($conn, $hallbooktablesql);
            $nums = mysqli_num_rows($hallbookresult);
        ?>
        <table class="table table-bordered" id="table-data">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Type of Hall</th>
                    <th scope="col">Type of Event</th>
                    <th scope="col">Food</th>
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">No of Day</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="action">Action</th>
                </tr>
            </thead>

            <tbody>
            <?php
            while ($res = mysqli_fetch_array($hallbookresult)) {
            ?>
                <tr>
                    <td><?php echo $res['id'] ?></td>
                    <td><?php echo $res['Name'] ?></td>
                    <td><?php echo $res['Email'] ?></td>
                    <td><?php echo $res['Country'] ?></td>
                    <td><?php echo $res['Phone'] ?></td>
                    <td><?php echo $res['HallType'] ?></td>
                    <td><?php echo $res['Event'] ?></td>
                    <td><?php echo $res['Food'] ?></td>
                    <td><?php echo $res['cin'] ?></td>
                    <td><?php echo $res['cout'] ?></td>
                    <td><?php echo $res['nodays'] ?></td>
                    <td><?php echo $res['stat'] ?></td>
                    <td class="action">
                        <?php
                            if($res['stat'] == "Confirm")
                            {
                                echo " ";
                            }
                            else
                            {
                                echo "<a href='hallconfirm.php?id=". $res['id'] ."'><button class='btn btn-success'>Confirm</button></a>";
                            }
                        ?>
                        <a href="hallbookedit.php?id=<?php echo $res['id'] ?>"><button class="btn btn-primary">Edit</button></a>
                        <a href="hallbookdelete.php?id=<?php echo $res['id'] ?>"><button class='btn btn-danger'>Delete</button></a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
<script src="./javascript/hallbook.js"></script>



</html>
