<?php
require "vendor/autoload.php";

use Carbon\Carbon;


echo "<h1>Openshift Workshop v1.0 " . Carbon::now() . "</h1>";
echo $_SERVER['SERVER_ADDR'];