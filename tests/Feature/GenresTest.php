<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GenresTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testList()
    {
        $this->get('/api/genres')
             ->assertJson([
                'genres' => true,
             ]);
    }

    public function testGenreById()
    {
        $this->get('/api/genres?id=28')
             ->assertJson([
                'genres' => true,
             ]);
    }
}
