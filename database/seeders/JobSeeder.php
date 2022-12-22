<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::insert([
            'category_id' => '1',
            'user_id' => '3',
            'job_name' => 'Web Design',
            'job_description' => 'Web design ecompasses many different skills and disciplines in the production and maintenance of websites.',
            'job_image' => 'asset/WebDesign.png',
            'job_price' => '200',
            'job_teamCount' => '5'
        ]);
    }
}
