<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Employeeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    DB::table('employees')->insert([
            'nama' => 'Pramudya Angga',
            'jeniskelamin' => 'cowo',
            'notelpon' => '082211950009',
        ]);
        
    }
}
