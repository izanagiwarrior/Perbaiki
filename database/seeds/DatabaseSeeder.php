<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Customer;
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
                'username' => 'Example User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456'),
                'notelp' => "081234567890",
                'alamat' => "bandung",
            ],
            [
                'username' => 'Example User2',
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
    }
}
