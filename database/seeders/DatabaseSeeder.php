<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Industry;
use App\Models\NewsSubscriber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('public/images/products');
        Storage::makeDirectory('public/images/users');
        Storage::makeDirectory('public/images/blogs');
        Storage::makeDirectory('public/images/blogs/thumbnail');
        Storage::makeDirectory('public/images/industries');
        Storage::makeDirectory('public/images/admins');

        $this->call(AdminSeeder::class);
        // $this->call(BlogCategorySeeder::class);
        // $this->call(BlogSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(IndustrySeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(NewsSubscriberSeeder::class);
    }
}
