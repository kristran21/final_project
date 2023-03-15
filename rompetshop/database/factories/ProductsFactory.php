<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'=>1,
            'brand_id'=>1,
            'product_desc'=>"New Arrivals",
            'product_name'=>"Pet No.",
            'product_content'=>"Thằn lằn đẹp",
            'product_price'=>$this->faker->numberBetween($min = 5, $max = 25),
            'product_image'=>"pet.jpg",
            'product_status'=>0,
        ];
    }
}
