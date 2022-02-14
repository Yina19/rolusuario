<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class rolesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('roles')->insert([
            'name' => 'Administrativo',
            'screen_name' => 'Administrativo',
        ]);

        DB::table('roles')->insert([
            'name' => 'Usuario',
            'screen_name' => 'Usuario',
        ]);
    }
}
