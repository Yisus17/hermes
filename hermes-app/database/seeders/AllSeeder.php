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

    private function createRoles()
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
    }

    private function createCompanies()
    {
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

    private function createUsers()
    {
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

    private function createCategories()
    {
        $category1 = Category::create([
            'name' => 'Alimentos y Bebidas',
        ]);
        $category2 = Category::create([
            'name' => 'Servicios',
        ]);
    }

    private function createProducts()
    {
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

    private function createCountries()
    {
        $country0 = Country::create([
            'name' => 'Afganistán'
        ]);
        $country1 = Country::create([
            'name' => 'Albania'
        ]);
        $country2 = Country::create([
            'name' => 'Alemania'
        ]);
        $country3 = Country::create([
            'name' => 'Andorra'
        ]);
        $country4 = Country::create([
            'name' => 'Angola'
        ]);
        $country5 = Country::create([
            'name' => 'Antigua y Barbuda'
        ]);
        $country6 = Country::create([
            'name' => 'Arabia Saudita'
        ]);
        $country7 = Country::create([
            'name' => 'Argelia'
        ]);
        $country8 = Country::create([
            'name' => 'Argentina'
        ]);
        $country9 = Country::create([
            'name' => 'Armenia'
        ]);
        $country10 = Country::create([
            'name' => 'Australia'
        ]);
        $country11 = Country::create([
            'name' => 'Austria'
        ]);
        $country12 = Country::create([
            'name' => 'Azerbaiyán'
        ]);
        $country13 = Country::create([
            'name' => 'Bahamas'
        ]);
        $country14 = Country::create([
            'name' => 'Bahréin'
        ]);
        $country15 = Country::create([
            'name' => 'Bangladés'
        ]);
        $country16 = Country::create([
            'name' => 'Barbados'
        ]);
        $country17 = Country::create([
            'name' => 'Bielorrusia'
        ]);
        $country18 = Country::create([
            'name' => 'Bélgica'
        ]);
        $country19 = Country::create([
            'name' => 'Belice'
        ]);
        $country20 = Country::create([
            'name' => 'Benín'
        ]);
        $country21 = Country::create([
            'name' => 'Bután'
        ]);
        $country22 = Country::create([
            'name' => 'Bolivia'
        ]);
        $country23 = Country::create([
            'name' => 'Bosnia-Herzegovina'
        ]);
        $country24 = Country::create([
            'name' => 'Botsuana'
        ]);
        $country25 = Country::create([
            'name' => 'Brasil'
        ]);
        $country26 = Country::create([
            'name' => 'Brunéi'
        ]);
        $country27 = Country::create([
            'name' => 'Bulgaria'
        ]);
        $country28 = Country::create([
            'name' => 'Burkina Faso'
        ]);
        $country29 = Country::create([
            'name' => 'Burundi'
        ]);
        $country30 = Country::create([
            'name' => 'Cabo Verde'
        ]);
        $country31 = Country::create([
            'name' => 'Camboya'
        ]);
        $country32 = Country::create([
            'name' => 'Camerún'
        ]);
        $country33 = Country::create([
            'name' => 'Canadá'
        ]);
        $country34 = Country::create([
            'name' => 'Chad'
        ]);
        $country35 = Country::create([
            'name' => 'República Checa'
        ]);
        $country36 = Country::create([
            'name' => 'Chequia'
        ]);
        $country37 = Country::create([
            'name' => 'Chile'
        ]);
        $country38 = Country::create([
            'name' => 'China'
        ]);
        $country39 = Country::create([
            'name' => 'Chipre'
        ]);
        $country40 = Country::create([
            'name' => 'Colombia'
        ]);
        $country41 = Country::create([
            'name' => 'Comoras'
        ]);
        $country42 = Country::create([
            'name' => 'Congo'
        ]);
        $country43 = Country::create([
            'name' => 'República Democrática del Congo'
        ]);
        $country44 = Country::create([
            'name' => 'Corea del Norte'
        ]);
        $country45 = Country::create([
            'name' => 'Corea del Sur'
        ]);
        $country46 = Country::create([
            'name' => 'Costa Rica'
        ]);
        $country47 = Country::create([
            'name' => 'Costa de Marfil'
        ]);
        $country48 = Country::create([
            'name' => 'Croacia'
        ]);
        $country49 = Country::create([
            'name' => 'Cuba'
        ]);
        $country50 = Country::create([
            'name' => 'Dinamarca'
        ]);
        $country51 = Country::create([
            'name' => 'Yibuti'
        ]);
        $country52 = Country::create([
            'name' => 'Dominica'
        ]);
        $country53 = Country::create([
            'name' => 'Ecuador'
        ]);
        $country54 = Country::create([
            'name' => 'Egipto'
        ]);
        $country55 = Country::create([
            'name' => 'El Salvador'
        ]);
        $country56 = Country::create([
            'name' => 'Emiratos Árabes Unidos'
        ]);
        $country57 = Country::create([
            'name' => 'Eritrea'
        ]);
        $country58 = Country::create([
            'name' => 'Eslovaquia'
        ]);
        $country59 = Country::create([
            'name' => 'Eslovenia'
        ]);
        $country60 = Country::create([
            'name' => 'España'
        ]);
        $country61 = Country::create([
            'name' => 'Estados Unidos'
        ]);
        $country62 = Country::create([
            'name' => 'Estonia'
        ]);
        $country63 = Country::create([
            'name' => 'Etiopía'
        ]);
        $country64 = Country::create([
            'name' => 'Fiyi'
        ]);
        $country65 = Country::create([
            'name' => 'Filipinas'
        ]);
        $country66 = Country::create([
            'name' => 'Finlandia'
        ]);
        $country67 = Country::create([
            'name' => 'Francia'
        ]);
        $country68 = Country::create([
            'name' => 'Gabón'
        ]);
        $country69 = Country::create([
            'name' => 'Gambia'
        ]);
        $country70 = Country::create([
            'name' => 'Georgia'
        ]);
        $country71 = Country::create([
            'name' => 'Ghana'
        ]);
        $country72 = Country::create([
            'name' => 'Granada'
        ]);
        $country73 = Country::create([
            'name' => 'Grecia'
        ]);
        $country74 = Country::create([
            'name' => 'Guatemala'
        ]);
        $country75 = Country::create([
            'name' => 'Guinea'
        ]);
        $country76 = Country::create([
            'name' => 'Guinea-Bissau'
        ]);
        $country77 = Country::create([
            'name' => 'Guinea Ecuatorial'
        ]);
        $country78 = Country::create([
            'name' => 'Guyana'
        ]);
        $country79 = Country::create([
            'name' => 'Haití'
        ]);
        $country80 = Country::create([
            'name' => 'Honduras'
        ]);
        $country81 = Country::create([
            'name' => 'Hungría'
        ]);
        $country82 = Country::create([
            'name' => 'India'
        ]);
        $country83 = Country::create([
            'name' => 'Indonesia'
        ]);
        $country84 = Country::create([
            'name' => 'Irán'
        ]);
        $country85 = Country::create([
            'name' => 'Iraq'
        ]);
        $country86 = Country::create([
            'name' => 'Irlanda'
        ]);
        $country87 = Country::create([
            'name' => 'Islandia'
        ]);
        $country88 = Country::create([
            'name' => 'Israel'
        ]);
        $country89 = Country::create([
            'name' => 'Italia'
        ]);
        $country90 = Country::create([
            'name' => 'Jamaica'
        ]);
        $country91 = Country::create([
            'name' => 'Japón'
        ]);
        $country92 = Country::create([
            'name' => 'Jordania'
        ]);
        $country93 = Country::create([
            'name' => 'Kazajistán'
        ]);
        $country94 = Country::create([
            'name' => 'Kenia'
        ]);
        $country95 = Country::create([
            'name' => 'Kirguistán'
        ]);
        $country96 = Country::create([
            'name' => 'Kiribati'
        ]);
        $country97 = Country::create([
            'name' => 'Kuwait'
        ]);
        $country98 = Country::create([
            'name' => 'Laos'
        ]);
        $country99 = Country::create([
            'name' => 'Lesoto'
        ]);
        $country100 = Country::create([
            'name' => 'Letonia'
        ]);
        $country101 = Country::create([
            'name' => 'Líbano'
        ]);
        $country102 = Country::create([
            'name' => 'Liberia'
        ]);
        $country103 = Country::create([
            'name' => 'Libia'
        ]);
        $country104 = Country::create([
            'name' => 'Liechtenstein'
        ]);
        $country105 = Country::create([
            'name' => 'Lituania'
        ]);
        $country106 = Country::create([
            'name' => 'Luxemburgo'
        ]);
        $country107 = Country::create([
            'name' => 'Macedonia'
        ]);
        $country108 = Country::create([
            'name' => 'Madagascar'
        ]);
        $country109 = Country::create([
            'name' => 'Malasia'
        ]);
        $country110 = Country::create([
            'name' => 'Malaui'
        ]);
        $country111 = Country::create([
            'name' => 'Maldivas'
        ]);
        $country112 = Country::create([
            'name' => 'Mali / Malí'
        ]);
        $country113 = Country::create([
            'name' => 'Malta'
        ]);
        $country114 = Country::create([
            'name' => 'Marruecos'
        ]);
        $country115 = Country::create([
            'name' => 'Islas Marshall'
        ]);
        $country116 = Country::create([
            'name' => 'Mauricio'
        ]);
        $country117 = Country::create([
            'name' => 'Mauritania'
        ]);
        $country118 = Country::create([
            'name' => 'México'
        ]);
        $country119 = Country::create([
            'name' => 'Micronesia'
        ]);
        $country120 = Country::create([
            'name' => 'Moldavia'
        ]);
        $country121 = Country::create([
            'name' => 'Mónaco'
        ]);
        $country122 = Country::create([
            'name' => 'Mongolia'
        ]);
        $country123 = Country::create([
            'name' => 'Montenegro'
        ]);
        $country124 = Country::create([
            'name' => 'Mozambique'
        ]);
        $country125 = Country::create([
            'name' => 'Birmania'
        ]);
        $country126 = Country::create([
            'name' => 'Namibia'
        ]);
        $country127 = Country::create([
            'name' => 'Nauru'
        ]);
        $country128 = Country::create([
            'name' => 'Nepal'
        ]);
        $country129 = Country::create([
            'name' => 'Nicaragua'
        ]);
        $country130 = Country::create([
            'name' => 'Níger'
        ]);
        $country131 = Country::create([
            'name' => 'Nigeria'
        ]);
        $country132 = Country::create([
            'name' => 'Noruega'
        ]);
        $country133 = Country::create([
            'name' => 'Nueva Zelanda'
        ]);
        $country134 = Country::create([
            'name' => 'Omán'
        ]);
        $country135 = Country::create([
            'name' => 'Países Bajos'
        ]);
        $country136 = Country::create([
            'name' => 'Pakistán'
        ]);
        $country137 = Country::create([
            'name' => 'Palaos'
        ]);
        $country138 = Country::create([
            'name' => 'Panamá'
        ]);
        $country139 = Country::create([
            'name' => 'Papúa Nueva Guinea'
        ]);
        $country140 = Country::create([
            'name' => 'Paraguay'
        ]);
        $country141 = Country::create([
            'name' => 'Perú'
        ]);
        $country142 = Country::create([
            'name' => 'Polonia'
        ]);
        $country143 = Country::create([
            'name' => 'Portugal'
        ]);
        $country144 = Country::create([
            'name' => 'Qatar'
        ]);
        $country145 = Country::create([
            'name' => 'Reino Unido'
        ]);
        $country146 = Country::create([
            'name' => 'República Centroafricana'
        ]);
        $country147 = Country::create([
            'name' => 'República Dominicana'
        ]);
        $country148 = Country::create([
            'name' => 'Rumanía / Rumania'
        ]);
        $country149 = Country::create([
            'name' => 'Rusia'
        ]);
        $country150 = Country::create([
            'name' => 'Ruanda'
        ]);
        $country151 = Country::create([
            'name' => 'San Cristóbal y Nieves'
        ]);
        $country152 = Country::create([
            'name' => 'Islas Salomón'
        ]);
        $country153 = Country::create([
            'name' => 'Samoa'
        ]);
        $country154 = Country::create([
            'name' => 'San Marino'
        ]);
        $country155 = Country::create([
            'name' => 'Santa Lucía'
        ]);
        $country156 = Country::create([
            'name' => 'Ciudad del Vaticano'
        ]);
        $country157 = Country::create([
            'name' => 'Santo Tomé y Príncipe'
        ]);
        $country158 = Country::create([
            'name' => 'San Vicente y las Granadinas'
        ]);
        $country159 = Country::create([
            'name' => 'Senegal'
        ]);
        $country160 = Country::create([
            'name' => 'Serbia'
        ]);
        $country161 = Country::create([
            'name' => 'Seychelles'
        ]);
        $country162 = Country::create([
            'name' => 'Sierra Leona'
        ]);
        $country163 = Country::create([
            'name' => 'Singapur'
        ]);
        $country164 = Country::create([
            'name' => 'Siria'
        ]);
        $country165 = Country::create([
            'name' => 'Somalia'
        ]);
        $country166 = Country::create([
            'name' => 'Sri Lanka'
        ]);
        $country167 = Country::create([
            'name' => 'Sudáfrica'
        ]);
        $country168 = Country::create([
            'name' => 'Sudán'
        ]);
        $country169 = Country::create([
            'name' => 'Sudán del Sur'
        ]);
        $country170 = Country::create([
            'name' => 'Suecia'
        ]);
        $country171 = Country::create([
            'name' => 'Suiza'
        ]);
        $country172 = Country::create([
            'name' => 'Surinam'
        ]);
        $country173 = Country::create([
            'name' => 'Suazilandia'
        ]);
        $country174 = Country::create([
            'name' => 'Tailandia'
        ]);
        $country175 = Country::create([
            'name' => 'Tanzania'
        ]);
        $country176 = Country::create([
            'name' => 'Tayikistán'
        ]);
        $country177 = Country::create([
            'name' => 'Timor Oriental'
        ]);
        $country178 = Country::create([
            'name' => 'Togo'
        ]);
        $country179 = Country::create([
            'name' => 'Tonga'
        ]);
        $country180 = Country::create([
            'name' => 'Trinidad y Tobago'
        ]);
        $country181 = Country::create([
            'name' => 'Túnez'
        ]);
        $country182 = Country::create([
            'name' => 'Turkmenistán'
        ]);
        $country183 = Country::create([
            'name' => 'Turquía'
        ]);
        $country184 = Country::create([
            'name' => 'Tuvalu'
        ]);
        $country185 = Country::create([
            'name' => 'Ucrania'
        ]);
        $country186 = Country::create([
            'name' => 'Uganda'
        ]);
        $country187 = Country::create([
            'name' => 'Uruguay'
        ]);
        $country188 = Country::create([
            'name' => 'Uzbekistán'
        ]);
        $country189 = Country::create([
            'name' => 'Vanuatu'
        ]);
        $country190 = Country::create([
            'name' => 'Venezuela'
        ]);
        $country191 = Country::create([
            'name' => 'Vietnam'
        ]);
        $country192 = Country::create([
            'name' => 'Yemen'
        ]);
        $country193 = Country::create([
            'name' => 'Zambia'
        ]);
        $country194 = Country::create([
            'name' => 'Zimbabue'
        ]);
    }

    private function createAddress()
    {
        $address1 = Address::create([
            'city' => 'Buenos Aires',
            'municipality' => 'Palermo',
            'state' => 'CABA',
            'zipcode' => '00001',
            'country_id' => 1,
        ]);
        $address2 = Address::create([
            'city' => 'Bogota',
            'municipality' => 'Bogota',
            'state' => 'Bogota',
            'zipcode' => '00002',
            'country_id' => 2,
        ]);
        $address3 = Address::create([
            'city' => 'Santiago de Chile',
            'municipality' => 'San Miguel',
            'state' => 'Santiago de Chile',
            'zipcode' => '00003',
            'country_id' => 3,
        ]);
        $address4 = Address::create([
            'city' => 'Quito',
            'municipality' => 'San Jose',
            'state' => 'Quito',
            'zipcode' => '00004',
            'country_id' => 4,
        ]);
        $address5 = Address::create([
            'city' => 'CDMX',
            'municipality' => 'Capital',
            'state' => 'CDMX',
            'zipcode' => '00005',
            'country_id' => 5,
        ]);
    }

    private function createContacts()
    {
        $contact1 = Contact::create([
            'business_name' => 'Teclados Mariana',
            'name' => 'Mariana',
            'last_name' => 'Sosa',
            'phone' => '5555555555',
            'email' => 'marianasosa@tecladosmariana.com',
            'address_id' => 1,
            'company_id' => 1
        ]);
        $contact2 = Contact::create([
            'business_name' => 'Lamparas Dora',
            'name' => 'Dora',
            'last_name' => 'Arevalo',
            'phone' => '5555555555',
            'email' => 'doraarevalo@lamparasdora.com',
            'address_id' => 2,
            'company_id' => 1
        ]);
        $contact3 = Contact::create([
            'business_name' => 'Calzados Loredana',
            'name' => 'Loredana',
            'last_name' => 'Vassallo',
            'phone' => '5555555555',
            'email' => 'lorevassallo@calzadosloredana.com',
            'address_id' => 3,
            'company_id' => 1
        ]);
        $contact4 = Contact::create([
            'business_name' => 'Banquetes Astrid',
            'name' => 'Astrid',
            'last_name' => 'Vassallo',
            'phone' => '5555555555',
            'email' => 'astridvassallo@banquetesastrid.com',
            'address_id' => 4,
            'company_id' => 2
        ]);
        $contact5 = Contact::create([
            'business_name' => 'Telas Julio',
            'name' => 'Julio',
            'last_name' => 'lovera',
            'phone' => '5555555555',
            'email' => 'juliolovera@telasjulio.com',
            'address_id' => 6,
            'company_id' => 2
        ]);
    }
}
