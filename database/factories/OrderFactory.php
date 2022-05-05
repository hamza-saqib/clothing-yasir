<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'height' => $this->faker->numberBetween($min = 1, $max = 1000),
            'width' => $this->faker->numberBetween($min = 1, $max = 1000),
            'depth' => $this->faker->numberBetween($min = 1, $max = 1000),
            'unit' => $this->faker->randomElement(['Inches', 'CM', 'MM']),
            'material' => $this->faker->randomElement(['14pt. Cardstock', 'Corrugated Cardboard', 'Rigid Material']),
            'color' => $this->faker->randomElement(['1', '2', '5', '1/5', '4/6']),
            'qty_1' => $this->faker->numberBetween($min = 1, $max = 1000),
            'qty_2' => $this->faker->numberBetween($min = 1, $max = 1000),
            'addons' => json_encode("['asd','asd']"),
            'customer_name' => $this->faker->name(),
            'customer_email' => $this->faker->safeEmail(),
            'customer_phone' => $this->faker->e164PhoneNumber(),
            'customer_note' => $this->faker->paragraph(),
            'page_url' => $this->faker->url(),
            'status' => $this->faker->randomElement(['Pending', 'Inprocess', 'Canceled', 'Shipped', 'Delivered']),

            'product_id' => Product::pluck('id')->random(),
            'user_id' => User::pluck('id')->random(),
            'admin_id'=> Admin::pluck('id')->random(),
        ];
    }
}
