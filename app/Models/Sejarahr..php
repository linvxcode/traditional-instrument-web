<?php

namespace App\Models;



class Sejarahr 
{
    private static $sejarah_rapai =[
     [
        "name" => "Rapai",
        "amt" => "Alat Musik Tradisional",
        "isi" => "Rapa'i adalah sebuah alat musik pukul yang berasal dari Aceh. Menurut kepercayaan masyarakat Aceh, alat musik ini diciptakan oleh Syekh Ahmad bin Rifa'i yang merupakan pendiri tarikat Rifa'iyyah.[1]
                  Rapai merupakan alat musik tradisional Aceh yang ditabuh menggunakan tangan kosong, tidak menggunakan stik. Rapai biasanya berperan untuk mengatur ritme, tempo, gemerincing saat lantunan syair-syair bernuansa Islami sedang dinyanyikan.
                  Suara rapai juga membuat suasana lebih hidup, semarak dan bisa menumbuhkan semangat penonton yang sedang menyaksikan suatu pertunjukan. Rapai ini juga digunakan hampir semua seni tarik suara tradisional di Aceh.
                  Sejarah rapa'i ini tidak terlepas dari peradaban masuknya Islam di Aceh. Karena rapai ini diperkenalkan oleh seorang ulama besar dari Baghdad yang menyebarkan Islam ke Aceh. Dalam beberapa catatan sejarah, rapai yang kemudian menjadi alat musik tradisional Aceh diperkenalkan oleh Syech Rapi atau ada juga yang menyebutkannya dengan Syech Rifa'i. Rapai sudah berabad abad menjadi alat musik tradisional Aceh. Rapai merupakan instrumen musik yang dimainkan dengan cara dipukul.
                  Pertama kali dimainkan alat musik di Ibukota Kerajaan Aceh pada abad ke-11 yaitu di Banda Khalifah. Banda Khalifah itu sekarang lebih dikenal dengan sebutan Gampong Pande, Kota Banda Aceh. Di Gampong Pande ini juga ada banyak peninggalan-peninggalan masa kerajaan dulu yang masih tersimpan dan terawat dengan baik hingga sekarang.",
        "jenis" =>"Jenis-Jenis Rapai",
        "isi1" => " Rapai ini terbuat dari kulit sapi atau kambing, kemudian ditempel di kayu pilihan yang sudah dibentuk bundar, sedangkan untuk melekatkan kulit tersebut biasanya diberikan lempengan dari logam. Namun rapai diberikan nama bermacam di antaranya, perbedaan itu karena ukuran dan kreasi cara memainkannya.        
                    Ada 6 jenis rapai kemudian dikenal di Aceh hingga sekarang :       
                    ",
        "jenis1" => " 1.  Rapai Dabôih, artinya sejenis pertunjukan ketangkasan mempertontonkan kesaktian seseorang kebal dari benda tajam. Dulunya daboih (debus) ini biasanya dimainkan oleh seorang khalifah yang memiliki ilmu kebal, ahli makrifat besi.",
        "jenis2" => " 2.  Rapa'i Geurimpheng, dimainkan secara duduk. Seni ini dimulai dengan memberikan salam, lalu menjulurkan tangan ke depan dan menggoyangkan badan ke kiri dan ke kanan secara serentak sambil memukul rapai dan menyanyikan ratoih (lagu).",
        "jenis3" => " 3.  Rapai Pulôt, dimulai dari salam dan dilanjutkan dengan penampilan akrobatik dan keahlian membentuk lingkaran bersambung.",
        "jenis4" => " 4.  Rapai Pase yang terdapat di Aceh Utara dengan formasi pemukul rapai sebanyak 30 orang.",
        "jenis5" => " 5.  Rapai Anak, rapai ukuran sedikit lebih kecil berfungsi untuk mengadakan tingkahan, karena suara lebih nyaring dan mendenting.",
        "jenis6" => " 6.  Rapai Kisah/Hajat, mengisahkan atau hajat menginginkan seperti ingin memiliki rumah sendiri. Lalu syech (koordinator penabuh rapai) bersama penabuh rapai bersama-sama menyanyikan syair-syair mengisahkan itu",
      ],  
    ];
    public static function all()
    {
        return self::$sejarah_rapai;
    }
};



