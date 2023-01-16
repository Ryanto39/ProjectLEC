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
            'job_image' => 'WebDesign.png',
            'job_price' => '200',
            'job_teamCount' => '5',
            'job_status' => 'unoccupied'
        ]);

        Job::insert([
            'category_id' => '2',
            'user_id' => '2',
            'job_name' => 'App Design',
            'job_description' => 'App design combines the user interface (UI) and user experience (UX).',
            'job_image' => 'AppDesign.png',
            'job_price' => '400',
            'job_teamCount' => '5',
            'job_status' => 'unoccupied'
        ]);

        Job::insert([
            'category_id' => '1',
            'user_id' => '2',
            'job_name' => 'Web Security',
            'job_description' => 'Web security refers to the protective measures to protect the web from cyber criminals and threats.',
            'job_image' => 'WebSecurity.png',
            'job_price' => '200',
            'job_teamCount' => '2',
            'job_status' => 'unoccupied'
        ]);

        Job::insert([
            'category_id' => '3',
            'user_id' => '2',
            'job_name' => 'Server Testing',
            'job_description' => 'Server testing verifies that the services you need to develop your apps are working as intended.',
            'job_image' => 'ServerTesting.png',
            'job_price' => '100',
            'job_teamCount' => '2',
            'job_status' => 'unoccupied'
        ]);

        Job::insert([
            'category_id' => '1',
            'user_id' => '1',
            'job_name' => 'Web Testing',
            'job_description' => 'Web testing ensures quality by testing that the functionality of a given web application is working as intended or as per the requirements.',
            'job_image' => 'WebTesting.png',
            'job_price' => '100',
            'job_teamCount' => '2',
            'job_status' => 'unoccupied'
        ]);

        Job::insert([
            'category_id' => '1',
            'user_id' => '1',
            'job_name' => 'Web Testing',
            'job_description' => 'Web testing ensures quality by testing that the functionality of a given web application is working as intended or as per the requirements.',
            'job_image' => 'WebTesting.png',
            'job_price' => '100',
            'job_teamCount' => '2',
            'job_status' => 'unoccupied'
        ]);

        Job::insert([
            'category_id' => '1',
            'user_id' => '1',
            'job_name' => 'Web Testing',
            'job_description' => 'Web testing ensures quality by testing that the functionality of a given web application is working as intended or as per the requirements.',
            'job_image' => 'WebTesting.png',
            'job_price' => '100',
            'job_teamCount' => '2',
            'job_status' => 'unoccupied'
        ]);

        Job::insert([
            'category_id' => '1',
            'user_id' => '1',
            'job_name' => 'Web Testing',
            'job_description' => 'Web testing ensures quality by testing that the functionality of a given web application is working as intended or as per the requirements.',
            'job_image' => 'WebTesting.png',
            'job_price' => '100',
            'job_teamCount' => '2',
            'job_status' => 'unoccupied'
        ]);

        Job::insert([
            'category_id' => '1',
            'user_id' => '1',
            'job_name' => 'Web Testing',
            'job_description' => 'Web testing ensures quality by testing that the functionality of a given web application is working as intended or as per the requirements.',
            'job_image' => 'WebTesting.png',
            'job_price' => '100',
            'job_teamCount' => '2',
            'job_status' => 'unoccupied'
        ]);
    }
}
