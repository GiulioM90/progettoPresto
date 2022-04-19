<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name'=>'Elettronica'],
            ['name'=>'Arredamento'],
            ['name'=>'Collezionismo'],
            ['name'=>'Sport'],
            ['name'=>'Abbigliamento'],
            ['name'=>'Auto e moto'],
            ['name'=>'Strumenti musicali'],
            ['name'=>'Libri e riviste'],
            ['name'=>'Gioielli'],
            ['name'=>'Informatica'],
        ];
        // \App\Models\User::factory(10)->create();
        foreach($categories as $category){             
            DB::table('categories')->insert([
                'name'=>$category['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);               
        }
    }
}
