<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Faker\Provider\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<=10;$i++) {
            DB::table('contacts')->insert([
                'photo' => Str::random(10),
                'surname' => Str::random(10),
                'name' => Str::random(10),
                'patronymic' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'phone_number' => Str::random(10),
                'site' => Str::random(10),
                'city' => Str::random(10),
                'work_place' => Str::random(10),
                'position' => Str::random(10),
                'work_email' => Str::random(10) . '@gmail.com',
                'comment' => Str::random(10),
                'favourites' => 1
            ]);
        }
    }
}
