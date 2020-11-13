<?php
class User{
    public $name;
    public $email;
     public function __construct(){
         echo "creating the object<br/>";
     }

     public function __destruct(){
         echo "destroying the object";
     }
}

$user= new User();

for($i=0;$i<=20; $i++){
    echo $i."<br/>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background: #7fffd4 ;
    }
    </style>
</head>
<body>
    
</body>
</html>