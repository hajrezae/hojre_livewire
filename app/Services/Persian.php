<?php

namespace App\Services;

class Persian {
    public static function Number($number)
    {
        return str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], ['۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰'], $number);
    }
}