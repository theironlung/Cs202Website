<?php

include('include/config.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) &&
  isset($_POST['message'])) {
    // rest of your code inside here
}

$sql = "SELECT * FROM contact WHERE email = '$email'";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

if(($row['message']==$message) && ($row['email']==$email)){
    ?>
    <script>
        confirm('I have already recieved your message, Enter a New One.');
        window.location = "contact.php";
    </script>

    <?php
}

else{
    $data = "INSERT INTO contact(name, phone, email,
    message) values('$name', '$phone', '$email', '$message')";

    if(mysqli_query($con, $data)){
        ?>
            <script>
                confirm('Message Recieved. <?php echo $name ?>, Thank you!');
                window.location = "contact.php";
            </script>

        <?php
    }
    else{
        ?>
            <script>
                alert('Error, Try Again!');
                window location = "contact.php";
            </script>
        <?php
    }
}

function is_valid_mode($mode) {
  $VALID_MODES = array();
  return in_array($mode, $VALID_MODES);
}

?>
