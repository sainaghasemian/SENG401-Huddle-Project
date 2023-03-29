<?php
function verifyLogin($pdo, $username, $password) {
    $result = $pdo->query("SELECT 1 FROM User WHERE UserID = '$username' AND Password = '$password'");
    return $success = $result->fetch(PDO::FETCH_ASSOC);
}
?>
