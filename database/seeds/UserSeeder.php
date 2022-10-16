<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'lname' => 'Salutan',
                'fname' => 'John Emanuelle',
                'address' => 'Bunacan, Tubigon, Bohol',
                'phone' => '09087446995',
                'email' => 'salutanemanuelle@gmail.com',
                'password' => bcrypt('password231')
            ],
            [
                'id' => 2,
                'lname' => 'Latina',
                'fname' => 'Emelyn',
                'address' => 'Buncan, Tubigon, Bohol',
                'phone' => '09091234567',
                'email' => 'emelynlatina@gmail.com',
                'password' => bcrypt('password321')
            ],
            [
                'id' => 3,
                'lname' => 'Salutan',
                'fname' => 'Teofila',
                'address' => 'Buncan, Tubigon, Bohol',
                'phone' => '09123456789',
                'email' => 'teofilasalutan@gmail.com',
                'password' => bcrypt('password1234')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
