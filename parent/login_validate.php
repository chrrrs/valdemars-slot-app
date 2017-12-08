<!-- Check if username and password match a user in user.json if true send them to the app if not, redirect and give them a message-->
<<?php

  include('../functions.php');

  $users = getUser();


    if($_POST['username'] === 'Admin' AND $_POST['password'] === 'Admin123') {
      header('Location: map_viewer.php');
    } else {
      header('Location: login_email.php');
    }


?>
