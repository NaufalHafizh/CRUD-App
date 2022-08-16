<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pelaksanaan extends Seeder
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
                'nama' => "Offline",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'nama' => "Online",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('pelaksanaans')->insert($pelaksanaan);
    }
}
