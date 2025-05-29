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
    <title>SevenSeas - Admin</title>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/hall.css">
</head>
<style>
        .hallbox{
            background-color: #d1d7ff;
            padding: 10px;
        }
        
    </style>

<body>
    <div class="addhallsection">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="thall">Type of Hall :</label>
            <select name="thall" class="form-control">
                <option value selected></option>
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

            <label for="price">Hall price:</label>
            <input type="number" name="price" class="form-control">

            <label for="event">Add Image :</label>
            <input type="file" name="file" class="form-control">
        
            <button type="submit" class="btn btn-success" name="addhall">Add Hall</button>
        </form>

        <?php
        if (isset($_POST['addhall'])) {
            $catch = $_FILES['file']['name'];
            $uplod = $_FILES['file']['tmp_name'];
            $target = "image/".$catch;
            move_uploaded_file($uplode, $target);

            $typeofhall = $_POST['thall'];
         $typeofprice = $_POST['price'];

            $sql = "INSERT INTO hall(type,price,image) VALUES ('$typeofhall','$typeofprice','$target')";
            $result = mysqli_query($conn, $sql);

            
            if ($result) {
                header("Location: hall.php");
            }
        }
        ?>
    </div>

    <div class="hall">
        <?php
        $sql = "select * from hall";
        $re = mysqli_query($conn, $sql)
        ?>
        <?php
        while ($row = mysqli_fetch_array($re)) {
           
            echo "<div class='hallbox'>
            <div class='text-center no-boder'>
                <i class='fa fa-home fa-5x'></i>
                <h3>" . $row['type'] . "</h3>
                <div class='mb-1'>" . $row['price'] . "</div>
                <a href='halldelete.php?id=". $row['id'] ."'><button class='btn btn-danger'>Delete</button></a>
            </div>
        </div>";
        }
        ?>
    </div>

</body>

</html>