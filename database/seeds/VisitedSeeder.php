<?php

use Illuminate\Database\Seeder;
// use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB;


class VisitedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visits=[
          
            ['spot_id'=>'1',
             'user_id'  => '1'],
            ['spot_id'=>'3',
             'user_id'  => '3'],
  
           ];
           foreach ($visits as $visit) {
  
              DB::table('spot_visited')->insert([
                 'spot_id' => $visit['spot_id'],
                'user_id' => $visit['user_id'],
                 
              ]);
    }}
}
