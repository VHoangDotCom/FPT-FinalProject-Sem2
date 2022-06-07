<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'categoryName' => 'Helmet',
                'description' =>'Fashion Helmet in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [
                'categoryName' => 'Glove',
                'description' =>'Fashion Glove in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [
                'categoryName' => 'Jacket',
                'description' =>'Fashion Jacket in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [
                'categoryName' => 'Jean',
                'description' =>'Quality Jean in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [
                'categoryName' => 'Boots',
                'description' =>'Variety Boots in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],

            [

                'categoryName' => 'Tires',
                'description' =>'Quality Tires in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [

                'categoryName' => 'Engine oil',
                'description' =>'Powerful supplies in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [

                'categoryName' => 'Toys & Models',
                'description' =>'Kawaii Toys & Models in Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [

                'categoryName' => 'Riding Cameras',
                'description' =>'To keep your assets safe by Tonny Chopper',
                'created_at' =>Carbon::now()->addDays(1)
            ],
        ]);
    }
}
