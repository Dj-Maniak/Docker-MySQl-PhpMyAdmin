<?php

require_once 'data.php';

foreach ($books as $book) {
    print_r($book->printInfo());
}