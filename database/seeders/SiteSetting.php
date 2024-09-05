<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSetting extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_settings')->insert([
            'name' => 'Ecommerce',
            'slogan' => 'commerce (or electronic commerce) is the buying and selling of goods or services on the Internet. It encompasses a wide variety of data, systems and tools for online buyers and sellers, including mobile shopping and online payment encryption.',
            'logo' => 'https://1000logos.net/wp-content/uploads/2020/08/Shopify-Logo.png',
            'favicon' => 'https://1000logos.net/wp-content/uploads/2020/08/Shopify-Logo.png',
            'email' => 'support@gmail.com',
            'phone' => '9988998899',
            'address' => 'Suite 278 18371 Nilda Lake, Breitenbergshire, CO 006709',
            'facebook' => 'http://www.facebook.com',
            'twitter' => 'http://twitter.com',
            'instagram' => 'http://www.instagram.com',
            'youtube' => 'http://www.youtube.com',
            'linkedin' => 'http://www.linkedin.com',




        ]);
    }
}
