<?php

namespace App\Models;


class Sejarahs 
{
    private static $sejarah = [
     [
         "name" => "Serune Kalee",
         "isi" => "",
     ],
 ];
 
    public static function all()
    {
      return self::$sejarah;
    }
 };
