<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Industry;
use App\Models\NewsSubscriber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
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

        $this->makeDirectories();

        $this->call(AdminSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductSubCategorySeeder::class);
        // $this->call(BlogCategorySeeder::class);
        // $this->call(BlogSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(IndustrySeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(NewsSubscriberSeeder::class);
    }

    public function makeDirectories(){
        if(!File::isDirectory(public_path().'/storage')){
            File::makeDirectory(public_path().'/storage');
        }
        if(!File::isDirectory(public_path().'/storage/images')){
            File::makeDirectory(public_path().'/storage/images');
        }
        if(!File::isDirectory(public_path().'/storage/images/users')){
            File::makeDirectory(public_path().'/storage/images/users');
        }
        if(!File::isDirectory(public_path().'/storage/images/admins')){
            File::makeDirectory(public_path().'/storage/images/admins');
        }
        if(!File::isDirectory(public_path().'/storage/images/blogs')){
            File::makeDirectory(public_path().'/storage/images/blogs');
        }
        if(!File::isDirectory(public_path().'/storage/images/products')){
            File::makeDirectory(public_path().'/storage/images/products');
        }
    }
}
