<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
	        DB::table('produtos')->insert(
	        	[
	            'nome' => 'TV SAMSUNG 8413',
	            'valor' => 4000.00,
	            'tipo_produto' => 1
	        	]
	    	);

	    	DB::table('produtos')->insert(
	        	[
	            'nome' => 'APPLE WATCH',
	            'valor' => 2500.00,
	            'tipo_produto' => 1
	        	]
	    	);

	    	DB::table('produtos')->insert(
	        	[
	            'nome' => 'DELL INSPIRON 15',
	            'valor' => 3000.00,
	            'tipo_produto' => 1
	        	]
	    	);

	    	DB::table('tipo_produtos')->insert(
	        	[
	            'nome' => 'EQUIPAMENTOS'
	        	]
	    	);
    }
}
