<?php
namespace OTP;
class OTP{
    public static function generateOTP($digits){
        $generator = "1357902468";
        $otp = "";
        for ($i = 1; $i <= $digits; $i++) {
            $otp .= substr($generator, (rand()%(strlen($generator))), 1);
        }
        return $otp;
    }
}

echo OTP::generateOTP(6);
?>