<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            ['id'=>"1" ,'name' => "Dollars", 'symbol' => "$",],
            ['id'=>"2" ,'name' => "Bolivares", 'symbol' => "Bs"]
        ];
        foreach ($currencies as $currency) { 
            DB::table('currencies')->insert($currency); 
        }
            
    
    }
}
