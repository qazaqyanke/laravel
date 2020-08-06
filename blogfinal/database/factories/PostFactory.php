<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker){
    return array(
        'author_id'=>factory(User::class),

        'title'=>$faker->sentence,

        'description'=>$faker->text,

        'likes'=>rand(0, 200),
    );
});





