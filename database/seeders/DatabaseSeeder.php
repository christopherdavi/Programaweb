<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->count(50)->create();

        \App\Models\Level::factory()->create(['name'=>'Plata']);
        \App\Models\Level::factory()->create(['name'=>'Bronce']);
        \App\Models\Level::factory()->create(['name'=>'Oro']);
        
        \App\Models\Perfil::factory()->create(['nombre'=>'Perfil1','user_id'=>'1']);
        \App\Models\Perfil::factory()->create(['nombre'=>'Perfil2','user_id'=>'2']);
        \App\Models\Perfil::factory()->create(['nombre'=>'Perfil3','user_id'=>'3']);

        \App\Models\Location::factory()->count(10)->create();
        \App\Models\Location::factory()->create(['country'=>'Ecuador']);
        \App\Models\Location::factory()->create(['country'=>'USA']);
        \App\Models\Location::factory()->create(['country'=>'Rusia']);



   
    }

}
