<?php

namespace App\Models;



class Abouta 
{
    private static $about=[
        [
            "amt" => "Alat Musik Tradisional",
            "isi" => "Alat musik tradisional adalah sebuah instrumen musik atau alat musik yang berkembang pada suatu daerah dan sudah berkembang secara turun temurun. Alat musik tradisional diciptakan pada daerah tertentu, sehingga alat musik satu wilayah dengan wilayah lainnya pasti berbeda.
                    Alat musik tradisional tiap daerah memiliki kegunaan masing-masing. Biasanya, alat musik ini juga disandingkan dengan warisan budaya tradisional lainnya. Sebut saja tari atau upacara adat.
                    Alat musik tradisional sendiri memiliki setidaknya 3 fungsi utama.
                    Fungsi pertama dari alat musik tradisional adalah sebagai alat atau sarana upacara adat yang sudah dilakukan secara turun menurun dan berlangsung sejak lama.
                    Tak hanya pada upacara adat yang berkaitan dengan kabar gembira seperti perkawinan dan kelahiran, namun alat musik tradisional ini juga digunakan pada upacara kematian.
                    Selain itu, alat musik tradisional juga kerap digunakan pada upacara keagamaan atau upacara adat lainnya.",
        ]
    ];

    public static function all()
    {
        return self::$about;
    }
};
