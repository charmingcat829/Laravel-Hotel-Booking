<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HotelsTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function a_user_can_view_all_hotels()
    {
        $hotel = factory('App\Hotel')->create();
        $response = $this->get('/hotels');

        $response->assertSee($hotel->name);
    }

    /** @test  */
    public function a_user_can_view_a_specific_hotel()
    {
        $hotel = factory('App\Hotel')->create();
        $response = $this->get('/hotels/' . $hotel->id);

        $response->assertSee($hotel->name);
    }
}
