<?php
include "config.php";

if($stmt = $con->prepare('SELECT * FROM users WHERE username = ? AND password = ?')){
    $stmt->bind_param('ss', $_POST['username'], $_POST['password']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
        header('Location: panel.php');
    }else {
        echo 'Incorrect Credentials!';
    }
}
?>