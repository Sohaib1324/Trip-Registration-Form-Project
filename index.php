<?php
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if (!$con) {
        die("Connection to database failed: " . mysqli_connect_error());
    }

    // Select the database
    $database = "travel"; 
    mysqli_select_db($con, $database);

    // Get POST data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $ID = isset($_POST['ID']) ? $_POST['ID'] : '';
    $Phone = isset($_POST['Phone']) ? $_POST['Phone'] : '';
    $desc = isset($_POST['desc']) ? $_POST['desc'] : '';

    // Insert query
    $sql = "INSERT INTO `trip` (`name`, `age`, `ID`, `Phone`, `desc`, `Date`) 
            VALUES ('$name', '$age', '$ID', '$Phone', '$desc', current_timestamp());";

    // Execute query and check for success
    if ($con->query($sql) === true) {
        $successMessage = "Your form has been submitted successfully!";
    } else {
        $errorMessage = "Error: $sql <br> $con->error";
    }

    // Close the connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="FAST NUCES">
    <div class="container">
        <h3>Welcome to FAST NUCES Northern Trip</h3>
        <p>Enter your details to confirm participation</p>

        <!-- Only show success message after the form is submitted -->
        <?php if (isset($successMessage)): ?>
            <div class="submitmsg">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>

        <!-- Form only displayed if success message has not been shown -->
        <?php if (!isset($successMessage)): ?>
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="text" name="age" id="age" placeholder="Enter your age">
                <input type="text" name="ID" id="ID" placeholder="Enter your ID">
                <input type="text" name="Phone" id="Phone" placeholder="Enter your phone number">
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
                <button class="btn" type="submit">Submit</button>
            </form>
        <?php endif; ?>
    </div>
    <script src="index.js"></script>
</body>
</html>
