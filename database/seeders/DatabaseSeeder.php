<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Latihan;
use App\Models\Category;
use App\Models\Instruments;
use App\Models\CategoryLatihan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create(['name' => 'Admin', 'username' => 'Admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('admin')]);
        User::create(['name' => 'Admin2', 'username' => 'Admin2', 'email' => 'admin2@gmail.com', 'password' => bcrypt('admin2')]);


        Category::create(['name' => 'Tradisional', 'slug' => 'tradisional']);
        Category::create(['name' => 'Electronic', 'slug' => 'electronic']);
        CategoryLatihan::create(['name' => 'Easy', 'slug' => 'easy']);
        CategoryLatihan::create(['name' => 'Medium', 'slug' => 'medium']);

        Latihan::create(['name' => 'Quest1', 'slug' => 'quest1', 'question' => 'Not Apakah Ini', 'category_latihan_id' => 1, 'essay' => 'C', 'essay2' => 'D', 'essay3' => 'E', 'answer' => 'C', 'c' => '.']);
        Latihan::create(['name' => 'Quest2', 'slug' => 'quest2', 'question' => 'Not Apakah Ini', 'category_latihan_id' => 1, 'essay' => 'E', 'essay2' => 'D', 'essay3' => 'C', 'answer' => 'D', 'd' => '.']);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'geundrang',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'tes', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        
        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes2',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes3',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes4',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes5',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes6',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes7',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes8',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes9',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes10',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes11',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes12',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes13',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes14',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes15',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes16',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);

        Instruments::create([
            'name' => 'Geundrang', 'category_id' => 1, 'user_id' => 2, 'slug' => 'tes17',
            'body' => 'Geundrang adalah alat musik perkusi tradisional Aceh yang termasuk dalam keluarga two-headed drum/double-headed drum. Kata “Geundrang” mempunyai sinonim dengan kata “Genderang“, dan mempunyai kesamaan dengan beberapa instrumen sejenis di Nusantara seperti Kendang (Sunda), Khendhang (Jawa), Gendang (Melayu), dan Gandang (Melayu Filipina). Bedanya di ukuran kerangka (frame) atau bodynya, serta cara bermainnya.
                            Geundrang mempunyai double-membrane (kulit) kiri dan kanan dengan body atau frame lebih panjang dibanding dengan jenis Geundrang lainnya. Mempunyai berbagai macam ukuran dan bentuk serta digunakan untuk upacara-upacara, baik keagamaan, tarian, nyanyian, upacara resmi dan upacara lainnya.         
                            Menurut catatan yang didapatkan kemungkinan telah ada sejak Aceh zaman Hindu dan mirip dengan instrumen Dhol yang berasal dari India, atau diduga juga datang ke Aceh lewat pedagang Islam dari Gujarat akhir abad ke XI.           
                            Instrumen sejenis Geundrang telah ada sejak zaman neolitikum yang dibuktikan dengan ditemukannya serangkaian alat Geundrang peninggalan kebudayaan Mesopotamia (Lembah Ur) yang berasal dari tahun 3000 SM , dan terdapat beberapa relief patung alat musik ini di India bertarikh 2000 tahun yang lampau.
                            Di Aceh, Geundrang dapat dijumpai di daerah Aceh Besar dan pesisir lain seperti Pidie dan Aceh Utara, dan dimainkan secara ensemble dengan alat musik serune kalee dan rapai.'
        ]);


        Instruments::create([
            'name' => 'Serune Kalee', 'category_id' => 1, 'user_id' => 2, 'slug' => 'serunekalee',
            'body' => 'Serune Kalee adalah terompet khas Aceh dengan dengan struktur bentuk mirip klarinet.
                            Serune Kalee biasa dimainkan sebagai instrumen utama dalam sebuah pertunjukan musik tradisi di Aceh,
                            diiringi geundrang, rapai, dan sejumlah instrumen tradisional lainnya. Hingga hari ini,
                            Serune Kalee masih hidup lestari di lingkungan masyarakat Aceh, 
                            serta berperan besar dalam ritus-ritus sosial warga Aceh. 
                            Instrumen ini diklasifikasikan ke dalam jenis aerofon, 
                            atau instrumen yang memiliki sumber bunyi dari hembusan udara pada rongga. Sejatinya, 
                            Serune Kalee berasal dari dua kata, yakni (serune) yang merujuk pada instrumen tradisional Aceh, 
                            dan (kalee) yang merupakan nama desa di Laweung, Kabupaten Pidie. Jadi secara sederhana, 
                            Serune Kalee bisa diartikan sebagai serunai/seruling dari daerah Kalee. 
                            Sangat mungkin penamaan tersebut dikaitkan dengan kemunculan atau tempat pembuatan 
                            serunai/seruling tersebut.
                            Selain di Aceh, sejatinya alat musik serupa juga bisa dijumpai di daerah lainnya di Sumatra, 
                            seperti di lingkungan masyarakat Minangkabau dan Agam. Lebih jauh dari itu, Serunee Kalee juga memiliki kemiripan dengan beberapa instrumen dari negara lain, seperti Malaysia, Thailand, dan Srilanka. Instrumen-instrumen serupa tersebut memiliki sejumlah kemiripan dalam hal laras nada, vibrasi, volume suara, dan dinamika suara.
                            Sejarah dan Perkembangan Serune Kalee
                            Merujuk pada data yang ada, instrumen ini sudah ada sejak masuknya Islam ke Aceh. Ada sebagian yang mengatakan bahwa instrumen ini berasal dari Tiongkok (Z.H Idris, 1993: 48-49, dikutip dalam melayuonline.com). Terlepas dari berbagai asumsi yang ada, fakta sejarah menunjukan bahwa Aceh pada masa silam adalah kerajaan dengan letak yang strategis, sekaligus juga bersifat terbuka, sehingga banyak terjalin hubungan dengan berbagai bangsa dari luar. Dalam perkembangannya, berbagai akulturasi yang ada telah melahirkan kesenian Aceh yang khas, yang dominan bernafaskan Islam.
                            Serune Kalee memegang peranan penting dalam berbagai pertunjukan kesenian diberbagai upacara, serta acara lainnya yang merupakan hiburan bagi masyarakat aceh. Alat musuik ini berbentuk bulat lurus yang memanjang yang pada bagian atas berbentuk kecil kemudian membesar hingga ujung pada bagian bawah pada bagian tubuhnya terdapat lubang-lubang kecil untuk jari-jari, dan pada bagian bawah berbentuk seperti kelopak teratai. Serune Kalee merupakan alat jusik yang mirip dengan terompet yang berasal dari Aceh  yang dimainkan sebagai instrumen utama dalam sebuah pertunjukan musik tradisi di Aceh, diiringi geundrang, rapai, dan sejumlah instrumen tradisional lainnya.
                            Alat ini berperan dalam membawakan lagu yang cenderung insrumentalie, yang dimainkan dengan alunan suara yang terus menerus. Yang dimainkan dengan cara ditiup dengan mengambil nafas dari mulut hidung serta leher.  Biasanya dalam memainkan alat musik ini pemain menggunakan pakaian adat dalam pertunjukan maupun acara resmi.
                            Untuk menghasilkan suara yang indah pemain harus mempunyai gigi yang utuh serta memiliki pernafasan yang kuat kemudian  jari-jari kedua tangan mengatur tinggi dan rendahnya nada.
                            Alat Musik Tradisional Serune Kalee terbuat dari bahan kayu, yang mana kayu yang dipilih sebagai bahan dasarnya adalah yang memiliki karakter kuat dan keras, sekaligus ringan. Sebelum dibuat, kayu tersebut terlebih dahulu direndam selama tiga bulan. Setelah fase perendaman selesai, selanjutnya kayu dipangkas sehingga yang tersisa hanya bagian yang disebut sebagai ‘hati kayu’. kemudian di bor dan dibubut untuk membentuk lobang dengan diameter sekitar 2 cm. Setelah tercipta rongga, selanjutnya adalah tahap membuat lubang-lubang nada, yakni 6 lubang di bagian muka-atas sebagai interval nada, dan 1 lubang di bawah sebagai syarat terciptanya suara khas dari Serune Kalee.'
        ]);

        Instruments::create([
            'name' => 'Rapai', 'category_id' => 1, 'user_id' => 2, 'slug' => 'rapai',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi repellendus modi possimus, facere odit autem, officia vitae minus<br>
                             adipisci sunt illum repudiandae totam perspiciatis ipsum deleniti doloribus minima sequi eos. Enim, animi?<br>
                              Dignissimos voluptatem modi molestiae laborum numquam iusto, quas ut corporis? Nisi et illo unde aut <br>
                               consectetur aspernatur veritatis?'
        ]);

        Instruments::create([
            'name' => 'Piano', 'category_id' => 2, 'user_id' => 2, 'slug' => 'piano',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi repellendus modi possimus, facere odit autem, officia vitae minus<br>
                             adipisci sunt illum repudiandae totam perspiciatis ipsum deleniti doloribus minima sequi eos. Enim, animi?<br>
                              Dignissimos voluptatem modi molestiae laborum numquam iusto, quas ut corporis? Nisi et illo unde aut <br>
                               consectetur aspernatur veritatis?'
        ]);
    }
}
