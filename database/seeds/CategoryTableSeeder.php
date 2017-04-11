<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoryTableSeeder extends Seeder{

    public function run(){
    	DB::table('users')->insert([
            'email'         => 'cgjsl89@gmail.com',
            'password'      => bcrypt('1qaz2wsx'),
            'name'     => 'Cristhian Sevilla',
            'created_at' => Carbon::now()
        ]);
		
		DB::table('Category')->insert(['description'=>'Joyas', 'state' => 1, 'created_by' => 'SYSTEM', 'created_by' => Carbon::now()]);		
		DB::table('Category')->insert(['description'=>'Novios', 'state' => 1, 'created_by' => 'SYSTEM', 'created_by' => Carbon::now()]);
		DB::table('images')->insert(['description'=>'test']);

		DB::table('type')->insert(['description'=>'Anillos','images_id'=>1,'category_id'=>1,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);
		DB::table('type')->insert(['description'=>'Aretes','images_id'=>1,'category_id'=>1,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);
		DB::table('type')->insert(['description'=>'Collares','images_id'=>1,'category_id'=>1,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);
		DB::table('type')->insert(['description'=>'Dijes','images_id'=>1,'category_id'=>1,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);
		DB::table('type')->insert(['description'=>'Gemelos','images_id'=>1,'category_id'=>1,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);
		DB::table('type')->insert(['description'=>'Pedientes','images_id'=>1,'category_id'=>1,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);
		DB::table('type')->insert(['description'=>'Pulseras','images_id'=>1,'category_id'=>1,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);

		


		DB::table('type')->insert(['description'=>'Anillos de compromiso','images_id'=>1,'category_id'=>2,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);
		DB::table('type')->insert(['description'=>'Aros de matrimonio','images_id'=>1,'category_id'=>2,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);
		DB::table('type')->insert(['description'=>'Más allá de las 4CS','images_id'=>1,'category_id'=>2,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);
		DB::table('type')->insert(['description'=>'Colectivo de Novios','images_id'=>1,'category_id'=>2,'state'=>true,'created_by'=> 'SYSTEM','updated_by'=> Carbon::now()]);
    }
}
