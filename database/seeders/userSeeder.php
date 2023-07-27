<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n =[
            ['name' => "Md Nobir Hasan",
            'email' => "nobir.wd@gmail.com",
            'phone' => "01518460933",
            'roll' => 2,
            'password' => Hash::make(1518460933),
        ],
            ['name' => "Super Admin",
            'email' => "suppor@preventivecarebd.com",
            'phone' => "01521442375",
            'password' => Hash::make('jf#3d%otD#'),
            'roll' => 2,
            ]
        ];
        DB::table('users')->insert($n);
    }
}
