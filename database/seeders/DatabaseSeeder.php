<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> '123'
        ]);

        \App\Models\Brand::factory()->create([
            'name' => 'مرسيديس',
            'image'=> 'images/brand/merc.svg',
        ]);

        \App\Models\Brand::factory()->create([
            'name' => 'لاندلوفر',
            'image' => 'images/brand/landrover.svg',
        ]);

        \App\Models\Brand::factory()->create([
            'name' => 'borgwarner',
            'image' => 'images/brand/BWA_BIG.svg',
        ]);


        \App\Models\Type::factory()->create([
            'name' => 'القطع الداخليه',
            'name_en' => 'text',
        ]);

        \App\Models\Type::factory()->create([
            'name' => 'القطع الخارجيه',
            'name_en' => 'text',

        ]);

        \App\Models\Type::factory()->create([
            'name' => 'الاطارات والعجلات',
            'name_en' => 'text',

        ]);

        \App\Models\ContactInfo::factory()->create([
            'phone_1' => '0502115994',
            'phone_2' => '0112040824',
            'phone_whatsapp' => '0',
            'email' => 'www.alnomaniparts.com',
            'facebook_link' => '#',
            'insta_link' => '#',



        ]);

        $this->call([

            AboutUsSeeder::class,
        ]);

    }
}
