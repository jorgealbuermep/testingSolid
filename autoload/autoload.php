<?php

function autoload_clases($clases){
require_once 'clases/'. $clases . '.php';
}

spl_autoload_register('autoload_clases');