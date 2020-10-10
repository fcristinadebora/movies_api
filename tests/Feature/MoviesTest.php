<?php

namespace Tests\Feature;

use Tests\TestCase;

class UpcomingMoviesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpcomingList()
    {
        $this->get('/api/movies/upcoming')
             ->assertJson([
                'results' => true,
             ]);
    }

    public function testUpcomingListWithPage()
    {
        $this->get('/api/movies/upcoming?page=2')
             ->assertJson([
                'page' => '2',
             ]);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTopRated()
    {
        $this->get('/api/movies/top-rated')
             ->assertJson([
                'results' => true,
             ]);
    }

    public function testTopRatedWithPage()
    {
        $this->get('/api/movies/top-rated?page=2')
             ->assertJson([
                'page' => '2',
             ]);
    }

    public function testDetails()
    {
        $this->get('/api/movies/13')
             ->assertJson([
                'related' => true,
             ]);
    }
}
