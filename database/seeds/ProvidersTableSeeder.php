<?php

use Illuminate\Database\Seeder;
use App\Provider;
class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create([
            'user_id' => '1',
            'cnpj' => '99999999999999',
            'address' => 'Rua José Alves do nascimento'
        ]);
    }
}
