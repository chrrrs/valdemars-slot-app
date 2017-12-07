<?php

// get data from data.json
function getData() {
  $json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/valdemars_slot_app/data.json');
  $data = json_decode($json, true);
  return $data;
}

//get user data
function getUser() {
  $json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/valdemars_slot_app/users.json');
  $data = json_decode($json, true);
  return $data;
}

//create a new user to user.json
function createUser() {
  $email = $_POST['signupEmail'];
  $username = $_POST['signupUsername'];
  $password = $_POST['signupPassword'];
  $ential_code = $_POST['signupEmail'];

  $length = strlen($ential_code);
  $code = alphaNumeric($length);

  $routes = getData();
  $game = $routes['app_routes'];

  $data = [
    'email' => $email,
    'username' => $username,
    'password' => $password,
    'code' => $code,
    'routes' => $game
  ];

  $users = getUser();
  $users[] = $data;

  putUser($users);
}

//creates a numeric code based on the length of a given variable
function alphaNumeric($length) {
  $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  $clen   = strlen( $chars )-1;
  $code  = '';

  for ($i = 0; $i < $length; $i++) {
    $code .= $chars[mt_rand(0,$clen)];
  }
  return ($code);
}

//send user data to
function putUser($users) {
  $json = json_encode($users);
  file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/valdemars_slot_app/users.json', $json);
}

// display cards with id
function cardDisplay() {
  $id = 0;

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  $pages = getData();

  if($reversed = true) {
    $pages = array_reverse($pages);
  }

  return $pages[$id];
}


?>
