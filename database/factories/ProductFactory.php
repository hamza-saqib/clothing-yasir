<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Industry;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'summary' => $this->faker->paragraph(),
            'description' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'meta_tag_title' => $this->faker->name(),
            'meta_tag_description' => $this->faker->paragraph(),
            'is_active' => $this->faker->randomElement([true, false]),
            'image1' => $this->faker->image('public/storage/images/products', 500, 500, null, false),
            'image2' => $this->faker->image('public/storage/images/products', 500, 500, null, false),
            'image3' => $this->faker->image('public/storage/images/products', 500, 500, null, false),
            'image4' => $this->faker->image('public/storage/images/products', 500, 500, null, false),
            'image5' => $this->faker->image('public/storage/images/products', 500, 500, null, false),

            'industry_id' => Industry::pluck('id')->random(),
            'admin_id' => Admin::pluck('id')->random(),
        ];
    }
}
