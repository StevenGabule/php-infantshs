<?php

class Users
{

  public static function getUser($user)
  {
    $user_object = array();
    foreach ($user as $item) {
      $user_object = $item;
    }
    return $user_object;
  }

  public static function CheckLogin($email, $password)
  {
    global $connect;
    $sql = 'SELECT * from users WHERE email = :email and password=:password';
    $res = $connect->prepare($sql, [10 => 1]);
    $res->execute(array(
      ':email' => $email,
      ':password' => $password
    ));
    $_SESSION['user'] = $res->fetchAll(2);
    return (int)$res->rowCount();
  }

}
