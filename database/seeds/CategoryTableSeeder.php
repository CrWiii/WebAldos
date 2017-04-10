<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoryTableSeeder extends Seeder{

    public function run(){
		
		DB::table('Category')->insert(['description'=>'Joyas', 'state' => 1, 'created_by' => 'SYSTEM', 'created_by' => Carbon::now()]);		
		DB::table('Category')->insert(['description'=>'Novios', 'state' => 1, 'created_by' => 'SYSTEM', 'created_by' => Carbon::now()]);

    }
}
