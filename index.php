<?php

use Eraasoft\Db\db;

include "vendor/autoload.php";



$db = new db("localhost","root","","odccrud");
print_r($db->select("users","*")->first());