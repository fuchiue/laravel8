<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Article::class;

    public function definition()
    {
        return [
            "title" => $this->faker->realText( 20 ),
            "body" => $this->faker->realText( 200 ),
            "created_at" => $this->faker->dateTime( "now" ),

        ];
    }
}
