<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          Role::create(['name' => 'Super Admin']);
          Role::create(['name' => 'syndicat']);
          Role::create(['name' => 'producteur']);
          Role::create(['name' => 'client']);
          Role::create(['name' => 'revendeur']);
          Role::create(['name' => 'veterinaire']);

    }
}
