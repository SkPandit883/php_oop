<?php
namespace OTP;

class OTP{
    public static function generateOTP($digits){
        return $digits;
    }
}

echo OTP::generateOTP(6);
?>