<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SuperAdmimn=   User::create([
                    'name'     =>  'Administrateur',
                    'phone'     => '91919083',
                    'email'     => 'contact@kalanso.ml',
                    'genre'     => 'male',
                    'password'  =>Hash::make('kalanso@654321A!'),
                    'created_at' => Carbon::now(),
                ]);

            $SuperAdmimn->assignRole('Super Admin');



    }
}
