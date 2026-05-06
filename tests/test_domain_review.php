<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(50, 43, 27, 61);
assert(DomainReviewLens::score($item) === 123);
assert(DomainReviewLens::lane($item) === "watch");
