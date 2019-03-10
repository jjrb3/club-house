<?php

use Illuminate\Database\Seeder;

class icons extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert(array(
            'id' => 1,
            'name' => 'fa-cutlery',
        ));
        DB::table('icons')->insert(array(
            'id' => 2,
            'name' => 'fa-beer',
        ));
    }
}
