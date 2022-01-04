<?php
namespace Astronomy;
include "planet.php";
include "earth.php";

$planet = new \Astronomy\Planets\Planet();
$planet -> getName();

new \DateTime();