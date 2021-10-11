<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DiaTest extends TestCase
{
    /**
     * A basic feature test_dia.
     *
     * @return void
     */
    public function test_dia()
    {
        $response = $this->get('api/dia/2021-10-11');

        $response->assertStatus(200);
    }
}
