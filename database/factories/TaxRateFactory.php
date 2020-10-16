<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use AvoRed\Framework\Database\Models\TaxRate;

$factory->define(TaxRate::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'postcode' => $faker->postcode,
        'rate' => $faker->randomFloat(2, 0, 2),
        'rate_type' => 'PERCENTAGE',
    ];
});
