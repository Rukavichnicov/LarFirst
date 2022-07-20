<?php

namespace Database\Factories\Blog;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence(rand(3, 8));
        $txt = fake()->realText(rand(1000, 4000));
        $isPublished = rand(1, 5) > 1;
        $createdAd = fake()->dateTimeBetween('-3 months', '-2 months');

        return [
            'category_id' => rand(1, 10),
            'user_id' => rand(1, 5) === 5 ? 1 : 2,
            'slug' => Str::slug($title),
            'title' => $title,
            'excerpt' => fake()->text(rand(40, 100)),
            'content_raw' => $txt,
            'content_html' => $txt,
            'is_published' => $isPublished,
            'published_at' => $isPublished ? fake()->dateTimeBetween('-2 months', '-1 days') : null,
            'created_at' => $createdAd,
            'updated_at' => $createdAd,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
