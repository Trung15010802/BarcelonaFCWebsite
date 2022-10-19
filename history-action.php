<?php
include 'database-connection.php';
$email = $_POST["email"];
$sql = "SELECT * FROM `feedback` WHERE email = '$email'";
$result = $conn->query($sql);
$check = true;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $name = $row["username"];
        $text = $row["text"];
    }
} else {
    $check = false;
}
if ($name == null)
    $name = 'Anonymous';
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/history-action.css">
    <title>Feedback review</title>
</head>

<body>
    <div class="main">
        <div class="content">
            <?php
            if (!$check)
                echo '<h1>Email not Found</h1>!';
            else {
                echo '<h1>Thank You For Your Feedback </h1>';
                echo '<div class="name">Name: ' .  $name . '</div>
                <div class="email">Email: ' . $email . '</div>
                <div class="feedback">Feedback: '  . $text . ' </div>';
            }
            ?>

        </div>
    </div>
</body>

</html>