<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->csvSeed();
    }

    public function csvSeed()
    {
        $firstLine = true;
        $csvFilePath = base_path('database/data/user.csv');
        $csvFile = fopen($csvFilePath, 'r');

        while (($data = fgetcsv($csvFile, 2000, ',')) !== false) {
            if (!$firstLine) {
                $userObj = new User;
                $userObj->id = $data[0];
                $userObj->name = $data[1];
                $userObj->email = $data[2];
                $userObj->password = $data[3];

                $userObj->save();
            }

            $firstLine = false;
        }
    }
}