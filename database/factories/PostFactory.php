<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;




class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(15),
            'body' => $this->faker->paragraph(50)
        ];
    }
}
