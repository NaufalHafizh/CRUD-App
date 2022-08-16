<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ketegori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pelaksanaan = [
            [
                'nama' => "Webiner",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'nama' => "Academic",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'nama' => "Scholarship",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'nama' => "E-Sport",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('kategoris')->insert($pelaksanaan);
    }
}
