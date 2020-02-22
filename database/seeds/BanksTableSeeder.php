<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            ['id'=>"1" ,'name' => "Jose luis Banesco", 'currency_id' => "2"],
            ['id'=>"2" ,'name' => "Jose luis Mercantil", 'currency_id' => "2"],
            ['id'=>"3" ,'name' => "Aura Mercantil", 'currency_id' => "2"],
            ['id'=>"4" ,'name' => "Aura Provincial", 'currency_id' => "2"],
            ['id'=>"5" ,'name' => "Aura Paypal", 'currency_id' => "1"],
            ['id'=>"6" ,'name' => "Jose Luis Paypal", 'currency_id' => "1"],
            ['id'=>"7" ,'name' => "Jose Luis Efectivo", 'currency_id' => "2"],
            ['id'=>"8" ,'name' => "Aura Efectivo", 'currency_id' => "2"],
            ['id'=>"9" ,'name' => "Jose Luis Efectivo Dolar", 'currency_id' => "1"]
        ];
        foreach ($banks as  $bank) { DB::table('banks')->insert($bank); }        
    }
}
