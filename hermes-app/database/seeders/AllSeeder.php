<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Country;
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

        $this->createRoles();
        $this->createCompanies();
        $this->createUsers();
        $this->createCategories();
        $this->createProducts();
        $this->createCountries();
        $this->createAddress();
        $this->createContacts();
    }

    private function createRoles(){

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
    }

    private function createCompanies(){
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
    }

    private function createUsers(){
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

    private function createCategories(){
        $category1 = Category::create([
            'name' => 'Alimentos y Bebidas',
        ]);
        $category2 = Category::create([
            'name' => 'Servicios',
        ]);
    }

    private function createProducts(){
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

        $product3 = Product::create([
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

    private function createCountries(){
        $country1 = Country::create([
            'name' => 'Argentina'
        ]);
        $country2 = Country::create([
            'name' => 'Colombia'
        ]);
        $country3 = Country::create([
            'name' => 'Chile'
        ]);
        $country4 = Country::create([
            'name' => 'Ecuador'
        ]);
        $country5 = Country::create([
            'name' => 'Mexico'
        ]);
        $country6 = Country::create([
            'name' => 'Venezuela'
        ]);
    }

    private function createAddress(){
        $address1 = Address::create([
            'city' => 'Buenos Aires',
            'municipality' => 'Palermo',
            'state' => 'CABA',
            'zipcode' => '00001',
            'country_id' => 1
        ]);
        $address2 = Address::create([
            'city' => 'Bogota',
            'municipality' => 'Bogota',
            'state' => 'Bogota',
            'zipcode' => '00002',
            'country_id' => 2
        ]);
        $address3 = Address::create([
            'city' => 'Santiago de Chile',
            'municipality' => 'San Miguel',
            'state' => 'Santiago de Chile',
            'zipcode' => '00003',
            'country_id' => 3
        ]);
        $address4 = Address::create([
            'city' => 'Quito',
            'municipality' => 'San Jose',
            'state' => 'Quito',
            'zipcode' => '00004',
            'country_id' => 4
        ]);
        $address5 = Address::create([
            'city' => 'CDMX',
            'municipality' => 'Capital',
            'state' => 'CDMX',
            'zipcode' => '00005',
            'country_id' => 5
        ]);

        $address6 = Address::create([
            'city' => 'Caracas',
            'municipality' => 'Libertador',
            'state' => 'Distrito Capital',
            'zipcode' => '00006',
            'country_id' => 6
        ]);

        $address7 = Address::create([
            'city' => 'San Antonio',
            'municipality' => 'Los Salias',
            'state' => 'Miranda',
            'zipcode' => '00007',
            'country_id' => 6
        ]);
    }

    private function createContacts(){
        $contact1 = Contact::create([
            'business_name' => 'Teclados Mariana',
            'name' => 'Mariana',
            'last_name' => 'Sosa',
            'phone' => '5555555555',
            'email' => 'marianasosa@tecladosmariana.com',
            'address_id' => 1
        ]);
        $contact2 = Contact::create([
            'business_name' => 'Lamparas Dora',
            'name' => 'Dora',
            'last_name' => 'Arevalo',
            'phone' => '5555555555',
            'email' => 'doraarevalo@lamparasdora.com',
            'address_id' => 2
        ]);
        $contact3 = Contact::create([
            'business_name' => 'Calzados Loredana',
            'name' => 'Loredana',
            'last_name' => 'Vassallo',
            'phone' => '5555555555',
            'email' => 'lorevassallo@calzadosloredana.com',
            'address_id' => 3
        ]);
        $contact4 = Contact::create([
            'business_name' => 'Banquetes Astrid',
            'name' => 'Astrid',
            'last_name' => 'Vassallo',
            'phone' => '5555555555',
            'email' => 'astridvassallo@banquetesastrid.com',
            'address_id' => 4
        ]);
        $contact5 = Contact::create([
            'business_name' => 'Telas Julio',
            'name' => 'Julio',
            'last_name' => 'lovera',
            'phone' => '5555555555',
            'email' => 'juliolovera@telasjulio.com',
            'address_id' => 6
        ]);
    }
}
