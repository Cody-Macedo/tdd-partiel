<?php declare(strict_types=1);

final class Partiel
{

    public static function decimalToRoman($nb): string
    {
        if ($nb > 3000) {
            return "";
        } else {
            $result = "";



            if ($nb == 1) {
                return "I";
            }
            if ($nb == 2) {
                return "II";
            }
            if ($nb == 3) {
                return "III";
            }
            if ($nb == 4) {
                return "IV";
            }
            if ($nb == 5) {
                return "V";
            }

            if($nb < 100){
                var_dump($nb/10);
            }
        }

        return "";

    }
}