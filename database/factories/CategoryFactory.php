<?php
/**
 * Created by PhpStorm.
 * User: botosoftdev
 * Date: 15/10/2018
 * Time: 11:14 AM
 */

use Faker\Generator as Faker;

$factory->define(\App\Category::class,function (Faker $faker){


    return [
        'name' => $faker->name
    ];

});