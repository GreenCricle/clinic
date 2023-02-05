<!doctype html>
<html lang="en">

<head>
  <title>Clinic</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <?php include 'connection.php'?>


</head>

<body>
  <header>
    <!-- place navbar here -->
    
  </header>
  <main>

  <div class="container">
  <h2>Book an Appointment</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="contact">Contact Number:</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter contact number" name="contact">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
    <div class="form-group">
      <label for="time">Time:</label>
      <input type="time" class="form-control" id="time" placeholder="Enter time" name="time">
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter date" name="date">
    </div>
    <div class="form-group">
      <label for="treatment">Treatment Type:</label>
      <input type="text" class="form-control" id="treatment" placeholder="Enter treatment type" name="treatment">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php

if (isset($_POST['username']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['time']) && isset($_POST['date']) && isset($_POST['treatment'])) {
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $treatment = $_POST['treatment'];


    // Insert the form data into the database
    $sql = "INSERT INTO user (username, contact, address, time, date, type)
            VALUES ('$username', '$contact', '$address', '$time', '$date', '$treatment')";

    if (mysqli_query($conn, $sql)) {
        echo "Appointment booked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>



  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>