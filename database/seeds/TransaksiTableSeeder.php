<?php

use Illuminate\Database\Seeder;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            [
                'page' => 2,
                'copy' => 3,
                'paper_type' => 'A4',
                'binding' => 'Yes',
                'file_path' => 'Lorem',
                'total' => 100,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'page' => 1,
                'copy' => 5,
                'paper_type' => 'F4',
                'binding' => 'Yes',
                'file_path' => 'Lorem',
                'total' => 400,
                'created_at' => new DateTime,
                'updated_at' => null,
            ]
            ];
        //
    }
}
