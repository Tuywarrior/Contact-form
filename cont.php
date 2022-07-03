<?php
$insert=false;
if(isset($_POST['email'])){
  $server="localhost";
  $username="root";
  $password="";

  $con=mysqli_connect($server,$username,$password);

  if(!$con){
    die("connection to this database failed due to".msqli_connect_error());

  }
  // echo "Success connecting to the db";

  $email=$_POST['email'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $address=$_POST['address'];
  $sql="INSERT INTO `growthscribe`.`form` (`email`, `firstname`, `lastname`, `address`, `dt`) VALUES ( '$email', '$firstname', '$lastname', '$address', current_timestamp());";
  // echo "Inserted";

  if($con->query($sql)==TRUE){
    $insert=true;
    // echo "Successfully inserted";
  }
  else echo "ERROR: $sql <br> $con->error";

  $con->close();
}
?>
<!-- INSERT INTO `form` (`sno`, `email`, `first name`, `last name`, `address`, `dt`) VALUES ('1', 'aadityar5802@gmail.com', 'Aaditya', 'Rathi', '221B, Baker Street,London Nw1', current_timestamp()); -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&family=Rubik:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php
    if($insert==true)
    echo "<h1>Thanks for Submitting!</h1>";
    ?>
    <div class="container">
      <div class="left_side">
        <p class="top">
          Get Everything You Need <br />
          For creating WordPress <br />Websites.
        </p>
        <img src="left_img.png" />
        <p class="bottom">
          All in one Multifuncitonal Subscribe <br />Servive Perfect For
          Launching All kinds of <br />Wordpress Projects!
        </p>
      </div>
      <div class="right_side">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="cross"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M6 18L18 6M6 6l12 12"
          />
        </svg>
        <h2>SUBSCRIBE AND GET <br />YOUR BONUS!</h2>
        <form action="cont.php" method="post">
          <input
            type="email"
            name="email"
            class="email"
            placeholder="Email address"
          />
          <input
            type="text"
            name="firstname"
            class="fname"
            placeholder="First Name"
          />
          <input
            type="text"
            name="lastname"
            class="lname"
            placeholder="Last Name"
          />
          <input
            type="text"
            name="address"
            class="address"
            placeholder="Address"
          />
          <button type="submit">STAY UPDATED</button>
        </form>
        <div class="end">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="lock"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
            />
          </svg>
          <p>Your information will never be shared with any third party</p>
        </div>
      </div>
    </div>
  </body>
</html>
