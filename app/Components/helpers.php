<?php
if (!function_exists("is_prime")) {
    function is_prime($n) {
        if ($n <= 1) {
            return false;
        }

        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
