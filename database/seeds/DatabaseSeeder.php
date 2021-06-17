<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Customer;
use App\Mitra;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $customer = [
            [
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456'),
                'notelp' => "081234567890",
                'alamat' => "bandung",
            ],
            [
                'username' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => bcrypt('123456'),
                'notelp' => "081234567891",
                'alamat' => "bandung",
            ],
        ];

        foreach ($customer as $key => $value) {
            Customer::create($value);
        }

        $admin = [
            [
                'username' => 'admin',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($admin as $key => $value) {
            Admin::create($value);
        }

        $mitra = [
            [
                'username' => 'mitra',
                'password' => bcrypt('123456'),
                'nama' => 'mitra 1',
                'notelp' => "081234567891",
                'descPerform' => "Tukang Kayu",
            ],
            [
                'username' => 'mitra2',
                'password' => bcrypt('123456'),
                'nama' => 'mitra 2',
                'notelp' => "081234567891",
                'descPerform' => "Tukang Sabun",
            ],
        ];

        foreach ($mitra as $key => $value) {
            Mitra::create($value);
        }
    }
}
