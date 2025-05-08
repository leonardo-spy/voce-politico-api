<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            'name' => 'leonardo',
            'email' => 'teste@teste.com',
            'email_verified_at' => null,
            'password' => '$2y$10$F8aObWeKqzeIQcxT6SdGmOrblT8sSLmW7hL4EegwfmIKagn5gcjwO', // senha
            'remember_token' => Str::random(10),
        ]);
        \App\Models\Questoes::insert(
            ['desc_questao' =>'A opressão por parte das corporações é um problema mais grave do que a opressão por parte dos governos.','econ' => 10,'dipl' => 0,'govt'=> -5,'scty' =>0],
            ['desc_questao' =>'É necessário que o governo intervenha na economia para proteger os consumidores.','econ' => 10,'dipl' => 0,'govt'=> 0,'scty' =>0],
            ['desc_questao' =>'Quanto mais livre é o mercado, mais livres são as pessoas.','econ' => -10,'dipl' => 0,'govt'=> 0,'scty' =>0],
            ['desc_questao' =>'É melhor manter o orçamento em ordem do que garantir o bem-estar social para todos os cidadãos.','econ' => -10,'dipl' => 0,'govt'=> 0,'scty' =>0],
            ['desc_questao' =>'Pesquisas publicamente financiadas são um maior benefício a população do que deixá-las exclusivamente sob a administração do setor privado.','econ' => 10,'dipl' => 0,'govt'=> 0,'scty' =>10]); 

    }
}
