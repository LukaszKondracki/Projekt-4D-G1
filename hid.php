<?php
require 'vendor/autoload.php';

use Hashids\Hashids;

class Hid {
    public static function get(int $x) {
        $hashid = new Hashids();
        return $hashids->encode($x);
    }
}