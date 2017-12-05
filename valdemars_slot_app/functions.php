<?php

// get data from data.json
function getData() {
  $json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/valdemars_slot_app/data.json');
  $data = json_decode($json, true);
  return $data;
}

//save a new user to user.json


?>
