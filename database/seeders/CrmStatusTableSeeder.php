<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2021-05-23 11:43:09',
                'updated_at' => '2021-05-23 11:43:09',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2021-05-23 11:43:09',
                'updated_at' => '2021-05-23 11:43:09',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2021-05-23 11:43:09',
                'updated_at' => '2021-05-23 11:43:09',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}