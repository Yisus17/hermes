<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = Company::create([
            'name' => 'Hermes',
            'logo' => '',
            'sector' => '',
        ]);

        $companyDummy = Company::create([
            'name' => 'DummyCompany',
            'logo' => '',
            'sector' => '',
        ]);

        $userAdmin = User::create([
            'name' => 'Admin',
            'email' => 'admin@hermesucv.com',
            'password' => Hash::make('admin'),
            'type' => '1',
            'company_id' => '1'
        ]);

        $userModerator = User::create([
            'name' => 'Jesus',
            'email' => 'jesus@hermesucv.com',
            'password' => Hash::make('jesus'),
            'type' => '2',
            'company_id' => '1'
        ]);

        $userSimple = User::create([
            'name' => 'Astrid',
            'email' => 'astrid@hermesucv.com',
            'password' => Hash::make('astrid'),
            'type' => '3',
            'company_id' => '2'
        ]);
    }
}
