<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
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
        $csvFilePath = base_path('database/data/contact.csv');
        $csvFile = fopen($csvFilePath, 'r');

        while (($data = fgetcsv($csvFile, 2000, ',')) !== false) {
            if (!$firstLine) {
                $contactObj = new Contact;
                $contactObj->id = $data[0];
                $contactObj->first_name = $data[1];
                $contactObj->last_name = $data[2];
                $contactObj->phone_number = $data[3];
                $contactObj->address = $data[4];
                $contactObj->user_id = $data[5];

                $contactObj->save();
            }

            $firstLine = false;
        }
    }
}