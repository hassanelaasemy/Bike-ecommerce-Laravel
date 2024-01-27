<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Database\Seeders\Productseeder;
use Database\Seeders\Categoryseeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\ProductsTableSeeder;
use Database\Seeders\CategoriesTableSeeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        // / \App\Models\User::factory(20)->create();
        //  Order::factory(20)->create();
        
         $this->call(CategoriesTableSeeder::class);
         $this->call(ProductsTableSeeder::class);

      //   $data = [
      //     ['name' => 'hassan' , 'email' => "hassan01@gmail.com" , 'password' => Hash::make('12345678') ] ,
      //     ['name' => 'fawzi' , 'email' => "fawzi01@gmail.com" , 'password' => Hash::make('12345678') ]
      // ];
      // DB::table('users')->insert($data);
    }

}
