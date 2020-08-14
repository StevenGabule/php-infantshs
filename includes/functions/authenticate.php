<?php
require_once '../db/init.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
  if (Users::CheckLogin($_POST['email'], $_POST['password']) > 0) {
    echo true;
  }
  echo false;
}
