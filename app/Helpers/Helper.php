<?php
namespace App\Helpers;
use Carbon\Carbon;

class Helper
{
    public static function randomNumber($num){
        return $num += rand(37, 125);
    }

    public static function randomPassword($length = 8) {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789@";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }


    public static function fullDate($str)
    {
        $dayofweek = date('N', strtotime($str));
        $day       = date('d', strtotime($str));
        $month     = date('n', strtotime($str));
        $year      = date('Y', strtotime($str));
        $dayofweek = self::daysInfrench($dayofweek);
        $month     = self::month($month);

        return $dayofweek.", ".$day." ".$month." ".$year;
    }


    //traduction du mois en francais
    public static function month($str)
    {
        $month = "";
        switch ($str) {
            case 1:  $month = "Janvier";    break;
            case 2:  $month = "Février";    break;
            case 3:  $month = "Mars";       break;
            case 4:  $month = "Avril";      break;
            case 5:  $month = "Mai";        break;
            case 6:  $month = "Juin";       break;
            case 7:  $month = "Juillet";    break;
            case 8:  $month = "Août";       break;
            case 9:  $month = "Septembre";  break;
            case 10: $month = "Octobre";    break;
            case 11: $month = "Novembre";   break;
            default: $month = "Décembre";
        }
        return $month;
    }

    public static function link($string) {
        //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
        $string = strtolower($string);
        //Strip any unwanted characters
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }


    //traduction des jours en francais
    private static function daysInfrench($str)
    {
        $str = strtolower($str);
        $day = "";
        switch ($str) {
            case 1:  $day = "Lun";    break;
            case 2:  $day = "Mar";    break;
            case 3:  $day = "Mer"; break;
            case 4:  $day = "Jeu";    break;
            case 5:  $day = "Ven"; break;
            case 6:  $day = "Sam";   break;
            default: $day = "Dim";
        }
        return $day;
    }


    //Le nombre de jours restant/passes
    public static function ago($str)
    {
        //Carbon::setLocale('fr');
        return Carbon::createFromTimeStamp(strtotime($str))->diffInDays();
    }

    public static function convertToEuro($xaf)
    {
        return ($xaf * 1.02) / 655 + 0.30;
    }

    /**
     * To be used for localized dates
     */
    public static function changeDefaultLocale($str)
    {
        switch ($str) {
            case "fr": $str = "fr_FR";    break;
            case "cn": $str = "cn_CN";    break;
            default: $str = "en_EN";
        }
        setlocale(LC_TIME, $str);
    }
}
