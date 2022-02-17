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
if (!function_exists("week_day")) {
    function week_day($day = false) {
        $week = [];
        $week[1] = "Sunday";
        $week[2] = "Monday";
        $week[3] = "Tuesday";
        $week[4] = "Wednesday";
        $week[5] = "Thursday";
        $week[6] = "Friday";
        $week[7] = "Saturday";

        return $day ? $week[$day] : $week;
    }
}
