<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();

        return [
            'user_id' => \App\Models\User::all()->random()->id,
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => $this->getRandom($this->images()),
            'body' => $this->faker->paragraph(),
        ];
    }

    protected function images()
    {
        return [
            'https://images.unsplash.com/photo-1648737119359-510d4f551382?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60',

            'https://images.unsplash.com/photo-1654300969959-5647c2362ace?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60',

            'https://images.unsplash.com/photo-1654371410048-11dd9517216e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60',

            'https://images.unsplash.com/photo-1654311528153-2771599c77dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxOXx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60',

            'https://images.unsplash.com/photo-1654336366779-8024c0cc2f73?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4M3x8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60',

            'https://images.unsplash.com/photo-1654290605664-18ea00341ceb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw5MXx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60',

            'https://images.unsplash.com/photo-1654267289447-62a7eaac6a60?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMTF8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60',
        ];
    }

    protected function getRandom($array) {
        return $array[array_rand($array)];
    }
}
