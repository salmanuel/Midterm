<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'John',
                'init_invest' => 1000000.00,
                'start_date' => '2021-06-21',
                'remarks' => 'Yes'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Emanuelle',
                'init_invest' => 90000000.00,
                'start_date' => '2022-07-21',
                'remarks' => 'Yes'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Salutan',
                'init_invest' => 90000.00,
                'start_date' => '2021-01-23',
                'remarks' => 'Yes'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
