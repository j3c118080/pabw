<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hobi extends Migration
{
	private $table = 'hobi';
	public function up()
	{
		$this->forge->addField([
			//membuat kolom ditabel prodi
			'kode_hobi' => [
				'type'	=> 'INT',
				'constraint'	=> '11',
				'unsigned'		=> TRUE,
				'auto_increment' => TRUE,
			],

			'nama_hobi'	=> [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
		]);
		$this->forge->addKey('kode_hobi', true); //menjadikan sabagai primary key
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}

