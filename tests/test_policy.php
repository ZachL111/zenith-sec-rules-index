<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(53, 99, 24, 8, 5);
assert(Policy::score($signal_case_1) === 111);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(90, 83, 15, 19, 12);
assert(Policy::score($signal_case_2) === 124);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(82, 99, 18, 12, 11);
assert(Policy::score($signal_case_3) === 165);
assert(Policy::classify($signal_case_3) === "accept");
