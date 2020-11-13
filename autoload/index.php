<?php
/*require_once 'clases/user.php';
require_once 'clases/categories.php';
require_once 'clases/entry.php';*/
require_once 'autoload.php';

$user= new User();

echo $user->name."<br/>";
echo $user->email;
