<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('books')->insert(['boo_title'=>"La biblia de quimica"
            ,'boo_description'=>'Este libro contiene todos los conocimientos necesarios'
            ,'boo_abstract'=>'Aca va todo el resumen extenso de todo lo relacionado a la quimica'
            ,'boo_date_published'=>'2021-10-27'
        ]);     

        DB::table('books')->insert(['boo_title'=>"La biblia de fisica"
            ,'boo_description'=>'Este libro contiene todos los conocimientos necesarios'
            ,'boo_abstract'=>'Aca va todo el resumen extenso de todo lo relacionado a la fisica'
            ,'boo_date_published'=>'2020-10-27'

        ]);

        DB::table('books')->insert(['boo_title'=>"La biblia del aleman"
            ,'boo_description'=>'Este libro contiene todos los conocimientos necesarios'
            ,'boo_abstract'=>'Aca va todo el resumen extenso de todo lo relacionado a la aleman'
            ,'boo_date_published'=>'2021-10-27'
            ,'boo_isbn'=> '2021-12-12' 
            ,'boo_author'=>"Sanson Ugarte"
        ]);        

        DB::table('books')->insert(['boo_title'=>"La biblia de algortimica"
            ,'boo_description'=>'Este libro contiene todos los conocimientos necesarios'
            ,'boo_abstract'=>'Aca va todo el resumen extenso de todo lo relacionado a la algortimica'
            ,'boo_date_published'=>'2021-02-27'
            ,'boo_author'=>"Jhon Vargas"
        ]);        

    }
}
