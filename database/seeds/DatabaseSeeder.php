<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('products')->insert([
                'name' => 'Product ' . $i,
                'price' => (rand (10,90) * 10000),
                'tags' => '#newproduct',
                'description' => 'No Description',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

        // $this->call(UsersTableSeeder::class);
    }
}
