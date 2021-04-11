<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
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
            'name' => 'PonchesDora',
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

        $category1 = Category::create([
            'name' => 'Alimentos y Bebidas',
        ]);
        $category2 = Category::create([
            'name' => 'Servicios',
        ]);

        $product1 = Product::create([
            'name' => 'Ponche Crema 1L',
            'code' => '1234567890123',
            'description' => 'Botella de ponche con un litro de contenido',
            'stock' => 12,
            'image' => '',
            'price' => 100.00,
            'category_id' => 1,
            'company_id' => 2,
        ]);

        $product2 = Product::create([
            'name' => 'Ponche Crema 2L',
            'code' => '3210987654321',
            'description' => 'Botella de ponche con 2 litros de contenido',
            'stock' => 12,
            'image' => '',
            'price' => 190.00,
            'category_id' => 1,
            'company_id' => 2,
        ]);

        $product2 = Product::create([
            'name' => 'Consultoría web',
            'code' => '3210987654321',
            'description' => 'Servicios profesionales web',
            'stock' => 0,
            'image' => '',
            'price' => 1000.00,
            'category_id' => 2,
            'company_id' => 1,
        ]);
    }
}
