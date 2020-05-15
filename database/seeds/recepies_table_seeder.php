<?php

use Illuminate\Database\Seeder;

class recepies_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('recepies')->insert([
            'name' => 'Ramen',
            'ingredients' => 'salt,noodles,meat',
            'category' =>'Japanese Food' ,
        ]);
    }
}
