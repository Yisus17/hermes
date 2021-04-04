<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Role;
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
        $roleAdmin = Role::create([
            'id' => 1,
            'name' => 'Admin',
        ]);

        $roleModerator = Role::create([
            'id' => 2,
            'name' => 'Moderator',
        ]);

        $roleAdmin = Role::create([
            'id' => 3,
            'name' => 'SimpleUser',
        ]);


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
            'company_id' => '1',
            'role_id' => '1'
        ]);

        $userModerator = User::create([
            'name' => 'Jesus',
            'email' => 'jesus@hermesucv.com',
            'password' => Hash::make('jesus'),
            'company_id' => '1',
            'role_id' => '2'
        ]);

        $userSimple = User::create([
            'name' => 'Astrid',
            'email' => 'astrid@hermesucv.com',
            'password' => Hash::make('astrid'),
            'company_id' => '2',
            'role_id' => '3'
        ]);
    }
}
