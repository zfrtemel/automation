<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class dbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Telefon','Tablet','Bilgisayar','Monitör','Power','Televizyon'];
        $faults=['Ekran Kırık','Ses Gelmiyor','Görüntü Yok','Çalışmıyor','Tepki Yok','Power Bozuk'];
        $status=['Beklemede','Teslim Alındı','Sırada','İşlem Yapılıyor','Parça Bekleniyor','İşlem Bitti'];
        $colors=['red','teal','yellow','orange','azure','green'];

        for ($i=0; $i <6 ; $i++) {
            DB::table('categories')->insert(
                [
                    'name' => $categories[$i],
                    'colorName'=>$colors[$i]
                ]
            );

            DB::table('faults')->insert(

                [
                    'name' =>$faults[$i],
                    'colorName'=>$colors[$i]
                ],
            );

            DB::table('statuses')->insert(

                [
                    'statusName' =>$status[$i],
                    'colorName'=>$colors[$i]
                ]
            );

        }





    DB::table('roles')->insert(

        [
            'rolesname' => 'Admin',
        ],
    );

    DB::table('roles')->insert(
        [
            'rolesname' => 'Yetkili',
        ],

    );

    DB::table('roles')->insert(
        [
            'rolesname' => 'user',
        ],
    );
    DB::table('users')->insert(
        [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$Tk8NH5AuhJDvq.XaEc7zZ.RI8XJ3375yf0qu6XK4eH8MTNYjJNwgi',//12345678
            // type default olarak user yani 3 olarak ayarlandı
        ],
    );
    }
}
