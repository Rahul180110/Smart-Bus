<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['eml'];
    $pswrd = $_POST['pass'];

    $db = mysqli_connect('localhost', 'root', '', 'online_bus') or die("Could not connect to Database");

    // Using prepared statements for security
    $stmt = $db->prepare("SELECT * FROM user__details WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $name, $pswrd);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Redirect to landing_page.php
        header('Location: landing_page.php');
        exit();
    } else {
        echo "<font size='5' color='red'>Invalid user ID or password</font>";
    }

    $stmt->close();
    $db->close();
}
?>
