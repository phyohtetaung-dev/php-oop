<?php

use Bcme\AuthController;
use Bcme\Register;

require 'vendor/autoload.php';

$register = new Register;
$auth = new AuthController($register);
$auth->register();