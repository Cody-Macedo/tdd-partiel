<?php declare(strict_types=1);

final class Partiel
{

    public static function decimalToRoman($nb): string
    {


        $roman_special_centaine = array("C" => 100, "CD" => 400, "D" => 500, "CM" => 900);
        $roman_special_dizaine = array("X" => 10, "XL" => 40, "L" => 50, "XC" => 90);


        if ($nb > 3000) {
            return "";
        } else {

            $result = "";

            if ($nb > 1000) {
                for ($i = 0; $nb > 1000; $i++) {
                    $nb = $nb - 1000;
                }

                for ($nbX = 0; $nbX < $i; $nbX++) {
                    $result .= "X";
                }

                var_dump($result);
            }

            if ($nb > 100) {
                for ($i = 0; $nb > 100; $i++) {
                    $nb = $nb - 100;
                }
                var_dump(array_keys($roman_special_centaine, $i*100));
                $resCentaine = array_keys($roman_special_centaine, $i*100);

                if($resCentaine[0] != []){
                    $result .= $resCentaine;
                }
                var_dump($i);
            }

            if ($nb > 10) {

            } else {

            }

//            if ($nb == 1) {
//                return "I";
//            }
//            if ($nb == 2) {
//                return "II";
//            }
//            if ($nb == 3) {
//                return "III";
//            }
//            if ($nb == 4) {
//                return "IV";
//            }
//            if ($nb == 5) {
//                return "V";
//            }
//
//            var_dump($nb % 1000);


        }

        return "";

    }

    public static function romanToDecimal($nb): int
    {
        return 0;
    }
}