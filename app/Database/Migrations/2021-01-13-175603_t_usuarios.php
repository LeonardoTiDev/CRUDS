<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
{
	public function up()
	{
			$this->forge->addField([
					'id_user'          => [
							'type'           => 'INT',
							'constraint'     => 5,
							'unsigned'       => true,
							'auto_increment' => true,
					],
					'nombre'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '100',
					],

					'apellido_paterno'       => [
						'type'           => 'VARCHAR',
						'constraint'     => '100',
				   ],


			     	'apellido_materno'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
		           	],


		           	'fechaNac'       => [
			     	'type'           => 'DATE',
			     	'constraint'     => '',
	            	],

		           'direccion'       => [
		           	'type'           => 'VARCHAR',
		             	'constraint'     => '100',
	                     ],


	                  'correo'       => [
	               	'type'           => 'VARCHAR',
	       	'constraint'     => '100',
],


'telefono'       => [
	'type'           => 'VARCHAR',
	'constraint'     => '100',
],





				
			]);
			$this->forge->addKey('id_user', true);
			$this->forge->createTable('t_usuarios');
	}

	public function down()
	{
			$this->forge->dropTable('blog');
	}
}
