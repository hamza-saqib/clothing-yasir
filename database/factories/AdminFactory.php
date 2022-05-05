<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->e164PhoneNumber(),
            'role' => $this->faker->randomElement(['Editor', 'Admin', 'Moderator']),
            'is_active' => $this->faker->randomElement([true, false]),
            'profile_image' => $this->faker->image('public/storage/images/admins', 50, 50, null, false),
            'password' => Hash::make('admin@123'), // password
        ];
    }
}
