<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class event extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [

                'pelaksanaan_id' => 2,
                'kategori_id' => 1,
                'nama' => "testing 1",
                'tanggal' => Carbon::create('2022', '08', '16'),
                'seat' => 30,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [

                'pelaksanaan_id' => 3,
                'kategori_id' => 2,
                'nama' => "testing 2",
                'tanggal' => Carbon::create('2022', '08', '17'),
                'seat' => 30,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [

                'pelaksanaan_id' => 2,
                'kategori_id' => 1,
                'nama' => "testing 2",
                'tanggal' => Carbon::create('2022', '08', '18'),
                'seat' => 30,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ]
        ];

        DB::table('events')->insert($events);
    }
}
