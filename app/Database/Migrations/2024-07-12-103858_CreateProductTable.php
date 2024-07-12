<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;


class CreateProductTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'  => 'int',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                // 'unique'     => true,
                'null' => true
            ],
            'images' => [
                'type'  => 'VARCHAR',
                'constraint'    => '255',
                'null' => true
            ],
            'description' => [
                'type' => 'TEXT',
                'constraint' => '255',
                'null' => true
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true
            ],
            'stock' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2   ',
                'null' => true
            ],
            'created_at' => [
            'type'    => 'TIMESTAMP',
            'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        // $this->forge->addForeignKey('product_category', 'category', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('products');

    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
