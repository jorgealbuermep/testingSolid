<?php

class StaticConfig{
    public static $color;
    public static $newsletter;
    public static $enviroment;


    public static function getColor(){
return self::$color;
}

public static function setColor($color){
    self::$color= $color;
}

public static function getNewsletter(){
    return self::$newsletter;
}

public static function setNewsletter($newsletter){
    self::$newsletter=  $newsletter;
}
public static function getEnviroment(){
    return self::$enviroment;
}
public static function setEnviroment($enviroment){
    self::$enviroment= $enviroment;
}

}