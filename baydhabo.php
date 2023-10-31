<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baydhabo</title>
		<link rel="stylesheet" href="ITILMAAN1.css">
  </head>
  <body>
	  <header class="head">
	    <img class="sawir1" src="images/logo4.png" alt="">
	    <a class="a ," href="index.php">Home</a>
	    <a class="a" href="about Us.php">About Us</a>
	    <a class="a" href="#">Adeegyo</a>
	    <a class="a , aa" href="#">Talo soo jeedin</a>
	  </header>
	  <hr class="hr">
    <div class="search-box">
      <form method="post">
				<input class="c1" type="text" name="search" placeholder="halkan ku qor">
	    <input class="c2" type="submit" name="submit" placeholder="Baadh">
      </form>
    </div>
  </body>
</html>

<br><br><br> <br><br><br><br>
<?php
$con = new PDO("mysql:host=localhost;dbname=itilmaan", 'root', 'dhuux1234!');

if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `baydhabo` WHERE Name = :name");
    $sth->bindParam(':name', $str);
    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();

    if ($row = $sth->fetch()) {
        ?>
        <br><br><br>
        <table>
            <tr>
                <!-- <th> Name </th> -->
                <!-- <th> decription </th> -->
                <!-- <th> filename </th>-->
            </tr>
            <tr>
                <!-- <td><?php echo '<h6>' . $row->Name . '</h6>'; ?> </td>-->
                <td>
                    <?php
                    $locations = explode(", ", $row->LOCATION);
                    foreach ($locations as $location) {
                        echo $location . "<br>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    $filenames = explode(", ", $row->FILENAME);
                    foreach ($filenames as $filename) {
                      //  echo $filename . "<br>";
                        echo ' <img src="' . $filename . '">';
                    }
                    ?>
                </td>
            </tr>
        </table>

        <?php
    } else {
        echo '<h4>' ." fadlan magaca si sax ah u qor ". '</h4>';

    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
    <style>
      .foot{
        display: flex;
       background-color:black;
       margin-top:355px;
       height: 57px;
     }
     .p3{
       color: white;
       margin-left:  300px;
       margin-top: 22px;
       float: right;

     }
     .a10{
       color: white;
       margin-left: 50px;
     margin-top: 22px;
     text-decoration: none;
     float: left;
     }
     .a10:hover{
       text-decoration: underline;
       color: green;
     }
     .whatlogo2{
       width:25px;
       height: 20px;
       margin-left: 190px;
     margin-top: 13px;
     padding: 5px;
     border:2px solid white;
     border-radius: 100%;

     }
     .whatlogo2:hover{
       background-color: darkgreen;
       transition-timing-function:ease-out;
     }
     .fblogo2{
       width:25px;
       height: 20px;
       margin-left: 25px;
       margin-top: 13px;
       padding: 5px;
       border:2px solid white;
       border-radius: 100%;
     }
     .fblogo2:hover{
       background-color: darkblue;
       transition-timing-function:ease-out;
     }
     </style>
	</head>
	<body>
    <footer class="foot">
    <a class="a10" href="privacy policy.php">Pricay and Policy</a>
    <a class="a10"  href="terms and conditions.php">Terms and Conditions</a>
    <a class="a10"  href="disclaimer.php">Disclaimer</a>
    <a href="https://wa.link/e7jmqw"><img class="whatlogo2" src="images/whatlogo.png" alt=""> </a>
    <a href="#"><img class="fblogo2" src="images/fblogo.png" alt=""> </a>
    <p class="p3">© 2023 Itilmaan | All rights reserved</p>
    </footer>
	</body>
</html>
