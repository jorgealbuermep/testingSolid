<?php

require_once 'configuratiion.php';

StaticConfig::setColor("blue");
StaticConfig::setEnviroment("localhost");
StaticConfig::setNewsletter(true);

echo StaticConfig::$color. "<br/>";
echo StaticConfig::$enviroment . "<br/>";
echo StaticConfig::$newsletter ."<br/>";

$myconfig= new StaticConfig();
$myconfig::$color="red";
echo $myconfig::$color;