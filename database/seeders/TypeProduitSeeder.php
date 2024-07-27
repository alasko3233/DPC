<?php

namespace Database\Seeders;

use App\Models\TypeProduit;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class TypeProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        TypeProduit::create(['name' => 'Poulet Entier']);
        TypeProduit::create(['name' => 'Super Admin']);
        TypeProduit::create(['name' => 'Super Admin']);

    }
}
