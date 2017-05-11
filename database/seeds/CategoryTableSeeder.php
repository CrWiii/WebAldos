<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoryTableSeeder extends Seeder{

    public function run(){
    	DB::table('users')->insert([
            'email'         => 'cgjsl89@gmail.com',
            'password'      => '$2y$10$Jw/z2jTLZfztgWUHpxtjwetRMcFrgOKY20ST.wLVcWOBCyJFgbgQ.',
            'name'     => 'Cristhian Sevilla',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'email'         => 'mauricioalcantara93@gmail.com',
            'password'      => '$2y$10$D.QaQleKrZMrN9dOnmYrG./Fmlbe8S/nT.8JzGYR.odSJ4oH8OmXm',
            'name'     => 'Mauricio Alcantara',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
		
		DB::table('category')->insert(['description'=>'Joyas', 'state' => 1, 'created_by' => 'SYSTEM', 'created_at' => Carbon::now()]);		
		DB::table('category')->insert(['description'=>'Novios', 'state' => 1, 'created_by' => 'SYSTEM', 'created_at' => Carbon::now()]);
		
		DB::table('images')->insert([
			'description'=>'Anillo.png',
			'route'=>'/images/Anillo.png',
			'state'=>true,
			'created_by'=>2,
			'created_at'=>Carbon::now(),
			'updated_at'=>Carbon::now()
		]);
		DB::table('images')->insert([
			'description'=>'pendiente1.jpg',
			'route'=>'/images/pendiente1.jpg',
			'state'=>true,
			'created_by'=>2,
			'created_at'=>Carbon::now(),
			'updated_at'=>Carbon::now()
		]);
		DB::table('images')->insert(['description'=>'collar-zafiro.jpg','route'=>'/images/collar-zafiro.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'aretescolgantesblanco.jpg','route'=>'/images/aretescolgantesblanco.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'5EMAN04036.jpg','route'=>'/images/5EMAN04036.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'4ZAAR04008.jpg','route'=>'/images/4ZAAR04008.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'4ZAAN04078.jpg','route'=>'/images/4ZAAN04078.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'4ZAAN04078.jpg','route'=>'/images/4ZAAN04078.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'4RUAR04002.jpg','route'=>'/images/4RUAR04002.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'4EMAN04025.jpg','route'=>'/images/4EMAN04025.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'NA_4BIAN01427-768x768.jpg','route'=>'/images/NA_4BIAN01427-768x768.jpg
','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'NA_4BIAN01427-768x768.jpg','route'=>'/images/NA_4BIAN01427-768x768.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'1DIAR04518.jpg','route'=>'/images/1DIAR04518.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'1DIAR04518.jpg','route'=>'/images/1DIAR04518.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'4DIAN04589_1.jpg','route'=>'/images/4DIAN04589_1.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'AC_1DIAN02028-768x768.jpg','route'=>'/images/AC_1DIAN02028-768x768.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'AC_1DIAN04042-768x768.jpg','route'=>'/images/AC_1DIAN04042-768x768.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'/images/AC_1DIAN04074-768x768.jpg','route'=>'/images/AC_1DIAN04074-768x768.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'/images/AC_1DIAN04076-768x768.jpg','route'=>'/images/AC_1DIAN04076-768x768.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'/images/AC_1DIAN04081-768x768.jpg','route'=>'/images/AC_1DIAN04081-768x768.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'/images/anillo4.jpg','route'=>'/images/anillo4.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'/images/anillo5.jpg','route'=>'/images/anillo5.jpg','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert(['description'=>'','route'=>'','state'=>true,'created_by'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
		DB::table('images')->insert([
			'description'=>'480.jpg',
			'route'=>'/images/480.jpg',
			'state'=>true,
			'created_by'=>1,
			'created_at'=>Carbon::now(),
			'updated_at'=>Carbon::now()
		]);


		DB::table('type')->insert([
			'slug'=>'anillos',
			'images_id_frame'=>1,
			'description'=>'Anillos',
			'images_id'=>1,
			'category_id'=>1,
			'state'=>true,
			'frame'=>false,
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
			]);
		DB::table('type')->insert([
			'slug'=>'aretes',
			'images_id_frame'=>1,
			'description'=>'Aretes',
			'images_id'=>1,
			'category_id'=>1,
			'state'=>true,
			'frame'=>false,
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
			]);
		DB::table('type')->insert([
			'slug'=>'collares',
			'images_id_frame'=>1,
			'description'=>'Collares',
			'images_id'=>1,
			'category_id'=>1,
			'state'=>true,
			'frame'=>false,
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
			]);
		DB::table('type')->insert([
			'slug'=>'dijes',
			'images_id_frame'=>1,
			'description'=>'Dijes',
			'images_id'=>1,
			'category_id'=>1,
			'state'=>true,
			'frame'=>false,
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
			]);
		DB::table('type')->insert([
			'slug'=>'gemelos',
			'images_id_frame'=>1,
			'description'=>'Gemelos',
			'images_id'=>1,
			'category_id'=>1,
			'state'=>true,
			'frame'=>false,
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
		]);
		DB::table('type')->insert([
			'slug'=>'pendientes',
			'images_id_frame'=>1,
			'description'=>'Pendientes',
			'images_id'=>1,
			'category_id'=>1,
			'state'=>true,
			'frame'=>false,
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
		]);
		DB::table('type')->insert([
			'slug'=>'pulseras',
			'images_id_frame'=>1,
			'description'=>'Pulseras',
			'images_id'=>1,
			'category_id'=>1,
			'state'=>true,
			'frame'=>false,
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
		]);
		DB::table('type')->insert([
			'images_id_frame'=>1,
			'description'=>'Anillos de compromiso',
			'content' => 'Como para toda la vida, Aldo&Co. diseña cada uno de sus anillos como una pieza única, con la delicadeza y el detalle que merece aquello que va a durar por siempre. Nuestra promesa es hacer que su compromiso vaya más allá del tiempo.',
			'images_id'=>1,
			'category_id'=>2,
			'state'=>true,
			'frame'=>false,
			'images_id_frame'=>1,
			'slug'=>'anillos_de_compromiso',
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
		]);
		DB::table('type')->insert([
			'images_id_frame'=>1,
			'description'=>'Aros de matrimonio',
			'content' => 'En Aldo&Co. forjamos las alianzas que durarán por siempre para aquellos que se prometen amor y respeto.',
			'images_id'=>1,
			'category_id'=>2,
			'state'=>true,
			'frame'=>false,
			'images_id_frame'=>1,
			'slug'=>'aros_de_matrimonio',
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
		]);

		DB::table('type')->insert([
			'images_id_frame'=>1,
			'description'=>'Colectivo de Novios',
			'images_id'=>1,
			'category_id'=>2,
			'state'=>true,
			'frame'=>true,
			'images_id_frame'=>1,
			'slug'=>'colectivo_de_novios',
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
		]);

		DB::table('type')->insert([
			'images_id_frame'=>1,
			'description'=>'Más allá de las 4CS',
			'images_id'=>1,
			'category_id'=>2,
			'state'=>true,
			'frame'=>true,
			'images_id_frame'=>1,
			'slug'=>'mas_alla_de_las_4cs',
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
		]);

		DB::table('type')->insert([
			'images_id_frame'=>1,
			'description'=>'Preguntas Frecuentes',
			'images_id'=>1,
			'category_id'=>2,
			'state'=>true,
			'frame'=>true,
			'images_id_frame'=>1,
			'slug'=>'preguntas_frecuentes',
			'created_by'=> 1,
			'updated_by'=> 1,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now()
		]);


DB::table('products')->insert([
'name'			=>'Pendiente Oro',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>6,
'category_id'	=>1,
'images_id'		=>2,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);

DB::table('products')->insert([
'name'			=>'Collar Zafiro',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>3,
'category_id'	=>1,
'images_id'		=>3,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);

DB::table('products')->insert([
'name'			=>'Aretes Colgantes',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>2,
'category_id'	=>1,
'images_id'		=>4,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);


DB::table('products')->insert([
'name'			=>'Anillo Esmeralda',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>1,
'category_id'	=>1,
'images_id'		=>5,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);

DB::table('products')->insert([
'name'			=>'Gemelos Negros',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>5,
'category_id'	=>1,
'images_id'		=>6,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);


DB::table('products')->insert([
'name'			=>'Anillo Zafiro',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>1,
'category_id'	=>1,
'images_id'		=>7,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);


DB::table('products')->insert([
'name'			=>'Aretes Rojos',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>2,
'category_id'	=>1,
'images_id'		=>8,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);


DB::table('products')->insert([
'name'			=>'Anillo Esmeralda 2',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>1,
'category_id'	=>1,
'images_id'		=>9,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);

DB::table('products')->insert([
'name'			=>'Aro de Compromiso',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>10,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);

DB::table('products')->insert([
'name'			=>'Arete Plata Dark',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>2,
'category_id'	=>1,
'images_id'		=>11,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);


DB::table('products')->insert([
'name'			=>'Anillo 1',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>12,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);

DB::table('products')->insert([
'name'			=>'Anillo 1',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>12,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]);

DB::table('products')->insert([
'name'			=>'Anillo 2',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>13,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]); 

DB::table('products')->insert([
'name'			=>'Anillo 3',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>14,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]); 

DB::table('products')->insert([
'name'			=>'Anillo 4',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>15,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]); 

DB::table('products')->insert([
'name'			=>'Anillo 5',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>16,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]); 


DB::table('products')->insert([
'name'			=>'Anillo 6',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>17,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]); 


DB::table('products')->insert([
'name'			=>'Anillo 7',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>18,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]); 

DB::table('products')->insert([
'name'			=>'Anillo 8',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>19,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]); 


DB::table('products')->insert([
'name'			=>'Anillo 9',
'description'	=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
'type_id'		=>8,
'category_id'	=>2,
'images_id'		=>20,
'state'			=>true,
'created_by'	=>2,
'updated_by'	=>2,
'created_at'	=>Carbon::now(),
'updated_at'	=>Carbon::now(),]); 




DB::Table('frames')->insert([
	'title' 		=>'HISTORIA',
	'subtitle' 		=>'Tres décadas, dos generaciones, una historia...',
	'frame_type'	=>1,
	'route'			=>'ElMundoDeAldo/Historia',
	'slug'			=>'Historia',
	'images_id'		=> 24,
	// 'content'		=> '',
	'state'			=> 1,
	'created_by'	=> 1,
	'updated_by'	=> 1,
	'created_at'	=>Carbon::now(),
	'updated_at'	=>Carbon::now(),
]);

DB::Table('frames')->insert([
	'title' 		=>'NOSOTROS',
	'subtitle' 		=>'Tres décadas, dos generaciones, una historia...',
	'frame_type'	=>1,
	'route'			=>'ElMundoDeAldo/Nosotros',
	'slug'			=>'Nosotros',
	'images_id'		=> 24,
	// 'content'		=> '',
	'state'			=> 1,
	'created_by'	=> 1,
	'updated_by'	=> 1,
	'created_at'	=>Carbon::now(),
	'updated_at'	=>Carbon::now(),
]);

DB::Table('frames')->insert([
	'title' 		=>'CREANDO MAGIA',
	'subtitle' 		=>'El nacimiento de una joya...',
	'frame_type'	=>1,
	'route'			=>'ElMundoDeAldo/creando_magia',
	'slug'			=>'creando_magia',
	'images_id'		=> 24,
	// 'content'		=> '',
	'state'			=> 1,
	'created_by'	=> 1,
	'updated_by'	=> 1,
	'created_at'	=>Carbon::now(),
	'updated_at'	=>Carbon::now(),
]);

DB::Table('frames')->insert([
	'title' 		=>'RESPONSABILIDAD SOCIAL',
	'subtitle' 		=>'Detalles que ayudan...',
	'frame_type'	=>1,
	'route'			=>'ElMundoDeAldo/responsabilidad_social',
	'slug'			=>'responsabilidad_social',
	'images_id'		=> 24,
	// 'content'		=> '',
	'state'			=> 1,
	'created_by'	=> 1,
	'updated_by'	=> 1,
	'created_at'	=>Carbon::now(),
	'updated_at'	=>Carbon::now(),
]);


DB::Table('frames')->insert([
	'title' 		=> 'NOVIOS',
	'subtitle' 		=> 'Prometo amarte',
	'frame_type'	=> 2,
	'route'			=> 'Novios',
	// 'slug'			=> '',
	'images_id'		=> 24,
	'content'		=> 'Cuenta el mito que del dedo anular sale una vena que va hasta el corazón, vena amoris o vena del amor es la conexión entre aquellos que se prometen amor y respeto',
	'state'			=> 1,
	'created_by'	=> 1,
	'updated_by'	=> 1,
	'created_at'	=>Carbon::now(),
	'updated_at'	=>Carbon::now(),
]);

DB::Table('frames')->insert([
	'title' 		=> 'PATEK PHILIPPE',
	'subtitle' 		=> 'Más allá del tiempo',
	'frame_type'	=> 2,
	'route'			=> 'PatekPhilippe',
	// 'slug'			=> '',
	'images_id'		=> 24,
	'content'		=> 'Aldo & Co recibe la confianza para ser representante de las mejores marcas de alta relojería a nivel mundial. Las mismas que ponen la precisión y elegancia al alcanze de nuestros clientes.',
	'state'			=> 1,
	'created_by'	=> 1,
	'updated_by'	=> 1,
	'created_at'	=>Carbon::now(),
	'updated_at'	=>Carbon::now(),
]);

DB::Table('frames')->insert([
	'title' 		=> 'JOYERÍA',
	'subtitle' 		=> 'Oro soy',
	'frame_type'	=> 2,
	'route'			=> 'Joyeria',
	// 'slug'			=> '',
	'images_id'		=> 24,
	'content'		=> 'Fieles a nuestra historia, Aldo&Co le da un lugar central a la colección Amarilis. Inspirada en la poetiza peruana del siglo de Oro que le da nombre a la colección, y los misterios alrededor de su vida, los diseños Amarilis transmiten una visión romántica y respetuosa de las formas en el trabajo del oro.',
	'state'			=> 1,
	'created_by'	=> 1,
	'updated_by'	=> 1,
	'created_at'	=>Carbon::now(),
	'updated_at'	=>Carbon::now(),
]);


// 33
// Anillo 10
// Many desktop publishing packages and web page edit...
// 8
// 2
// 32
// 1
// 2
// NULL
// 2017-04-12 17:18:17
// 2017-04-12 17:18:17

// Editar Editar
//  Copiar Copiar
//  Borrar Borrar
// 34
// Anillo 11
// Many desktop publishing packages and web page edit...
// 8
// 2
// 33
// 1
// 2
// NULL
// 2017-04-12 17:18:46
// 2017-04-12 17:18:46

// Editar Editar
//  Copiar Copiar
//  Borrar Borrar
// 35
// Anillo 12
// Many desktop publishing packages and web page edit...
// 8
// 2
// 34
// 1
// 2
// NULL
// 2017-04-12 17:19:04
// 2017-04-12 17:19:04

// Editar Editar
//  Copiar Copiar
//  Borrar Borrar
// 36
// Anillo 13
// Many desktop publishing packages and web page edit...
// 8
// 2
// 35
// 1
// 2
// NULL
// 2017-04-12 17:19:23
// 2017-04-12 17:19:23

// Editar Editar
//  Copiar Copiar
//  Borrar Borrar
// 37
// Anillo 14
// Many desktop publishing packages and web page edit...
// 8
// 2
// 36
// 1
// 2
// NULL
// 2017-04-12 17:19:39
// 2017-04-12 17:19:39

// anillo 15
// Many desktop publishing packages and web page edit...
// 8
// 2
// 37
// 1
// 2



    }
}
