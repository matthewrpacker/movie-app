<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testUnauthenticatedUserGETMovies()
     {
          $user = factory(User::class)->create();
          $response = $this->get('/movies');
          $uri = 'http://localhost/login';
          $response->assertRedirect($uri);
     }

     public function testAuthenticatedUserGETMovies()
     {
          $user = factory(User::class)->create();
          $response = $this->actingAs($user)->get('/movies');
          $response->assertStatus(200);
     }

     public function testUserGETAPIMovies()
     {
          $response = $this->json('GET', 'api/movies');
          $response
              ->assertStatus(200)
              ->assertJsonCount(5, $key = 'data');
     }
}
