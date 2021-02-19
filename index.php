<?php
  require_once 'src/entities/Users.php';
  $user = new Users(1,"Marius", "NIemet", "marius@niemet.sn", "password", true);
  var_dump($user);