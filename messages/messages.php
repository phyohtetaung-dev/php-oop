<?php

// require 'src/Person.php';
// require 'src/Business.php';
// require 'src/Staff.php';

$john = new Person('John');
$doe = new Person('Doe');

$staff = new Staff([$john, $doe]);

$amazon = new Business($staff);

var_dump($amazon->getStaffMembers());
