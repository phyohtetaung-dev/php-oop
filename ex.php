<?php

use Acme\User\Person;
use Acme\Business;
use Acme\Staff;

$john = new Person('John');
$doe = new Person('Doe');

$staff = new Staff([$john, $doe]);

$amazon = new Business($staff);

var_dump($amazon->getStaffMembers());